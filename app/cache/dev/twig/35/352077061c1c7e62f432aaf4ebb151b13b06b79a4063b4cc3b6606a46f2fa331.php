<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_806281941c12c9bed43c0547932b93d39cef98aa70c446649eb8b9b3039e959e extends Twig_Template
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
        $__internal_cad5e0ac19c634bc4a13099a8eb83a585fd3731e0080dc5f7b40c486b3cf93a9 = $this->env->getExtension("native_profiler");
        $__internal_cad5e0ac19c634bc4a13099a8eb83a585fd3731e0080dc5f7b40c486b3cf93a9->enter($__internal_cad5e0ac19c634bc4a13099a8eb83a585fd3731e0080dc5f7b40c486b3cf93a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_cad5e0ac19c634bc4a13099a8eb83a585fd3731e0080dc5f7b40c486b3cf93a9->leave($__internal_cad5e0ac19c634bc4a13099a8eb83a585fd3731e0080dc5f7b40c486b3cf93a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
