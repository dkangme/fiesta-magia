<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2a1e1995dfe587f2807ed6e44c8f3483be75a197e97ca3749f587828a4546707 extends Twig_Template
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
        $__internal_c80f356b8d9f9e78dc853c29264c9b7f7c4aa2681002166cc62f90d47b14775e = $this->env->getExtension("native_profiler");
        $__internal_c80f356b8d9f9e78dc853c29264c9b7f7c4aa2681002166cc62f90d47b14775e->enter($__internal_c80f356b8d9f9e78dc853c29264c9b7f7c4aa2681002166cc62f90d47b14775e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c80f356b8d9f9e78dc853c29264c9b7f7c4aa2681002166cc62f90d47b14775e->leave($__internal_c80f356b8d9f9e78dc853c29264c9b7f7c4aa2681002166cc62f90d47b14775e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
