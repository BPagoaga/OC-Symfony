<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_a542f75e22b39b66ee7f2e07ec7be2423897ebf83acb5d9d10726954e8ee4af2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d47400ae6791375f0346dbd06f18ff6face2a854899ddfc368c4e851d7b2c8f = $this->env->getExtension("native_profiler");
        $__internal_4d47400ae6791375f0346dbd06f18ff6face2a854899ddfc368c4e851d7b2c8f->enter($__internal_4d47400ae6791375f0346dbd06f18ff6face2a854899ddfc368c4e851d7b2c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d47400ae6791375f0346dbd06f18ff6face2a854899ddfc368c4e851d7b2c8f->leave($__internal_4d47400ae6791375f0346dbd06f18ff6face2a854899ddfc368c4e851d7b2c8f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0323c3cf0e942150bbfc2a8ff7faadc7cdb191520339e7323b27213ac629b5f6 = $this->env->getExtension("native_profiler");
        $__internal_0323c3cf0e942150bbfc2a8ff7faadc7cdb191520339e7323b27213ac629b5f6->enter($__internal_0323c3cf0e942150bbfc2a8ff7faadc7cdb191520339e7323b27213ac629b5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_0323c3cf0e942150bbfc2a8ff7faadc7cdb191520339e7323b27213ac629b5f6->leave($__internal_0323c3cf0e942150bbfc2a8ff7faadc7cdb191520339e7323b27213ac629b5f6_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
