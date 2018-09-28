<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7db1424ef21ef0f2c6447f6b45604c8eb0001f5b98cb1354282385f129084c9b extends Twig_Template
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
        $__internal_fa1747a608d5334e0870e7df391aaa6e43689eaeb4cfea9000c3365908e34c63 = $this->env->getExtension("native_profiler");
        $__internal_fa1747a608d5334e0870e7df391aaa6e43689eaeb4cfea9000c3365908e34c63->enter($__internal_fa1747a608d5334e0870e7df391aaa6e43689eaeb4cfea9000c3365908e34c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fa1747a608d5334e0870e7df391aaa6e43689eaeb4cfea9000c3365908e34c63->leave($__internal_fa1747a608d5334e0870e7df391aaa6e43689eaeb4cfea9000c3365908e34c63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
