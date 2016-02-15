<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fd67d597396ddeb065fb53f76f907aeab5713b546338b8ee2f8fcaf65b1d2b12 extends Twig_Template
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
        $__internal_702edb80609d6150217241ebdc4d1385c75539f522780b07b45626b354db4e9e = $this->env->getExtension("native_profiler");
        $__internal_702edb80609d6150217241ebdc4d1385c75539f522780b07b45626b354db4e9e->enter($__internal_702edb80609d6150217241ebdc4d1385c75539f522780b07b45626b354db4e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_702edb80609d6150217241ebdc4d1385c75539f522780b07b45626b354db4e9e->leave($__internal_702edb80609d6150217241ebdc4d1385c75539f522780b07b45626b354db4e9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
