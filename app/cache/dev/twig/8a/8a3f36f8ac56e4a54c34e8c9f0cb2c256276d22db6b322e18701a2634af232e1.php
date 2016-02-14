<?php

/* :default:index.html.twig */
class __TwigTemplate_9a584ece912fbf8b6de3f9707f1b58089d908c4459569afc990f0b0e3f866ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_e0ae4da381622c1adb260624e29efa6e7d21963a219d248c788d8b76c5f698fe = $this->env->getExtension("native_profiler");
        $__internal_e0ae4da381622c1adb260624e29efa6e7d21963a219d248c788d8b76c5f698fe->enter($__internal_e0ae4da381622c1adb260624e29efa6e7d21963a219d248c788d8b76c5f698fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ae4da381622c1adb260624e29efa6e7d21963a219d248c788d8b76c5f698fe->leave($__internal_e0ae4da381622c1adb260624e29efa6e7d21963a219d248c788d8b76c5f698fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e4bf1e581f5d1525daa81880e0c734a1e419195872db8e9edfedaa3e87ea9ea = $this->env->getExtension("native_profiler");
        $__internal_1e4bf1e581f5d1525daa81880e0c734a1e419195872db8e9edfedaa3e87ea9ea->enter($__internal_1e4bf1e581f5d1525daa81880e0c734a1e419195872db8e9edfedaa3e87ea9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">

                <div class=\"item active\" style=\"background-image: url(images/slider/bg1.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
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

                <div class=\"item\" style=\"background-image: url(images/slider/bg2.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"images/slider/img2.png\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url(images/slider/bg3.jpg)\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"images/slider/img3.png\" class=\"img-responsive\">
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
                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"images/portfolio/recent/item1.png\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"images/portfolio/full/item1.png\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"images/portfolio/recent/item2.png\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"images/portfolio/full/item2.png\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"images/portfolio/recent/item3.png\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"images/portfolio/full/item3.png\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"images/portfolio/recent/item4.png\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"images/portfolio/full/item4.png\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"images/portfolio/recent/item5.png\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"images/portfolio/full/item5.png\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"images/portfolio/recent/item6.png\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"images/portfolio/full/item6.png\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"images/portfolio/recent/item7.png\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"images/portfolio/full/item7.png\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"images/portfolio/recent/item8.png\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"images/portfolio/full/item8.png\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
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

    <section id=\"content\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Nuestros clientes nos recomiendan</h2>
                <p class=\"lead\"></p>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-8 wow fadeInDown\">
                   <div class=\"tab-wrap\"> 
                        <div class=\"media\">
                            <div class=\"parrent pull-left\">
                                <ul class=\"nav nav-tabs nav-stacked\">
                                    <li class=\"\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Responsive Web Design</a></li>
                                    <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Premium Plugin Included</a></li>
                                    <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Predefine Layout</a></li>
                                    <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Our Philosopy</a></li>
                                    <li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class=\"parrent media-body\">
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade\" id=\"tab1\">
                                        <div class=\"media\">
                                           <div class=\"pull-left\">
                                                <img class=\"img-responsive\" src=\"images/tab2.png\">
                                            </div>
                                            <div class=\"media-body\">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class=\"tab-pane fade active in\" id=\"tab2\">
                                        <div class=\"media\">
                                           <div class=\"pull-left\">
                                                <img class=\"img-responsive\" src=\"images/tab1.png\">
                                            </div>
                                            <div class=\"media-body\">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class=\"tab-pane fade\" id=\"tab3\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                     </div>
                                     
                                     <div class=\"tab-pane fade\" id=\"tab4\">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                     </div>

                                     <div class=\"tab-pane fade\" id=\"tab5\">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class=\"col-xs-12 col-sm-4 wow fadeInDown\">
                    <div class=\"testimonial\">
                        <h2>Testimonials</h2>
                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img class=\"img-responsive img-circle\" src=\"images/testimonials1.png\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img class=\"img-responsive img-circle\" src=\"images/testimonials1.png\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

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
        
        $__internal_1e4bf1e581f5d1525daa81880e0c734a1e419195872db8e9edfedaa3e87ea9ea->leave($__internal_1e4bf1e581f5d1525daa81880e0c734a1e419195872db8e9edfedaa3e87ea9ea_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <div class="item active" style="background-image: url(images/slider/bg1.jpg)">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>*/
/*                                     <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="#">Read More</a>*/
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
/*                 <div class="item" style="background-image: url(images/slider/bg2.jpg)">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>*/
/*                                     <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="#">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="col-sm-6 hidden-xs animation animated-item-4">*/
/*                                 <div class="slider-img">*/
/*                                     <img src="images/slider/img2.png" class="img-responsive">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/* */
/*                 <div class="item" style="background-image: url(images/slider/bg3.jpg)">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>*/
/*                                     <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="#">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-6 hidden-xs animation animated-item-4">*/
/*                                 <div class="slider-img">*/
/*                                     <img src="images/slider/img3.png" class="img-responsive">*/
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
/* */
/*             <div class="row">*/
/*                 <div class="col-xs-12 col-sm-4 col-md-3">*/
/*                     <div class="recent-work-wrap">*/
/*                         <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">*/
/*                         <div class="overlay">*/
/*                             <div class="recent-work-inner">*/
/*                                 <h3><a href="#">Business theme</a> </h3>*/
/*                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>*/
/*                                 <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                 </div>   */
/* */
/*                 <div class="col-xs-12 col-sm-4 col-md-3">*/
/*                     <div class="recent-work-wrap">*/
/*                         <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">*/
/*                         <div class="overlay">*/
/*                             <div class="recent-work-inner">*/
/*                                 <h3><a href="#">Business theme</a></h3>*/
/*                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>*/
/*                                 <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                 </div> */
/* */
/*                 <div class="col-xs-12 col-sm-4 col-md-3">*/
/*                     <div class="recent-work-wrap">*/
/*                         <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">*/
/*                         <div class="overlay">*/
/*                             <div class="recent-work-inner">*/
/*                                 <h3><a href="#">Business theme </a></h3>*/
/*                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>*/
/*                                 <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                 </div>   */
/* */
/*                 <div class="col-xs-12 col-sm-4 col-md-3">*/
/*                     <div class="recent-work-wrap">*/
/*                         <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">*/
/*                         <div class="overlay">*/
/*                             <div class="recent-work-inner">*/
/*                                 <h3><a href="#">Business theme </a></h3>*/
/*                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>*/
/*                                 <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                 </div>   */
/*                 */
/*                 <div class="col-xs-12 col-sm-4 col-md-3">*/
/*                     <div class="recent-work-wrap">*/
/*                         <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">*/
/*                         <div class="overlay">*/
/*                             <div class="recent-work-inner">*/
/*                                 <h3><a href="#">Business theme</a></h3>*/
/*                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>*/
/*                                 <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                 </div>   */
/* */
/*                 <div class="col-xs-12 col-sm-4 col-md-3">*/
/*                     <div class="recent-work-wrap">*/
/*                         <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">*/
/*                         <div class="overlay">*/
/*                             <div class="recent-work-inner">*/
/*                                 <h3><a href="#">Business theme </a></h3>*/
/*                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>*/
/*                                 <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                 </div> */
/* */
/*                 <div class="col-xs-12 col-sm-4 col-md-3">*/
/*                     <div class="recent-work-wrap">*/
/*                         <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">*/
/*                         <div class="overlay">*/
/*                             <div class="recent-work-inner">*/
/*                                 <h3><a href="#">Business theme </a></h3>*/
/*                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>*/
/*                                 <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                 </div>   */
/* */
/*                 <div class="col-xs-12 col-sm-4 col-md-3">*/
/*                     <div class="recent-work-wrap">*/
/*                         <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">*/
/*                         <div class="overlay">*/
/*                             <div class="recent-work-inner">*/
/*                                 <h3><a href="#">Business theme </a></h3>*/
/*                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>*/
/*                                 <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                 </div>   */
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
/*     <section id="content">*/
/*         <div class="container">*/
/*             <div class="center wow fadeInDown">*/
/*                 <h2>Nuestros clientes nos recomiendan</h2>*/
/*                 <p class="lead"></p>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-xs-12 col-sm-8 wow fadeInDown">*/
/*                    <div class="tab-wrap"> */
/*                         <div class="media">*/
/*                             <div class="parrent pull-left">*/
/*                                 <ul class="nav nav-tabs nav-stacked">*/
/*                                     <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>*/
/*                                     <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>*/
/*                                     <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>*/
/*                                     <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>*/
/*                                     <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/*                             <div class="parrent media-body">*/
/*                                 <div class="tab-content">*/
/*                                     <div class="tab-pane fade" id="tab1">*/
/*                                         <div class="media">*/
/*                                            <div class="pull-left">*/
/*                                                 <img class="img-responsive" src="images/tab2.png">*/
/*                                             </div>*/
/*                                             <div class="media-body">*/
/*                                                  <h2>Adipisicing elit</h2>*/
/*                                                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                      <div class="tab-pane fade active in" id="tab2">*/
/*                                         <div class="media">*/
/*                                            <div class="pull-left">*/
/*                                                 <img class="img-responsive" src="images/tab1.png">*/
/*                                             </div>*/
/*                                             <div class="media-body">*/
/*                                                  <h2>Adipisicing elit</h2>*/
/*                                                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.*/
/*                                                  </p>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                      </div>*/
/* */
/*                                      <div class="tab-pane fade" id="tab3">*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>*/
/*                                      </div>*/
/*                                      */
/*                                      <div class="tab-pane fade" id="tab4">*/
/*                                         <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>*/
/*                                      </div>*/
/* */
/*                                      <div class="tab-pane fade" id="tab5">*/
/*                                         <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>*/
/*                                      </div>*/
/*                                 </div> <!--/.tab-content-->  */
/*                             </div> <!--/.media-body--> */
/*                         </div> <!--/.media-->     */
/*                     </div><!--/.tab-wrap-->               */
/*                 </div><!--/.col-sm-6-->*/
/* */
/*                 <div class="col-xs-12 col-sm-4 wow fadeInDown">*/
/*                     <div class="testimonial">*/
/*                         <h2>Testimonials</h2>*/
/*                          <div class="media testimonial-inner">*/
/*                             <div class="pull-left">*/
/*                                 <img class="img-responsive img-circle" src="images/testimonials1.png">*/
/*                             </div>*/
/*                             <div class="media-body">*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>*/
/*                                 <span><strong>-John Doe/</strong> Director of corlate.com</span>*/
/*                             </div>*/
/*                          </div>*/
/* */
/*                          <div class="media testimonial-inner">*/
/*                             <div class="pull-left">*/
/*                                 <img class="img-responsive img-circle" src="images/testimonials1.png">*/
/*                             </div>*/
/*                             <div class="media-body">*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>*/
/*                                 <span><strong>-John Doe/</strong> Director of corlate.com</span>*/
/*                             </div>*/
/*                          </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div><!--/.row-->*/
/*         </div><!--/.container-->*/
/*     </section><!--/#content-->*/
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
