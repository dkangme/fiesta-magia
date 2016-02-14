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
        $__internal_f589b2c1338753f5960b10593702be23e35c051fc4d0cafc4b5e10b0025da744 = $this->env->getExtension("native_profiler");
        $__internal_f589b2c1338753f5960b10593702be23e35c051fc4d0cafc4b5e10b0025da744->enter($__internal_f589b2c1338753f5960b10593702be23e35c051fc4d0cafc4b5e10b0025da744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f589b2c1338753f5960b10593702be23e35c051fc4d0cafc4b5e10b0025da744->leave($__internal_f589b2c1338753f5960b10593702be23e35c051fc4d0cafc4b5e10b0025da744_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9fe4d1fde95fc8d5aafe360447373733b63a4db5ea1b1522c91deaee177ccc6 = $this->env->getExtension("native_profiler");
        $__internal_e9fe4d1fde95fc8d5aafe360447373733b63a4db5ea1b1522c91deaee177ccc6->enter($__internal_e9fe4d1fde95fc8d5aafe360447373733b63a4db5ea1b1522c91deaee177ccc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e9fe4d1fde95fc8d5aafe360447373733b63a4db5ea1b1522c91deaee177ccc6->leave($__internal_e9fe4d1fde95fc8d5aafe360447373733b63a4db5ea1b1522c91deaee177ccc6_prof);

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
