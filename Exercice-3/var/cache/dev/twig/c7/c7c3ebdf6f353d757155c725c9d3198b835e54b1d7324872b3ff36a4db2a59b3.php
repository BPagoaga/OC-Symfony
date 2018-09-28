<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c1342c19345b413f5cb1f552686af7dd9d3aa4de9a6cfb6fb924fd2cf8a2445f extends Twig_Template
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
        $__internal_b6881d49ee4c0b983e127a763ffb8ab2f2c45a35fb0e89e09fc10bf2b3fd58df = $this->env->getExtension("native_profiler");
        $__internal_b6881d49ee4c0b983e127a763ffb8ab2f2c45a35fb0e89e09fc10bf2b3fd58df->enter($__internal_b6881d49ee4c0b983e127a763ffb8ab2f2c45a35fb0e89e09fc10bf2b3fd58df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b6881d49ee4c0b983e127a763ffb8ab2f2c45a35fb0e89e09fc10bf2b3fd58df->leave($__internal_b6881d49ee4c0b983e127a763ffb8ab2f2c45a35fb0e89e09fc10bf2b3fd58df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
