<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9f56182c47fba242e8865806f61b81628fb5dd6c420959d3e4e40ce21a175ccf extends Twig_Template
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
        $__internal_f4957dd16cf718d85053a0287b2c04addda04d1338a9dec4e3fd94cccf8412d8 = $this->env->getExtension("native_profiler");
        $__internal_f4957dd16cf718d85053a0287b2c04addda04d1338a9dec4e3fd94cccf8412d8->enter($__internal_f4957dd16cf718d85053a0287b2c04addda04d1338a9dec4e3fd94cccf8412d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f4957dd16cf718d85053a0287b2c04addda04d1338a9dec4e3fd94cccf8412d8->leave($__internal_f4957dd16cf718d85053a0287b2c04addda04d1338a9dec4e3fd94cccf8412d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
