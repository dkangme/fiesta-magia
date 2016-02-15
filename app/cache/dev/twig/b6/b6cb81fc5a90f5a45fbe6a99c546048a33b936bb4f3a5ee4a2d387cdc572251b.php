<?php

/* :event:show.html.twig */
class __TwigTemplate_c0ac82b4002a246d8e2101dcdb4cae809ea0cc22c2730f9288215ea8135464cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":event:show.html.twig", 1);
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
        $__internal_c6b776a9728a439841b7f4eb472a6b4883bbf3d2d8f0293ebdb59329af9cc050 = $this->env->getExtension("native_profiler");
        $__internal_c6b776a9728a439841b7f4eb472a6b4883bbf3d2d8f0293ebdb59329af9cc050->enter($__internal_c6b776a9728a439841b7f4eb472a6b4883bbf3d2d8f0293ebdb59329af9cc050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":event:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b776a9728a439841b7f4eb472a6b4883bbf3d2d8f0293ebdb59329af9cc050->leave($__internal_c6b776a9728a439841b7f4eb472a6b4883bbf3d2d8f0293ebdb59329af9cc050_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74c2a3b5d50de759301e9af13c349f9c74f999bf5c67e74c6763ee96202d0f34 = $this->env->getExtension("native_profiler");
        $__internal_74c2a3b5d50de759301e9af13c349f9c74f999bf5c67e74c6763ee96202d0f34->enter($__internal_74c2a3b5d50de759301e9af13c349f9c74f999bf5c67e74c6763ee96202d0f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Event</h1>

    <table class=\"table table-border table-striped\">
        <tbody>
            <tr>
                <th>Key</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "key", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Eventdate</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "place", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactname</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "contactName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactemail</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "contactEmail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactphone</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "contactPhone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idevent</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "idEvent", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("admin_event_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_event_edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "idEvent", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_74c2a3b5d50de759301e9af13c349f9c74f999bf5c67e74c6763ee96202d0f34->leave($__internal_74c2a3b5d50de759301e9af13c349f9c74f999bf5c67e74c6763ee96202d0f34_prof);

    }

    public function getTemplateName()
    {
        return ":event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  121 => 51,  115 => 48,  109 => 45,  99 => 38,  92 => 34,  85 => 30,  78 => 26,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Event</h1>*/
/* */
/*     <table class="table table-border table-striped">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Key</th>*/
/*                 <td>{{ event.key }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ event.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Eventdate</th>*/
/*                 <td>{% if event.eventDate %}{{ event.eventDate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Place</th>*/
/*                 <td>{{ event.place }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contactname</th>*/
/*                 <td>{{ event.contactName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contactemail</th>*/
/*                 <td>{{ event.contactEmail }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contactphone</th>*/
/*                 <td>{{ event.contactPhone }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idevent</th>*/
/*                 <td>{{ event.idEvent }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_event_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_event_edit', { 'id': event.idEvent }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
