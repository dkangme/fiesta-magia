<?php

/* event/edit.html.twig */
class __TwigTemplate_cd0c18c65937af92c1502cd2ac668be182264a1116192c4b3ffcd6215c939b70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "event/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d9b64c779d261db7fe59cf27c9065a9fc053b16c96a19ce0bccd2291891eb1e = $this->env->getExtension("native_profiler");
        $__internal_7d9b64c779d261db7fe59cf27c9065a9fc053b16c96a19ce0bccd2291891eb1e->enter($__internal_7d9b64c779d261db7fe59cf27c9065a9fc053b16c96a19ce0bccd2291891eb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d9b64c779d261db7fe59cf27c9065a9fc053b16c96a19ce0bccd2291891eb1e->leave($__internal_7d9b64c779d261db7fe59cf27c9065a9fc053b16c96a19ce0bccd2291891eb1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b8a56f58edf06feac85b751d3012aa30465bb07a7380c170b605b293c679f71 = $this->env->getExtension("native_profiler");
        $__internal_9b8a56f58edf06feac85b751d3012aa30465bb07a7380c170b605b293c679f71->enter($__internal_9b8a56f58edf06feac85b751d3012aa30465bb07a7380c170b605b293c679f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2 col-md-2 col-lg-2\"></div>
            <div class=\"col-sm-3 col-md-3 col-lg-3\">

                <h2>Edición de Evento</h2>

                ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                    <input type=\"submit\" value=\"Edit\" />
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                <ul>
                    <li>
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_event_index");
        echo "\">Back to the list</a>
                    </li>
                    <li>
                        ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" value=\"Delete\">
                        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </li>
                </ul>

            </div>
        </div>
    </div>

";
        
        $__internal_9b8a56f58edf06feac85b751d3012aa30465bb07a7380c170b605b293c679f71->leave($__internal_9b8a56f58edf06feac85b751d3012aa30465bb07a7380c170b605b293c679f71_prof);

    }

    public function getTemplateName()
    {
        return "event/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  72 => 22,  66 => 19,  59 => 15,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-2 col-md-2 col-lg-2"></div>*/
/*             <div class="col-sm-3 col-md-3 col-lg-3">*/
/* */
/*                 <h2>Edición de Evento</h2>*/
/* */
/*                 {{ form_start(edit_form) }}*/
/*                     {{ form_widget(edit_form) }}*/
/*                     <input type="submit" value="Edit" />*/
/*                 {{ form_end(edit_form) }}*/
/* */
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('admin_event_index') }}">Back to the list</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         {{ form_start(delete_form) }}*/
/*                             <input type="submit" value="Delete">*/
/*                         {{ form_end(delete_form) }}*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
