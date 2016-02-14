<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_12a4561e8666a5e38d1cb87867438c9468a9b1a866659297a7bfbaf2b361d3a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a03fe4768b9b231c6ef7ac543462291563e11f572e67646dd1d7d1b63745706 = $this->env->getExtension("native_profiler");
        $__internal_3a03fe4768b9b231c6ef7ac543462291563e11f572e67646dd1d7d1b63745706->enter($__internal_3a03fe4768b9b231c6ef7ac543462291563e11f572e67646dd1d7d1b63745706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3a03fe4768b9b231c6ef7ac543462291563e11f572e67646dd1d7d1b63745706->leave($__internal_3a03fe4768b9b231c6ef7ac543462291563e11f572e67646dd1d7d1b63745706_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
