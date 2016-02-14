<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f905944844ec9384f00cb66a97a781dd0c3b711a882611ab42f7af78035e3041 extends Twig_Template
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
        $__internal_174c069e847af9a1899bc6434b3660f2ad3e5ccd196cb3f43faec92d74b6ee0b = $this->env->getExtension("native_profiler");
        $__internal_174c069e847af9a1899bc6434b3660f2ad3e5ccd196cb3f43faec92d74b6ee0b->enter($__internal_174c069e847af9a1899bc6434b3660f2ad3e5ccd196cb3f43faec92d74b6ee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_174c069e847af9a1899bc6434b3660f2ad3e5ccd196cb3f43faec92d74b6ee0b->leave($__internal_174c069e847af9a1899bc6434b3660f2ad3e5ccd196cb3f43faec92d74b6ee0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
