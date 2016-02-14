<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5ff9ca415f6934fc253f8cff7bdd5f5157f4de8299a0f08d45330491614e86ab extends Twig_Template
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
        $__internal_0e058a4de9f62987ac6786d63321d07aa7669930ce769151488f69b2be5dd7ba = $this->env->getExtension("native_profiler");
        $__internal_0e058a4de9f62987ac6786d63321d07aa7669930ce769151488f69b2be5dd7ba->enter($__internal_0e058a4de9f62987ac6786d63321d07aa7669930ce769151488f69b2be5dd7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0e058a4de9f62987ac6786d63321d07aa7669930ce769151488f69b2be5dd7ba->leave($__internal_0e058a4de9f62987ac6786d63321d07aa7669930ce769151488f69b2be5dd7ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
