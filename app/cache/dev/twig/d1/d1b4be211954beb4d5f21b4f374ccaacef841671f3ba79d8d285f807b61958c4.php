<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3bd1500aedcdc84252bb0e974f909af46c8c2c403f6175a31647dccc04756383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6d9bfff82bf66a4012ab017a10055918585bc420736b6efeb866f5f3124d9c8d = $this->env->getExtension("native_profiler");
        $__internal_6d9bfff82bf66a4012ab017a10055918585bc420736b6efeb866f5f3124d9c8d->enter($__internal_6d9bfff82bf66a4012ab017a10055918585bc420736b6efeb866f5f3124d9c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9bfff82bf66a4012ab017a10055918585bc420736b6efeb866f5f3124d9c8d->leave($__internal_6d9bfff82bf66a4012ab017a10055918585bc420736b6efeb866f5f3124d9c8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23f296327f9e5449764e885c17e0e7c07dc61e7517310864cf9b4a5d62585567 = $this->env->getExtension("native_profiler");
        $__internal_23f296327f9e5449764e885c17e0e7c07dc61e7517310864cf9b4a5d62585567->enter($__internal_23f296327f9e5449764e885c17e0e7c07dc61e7517310864cf9b4a5d62585567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_23f296327f9e5449764e885c17e0e7c07dc61e7517310864cf9b4a5d62585567->leave($__internal_23f296327f9e5449764e885c17e0e7c07dc61e7517310864cf9b4a5d62585567_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
