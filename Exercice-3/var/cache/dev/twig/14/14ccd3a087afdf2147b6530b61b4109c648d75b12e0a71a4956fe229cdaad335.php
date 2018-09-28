<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9a91ba37a1173ad2d3261bbb3ea84ce4da71869b3374907c85b8b16bc6242404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bc5740c960a0ced385fec48c88635755be573e68fffa43a4d801426608efa943 = $this->env->getExtension("native_profiler");
        $__internal_bc5740c960a0ced385fec48c88635755be573e68fffa43a4d801426608efa943->enter($__internal_bc5740c960a0ced385fec48c88635755be573e68fffa43a4d801426608efa943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5740c960a0ced385fec48c88635755be573e68fffa43a4d801426608efa943->leave($__internal_bc5740c960a0ced385fec48c88635755be573e68fffa43a4d801426608efa943_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5645c773ba955cbc282673988a695c9aaab8df6fe8b2b21c5f380bc3f7266e45 = $this->env->getExtension("native_profiler");
        $__internal_5645c773ba955cbc282673988a695c9aaab8df6fe8b2b21c5f380bc3f7266e45->enter($__internal_5645c773ba955cbc282673988a695c9aaab8df6fe8b2b21c5f380bc3f7266e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5645c773ba955cbc282673988a695c9aaab8df6fe8b2b21c5f380bc3f7266e45->leave($__internal_5645c773ba955cbc282673988a695c9aaab8df6fe8b2b21c5f380bc3f7266e45_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7932b2fe15bb7d5b7bd5d9e1466478a1168b5edcd852f71dd03cfcdc22b3666 = $this->env->getExtension("native_profiler");
        $__internal_a7932b2fe15bb7d5b7bd5d9e1466478a1168b5edcd852f71dd03cfcdc22b3666->enter($__internal_a7932b2fe15bb7d5b7bd5d9e1466478a1168b5edcd852f71dd03cfcdc22b3666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7932b2fe15bb7d5b7bd5d9e1466478a1168b5edcd852f71dd03cfcdc22b3666->leave($__internal_a7932b2fe15bb7d5b7bd5d9e1466478a1168b5edcd852f71dd03cfcdc22b3666_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf9955f55a671fcfa30a95a48db8c1722e0d43e3a52605b3b213e04bb293dd30 = $this->env->getExtension("native_profiler");
        $__internal_cf9955f55a671fcfa30a95a48db8c1722e0d43e3a52605b3b213e04bb293dd30->enter($__internal_cf9955f55a671fcfa30a95a48db8c1722e0d43e3a52605b3b213e04bb293dd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cf9955f55a671fcfa30a95a48db8c1722e0d43e3a52605b3b213e04bb293dd30->leave($__internal_cf9955f55a671fcfa30a95a48db8c1722e0d43e3a52605b3b213e04bb293dd30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
