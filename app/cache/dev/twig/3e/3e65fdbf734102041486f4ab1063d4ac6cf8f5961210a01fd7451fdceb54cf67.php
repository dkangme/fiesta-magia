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
        $__internal_fa8d276353a4056a364b2fd4f1102ae70ead61ec873298ead91a0ae4411d4327 = $this->env->getExtension("native_profiler");
        $__internal_fa8d276353a4056a364b2fd4f1102ae70ead61ec873298ead91a0ae4411d4327->enter($__internal_fa8d276353a4056a364b2fd4f1102ae70ead61ec873298ead91a0ae4411d4327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa8d276353a4056a364b2fd4f1102ae70ead61ec873298ead91a0ae4411d4327->leave($__internal_fa8d276353a4056a364b2fd4f1102ae70ead61ec873298ead91a0ae4411d4327_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9496b0b0dfe2bc3e3c0cafd92cf0fa9d52b100e151ae3ad4d54007e18dec1da = $this->env->getExtension("native_profiler");
        $__internal_c9496b0b0dfe2bc3e3c0cafd92cf0fa9d52b100e151ae3ad4d54007e18dec1da->enter($__internal_c9496b0b0dfe2bc3e3c0cafd92cf0fa9d52b100e151ae3ad4d54007e18dec1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c9496b0b0dfe2bc3e3c0cafd92cf0fa9d52b100e151ae3ad4d54007e18dec1da->leave($__internal_c9496b0b0dfe2bc3e3c0cafd92cf0fa9d52b100e151ae3ad4d54007e18dec1da_prof);

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
