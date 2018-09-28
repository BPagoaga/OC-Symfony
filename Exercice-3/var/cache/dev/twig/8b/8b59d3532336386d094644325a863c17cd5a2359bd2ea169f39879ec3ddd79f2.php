<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a19c691e77f0ace6bf4dbf62e8bbe39b44f4b020e69583e5afcb19f142e4e561 extends Twig_Template
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
        $__internal_739f5946d95826a7e025772982743102196fb1ac0cbbe51bd11c9c8858c8fd7a = $this->env->getExtension("native_profiler");
        $__internal_739f5946d95826a7e025772982743102196fb1ac0cbbe51bd11c9c8858c8fd7a->enter($__internal_739f5946d95826a7e025772982743102196fb1ac0cbbe51bd11c9c8858c8fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_739f5946d95826a7e025772982743102196fb1ac0cbbe51bd11c9c8858c8fd7a->leave($__internal_739f5946d95826a7e025772982743102196fb1ac0cbbe51bd11c9c8858c8fd7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
