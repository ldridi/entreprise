<?php

/* PageBundle:Error:404.html.twig */
class __TwigTemplate_e649468d7a06e059898cb30ed40d32191a2b11a8ca0a157c6100af29493fa3a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout_erreur.html.twig", "PageBundle:Error:404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout_erreur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_388b4b1540dbbf73d8db894e01b1e79c203d23b855b73ff8ff9345152806e957 = $this->env->getExtension("native_profiler");
        $__internal_388b4b1540dbbf73d8db894e01b1e79c203d23b855b73ff8ff9345152806e957->enter($__internal_388b4b1540dbbf73d8db894e01b1e79c203d23b855b73ff8ff9345152806e957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Error:404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_388b4b1540dbbf73d8db894e01b1e79c203d23b855b73ff8ff9345152806e957->leave($__internal_388b4b1540dbbf73d8db894e01b1e79c203d23b855b73ff8ff9345152806e957_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4f9bb26e1fd95043a6dafe36f2164bb498e39e86b11fd7bc7965fe5d3d6470c = $this->env->getExtension("native_profiler");
        $__internal_c4f9bb26e1fd95043a6dafe36f2164bb498e39e86b11fd7bc7965fe5d3d6470c->enter($__internal_c4f9bb26e1fd95043a6dafe36f2164bb498e39e86b11fd7bc7965fe5d3d6470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"middle-box text-center animated fadeInDown\">
    <h1>404</h1>
    <h3 class=\"font-bold\">Page Not Found</h3>

    <div class=\"error-desc\">
        Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app.
        <form class=\"form-inline m-t\" role=\"form\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search for page\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Search</button>
        </form>
    </div>
</div>

";
        
        $__internal_c4f9bb26e1fd95043a6dafe36f2164bb498e39e86b11fd7bc7965fe5d3d6470c->leave($__internal_c4f9bb26e1fd95043a6dafe36f2164bb498e39e86b11fd7bc7965fe5d3d6470c_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Error:404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layout_erreur.html.twig' %}*/
/* {% block body %}*/
/* */
/* <div class="middle-box text-center animated fadeInDown">*/
/*     <h1>404</h1>*/
/*     <h3 class="font-bold">Page Not Found</h3>*/
/* */
/*     <div class="error-desc">*/
/*         Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app.*/
/*         <form class="form-inline m-t" role="form">*/
/*             <div class="form-group">*/
/*                 <input type="text" class="form-control" placeholder="Search for page">*/
/*             </div>*/
/*             <button type="submit" class="btn btn-primary">Search</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
