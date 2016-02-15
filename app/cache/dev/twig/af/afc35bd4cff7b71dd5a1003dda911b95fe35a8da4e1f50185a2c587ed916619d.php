<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4e3cd197b0e121ad322fc6d63bfac7f0114a449d75ae0c80f2744db8fd9774de extends Twig_Template
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
        $__internal_1feb297669e2021aa5f28f0e7eb64f3ec8f00049c4f7efb37bf6f8f4d5c969b8 = $this->env->getExtension("native_profiler");
        $__internal_1feb297669e2021aa5f28f0e7eb64f3ec8f00049c4f7efb37bf6f8f4d5c969b8->enter($__internal_1feb297669e2021aa5f28f0e7eb64f3ec8f00049c4f7efb37bf6f8f4d5c969b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1feb297669e2021aa5f28f0e7eb64f3ec8f00049c4f7efb37bf6f8f4d5c969b8->leave($__internal_1feb297669e2021aa5f28f0e7eb64f3ec8f00049c4f7efb37bf6f8f4d5c969b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
