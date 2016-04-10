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
        $__internal_61c95dec128d7c2e5979d343a1b8b4a1d73116391b1a921df4339d101b6569cb = $this->env->getExtension("native_profiler");
        $__internal_61c95dec128d7c2e5979d343a1b8b4a1d73116391b1a921df4339d101b6569cb->enter($__internal_61c95dec128d7c2e5979d343a1b8b4a1d73116391b1a921df4339d101b6569cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
            <div class=\"i-checks\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isEntreprise", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["en"]) {
            // line 14
            echo "                    &nbsp;
                    <label>";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["en"], 'widget');
            echo "
                        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["en"], 'label');
            echo "
                    </label>
                    &nbsp;
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['en'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
            <div class=\"form-group\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <div class=\"checkbox i-checks\"><label> <input type=\"checkbox\"><i></i> Agree the terms and policy </label></div>
            </div>
            <div>
                <input type=\"submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary block full-width m-b\" />
            </div>
            <p class=\"text-muted text-center\"><small>Already have an account?</small></p>
            <a class=\"btn btn-sm btn-white btn-block\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Login</a>
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <p class=\"m-t\"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>";
        
        $__internal_61c95dec128d7c2e5979d343a1b8b4a1d73116391b1a921df4339d101b6569cb->leave($__internal_61c95dec128d7c2e5979d343a1b8b4a1d73116391b1a921df4339d101b6569cb_prof);

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
        return array (  100 => 41,  96 => 40,  90 => 37,  81 => 31,  75 => 28,  69 => 25,  63 => 22,  59 => 20,  49 => 16,  45 => 15,  42 => 14,  38 => 13,  33 => 11,  22 => 2,);
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
/*             <div class="i-checks">*/
/*                 {% for en in form.isEntreprise %}*/
/*                     &nbsp;*/
/*                     <label>{{ form_widget(en) }}*/
/*                         {{ form_label(en) }}*/
/*                     </label>*/
/*                     &nbsp;*/
/*                 {% endfor %}*/
/*             </div>*/
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
