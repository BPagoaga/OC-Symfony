<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9e93a949a9f19e4c9dbd25319daf0018f79dde940e5805d63dde2c2290aea55e extends Twig_Template
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
        $__internal_3a5abc9503105f0f928163ce7c457bd09a1629904a952f761a82bc38f05e4063 = $this->env->getExtension("native_profiler");
        $__internal_3a5abc9503105f0f928163ce7c457bd09a1629904a952f761a82bc38f05e4063->enter($__internal_3a5abc9503105f0f928163ce7c457bd09a1629904a952f761a82bc38f05e4063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3a5abc9503105f0f928163ce7c457bd09a1629904a952f761a82bc38f05e4063->leave($__internal_3a5abc9503105f0f928163ce7c457bd09a1629904a952f761a82bc38f05e4063_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
