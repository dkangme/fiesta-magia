<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fefe1b7af68ff4e80199f45808e377a02652da2625ce4b0a4c67174bd111891a extends Twig_Template
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
        $__internal_8485838f3e759710044a828439d66018339c1d15b209d95cfa4cc0562534bbf7 = $this->env->getExtension("native_profiler");
        $__internal_8485838f3e759710044a828439d66018339c1d15b209d95cfa4cc0562534bbf7->enter($__internal_8485838f3e759710044a828439d66018339c1d15b209d95cfa4cc0562534bbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8485838f3e759710044a828439d66018339c1d15b209d95cfa4cc0562534bbf7->leave($__internal_8485838f3e759710044a828439d66018339c1d15b209d95cfa4cc0562534bbf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
