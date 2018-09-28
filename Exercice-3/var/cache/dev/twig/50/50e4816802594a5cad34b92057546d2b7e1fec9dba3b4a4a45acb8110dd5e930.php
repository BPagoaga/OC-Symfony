<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b386eb8b227ba00ab73568e9d1b5d9b33e869c203e2f906709fbeafe7c85992e extends Twig_Template
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
        $__internal_8bd8bee7b6e3084edb1e0e10a6b2a52f08acde042722c5b0f031342f7499324e = $this->env->getExtension("native_profiler");
        $__internal_8bd8bee7b6e3084edb1e0e10a6b2a52f08acde042722c5b0f031342f7499324e->enter($__internal_8bd8bee7b6e3084edb1e0e10a6b2a52f08acde042722c5b0f031342f7499324e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8bd8bee7b6e3084edb1e0e10a6b2a52f08acde042722c5b0f031342f7499324e->leave($__internal_8bd8bee7b6e3084edb1e0e10a6b2a52f08acde042722c5b0f031342f7499324e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
