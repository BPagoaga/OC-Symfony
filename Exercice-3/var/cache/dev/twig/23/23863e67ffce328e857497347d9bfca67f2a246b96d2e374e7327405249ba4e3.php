<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e68541c3089b68081cc576eb79748666c6800d54a550071b9ba4d92a93b44258 extends Twig_Template
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
        $__internal_8185ab598677cd3f96eea0e907640a01ca2b883aa2565ed7850d5fa15ce8ec44 = $this->env->getExtension("native_profiler");
        $__internal_8185ab598677cd3f96eea0e907640a01ca2b883aa2565ed7850d5fa15ce8ec44->enter($__internal_8185ab598677cd3f96eea0e907640a01ca2b883aa2565ed7850d5fa15ce8ec44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8185ab598677cd3f96eea0e907640a01ca2b883aa2565ed7850d5fa15ce8ec44->leave($__internal_8185ab598677cd3f96eea0e907640a01ca2b883aa2565ed7850d5fa15ce8ec44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
