<?php

/* :event:gallery.html.twig */
class __TwigTemplate_42aea24b2383dc2439574ac44b67cd478b0911a0dfcf90382677f9afd90a42ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":event:gallery.html.twig", 1);
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
        $__internal_355f50f278f484a97243b2eb59bba28c70950bcfb35a51c3668f0320766dd144 = $this->env->getExtension("native_profiler");
        $__internal_355f50f278f484a97243b2eb59bba28c70950bcfb35a51c3668f0320766dd144->enter($__internal_355f50f278f484a97243b2eb59bba28c70950bcfb35a51c3668f0320766dd144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":event:gallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_355f50f278f484a97243b2eb59bba28c70950bcfb35a51c3668f0320766dd144->leave($__internal_355f50f278f484a97243b2eb59bba28c70950bcfb35a51c3668f0320766dd144_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91e3b1d78177e4718182408b63d4db2ed6cd2a8ef96beb4fabc00a19a277e2e7 = $this->env->getExtension("native_profiler");
        $__internal_91e3b1d78177e4718182408b63d4db2ed6cd2a8ef96beb4fabc00a19a277e2e7->enter($__internal_91e3b1d78177e4718182408b63d4db2ed6cd2a8ef96beb4fabc00a19a277e2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
<!-- <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"> -->
<link rel=\"stylesheet\" href=\"//blueimp.github.io/Gallery/css/blueimp-gallery.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-image-gallery.min.css"), "html", null, true);
        echo "\"> 

";
        
        $__internal_91e3b1d78177e4718182408b63d4db2ed6cd2a8ef96beb4fabc00a19a277e2e7->leave($__internal_91e3b1d78177e4718182408b63d4db2ed6cd2a8ef96beb4fabc00a19a277e2e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3ada9834291a06ec4e48c2518ea2f57703058dbb44eda9c4256c45eba2569cd = $this->env->getExtension("native_profiler");
        $__internal_a3ada9834291a06ec4e48c2518ea2f57703058dbb44eda9c4256c45eba2569cd->enter($__internal_a3ada9834291a06ec4e48c2518ea2f57703058dbb44eda9c4256c45eba2569cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"center wow fadeInDown\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-md-4 col-lg-4\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "logotipo", array()), "html", null, true);
        echo "\"/></div>
            <div class=\"col-sm-8 col-md-8 col-lg-8\">
                <br/>
                <h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")), 0, array(), "array"), "idEvent", array()), "name", array()), "html", null, true);
        echo "<br/><small>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")), 0, array(), "array"), "idEvent", array()), "eventDate", array()), "d-M-Y"), "html", null, true);
        echo "</small></h2>
                <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")), 0, array(), "array"), "idEvent", array()), "place", array()), "html", null, true);
        echo "</h3>
            </div>
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
        
        $__internal_a3ada9834291a06ec4e48c2518ea2f57703058dbb44eda9c4256c45eba2569cd->leave($__internal_a3ada9834291a06ec4e48c2518ea2f57703058dbb44eda9c4256c45eba2569cd_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1530ac2f4f89f32b57afe91ea5ceef9b0ded67c10e599f41a42d7f48bdea9f6a = $this->env->getExtension("native_profiler");
        $__internal_1530ac2f4f89f32b57afe91ea5ceef9b0ded67c10e599f41a42d7f48bdea9f6a->enter($__internal_1530ac2f4f89f32b57afe91ea5ceef9b0ded67c10e599f41a42d7f48bdea9f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-image-gallery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1530ac2f4f89f32b57afe91ea5ceef9b0ded67c10e599f41a42d7f48bdea9f6a->leave($__internal_1530ac2f4f89f32b57afe91ea5ceef9b0ded67c10e599f41a42d7f48bdea9f6a_prof);

    }

    public function getTemplateName()
    {
        return ":event:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 75,  160 => 73,  154 => 72,  145 => 67,  135 => 63,  131 => 62,  128 => 61,  124 => 60,  80 => 19,  74 => 18,  68 => 15,  63 => 12,  57 => 11,  47 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->*/
/* <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">*/
/* <link rel="stylesheet" href="{{ asset('css/bootstrap-image-gallery.min.css') }}"> */
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="center wow fadeInDown">*/
/*         <div class="row">*/
/*             <div class="col-sm-4 col-md-4 col-lg-4"><img src="{{ event.logotipo }}"/></div>*/
/*             <div class="col-sm-8 col-md-8 col-lg-8">*/
/*                 <br/>*/
/*                 <h2>{{ photos[0].idEvent.name }}<br/><small>{{ photos[0].idEvent.eventDate |date('d-M-Y')}}</small></h2>*/
/*                 <h3>{{ photos[0].idEvent.place }}</h3>*/
/*             </div>*/
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
