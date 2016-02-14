<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7eea0316599af489f37e2d5f1f1d7efdbf2eaf665493fdeb50b8ee4b745051f8 extends Twig_Template
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
        $__internal_5b6b28526c5483c4179191994f98a6ddad6edbb23f4bac6e3fcc2e3a76895c79 = $this->env->getExtension("native_profiler");
        $__internal_5b6b28526c5483c4179191994f98a6ddad6edbb23f4bac6e3fcc2e3a76895c79->enter($__internal_5b6b28526c5483c4179191994f98a6ddad6edbb23f4bac6e3fcc2e3a76895c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5b6b28526c5483c4179191994f98a6ddad6edbb23f4bac6e3fcc2e3a76895c79->leave($__internal_5b6b28526c5483c4179191994f98a6ddad6edbb23f4bac6e3fcc2e3a76895c79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
