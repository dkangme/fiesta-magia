<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ae91db3fb805bc87250eaa8249f320c95f6e26e5859ba08b23554195076bec1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d468f1564d8bd9104ce86970935f88180ef1b3f5082510181b23557b009d5357 = $this->env->getExtension("native_profiler");
        $__internal_d468f1564d8bd9104ce86970935f88180ef1b3f5082510181b23557b009d5357->enter($__internal_d468f1564d8bd9104ce86970935f88180ef1b3f5082510181b23557b009d5357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d468f1564d8bd9104ce86970935f88180ef1b3f5082510181b23557b009d5357->leave($__internal_d468f1564d8bd9104ce86970935f88180ef1b3f5082510181b23557b009d5357_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5b482f0982d6517306d2c4f726f020ec87270ebdc31c1e8dfd8d2a02e1c2171 = $this->env->getExtension("native_profiler");
        $__internal_c5b482f0982d6517306d2c4f726f020ec87270ebdc31c1e8dfd8d2a02e1c2171->enter($__internal_c5b482f0982d6517306d2c4f726f020ec87270ebdc31c1e8dfd8d2a02e1c2171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c5b482f0982d6517306d2c4f726f020ec87270ebdc31c1e8dfd8d2a02e1c2171->leave($__internal_c5b482f0982d6517306d2c4f726f020ec87270ebdc31c1e8dfd8d2a02e1c2171_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97d0c091531040d06a3244493326536f4b93d61092392573a79417f952f75269 = $this->env->getExtension("native_profiler");
        $__internal_97d0c091531040d06a3244493326536f4b93d61092392573a79417f952f75269->enter($__internal_97d0c091531040d06a3244493326536f4b93d61092392573a79417f952f75269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97d0c091531040d06a3244493326536f4b93d61092392573a79417f952f75269->leave($__internal_97d0c091531040d06a3244493326536f4b93d61092392573a79417f952f75269_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_964b65514ab8cffe64bae605d60a2c03601131ac42c7dcdd2dbe8c6bf062b4f2 = $this->env->getExtension("native_profiler");
        $__internal_964b65514ab8cffe64bae605d60a2c03601131ac42c7dcdd2dbe8c6bf062b4f2->enter($__internal_964b65514ab8cffe64bae605d60a2c03601131ac42c7dcdd2dbe8c6bf062b4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_964b65514ab8cffe64bae605d60a2c03601131ac42c7dcdd2dbe8c6bf062b4f2->leave($__internal_964b65514ab8cffe64bae605d60a2c03601131ac42c7dcdd2dbe8c6bf062b4f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
