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
        $__internal_1383b07df3748af14e26b2bda177dd7cd4e345028e51a251be960a25b672154c = $this->env->getExtension("native_profiler");
        $__internal_1383b07df3748af14e26b2bda177dd7cd4e345028e51a251be960a25b672154c->enter($__internal_1383b07df3748af14e26b2bda177dd7cd4e345028e51a251be960a25b672154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1383b07df3748af14e26b2bda177dd7cd4e345028e51a251be960a25b672154c->leave($__internal_1383b07df3748af14e26b2bda177dd7cd4e345028e51a251be960a25b672154c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89cdf6018a038d2d147092f28fbe4fc8d9d0ba25ce53e3df4a1e84d9a3b86e55 = $this->env->getExtension("native_profiler");
        $__internal_89cdf6018a038d2d147092f28fbe4fc8d9d0ba25ce53e3df4a1e84d9a3b86e55->enter($__internal_89cdf6018a038d2d147092f28fbe4fc8d9d0ba25ce53e3df4a1e84d9a3b86e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_89cdf6018a038d2d147092f28fbe4fc8d9d0ba25ce53e3df4a1e84d9a3b86e55->leave($__internal_89cdf6018a038d2d147092f28fbe4fc8d9d0ba25ce53e3df4a1e84d9a3b86e55_prof);

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
