<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_34b67839b10996051ec6aaba48a9bc00ea5ae65993552ded7ad1412baa0c3044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4b77d18212cf81c4fe1d73f581197a38d3a3696215459e7a2e7c224f29366d8d = $this->env->getExtension("native_profiler");
        $__internal_4b77d18212cf81c4fe1d73f581197a38d3a3696215459e7a2e7c224f29366d8d->enter($__internal_4b77d18212cf81c4fe1d73f581197a38d3a3696215459e7a2e7c224f29366d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b77d18212cf81c4fe1d73f581197a38d3a3696215459e7a2e7c224f29366d8d->leave($__internal_4b77d18212cf81c4fe1d73f581197a38d3a3696215459e7a2e7c224f29366d8d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7643f686857018a392e0c41f5f6db24d95486813a5ec96b9895a8c1654b3a20 = $this->env->getExtension("native_profiler");
        $__internal_f7643f686857018a392e0c41f5f6db24d95486813a5ec96b9895a8c1654b3a20->enter($__internal_f7643f686857018a392e0c41f5f6db24d95486813a5ec96b9895a8c1654b3a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f7643f686857018a392e0c41f5f6db24d95486813a5ec96b9895a8c1654b3a20->leave($__internal_f7643f686857018a392e0c41f5f6db24d95486813a5ec96b9895a8c1654b3a20_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
