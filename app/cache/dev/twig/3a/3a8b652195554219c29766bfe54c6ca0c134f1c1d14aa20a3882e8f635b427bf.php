<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_eb339b15c7bf6df6cd40d4ceaf64e371c7c46b83826aa37440dcc67a8627f13a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_0bd6c45da19cd79c7ce8989d4e634681497e2a0d09ed04d63a3775ca40202e24 = $this->env->getExtension("native_profiler");
        $__internal_0bd6c45da19cd79c7ce8989d4e634681497e2a0d09ed04d63a3775ca40202e24->enter($__internal_0bd6c45da19cd79c7ce8989d4e634681497e2a0d09ed04d63a3775ca40202e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bd6c45da19cd79c7ce8989d4e634681497e2a0d09ed04d63a3775ca40202e24->leave($__internal_0bd6c45da19cd79c7ce8989d4e634681497e2a0d09ed04d63a3775ca40202e24_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fde241e3e1b5094f94c184a043fce21549ad5e2bda6943c982d5113a3cf5650 = $this->env->getExtension("native_profiler");
        $__internal_8fde241e3e1b5094f94c184a043fce21549ad5e2bda6943c982d5113a3cf5650->enter($__internal_8fde241e3e1b5094f94c184a043fce21549ad5e2bda6943c982d5113a3cf5650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_8fde241e3e1b5094f94c184a043fce21549ad5e2bda6943c982d5113a3cf5650->leave($__internal_8fde241e3e1b5094f94c184a043fce21549ad5e2bda6943c982d5113a3cf5650_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
