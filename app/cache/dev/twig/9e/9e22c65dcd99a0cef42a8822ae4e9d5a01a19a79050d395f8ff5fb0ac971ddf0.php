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
        $__internal_6ac2bd39465cf3f9e164841c3cde173605d5a2d7e1c7bdc1be0484252e8c33dc = $this->env->getExtension("native_profiler");
        $__internal_6ac2bd39465cf3f9e164841c3cde173605d5a2d7e1c7bdc1be0484252e8c33dc->enter($__internal_6ac2bd39465cf3f9e164841c3cde173605d5a2d7e1c7bdc1be0484252e8c33dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac2bd39465cf3f9e164841c3cde173605d5a2d7e1c7bdc1be0484252e8c33dc->leave($__internal_6ac2bd39465cf3f9e164841c3cde173605d5a2d7e1c7bdc1be0484252e8c33dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9cd94d11a4456aac59076709135469a40c9c45b46dc3aeef23413c6a5a45dc5 = $this->env->getExtension("native_profiler");
        $__internal_d9cd94d11a4456aac59076709135469a40c9c45b46dc3aeef23413c6a5a45dc5->enter($__internal_d9cd94d11a4456aac59076709135469a40c9c45b46dc3aeef23413c6a5a45dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d9cd94d11a4456aac59076709135469a40c9c45b46dc3aeef23413c6a5a45dc5->leave($__internal_d9cd94d11a4456aac59076709135469a40c9c45b46dc3aeef23413c6a5a45dc5_prof);

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
