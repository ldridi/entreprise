<?php

/* layout/layout_erreur.html.twig */
class __TwigTemplate_4acdd5bff46bc53d3e2007f1747cd88ef8e29d8554a60f49745f6ab084fc07f7 extends Twig_Template
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
        $__internal_89a16579e7b1c6bc2456f93f542123891065f32e85d93f114ed9844a0e79ead4 = $this->env->getExtension("native_profiler");
        $__internal_89a16579e7b1c6bc2456f93f542123891065f32e85d93f114ed9844a0e79ead4->enter($__internal_89a16579e7b1c6bc2456f93f542123891065f32e85d93f114ed9844a0e79ead4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout_erreur.html.twig"));

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
    <body class=\"gray-bg\">

    ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_89a16579e7b1c6bc2456f93f542123891065f32e85d93f114ed9844a0e79ead4->leave($__internal_89a16579e7b1c6bc2456f93f542123891065f32e85d93f114ed9844a0e79ead4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_14c7c8b22fa9229f59945558e10882ee57b3472a9b1930f310bbd1515ea71f02 = $this->env->getExtension("native_profiler");
        $__internal_14c7c8b22fa9229f59945558e10882ee57b3472a9b1930f310bbd1515ea71f02->enter($__internal_14c7c8b22fa9229f59945558e10882ee57b3472a9b1930f310bbd1515ea71f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_14c7c8b22fa9229f59945558e10882ee57b3472a9b1930f310bbd1515ea71f02->leave($__internal_14c7c8b22fa9229f59945558e10882ee57b3472a9b1930f310bbd1515ea71f02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_667b04657eb197f4665b3204241e359f079f39e0ddf7de8374757dc051d69454 = $this->env->getExtension("native_profiler");
        $__internal_667b04657eb197f4665b3204241e359f079f39e0ddf7de8374757dc051d69454->enter($__internal_667b04657eb197f4665b3204241e359f079f39e0ddf7de8374757dc051d69454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_667b04657eb197f4665b3204241e359f079f39e0ddf7de8374757dc051d69454->leave($__internal_667b04657eb197f4665b3204241e359f079f39e0ddf7de8374757dc051d69454_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f75abfec9efa32e7f5a7e3dbcdd173b940f83e2bf19e29552fbc3c41c745999 = $this->env->getExtension("native_profiler");
        $__internal_0f75abfec9efa32e7f5a7e3dbcdd173b940f83e2bf19e29552fbc3c41c745999->enter($__internal_0f75abfec9efa32e7f5a7e3dbcdd173b940f83e2bf19e29552fbc3c41c745999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f75abfec9efa32e7f5a7e3dbcdd173b940f83e2bf19e29552fbc3c41c745999->leave($__internal_0f75abfec9efa32e7f5a7e3dbcdd173b940f83e2bf19e29552fbc3c41c745999_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78194b087ac51f4bff6418fe20477e11739cb9d945b4a6cae67adda90a2ab577 = $this->env->getExtension("native_profiler");
        $__internal_78194b087ac51f4bff6418fe20477e11739cb9d945b4a6cae67adda90a2ab577->enter($__internal_78194b087ac51f4bff6418fe20477e11739cb9d945b4a6cae67adda90a2ab577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_78194b087ac51f4bff6418fe20477e11739cb9d945b4a6cae67adda90a2ab577->leave($__internal_78194b087ac51f4bff6418fe20477e11739cb9d945b4a6cae67adda90a2ab577_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout_erreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 21,  111 => 17,  100 => 7,  88 => 6,  79 => 22,  77 => 21,  73 => 20,  69 => 19,  66 => 18,  64 => 17,  57 => 13,  53 => 12,  48 => 10,  44 => 9,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
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
/*     <body class="gray-bg">*/
/* */
/*     {% block body %}{% endblock %}*/
/* */
/*     <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
