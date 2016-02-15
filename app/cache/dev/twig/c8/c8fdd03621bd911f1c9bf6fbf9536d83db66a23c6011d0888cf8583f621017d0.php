<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ed0d82c53a502b1a6f8e948d636a79a6fe51973bb6785d547f5ab8054159b7ae extends Twig_Template
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
        $__internal_69d510512c33e42eff393a3797e508e72a2032dda015f9e3e8695dcfd286b62e = $this->env->getExtension("native_profiler");
        $__internal_69d510512c33e42eff393a3797e508e72a2032dda015f9e3e8695dcfd286b62e->enter($__internal_69d510512c33e42eff393a3797e508e72a2032dda015f9e3e8695dcfd286b62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_69d510512c33e42eff393a3797e508e72a2032dda015f9e3e8695dcfd286b62e->leave($__internal_69d510512c33e42eff393a3797e508e72a2032dda015f9e3e8695dcfd286b62e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
