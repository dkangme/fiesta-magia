<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b1a1e62ce3beea071c6210532293c06657311f6e88b14a0183a39efc4859939f extends Twig_Template
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
        $__internal_b8dd4e849454b1d33db8df9cbf50a007d3856afe7b230912030ed7ced8053329 = $this->env->getExtension("native_profiler");
        $__internal_b8dd4e849454b1d33db8df9cbf50a007d3856afe7b230912030ed7ced8053329->enter($__internal_b8dd4e849454b1d33db8df9cbf50a007d3856afe7b230912030ed7ced8053329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b8dd4e849454b1d33db8df9cbf50a007d3856afe7b230912030ed7ced8053329->leave($__internal_b8dd4e849454b1d33db8df9cbf50a007d3856afe7b230912030ed7ced8053329_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
