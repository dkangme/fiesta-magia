<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9961b18c90aac63e9daa3f4b6582f1b5116691bbdf5f0edeb056634571633ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01d0f286c641887f2b5f1b0cd7d2e4deb4eb9cb8a8c53c2f772238ed21757a46 = $this->env->getExtension("native_profiler");
        $__internal_01d0f286c641887f2b5f1b0cd7d2e4deb4eb9cb8a8c53c2f772238ed21757a46->enter($__internal_01d0f286c641887f2b5f1b0cd7d2e4deb4eb9cb8a8c53c2f772238ed21757a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d0f286c641887f2b5f1b0cd7d2e4deb4eb9cb8a8c53c2f772238ed21757a46->leave($__internal_01d0f286c641887f2b5f1b0cd7d2e4deb4eb9cb8a8c53c2f772238ed21757a46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_550db86caace8a542000434788f544ba668e5d03d6e18f717b799be8aca07f90 = $this->env->getExtension("native_profiler");
        $__internal_550db86caace8a542000434788f544ba668e5d03d6e18f717b799be8aca07f90->enter($__internal_550db86caace8a542000434788f544ba668e5d03d6e18f717b799be8aca07f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_550db86caace8a542000434788f544ba668e5d03d6e18f717b799be8aca07f90->leave($__internal_550db86caace8a542000434788f544ba668e5d03d6e18f717b799be8aca07f90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_94c3b8e74932b2fc86ff959ac5a3237e37f4f5a7fa9891943440ecee21d9e2fe = $this->env->getExtension("native_profiler");
        $__internal_94c3b8e74932b2fc86ff959ac5a3237e37f4f5a7fa9891943440ecee21d9e2fe->enter($__internal_94c3b8e74932b2fc86ff959ac5a3237e37f4f5a7fa9891943440ecee21d9e2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_94c3b8e74932b2fc86ff959ac5a3237e37f4f5a7fa9891943440ecee21d9e2fe->leave($__internal_94c3b8e74932b2fc86ff959ac5a3237e37f4f5a7fa9891943440ecee21d9e2fe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_82b7269b174bc9badd2d42f5d7e2d493133ad19d8aa82811b862b5f5c814ec79 = $this->env->getExtension("native_profiler");
        $__internal_82b7269b174bc9badd2d42f5d7e2d493133ad19d8aa82811b862b5f5c814ec79->enter($__internal_82b7269b174bc9badd2d42f5d7e2d493133ad19d8aa82811b862b5f5c814ec79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_82b7269b174bc9badd2d42f5d7e2d493133ad19d8aa82811b862b5f5c814ec79->leave($__internal_82b7269b174bc9badd2d42f5d7e2d493133ad19d8aa82811b862b5f5c814ec79_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
