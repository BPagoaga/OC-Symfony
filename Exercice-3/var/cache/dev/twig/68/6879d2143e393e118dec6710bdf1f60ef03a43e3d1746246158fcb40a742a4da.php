<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d82191b5decbe35d5926c0be397305bea2bc216d662ddcffbb73272d4c86bf3f extends Twig_Template
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
        $__internal_7d8c053caa494d5064fcb3c981fae5ea111ae58a530d1cedca05d4ecc5589c87 = $this->env->getExtension("native_profiler");
        $__internal_7d8c053caa494d5064fcb3c981fae5ea111ae58a530d1cedca05d4ecc5589c87->enter($__internal_7d8c053caa494d5064fcb3c981fae5ea111ae58a530d1cedca05d4ecc5589c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7d8c053caa494d5064fcb3c981fae5ea111ae58a530d1cedca05d4ecc5589c87->leave($__internal_7d8c053caa494d5064fcb3c981fae5ea111ae58a530d1cedca05d4ecc5589c87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
