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
        $__internal_842b32af27e15e1a9efe305cd68274256fb819c5f9be0a29a344636add3fad13 = $this->env->getExtension("native_profiler");
        $__internal_842b32af27e15e1a9efe305cd68274256fb819c5f9be0a29a344636add3fad13->enter($__internal_842b32af27e15e1a9efe305cd68274256fb819c5f9be0a29a344636add3fad13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_842b32af27e15e1a9efe305cd68274256fb819c5f9be0a29a344636add3fad13->leave($__internal_842b32af27e15e1a9efe305cd68274256fb819c5f9be0a29a344636add3fad13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_509ba45a1005f00a2a6b666279e8fd08eededcffdd248196972b4fc87aa25085 = $this->env->getExtension("native_profiler");
        $__internal_509ba45a1005f00a2a6b666279e8fd08eededcffdd248196972b4fc87aa25085->enter($__internal_509ba45a1005f00a2a6b666279e8fd08eededcffdd248196972b4fc87aa25085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_509ba45a1005f00a2a6b666279e8fd08eededcffdd248196972b4fc87aa25085->leave($__internal_509ba45a1005f00a2a6b666279e8fd08eededcffdd248196972b4fc87aa25085_prof);

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
