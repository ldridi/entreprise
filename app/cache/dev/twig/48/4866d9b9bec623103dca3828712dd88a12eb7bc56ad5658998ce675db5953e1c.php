<?php

/* PageBundle:Error:500.html.twig */
class __TwigTemplate_e98eb7a10a931d819b33cfd64269e0719842d197a523f397a66c1c32c114f9ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout_erreur.html.twig", "PageBundle:Error:500.html.twig", 1);
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
        $__internal_9cf3f01cdba9c65649d4ef7487b756f15ca133bbf2b846d13d62832cc8ffc5cd = $this->env->getExtension("native_profiler");
        $__internal_9cf3f01cdba9c65649d4ef7487b756f15ca133bbf2b846d13d62832cc8ffc5cd->enter($__internal_9cf3f01cdba9c65649d4ef7487b756f15ca133bbf2b846d13d62832cc8ffc5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Error:500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf3f01cdba9c65649d4ef7487b756f15ca133bbf2b846d13d62832cc8ffc5cd->leave($__internal_9cf3f01cdba9c65649d4ef7487b756f15ca133bbf2b846d13d62832cc8ffc5cd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5950b3b40a1a652e6dc3501e0915d23afd9fce7e46b020b33fd3f981e882d187 = $this->env->getExtension("native_profiler");
        $__internal_5950b3b40a1a652e6dc3501e0915d23afd9fce7e46b020b33fd3f981e882d187->enter($__internal_5950b3b40a1a652e6dc3501e0915d23afd9fce7e46b020b33fd3f981e882d187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"middle-box text-center animated fadeInDown\">
    <h1>500</h1>
    <h3 class=\"font-bold\">Internal Server Error</h3>

    <div class=\"error-desc\">
        The server encountered something unexpected that didn't allow it to complete the request. We apologize.<br/>
        You can go back to main page: <br/><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("entreprise_homepage");
        echo "\" class=\"btn btn-primary m-t\">Dashboard</a>
    </div>
</div>

";
        
        $__internal_5950b3b40a1a652e6dc3501e0915d23afd9fce7e46b020b33fd3f981e882d187->leave($__internal_5950b3b40a1a652e6dc3501e0915d23afd9fce7e46b020b33fd3f981e882d187_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Error:500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layout_erreur.html.twig' %}*/
/* {% block body %}*/
/* */
/* <div class="middle-box text-center animated fadeInDown">*/
/*     <h1>500</h1>*/
/*     <h3 class="font-bold">Internal Server Error</h3>*/
/* */
/*     <div class="error-desc">*/
/*         The server encountered something unexpected that didn't allow it to complete the request. We apologize.<br/>*/
/*         You can go back to main page: <br/><a href="{{ path('entreprise_homepage') }}" class="btn btn-primary m-t">Dashboard</a>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
