<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ff37a8956b3dbbcc65c6482ee6db5295aa1fd6d572772214ebcead5e03ef4013 extends Twig_Template
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
        $__internal_e715d9ee8c638e47c38376741d44af0ad996076fe07212595248a75c8c9b5548 = $this->env->getExtension("native_profiler");
        $__internal_e715d9ee8c638e47c38376741d44af0ad996076fe07212595248a75c8c9b5548->enter($__internal_e715d9ee8c638e47c38376741d44af0ad996076fe07212595248a75c8c9b5548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e715d9ee8c638e47c38376741d44af0ad996076fe07212595248a75c8c9b5548->leave($__internal_e715d9ee8c638e47c38376741d44af0ad996076fe07212595248a75c8c9b5548_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
