<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_5eadad3192070f585bae756229a68f62b4669fd37608613379c1fc60cb03be9c extends Twig_Template
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
        $__internal_f5bdad4653c5d02ea3ab0dd47d3a3d89a7bacaf3037b480c7aef893a57ac96f6 = $this->env->getExtension("native_profiler");
        $__internal_f5bdad4653c5d02ea3ab0dd47d3a3d89a7bacaf3037b480c7aef893a57ac96f6->enter($__internal_f5bdad4653c5d02ea3ab0dd47d3a3d89a7bacaf3037b480c7aef893a57ac96f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f5bdad4653c5d02ea3ab0dd47d3a3d89a7bacaf3037b480c7aef893a57ac96f6->leave($__internal_f5bdad4653c5d02ea3ab0dd47d3a3d89a7bacaf3037b480c7aef893a57ac96f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
