<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ee50b83658f85678bea5fb804b1a45f32089debecffe9fc60de9250ad194e263 extends Twig_Template
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
        $__internal_885231167e06e523614fd6d5f61a54f2a67f634034b4331f4ce42319038371fa = $this->env->getExtension("native_profiler");
        $__internal_885231167e06e523614fd6d5f61a54f2a67f634034b4331f4ce42319038371fa->enter($__internal_885231167e06e523614fd6d5f61a54f2a67f634034b4331f4ce42319038371fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_885231167e06e523614fd6d5f61a54f2a67f634034b4331f4ce42319038371fa->leave($__internal_885231167e06e523614fd6d5f61a54f2a67f634034b4331f4ce42319038371fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
