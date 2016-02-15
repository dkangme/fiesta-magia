<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1f139283c8617a8d0c7b626f926ccfa74cefc306a91f67be4790357aeb7d6694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f75a6dcae977c528de198992ebffa96d70ee6dff210654974aef3552b8886929 = $this->env->getExtension("native_profiler");
        $__internal_f75a6dcae977c528de198992ebffa96d70ee6dff210654974aef3552b8886929->enter($__internal_f75a6dcae977c528de198992ebffa96d70ee6dff210654974aef3552b8886929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75a6dcae977c528de198992ebffa96d70ee6dff210654974aef3552b8886929->leave($__internal_f75a6dcae977c528de198992ebffa96d70ee6dff210654974aef3552b8886929_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2d7654625ab20a6b1e1d52fb042245aa5f62497a2ffde8573a4153bd7501308 = $this->env->getExtension("native_profiler");
        $__internal_c2d7654625ab20a6b1e1d52fb042245aa5f62497a2ffde8573a4153bd7501308->enter($__internal_c2d7654625ab20a6b1e1d52fb042245aa5f62497a2ffde8573a4153bd7501308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c2d7654625ab20a6b1e1d52fb042245aa5f62497a2ffde8573a4153bd7501308->leave($__internal_c2d7654625ab20a6b1e1d52fb042245aa5f62497a2ffde8573a4153bd7501308_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
