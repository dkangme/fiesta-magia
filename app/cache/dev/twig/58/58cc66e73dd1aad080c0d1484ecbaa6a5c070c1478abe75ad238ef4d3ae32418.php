<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_076b3f8bf2a4e6132827bf4be3ec9b6abbf36568055f68435bffd22e5ccb071e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_7287c9cc63a280517b0a8533227c133cfb2e23492afe3bdda6c2241e8b81cc67 = $this->env->getExtension("native_profiler");
        $__internal_7287c9cc63a280517b0a8533227c133cfb2e23492afe3bdda6c2241e8b81cc67->enter($__internal_7287c9cc63a280517b0a8533227c133cfb2e23492afe3bdda6c2241e8b81cc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7287c9cc63a280517b0a8533227c133cfb2e23492afe3bdda6c2241e8b81cc67->leave($__internal_7287c9cc63a280517b0a8533227c133cfb2e23492afe3bdda6c2241e8b81cc67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_969082c8d897cc054f842849f1ab84e4ae6822b1bdc75c4eba2d5fed76df4811 = $this->env->getExtension("native_profiler");
        $__internal_969082c8d897cc054f842849f1ab84e4ae6822b1bdc75c4eba2d5fed76df4811->enter($__internal_969082c8d897cc054f842849f1ab84e4ae6822b1bdc75c4eba2d5fed76df4811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_969082c8d897cc054f842849f1ab84e4ae6822b1bdc75c4eba2d5fed76df4811->leave($__internal_969082c8d897cc054f842849f1ab84e4ae6822b1bdc75c4eba2d5fed76df4811_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
