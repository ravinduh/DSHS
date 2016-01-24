<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_321d89553c680944f4848e569e42b46f8cc2c1e39f2206688a9206c873a5a234 extends Twig_Template
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
        $__internal_0c3fb63b6f898521ef13082381b341b14284509b593a141cf6ba4ae856bb0663 = $this->env->getExtension("native_profiler");
        $__internal_0c3fb63b6f898521ef13082381b341b14284509b593a141cf6ba4ae856bb0663->enter($__internal_0c3fb63b6f898521ef13082381b341b14284509b593a141cf6ba4ae856bb0663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c3fb63b6f898521ef13082381b341b14284509b593a141cf6ba4ae856bb0663->leave($__internal_0c3fb63b6f898521ef13082381b341b14284509b593a141cf6ba4ae856bb0663_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3db5570945eabf7f41bde128d82bfe69b5f2019be6f0499335742a2b098efa5b = $this->env->getExtension("native_profiler");
        $__internal_3db5570945eabf7f41bde128d82bfe69b5f2019be6f0499335742a2b098efa5b->enter($__internal_3db5570945eabf7f41bde128d82bfe69b5f2019be6f0499335742a2b098efa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3db5570945eabf7f41bde128d82bfe69b5f2019be6f0499335742a2b098efa5b->leave($__internal_3db5570945eabf7f41bde128d82bfe69b5f2019be6f0499335742a2b098efa5b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f67005c655d456db13c385f2a6d5dab88313a41dea8849585ed07be546ea39e = $this->env->getExtension("native_profiler");
        $__internal_9f67005c655d456db13c385f2a6d5dab88313a41dea8849585ed07be546ea39e->enter($__internal_9f67005c655d456db13c385f2a6d5dab88313a41dea8849585ed07be546ea39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f67005c655d456db13c385f2a6d5dab88313a41dea8849585ed07be546ea39e->leave($__internal_9f67005c655d456db13c385f2a6d5dab88313a41dea8849585ed07be546ea39e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01d60c37ecb0979253ea4c4b659c74cf36c8c4b637067179d81951c3f3cd6d8f = $this->env->getExtension("native_profiler");
        $__internal_01d60c37ecb0979253ea4c4b659c74cf36c8c4b637067179d81951c3f3cd6d8f->enter($__internal_01d60c37ecb0979253ea4c4b659c74cf36c8c4b637067179d81951c3f3cd6d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01d60c37ecb0979253ea4c4b659c74cf36c8c4b637067179d81951c3f3cd6d8f->leave($__internal_01d60c37ecb0979253ea4c4b659c74cf36c8c4b637067179d81951c3f3cd6d8f_prof);

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
