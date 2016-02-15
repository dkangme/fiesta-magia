<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ae91db3fb805bc87250eaa8249f320c95f6e26e5859ba08b23554195076bec1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e6a6f2ece9e6bc9e303585f05f4e8819d406f8f5243b19277872eb057e48607 = $this->env->getExtension("native_profiler");
        $__internal_6e6a6f2ece9e6bc9e303585f05f4e8819d406f8f5243b19277872eb057e48607->enter($__internal_6e6a6f2ece9e6bc9e303585f05f4e8819d406f8f5243b19277872eb057e48607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e6a6f2ece9e6bc9e303585f05f4e8819d406f8f5243b19277872eb057e48607->leave($__internal_6e6a6f2ece9e6bc9e303585f05f4e8819d406f8f5243b19277872eb057e48607_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22346b32216c1fe0071241876ac8eaeef46400ce02a942e117a54ad80c0732af = $this->env->getExtension("native_profiler");
        $__internal_22346b32216c1fe0071241876ac8eaeef46400ce02a942e117a54ad80c0732af->enter($__internal_22346b32216c1fe0071241876ac8eaeef46400ce02a942e117a54ad80c0732af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22346b32216c1fe0071241876ac8eaeef46400ce02a942e117a54ad80c0732af->leave($__internal_22346b32216c1fe0071241876ac8eaeef46400ce02a942e117a54ad80c0732af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56c59b0fd323d3fafc107d842837d901768472bb3534e746ccb44ffe052b2948 = $this->env->getExtension("native_profiler");
        $__internal_56c59b0fd323d3fafc107d842837d901768472bb3534e746ccb44ffe052b2948->enter($__internal_56c59b0fd323d3fafc107d842837d901768472bb3534e746ccb44ffe052b2948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_56c59b0fd323d3fafc107d842837d901768472bb3534e746ccb44ffe052b2948->leave($__internal_56c59b0fd323d3fafc107d842837d901768472bb3534e746ccb44ffe052b2948_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0df33f2caa82660aa17df700ff8ec639ca3c1599d51ee42c19ef5b1081c1ef2 = $this->env->getExtension("native_profiler");
        $__internal_a0df33f2caa82660aa17df700ff8ec639ca3c1599d51ee42c19ef5b1081c1ef2->enter($__internal_a0df33f2caa82660aa17df700ff8ec639ca3c1599d51ee42c19ef5b1081c1ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0df33f2caa82660aa17df700ff8ec639ca3c1599d51ee42c19ef5b1081c1ef2->leave($__internal_a0df33f2caa82660aa17df700ff8ec639ca3c1599d51ee42c19ef5b1081c1ef2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
