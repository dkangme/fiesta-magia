<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_26c45a5a3c692351d314e069116680a49461c3129fbe4e7046c231e08e878e2b extends Twig_Template
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
        $__internal_e8117f092412037ea6d63d9a6a0bb4aa51f92545c3c0839cae1445a02921df02 = $this->env->getExtension("native_profiler");
        $__internal_e8117f092412037ea6d63d9a6a0bb4aa51f92545c3c0839cae1445a02921df02->enter($__internal_e8117f092412037ea6d63d9a6a0bb4aa51f92545c3c0839cae1445a02921df02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e8117f092412037ea6d63d9a6a0bb4aa51f92545c3c0839cae1445a02921df02->leave($__internal_e8117f092412037ea6d63d9a6a0bb4aa51f92545c3c0839cae1445a02921df02_prof);

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
