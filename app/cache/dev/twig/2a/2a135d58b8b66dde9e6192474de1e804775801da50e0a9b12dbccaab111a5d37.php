<?php

/* :event:new.html.twig */
class __TwigTemplate_c0aad792dbedece41b771a6fa5f9b595c09a8d00f5009af8e861e0e4e7686785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":event:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76ce08a0209bb08e6413a71dd96e6d1f1e79da4220c9b7baa29c02245690ebc3 = $this->env->getExtension("native_profiler");
        $__internal_76ce08a0209bb08e6413a71dd96e6d1f1e79da4220c9b7baa29c02245690ebc3->enter($__internal_76ce08a0209bb08e6413a71dd96e6d1f1e79da4220c9b7baa29c02245690ebc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":event:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ce08a0209bb08e6413a71dd96e6d1f1e79da4220c9b7baa29c02245690ebc3->leave($__internal_76ce08a0209bb08e6413a71dd96e6d1f1e79da4220c9b7baa29c02245690ebc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcd0d12a390856e1dddbdf2c8b7ca8e1f54e091c6564cee139afb704f56de972 = $this->env->getExtension("native_profiler");
        $__internal_fcd0d12a390856e1dddbdf2c8b7ca8e1f54e091c6564cee139afb704f56de972->enter($__internal_fcd0d12a390856e1dddbdf2c8b7ca8e1f54e091c6564cee139afb704f56de972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Event creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_event_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fcd0d12a390856e1dddbdf2c8b7ca8e1f54e091c6564cee139afb704f56de972->leave($__internal_fcd0d12a390856e1dddbdf2c8b7ca8e1f54e091c6564cee139afb704f56de972_prof);

    }

    public function getTemplateName()
    {
        return ":event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Event creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_event_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
