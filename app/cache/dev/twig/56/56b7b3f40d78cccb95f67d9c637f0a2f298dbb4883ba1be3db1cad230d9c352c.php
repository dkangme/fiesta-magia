<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9c80e0ec39c7336833288d24c3752e4713852acdd73c53cff941b19588120fe1 extends Twig_Template
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
        $__internal_a705362a5f45c70eab0833662281c2715d3533718d6b288129965630016f1dcf = $this->env->getExtension("native_profiler");
        $__internal_a705362a5f45c70eab0833662281c2715d3533718d6b288129965630016f1dcf->enter($__internal_a705362a5f45c70eab0833662281c2715d3533718d6b288129965630016f1dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a705362a5f45c70eab0833662281c2715d3533718d6b288129965630016f1dcf->leave($__internal_a705362a5f45c70eab0833662281c2715d3533718d6b288129965630016f1dcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
