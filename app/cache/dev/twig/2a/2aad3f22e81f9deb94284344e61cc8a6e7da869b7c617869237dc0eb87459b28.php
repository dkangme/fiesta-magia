<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0c54573fb2b79ac4306fa64447ddab004f88d7d0976bfdf27a59aedf7247638a extends Twig_Template
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
        $__internal_34b497fee6153ff0eb67aba736a0764877425de78c0fb9f98e78872fc9e6a771 = $this->env->getExtension("native_profiler");
        $__internal_34b497fee6153ff0eb67aba736a0764877425de78c0fb9f98e78872fc9e6a771->enter($__internal_34b497fee6153ff0eb67aba736a0764877425de78c0fb9f98e78872fc9e6a771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_34b497fee6153ff0eb67aba736a0764877425de78c0fb9f98e78872fc9e6a771->leave($__internal_34b497fee6153ff0eb67aba736a0764877425de78c0fb9f98e78872fc9e6a771_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
