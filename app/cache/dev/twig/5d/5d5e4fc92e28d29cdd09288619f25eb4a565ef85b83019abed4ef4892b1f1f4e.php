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
        $__internal_daffd58933fe9c70905f99c51f860f268e15ae5b1b9e66121ebc27a76b4d7a19 = $this->env->getExtension("native_profiler");
        $__internal_daffd58933fe9c70905f99c51f860f268e15ae5b1b9e66121ebc27a76b4d7a19->enter($__internal_daffd58933fe9c70905f99c51f860f268e15ae5b1b9e66121ebc27a76b4d7a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_daffd58933fe9c70905f99c51f860f268e15ae5b1b9e66121ebc27a76b4d7a19->leave($__internal_daffd58933fe9c70905f99c51f860f268e15ae5b1b9e66121ebc27a76b4d7a19_prof);

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
