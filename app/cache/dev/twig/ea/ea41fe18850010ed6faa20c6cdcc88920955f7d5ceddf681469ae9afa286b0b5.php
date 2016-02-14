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
        $__internal_73278607af2df1745b759e5c0cb536cdc2a6c45af374fc9661da977846ce17c2 = $this->env->getExtension("native_profiler");
        $__internal_73278607af2df1745b759e5c0cb536cdc2a6c45af374fc9661da977846ce17c2->enter($__internal_73278607af2df1745b759e5c0cb536cdc2a6c45af374fc9661da977846ce17c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73278607af2df1745b759e5c0cb536cdc2a6c45af374fc9661da977846ce17c2->leave($__internal_73278607af2df1745b759e5c0cb536cdc2a6c45af374fc9661da977846ce17c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f977976a6f67f92d2e99e9890940f78153e8c8f5e6a119ad6daec5a256711524 = $this->env->getExtension("native_profiler");
        $__internal_f977976a6f67f92d2e99e9890940f78153e8c8f5e6a119ad6daec5a256711524->enter($__internal_f977976a6f67f92d2e99e9890940f78153e8c8f5e6a119ad6daec5a256711524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f977976a6f67f92d2e99e9890940f78153e8c8f5e6a119ad6daec5a256711524->leave($__internal_f977976a6f67f92d2e99e9890940f78153e8c8f5e6a119ad6daec5a256711524_prof);

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
