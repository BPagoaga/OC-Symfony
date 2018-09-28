<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_38e03e39bf1e51ef241db3e1ac9162a9115d371dcef34c2dd298a6722c0615ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4295c527ac5ffa3ba22ee441cd63b245591d78b14ae9117c93ee4f28e4152905 = $this->env->getExtension("native_profiler");
        $__internal_4295c527ac5ffa3ba22ee441cd63b245591d78b14ae9117c93ee4f28e4152905->enter($__internal_4295c527ac5ffa3ba22ee441cd63b245591d78b14ae9117c93ee4f28e4152905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4295c527ac5ffa3ba22ee441cd63b245591d78b14ae9117c93ee4f28e4152905->leave($__internal_4295c527ac5ffa3ba22ee441cd63b245591d78b14ae9117c93ee4f28e4152905_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6444a38ff822333a72f8ef32586bfe2bd98614434141ce477afc49a4d00905ef = $this->env->getExtension("native_profiler");
        $__internal_6444a38ff822333a72f8ef32586bfe2bd98614434141ce477afc49a4d00905ef->enter($__internal_6444a38ff822333a72f8ef32586bfe2bd98614434141ce477afc49a4d00905ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6444a38ff822333a72f8ef32586bfe2bd98614434141ce477afc49a4d00905ef->leave($__internal_6444a38ff822333a72f8ef32586bfe2bd98614434141ce477afc49a4d00905ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5009260dd21f141b1faaab0011c0847d73a86fd0c343d16707bf1fd0a67f36f0 = $this->env->getExtension("native_profiler");
        $__internal_5009260dd21f141b1faaab0011c0847d73a86fd0c343d16707bf1fd0a67f36f0->enter($__internal_5009260dd21f141b1faaab0011c0847d73a86fd0c343d16707bf1fd0a67f36f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5009260dd21f141b1faaab0011c0847d73a86fd0c343d16707bf1fd0a67f36f0->leave($__internal_5009260dd21f141b1faaab0011c0847d73a86fd0c343d16707bf1fd0a67f36f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48b97013cc0d29d55f14afaa0998ddd5dd34bb6cdef712de8e43d89cbd96d215 = $this->env->getExtension("native_profiler");
        $__internal_48b97013cc0d29d55f14afaa0998ddd5dd34bb6cdef712de8e43d89cbd96d215->enter($__internal_48b97013cc0d29d55f14afaa0998ddd5dd34bb6cdef712de8e43d89cbd96d215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48b97013cc0d29d55f14afaa0998ddd5dd34bb6cdef712de8e43d89cbd96d215->leave($__internal_48b97013cc0d29d55f14afaa0998ddd5dd34bb6cdef712de8e43d89cbd96d215_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
