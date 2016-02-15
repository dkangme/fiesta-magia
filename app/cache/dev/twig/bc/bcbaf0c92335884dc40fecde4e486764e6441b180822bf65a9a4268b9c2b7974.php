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
        $__internal_00b67acbde5e4740058295db5fc69e3b44d15f0ee4ba0da1ebb7367b855da3c6 = $this->env->getExtension("native_profiler");
        $__internal_00b67acbde5e4740058295db5fc69e3b44d15f0ee4ba0da1ebb7367b855da3c6->enter($__internal_00b67acbde5e4740058295db5fc69e3b44d15f0ee4ba0da1ebb7367b855da3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_00b67acbde5e4740058295db5fc69e3b44d15f0ee4ba0da1ebb7367b855da3c6->leave($__internal_00b67acbde5e4740058295db5fc69e3b44d15f0ee4ba0da1ebb7367b855da3c6_prof);

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
