<?php

/* event/gallery.html.twig */
class __TwigTemplate_42aea24b2383dc2439574ac44b67cd478b0911a0dfcf90382677f9afd90a42ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "event/gallery.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcaa4289ed818895af749e6b780a3ec8846970bcaff93801fb952c1b6b8f8fa0 = $this->env->getExtension("native_profiler");
        $__internal_fcaa4289ed818895af749e6b780a3ec8846970bcaff93801fb952c1b6b8f8fa0->enter($__internal_fcaa4289ed818895af749e6b780a3ec8846970bcaff93801fb952c1b6b8f8fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/gallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcaa4289ed818895af749e6b780a3ec8846970bcaff93801fb952c1b6b8f8fa0->leave($__internal_fcaa4289ed818895af749e6b780a3ec8846970bcaff93801fb952c1b6b8f8fa0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad62e95e499608d842277f7d69657f92ff76f8f8825f55c803ee8f255d7c5f60 = $this->env->getExtension("native_profiler");
        $__internal_ad62e95e499608d842277f7d69657f92ff76f8f8825f55c803ee8f255d7c5f60->enter($__internal_ad62e95e499608d842277f7d69657f92ff76f8f8825f55c803ee8f255d7c5f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
<link rel=\"stylesheet\" href=\"//blueimp.github.io/Gallery/css/blueimp-gallery.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-image-gallery.min.css"), "html", null, true);
        echo "\"> 

";
        
        $__internal_ad62e95e499608d842277f7d69657f92ff76f8f8825f55c803ee8f255d7c5f60->leave($__internal_ad62e95e499608d842277f7d69657f92ff76f8f8825f55c803ee8f255d7c5f60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d154ab9277893aa059013400d8bed520059d77ebaf8ed8e6aff633875ebf54e = $this->env->getExtension("native_profiler");
        $__internal_3d154ab9277893aa059013400d8bed520059d77ebaf8ed8e6aff633875ebf54e->enter($__internal_3d154ab9277893aa059013400d8bed520059d77ebaf8ed8e6aff633875ebf54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <br/>
    <div class=\"center wow fadeInDown\">
        <div class=\"row\">
            <div class=\"col-sm-3 col-md-3 col-lg-3\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")), 0, array(), "array"), "idEvent", array()), "logotipo", array())), "html", null, true);
        echo "\" width=\"30%\" height=30%\"/></div>
            <div class=\"col-sm-5 col-md-5 col-lg-5\">
                <br/>
                <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")), 0, array(), "array"), "idEvent", array()), "name", array()), "html", null, true);
        echo "<br/><small>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")), 0, array(), "array"), "idEvent", array()), "eventDate", array()), "d-M-Y"), "html", null, true);
        echo "</small></h2>
                <h2><small>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")), 0, array(), "array"), "idEvent", array()), "place", array()), "html", null, true);
        echo "</small></h2>
            </div>
            <div class=\"col-sm-3 col-md-3 col-lg-3\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")), 0, array(), "array"), "idEvent", array()), "logotipo", array())), "html", null, true);
        echo "\" width=\"30%\" height=30%\"/></div>
        </div>
    </div>
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id=\"blueimp-gallery\" class=\"blueimp-gallery\">
        <!-- The container for the modal slides -->
        <div class=\"slides\"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class=\"title\"></h3>
        <a class=\"prev\">‹</a>
        <a class=\"next\">›</a>
        <a class=\"close\">×</a>
        <a class=\"play-pause\"></a>
        <ol class=\"indicator\"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body next\"></div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default pull-left prev\">
                            <i class=\"glyphicon glyphicon-chevron-left\"></i>
                            Previous
                        </button>
                        <button type=\"button\" class=\"btn btn-primary next\">
                            Next
                            <i class=\"glyphicon glyphicon-chevron-right\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id=\"links\" align=\"center\">

        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 61
            echo "
            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "path", array()), "html", null, true);
            echo "\" data-gallery>
                <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "path", array()), "html", null, true);
            echo "\" width=\"10%\" height=\"10%\">
            </a>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
    <br/><br/>
";
        
        $__internal_3d154ab9277893aa059013400d8bed520059d77ebaf8ed8e6aff633875ebf54e->leave($__internal_3d154ab9277893aa059013400d8bed520059d77ebaf8ed8e6aff633875ebf54e_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12a9ad61b44a3806aa7026ad35227f3f6060ae07b5c5a0c5fa5b6db21414b97d = $this->env->getExtension("native_profiler");
        $__internal_12a9ad61b44a3806aa7026ad35227f3f6060ae07b5c5a0c5fa5b6db21414b97d->enter($__internal_12a9ad61b44a3806aa7026ad35227f3f6060ae07b5c5a0c5fa5b6db21414b97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-image-gallery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_12a9ad61b44a3806aa7026ad35227f3f6060ae07b5c5a0c5fa5b6db21414b97d->leave($__internal_12a9ad61b44a3806aa7026ad35227f3f6060ae07b5c5a0c5fa5b6db21414b97d_prof);

    }

    public function getTemplateName()
    {
        return "event/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 75,  163 => 73,  157 => 72,  148 => 67,  138 => 63,  134 => 62,  131 => 61,  127 => 60,  84 => 20,  79 => 18,  73 => 17,  67 => 14,  62 => 11,  56 => 10,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">*/
/* <link rel="stylesheet" href="{{ asset('css/bootstrap-image-gallery.min.css') }}"> */
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <br/>*/
/*     <div class="center wow fadeInDown">*/
/*         <div class="row">*/
/*             <div class="col-sm-3 col-md-3 col-lg-3"><img src="{{ asset(photos[0].idEvent.logotipo) }}" width="30%" height=30%"/></div>*/
/*             <div class="col-sm-5 col-md-5 col-lg-5">*/
/*                 <br/>*/
/*                 <h2>{{ photos[0].idEvent.name }}<br/><small>{{ photos[0].idEvent.eventDate |date('d-M-Y')}}</small></h2>*/
/*                 <h2><small>{{ photos[0].idEvent.place }}</small></h2>*/
/*             </div>*/
/*             <div class="col-sm-3 col-md-3 col-lg-3"><img src="{{ asset(photos[0].idEvent.logotipo) }}" width="30%" height=30%"/></div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->*/
/*     <div id="blueimp-gallery" class="blueimp-gallery">*/
/*         <!-- The container for the modal slides -->*/
/*         <div class="slides"></div>*/
/*         <!-- Controls for the borderless lightbox -->*/
/*         <h3 class="title"></h3>*/
/*         <a class="prev">‹</a>*/
/*         <a class="next">›</a>*/
/*         <a class="close">×</a>*/
/*         <a class="play-pause"></a>*/
/*         <ol class="indicator"></ol>*/
/*         <!-- The modal dialog, which will be used to wrap the lightbox content -->*/
/*         <div class="modal fade">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title"></h4>*/
/*                     </div>*/
/*                     <div class="modal-body next"></div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-default pull-left prev">*/
/*                             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*                             Previous*/
/*                         </button>*/
/*                         <button type="button" class="btn btn-primary next">*/
/*                             Next*/
/*                             <i class="glyphicon glyphicon-chevron-right"></i>*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <div id="links" align="center">*/
/* */
/*         {% for photo in photos %}*/
/* */
/*             <a href="{{ photo.path }}" data-gallery>*/
/*                 <img src="{{ photo.path }}" width="10%" height="10%">*/
/*             </a>*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/*     <br/><br/>*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>*/
/*     <script src="{{ asset('js/bootstrap-image-gallery.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
