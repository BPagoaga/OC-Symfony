<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_650ad8804c6cf2bbbab5f4d3736212cc3f81c8012ff046b5f704bb7b6b872233 extends Twig_Template
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
        $__internal_00bfe2e7053ef8e39f28ab57e476d51f481128255dd655de3af9b758c2f0f845 = $this->env->getExtension("native_profiler");
        $__internal_00bfe2e7053ef8e39f28ab57e476d51f481128255dd655de3af9b758c2f0f845->enter($__internal_00bfe2e7053ef8e39f28ab57e476d51f481128255dd655de3af9b758c2f0f845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_00bfe2e7053ef8e39f28ab57e476d51f481128255dd655de3af9b758c2f0f845->leave($__internal_00bfe2e7053ef8e39f28ab57e476d51f481128255dd655de3af9b758c2f0f845_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
