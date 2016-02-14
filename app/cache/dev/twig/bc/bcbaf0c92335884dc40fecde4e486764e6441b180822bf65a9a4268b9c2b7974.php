<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_87d655774d91737d2556dd4e0bb1339a1b5f205473ce2a16aa096c3ae30e643c extends Twig_Template
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
        $__internal_ec40d89b30eb3106277034508f07d588f0e5ab6cc6364ac78b84e469e5290bc3 = $this->env->getExtension("native_profiler");
        $__internal_ec40d89b30eb3106277034508f07d588f0e5ab6cc6364ac78b84e469e5290bc3->enter($__internal_ec40d89b30eb3106277034508f07d588f0e5ab6cc6364ac78b84e469e5290bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ec40d89b30eb3106277034508f07d588f0e5ab6cc6364ac78b84e469e5290bc3->leave($__internal_ec40d89b30eb3106277034508f07d588f0e5ab6cc6364ac78b84e469e5290bc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
