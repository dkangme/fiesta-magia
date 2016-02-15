<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_cdfc9bba57d1217aac54687650db733f07163dd91423d348c35f7872c9ab48fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f4605db84b56fa54beda34e6fad3b6f8a6441e90213c4e67faf44d1e2bde0374 = $this->env->getExtension("native_profiler");
        $__internal_f4605db84b56fa54beda34e6fad3b6f8a6441e90213c4e67faf44d1e2bde0374->enter($__internal_f4605db84b56fa54beda34e6fad3b6f8a6441e90213c4e67faf44d1e2bde0374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4605db84b56fa54beda34e6fad3b6f8a6441e90213c4e67faf44d1e2bde0374->leave($__internal_f4605db84b56fa54beda34e6fad3b6f8a6441e90213c4e67faf44d1e2bde0374_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80c7fad51325d6b7269b5ac465e8ef4f770da41624a0e6e40d412c7bebe5a2b6 = $this->env->getExtension("native_profiler");
        $__internal_80c7fad51325d6b7269b5ac465e8ef4f770da41624a0e6e40d412c7bebe5a2b6->enter($__internal_80c7fad51325d6b7269b5ac465e8ef4f770da41624a0e6e40d412c7bebe5a2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_80c7fad51325d6b7269b5ac465e8ef4f770da41624a0e6e40d412c7bebe5a2b6->leave($__internal_80c7fad51325d6b7269b5ac465e8ef4f770da41624a0e6e40d412c7bebe5a2b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
