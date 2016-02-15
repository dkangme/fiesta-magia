<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4ce965d3805ec494e2786e1a75af3c60a78ff5352dc8aec019cd0f7fe459dd51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4e319d068fe41d66774f63582200e511126719b53cb0de3fb19e5f5011ef0262 = $this->env->getExtension("native_profiler");
        $__internal_4e319d068fe41d66774f63582200e511126719b53cb0de3fb19e5f5011ef0262->enter($__internal_4e319d068fe41d66774f63582200e511126719b53cb0de3fb19e5f5011ef0262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e319d068fe41d66774f63582200e511126719b53cb0de3fb19e5f5011ef0262->leave($__internal_4e319d068fe41d66774f63582200e511126719b53cb0de3fb19e5f5011ef0262_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3732b0a1404506de927da796b91dc7e0eb1f63cccfcf6b0db0a91ac13cd8edc9 = $this->env->getExtension("native_profiler");
        $__internal_3732b0a1404506de927da796b91dc7e0eb1f63cccfcf6b0db0a91ac13cd8edc9->enter($__internal_3732b0a1404506de927da796b91dc7e0eb1f63cccfcf6b0db0a91ac13cd8edc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3732b0a1404506de927da796b91dc7e0eb1f63cccfcf6b0db0a91ac13cd8edc9->leave($__internal_3732b0a1404506de927da796b91dc7e0eb1f63cccfcf6b0db0a91ac13cd8edc9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f0dec45f5f9219993c57e5c42ba54bcbd9a2cd34458af64b4487938a433ad0 = $this->env->getExtension("native_profiler");
        $__internal_40f0dec45f5f9219993c57e5c42ba54bcbd9a2cd34458af64b4487938a433ad0->enter($__internal_40f0dec45f5f9219993c57e5c42ba54bcbd9a2cd34458af64b4487938a433ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_40f0dec45f5f9219993c57e5c42ba54bcbd9a2cd34458af64b4487938a433ad0->leave($__internal_40f0dec45f5f9219993c57e5c42ba54bcbd9a2cd34458af64b4487938a433ad0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
