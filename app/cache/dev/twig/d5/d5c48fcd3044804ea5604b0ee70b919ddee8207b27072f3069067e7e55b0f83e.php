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
        $__internal_8618e0f0cc93428fa88d8253bc9e1ac449ff2c21d6301f48f4f904276d82c5a3 = $this->env->getExtension("native_profiler");
        $__internal_8618e0f0cc93428fa88d8253bc9e1ac449ff2c21d6301f48f4f904276d82c5a3->enter($__internal_8618e0f0cc93428fa88d8253bc9e1ac449ff2c21d6301f48f4f904276d82c5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8618e0f0cc93428fa88d8253bc9e1ac449ff2c21d6301f48f4f904276d82c5a3->leave($__internal_8618e0f0cc93428fa88d8253bc9e1ac449ff2c21d6301f48f4f904276d82c5a3_prof);

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
