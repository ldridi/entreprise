<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7f595355625a305eaa5916ea8ffc2622e8b583f810619ee70bd0c9ce8b17fe1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d1bbefbb11306deb3ac5e162c070b27c23e5a660913f3c095d6b940d7dea13f = $this->env->getExtension("native_profiler");
        $__internal_8d1bbefbb11306deb3ac5e162c070b27c23e5a660913f3c095d6b940d7dea13f->enter($__internal_8d1bbefbb11306deb3ac5e162c070b27c23e5a660913f3c095d6b940d7dea13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div class=\"middle-box text-center loginscreen   animated fadeInDown\">
    <div>
        <div>

            <h1 class=\"logo-name\">IN+</h1>

        </div>
        <h3>Register to IN+</h3>
        <p>Create account to see it in action.</p>
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <div class=\"checkbox i-checks\"><label> <input type=\"checkbox\"><i></i> Agree the terms and policy </label></div>
            </div>
            <div>
                <input type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary block full-width m-b\" />
            </div>
            <p class=\"text-muted text-center\"><small>Already have an account?</small></p>
            <a class=\"btn btn-sm btn-white btn-block\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Login</a>
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <p class=\"m-t\"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>";
        
        $__internal_8d1bbefbb11306deb3ac5e162c070b27c23e5a660913f3c095d6b940d7dea13f->leave($__internal_8d1bbefbb11306deb3ac5e162c070b27c23e5a660913f3c095d6b940d7dea13f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 33,  72 => 32,  66 => 29,  57 => 23,  51 => 20,  45 => 17,  39 => 14,  33 => 11,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="middle-box text-center loginscreen   animated fadeInDown">*/
/*     <div>*/
/*         <div>*/
/* */
/*             <h1 class="logo-name">IN+</h1>*/
/* */
/*         </div>*/
/*         <h3>Register to IN+</h3>*/
/*         <p>Create account to see it in action.</p>*/
/*         {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*             <div class="form-group">*/
/*                 {{ form_widget(form.username) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_widget(form.email) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_widget(form.plainPassword.first) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_widget(form.plainPassword.second) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>*/
/*             </div>*/
/*             <div>*/
/*                 <input type="submit" value="{{ 'registration.submit'|trans }}" class="btn btn-primary block full-width m-b" />*/
/*             </div>*/
/*             <p class="text-muted text-center"><small>Already have an account?</small></p>*/
/*             <a class="btn btn-sm btn-white btn-block" href="{{ path('fos_user_security_login') }}">Login</a>*/
/*         {{ form_end(form) }}*/
/*         <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>*/
/*     </div>*/
/* </div>*/
