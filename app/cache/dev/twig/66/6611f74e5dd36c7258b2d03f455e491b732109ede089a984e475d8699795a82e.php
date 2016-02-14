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
        $__internal_6d4cd8821bc943ea80dff3530feef690b74e6b0d1e153bb2949d77fbb3f1c19a = $this->env->getExtension("native_profiler");
        $__internal_6d4cd8821bc943ea80dff3530feef690b74e6b0d1e153bb2949d77fbb3f1c19a->enter($__internal_6d4cd8821bc943ea80dff3530feef690b74e6b0d1e153bb2949d77fbb3f1c19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4cd8821bc943ea80dff3530feef690b74e6b0d1e153bb2949d77fbb3f1c19a->leave($__internal_6d4cd8821bc943ea80dff3530feef690b74e6b0d1e153bb2949d77fbb3f1c19a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb54984d15292b0efac908852933281d49b15269413d36704518b6be95c47171 = $this->env->getExtension("native_profiler");
        $__internal_fb54984d15292b0efac908852933281d49b15269413d36704518b6be95c47171->enter($__internal_fb54984d15292b0efac908852933281d49b15269413d36704518b6be95c47171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb54984d15292b0efac908852933281d49b15269413d36704518b6be95c47171->leave($__internal_fb54984d15292b0efac908852933281d49b15269413d36704518b6be95c47171_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9798377f29404ca60ec03e41b01454b071d5dd14c0c638b72c8acf83a90a1ff0 = $this->env->getExtension("native_profiler");
        $__internal_9798377f29404ca60ec03e41b01454b071d5dd14c0c638b72c8acf83a90a1ff0->enter($__internal_9798377f29404ca60ec03e41b01454b071d5dd14c0c638b72c8acf83a90a1ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9798377f29404ca60ec03e41b01454b071d5dd14c0c638b72c8acf83a90a1ff0->leave($__internal_9798377f29404ca60ec03e41b01454b071d5dd14c0c638b72c8acf83a90a1ff0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0e83a61933c196b8c88b42da26e8ea0c34a66eef8dc3a82c6502f35ba5fb272 = $this->env->getExtension("native_profiler");
        $__internal_d0e83a61933c196b8c88b42da26e8ea0c34a66eef8dc3a82c6502f35ba5fb272->enter($__internal_d0e83a61933c196b8c88b42da26e8ea0c34a66eef8dc3a82c6502f35ba5fb272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0e83a61933c196b8c88b42da26e8ea0c34a66eef8dc3a82c6502f35ba5fb272->leave($__internal_d0e83a61933c196b8c88b42da26e8ea0c34a66eef8dc3a82c6502f35ba5fb272_prof);

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
