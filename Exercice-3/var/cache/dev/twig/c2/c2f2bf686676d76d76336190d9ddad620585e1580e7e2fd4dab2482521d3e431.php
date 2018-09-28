<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a92f568f91b2374e7f62409a4c738c61d7fd031151262c6ab3803930264dfc86 extends Twig_Template
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
        $__internal_fa2ee78317847ee6b1122dacc39e80659309a8ab84825520ae17fb8b69d7f150 = $this->env->getExtension("native_profiler");
        $__internal_fa2ee78317847ee6b1122dacc39e80659309a8ab84825520ae17fb8b69d7f150->enter($__internal_fa2ee78317847ee6b1122dacc39e80659309a8ab84825520ae17fb8b69d7f150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fa2ee78317847ee6b1122dacc39e80659309a8ab84825520ae17fb8b69d7f150->leave($__internal_fa2ee78317847ee6b1122dacc39e80659309a8ab84825520ae17fb8b69d7f150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
