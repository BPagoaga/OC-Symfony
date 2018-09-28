<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_fbac828734543096424d39daa12a4fe27ae78e917d7a32b0f06dcc28987d1734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a22f76660a1cb321102faacc15387bb570aa55e675646d363d38797b75766ec = $this->env->getExtension("native_profiler");
        $__internal_3a22f76660a1cb321102faacc15387bb570aa55e675646d363d38797b75766ec->enter($__internal_3a22f76660a1cb321102faacc15387bb570aa55e675646d363d38797b75766ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a22f76660a1cb321102faacc15387bb570aa55e675646d363d38797b75766ec->leave($__internal_3a22f76660a1cb321102faacc15387bb570aa55e675646d363d38797b75766ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6ef1a80acdac04736720ad810fa696d166339fba54ca0872a2f1548f260b25e = $this->env->getExtension("native_profiler");
        $__internal_c6ef1a80acdac04736720ad810fa696d166339fba54ca0872a2f1548f260b25e->enter($__internal_c6ef1a80acdac04736720ad810fa696d166339fba54ca0872a2f1548f260b25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c6ef1a80acdac04736720ad810fa696d166339fba54ca0872a2f1548f260b25e->leave($__internal_c6ef1a80acdac04736720ad810fa696d166339fba54ca0872a2f1548f260b25e_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e648c77205f4a080aac47a2d0ed81371c69e2286e2b8e434c530f745e5ac6340 = $this->env->getExtension("native_profiler");
        $__internal_e648c77205f4a080aac47a2d0ed81371c69e2286e2b8e434c530f745e5ac6340->enter($__internal_e648c77205f4a080aac47a2d0ed81371c69e2286e2b8e434c530f745e5ac6340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_e648c77205f4a080aac47a2d0ed81371c69e2286e2b8e434c530f745e5ac6340->leave($__internal_e648c77205f4a080aac47a2d0ed81371c69e2286e2b8e434c530f745e5ac6340_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
