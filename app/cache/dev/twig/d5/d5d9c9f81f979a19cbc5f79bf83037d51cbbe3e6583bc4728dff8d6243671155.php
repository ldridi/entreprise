<?php

/* PageBundle:Error:403.html.twig */
class __TwigTemplate_eaa1bfaa957aea49896b13bb358578e1eb12b09f69593b73e6d90f09cfdcb271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout_erreur.html.twig", "PageBundle:Error:403.html.twig", 1);
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
        $__internal_fbc7762261fa5b85def34ab1774d20b824279104ca165ba71b71617d5a802114 = $this->env->getExtension("native_profiler");
        $__internal_fbc7762261fa5b85def34ab1774d20b824279104ca165ba71b71617d5a802114->enter($__internal_fbc7762261fa5b85def34ab1774d20b824279104ca165ba71b71617d5a802114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Error:403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc7762261fa5b85def34ab1774d20b824279104ca165ba71b71617d5a802114->leave($__internal_fbc7762261fa5b85def34ab1774d20b824279104ca165ba71b71617d5a802114_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8708e87dcf74f9db4e60343d2d6f8e00558b59a960bb56e9c920b5e64091f511 = $this->env->getExtension("native_profiler");
        $__internal_8708e87dcf74f9db4e60343d2d6f8e00558b59a960bb56e9c920b5e64091f511->enter($__internal_8708e87dcf74f9db4e60343d2d6f8e00558b59a960bb56e9c920b5e64091f511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"middle-box text-center animated fadeInDown\">
        <h1>403</h1>
        <h3 class=\"font-bold\">Access Denied.</h3>

        <div class=\"error-desc\">
            The server encountered something unexpected that didn't allow it to complete the request. We apologize.<br/>
            You can go back to main page: <br/><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("entreprise_homepage");
        echo "\" class=\"btn btn-primary m-t\">Dashboard</a>
        </div>
    </div>

";
        
        $__internal_8708e87dcf74f9db4e60343d2d6f8e00558b59a960bb56e9c920b5e64091f511->leave($__internal_8708e87dcf74f9db4e60343d2d6f8e00558b59a960bb56e9c920b5e64091f511_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Error:403.html.twig";
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
/*     <div class="middle-box text-center animated fadeInDown">*/
/*         <h1>403</h1>*/
/*         <h3 class="font-bold">Access Denied.</h3>*/
/* */
/*         <div class="error-desc">*/
/*             The server encountered something unexpected that didn't allow it to complete the request. We apologize.<br/>*/
/*             You can go back to main page: <br/><a href="{{ path('entreprise_homepage') }}" class="btn btn-primary m-t">Dashboard</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
