<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c839c98808fdbd17ccf6e911c980c1d3c60e1a660938938885333ab0cbdc493a extends Twig_Template
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
        $__internal_8eb6b974853be577098a481e542a4a790cee3ed52468b5ebd5cf5af77e1169c4 = $this->env->getExtension("native_profiler");
        $__internal_8eb6b974853be577098a481e542a4a790cee3ed52468b5ebd5cf5af77e1169c4->enter($__internal_8eb6b974853be577098a481e542a4a790cee3ed52468b5ebd5cf5af77e1169c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8eb6b974853be577098a481e542a4a790cee3ed52468b5ebd5cf5af77e1169c4->leave($__internal_8eb6b974853be577098a481e542a4a790cee3ed52468b5ebd5cf5af77e1169c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
