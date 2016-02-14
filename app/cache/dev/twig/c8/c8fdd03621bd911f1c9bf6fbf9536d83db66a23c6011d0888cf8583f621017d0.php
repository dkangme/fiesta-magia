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
        $__internal_385025fc2ad2f08881c9e192ce4ad03af7fee16073a82228e71c011c617c3937 = $this->env->getExtension("native_profiler");
        $__internal_385025fc2ad2f08881c9e192ce4ad03af7fee16073a82228e71c011c617c3937->enter($__internal_385025fc2ad2f08881c9e192ce4ad03af7fee16073a82228e71c011c617c3937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_385025fc2ad2f08881c9e192ce4ad03af7fee16073a82228e71c011c617c3937->leave($__internal_385025fc2ad2f08881c9e192ce4ad03af7fee16073a82228e71c011c617c3937_prof);

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
