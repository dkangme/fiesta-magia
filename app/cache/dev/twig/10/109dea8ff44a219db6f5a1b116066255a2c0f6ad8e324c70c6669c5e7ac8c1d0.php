<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_69b88133087f7e0b101696cadda72f5599b4b524c50079f0fec20bc4d3fb5f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_214600fe8b746ab82e57eb08edab5fa928e122cedd6cb51e6c33a8aa472cbafa = $this->env->getExtension("native_profiler");
        $__internal_214600fe8b746ab82e57eb08edab5fa928e122cedd6cb51e6c33a8aa472cbafa->enter($__internal_214600fe8b746ab82e57eb08edab5fa928e122cedd6cb51e6c33a8aa472cbafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214600fe8b746ab82e57eb08edab5fa928e122cedd6cb51e6c33a8aa472cbafa->leave($__internal_214600fe8b746ab82e57eb08edab5fa928e122cedd6cb51e6c33a8aa472cbafa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fe54fab5c05505a4f28aeb8ef3351e0afa6f63cafc1dffeb667c0aa1ea5d787 = $this->env->getExtension("native_profiler");
        $__internal_7fe54fab5c05505a4f28aeb8ef3351e0afa6f63cafc1dffeb667c0aa1ea5d787->enter($__internal_7fe54fab5c05505a4f28aeb8ef3351e0afa6f63cafc1dffeb667c0aa1ea5d787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7fe54fab5c05505a4f28aeb8ef3351e0afa6f63cafc1dffeb667c0aa1ea5d787->leave($__internal_7fe54fab5c05505a4f28aeb8ef3351e0afa6f63cafc1dffeb667c0aa1ea5d787_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
