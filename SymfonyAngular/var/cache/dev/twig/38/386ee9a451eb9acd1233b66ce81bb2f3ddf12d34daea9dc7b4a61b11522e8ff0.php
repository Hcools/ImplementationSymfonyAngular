<?php

/* NotepadBundle:view:newnote.html.twig */
class __TwigTemplate_0faeff9525879f95d6f27c49564e6bcaa38c8f67ceadcf175507148b4e86ab18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:view:layout.html.twig", "NotepadBundle:view:newnote.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageheader' => array($this, 'block_pageheader'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NotepadBundle:view:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7a0f4769d2f6808ad34b142741ab662c812f3551326182cf7c4b89ea2fa7146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a0f4769d2f6808ad34b142741ab662c812f3551326182cf7c4b89ea2fa7146->enter($__internal_f7a0f4769d2f6808ad34b142741ab662c812f3551326182cf7c4b89ea2fa7146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:newnote.html.twig"));

        $__internal_8baefac61a04302fefc07518b7e68c38de0831cf5edf3a1ffecb9f236d0ad7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8baefac61a04302fefc07518b7e68c38de0831cf5edf3a1ffecb9f236d0ad7ad->enter($__internal_8baefac61a04302fefc07518b7e68c38de0831cf5edf3a1ffecb9f236d0ad7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:newnote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a0f4769d2f6808ad34b142741ab662c812f3551326182cf7c4b89ea2fa7146->leave($__internal_f7a0f4769d2f6808ad34b142741ab662c812f3551326182cf7c4b89ea2fa7146_prof);

        
        $__internal_8baefac61a04302fefc07518b7e68c38de0831cf5edf3a1ffecb9f236d0ad7ad->leave($__internal_8baefac61a04302fefc07518b7e68c38de0831cf5edf3a1ffecb9f236d0ad7ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57705ffe1a7484e7582c99082d8042b5d7748c3056c6aa9724d7fd9cc6be2275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57705ffe1a7484e7582c99082d8042b5d7748c3056c6aa9724d7fd9cc6be2275->enter($__internal_57705ffe1a7484e7582c99082d8042b5d7748c3056c6aa9724d7fd9cc6be2275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d55014cb39847493c1fe2019ff49866afa88791bab4166f04b5e10bf5f26c0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55014cb39847493c1fe2019ff49866afa88791bab4166f04b5e10bf5f26c0ef->enter($__internal_d55014cb39847493c1fe2019ff49866afa88791bab4166f04b5e10bf5f26c0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nouvelle note";
        
        $__internal_d55014cb39847493c1fe2019ff49866afa88791bab4166f04b5e10bf5f26c0ef->leave($__internal_d55014cb39847493c1fe2019ff49866afa88791bab4166f04b5e10bf5f26c0ef_prof);

        
        $__internal_57705ffe1a7484e7582c99082d8042b5d7748c3056c6aa9724d7fd9cc6be2275->leave($__internal_57705ffe1a7484e7582c99082d8042b5d7748c3056c6aa9724d7fd9cc6be2275_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_b42d3105fbd8736857e0d8a1d9145c33ffd88894ed173fe87fe07dae64228f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42d3105fbd8736857e0d8a1d9145c33ffd88894ed173fe87fe07dae64228f56->enter($__internal_b42d3105fbd8736857e0d8a1d9145c33ffd88894ed173fe87fe07dae64228f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_d1b9968c9ab4a2002c2985ea7259e73e2a437d8ed039339ab81f7686932b2a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b9968c9ab4a2002c2985ea7259e73e2a437d8ed039339ab81f7686932b2a07->enter($__internal_d1b9968c9ab4a2002c2985ea7259e73e2a437d8ed039339ab81f7686932b2a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Nouvelle note";
        
        $__internal_d1b9968c9ab4a2002c2985ea7259e73e2a437d8ed039339ab81f7686932b2a07->leave($__internal_d1b9968c9ab4a2002c2985ea7259e73e2a437d8ed039339ab81f7686932b2a07_prof);

        
        $__internal_b42d3105fbd8736857e0d8a1d9145c33ffd88894ed173fe87fe07dae64228f56->leave($__internal_b42d3105fbd8736857e0d8a1d9145c33ffd88894ed173fe87fe07dae64228f56_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2565283203e45509218fc7e4487323abf253df7b5c651994aa8113af203f3ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2565283203e45509218fc7e4487323abf253df7b5c651994aa8113af203f3ac4->enter($__internal_2565283203e45509218fc7e4487323abf253df7b5c651994aa8113af203f3ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_98036d7afbcfb3a57dd8ce290ca58090cb5d3c0cbb8930c920fcab29ae1347d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98036d7afbcfb3a57dd8ce290ca58090cb5d3c0cbb8930c920fcab29ae1347d1->enter($__internal_98036d7afbcfb3a57dd8ce290ca58090cb5d3c0cbb8930c920fcab29ae1347d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "  <button role=\"button\" id=\"tag\" class=\"btn btn-lg btn-default\">
    <i class=\"glyphicon glyphicon-plus\"></i>
    Ajouter un tag
  </button>
  <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotelist");
        echo "\"
     class=\"btn btn-lg btn-default\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
    Retour
  </a>
";
        
        $__internal_98036d7afbcfb3a57dd8ce290ca58090cb5d3c0cbb8930c920fcab29ae1347d1->leave($__internal_98036d7afbcfb3a57dd8ce290ca58090cb5d3c0cbb8930c920fcab29ae1347d1_prof);

        
        $__internal_2565283203e45509218fc7e4487323abf253df7b5c651994aa8113af203f3ac4->leave($__internal_2565283203e45509218fc7e4487323abf253df7b5c651994aa8113af203f3ac4_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_05b1afe7e28eb19477f3e724004928d8b96985d15364385ceb9d8f7dce8ea5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b1afe7e28eb19477f3e724004928d8b96985d15364385ceb9d8f7dce8ea5ef->enter($__internal_05b1afe7e28eb19477f3e724004928d8b96985d15364385ceb9d8f7dce8ea5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5cff4ee0265d6f11cbd5d8021906eaad893c79f5dc26e163864db11a078e0dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cff4ee0265d6f11cbd5d8021906eaad893c79f5dc26e163864db11a078e0dea->enter($__internal_5cff4ee0265d6f11cbd5d8021906eaad893c79f5dc26e163864db11a078e0dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_5cff4ee0265d6f11cbd5d8021906eaad893c79f5dc26e163864db11a078e0dea->leave($__internal_5cff4ee0265d6f11cbd5d8021906eaad893c79f5dc26e163864db11a078e0dea_prof);

        
        $__internal_05b1afe7e28eb19477f3e724004928d8b96985d15364385ceb9d8f7dce8ea5ef->leave($__internal_05b1afe7e28eb19477f3e724004928d8b96985d15364385ceb9d8f7dce8ea5ef_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:newnote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  126 => 22,  122 => 21,  119 => 20,  110 => 19,  94 => 12,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NotepadBundle:view:layout.html.twig' %}

{% block title %}Nouvelle note{% endblock %}

{% block pageheader %}Nouvelle note{% endblock %}

{% block actions %}
  <button role=\"button\" id=\"tag\" class=\"btn btn-lg btn-default\">
    <i class=\"glyphicon glyphicon-plus\"></i>
    Ajouter un tag
  </button>
  <a href=\"{{ path('notepadnotelist') }}\"
     class=\"btn btn-lg btn-default\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
    Retour
  </a>
{% endblock %}

{% block content %}

{{ form_start(form) }}
  {{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "NotepadBundle:view:newnote.html.twig", "C:\\wamp64\\www\\pjtsymfony\\SymfonyAngular\\src\\NotepadBundle/Resources/views/view/newnote.html.twig");
    }
}
