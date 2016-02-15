<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b1d993c82102554a5b699e2359f2d912d3bb3da9509a78f579da2c3ae5d3aa42 extends Twig_Template
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
        $__internal_586e5b2b9e42ff5019dd1639eb5c2e3c4b4461fec6fd1f75eb5d1c395830dee3 = $this->env->getExtension("native_profiler");
        $__internal_586e5b2b9e42ff5019dd1639eb5c2e3c4b4461fec6fd1f75eb5d1c395830dee3->enter($__internal_586e5b2b9e42ff5019dd1639eb5c2e3c4b4461fec6fd1f75eb5d1c395830dee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_586e5b2b9e42ff5019dd1639eb5c2e3c4b4461fec6fd1f75eb5d1c395830dee3->leave($__internal_586e5b2b9e42ff5019dd1639eb5c2e3c4b4461fec6fd1f75eb5d1c395830dee3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
