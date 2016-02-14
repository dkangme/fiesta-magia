<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1e1ad5ebdd5872e6f16d3d1a03b71f1f454fb2e9fc776fd8bfb0e50d95ec0320 extends Twig_Template
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
        $__internal_c3285678e399177ab591dfa227174e249e9b5c8a7d9419f78802a0e5f7789833 = $this->env->getExtension("native_profiler");
        $__internal_c3285678e399177ab591dfa227174e249e9b5c8a7d9419f78802a0e5f7789833->enter($__internal_c3285678e399177ab591dfa227174e249e9b5c8a7d9419f78802a0e5f7789833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c3285678e399177ab591dfa227174e249e9b5c8a7d9419f78802a0e5f7789833->leave($__internal_c3285678e399177ab591dfa227174e249e9b5c8a7d9419f78802a0e5f7789833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
