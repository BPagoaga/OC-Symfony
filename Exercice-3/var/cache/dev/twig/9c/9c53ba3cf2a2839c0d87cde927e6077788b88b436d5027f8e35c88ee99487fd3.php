<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_92b32781cb3022ba3fa3a4eefbaa2e2b3591d4f8f0d1ee7050154aebf8b84568 extends Twig_Template
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
        $__internal_55a02c6620b62acdaa6d9794f648930a631bdd1125e444a07cc1a8c9193a6d53 = $this->env->getExtension("native_profiler");
        $__internal_55a02c6620b62acdaa6d9794f648930a631bdd1125e444a07cc1a8c9193a6d53->enter($__internal_55a02c6620b62acdaa6d9794f648930a631bdd1125e444a07cc1a8c9193a6d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_55a02c6620b62acdaa6d9794f648930a631bdd1125e444a07cc1a8c9193a6d53->leave($__internal_55a02c6620b62acdaa6d9794f648930a631bdd1125e444a07cc1a8c9193a6d53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
