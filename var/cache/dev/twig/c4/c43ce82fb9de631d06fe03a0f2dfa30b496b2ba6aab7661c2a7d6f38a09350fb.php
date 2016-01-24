<?php

/* base.html.twig */
class __TwigTemplate_a8456d0792407dacfb4c4ac6e1d3e5b9237ac8582eaea0e90d0ff5795fd1ef6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6a42907926a5e99798a1768cd5d37e62bf5908aa729a35bbeceac137cecc2e6 = $this->env->getExtension("native_profiler");
        $__internal_d6a42907926a5e99798a1768cd5d37e62bf5908aa729a35bbeceac137cecc2e6->enter($__internal_d6a42907926a5e99798a1768cd5d37e62bf5908aa729a35bbeceac137cecc2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d6a42907926a5e99798a1768cd5d37e62bf5908aa729a35bbeceac137cecc2e6->leave($__internal_d6a42907926a5e99798a1768cd5d37e62bf5908aa729a35bbeceac137cecc2e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df0b9003f088598aec0f3fb79159d304706b87a3950aa775d55db0402523f3b9 = $this->env->getExtension("native_profiler");
        $__internal_df0b9003f088598aec0f3fb79159d304706b87a3950aa775d55db0402523f3b9->enter($__internal_df0b9003f088598aec0f3fb79159d304706b87a3950aa775d55db0402523f3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df0b9003f088598aec0f3fb79159d304706b87a3950aa775d55db0402523f3b9->leave($__internal_df0b9003f088598aec0f3fb79159d304706b87a3950aa775d55db0402523f3b9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7de84adb31e850a4e4ede2b27c69dd0ab4c254f5a9af920e909cc1f002f0a730 = $this->env->getExtension("native_profiler");
        $__internal_7de84adb31e850a4e4ede2b27c69dd0ab4c254f5a9af920e909cc1f002f0a730->enter($__internal_7de84adb31e850a4e4ede2b27c69dd0ab4c254f5a9af920e909cc1f002f0a730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7de84adb31e850a4e4ede2b27c69dd0ab4c254f5a9af920e909cc1f002f0a730->leave($__internal_7de84adb31e850a4e4ede2b27c69dd0ab4c254f5a9af920e909cc1f002f0a730_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc0ca6cdc29f6d671afae74ee96d7abb132f12f735181628922682d6f7bb534c = $this->env->getExtension("native_profiler");
        $__internal_bc0ca6cdc29f6d671afae74ee96d7abb132f12f735181628922682d6f7bb534c->enter($__internal_bc0ca6cdc29f6d671afae74ee96d7abb132f12f735181628922682d6f7bb534c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bc0ca6cdc29f6d671afae74ee96d7abb132f12f735181628922682d6f7bb534c->leave($__internal_bc0ca6cdc29f6d671afae74ee96d7abb132f12f735181628922682d6f7bb534c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0587f28a39bace35454b826ad464f4908c2e1ffc31d067ac839436110ef6a179 = $this->env->getExtension("native_profiler");
        $__internal_0587f28a39bace35454b826ad464f4908c2e1ffc31d067ac839436110ef6a179->enter($__internal_0587f28a39bace35454b826ad464f4908c2e1ffc31d067ac839436110ef6a179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0587f28a39bace35454b826ad464f4908c2e1ffc31d067ac839436110ef6a179->leave($__internal_0587f28a39bace35454b826ad464f4908c2e1ffc31d067ac839436110ef6a179_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
