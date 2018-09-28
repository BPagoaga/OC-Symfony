<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0f1753a6ad3b8bc3da76510bfefb700678ca073f8bddc33e6e2db27b4e656654 extends Twig_Template
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
        $__internal_60155beddbcdde946a73d8f906e0b179bd2625110bc7c7a00f42ddd195c847a4 = $this->env->getExtension("native_profiler");
        $__internal_60155beddbcdde946a73d8f906e0b179bd2625110bc7c7a00f42ddd195c847a4->enter($__internal_60155beddbcdde946a73d8f906e0b179bd2625110bc7c7a00f42ddd195c847a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_60155beddbcdde946a73d8f906e0b179bd2625110bc7c7a00f42ddd195c847a4->leave($__internal_60155beddbcdde946a73d8f906e0b179bd2625110bc7c7a00f42ddd195c847a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
