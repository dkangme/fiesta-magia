<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_57b6ccb0c20e55f39c12dd99835f0a10b444dcfb5ede0069be9a52a49f0ec205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_e9fa12c8f99c2df6636925e39611ce731f5869d3bb0c75636c1e84fc7f2cbb74 = $this->env->getExtension("native_profiler");
        $__internal_e9fa12c8f99c2df6636925e39611ce731f5869d3bb0c75636c1e84fc7f2cbb74->enter($__internal_e9fa12c8f99c2df6636925e39611ce731f5869d3bb0c75636c1e84fc7f2cbb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9fa12c8f99c2df6636925e39611ce731f5869d3bb0c75636c1e84fc7f2cbb74->leave($__internal_e9fa12c8f99c2df6636925e39611ce731f5869d3bb0c75636c1e84fc7f2cbb74_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9765e89a3fe67573b16044fbb5cc0fdbcd2018733629df10adcf14d75f9aeb20 = $this->env->getExtension("native_profiler");
        $__internal_9765e89a3fe67573b16044fbb5cc0fdbcd2018733629df10adcf14d75f9aeb20->enter($__internal_9765e89a3fe67573b16044fbb5cc0fdbcd2018733629df10adcf14d75f9aeb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9765e89a3fe67573b16044fbb5cc0fdbcd2018733629df10adcf14d75f9aeb20->leave($__internal_9765e89a3fe67573b16044fbb5cc0fdbcd2018733629df10adcf14d75f9aeb20_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
