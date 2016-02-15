<?php

/* admin.html.twig */
class __TwigTemplate_5177ec7547ed3879485f177d2cf8107ebc42014336b877306883a1c32ce1cf74 extends Twig_Template
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
        $__internal_60f081b42ff0b4993567ddbc24101fabc11cfe1138137fa08d644475f5e853dc = $this->env->getExtension("native_profiler");
        $__internal_60f081b42ff0b4993567ddbc24101fabc11cfe1138137fa08d644475f5e853dc->enter($__internal_60f081b42ff0b4993567ddbc24101fabc11cfe1138137fa08d644475f5e853dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"ISO-8859-1\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- core CSS -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <!--[if lt IE 9]>
        <script src=\"js/html5shiv.js\"></script>
        <script src=\"js/respond.min.js\"></script>
        <![endif]-->       
        <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">

        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
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
                        <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo_fm.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    </div>
                    
                    <div class=\"collapse navbar-collapse navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"/logout\">Salir</a></li>
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
            
        </header><!--/header-->
        

        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
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

        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "    </body>
</html>
";
        
        $__internal_60f081b42ff0b4993567ddbc24101fabc11cfe1138137fa08d644475f5e853dc->leave($__internal_60f081b42ff0b4993567ddbc24101fabc11cfe1138137fa08d644475f5e853dc_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6c317264d4080e94292064cf27ac8edb1f72f1159ea85f382f0238aeca1acea = $this->env->getExtension("native_profiler");
        $__internal_d6c317264d4080e94292064cf27ac8edb1f72f1159ea85f382f0238aeca1acea->enter($__internal_d6c317264d4080e94292064cf27ac8edb1f72f1159ea85f382f0238aeca1acea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fiesta & Magia";
        
        $__internal_d6c317264d4080e94292064cf27ac8edb1f72f1159ea85f382f0238aeca1acea->leave($__internal_d6c317264d4080e94292064cf27ac8edb1f72f1159ea85f382f0238aeca1acea_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2adbb593ae2cfadf77a4288f4d892a0212b9d5cbc54bf713a0814faedccc2d26 = $this->env->getExtension("native_profiler");
        $__internal_2adbb593ae2cfadf77a4288f4d892a0212b9d5cbc54bf713a0814faedccc2d26->enter($__internal_2adbb593ae2cfadf77a4288f4d892a0212b9d5cbc54bf713a0814faedccc2d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2adbb593ae2cfadf77a4288f4d892a0212b9d5cbc54bf713a0814faedccc2d26->leave($__internal_2adbb593ae2cfadf77a4288f4d892a0212b9d5cbc54bf713a0814faedccc2d26_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_420a13b3408accb1b21c3cb83ae400a225733c601c756ac853583adbe8fbe29d = $this->env->getExtension("native_profiler");
        $__internal_420a13b3408accb1b21c3cb83ae400a225733c601c756ac853583adbe8fbe29d->enter($__internal_420a13b3408accb1b21c3cb83ae400a225733c601c756ac853583adbe8fbe29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_420a13b3408accb1b21c3cb83ae400a225733c601c756ac853583adbe8fbe29d->leave($__internal_420a13b3408accb1b21c3cb83ae400a225733c601c756ac853583adbe8fbe29d_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a856b119874037742248dfcc0e4ee4649cd6dd398a8464e1c43bb899c57a403 = $this->env->getExtension("native_profiler");
        $__internal_7a856b119874037742248dfcc0e4ee4649cd6dd398a8464e1c43bb899c57a403->enter($__internal_7a856b119874037742248dfcc0e4ee4649cd6dd398a8464e1c43bb899c57a403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a856b119874037742248dfcc0e4ee4649cd6dd398a8464e1c43bb899c57a403->leave($__internal_7a856b119874037742248dfcc0e4ee4649cd6dd398a8464e1c43bb899c57a403_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 101,  227 => 74,  216 => 27,  204 => 8,  195 => 102,  193 => 101,  189 => 100,  185 => 99,  181 => 98,  177 => 97,  173 => 96,  169 => 95,  147 => 75,  145 => 74,  128 => 60,  92 => 28,  90 => 27,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="ISO-8859-1" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <title>{% block title %}Fiesta & Magia{% endblock %}</title>*/
/*         <!-- core CSS -->*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/main.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">*/
/*         */
/*         <!--[if lt IE 9]>*/
/*         <script src="js/html5shiv.js"></script>*/
/*         <script src="js/respond.min.js"></script>*/
/*         <![endif]-->       */
/*         <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">*/
/*         <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">*/
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
/*                         <a class="navbar-brand" href="index.html"><img src="{{ asset('images/logo_fm.png') }}" alt="logo"></a>*/
/*                     </div>*/
/*                     */
/*                     <div class="collapse navbar-collapse navbar-right">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active"><a href="/logout">Salir</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div><!--/.container-->*/
/*             </nav><!--/nav-->*/
/*             */
/*         </header><!--/header-->*/
/*         */
/* */
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
/*         <script src="{{ asset('js/jquery.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>*/
/*         <script src="{{ asset('js/main.js') }}"></script>*/
/*         <script src="{{ asset('js/wow.min.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
