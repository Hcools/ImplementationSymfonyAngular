<?php

/* NotepadBundle:Note:new_note.html.twig */
class __TwigTemplate_72cbf534335e944ecf66b15bb1b4b120407f68ec336c1d92edc0151a7cca94ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle::base.html.twig", "NotepadBundle:Note:new_note.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageheader' => array($this, 'block_pageheader'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NotepadBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6b48a297bd98b23a56a9bfbe7f4cf7492381673edd1f640d44886da1eeb95e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b48a297bd98b23a56a9bfbe7f4cf7492381673edd1f640d44886da1eeb95e7->enter($__internal_e6b48a297bd98b23a56a9bfbe7f4cf7492381673edd1f640d44886da1eeb95e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Note:new_note.html.twig"));

        $__internal_2bf11331593a3b2bfa0fa25cef45ce645d328c58905c87492ff9af55b974c2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf11331593a3b2bfa0fa25cef45ce645d328c58905c87492ff9af55b974c2ed->enter($__internal_2bf11331593a3b2bfa0fa25cef45ce645d328c58905c87492ff9af55b974c2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Note:new_note.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6b48a297bd98b23a56a9bfbe7f4cf7492381673edd1f640d44886da1eeb95e7->leave($__internal_e6b48a297bd98b23a56a9bfbe7f4cf7492381673edd1f640d44886da1eeb95e7_prof);

        
        $__internal_2bf11331593a3b2bfa0fa25cef45ce645d328c58905c87492ff9af55b974c2ed->leave($__internal_2bf11331593a3b2bfa0fa25cef45ce645d328c58905c87492ff9af55b974c2ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98274eaf8110c814657fc9ff4020c6da50229172d17991e1e9edf38fd7d9e096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98274eaf8110c814657fc9ff4020c6da50229172d17991e1e9edf38fd7d9e096->enter($__internal_98274eaf8110c814657fc9ff4020c6da50229172d17991e1e9edf38fd7d9e096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70e1062711c6b0c44851ddd2ff1e3676f9060b05450c0a5a9ab91757479353a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e1062711c6b0c44851ddd2ff1e3676f9060b05450c0a5a9ab91757479353a1->enter($__internal_70e1062711c6b0c44851ddd2ff1e3676f9060b05450c0a5a9ab91757479353a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Note";
        
        $__internal_70e1062711c6b0c44851ddd2ff1e3676f9060b05450c0a5a9ab91757479353a1->leave($__internal_70e1062711c6b0c44851ddd2ff1e3676f9060b05450c0a5a9ab91757479353a1_prof);

        
        $__internal_98274eaf8110c814657fc9ff4020c6da50229172d17991e1e9edf38fd7d9e096->leave($__internal_98274eaf8110c814657fc9ff4020c6da50229172d17991e1e9edf38fd7d9e096_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_14c40e199654b712fb858ac43876fc4884018e133964740237babade414e2bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c40e199654b712fb858ac43876fc4884018e133964740237babade414e2bc3->enter($__internal_14c40e199654b712fb858ac43876fc4884018e133964740237babade414e2bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_1b5325cfa860a0e43a0abb1a4cd1a0d28cb90b565b7acc7df0fed4c3b0cbcab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5325cfa860a0e43a0abb1a4cd1a0d28cb90b565b7acc7df0fed4c3b0cbcab7->enter($__internal_1b5325cfa860a0e43a0abb1a4cd1a0d28cb90b565b7acc7df0fed4c3b0cbcab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "New Note";
        
        $__internal_1b5325cfa860a0e43a0abb1a4cd1a0d28cb90b565b7acc7df0fed4c3b0cbcab7->leave($__internal_1b5325cfa860a0e43a0abb1a4cd1a0d28cb90b565b7acc7df0fed4c3b0cbcab7_prof);

        
        $__internal_14c40e199654b712fb858ac43876fc4884018e133964740237babade414e2bc3->leave($__internal_14c40e199654b712fb858ac43876fc4884018e133964740237babade414e2bc3_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3d1851e8f95cdde1c8050ff7f328bcc5dd586e738c1a7960628ef16306aaa616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1851e8f95cdde1c8050ff7f328bcc5dd586e738c1a7960628ef16306aaa616->enter($__internal_3d1851e8f95cdde1c8050ff7f328bcc5dd586e738c1a7960628ef16306aaa616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_e6367b87901ecbc4bfb45aedc169182a5708b0206c65fa95da75f46979c6164d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6367b87901ecbc4bfb45aedc169182a5708b0206c65fa95da75f46979c6164d->enter($__internal_e6367b87901ecbc4bfb45aedc169182a5708b0206c65fa95da75f46979c6164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "  <button role=\"button\" id=\"tag\" class=\"btn btn-lg btn-default\">
    Add tag
  </button>
  <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotelist");
        echo "\"
     class=\"btn btn-lg btn-default\">
    Back
  </a>
";
        
        $__internal_e6367b87901ecbc4bfb45aedc169182a5708b0206c65fa95da75f46979c6164d->leave($__internal_e6367b87901ecbc4bfb45aedc169182a5708b0206c65fa95da75f46979c6164d_prof);

        
        $__internal_3d1851e8f95cdde1c8050ff7f328bcc5dd586e738c1a7960628ef16306aaa616->leave($__internal_3d1851e8f95cdde1c8050ff7f328bcc5dd586e738c1a7960628ef16306aaa616_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0e4669012f658dd5b7eac5acb821ecdc8e9dfff21e34b52eecd239fc34786be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e4669012f658dd5b7eac5acb821ecdc8e9dfff21e34b52eecd239fc34786be->enter($__internal_a0e4669012f658dd5b7eac5acb821ecdc8e9dfff21e34b52eecd239fc34786be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fd0c38aa52b2319c77f81527b003950d46742a5f9a0db58625925c2d1e4de54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0c38aa52b2319c77f81527b003950d46742a5f9a0db58625925c2d1e4de54c->enter($__internal_fd0c38aa52b2319c77f81527b003950d46742a5f9a0db58625925c2d1e4de54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_fd0c38aa52b2319c77f81527b003950d46742a5f9a0db58625925c2d1e4de54c->leave($__internal_fd0c38aa52b2319c77f81527b003950d46742a5f9a0db58625925c2d1e4de54c_prof);

        
        $__internal_a0e4669012f658dd5b7eac5acb821ecdc8e9dfff21e34b52eecd239fc34786be->leave($__internal_a0e4669012f658dd5b7eac5acb821ecdc8e9dfff21e34b52eecd239fc34786be_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Note:new_note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 21,  124 => 20,  120 => 19,  117 => 18,  108 => 17,  93 => 11,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NotepadBundle::base.html.twig' %}

{% block title %}New Note{% endblock %}

{% block pageheader %}New Note{% endblock %}

{% block actions %}
  <button role=\"button\" id=\"tag\" class=\"btn btn-lg btn-default\">
    Add tag
  </button>
  <a href=\"{{ path('notepadnotelist') }}\"
     class=\"btn btn-lg btn-default\">
    Back
  </a>
{% endblock %}

{% block content %}

{{ form_start(form) }}
  {{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "NotepadBundle:Note:new_note.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/Note/new_note.html.twig");
    }
}
