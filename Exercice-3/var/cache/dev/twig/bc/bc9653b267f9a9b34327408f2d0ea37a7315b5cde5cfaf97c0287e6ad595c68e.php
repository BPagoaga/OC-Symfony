<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d83e9c9ff245d75b1e0266e3e676ee2756cd1dfb9d7e788eb229ed310073c9dd extends Twig_Template
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
        $__internal_954f20da7c0c185bf480262bd38d317f6d6efa2a1c3282e1dd798b128db9cfe3 = $this->env->getExtension("native_profiler");
        $__internal_954f20da7c0c185bf480262bd38d317f6d6efa2a1c3282e1dd798b128db9cfe3->enter($__internal_954f20da7c0c185bf480262bd38d317f6d6efa2a1c3282e1dd798b128db9cfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_954f20da7c0c185bf480262bd38d317f6d6efa2a1c3282e1dd798b128db9cfe3->leave($__internal_954f20da7c0c185bf480262bd38d317f6d6efa2a1c3282e1dd798b128db9cfe3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
