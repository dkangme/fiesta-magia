<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5196fc7892e3c36135179ea2745e5bc22218356e75ab21e017d92df967492bc2 extends Twig_Template
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
        $__internal_84439ef48d1ceef1b70d47b9239103eefa253d16855a153ee7a6a2ca70555a24 = $this->env->getExtension("native_profiler");
        $__internal_84439ef48d1ceef1b70d47b9239103eefa253d16855a153ee7a6a2ca70555a24->enter($__internal_84439ef48d1ceef1b70d47b9239103eefa253d16855a153ee7a6a2ca70555a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_84439ef48d1ceef1b70d47b9239103eefa253d16855a153ee7a6a2ca70555a24->leave($__internal_84439ef48d1ceef1b70d47b9239103eefa253d16855a153ee7a6a2ca70555a24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
