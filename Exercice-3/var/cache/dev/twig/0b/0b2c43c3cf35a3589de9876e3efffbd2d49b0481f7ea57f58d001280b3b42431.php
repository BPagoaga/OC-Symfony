<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_896d2a4ee7a557578027ecbf3fa277c6d38c5fa7fc66eb6fbdde9ed8a60b992a extends Twig_Template
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
        $__internal_3ff95ab332f05c4154b94be50c4e0fe57bab19fbee353d4e53ccd1be7f21f248 = $this->env->getExtension("native_profiler");
        $__internal_3ff95ab332f05c4154b94be50c4e0fe57bab19fbee353d4e53ccd1be7f21f248->enter($__internal_3ff95ab332f05c4154b94be50c4e0fe57bab19fbee353d4e53ccd1be7f21f248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3ff95ab332f05c4154b94be50c4e0fe57bab19fbee353d4e53ccd1be7f21f248->leave($__internal_3ff95ab332f05c4154b94be50c4e0fe57bab19fbee353d4e53ccd1be7f21f248_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
