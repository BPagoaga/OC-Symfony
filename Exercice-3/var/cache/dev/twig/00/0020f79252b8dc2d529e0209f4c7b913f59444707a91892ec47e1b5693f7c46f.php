<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3365dac01a3fb97da60ba76eb5565f8bbdf2406491fa7c4de225a6ea7c4f6f1b extends Twig_Template
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
        $__internal_fe041b74d4dac269417e3e58e5bcaea4850e141f701f775955384bc5010d7fd2 = $this->env->getExtension("native_profiler");
        $__internal_fe041b74d4dac269417e3e58e5bcaea4850e141f701f775955384bc5010d7fd2->enter($__internal_fe041b74d4dac269417e3e58e5bcaea4850e141f701f775955384bc5010d7fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fe041b74d4dac269417e3e58e5bcaea4850e141f701f775955384bc5010d7fd2->leave($__internal_fe041b74d4dac269417e3e58e5bcaea4850e141f701f775955384bc5010d7fd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
