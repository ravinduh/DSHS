<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_61868eb7e1db082931f6bbd8897a8939537bf32282c04429df844c58cdfc1486 extends Twig_Template
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
        $__internal_c1dc3ac1a1a29914eb2096361fdb4164a413ed53a3b848bb15849c5650a6d855 = $this->env->getExtension("native_profiler");
        $__internal_c1dc3ac1a1a29914eb2096361fdb4164a413ed53a3b848bb15849c5650a6d855->enter($__internal_c1dc3ac1a1a29914eb2096361fdb4164a413ed53a3b848bb15849c5650a6d855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1dc3ac1a1a29914eb2096361fdb4164a413ed53a3b848bb15849c5650a6d855->leave($__internal_c1dc3ac1a1a29914eb2096361fdb4164a413ed53a3b848bb15849c5650a6d855_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f263c5a40bcf0c920cc738ae6ec75f5f86379b841142d093cb359ffa718579e = $this->env->getExtension("native_profiler");
        $__internal_9f263c5a40bcf0c920cc738ae6ec75f5f86379b841142d093cb359ffa718579e->enter($__internal_9f263c5a40bcf0c920cc738ae6ec75f5f86379b841142d093cb359ffa718579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f263c5a40bcf0c920cc738ae6ec75f5f86379b841142d093cb359ffa718579e->leave($__internal_9f263c5a40bcf0c920cc738ae6ec75f5f86379b841142d093cb359ffa718579e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3668156453c392910e749aa556a7e99f996ec294e8487226250f2ccbb46e6452 = $this->env->getExtension("native_profiler");
        $__internal_3668156453c392910e749aa556a7e99f996ec294e8487226250f2ccbb46e6452->enter($__internal_3668156453c392910e749aa556a7e99f996ec294e8487226250f2ccbb46e6452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3668156453c392910e749aa556a7e99f996ec294e8487226250f2ccbb46e6452->leave($__internal_3668156453c392910e749aa556a7e99f996ec294e8487226250f2ccbb46e6452_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d13cb2540ca5336d96fac33eba98e18621b8b5ded08b60875021d89dfd84b78 = $this->env->getExtension("native_profiler");
        $__internal_9d13cb2540ca5336d96fac33eba98e18621b8b5ded08b60875021d89dfd84b78->enter($__internal_9d13cb2540ca5336d96fac33eba98e18621b8b5ded08b60875021d89dfd84b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9d13cb2540ca5336d96fac33eba98e18621b8b5ded08b60875021d89dfd84b78->leave($__internal_9d13cb2540ca5336d96fac33eba98e18621b8b5ded08b60875021d89dfd84b78_prof);

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
