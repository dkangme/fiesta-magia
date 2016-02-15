<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9edb810e1c9394b07077ce3959bc5a3d5f62668558385ca6ea4eedb32ef72bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b699922dd0c65ffd00582ccb5cf299d133e27eeb52e3b5b72b575cca4eef583 = $this->env->getExtension("native_profiler");
        $__internal_6b699922dd0c65ffd00582ccb5cf299d133e27eeb52e3b5b72b575cca4eef583->enter($__internal_6b699922dd0c65ffd00582ccb5cf299d133e27eeb52e3b5b72b575cca4eef583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6b699922dd0c65ffd00582ccb5cf299d133e27eeb52e3b5b72b575cca4eef583->leave($__internal_6b699922dd0c65ffd00582ccb5cf299d133e27eeb52e3b5b72b575cca4eef583_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3ae1f9da4002622408699bd7d0f66fdf58b8e19471cdab53ca3a296bfbe67cd4 = $this->env->getExtension("native_profiler");
        $__internal_3ae1f9da4002622408699bd7d0f66fdf58b8e19471cdab53ca3a296bfbe67cd4->enter($__internal_3ae1f9da4002622408699bd7d0f66fdf58b8e19471cdab53ca3a296bfbe67cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3ae1f9da4002622408699bd7d0f66fdf58b8e19471cdab53ca3a296bfbe67cd4->leave($__internal_3ae1f9da4002622408699bd7d0f66fdf58b8e19471cdab53ca3a296bfbe67cd4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_28b3e0dc57923014282159b58de086c3537c8e86b27b66635d57f9ac2fd80c06 = $this->env->getExtension("native_profiler");
        $__internal_28b3e0dc57923014282159b58de086c3537c8e86b27b66635d57f9ac2fd80c06->enter($__internal_28b3e0dc57923014282159b58de086c3537c8e86b27b66635d57f9ac2fd80c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_28b3e0dc57923014282159b58de086c3537c8e86b27b66635d57f9ac2fd80c06->leave($__internal_28b3e0dc57923014282159b58de086c3537c8e86b27b66635d57f9ac2fd80c06_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_601ab88d379efe9ad8252d6559b5cc33801f53eda3348a7a5449b6087be0953d = $this->env->getExtension("native_profiler");
        $__internal_601ab88d379efe9ad8252d6559b5cc33801f53eda3348a7a5449b6087be0953d->enter($__internal_601ab88d379efe9ad8252d6559b5cc33801f53eda3348a7a5449b6087be0953d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_601ab88d379efe9ad8252d6559b5cc33801f53eda3348a7a5449b6087be0953d->leave($__internal_601ab88d379efe9ad8252d6559b5cc33801f53eda3348a7a5449b6087be0953d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
