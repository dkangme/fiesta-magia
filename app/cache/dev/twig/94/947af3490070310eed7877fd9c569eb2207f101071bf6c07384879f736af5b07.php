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
        $__internal_bd1468d1ff421d1864c3f082de32ffd2871257d3160f3379036c71b12133f961 = $this->env->getExtension("native_profiler");
        $__internal_bd1468d1ff421d1864c3f082de32ffd2871257d3160f3379036c71b12133f961->enter($__internal_bd1468d1ff421d1864c3f082de32ffd2871257d3160f3379036c71b12133f961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd1468d1ff421d1864c3f082de32ffd2871257d3160f3379036c71b12133f961->leave($__internal_bd1468d1ff421d1864c3f082de32ffd2871257d3160f3379036c71b12133f961_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21bb4838aa8f138c1185e1ea4c98d9e528a11c7553781e666fa8064916a3407b = $this->env->getExtension("native_profiler");
        $__internal_21bb4838aa8f138c1185e1ea4c98d9e528a11c7553781e666fa8064916a3407b->enter($__internal_21bb4838aa8f138c1185e1ea4c98d9e528a11c7553781e666fa8064916a3407b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_21bb4838aa8f138c1185e1ea4c98d9e528a11c7553781e666fa8064916a3407b->leave($__internal_21bb4838aa8f138c1185e1ea4c98d9e528a11c7553781e666fa8064916a3407b_prof);

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
