<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ef47f62a6d2a8dc5f5b5198c71f16dcb1bb02646f2a56e6180617c7377d53899 extends Twig_Template
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
        $__internal_d2d14e9431f07d52d446828813505f0c03a4bedcb54fb77b7a9c456911921b9d = $this->env->getExtension("native_profiler");
        $__internal_d2d14e9431f07d52d446828813505f0c03a4bedcb54fb77b7a9c456911921b9d->enter($__internal_d2d14e9431f07d52d446828813505f0c03a4bedcb54fb77b7a9c456911921b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d2d14e9431f07d52d446828813505f0c03a4bedcb54fb77b7a9c456911921b9d->leave($__internal_d2d14e9431f07d52d446828813505f0c03a4bedcb54fb77b7a9c456911921b9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
