<?php

/* :event:edit.html.twig */
class __TwigTemplate_cd0c18c65937af92c1502cd2ac668be182264a1116192c4b3ffcd6215c939b70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":event:edit.html.twig", 1);
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
        $__internal_182eac86830e04715d512b65b5f6731b3a8ac3118f5b80a5acc9490847fc38f0 = $this->env->getExtension("native_profiler");
        $__internal_182eac86830e04715d512b65b5f6731b3a8ac3118f5b80a5acc9490847fc38f0->enter($__internal_182eac86830e04715d512b65b5f6731b3a8ac3118f5b80a5acc9490847fc38f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":event:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_182eac86830e04715d512b65b5f6731b3a8ac3118f5b80a5acc9490847fc38f0->leave($__internal_182eac86830e04715d512b65b5f6731b3a8ac3118f5b80a5acc9490847fc38f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ace0d7069195614a2351a04042e7c0c0b33c5300372432c6751ffd609f3b9fe = $this->env->getExtension("native_profiler");
        $__internal_2ace0d7069195614a2351a04042e7c0c0b33c5300372432c6751ffd609f3b9fe->enter($__internal_2ace0d7069195614a2351a04042e7c0c0b33c5300372432c6751ffd609f3b9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Event edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_event_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2ace0d7069195614a2351a04042e7c0c0b33c5300372432c6751ffd609f3b9fe->leave($__internal_2ace0d7069195614a2351a04042e7c0c0b33c5300372432c6751ffd609f3b9fe_prof);

    }

    public function getTemplateName()
    {
        return ":event:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Event edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_event_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
