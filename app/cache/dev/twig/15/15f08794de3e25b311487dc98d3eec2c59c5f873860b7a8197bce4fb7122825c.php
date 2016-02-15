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
        $__internal_a25be38450388e633d753b24d9541221658795a3eae3497d2102186a1fda18fd = $this->env->getExtension("native_profiler");
        $__internal_a25be38450388e633d753b24d9541221658795a3eae3497d2102186a1fda18fd->enter($__internal_a25be38450388e633d753b24d9541221658795a3eae3497d2102186a1fda18fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a25be38450388e633d753b24d9541221658795a3eae3497d2102186a1fda18fd->leave($__internal_a25be38450388e633d753b24d9541221658795a3eae3497d2102186a1fda18fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28520b08d643d38700629f12e4cafee4703100bd0eef93fde694b899cc2193cc = $this->env->getExtension("native_profiler");
        $__internal_28520b08d643d38700629f12e4cafee4703100bd0eef93fde694b899cc2193cc->enter($__internal_28520b08d643d38700629f12e4cafee4703100bd0eef93fde694b899cc2193cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28520b08d643d38700629f12e4cafee4703100bd0eef93fde694b899cc2193cc->leave($__internal_28520b08d643d38700629f12e4cafee4703100bd0eef93fde694b899cc2193cc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7962e85394a6f42a91d2af98ee2acef1b6795794d65b4f175d4289bd369c3519 = $this->env->getExtension("native_profiler");
        $__internal_7962e85394a6f42a91d2af98ee2acef1b6795794d65b4f175d4289bd369c3519->enter($__internal_7962e85394a6f42a91d2af98ee2acef1b6795794d65b4f175d4289bd369c3519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7962e85394a6f42a91d2af98ee2acef1b6795794d65b4f175d4289bd369c3519->leave($__internal_7962e85394a6f42a91d2af98ee2acef1b6795794d65b4f175d4289bd369c3519_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_46f27d959363581201f1ccdc53e698a5ed74024cd173ec0ba59d9393f2aa7a22 = $this->env->getExtension("native_profiler");
        $__internal_46f27d959363581201f1ccdc53e698a5ed74024cd173ec0ba59d9393f2aa7a22->enter($__internal_46f27d959363581201f1ccdc53e698a5ed74024cd173ec0ba59d9393f2aa7a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_46f27d959363581201f1ccdc53e698a5ed74024cd173ec0ba59d9393f2aa7a22->leave($__internal_46f27d959363581201f1ccdc53e698a5ed74024cd173ec0ba59d9393f2aa7a22_prof);

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
