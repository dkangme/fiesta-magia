<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_71378c491685a23b09ce1addd177cd81af9052ddd46d5e1ac26e6e4ede9f2c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_64d7421c7757f70397f44c8e2d41932ca6d18c37226461ef3c46365ef033a90f = $this->env->getExtension("native_profiler");
        $__internal_64d7421c7757f70397f44c8e2d41932ca6d18c37226461ef3c46365ef033a90f->enter($__internal_64d7421c7757f70397f44c8e2d41932ca6d18c37226461ef3c46365ef033a90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d7421c7757f70397f44c8e2d41932ca6d18c37226461ef3c46365ef033a90f->leave($__internal_64d7421c7757f70397f44c8e2d41932ca6d18c37226461ef3c46365ef033a90f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d71d047fc7ed2c6142df6ef17eb4a7c19df0c411f0dbba84b887bce73ce51c1 = $this->env->getExtension("native_profiler");
        $__internal_1d71d047fc7ed2c6142df6ef17eb4a7c19df0c411f0dbba84b887bce73ce51c1->enter($__internal_1d71d047fc7ed2c6142df6ef17eb4a7c19df0c411f0dbba84b887bce73ce51c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1d71d047fc7ed2c6142df6ef17eb4a7c19df0c411f0dbba84b887bce73ce51c1->leave($__internal_1d71d047fc7ed2c6142df6ef17eb4a7c19df0c411f0dbba84b887bce73ce51c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
