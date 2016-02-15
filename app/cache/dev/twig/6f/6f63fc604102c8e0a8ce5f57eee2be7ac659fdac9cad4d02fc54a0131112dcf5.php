<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a2a5ab6ac28887acf3c3edbc8637d0d3471efde7cc4fea60d21612ec9677100c extends Twig_Template
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
        $__internal_e29fed285538c048d509e0a60145109869c595a3b2564914e4b07654d95b206c = $this->env->getExtension("native_profiler");
        $__internal_e29fed285538c048d509e0a60145109869c595a3b2564914e4b07654d95b206c->enter($__internal_e29fed285538c048d509e0a60145109869c595a3b2564914e4b07654d95b206c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e29fed285538c048d509e0a60145109869c595a3b2564914e4b07654d95b206c->leave($__internal_e29fed285538c048d509e0a60145109869c595a3b2564914e4b07654d95b206c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
