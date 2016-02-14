<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9961b18c90aac63e9daa3f4b6582f1b5116691bbdf5f0edeb056634571633ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f761e148ddc3a6dce97ca6424f55d75658eaf663818b7d5d6e4a2ec27e02bb81 = $this->env->getExtension("native_profiler");
        $__internal_f761e148ddc3a6dce97ca6424f55d75658eaf663818b7d5d6e4a2ec27e02bb81->enter($__internal_f761e148ddc3a6dce97ca6424f55d75658eaf663818b7d5d6e4a2ec27e02bb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f761e148ddc3a6dce97ca6424f55d75658eaf663818b7d5d6e4a2ec27e02bb81->leave($__internal_f761e148ddc3a6dce97ca6424f55d75658eaf663818b7d5d6e4a2ec27e02bb81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27da8c4a2ed1850af9a785be651487e8d346f58765bb90d0492026f8da3a935e = $this->env->getExtension("native_profiler");
        $__internal_27da8c4a2ed1850af9a785be651487e8d346f58765bb90d0492026f8da3a935e->enter($__internal_27da8c4a2ed1850af9a785be651487e8d346f58765bb90d0492026f8da3a935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_27da8c4a2ed1850af9a785be651487e8d346f58765bb90d0492026f8da3a935e->leave($__internal_27da8c4a2ed1850af9a785be651487e8d346f58765bb90d0492026f8da3a935e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_327d8afe3da0e9466b63fdf9d96fe1367c0b782705f774f39c69cbd3086c2476 = $this->env->getExtension("native_profiler");
        $__internal_327d8afe3da0e9466b63fdf9d96fe1367c0b782705f774f39c69cbd3086c2476->enter($__internal_327d8afe3da0e9466b63fdf9d96fe1367c0b782705f774f39c69cbd3086c2476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_327d8afe3da0e9466b63fdf9d96fe1367c0b782705f774f39c69cbd3086c2476->leave($__internal_327d8afe3da0e9466b63fdf9d96fe1367c0b782705f774f39c69cbd3086c2476_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ff7fa91f3cf91843a4830f9b37f0baa0c5a61a595ad1670cd6fc661e80c0aa2 = $this->env->getExtension("native_profiler");
        $__internal_4ff7fa91f3cf91843a4830f9b37f0baa0c5a61a595ad1670cd6fc661e80c0aa2->enter($__internal_4ff7fa91f3cf91843a4830f9b37f0baa0c5a61a595ad1670cd6fc661e80c0aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4ff7fa91f3cf91843a4830f9b37f0baa0c5a61a595ad1670cd6fc661e80c0aa2->leave($__internal_4ff7fa91f3cf91843a4830f9b37f0baa0c5a61a595ad1670cd6fc661e80c0aa2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
