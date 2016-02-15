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
        $__internal_6468fb7626766b25bf4ba478b7fa9e1f8fa2359e549e44e22b9a552091cf9565 = $this->env->getExtension("native_profiler");
        $__internal_6468fb7626766b25bf4ba478b7fa9e1f8fa2359e549e44e22b9a552091cf9565->enter($__internal_6468fb7626766b25bf4ba478b7fa9e1f8fa2359e549e44e22b9a552091cf9565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6468fb7626766b25bf4ba478b7fa9e1f8fa2359e549e44e22b9a552091cf9565->leave($__internal_6468fb7626766b25bf4ba478b7fa9e1f8fa2359e549e44e22b9a552091cf9565_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d56eb87d6711a8db6d6b43a06eda3e51d0a26c1b79bbf4d715fa937a160d7f49 = $this->env->getExtension("native_profiler");
        $__internal_d56eb87d6711a8db6d6b43a06eda3e51d0a26c1b79bbf4d715fa937a160d7f49->enter($__internal_d56eb87d6711a8db6d6b43a06eda3e51d0a26c1b79bbf4d715fa937a160d7f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d56eb87d6711a8db6d6b43a06eda3e51d0a26c1b79bbf4d715fa937a160d7f49->leave($__internal_d56eb87d6711a8db6d6b43a06eda3e51d0a26c1b79bbf4d715fa937a160d7f49_prof);

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
