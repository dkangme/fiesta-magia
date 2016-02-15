<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7fbb6088146a3441f25fb2fbea6534658a9148bab93d2f7bdf2efdff0f184c1e extends Twig_Template
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
        $__internal_b1fcac033dcf2972a2ac4bad5c05be89913c28fcc17155d9f8f08695c76b38cf = $this->env->getExtension("native_profiler");
        $__internal_b1fcac033dcf2972a2ac4bad5c05be89913c28fcc17155d9f8f08695c76b38cf->enter($__internal_b1fcac033dcf2972a2ac4bad5c05be89913c28fcc17155d9f8f08695c76b38cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b1fcac033dcf2972a2ac4bad5c05be89913c28fcc17155d9f8f08695c76b38cf->leave($__internal_b1fcac033dcf2972a2ac4bad5c05be89913c28fcc17155d9f8f08695c76b38cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
