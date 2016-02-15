<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_31b087d653bd1af396aa51098a9a9ff58d1385fcfaea7f8074efcc392324a798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_72892c63d0340e6ae04ca2c3ef864c928bd279ade228aab0da723b14de160912 = $this->env->getExtension("native_profiler");
        $__internal_72892c63d0340e6ae04ca2c3ef864c928bd279ade228aab0da723b14de160912->enter($__internal_72892c63d0340e6ae04ca2c3ef864c928bd279ade228aab0da723b14de160912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72892c63d0340e6ae04ca2c3ef864c928bd279ade228aab0da723b14de160912->leave($__internal_72892c63d0340e6ae04ca2c3ef864c928bd279ade228aab0da723b14de160912_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8a340514e67b6e4ed717bd5c010df9cb02a7559b6d9655a868715c8c154d30c = $this->env->getExtension("native_profiler");
        $__internal_f8a340514e67b6e4ed717bd5c010df9cb02a7559b6d9655a868715c8c154d30c->enter($__internal_f8a340514e67b6e4ed717bd5c010df9cb02a7559b6d9655a868715c8c154d30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f8a340514e67b6e4ed717bd5c010df9cb02a7559b6d9655a868715c8c154d30c->leave($__internal_f8a340514e67b6e4ed717bd5c010df9cb02a7559b6d9655a868715c8c154d30c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
