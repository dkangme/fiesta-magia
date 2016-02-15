<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3bd1500aedcdc84252bb0e974f909af46c8c2c403f6175a31647dccc04756383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_bd244074fd511a22c58c8c0fe3fe1ead66f9e09dd6bc84bf6f794e3ba4738a63 = $this->env->getExtension("native_profiler");
        $__internal_bd244074fd511a22c58c8c0fe3fe1ead66f9e09dd6bc84bf6f794e3ba4738a63->enter($__internal_bd244074fd511a22c58c8c0fe3fe1ead66f9e09dd6bc84bf6f794e3ba4738a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd244074fd511a22c58c8c0fe3fe1ead66f9e09dd6bc84bf6f794e3ba4738a63->leave($__internal_bd244074fd511a22c58c8c0fe3fe1ead66f9e09dd6bc84bf6f794e3ba4738a63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4b4da69f9bde82f3cc6c933c1b66025d5979bfb90cef9e8c6c5362e964b0d9b = $this->env->getExtension("native_profiler");
        $__internal_f4b4da69f9bde82f3cc6c933c1b66025d5979bfb90cef9e8c6c5362e964b0d9b->enter($__internal_f4b4da69f9bde82f3cc6c933c1b66025d5979bfb90cef9e8c6c5362e964b0d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f4b4da69f9bde82f3cc6c933c1b66025d5979bfb90cef9e8c6c5362e964b0d9b->leave($__internal_f4b4da69f9bde82f3cc6c933c1b66025d5979bfb90cef9e8c6c5362e964b0d9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
