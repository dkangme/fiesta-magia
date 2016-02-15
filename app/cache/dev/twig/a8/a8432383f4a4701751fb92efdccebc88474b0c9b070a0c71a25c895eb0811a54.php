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
        $__internal_6ef088fa4873aba0233b3c6f511fcea41967a93bbeb0eda40bcc2fd3df89aa9d = $this->env->getExtension("native_profiler");
        $__internal_6ef088fa4873aba0233b3c6f511fcea41967a93bbeb0eda40bcc2fd3df89aa9d->enter($__internal_6ef088fa4873aba0233b3c6f511fcea41967a93bbeb0eda40bcc2fd3df89aa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6ef088fa4873aba0233b3c6f511fcea41967a93bbeb0eda40bcc2fd3df89aa9d->leave($__internal_6ef088fa4873aba0233b3c6f511fcea41967a93bbeb0eda40bcc2fd3df89aa9d_prof);

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
