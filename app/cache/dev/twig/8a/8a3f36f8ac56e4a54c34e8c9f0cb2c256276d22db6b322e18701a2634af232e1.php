<?php

/* default/index.html.twig */
class __TwigTemplate_9a584ece912fbf8b6de3f9707f1b58089d908c4459569afc990f0b0e3f866ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_23711c5ef75827002db94b52e16bba010eba65ca124055681d11a7b54a09f1f5 = $this->env->getExtension("native_profiler");
        $__internal_23711c5ef75827002db94b52e16bba010eba65ca124055681d11a7b54a09f1f5->enter($__internal_23711c5ef75827002db94b52e16bba010eba65ca124055681d11a7b54a09f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23711c5ef75827002db94b52e16bba010eba65ca124055681d11a7b54a09f1f5->leave($__internal_23711c5ef75827002db94b52e16bba010eba65ca124055681d11a7b54a09f1f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50ee29f81e6dddf699845ea015bd839752ecf6e0c8f4879607632c6460798a7c = $this->env->getExtension("native_profiler");
        $__internal_50ee29f81e6dddf699845ea015bd839752ecf6e0c8f4879607632c6460798a7c->enter($__internal_50ee29f81e6dddf699845ea015bd839752ecf6e0c8f4879607632c6460798a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">

                <div class=\"item active\" style=\"background-image: url(images/slider/bg8.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Registra todos los momentos de tu fiesta y dale a tus invitados un recuerdo personalizado</h1>
                                    <h2 class=\"animation animated-item-2\">Con nuestras cabinas fotográficas panorámicas o cerradas</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#recent-works\">Leer más</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"images/slider/img1.png\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url(images/slider/bg5.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Personaliza tus fotos</h1>
                                    <h2 class=\"animation animated-item-2\">Elije uno de nuestros diseños o envíanos el tuyo.</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#feature\">Leer más</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"images/slider/img5.png\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url(images/slider/bg7.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2 class=\"animation animated-item-2\">
                                    

                                    </h2>
                                    
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\" align=\"left\">
                                <div class=\"slider-img\">
                                    <h1 class=\"animation animated-item-1\">Al arrendar nuestras cabinas obtendrás:</h1>
                                    
                                    <h2 class=\"animation animated-item-2\">

                                    
                                        <p>Fotos Ilimitadas</p>
                                        <p>Álbum de dedicatorias (*)</p>
                                        <p>Personapzación de las tiras fotográficas</p>
                                        <p>Fotografías Imantadas (**)</p>
                                        <p>Cotillón para las fotos.</p>
                                        <p>Operador</p>
                                        <p>Traslado sin costo en toda la Región Metropolitana.</p>
                                        <p>Publicación de todas las fotos de tu evento en nuestros servidores durante 45 días.</p>
                                    
                                    <h2>(*) Sólo para matrimonios.</h2>
                                    <h2>(**) Servicio opcional.</h2>

                                    <a class=\"btn-slide animation animated-item-3\" href=\"#services\">Leer más</a>

                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
            <i class=\"fa fa-chevron-left\"></i>
        </a>
        <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
            <i class=\"fa fa-chevron-right\"></i>
        </a>
    </section><!--/#main-slider-->

    <section id=\"feature\" >
        <div class=\"container\">
           <div class=\"center wow fadeInDown\">
                <h2>Características</h2>
                <p class=\"lead\">Contrata nuestras cabinas fotográficas para tu matrimonio, fiesta o evento y contarás con lo siguiente:</p>
            </div>

            <div class=\"row\">
                <div class=\"features\">
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-camera\"></i>
                            <h2>Fotos Ilimitadas</h2>
                            <h3>Todas las fotos que puedan sacarse, ¡Sin Limites!</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-magic\"></i>
                            <h2>Personaliza tus fotos</h2>
                            <h3>Incorporamos en cada tira tu caricatura, diseño y colores.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-smile-o\"></i>
                            <h2>Cotillón</h2>
                            <h3>El mejor cotillón de esponja solo para tus fotos.</h3>
                        </div>
                    </div><!--/.col-md-4-->

 
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-magnet\"></i>
                            <h2>Fotos Imantadas</h2>
                            <h3>Añade magnetismo a las fotos de tus invitados.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                   <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-book\"></i>
                            <h2>Álbum de dedicatorias</h2>
                            <h3>En tu matrimonio, tus invitados te dejan una dedicatoria y su mejor foto.</h3>
                        </div>
                    </div><!--/.col-md-4-->


                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-share-alt\"></i>
                            <h2>Comparte tus fotos</h2>
                            <h3>Todas las fotos quedan publicadas en nuestros servidores por 45 días.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id=\"recent-works\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Nuestro Trabajo</h2>
                <p class=\"lead\">Cada evento es un compromiso al que nos entregamos con alegría y profesinalismo. Nos esmeramos en que cada fotografía se convierta en el mejor recuerdo.</p>
            </div>
  
            <div class=\"row\">

                ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seleccion"]) ? $context["seleccion"] : $this->getContext($context, "seleccion")));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 178
            echo "                    <div class=\"col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["photo"]), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Declaración</a> </h3>
                                    <p>Esta fotografía pertenece a quien contrató nuestro servicio. Prohibida su reproducción.</p>
                                    <a class=\"preview\" href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["photo"]), "html", null, true);
            echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> Ver</a>
                                </div> 
                            </div>
                        </div>
                    </div>   
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id=\"services\" class=\"service-item\">
       <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Nuestro Servicio</h2>
                <p class=\"lead\"></p>
            </div>

            <div class=\"row\">

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"images/services/camera.png\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Camaras Reflex</h3>
                            <p>Usamos cámaras Canon PowerShot y EOS Rebel T3i.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"images/services/photo.png\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Impresión</h3>
                            <p>Trabajamos con la línea DNP en impresoras y papel.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"images/services/group.png\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Capacidad</h3>
                            <p>Nuestras cabinas tienen capacidad hasta 8 personas.</p>
                        </div>
                    </div>
                </div>  

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"images/services/photobooth.png\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Cabinas</h3>
                            <p>Elige panorámica o cerrada, sin costo adicional.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"images/services/operador.png\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Operadores</h3>
                            <p>Nuestro servicio incluye operadores especializados.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"media services-wrap wow fadeInDown\">
                        <div class=\"pull-left\">
                            <img class=\"img-responsive\" src=\"images/services/truck.png\">
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">Traslado</h3>
                            <p>Sin costo adicional en la Región Metropolitana.</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id=\"partner\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Nuestras Alianzas</h2>
                <p class=\"lead\">Contamos con alianzas y descuentos especiales con los mejores Centros de Eventos, Wedding Planners y Productoras.</p>
            </div>    

            <div class=\"partners\">
                <ul>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" src=\"images/partners/partner1.png\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\" src=\"images/partners/partner2.png\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\" src=\"images/partners/partner3.png\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\" src=\"images/partners/partner4.png\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1500ms\" src=\"images/partners/partner5.png\"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

    <section id=\"conatcat-info\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <div class=\"media contact-info wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-question\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h2>¿Tienes alguna pregunta?</h2>
                            <p>Estamos disponibles para atender tus consultas y cotizaciones a través de nuestro teléfono de contacto <strong>+569 5921 0128</strong> o envíanos un correo electrónico a <strong><a href=\"mailto:alicia@fiestaymagia.cl\">alicia@fiestaymagia.cl</a></strong> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

";
        
        $__internal_50ee29f81e6dddf699845ea015bd839752ecf6e0c8f4879607632c6460798a7c->leave($__internal_50ee29f81e6dddf699845ea015bd839752ecf6e0c8f4879607632c6460798a7c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 191,  231 => 185,  223 => 180,  219 => 178,  215 => 177,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <section id="main-slider" class="no-margin">*/
/*         <div class="carousel slide">*/
/*             <ol class="carousel-indicators">*/
/*                 <li data-target="#main-slider" data-slide-to="0" class="active"></li>*/
/*                 <li data-target="#main-slider" data-slide-to="1"></li>*/
/*                 <li data-target="#main-slider" data-slide-to="2"></li>*/
/*             </ol>*/
/*             <div class="carousel-inner">*/
/* */
/*                 <div class="item active" style="background-image: url(images/slider/bg8.jpg)">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Registra todos los momentos de tu fiesta y dale a tus invitados un recuerdo personalizado</h1>*/
/*                                     <h2 class="animation animated-item-2">Con nuestras cabinas fotográficas panorámicas o cerradas</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="#recent-works">Leer más</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="col-sm-6 hidden-xs animation animated-item-4">*/
/*                                 <div class="slider-img">*/
/*                                     <img src="images/slider/img1.png" class="img-responsive">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/* */
/*                 <div class="item" style="background-image: url(images/slider/bg5.jpg)">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Personaliza tus fotos</h1>*/
/*                                     <h2 class="animation animated-item-2">Elije uno de nuestros diseños o envíanos el tuyo.</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="#feature">Leer más</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="col-sm-6 hidden-xs animation animated-item-4">*/
/*                                 <div class="slider-img">*/
/*                                     <img src="images/slider/img5.png" class="img-responsive">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/* */
/*                 <div class="item" style="background-image: url(images/slider/bg7.jpg)">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h2 class="animation animated-item-2">*/
/*                                     */
/* */
/*                                     </h2>*/
/*                                     */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-6 hidden-xs animation animated-item-4" align="left">*/
/*                                 <div class="slider-img">*/
/*                                     <h1 class="animation animated-item-1">Al arrendar nuestras cabinas obtendrás:</h1>*/
/*                                     */
/*                                     <h2 class="animation animated-item-2">*/
/* */
/*                                     */
/*                                         <p>Fotos Ilimitadas</p>*/
/*                                         <p>Álbum de dedicatorias (*)</p>*/
/*                                         <p>Personapzación de las tiras fotográficas</p>*/
/*                                         <p>Fotografías Imantadas (**)</p>*/
/*                                         <p>Cotillón para las fotos.</p>*/
/*                                         <p>Operador</p>*/
/*                                         <p>Traslado sin costo en toda la Región Metropolitana.</p>*/
/*                                         <p>Publicación de todas las fotos de tu evento en nuestros servidores durante 45 días.</p>*/
/*                                     */
/*                                     <h2>(*) Sólo para matrimonios.</h2>*/
/*                                     <h2>(**) Servicio opcional.</h2>*/
/* */
/*                                     <a class="btn-slide animation animated-item-3" href="#services">Leer más</a>*/
/* */
/*                                     </h2>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/*             </div><!--/.carousel-inner-->*/
/*         </div><!--/.carousel-->*/
/*         <a class="prev hidden-xs" href="#main-slider" data-slide="prev">*/
/*             <i class="fa fa-chevron-left"></i>*/
/*         </a>*/
/*         <a class="next hidden-xs" href="#main-slider" data-slide="next">*/
/*             <i class="fa fa-chevron-right"></i>*/
/*         </a>*/
/*     </section><!--/#main-slider-->*/
/* */
/*     <section id="feature" >*/
/*         <div class="container">*/
/*            <div class="center wow fadeInDown">*/
/*                 <h2>Características</h2>*/
/*                 <p class="lead">Contrata nuestras cabinas fotográficas para tu matrimonio, fiesta o evento y contarás con lo siguiente:</p>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="features">*/
/*                     <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/*                         <div class="feature-wrap">*/
/*                             <i class="fa fa-camera"></i>*/
/*                             <h2>Fotos Ilimitadas</h2>*/
/*                             <h3>Todas las fotos que puedan sacarse, ¡Sin Limites!</h3>*/
/*                         </div>*/
/*                     </div><!--/.col-md-4-->*/
/* */
/*                     <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/*                         <div class="feature-wrap">*/
/*                             <i class="fa fa-magic"></i>*/
/*                             <h2>Personaliza tus fotos</h2>*/
/*                             <h3>Incorporamos en cada tira tu caricatura, diseño y colores.</h3>*/
/*                         </div>*/
/*                     </div><!--/.col-md-4-->*/
/* */
/*                     <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/*                         <div class="feature-wrap">*/
/*                             <i class="fa fa-smile-o"></i>*/
/*                             <h2>Cotillón</h2>*/
/*                             <h3>El mejor cotillón de esponja solo para tus fotos.</h3>*/
/*                         </div>*/
/*                     </div><!--/.col-md-4-->*/
/* */
/*  */
/*                     <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/*                         <div class="feature-wrap">*/
/*                             <i class="fa fa-magnet"></i>*/
/*                             <h2>Fotos Imantadas</h2>*/
/*                             <h3>Añade magnetismo a las fotos de tus invitados.</h3>*/
/*                         </div>*/
/*                     </div><!--/.col-md-4-->*/
/* */
/*                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/*                         <div class="feature-wrap">*/
/*                             <i class="fa fa-book"></i>*/
/*                             <h2>Álbum de dedicatorias</h2>*/
/*                             <h3>En tu matrimonio, tus invitados te dejan una dedicatoria y su mejor foto.</h3>*/
/*                         </div>*/
/*                     </div><!--/.col-md-4-->*/
/* */
/* */
/*                     <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/*                         <div class="feature-wrap">*/
/*                             <i class="fa fa-share-alt"></i>*/
/*                             <h2>Comparte tus fotos</h2>*/
/*                             <h3>Todas las fotos quedan publicadas en nuestros servidores por 45 días.</h3>*/
/*                         </div>*/
/*                     </div><!--/.col-md-4-->*/
/* */
/*                 </div><!--/.services-->*/
/*             </div><!--/.row-->    */
/*         </div><!--/.container-->*/
/*     </section><!--/#feature-->*/
/* */
/*     <section id="recent-works">*/
/*         <div class="container">*/
/*             <div class="center wow fadeInDown">*/
/*                 <h2>Nuestro Trabajo</h2>*/
/*                 <p class="lead">Cada evento es un compromiso al que nos entregamos con alegría y profesinalismo. Nos esmeramos en que cada fotografía se convierta en el mejor recuerdo.</p>*/
/*             </div>*/
/*   */
/*             <div class="row">*/
/* */
/*                 {% for photo in seleccion %}*/
/*                     <div class="col-xs-12 col-sm-4 col-md-3">*/
/*                         <div class="recent-work-wrap">*/
/*                             <img class="img-responsive" src="{{ asset(photo) }}" alt="">*/
/*                             <div class="overlay">*/
/*                                 <div class="recent-work-inner">*/
/*                                     <h3><a href="#">Declaración</a> </h3>*/
/*                                     <p>Esta fotografía pertenece a quien contrató nuestro servicio. Prohibida su reproducción.</p>*/
/*                                     <a class="preview" href="{{asset(photo)}}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>*/
/*                                 </div> */
/*                             </div>*/
/*                         </div>*/
/*                     </div>   */
/*                 {% endfor %}*/
/*                 */
/*             </div><!--/.row-->*/
/*         </div><!--/.container-->*/
/*     </section><!--/#recent-works-->*/
/* */
/*     <section id="services" class="service-item">*/
/*        <div class="container">*/
/*             <div class="center wow fadeInDown">*/
/*                 <h2>Nuestro Servicio</h2>*/
/*                 <p class="lead"></p>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="media services-wrap wow fadeInDown">*/
/*                         <div class="pull-left">*/
/*                             <img class="img-responsive" src="images/services/camera.png">*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h3 class="media-heading">Camaras Reflex</h3>*/
/*                             <p>Usamos cámaras Canon PowerShot y EOS Rebel T3i.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="media services-wrap wow fadeInDown">*/
/*                         <div class="pull-left">*/
/*                             <img class="img-responsive" src="images/services/photo.png">*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h3 class="media-heading">Impresión</h3>*/
/*                             <p>Trabajamos con la línea DNP en impresoras y papel.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="media services-wrap wow fadeInDown">*/
/*                         <div class="pull-left">*/
/*                             <img class="img-responsive" src="images/services/group.png">*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h3 class="media-heading">Capacidad</h3>*/
/*                             <p>Nuestras cabinas tienen capacidad hasta 8 personas.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>  */
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="media services-wrap wow fadeInDown">*/
/*                         <div class="pull-left">*/
/*                             <img class="img-responsive" src="images/services/photobooth.png">*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h3 class="media-heading">Cabinas</h3>*/
/*                             <p>Elige panorámica o cerrada, sin costo adicional.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="media services-wrap wow fadeInDown">*/
/*                         <div class="pull-left">*/
/*                             <img class="img-responsive" src="images/services/operador.png">*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h3 class="media-heading">Operadores</h3>*/
/*                             <p>Nuestro servicio incluye operadores especializados.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="media services-wrap wow fadeInDown">*/
/*                         <div class="pull-left">*/
/*                             <img class="img-responsive" src="images/services/truck.png">*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h3 class="media-heading">Traslado</h3>*/
/*                             <p>Sin costo adicional en la Región Metropolitana.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>                                                */
/*             </div><!--/.row-->*/
/*         </div><!--/.container-->*/
/*     </section><!--/#services-->*/
/* */
/*     <section id="partner">*/
/*         <div class="container">*/
/*             <div class="center wow fadeInDown">*/
/*                 <h2>Nuestras Alianzas</h2>*/
/*                 <p class="lead">Contamos con alianzas y descuentos especiales con los mejores Centros de Eventos, Wedding Planners y Productoras.</p>*/
/*             </div>    */
/* */
/*             <div class="partners">*/
/*                 <ul>*/
/*                     <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>*/
/*                     <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>*/
/*                     <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>*/
/*                     <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>*/
/*                     <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>*/
/*                 </ul>*/
/*             </div>        */
/*         </div><!--/.container-->*/
/*     </section><!--/#partner-->*/
/* */
/*     <section id="conatcat-info">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8">*/
/*                     <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/*                         <div class="pull-left">*/
/*                             <i class="fa fa-question"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                             <h2>¿Tienes alguna pregunta?</h2>*/
/*                             <p>Estamos disponibles para atender tus consultas y cotizaciones a través de nuestro teléfono de contacto <strong>+569 5921 0128</strong> o envíanos un correo electrónico a <strong><a href="mailto:alicia@fiestaymagia.cl">alicia@fiestaymagia.cl</a></strong> </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!--/.container-->    */
/*     </section><!--/#conatcat-info-->*/
/* */
/* {% endblock %}*/
/* */
