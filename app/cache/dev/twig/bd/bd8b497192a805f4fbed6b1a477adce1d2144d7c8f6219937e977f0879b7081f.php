<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ede9dfbe712dc860a4e093b3c9a2df0dd98a447199836b812ec83b561e74938a extends Twig_Template
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
        $__internal_2eed805fb524afacbe47bbb7329ef6927bdf34b173d869639482ac5dc6298dcf = $this->env->getExtension("native_profiler");
        $__internal_2eed805fb524afacbe47bbb7329ef6927bdf34b173d869639482ac5dc6298dcf->enter($__internal_2eed805fb524afacbe47bbb7329ef6927bdf34b173d869639482ac5dc6298dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2eed805fb524afacbe47bbb7329ef6927bdf34b173d869639482ac5dc6298dcf->leave($__internal_2eed805fb524afacbe47bbb7329ef6927bdf34b173d869639482ac5dc6298dcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
