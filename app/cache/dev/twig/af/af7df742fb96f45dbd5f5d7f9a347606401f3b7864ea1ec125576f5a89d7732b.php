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
        $__internal_2178dd0c1c03b136f3e81837a6cbd0ec4a43789251fdc59dd2dc53c228f07816 = $this->env->getExtension("native_profiler");
        $__internal_2178dd0c1c03b136f3e81837a6cbd0ec4a43789251fdc59dd2dc53c228f07816->enter($__internal_2178dd0c1c03b136f3e81837a6cbd0ec4a43789251fdc59dd2dc53c228f07816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/gallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2178dd0c1c03b136f3e81837a6cbd0ec4a43789251fdc59dd2dc53c228f07816->leave($__internal_2178dd0c1c03b136f3e81837a6cbd0ec4a43789251fdc59dd2dc53c228f07816_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_776fed85cd8be508ab406913c9d768b03e590a6819448414eadc858edb46a501 = $this->env->getExtension("native_profiler");
        $__internal_776fed85cd8be508ab406913c9d768b03e590a6819448414eadc858edb46a501->enter($__internal_776fed85cd8be508ab406913c9d768b03e590a6819448414eadc858edb46a501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
<link rel=\"stylesheet\" href=\"//blueimp.github.io/Gallery/css/blueimp-gallery.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-image-gallery.min.css"), "html", null, true);
        echo "\"> 

";
        
        $__internal_776fed85cd8be508ab406913c9d768b03e590a6819448414eadc858edb46a501->leave($__internal_776fed85cd8be508ab406913c9d768b03e590a6819448414eadc858edb46a501_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7993cecdb5afaac0b7c8e9da059b76d0bd94aa4b317bca1d441d715bca679292 = $this->env->getExtension("native_profiler");
        $__internal_7993cecdb5afaac0b7c8e9da059b76d0bd94aa4b317bca1d441d715bca679292->enter($__internal_7993cecdb5afaac0b7c8e9da059b76d0bd94aa4b317bca1d441d715bca679292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    
    <div class=\"center\"><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("admin_event_index");
        echo "\"><i class=\"fa fa-arrow-circle-left\"></i> Volver</a></div>
    <div id=\"links\" align=\"center\">

        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 62
            echo "
            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "path", array()), "html", null, true);
            echo "\" data-gallery>
                <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "path", array()), "html", null, true);
            echo "\" width=\"10%\" height=\"10%\">
            </a>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </div>
    <br/>
    <div class=\"center\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("admin_event_index");
        echo "\"><i class=\"fa fa-arrow-circle-left\"></i> Volver</a></div>
    <br/>

";
        
        $__internal_7993cecdb5afaac0b7c8e9da059b76d0bd94aa4b317bca1d441d715bca679292->leave($__internal_7993cecdb5afaac0b7c8e9da059b76d0bd94aa4b317bca1d441d715bca679292_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b900d578e4b6bf0b561afe5f698576a2d2018de17d8b043a0bd77915667c6a9d = $this->env->getExtension("native_profiler");
        $__internal_b900d578e4b6bf0b561afe5f698576a2d2018de17d8b043a0bd77915667c6a9d->enter($__internal_b900d578e4b6bf0b561afe5f698576a2d2018de17d8b043a0bd77915667c6a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-image-gallery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b900d578e4b6bf0b561afe5f698576a2d2018de17d8b043a0bd77915667c6a9d->leave($__internal_b900d578e4b6bf0b561afe5f698576a2d2018de17d8b043a0bd77915667c6a9d_prof);

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
        return array (  177 => 79,  173 => 77,  167 => 76,  156 => 70,  152 => 68,  142 => 64,  138 => 63,  135 => 62,  131 => 61,  125 => 58,  84 => 20,  79 => 18,  73 => 17,  67 => 14,  62 => 11,  56 => 10,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
/*     <div class="center"><a href="{{ path('admin_event_index') }}"><i class="fa fa-arrow-circle-left"></i> Volver</a></div>*/
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
/*     <br/>*/
/*     <div class="center"><a href="{{ path('admin_event_index') }}"><i class="fa fa-arrow-circle-left"></i> Volver</a></div>*/
/*     <br/>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>*/
/*     <script src="{{ asset('js/bootstrap-image-gallery.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
