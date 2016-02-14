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
        $__internal_a9270356d89f968e7812cedfab13a05d7a359286dc04794c62372a71251e14f0 = $this->env->getExtension("native_profiler");
        $__internal_a9270356d89f968e7812cedfab13a05d7a359286dc04794c62372a71251e14f0->enter($__internal_a9270356d89f968e7812cedfab13a05d7a359286dc04794c62372a71251e14f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a9270356d89f968e7812cedfab13a05d7a359286dc04794c62372a71251e14f0->leave($__internal_a9270356d89f968e7812cedfab13a05d7a359286dc04794c62372a71251e14f0_prof);

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
