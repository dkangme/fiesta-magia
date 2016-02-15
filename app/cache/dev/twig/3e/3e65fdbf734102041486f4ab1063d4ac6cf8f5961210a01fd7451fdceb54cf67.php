<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2fe9b44ca85e71297ae7dd4324d6e78b57943d62dc98ab3b1f63f4e7093a40aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed475bff734339275fab45cdee91faa0fa291e25312a335f4638155e856e2119 = $this->env->getExtension("native_profiler");
        $__internal_ed475bff734339275fab45cdee91faa0fa291e25312a335f4638155e856e2119->enter($__internal_ed475bff734339275fab45cdee91faa0fa291e25312a335f4638155e856e2119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ed475bff734339275fab45cdee91faa0fa291e25312a335f4638155e856e2119->leave($__internal_ed475bff734339275fab45cdee91faa0fa291e25312a335f4638155e856e2119_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_833f8e055bafe104673dd58963421fc31e520c5d5f932b4d3095d5e27f10b91d = $this->env->getExtension("native_profiler");
        $__internal_833f8e055bafe104673dd58963421fc31e520c5d5f932b4d3095d5e27f10b91d->enter($__internal_833f8e055bafe104673dd58963421fc31e520c5d5f932b4d3095d5e27f10b91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_833f8e055bafe104673dd58963421fc31e520c5d5f932b4d3095d5e27f10b91d->leave($__internal_833f8e055bafe104673dd58963421fc31e520c5d5f932b4d3095d5e27f10b91d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
