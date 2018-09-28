<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_07ba1411e2793af08180b36f2ca128049459a4e92d40445c33a6dc0e1c6926a8 extends Twig_Template
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
        $__internal_34b5e76846a7e9d12a0066c38a7ae17dd3ed0ba7c020d789fb886fb696cd8d4f = $this->env->getExtension("native_profiler");
        $__internal_34b5e76846a7e9d12a0066c38a7ae17dd3ed0ba7c020d789fb886fb696cd8d4f->enter($__internal_34b5e76846a7e9d12a0066c38a7ae17dd3ed0ba7c020d789fb886fb696cd8d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_34b5e76846a7e9d12a0066c38a7ae17dd3ed0ba7c020d789fb886fb696cd8d4f->leave($__internal_34b5e76846a7e9d12a0066c38a7ae17dd3ed0ba7c020d789fb886fb696cd8d4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
