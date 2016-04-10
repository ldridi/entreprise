<?php

/* layout/layout_landing.html.twig */
class __TwigTemplate_96723981e63f39b6e16d471d572fba4239944e5cf5dc1a4c003c592591f74d87 extends Twig_Template
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
        $__internal_e654e2340ced6ab701aab84813e79fef32ec233eb988930e15b2550abf91bb2d = $this->env->getExtension("native_profiler");
        $__internal_e654e2340ced6ab701aab84813e79fef32ec233eb988930e15b2550abf91bb2d->enter($__internal_e654e2340ced6ab701aab84813e79fef32ec233eb988930e15b2550abf91bb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout_landing.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body id=\"page-top\" class=\"landing-page\">
    <div class=\"navbar-wrapper\">
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header page-scroll\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index-2.html\">WEBAPPLAYERS</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a class=\"page-scroll\" href=\"#page-top\">Home</a></li>
                        <li><a class=\"page-scroll\" href=\"#features\">Features</a></li>
                        <li><a class=\"page-scroll\" href=\"#team\">Team</a></li>
                        <li><a class=\"page-scroll\" href=\"#testimonials\">Testimonials</a></li>
                        <li><a class=\"page-scroll\" href=\"#pricing\">Pricing</a></li>
                        <li><a class=\"page-scroll\" href=\"#contact\">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>



        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "




    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom and plugin javascript -->
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/inspinia.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/wow/wow.min.js"), "html", null, true);
        echo "\"></script>


    <script>

        \$(document).ready(function () {

            \$('body').scrollspy({
                target: '.navbar-fixed-top',
                offset: 80
            });

            // Page scrolling feature
            \$('a.page-scroll').bind('click', function(event) {
                var link = \$(this);
                \$('html, body').stop().animate({
                    scrollTop: \$(link.attr('href')).offset().top - 50
                }, 500);
                event.preventDefault();
                \$(\"#navbar\").collapse('hide');
            });
        });

        var cbpAnimatedHeader = (function() {
            var docElem = document.documentElement,
                    header = document.querySelector( '.navbar-default' ),
                    didScroll = false,
                    changeHeaderOn = 200;
            function init() {
                window.addEventListener( 'scroll', function( event ) {
                    if( !didScroll ) {
                        didScroll = true;
                        setTimeout( scrollPage, 250 );
                    }
                }, false );
            }
            function scrollPage() {
                var sy = scrollY();
                if ( sy >= changeHeaderOn ) {
                    \$(header).addClass('navbar-scroll')
                }
                else {
                    \$(header).removeClass('navbar-scroll')
                }
                didScroll = false;
            }
            function scrollY() {
                return window.pageYOffset || docElem.scrollTop;
            }
            init();

        })();

        // Activate WOW.js plugin for animation on scrol
        new WOW().init();

    </script>
    ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "    </body>
</html>
";
        
        $__internal_e654e2340ced6ab701aab84813e79fef32ec233eb988930e15b2550abf91bb2d->leave($__internal_e654e2340ced6ab701aab84813e79fef32ec233eb988930e15b2550abf91bb2d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d44282ee91d72d2e6542433bfa1387e5c40ee805ee82f260be670f6db04eecc1 = $this->env->getExtension("native_profiler");
        $__internal_d44282ee91d72d2e6542433bfa1387e5c40ee805ee82f260be670f6db04eecc1->enter($__internal_d44282ee91d72d2e6542433bfa1387e5c40ee805ee82f260be670f6db04eecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d44282ee91d72d2e6542433bfa1387e5c40ee805ee82f260be670f6db04eecc1->leave($__internal_d44282ee91d72d2e6542433bfa1387e5c40ee805ee82f260be670f6db04eecc1_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b57e953137d0d94a4e5883ee4591d99aa9544ea5d76b0d834a702f3a56c44c22 = $this->env->getExtension("native_profiler");
        $__internal_b57e953137d0d94a4e5883ee4591d99aa9544ea5d76b0d834a702f3a56c44c22->enter($__internal_b57e953137d0d94a4e5883ee4591d99aa9544ea5d76b0d834a702f3a56c44c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b57e953137d0d94a4e5883ee4591d99aa9544ea5d76b0d834a702f3a56c44c22->leave($__internal_b57e953137d0d94a4e5883ee4591d99aa9544ea5d76b0d834a702f3a56c44c22_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_be2a65fd72ea203540b099e9d6ef0ec782fcd55781a45ea4408e4733a7e7b4c7 = $this->env->getExtension("native_profiler");
        $__internal_be2a65fd72ea203540b099e9d6ef0ec782fcd55781a45ea4408e4733a7e7b4c7->enter($__internal_be2a65fd72ea203540b099e9d6ef0ec782fcd55781a45ea4408e4733a7e7b4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be2a65fd72ea203540b099e9d6ef0ec782fcd55781a45ea4408e4733a7e7b4c7->leave($__internal_be2a65fd72ea203540b099e9d6ef0ec782fcd55781a45ea4408e4733a7e7b4c7_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_960b51973d78b52f512f0f546666c29824cd5f47a66ee8da2918f50256b43f75 = $this->env->getExtension("native_profiler");
        $__internal_960b51973d78b52f512f0f546666c29824cd5f47a66ee8da2918f50256b43f75->enter($__internal_960b51973d78b52f512f0f546666c29824cd5f47a66ee8da2918f50256b43f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_960b51973d78b52f512f0f546666c29824cd5f47a66ee8da2918f50256b43f75->leave($__internal_960b51973d78b52f512f0f546666c29824cd5f47a66ee8da2918f50256b43f75_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout_landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 115,  220 => 44,  209 => 7,  197 => 6,  188 => 116,  186 => 115,  126 => 58,  122 => 57,  118 => 56,  112 => 53,  108 => 52,  104 => 51,  100 => 50,  93 => 45,  91 => 44,  57 => 13,  53 => 12,  48 => 10,  44 => 9,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">*/
/* */
/*         <link href="{{ asset('css/animate.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/*     </head>*/
/*     <body id="page-top" class="landing-page">*/
/*     <div class="navbar-wrapper">*/
/*         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/*             <div class="container">*/
/*                 <div class="navbar-header page-scroll">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="index-2.html">WEBAPPLAYERS</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a class="page-scroll" href="#page-top">Home</a></li>*/
/*                         <li><a class="page-scroll" href="#features">Features</a></li>*/
/*                         <li><a class="page-scroll" href="#team">Team</a></li>*/
/*                         <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>*/
/*                         <li><a class="page-scroll" href="#pricing">Pricing</a></li>*/
/*                         <li><a class="page-scroll" href="#contact">Contact</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* */
/* */
/* */
/*         {% block body %}{% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/*     <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>*/
/* */
/*     <!-- Custom and plugin javascript -->*/
/*     <script src="{{ asset('js/inspinia.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>*/
/*     <script src="{{ asset('js/plugins/wow/wow.min.js') }}"></script>*/
/* */
/* */
/*     <script>*/
/* */
/*         $(document).ready(function () {*/
/* */
/*             $('body').scrollspy({*/
/*                 target: '.navbar-fixed-top',*/
/*                 offset: 80*/
/*             });*/
/* */
/*             // Page scrolling feature*/
/*             $('a.page-scroll').bind('click', function(event) {*/
/*                 var link = $(this);*/
/*                 $('html, body').stop().animate({*/
/*                     scrollTop: $(link.attr('href')).offset().top - 50*/
/*                 }, 500);*/
/*                 event.preventDefault();*/
/*                 $("#navbar").collapse('hide');*/
/*             });*/
/*         });*/
/* */
/*         var cbpAnimatedHeader = (function() {*/
/*             var docElem = document.documentElement,*/
/*                     header = document.querySelector( '.navbar-default' ),*/
/*                     didScroll = false,*/
/*                     changeHeaderOn = 200;*/
/*             function init() {*/
/*                 window.addEventListener( 'scroll', function( event ) {*/
/*                     if( !didScroll ) {*/
/*                         didScroll = true;*/
/*                         setTimeout( scrollPage, 250 );*/
/*                     }*/
/*                 }, false );*/
/*             }*/
/*             function scrollPage() {*/
/*                 var sy = scrollY();*/
/*                 if ( sy >= changeHeaderOn ) {*/
/*                     $(header).addClass('navbar-scroll')*/
/*                 }*/
/*                 else {*/
/*                     $(header).removeClass('navbar-scroll')*/
/*                 }*/
/*                 didScroll = false;*/
/*             }*/
/*             function scrollY() {*/
/*                 return window.pageYOffset || docElem.scrollTop;*/
/*             }*/
/*             init();*/
/* */
/*         })();*/
/* */
/*         // Activate WOW.js plugin for animation on scrol*/
/*         new WOW().init();*/
/* */
/*     </script>*/
/*     {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
