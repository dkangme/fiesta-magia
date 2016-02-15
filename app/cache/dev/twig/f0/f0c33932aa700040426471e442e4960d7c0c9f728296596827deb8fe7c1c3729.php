<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_657b033bb69e7d6fc475f2708d8913e81630a94f035c0f66bad077feb3b5ea3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d507c612cfafbd5a45de76b1dbfa2900910cf316cc8f2ab7c35c597d6eab3184 = $this->env->getExtension("native_profiler");
        $__internal_d507c612cfafbd5a45de76b1dbfa2900910cf316cc8f2ab7c35c597d6eab3184->enter($__internal_d507c612cfafbd5a45de76b1dbfa2900910cf316cc8f2ab7c35c597d6eab3184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d507c612cfafbd5a45de76b1dbfa2900910cf316cc8f2ab7c35c597d6eab3184->leave($__internal_d507c612cfafbd5a45de76b1dbfa2900910cf316cc8f2ab7c35c597d6eab3184_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e90a24470334dad32f18c3a4ed9e55bc02600099ffdc7a0ff05626c7ed7337dc = $this->env->getExtension("native_profiler");
        $__internal_e90a24470334dad32f18c3a4ed9e55bc02600099ffdc7a0ff05626c7ed7337dc->enter($__internal_e90a24470334dad32f18c3a4ed9e55bc02600099ffdc7a0ff05626c7ed7337dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e90a24470334dad32f18c3a4ed9e55bc02600099ffdc7a0ff05626c7ed7337dc->leave($__internal_e90a24470334dad32f18c3a4ed9e55bc02600099ffdc7a0ff05626c7ed7337dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
