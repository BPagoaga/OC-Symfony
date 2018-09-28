<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9808936b0a82faf5f035bb5642828077e4c10dd127f054658ba1071a8da084b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2834d4840f253928ee9aaad63c413265d7bf61c2e7a7b4f9355647e0b60df9ac = $this->env->getExtension("native_profiler");
        $__internal_2834d4840f253928ee9aaad63c413265d7bf61c2e7a7b4f9355647e0b60df9ac->enter($__internal_2834d4840f253928ee9aaad63c413265d7bf61c2e7a7b4f9355647e0b60df9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2834d4840f253928ee9aaad63c413265d7bf61c2e7a7b4f9355647e0b60df9ac->leave($__internal_2834d4840f253928ee9aaad63c413265d7bf61c2e7a7b4f9355647e0b60df9ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10e93c2875999c580738990db10c12800b163af852b2b6565a0c495ce49082b0 = $this->env->getExtension("native_profiler");
        $__internal_10e93c2875999c580738990db10c12800b163af852b2b6565a0c495ce49082b0->enter($__internal_10e93c2875999c580738990db10c12800b163af852b2b6565a0c495ce49082b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_10e93c2875999c580738990db10c12800b163af852b2b6565a0c495ce49082b0->leave($__internal_10e93c2875999c580738990db10c12800b163af852b2b6565a0c495ce49082b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee4ca0061df154dc2e678a047797f668c9f88df9a689e3e16a33eab471b56e0f = $this->env->getExtension("native_profiler");
        $__internal_ee4ca0061df154dc2e678a047797f668c9f88df9a689e3e16a33eab471b56e0f->enter($__internal_ee4ca0061df154dc2e678a047797f668c9f88df9a689e3e16a33eab471b56e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ee4ca0061df154dc2e678a047797f668c9f88df9a689e3e16a33eab471b56e0f->leave($__internal_ee4ca0061df154dc2e678a047797f668c9f88df9a689e3e16a33eab471b56e0f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
