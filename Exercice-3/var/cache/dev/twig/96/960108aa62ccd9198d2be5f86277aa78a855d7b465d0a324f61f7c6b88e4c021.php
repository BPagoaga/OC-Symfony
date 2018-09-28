<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ccf641f55ad42eb9c3cf944958878306ba22f26c56792cd7ab486cac6d8ae564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7636bd70db8049f0eebe419c554d9d62ea25ffb70034018bf1b758c4723004b = $this->env->getExtension("native_profiler");
        $__internal_f7636bd70db8049f0eebe419c554d9d62ea25ffb70034018bf1b758c4723004b->enter($__internal_f7636bd70db8049f0eebe419c554d9d62ea25ffb70034018bf1b758c4723004b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f7636bd70db8049f0eebe419c554d9d62ea25ffb70034018bf1b758c4723004b->leave($__internal_f7636bd70db8049f0eebe419c554d9d62ea25ffb70034018bf1b758c4723004b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9d6dc294222f51ac38f2e598a4c260171ab0881497abb08d0b068ea5db768a9 = $this->env->getExtension("native_profiler");
        $__internal_b9d6dc294222f51ac38f2e598a4c260171ab0881497abb08d0b068ea5db768a9->enter($__internal_b9d6dc294222f51ac38f2e598a4c260171ab0881497abb08d0b068ea5db768a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b9d6dc294222f51ac38f2e598a4c260171ab0881497abb08d0b068ea5db768a9->leave($__internal_b9d6dc294222f51ac38f2e598a4c260171ab0881497abb08d0b068ea5db768a9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
