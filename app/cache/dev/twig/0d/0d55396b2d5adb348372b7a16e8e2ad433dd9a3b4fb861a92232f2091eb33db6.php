<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7c8e5a06b740fb6c0c9906c087a1b1bb944b27817fbbe7463345572312c263b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a701a17a605ca53afb600e56f3150268405c930a33737029e8a7550a4b6a304c = $this->env->getExtension("native_profiler");
        $__internal_a701a17a605ca53afb600e56f3150268405c930a33737029e8a7550a4b6a304c->enter($__internal_a701a17a605ca53afb600e56f3150268405c930a33737029e8a7550a4b6a304c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a701a17a605ca53afb600e56f3150268405c930a33737029e8a7550a4b6a304c->leave($__internal_a701a17a605ca53afb600e56f3150268405c930a33737029e8a7550a4b6a304c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b41ad6bb1db7be96aa3fae916265e24396c787346cb2243834474c815bf71fc = $this->env->getExtension("native_profiler");
        $__internal_4b41ad6bb1db7be96aa3fae916265e24396c787346cb2243834474c815bf71fc->enter($__internal_4b41ad6bb1db7be96aa3fae916265e24396c787346cb2243834474c815bf71fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b41ad6bb1db7be96aa3fae916265e24396c787346cb2243834474c815bf71fc->leave($__internal_4b41ad6bb1db7be96aa3fae916265e24396c787346cb2243834474c815bf71fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca1d54f29a72fb6b27f4dc8badfff31605f57d84c54a45183c41cf42c92b6ab6 = $this->env->getExtension("native_profiler");
        $__internal_ca1d54f29a72fb6b27f4dc8badfff31605f57d84c54a45183c41cf42c92b6ab6->enter($__internal_ca1d54f29a72fb6b27f4dc8badfff31605f57d84c54a45183c41cf42c92b6ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca1d54f29a72fb6b27f4dc8badfff31605f57d84c54a45183c41cf42c92b6ab6->leave($__internal_ca1d54f29a72fb6b27f4dc8badfff31605f57d84c54a45183c41cf42c92b6ab6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3996309fb5b4cc62c9cd952ce22fcad66efee4865ee6784e9967ae8b243827ae = $this->env->getExtension("native_profiler");
        $__internal_3996309fb5b4cc62c9cd952ce22fcad66efee4865ee6784e9967ae8b243827ae->enter($__internal_3996309fb5b4cc62c9cd952ce22fcad66efee4865ee6784e9967ae8b243827ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3996309fb5b4cc62c9cd952ce22fcad66efee4865ee6784e9967ae8b243827ae->leave($__internal_3996309fb5b4cc62c9cd952ce22fcad66efee4865ee6784e9967ae8b243827ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
