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
        $__internal_fa4eda0461685ffca0985990718ad12d36a35e769e22e0c8b888168b33014c41 = $this->env->getExtension("native_profiler");
        $__internal_fa4eda0461685ffca0985990718ad12d36a35e769e22e0c8b888168b33014c41->enter($__internal_fa4eda0461685ffca0985990718ad12d36a35e769e22e0c8b888168b33014c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fa4eda0461685ffca0985990718ad12d36a35e769e22e0c8b888168b33014c41->leave($__internal_fa4eda0461685ffca0985990718ad12d36a35e769e22e0c8b888168b33014c41_prof);

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
