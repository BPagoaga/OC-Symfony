<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b19cbb36ea7348ef1246e0b14e7ab7c5f327d1f1e6aaefc11ade3d70a8a75603 extends Twig_Template
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
        $__internal_f15eae9d83eba7f27780000742d736181c75ec7ae56745a740319ed076e1c3cb = $this->env->getExtension("native_profiler");
        $__internal_f15eae9d83eba7f27780000742d736181c75ec7ae56745a740319ed076e1c3cb->enter($__internal_f15eae9d83eba7f27780000742d736181c75ec7ae56745a740319ed076e1c3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f15eae9d83eba7f27780000742d736181c75ec7ae56745a740319ed076e1c3cb->leave($__internal_f15eae9d83eba7f27780000742d736181c75ec7ae56745a740319ed076e1c3cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
