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
        $__internal_ee8fbd99d174f8a1e61f84cf409f71517e3dfe33b3e9e920ae98983b9858f8c9 = $this->env->getExtension("native_profiler");
        $__internal_ee8fbd99d174f8a1e61f84cf409f71517e3dfe33b3e9e920ae98983b9858f8c9->enter($__internal_ee8fbd99d174f8a1e61f84cf409f71517e3dfe33b3e9e920ae98983b9858f8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ee8fbd99d174f8a1e61f84cf409f71517e3dfe33b3e9e920ae98983b9858f8c9->leave($__internal_ee8fbd99d174f8a1e61f84cf409f71517e3dfe33b3e9e920ae98983b9858f8c9_prof);

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
