<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_73b2b47a5a159aa2ba20dcdd83696b4a470fac88180dae3907862d02ad84e6d7 extends Twig_Template
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
        $__internal_7f7c86c3b0f199a0bc2fb1330e75c959d86b3668b30bd7850a546e5fc152851b = $this->env->getExtension("native_profiler");
        $__internal_7f7c86c3b0f199a0bc2fb1330e75c959d86b3668b30bd7850a546e5fc152851b->enter($__internal_7f7c86c3b0f199a0bc2fb1330e75c959d86b3668b30bd7850a546e5fc152851b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7f7c86c3b0f199a0bc2fb1330e75c959d86b3668b30bd7850a546e5fc152851b->leave($__internal_7f7c86c3b0f199a0bc2fb1330e75c959d86b3668b30bd7850a546e5fc152851b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */