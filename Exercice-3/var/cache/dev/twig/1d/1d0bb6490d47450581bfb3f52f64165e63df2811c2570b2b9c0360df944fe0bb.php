<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3bf575ce6c52f512b4025c4e7535ab329d01dc65db3f860ee6493f1f569e561b extends Twig_Template
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
        $__internal_42ca6a21c24094852cc63558ecbb24450b9809ae4c6a3c75615b7dcbc0c77fc2 = $this->env->getExtension("native_profiler");
        $__internal_42ca6a21c24094852cc63558ecbb24450b9809ae4c6a3c75615b7dcbc0c77fc2->enter($__internal_42ca6a21c24094852cc63558ecbb24450b9809ae4c6a3c75615b7dcbc0c77fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_42ca6a21c24094852cc63558ecbb24450b9809ae4c6a3c75615b7dcbc0c77fc2->leave($__internal_42ca6a21c24094852cc63558ecbb24450b9809ae4c6a3c75615b7dcbc0c77fc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
