<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f0470c091e433be9e5297ae18977e881dd46c25664db2cd267417758622fdb5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_1b1635172b761abddf92b5e56ba33f3d3746bea087d140a545b0b30ed7a01db6 = $this->env->getExtension("native_profiler");
        $__internal_1b1635172b761abddf92b5e56ba33f3d3746bea087d140a545b0b30ed7a01db6->enter($__internal_1b1635172b761abddf92b5e56ba33f3d3746bea087d140a545b0b30ed7a01db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b1635172b761abddf92b5e56ba33f3d3746bea087d140a545b0b30ed7a01db6->leave($__internal_1b1635172b761abddf92b5e56ba33f3d3746bea087d140a545b0b30ed7a01db6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_131aba2a8c5cc38a9a02952f2417f1a80afd4d336368489e80600b6e2d591229 = $this->env->getExtension("native_profiler");
        $__internal_131aba2a8c5cc38a9a02952f2417f1a80afd4d336368489e80600b6e2d591229->enter($__internal_131aba2a8c5cc38a9a02952f2417f1a80afd4d336368489e80600b6e2d591229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_131aba2a8c5cc38a9a02952f2417f1a80afd4d336368489e80600b6e2d591229->leave($__internal_131aba2a8c5cc38a9a02952f2417f1a80afd4d336368489e80600b6e2d591229_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
