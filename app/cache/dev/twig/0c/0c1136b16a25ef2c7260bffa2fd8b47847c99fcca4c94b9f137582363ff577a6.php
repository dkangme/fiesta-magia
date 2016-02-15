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
        $__internal_80fa0fbe01da13155c10de57136d2a4f8807df830adceaadd6fbb7fdb5a73a96 = $this->env->getExtension("native_profiler");
        $__internal_80fa0fbe01da13155c10de57136d2a4f8807df830adceaadd6fbb7fdb5a73a96->enter($__internal_80fa0fbe01da13155c10de57136d2a4f8807df830adceaadd6fbb7fdb5a73a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_80fa0fbe01da13155c10de57136d2a4f8807df830adceaadd6fbb7fdb5a73a96->leave($__internal_80fa0fbe01da13155c10de57136d2a4f8807df830adceaadd6fbb7fdb5a73a96_prof);

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
