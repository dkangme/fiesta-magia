<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7a2a5220a478d981336f6677e6ca8b5acedb0baefd855d5fc3eeb69cf031d85a extends Twig_Template
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
        $__internal_ae9506d92f3cb6e42f047c2388a50b85f229151ab90bd064adc91b51bfac9352 = $this->env->getExtension("native_profiler");
        $__internal_ae9506d92f3cb6e42f047c2388a50b85f229151ab90bd064adc91b51bfac9352->enter($__internal_ae9506d92f3cb6e42f047c2388a50b85f229151ab90bd064adc91b51bfac9352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ae9506d92f3cb6e42f047c2388a50b85f229151ab90bd064adc91b51bfac9352->leave($__internal_ae9506d92f3cb6e42f047c2388a50b85f229151ab90bd064adc91b51bfac9352_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
