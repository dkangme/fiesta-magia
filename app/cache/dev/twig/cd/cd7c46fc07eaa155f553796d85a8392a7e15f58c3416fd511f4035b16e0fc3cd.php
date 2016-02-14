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
        $__internal_528a13718edcc1fec6157f59498fc2a5209cafc9117d5284ddb3c777657c00e4 = $this->env->getExtension("native_profiler");
        $__internal_528a13718edcc1fec6157f59498fc2a5209cafc9117d5284ddb3c777657c00e4->enter($__internal_528a13718edcc1fec6157f59498fc2a5209cafc9117d5284ddb3c777657c00e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_528a13718edcc1fec6157f59498fc2a5209cafc9117d5284ddb3c777657c00e4->leave($__internal_528a13718edcc1fec6157f59498fc2a5209cafc9117d5284ddb3c777657c00e4_prof);

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
