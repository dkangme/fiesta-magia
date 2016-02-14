<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e20f3e7adb161077bb9ffd978b2db53ff2a54892b9a53d5ea7de7393c3162324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_89933ec4eefed3789387504de7d8643592d05e33de7eeb31989aa61a5ddad93d = $this->env->getExtension("native_profiler");
        $__internal_89933ec4eefed3789387504de7d8643592d05e33de7eeb31989aa61a5ddad93d->enter($__internal_89933ec4eefed3789387504de7d8643592d05e33de7eeb31989aa61a5ddad93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89933ec4eefed3789387504de7d8643592d05e33de7eeb31989aa61a5ddad93d->leave($__internal_89933ec4eefed3789387504de7d8643592d05e33de7eeb31989aa61a5ddad93d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75e0e8b9144cf82f944da5d9af8afbaf6a84100ceb0ac34475f6732950e051a9 = $this->env->getExtension("native_profiler");
        $__internal_75e0e8b9144cf82f944da5d9af8afbaf6a84100ceb0ac34475f6732950e051a9->enter($__internal_75e0e8b9144cf82f944da5d9af8afbaf6a84100ceb0ac34475f6732950e051a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_75e0e8b9144cf82f944da5d9af8afbaf6a84100ceb0ac34475f6732950e051a9->leave($__internal_75e0e8b9144cf82f944da5d9af8afbaf6a84100ceb0ac34475f6732950e051a9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ab1c0651db08c97915d3b5b35bd4ce965831b903b83a841b074403ecee7f22a = $this->env->getExtension("native_profiler");
        $__internal_3ab1c0651db08c97915d3b5b35bd4ce965831b903b83a841b074403ecee7f22a->enter($__internal_3ab1c0651db08c97915d3b5b35bd4ce965831b903b83a841b074403ecee7f22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3ab1c0651db08c97915d3b5b35bd4ce965831b903b83a841b074403ecee7f22a->leave($__internal_3ab1c0651db08c97915d3b5b35bd4ce965831b903b83a841b074403ecee7f22a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0317dc08cd70e38eb5ecb77451d0596c8d35cc2266d58fa2b4285c7cad2a519 = $this->env->getExtension("native_profiler");
        $__internal_f0317dc08cd70e38eb5ecb77451d0596c8d35cc2266d58fa2b4285c7cad2a519->enter($__internal_f0317dc08cd70e38eb5ecb77451d0596c8d35cc2266d58fa2b4285c7cad2a519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f0317dc08cd70e38eb5ecb77451d0596c8d35cc2266d58fa2b4285c7cad2a519->leave($__internal_f0317dc08cd70e38eb5ecb77451d0596c8d35cc2266d58fa2b4285c7cad2a519_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
