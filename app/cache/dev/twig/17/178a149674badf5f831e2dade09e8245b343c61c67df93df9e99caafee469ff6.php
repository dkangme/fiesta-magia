<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_150528758c1e319da7e691725201bb3e8f1331453b7cd22efc650b5b78f12ea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_2981305fdf56d8350a39ca35ef933f78855be7a979ca9670f788ddf0b720559c = $this->env->getExtension("native_profiler");
        $__internal_2981305fdf56d8350a39ca35ef933f78855be7a979ca9670f788ddf0b720559c->enter($__internal_2981305fdf56d8350a39ca35ef933f78855be7a979ca9670f788ddf0b720559c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2981305fdf56d8350a39ca35ef933f78855be7a979ca9670f788ddf0b720559c->leave($__internal_2981305fdf56d8350a39ca35ef933f78855be7a979ca9670f788ddf0b720559c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_45440319860b53f746cb2ea8e5af16fe5fa4d6a18483a9e79f73bcd9e4f36c7c = $this->env->getExtension("native_profiler");
        $__internal_45440319860b53f746cb2ea8e5af16fe5fa4d6a18483a9e79f73bcd9e4f36c7c->enter($__internal_45440319860b53f746cb2ea8e5af16fe5fa4d6a18483a9e79f73bcd9e4f36c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-4\"></div>
\t\t\t<div class=\"col-sm-3 col-md-3 col-lg-3\">

\t\t\t\t<div class=\"center\">
\t\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo_fiestaymagia.jpg"), "html", null, true);
        echo "\" width=\"35%\" height=\"35%\"/>
\t\t\t\t</div>

\t\t\t\t";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "\t\t\t\t    <div class=\"form-signin alert alert-danger\"><strong>Error:</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo " </div>
\t\t\t\t";
        }
        // line 19
        echo "
\t\t\t\t<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form\">
\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t    <label for=\"username\">Usuario: </label>
\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control autofocus\"/>

\t\t\t\t    <label for=\"password\">Clave: </label>
\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
\t\t\t\t    <br/>
\t\t\t\t    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Entrar\" />
\t\t\t\t</form>

\t\t\t\t<h3>Ingrese sus credenciales para acceder al sitio privado de &copy;Fiesta & Magia.</h3><br/><br/><br/>
\t\t\t</div>
\t\t\t<div class=\"col-sm-5 col-md-5 col-lg-5\"></div>
\t\t</div>
\t</div>

\t

";
        
        $__internal_45440319860b53f746cb2ea8e5af16fe5fa4d6a18483a9e79f73bcd9e4f36c7c->leave($__internal_45440319860b53f746cb2ea8e5af16fe5fa4d6a18483a9e79f73bcd9e4f36c7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  70 => 21,  66 => 20,  63 => 19,  57 => 17,  55 => 16,  49 => 13,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div="container">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-4 col-md-4 col-lg-4"></div>*/
/* 			<div class="col-sm-3 col-md-3 col-lg-3">*/
/* */
/* 				<div class="center">*/
/* 					<img src="{{ asset('images/logo_fiestaymagia.jpg') }}" width="35%" height="35%"/>*/
/* 				</div>*/
/* */
/* 				{% if error %}*/
/* 				    <div class="form-signin alert alert-danger"><strong>Error:</strong>{{ error.messageKey|trans(error.messageData, 'security') }} </div>*/
/* 				{% endif %}*/
/* */
/* 				<form action="{{ path("fos_user_security_check") }}" method="post" class="form">*/
/* 				    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 				    <label for="username">Usuario: </label>*/
/* 				    <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control autofocus"/>*/
/* */
/* 				    <label for="password">Clave: </label>*/
/* 				    <input type="password" id="password" name="_password" required="required" class="form-control" />*/
/* 				    <br/>*/
/* 				    <input type="submit" id="_submit" name="_submit" value="Entrar" />*/
/* 				</form>*/
/* */
/* 				<h3>Ingrese sus credenciales para acceder al sitio privado de &copy;Fiesta & Magia.</h3><br/><br/><br/>*/
/* 			</div>*/
/* 			<div class="col-sm-5 col-md-5 col-lg-5"></div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	*/
/* */
/* {% endblock body %}*/
/* */
