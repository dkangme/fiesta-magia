<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3cdd32a1c846475fc652e2c4720c7edefee07fe017bfadb2647eef3f6a33fa31 extends Twig_Template
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
        $__internal_23128138b7f3ae08d8cc2f1b74ae5fcfc8f67d870e674194f394d3ce9ee47698 = $this->env->getExtension("native_profiler");
        $__internal_23128138b7f3ae08d8cc2f1b74ae5fcfc8f67d870e674194f394d3ce9ee47698->enter($__internal_23128138b7f3ae08d8cc2f1b74ae5fcfc8f67d870e674194f394d3ce9ee47698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_23128138b7f3ae08d8cc2f1b74ae5fcfc8f67d870e674194f394d3ce9ee47698->leave($__internal_23128138b7f3ae08d8cc2f1b74ae5fcfc8f67d870e674194f394d3ce9ee47698_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
