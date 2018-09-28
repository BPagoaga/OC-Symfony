<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c97f3455e2b433c52c920db75cfd6352f6f9069e24934549af7de3159b676dfe extends Twig_Template
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
        $__internal_03f45ddcbdec29159a2c28a952b7595f74cd90919e9b6c8a490a3ce4a0e80c50 = $this->env->getExtension("native_profiler");
        $__internal_03f45ddcbdec29159a2c28a952b7595f74cd90919e9b6c8a490a3ce4a0e80c50->enter($__internal_03f45ddcbdec29159a2c28a952b7595f74cd90919e9b6c8a490a3ce4a0e80c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_03f45ddcbdec29159a2c28a952b7595f74cd90919e9b6c8a490a3ce4a0e80c50->leave($__internal_03f45ddcbdec29159a2c28a952b7595f74cd90919e9b6c8a490a3ce4a0e80c50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
