<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e197d26c1a526fc4b2f4ba0f05cd7f5306a5f3eb5785c14a121621ac3161440a extends Twig_Template
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
        $__internal_a25ad42da6191145e656f18bc07570b495818d0fb069716ff5c7ba8f27ce3438 = $this->env->getExtension("native_profiler");
        $__internal_a25ad42da6191145e656f18bc07570b495818d0fb069716ff5c7ba8f27ce3438->enter($__internal_a25ad42da6191145e656f18bc07570b495818d0fb069716ff5c7ba8f27ce3438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a25ad42da6191145e656f18bc07570b495818d0fb069716ff5c7ba8f27ce3438->leave($__internal_a25ad42da6191145e656f18bc07570b495818d0fb069716ff5c7ba8f27ce3438_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
