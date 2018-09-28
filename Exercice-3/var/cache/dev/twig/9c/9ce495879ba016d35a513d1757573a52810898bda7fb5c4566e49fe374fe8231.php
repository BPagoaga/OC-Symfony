<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f19225711325daa3c7f6dfae6f40e8a6dd2c77b7f542339d6abc0fd3c917e34b extends Twig_Template
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
        $__internal_941676670994880ff7fbf4005b20e7f07f76d81dbef0e74e6d60fc126dd1982d = $this->env->getExtension("native_profiler");
        $__internal_941676670994880ff7fbf4005b20e7f07f76d81dbef0e74e6d60fc126dd1982d->enter($__internal_941676670994880ff7fbf4005b20e7f07f76d81dbef0e74e6d60fc126dd1982d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_941676670994880ff7fbf4005b20e7f07f76d81dbef0e74e6d60fc126dd1982d->leave($__internal_941676670994880ff7fbf4005b20e7f07f76d81dbef0e74e6d60fc126dd1982d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
