<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_608286ae63d98db9585213464ba2800c855641cfe6f5b0fba1b3e492fbfec3ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd4f958720956796c011375d6c8ea757eefd864123a8cbe2056ec6d79b305ed1 = $this->env->getExtension("native_profiler");
        $__internal_bd4f958720956796c011375d6c8ea757eefd864123a8cbe2056ec6d79b305ed1->enter($__internal_bd4f958720956796c011375d6c8ea757eefd864123a8cbe2056ec6d79b305ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd4f958720956796c011375d6c8ea757eefd864123a8cbe2056ec6d79b305ed1->leave($__internal_bd4f958720956796c011375d6c8ea757eefd864123a8cbe2056ec6d79b305ed1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_270270fd29fc8dbdb3ff50efc4d12f6022143d2b425a7ce493357197405cfe4a = $this->env->getExtension("native_profiler");
        $__internal_270270fd29fc8dbdb3ff50efc4d12f6022143d2b425a7ce493357197405cfe4a->enter($__internal_270270fd29fc8dbdb3ff50efc4d12f6022143d2b425a7ce493357197405cfe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_270270fd29fc8dbdb3ff50efc4d12f6022143d2b425a7ce493357197405cfe4a->leave($__internal_270270fd29fc8dbdb3ff50efc4d12f6022143d2b425a7ce493357197405cfe4a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
