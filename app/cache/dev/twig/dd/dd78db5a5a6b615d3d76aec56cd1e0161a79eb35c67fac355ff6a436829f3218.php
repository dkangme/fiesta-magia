<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3d9ae6d9080267d0fac996da4a774a76640299b9ab1f3fb5cb139d54b92ec144 extends Twig_Template
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
        $__internal_f74be48c7be75df27e5b0e30cdade87057fd8be36d6a205a115257a8f2cb428d = $this->env->getExtension("native_profiler");
        $__internal_f74be48c7be75df27e5b0e30cdade87057fd8be36d6a205a115257a8f2cb428d->enter($__internal_f74be48c7be75df27e5b0e30cdade87057fd8be36d6a205a115257a8f2cb428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f74be48c7be75df27e5b0e30cdade87057fd8be36d6a205a115257a8f2cb428d->leave($__internal_f74be48c7be75df27e5b0e30cdade87057fd8be36d6a205a115257a8f2cb428d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
