<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_33a6b79b3a589ea787189eb944bb8404e6e016e3442e7cba2f86480b5a603799 extends Twig_Template
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
        $__internal_ee895afea34dfef4c190e73182e080fda30517b77e9ad28a7f8c9b97e9832cba = $this->env->getExtension("native_profiler");
        $__internal_ee895afea34dfef4c190e73182e080fda30517b77e9ad28a7f8c9b97e9832cba->enter($__internal_ee895afea34dfef4c190e73182e080fda30517b77e9ad28a7f8c9b97e9832cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ee895afea34dfef4c190e73182e080fda30517b77e9ad28a7f8c9b97e9832cba->leave($__internal_ee895afea34dfef4c190e73182e080fda30517b77e9ad28a7f8c9b97e9832cba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
