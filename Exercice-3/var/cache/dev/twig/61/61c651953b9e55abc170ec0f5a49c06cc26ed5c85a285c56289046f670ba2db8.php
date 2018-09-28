<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_bbc948a7137387d0ac87bdfdeef372993819b9d9325638a91b7ea1434d4af408 extends Twig_Template
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
        $__internal_39cf0a895a17fb5e2276bb59673fda44d66da2fabece671fff651ce19f00c556 = $this->env->getExtension("native_profiler");
        $__internal_39cf0a895a17fb5e2276bb59673fda44d66da2fabece671fff651ce19f00c556->enter($__internal_39cf0a895a17fb5e2276bb59673fda44d66da2fabece671fff651ce19f00c556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_39cf0a895a17fb5e2276bb59673fda44d66da2fabece671fff651ce19f00c556->leave($__internal_39cf0a895a17fb5e2276bb59673fda44d66da2fabece671fff651ce19f00c556_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
