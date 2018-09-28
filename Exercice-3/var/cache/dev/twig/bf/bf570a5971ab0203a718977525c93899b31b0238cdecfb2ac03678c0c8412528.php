<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ecf5fb9e7c6184c48da447e095146f6431fe00393e80f7c5de301389bb2ce894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_730704afc65aeb778f9c8e6894a310934f9af3a173a6d1f09832bc6272f745ba = $this->env->getExtension("native_profiler");
        $__internal_730704afc65aeb778f9c8e6894a310934f9af3a173a6d1f09832bc6272f745ba->enter($__internal_730704afc65aeb778f9c8e6894a310934f9af3a173a6d1f09832bc6272f745ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_730704afc65aeb778f9c8e6894a310934f9af3a173a6d1f09832bc6272f745ba->leave($__internal_730704afc65aeb778f9c8e6894a310934f9af3a173a6d1f09832bc6272f745ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
