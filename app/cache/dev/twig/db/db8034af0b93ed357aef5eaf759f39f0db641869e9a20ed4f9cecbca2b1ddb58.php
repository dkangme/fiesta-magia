<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_47e78830f84023a193acc1217c9ceeb3b9b4ae533cbb0ee0e3b4b77887562985 extends Twig_Template
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
        $__internal_4e5e3b16a25ef84790db8a40a53d1f72378d5aebf5468601fd1e4474be1e29c5 = $this->env->getExtension("native_profiler");
        $__internal_4e5e3b16a25ef84790db8a40a53d1f72378d5aebf5468601fd1e4474be1e29c5->enter($__internal_4e5e3b16a25ef84790db8a40a53d1f72378d5aebf5468601fd1e4474be1e29c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4e5e3b16a25ef84790db8a40a53d1f72378d5aebf5468601fd1e4474be1e29c5->leave($__internal_4e5e3b16a25ef84790db8a40a53d1f72378d5aebf5468601fd1e4474be1e29c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
