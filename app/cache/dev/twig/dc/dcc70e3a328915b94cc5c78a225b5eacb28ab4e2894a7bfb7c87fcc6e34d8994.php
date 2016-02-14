<?php

/* base.html.twig */
class __TwigTemplate_0526a6c59cce795928015e8f22158d1b371b3797766ae1f30dedcb54dd9b4fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1df3c0b5be31161c9613a738a63ec22dbaa38744f3787d386cc3f6c773015c8 = $this->env->getExtension("native_profiler");
        $__internal_f1df3c0b5be31161c9613a738a63ec22dbaa38744f3787d386cc3f6c773015c8->enter($__internal_f1df3c0b5be31161c9613a738a63ec22dbaa38744f3787d386cc3f6c773015c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- core CSS -->
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"css/animate.min.css\" rel=\"stylesheet\">
        <link href=\"css/prettyPhoto.css\" rel=\"stylesheet\">
        <link href=\"css/main.css\" rel=\"stylesheet\">
        <link href=\"css/responsive.css\" rel=\"stylesheet\">
        <!--[if lt IE 9]>
        <script src=\"js/html5shiv.js\"></script>
        <script src=\"js/respond.min.js\"></script>
        <![endif]-->       
        <link rel=\"shortcut icon\" href=\"images/ico/favicon.ico\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"images/ico/apple-touch-icon-144-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"images/ico/apple-touch-icon-114-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"images/ico/apple-touch-icon-72-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"images/ico/apple-touch-icon-57-precomposed.png\">

        ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"homepage\">
        <header id=\"header\">
            <div class=\"top-bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-xs-4\">
                            <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  +569 5921 0128</p></div>
                        </div>
                        <div class=\"col-sm-6 col-xs-8\">
                           <div class=\"social\">
                                <ul class=\"social-share\">
                                    <li><a href=\"http://www.facebook.com/fiestaymagia\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"@fiestaymagia\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-whatsapp\"></i></a></li>
                                </ul>
                           </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->

            <nav class=\"navbar navbar-inverse\" role=\"banner\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"index.html\"><img src=\"images/logo_fm.png\" alt=\"logo\"></a>
                    </div>
                    
                    <div class=\"collapse navbar-collapse navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"index.html\">Inicio</a></li>
                            <li><a href=\"about-us.html\">Servicios</a></li>
                            <li><a href=\"services.html\">Eventos</a></li>
                            <li><a href=\"portfolio.html\">Contacto</a></li>
                            <li><a href=\"blog.html\">Sitio Privado</a></li>                       
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
            
        </header><!--/header-->
        
        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        

        <footer id=\"footer\" class=\"midnight-blue\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                         <a target=\"_blank\" href=\"http://www.k-group.cl/\" title=\"K-Group SpA Design & Web Develop\">&copy; 2014-2016</a>. Fiesta & Magia, Todos los derechos reservados.
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"pull-right\">
                            <li><a href=\"#\">Inicio</a></li>
                            <li><a href=\"#\">Servicios</a></li>
                            <li><a href=\"#\">Eventos</a></li>
                            <li><a href=\"#\">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->

        <script src=\"js/jquery.js\"></script>
        <script src=\"js/bootstrap.min.js\"></script>
        <script src=\"js/jquery.prettyPhoto.js\"></script>
        <script src=\"js/jquery.isotope.min.js\"></script>
        <script src=\"js/main.js\"></script>
        <script src=\"js/wow.min.js\"></script>
        ";
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "    </body>
</html>
";
        
        $__internal_f1df3c0b5be31161c9613a738a63ec22dbaa38744f3787d386cc3f6c773015c8->leave($__internal_f1df3c0b5be31161c9613a738a63ec22dbaa38744f3787d386cc3f6c773015c8_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b809e15ef417528422f6fb8b2a86b4afb6d72544d0f34b689a6b2291a4c8d5d = $this->env->getExtension("native_profiler");
        $__internal_0b809e15ef417528422f6fb8b2a86b4afb6d72544d0f34b689a6b2291a4c8d5d->enter($__internal_0b809e15ef417528422f6fb8b2a86b4afb6d72544d0f34b689a6b2291a4c8d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fiesta & Magia";
        
        $__internal_0b809e15ef417528422f6fb8b2a86b4afb6d72544d0f34b689a6b2291a4c8d5d->leave($__internal_0b809e15ef417528422f6fb8b2a86b4afb6d72544d0f34b689a6b2291a4c8d5d_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afdf13d6ac244caa332723820dee0a9bdbaac5e9cf7d2a116e1d0833777b0f47 = $this->env->getExtension("native_profiler");
        $__internal_afdf13d6ac244caa332723820dee0a9bdbaac5e9cf7d2a116e1d0833777b0f47->enter($__internal_afdf13d6ac244caa332723820dee0a9bdbaac5e9cf7d2a116e1d0833777b0f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_afdf13d6ac244caa332723820dee0a9bdbaac5e9cf7d2a116e1d0833777b0f47->leave($__internal_afdf13d6ac244caa332723820dee0a9bdbaac5e9cf7d2a116e1d0833777b0f47_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_a629fcc495a1c7a9056215e78c28e5fab65ef5b48f0ed3fdbed15036ceab41ba = $this->env->getExtension("native_profiler");
        $__internal_a629fcc495a1c7a9056215e78c28e5fab65ef5b48f0ed3fdbed15036ceab41ba->enter($__internal_a629fcc495a1c7a9056215e78c28e5fab65ef5b48f0ed3fdbed15036ceab41ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a629fcc495a1c7a9056215e78c28e5fab65ef5b48f0ed3fdbed15036ceab41ba->leave($__internal_a629fcc495a1c7a9056215e78c28e5fab65ef5b48f0ed3fdbed15036ceab41ba_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_282110d03e6cef323f9d97107c32a2fcb914a0e83197396287f7023524a21b45 = $this->env->getExtension("native_profiler");
        $__internal_282110d03e6cef323f9d97107c32a2fcb914a0e83197396287f7023524a21b45->enter($__internal_282110d03e6cef323f9d97107c32a2fcb914a0e83197396287f7023524a21b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_282110d03e6cef323f9d97107c32a2fcb914a0e83197396287f7023524a21b45->leave($__internal_282110d03e6cef323f9d97107c32a2fcb914a0e83197396287f7023524a21b45_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 103,  175 => 76,  164 => 26,  152 => 8,  143 => 104,  141 => 103,  113 => 77,  111 => 76,  58 => 27,  56 => 26,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <title>{% block title %}Fiesta & Magia{% endblock %}</title>*/
/*         <!-- core CSS -->*/
/*         <link href="css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="css/font-awesome.min.css" rel="stylesheet">*/
/*         <link href="css/animate.min.css" rel="stylesheet">*/
/*         <link href="css/prettyPhoto.css" rel="stylesheet">*/
/*         <link href="css/main.css" rel="stylesheet">*/
/*         <link href="css/responsive.css" rel="stylesheet">*/
/*         <!--[if lt IE 9]>*/
/*         <script src="js/html5shiv.js"></script>*/
/*         <script src="js/respond.min.js"></script>*/
/*         <![endif]-->       */
/*         <link rel="shortcut icon" href="images/ico/favicon.ico">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">*/
/*         <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class="homepage">*/
/*         <header id="header">*/
/*             <div class="top-bar">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-6 col-xs-4">*/
/*                             <div class="top-number"><p><i class="fa fa-phone-square"></i>  +569 5921 0128</p></div>*/
/*                         </div>*/
/*                         <div class="col-sm-6 col-xs-8">*/
/*                            <div class="social">*/
/*                                 <ul class="social-share">*/
/*                                     <li><a href="http://www.facebook.com/fiestaymagia"><i class="fa fa-facebook"></i></a></li>*/
/*                                     <li><a href="@fiestaymagia"><i class="fa fa-twitter"></i></a></li>*/
/*                                     <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>*/
/*                                 </ul>*/
/*                            </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.container-->*/
/*             </div><!--/.top-bar-->*/
/* */
/*             <nav class="navbar navbar-inverse" role="banner">*/
/*                 <div class="container">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a class="navbar-brand" href="index.html"><img src="images/logo_fm.png" alt="logo"></a>*/
/*                     </div>*/
/*                     */
/*                     <div class="collapse navbar-collapse navbar-right">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active"><a href="index.html">Inicio</a></li>*/
/*                             <li><a href="about-us.html">Servicios</a></li>*/
/*                             <li><a href="services.html">Eventos</a></li>*/
/*                             <li><a href="portfolio.html">Contacto</a></li>*/
/*                             <li><a href="blog.html">Sitio Privado</a></li>                       */
/*                         </ul>*/
/*                     </div>*/
/*                 </div><!--/.container-->*/
/*             </nav><!--/nav-->*/
/*             */
/*         </header><!--/header-->*/
/*         */
/*         {% block body %}{% endblock %}*/
/*         */
/* */
/*         <footer id="footer" class="midnight-blue">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                          <a target="_blank" href="http://www.k-group.cl/" title="K-Group SpA Design & Web Develop">&copy; 2014-2016</a>. Fiesta & Magia, Todos los derechos reservados.*/
/*                     </div>*/
/*                     <div class="col-sm-6">*/
/*                         <ul class="pull-right">*/
/*                             <li><a href="#">Inicio</a></li>*/
/*                             <li><a href="#">Servicios</a></li>*/
/*                             <li><a href="#">Eventos</a></li>*/
/*                             <li><a href="#">Contacto</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </footer><!--/#footer-->*/
/* */
/*         <script src="js/jquery.js"></script>*/
/*         <script src="js/bootstrap.min.js"></script>*/
/*         <script src="js/jquery.prettyPhoto.js"></script>*/
/*         <script src="js/jquery.isotope.min.js"></script>*/
/*         <script src="js/main.js"></script>*/
/*         <script src="js/wow.min.js"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */