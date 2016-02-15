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
        $__internal_433aea2cb8e0ff019f5644b0a2614652ecda44652c7bbaccd830e2379707727d = $this->env->getExtension("native_profiler");
        $__internal_433aea2cb8e0ff019f5644b0a2614652ecda44652c7bbaccd830e2379707727d->enter($__internal_433aea2cb8e0ff019f5644b0a2614652ecda44652c7bbaccd830e2379707727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433aea2cb8e0ff019f5644b0a2614652ecda44652c7bbaccd830e2379707727d->leave($__internal_433aea2cb8e0ff019f5644b0a2614652ecda44652c7bbaccd830e2379707727d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1d959b8609f64e98111b95e2944e3a5d1e66a6c3005d69ab49302f31ba93679 = $this->env->getExtension("native_profiler");
        $__internal_e1d959b8609f64e98111b95e2944e3a5d1e66a6c3005d69ab49302f31ba93679->enter($__internal_e1d959b8609f64e98111b95e2944e3a5d1e66a6c3005d69ab49302f31ba93679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e1d959b8609f64e98111b95e2944e3a5d1e66a6c3005d69ab49302f31ba93679->leave($__internal_e1d959b8609f64e98111b95e2944e3a5d1e66a6c3005d69ab49302f31ba93679_prof);

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
