<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9a73e44614839d6df1d79931b76ecfdb74f29af86ac6085f9710a8c52f110936 extends Twig_Template
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
        $__internal_0a30341e6f32ba62aed86a7cd95d26fd409ab71764a15fac77e91698f8cf6b72 = $this->env->getExtension("native_profiler");
        $__internal_0a30341e6f32ba62aed86a7cd95d26fd409ab71764a15fac77e91698f8cf6b72->enter($__internal_0a30341e6f32ba62aed86a7cd95d26fd409ab71764a15fac77e91698f8cf6b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0a30341e6f32ba62aed86a7cd95d26fd409ab71764a15fac77e91698f8cf6b72->leave($__internal_0a30341e6f32ba62aed86a7cd95d26fd409ab71764a15fac77e91698f8cf6b72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
