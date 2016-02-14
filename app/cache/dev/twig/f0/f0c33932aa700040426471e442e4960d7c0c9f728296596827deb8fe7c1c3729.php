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
        $__internal_ff0eab5cb76b16bb189db49046ae933054a9b595d839bc67a252858cfb201fac = $this->env->getExtension("native_profiler");
        $__internal_ff0eab5cb76b16bb189db49046ae933054a9b595d839bc67a252858cfb201fac->enter($__internal_ff0eab5cb76b16bb189db49046ae933054a9b595d839bc67a252858cfb201fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff0eab5cb76b16bb189db49046ae933054a9b595d839bc67a252858cfb201fac->leave($__internal_ff0eab5cb76b16bb189db49046ae933054a9b595d839bc67a252858cfb201fac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f73cf04da58e1e2d296b7b50c40399ae637cf1ed632be7969859fa027a8cb302 = $this->env->getExtension("native_profiler");
        $__internal_f73cf04da58e1e2d296b7b50c40399ae637cf1ed632be7969859fa027a8cb302->enter($__internal_f73cf04da58e1e2d296b7b50c40399ae637cf1ed632be7969859fa027a8cb302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f73cf04da58e1e2d296b7b50c40399ae637cf1ed632be7969859fa027a8cb302->leave($__internal_f73cf04da58e1e2d296b7b50c40399ae637cf1ed632be7969859fa027a8cb302_prof);

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
