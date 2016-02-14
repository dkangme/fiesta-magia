<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f51aa250fd1de65e7011669f63a6ea61f25024fce9d04283da2d8af5c2ade5b1 extends Twig_Template
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
        $__internal_a8c118b20cb6763955ee26190ece8585fc15d468aa56ee42c0a34bf616fb3242 = $this->env->getExtension("native_profiler");
        $__internal_a8c118b20cb6763955ee26190ece8585fc15d468aa56ee42c0a34bf616fb3242->enter($__internal_a8c118b20cb6763955ee26190ece8585fc15d468aa56ee42c0a34bf616fb3242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a8c118b20cb6763955ee26190ece8585fc15d468aa56ee42c0a34bf616fb3242->leave($__internal_a8c118b20cb6763955ee26190ece8585fc15d468aa56ee42c0a34bf616fb3242_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
