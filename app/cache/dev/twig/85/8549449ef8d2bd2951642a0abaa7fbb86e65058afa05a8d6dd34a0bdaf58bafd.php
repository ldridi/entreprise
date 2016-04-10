<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1c1aead6e7ca9d8d270ab2024d10ca3e58f29046678f340167f8969364a34172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7b39c9f9db9164d29b4469561c4cf2629444198f3d95b6cf2d4e9587fb23c03 = $this->env->getExtension("native_profiler");
        $__internal_c7b39c9f9db9164d29b4469561c4cf2629444198f3d95b6cf2d4e9587fb23c03->enter($__internal_c7b39c9f9db9164d29b4469561c4cf2629444198f3d95b6cf2d4e9587fb23c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7b39c9f9db9164d29b4469561c4cf2629444198f3d95b6cf2d4e9587fb23c03->leave($__internal_c7b39c9f9db9164d29b4469561c4cf2629444198f3d95b6cf2d4e9587fb23c03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c833c91491043c3fc83858a07b6a81cf3370b1680dde0eddea064d797ed56ec8 = $this->env->getExtension("native_profiler");
        $__internal_c833c91491043c3fc83858a07b6a81cf3370b1680dde0eddea064d797ed56ec8->enter($__internal_c833c91491043c3fc83858a07b6a81cf3370b1680dde0eddea064d797ed56ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c833c91491043c3fc83858a07b6a81cf3370b1680dde0eddea064d797ed56ec8->leave($__internal_c833c91491043c3fc83858a07b6a81cf3370b1680dde0eddea064d797ed56ec8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32d8bc3891730504db07bc034b3d4bf2de0174a0db700af79e9661c3c074935e = $this->env->getExtension("native_profiler");
        $__internal_32d8bc3891730504db07bc034b3d4bf2de0174a0db700af79e9661c3c074935e->enter($__internal_32d8bc3891730504db07bc034b3d4bf2de0174a0db700af79e9661c3c074935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_32d8bc3891730504db07bc034b3d4bf2de0174a0db700af79e9661c3c074935e->leave($__internal_32d8bc3891730504db07bc034b3d4bf2de0174a0db700af79e9661c3c074935e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15945181fb69f636e2cd3be9eb904d172be82f23580c0c46a6ff7210532c4c3f = $this->env->getExtension("native_profiler");
        $__internal_15945181fb69f636e2cd3be9eb904d172be82f23580c0c46a6ff7210532c4c3f->enter($__internal_15945181fb69f636e2cd3be9eb904d172be82f23580c0c46a6ff7210532c4c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_15945181fb69f636e2cd3be9eb904d172be82f23580c0c46a6ff7210532c4c3f->leave($__internal_15945181fb69f636e2cd3be9eb904d172be82f23580c0c46a6ff7210532c4c3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
