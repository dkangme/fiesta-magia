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
        $__internal_9bdb9d69f262f2ba345a08ce5dfe717565f791a1d3c44330e30c7f3938251096 = $this->env->getExtension("native_profiler");
        $__internal_9bdb9d69f262f2ba345a08ce5dfe717565f791a1d3c44330e30c7f3938251096->enter($__internal_9bdb9d69f262f2ba345a08ce5dfe717565f791a1d3c44330e30c7f3938251096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9bdb9d69f262f2ba345a08ce5dfe717565f791a1d3c44330e30c7f3938251096->leave($__internal_9bdb9d69f262f2ba345a08ce5dfe717565f791a1d3c44330e30c7f3938251096_prof);

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
