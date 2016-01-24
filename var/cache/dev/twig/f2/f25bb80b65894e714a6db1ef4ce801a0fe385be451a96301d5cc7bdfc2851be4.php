<?php

/* student/view.html.twig */
class __TwigTemplate_0a85fc8a07b572bfe687ff4e10d131bbaf9ed301d9e1609a17d2a14fb5751c40 extends Twig_Template
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
        $__internal_a7253cae4699c06d97009616c5023d0395becb7d98d9431c134912d10debef1a = $this->env->getExtension("native_profiler");
        $__internal_a7253cae4699c06d97009616c5023d0395becb7d98d9431c134912d10debef1a->enter($__internal_a7253cae4699c06d97009616c5023d0395becb7d98d9431c134912d10debef1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/view.html.twig"));

        // line 1
        echo "<%block body%>
 <ul>

 <li>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "
  <li>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "
   <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "details", array()), "html", null, true);
        echo "
 </ul>

<%end block%>";
        
        $__internal_a7253cae4699c06d97009616c5023d0395becb7d98d9431c134912d10debef1a->leave($__internal_a7253cae4699c06d97009616c5023d0395becb7d98d9431c134912d10debef1a_prof);

    }

    public function getTemplateName()
    {
        return "student/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <%block body%>*/
/*  <ul>*/
/* */
/*  <li>{{student.name}}*/
/*   <li>{{student.id}}*/
/*    <li>{{student.details}}*/
/*  </ul>*/
/* */
/* <%end block%>*/
