<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_57a93f3c4f1c8077eeb35ba32d9c093c100106ddbb16337f2e29535cee5acd5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_10ac8e4128e65c3a15f59f920f4d74705f8c690ba9f0a70f63c76bc01bdfe33b = $this->env->getExtension("native_profiler");
        $__internal_10ac8e4128e65c3a15f59f920f4d74705f8c690ba9f0a70f63c76bc01bdfe33b->enter($__internal_10ac8e4128e65c3a15f59f920f4d74705f8c690ba9f0a70f63c76bc01bdfe33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ac8e4128e65c3a15f59f920f4d74705f8c690ba9f0a70f63c76bc01bdfe33b->leave($__internal_10ac8e4128e65c3a15f59f920f4d74705f8c690ba9f0a70f63c76bc01bdfe33b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_041e5931457fa42f1f3652091bc654217204bf2bb37abe8658f0e049f8ab67fc = $this->env->getExtension("native_profiler");
        $__internal_041e5931457fa42f1f3652091bc654217204bf2bb37abe8658f0e049f8ab67fc->enter($__internal_041e5931457fa42f1f3652091bc654217204bf2bb37abe8658f0e049f8ab67fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_041e5931457fa42f1f3652091bc654217204bf2bb37abe8658f0e049f8ab67fc->leave($__internal_041e5931457fa42f1f3652091bc654217204bf2bb37abe8658f0e049f8ab67fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
