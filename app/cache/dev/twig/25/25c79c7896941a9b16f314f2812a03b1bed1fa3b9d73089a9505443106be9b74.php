<?php

/* :event:index.html.twig */
class __TwigTemplate_a7a587313688a84258c67c8863a4754671acc0f7996683024b6e1a9c21bac4ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":event:index.html.twig", 1);
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
        $__internal_814e92953982415b1363cc43354955faf1ee41b3fba35a7cfc1e5539b270a770 = $this->env->getExtension("native_profiler");
        $__internal_814e92953982415b1363cc43354955faf1ee41b3fba35a7cfc1e5539b270a770->enter($__internal_814e92953982415b1363cc43354955faf1ee41b3fba35a7cfc1e5539b270a770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814e92953982415b1363cc43354955faf1ee41b3fba35a7cfc1e5539b270a770->leave($__internal_814e92953982415b1363cc43354955faf1ee41b3fba35a7cfc1e5539b270a770_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea9c7e4c3cae6435b03cd6314166c67f02d831bedbf53bb897ab0858d7614ae7 = $this->env->getExtension("native_profiler");
        $__internal_ea9c7e4c3cae6435b03cd6314166c67f02d831bedbf53bb897ab0858d7614ae7->enter($__internal_ea9c7e4c3cae6435b03cd6314166c67f02d831bedbf53bb897ab0858d7614ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    
    <h2>Eventos</h2>
    
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Evento</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Contacto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "idEvent", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_event_show", array("id" => $this->getAttribute($context["event"], "idEvent", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "key", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["event"], "eventDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "place", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "contactName", array()), "html", null, true);
            echo "</td>
                
                
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_event_gallery", array("id" => $this->getAttribute($context["event"], "idEvent", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-camera\"></i> ver</a>
                    &nbsp;
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_event_edit", array("id" => $this->getAttribute($context["event"], "idEvent", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i> editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_event_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_ea9c7e4c3cae6435b03cd6314166c67f02d831bedbf53bb897ab0858d7614ae7->leave($__internal_ea9c7e4c3cae6435b03cd6314166c67f02d831bedbf53bb897ab0858d7614ae7_prof);

    }

    public function getTemplateName()
    {
        return ":event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  112 => 38,  102 => 34,  97 => 32,  90 => 28,  86 => 27,  80 => 26,  76 => 25,  70 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     */
/*     <h2>Eventos</h2>*/
/*     */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>#</th>*/
/*                 <th>Evento</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Lugar</th>*/
/*                 <th>Contacto</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for event in events %}*/
/*             <tr>*/
/*                 <td>{{ event.idEvent }}</td>*/
/*                 <td><a href="{{ path('admin_event_show', { 'id': event.idEvent }) }}">{{ event.key }}</a></td>*/
/*                 <td>{{ event.name }}</td>*/
/*                 <td>{% if event.eventDate %}{{ event.eventDate|date('d-m-Y') }}{% endif %}</td>*/
/*                 <td>{{ event.place }}</td>*/
/*                 <td>{{ event.contactName }}</td>*/
/*                 */
/*                 */
/*                 <td>*/
/*                     <a href="{{ path('admin_event_gallery', { 'id': event.idEvent }) }}"><i class="fa fa-camera"></i> ver</a>*/
/*                     &nbsp;*/
/*                     <a href="{{ path('admin_event_edit', { 'id': event.idEvent }) }}"><i class="fa fa-pencil"></i> editar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_event_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
