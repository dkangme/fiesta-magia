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
        $__internal_bb903e130872ac7c5d55f284e94bc38d8238fd8071cb30bf2a8a067973c7c1ce = $this->env->getExtension("native_profiler");
        $__internal_bb903e130872ac7c5d55f284e94bc38d8238fd8071cb30bf2a8a067973c7c1ce->enter($__internal_bb903e130872ac7c5d55f284e94bc38d8238fd8071cb30bf2a8a067973c7c1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                            <li class=\"active\"><a href=\"/\">Inicio</a></li>
                            <li><a href=\"#services\">Servicios</a></li>
                            <li><a href=\"#\">Eventos</a></li>
                            <li><a href=\"#\">Contacto</a></li>
                            <li><a href=\"/admin/event\">Sitio Privado</a></li>                       
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
                            <li><a href=\"/\">Inicio</a></li>
                            <li><a href=\"#services\">Servicios</a></li>
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
        
        $__internal_bb903e130872ac7c5d55f284e94bc38d8238fd8071cb30bf2a8a067973c7c1ce->leave($__internal_bb903e130872ac7c5d55f284e94bc38d8238fd8071cb30bf2a8a067973c7c1ce_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0dda53f5174ccc8a3b818644cac4a1d46046ba04e86da4753267fce4555301e = $this->env->getExtension("native_profiler");
        $__internal_d0dda53f5174ccc8a3b818644cac4a1d46046ba04e86da4753267fce4555301e->enter($__internal_d0dda53f5174ccc8a3b818644cac4a1d46046ba04e86da4753267fce4555301e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fiesta & Magia";
        
        $__internal_d0dda53f5174ccc8a3b818644cac4a1d46046ba04e86da4753267fce4555301e->leave($__internal_d0dda53f5174ccc8a3b818644cac4a1d46046ba04e86da4753267fce4555301e_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6342dafeb5d16db1332ee5e59b3ee37f6a882a01f8d505391a2c4ccb19e79d03 = $this->env->getExtension("native_profiler");
        $__internal_6342dafeb5d16db1332ee5e59b3ee37f6a882a01f8d505391a2c4ccb19e79d03->enter($__internal_6342dafeb5d16db1332ee5e59b3ee37f6a882a01f8d505391a2c4ccb19e79d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6342dafeb5d16db1332ee5e59b3ee37f6a882a01f8d505391a2c4ccb19e79d03->leave($__internal_6342dafeb5d16db1332ee5e59b3ee37f6a882a01f8d505391a2c4ccb19e79d03_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ccedf0c1440735c8bec2f98eb371b87f553ec8e3129a83e094dbbce2af4da51 = $this->env->getExtension("native_profiler");
        $__internal_0ccedf0c1440735c8bec2f98eb371b87f553ec8e3129a83e094dbbce2af4da51->enter($__internal_0ccedf0c1440735c8bec2f98eb371b87f553ec8e3129a83e094dbbce2af4da51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ccedf0c1440735c8bec2f98eb371b87f553ec8e3129a83e094dbbce2af4da51->leave($__internal_0ccedf0c1440735c8bec2f98eb371b87f553ec8e3129a83e094dbbce2af4da51_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c1edfffa10909f48c4e85a8edce377d6a62ce24ec725a8544f2fb85e75ce0dc = $this->env->getExtension("native_profiler");
        $__internal_6c1edfffa10909f48c4e85a8edce377d6a62ce24ec725a8544f2fb85e75ce0dc->enter($__internal_6c1edfffa10909f48c4e85a8edce377d6a62ce24ec725a8544f2fb85e75ce0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6c1edfffa10909f48c4e85a8edce377d6a62ce24ec725a8544f2fb85e75ce0dc->leave($__internal_6c1edfffa10909f48c4e85a8edce377d6a62ce24ec725a8544f2fb85e75ce0dc_prof);

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
/*                             <li class="active"><a href="/">Inicio</a></li>*/
/*                             <li><a href="#services">Servicios</a></li>*/
/*                             <li><a href="#">Eventos</a></li>*/
/*                             <li><a href="#">Contacto</a></li>*/
/*                             <li><a href="/admin/event">Sitio Privado</a></li>                       */
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
/*                             <li><a href="/">Inicio</a></li>*/
/*                             <li><a href="#services">Servicios</a></li>*/
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
