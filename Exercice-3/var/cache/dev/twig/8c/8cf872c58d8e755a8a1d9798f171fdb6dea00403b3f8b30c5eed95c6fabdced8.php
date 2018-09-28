<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dc0a51ecceeedbf1497d842ce3fcf6774938cf52d561b618bddb3f992b24cab2 extends Twig_Template
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
        $__internal_7683d6193b66b27b78e0718500f8e9b6b34cf652a31a3245f3e7f9929cfbddec = $this->env->getExtension("native_profiler");
        $__internal_7683d6193b66b27b78e0718500f8e9b6b34cf652a31a3245f3e7f9929cfbddec->enter($__internal_7683d6193b66b27b78e0718500f8e9b6b34cf652a31a3245f3e7f9929cfbddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7683d6193b66b27b78e0718500f8e9b6b34cf652a31a3245f3e7f9929cfbddec->leave($__internal_7683d6193b66b27b78e0718500f8e9b6b34cf652a31a3245f3e7f9929cfbddec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
