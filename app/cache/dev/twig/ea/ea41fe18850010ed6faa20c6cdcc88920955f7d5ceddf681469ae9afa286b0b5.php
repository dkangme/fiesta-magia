<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f70d8054d0442be43cc88c88b885f8d851ba333a4096b52b842329bd2335fbc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a223de947e7bf91bf2a89a546e23a7e3d4741235f3b8435b60fbaec55d3991b2 = $this->env->getExtension("native_profiler");
        $__internal_a223de947e7bf91bf2a89a546e23a7e3d4741235f3b8435b60fbaec55d3991b2->enter($__internal_a223de947e7bf91bf2a89a546e23a7e3d4741235f3b8435b60fbaec55d3991b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a223de947e7bf91bf2a89a546e23a7e3d4741235f3b8435b60fbaec55d3991b2->leave($__internal_a223de947e7bf91bf2a89a546e23a7e3d4741235f3b8435b60fbaec55d3991b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3af2c4bbb5306f8a635f0b8186e11c0657b1191131303769918818a1b372aa75 = $this->env->getExtension("native_profiler");
        $__internal_3af2c4bbb5306f8a635f0b8186e11c0657b1191131303769918818a1b372aa75->enter($__internal_3af2c4bbb5306f8a635f0b8186e11c0657b1191131303769918818a1b372aa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3af2c4bbb5306f8a635f0b8186e11c0657b1191131303769918818a1b372aa75->leave($__internal_3af2c4bbb5306f8a635f0b8186e11c0657b1191131303769918818a1b372aa75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
