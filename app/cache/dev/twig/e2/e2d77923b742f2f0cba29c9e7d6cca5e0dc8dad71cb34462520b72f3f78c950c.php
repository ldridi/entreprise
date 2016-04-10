<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b26b40436a567ac2b85eea9e4a588b01271536de320ba045227a441f30183680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a5644e84f0d0fedb161b22be8e3bf8e6d62f5a8afe7e72ad0a2bec1ac4b4fc66 = $this->env->getExtension("native_profiler");
        $__internal_a5644e84f0d0fedb161b22be8e3bf8e6d62f5a8afe7e72ad0a2bec1ac4b4fc66->enter($__internal_a5644e84f0d0fedb161b22be8e3bf8e6d62f5a8afe7e72ad0a2bec1ac4b4fc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5644e84f0d0fedb161b22be8e3bf8e6d62f5a8afe7e72ad0a2bec1ac4b4fc66->leave($__internal_a5644e84f0d0fedb161b22be8e3bf8e6d62f5a8afe7e72ad0a2bec1ac4b4fc66_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5d5a8cf68afbd035462c1769dd01d2eae8305387a763b385d0e4bb8f545784f = $this->env->getExtension("native_profiler");
        $__internal_a5d5a8cf68afbd035462c1769dd01d2eae8305387a763b385d0e4bb8f545784f->enter($__internal_a5d5a8cf68afbd035462c1769dd01d2eae8305387a763b385d0e4bb8f545784f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
<div class=\"loginColumns animated fadeInDown\">
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h2 class=\"font-bold\">Welcome to IN+</h2>

            <p>
                Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            </p>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>

            <p>
                When an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <p>
                <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
            </p>

        </div>
        <div class=\"col-md-6\">

            <div class=\"ibox-content\">
                ";
        // line 33
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 34
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 38
        echo "            <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <input placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                    <input placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"i-checks\"/>
                    <label for=\"remember_me\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>
                <input class=\"btn btn-primary block full-width m-b\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\"><small>Forgot password?</small></a>
                <p class=\"text-muted text-center\"><small>Do not have an account?</small></p>
                <a class=\"btn btn-sm btn-white btn-block\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Create an account</a>
            </form>
                <p class=\"m-t\">
                    <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                </p>
            </div>
        </div>
    </div>
    <hr/>
    <div class=\"row\">
        <div class=\"col-md-6\">
            Copyright Example Company
        </div>
        <div class=\"col-md-6 text-right\">
            <small>© 2014-2015</small>
        </div>
    </div>
</div>
";
        
        $__internal_a5d5a8cf68afbd035462c1769dd01d2eae8305387a763b385d0e4bb8f545784f->leave($__internal_a5d5a8cf68afbd035462c1769dd01d2eae8305387a763b385d0e4bb8f545784f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 54,  110 => 52,  106 => 51,  101 => 49,  91 => 42,  85 => 39,  80 => 38,  74 => 35,  71 => 34,  69 => 33,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* <div class="loginColumns animated fadeInDown">*/
/*     <div class="row">*/
/* */
/*         <div class="col-md-6">*/
/*             <h2 class="font-bold">Welcome to IN+</h2>*/
/* */
/*             <p>*/
/*                 Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.*/
/*             </p>*/
/* */
/*             <p>*/
/*                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.*/
/*             </p>*/
/* */
/*             <p>*/
/*                 When an unknown printer took a galley of type and scrambled it to make a type specimen book.*/
/*             </p>*/
/* */
/*             <p>*/
/*                 <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>*/
/*             </p>*/
/* */
/*         </div>*/
/*         <div class="col-md-6">*/
/* */
/*             <div class="ibox-content">*/
/*                 {% if error %}*/
/*                 <div class="alert alert-danger">*/
/*                     {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*                 </div>*/
/*                 {% endif %}*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <div class="form-group">*/
/*                     <input placeholder="Username" type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control"/>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input placeholder="Password" type="password" id="password" name="_password" required="required" class="form-control" />*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" class="i-checks"/>*/
/*                     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                 </div>*/
/*                 <input class="btn btn-primary block full-width m-b" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*                 <a href="{{ path('fos_user_change_password') }}"><small>Forgot password?</small></a>*/
/*                 <p class="text-muted text-center"><small>Do not have an account?</small></p>*/
/*                 <a class="btn btn-sm btn-white btn-block" href="{{ path('fos_user_registration_register') }}">Create an account</a>*/
/*             </form>*/
/*                 <p class="m-t">*/
/*                     <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <hr/>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             Copyright Example Company*/
/*         </div>*/
/*         <div class="col-md-6 text-right">*/
/*             <small>© 2014-2015</small>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
