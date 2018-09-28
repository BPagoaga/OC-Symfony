<?php

namespace OC\PlatformBundle\Purge;

use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Application;
use Doctrine\ORM\EntityManager;

class OCPurgeAdverts
{
    private $_em;

    public function __construct(EntityManager $em)
    {
        $this->_em = $em;
    }

    /**
     * Purge les annonces inutiles
     *
     * @param integer $days
     * @return bool
     */
    public function purge($days)
    {
        if (!$days = intval($days)) {
            throw new Exception("Jours doit être un nombre");
        }

        $repository = $_em->getRepository('OCPlatformBundle:Advert');
        $date = new \DateTime('now');
        $date->sub(new DateInterval('P' . $days . 'D'));
        $date->format('Y-m-d');

        // récupérer les annonces sans candidatures dont la date de modif est supérieure à x jours
        $unusedAdverts = $repository->findUnusedAdverts($date);
        // delete ces annonces
        foreach ($unusedAdverts as $key => $advert) {
            $this->_em->remove($advert);
        }

        $this->_em->flush();
    }
}