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
        $__internal_8770ff52bf9f777cdb4e881bfb327131d5a5325028c3b4e331d55d46bcbe7d3e = $this->env->getExtension("native_profiler");
        $__internal_8770ff52bf9f777cdb4e881bfb327131d5a5325028c3b4e331d55d46bcbe7d3e->enter($__internal_8770ff52bf9f777cdb4e881bfb327131d5a5325028c3b4e331d55d46bcbe7d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8770ff52bf9f777cdb4e881bfb327131d5a5325028c3b4e331d55d46bcbe7d3e->leave($__internal_8770ff52bf9f777cdb4e881bfb327131d5a5325028c3b4e331d55d46bcbe7d3e_prof);

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
