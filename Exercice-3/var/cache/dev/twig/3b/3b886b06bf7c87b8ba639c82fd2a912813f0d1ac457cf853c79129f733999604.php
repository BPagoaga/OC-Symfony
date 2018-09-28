<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fcd7f951207c40602c6e214547daad48e2312271682fbaa43346967a9d7e1741 extends Twig_Template
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
        $__internal_c6f9a8ab002e029525abf6f014b36983fcd389672f4c25de2e57ea8031e37829 = $this->env->getExtension("native_profiler");
        $__internal_c6f9a8ab002e029525abf6f014b36983fcd389672f4c25de2e57ea8031e37829->enter($__internal_c6f9a8ab002e029525abf6f014b36983fcd389672f4c25de2e57ea8031e37829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c6f9a8ab002e029525abf6f014b36983fcd389672f4c25de2e57ea8031e37829->leave($__internal_c6f9a8ab002e029525abf6f014b36983fcd389672f4c25de2e57ea8031e37829_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
