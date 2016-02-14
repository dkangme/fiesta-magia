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
        $__internal_2a65d7ec6d3ca1633bf4bca8ee128db20b830e64bafb380b10b59a4072d87419 = $this->env->getExtension("native_profiler");
        $__internal_2a65d7ec6d3ca1633bf4bca8ee128db20b830e64bafb380b10b59a4072d87419->enter($__internal_2a65d7ec6d3ca1633bf4bca8ee128db20b830e64bafb380b10b59a4072d87419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a65d7ec6d3ca1633bf4bca8ee128db20b830e64bafb380b10b59a4072d87419->leave($__internal_2a65d7ec6d3ca1633bf4bca8ee128db20b830e64bafb380b10b59a4072d87419_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8f4b205387f70bed05974ed4ffb4bb2549a91e22af36ee5841797575d557f03 = $this->env->getExtension("native_profiler");
        $__internal_b8f4b205387f70bed05974ed4ffb4bb2549a91e22af36ee5841797575d557f03->enter($__internal_b8f4b205387f70bed05974ed4ffb4bb2549a91e22af36ee5841797575d557f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b8f4b205387f70bed05974ed4ffb4bb2549a91e22af36ee5841797575d557f03->leave($__internal_b8f4b205387f70bed05974ed4ffb4bb2549a91e22af36ee5841797575d557f03_prof);

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
