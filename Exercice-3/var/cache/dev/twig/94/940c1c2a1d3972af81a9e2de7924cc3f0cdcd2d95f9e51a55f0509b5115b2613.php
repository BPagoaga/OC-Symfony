<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_8424354226bc611f7837e32caceeffaa6cdc51f35d189c52cfd46072614d1296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe7d1289ff8a9da6aaa118881d2cdb07a22e421bc72313abd70b31d099c36218 = $this->env->getExtension("native_profiler");
        $__internal_fe7d1289ff8a9da6aaa118881d2cdb07a22e421bc72313abd70b31d099c36218->enter($__internal_fe7d1289ff8a9da6aaa118881d2cdb07a22e421bc72313abd70b31d099c36218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe7d1289ff8a9da6aaa118881d2cdb07a22e421bc72313abd70b31d099c36218->leave($__internal_fe7d1289ff8a9da6aaa118881d2cdb07a22e421bc72313abd70b31d099c36218_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_326e63fa19ae3f4134cc38eb2b4a6dc30116413d875d4d38e59dbee2be602b2c = $this->env->getExtension("native_profiler");
        $__internal_326e63fa19ae3f4134cc38eb2b4a6dc30116413d875d4d38e59dbee2be602b2c->enter($__internal_326e63fa19ae3f4134cc38eb2b4a6dc30116413d875d4d38e59dbee2be602b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_326e63fa19ae3f4134cc38eb2b4a6dc30116413d875d4d38e59dbee2be602b2c->leave($__internal_326e63fa19ae3f4134cc38eb2b4a6dc30116413d875d4d38e59dbee2be602b2c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_edfaa9e16346303a7dc6de3646abde776a3779ab3c3d0e99952aa146ddbf756d = $this->env->getExtension("native_profiler");
        $__internal_edfaa9e16346303a7dc6de3646abde776a3779ab3c3d0e99952aa146ddbf756d->enter($__internal_edfaa9e16346303a7dc6de3646abde776a3779ab3c3d0e99952aa146ddbf756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_edfaa9e16346303a7dc6de3646abde776a3779ab3c3d0e99952aa146ddbf756d->leave($__internal_edfaa9e16346303a7dc6de3646abde776a3779ab3c3d0e99952aa146ddbf756d_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_89d4ceae1696dd896d294a4f0aea2beeb281a406a91dab3d9f80e61369141b99 = $this->env->getExtension("native_profiler");
        $__internal_89d4ceae1696dd896d294a4f0aea2beeb281a406a91dab3d9f80e61369141b99->enter($__internal_89d4ceae1696dd896d294a4f0aea2beeb281a406a91dab3d9f80e61369141b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_89d4ceae1696dd896d294a4f0aea2beeb281a406a91dab3d9f80e61369141b99->leave($__internal_89d4ceae1696dd896d294a4f0aea2beeb281a406a91dab3d9f80e61369141b99_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
