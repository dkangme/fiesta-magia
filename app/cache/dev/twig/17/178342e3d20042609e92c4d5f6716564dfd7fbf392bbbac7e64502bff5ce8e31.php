<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4889dd87533ddac80ca50705580000994321fca04701edc339b6974e070a99bb extends Twig_Template
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
        $__internal_5086cfab62473bf6e59ae95b4c736fd6a2981267b917c1ca2c953324a7931e76 = $this->env->getExtension("native_profiler");
        $__internal_5086cfab62473bf6e59ae95b4c736fd6a2981267b917c1ca2c953324a7931e76->enter($__internal_5086cfab62473bf6e59ae95b4c736fd6a2981267b917c1ca2c953324a7931e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5086cfab62473bf6e59ae95b4c736fd6a2981267b917c1ca2c953324a7931e76->leave($__internal_5086cfab62473bf6e59ae95b4c736fd6a2981267b917c1ca2c953324a7931e76_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_00b913291efcfeaa255e0f39cd04717dd296c41267984dc53ae811c7a9301e4b = $this->env->getExtension("native_profiler");
        $__internal_00b913291efcfeaa255e0f39cd04717dd296c41267984dc53ae811c7a9301e4b->enter($__internal_00b913291efcfeaa255e0f39cd04717dd296c41267984dc53ae811c7a9301e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_00b913291efcfeaa255e0f39cd04717dd296c41267984dc53ae811c7a9301e4b->leave($__internal_00b913291efcfeaa255e0f39cd04717dd296c41267984dc53ae811c7a9301e4b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8230f68c3633391cb6225ee0c7198be740c5161a7df7b7ac7ccf5f9f3ccecbac = $this->env->getExtension("native_profiler");
        $__internal_8230f68c3633391cb6225ee0c7198be740c5161a7df7b7ac7ccf5f9f3ccecbac->enter($__internal_8230f68c3633391cb6225ee0c7198be740c5161a7df7b7ac7ccf5f9f3ccecbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8230f68c3633391cb6225ee0c7198be740c5161a7df7b7ac7ccf5f9f3ccecbac->leave($__internal_8230f68c3633391cb6225ee0c7198be740c5161a7df7b7ac7ccf5f9f3ccecbac_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8eacf20896b01e7dd36918f3dfd35c77f604d8fbe34f61bb30c25693fd15d4b3 = $this->env->getExtension("native_profiler");
        $__internal_8eacf20896b01e7dd36918f3dfd35c77f604d8fbe34f61bb30c25693fd15d4b3->enter($__internal_8eacf20896b01e7dd36918f3dfd35c77f604d8fbe34f61bb30c25693fd15d4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8eacf20896b01e7dd36918f3dfd35c77f604d8fbe34f61bb30c25693fd15d4b3->leave($__internal_8eacf20896b01e7dd36918f3dfd35c77f604d8fbe34f61bb30c25693fd15d4b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
