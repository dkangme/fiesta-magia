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
        $__internal_30668b140a142396270d298f8ca47b5aa6561ce33a620445006413169651019a = $this->env->getExtension("native_profiler");
        $__internal_30668b140a142396270d298f8ca47b5aa6561ce33a620445006413169651019a->enter($__internal_30668b140a142396270d298f8ca47b5aa6561ce33a620445006413169651019a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_30668b140a142396270d298f8ca47b5aa6561ce33a620445006413169651019a->leave($__internal_30668b140a142396270d298f8ca47b5aa6561ce33a620445006413169651019a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b67c65dc8a7f7bef3f2f6710f45b0020d2d625c93f7f955892de57c434b918a1 = $this->env->getExtension("native_profiler");
        $__internal_b67c65dc8a7f7bef3f2f6710f45b0020d2d625c93f7f955892de57c434b918a1->enter($__internal_b67c65dc8a7f7bef3f2f6710f45b0020d2d625c93f7f955892de57c434b918a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b67c65dc8a7f7bef3f2f6710f45b0020d2d625c93f7f955892de57c434b918a1->leave($__internal_b67c65dc8a7f7bef3f2f6710f45b0020d2d625c93f7f955892de57c434b918a1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6a2f1f5166bceaa05c9ff9e7abad2f70dbc62f09cb55f304115b795c01b45ca1 = $this->env->getExtension("native_profiler");
        $__internal_6a2f1f5166bceaa05c9ff9e7abad2f70dbc62f09cb55f304115b795c01b45ca1->enter($__internal_6a2f1f5166bceaa05c9ff9e7abad2f70dbc62f09cb55f304115b795c01b45ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6a2f1f5166bceaa05c9ff9e7abad2f70dbc62f09cb55f304115b795c01b45ca1->leave($__internal_6a2f1f5166bceaa05c9ff9e7abad2f70dbc62f09cb55f304115b795c01b45ca1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_621994602a45ee118b14debc0eed04bb958165c7b77503ac5e54b1f1403bfc66 = $this->env->getExtension("native_profiler");
        $__internal_621994602a45ee118b14debc0eed04bb958165c7b77503ac5e54b1f1403bfc66->enter($__internal_621994602a45ee118b14debc0eed04bb958165c7b77503ac5e54b1f1403bfc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_621994602a45ee118b14debc0eed04bb958165c7b77503ac5e54b1f1403bfc66->leave($__internal_621994602a45ee118b14debc0eed04bb958165c7b77503ac5e54b1f1403bfc66_prof);

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
