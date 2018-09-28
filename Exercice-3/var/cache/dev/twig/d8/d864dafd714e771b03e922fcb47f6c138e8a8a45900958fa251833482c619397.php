<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0130d2420b11cb96fe7196333f19a117655613db8e8365dd152cffb59e85b284 extends Twig_Template
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
        $__internal_afcc6d8e6add8bd08cbc46246bc11c30c57139abc5c66739c22b5d2add6ef77c = $this->env->getExtension("native_profiler");
        $__internal_afcc6d8e6add8bd08cbc46246bc11c30c57139abc5c66739c22b5d2add6ef77c->enter($__internal_afcc6d8e6add8bd08cbc46246bc11c30c57139abc5c66739c22b5d2add6ef77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_afcc6d8e6add8bd08cbc46246bc11c30c57139abc5c66739c22b5d2add6ef77c->leave($__internal_afcc6d8e6add8bd08cbc46246bc11c30c57139abc5c66739c22b5d2add6ef77c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
