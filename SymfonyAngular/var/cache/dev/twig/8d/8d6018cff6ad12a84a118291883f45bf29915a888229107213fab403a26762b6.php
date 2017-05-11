<?php

/* NotepadBundle:view:newcategory.html.twig */
class __TwigTemplate_56f92f90d7fa4b03c86e25839d46165a0cd298578ec8807cf08f782730c4adce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:view:layout.html.twig", "NotepadBundle:view:newcategory.html.twig", 1);
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
        $__internal_8851e41b65b6771b8da87c58b27648076fd02f95c9b0af98cd1c1c92bf2dbd7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8851e41b65b6771b8da87c58b27648076fd02f95c9b0af98cd1c1c92bf2dbd7c->enter($__internal_8851e41b65b6771b8da87c58b27648076fd02f95c9b0af98cd1c1c92bf2dbd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:newcategory.html.twig"));

        $__internal_396e44b77c4915e8ff9169cd5e9e8ab351f67dff7b426fd33808936f95333148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396e44b77c4915e8ff9169cd5e9e8ab351f67dff7b426fd33808936f95333148->enter($__internal_396e44b77c4915e8ff9169cd5e9e8ab351f67dff7b426fd33808936f95333148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:newcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8851e41b65b6771b8da87c58b27648076fd02f95c9b0af98cd1c1c92bf2dbd7c->leave($__internal_8851e41b65b6771b8da87c58b27648076fd02f95c9b0af98cd1c1c92bf2dbd7c_prof);

        
        $__internal_396e44b77c4915e8ff9169cd5e9e8ab351f67dff7b426fd33808936f95333148->leave($__internal_396e44b77c4915e8ff9169cd5e9e8ab351f67dff7b426fd33808936f95333148_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa0e8aa1f7a9a0dff74b95e1297659ba7bebcadb039a8c6c41a02c7d964382cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0e8aa1f7a9a0dff74b95e1297659ba7bebcadb039a8c6c41a02c7d964382cd->enter($__internal_aa0e8aa1f7a9a0dff74b95e1297659ba7bebcadb039a8c6c41a02c7d964382cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5babc179e69888b98c74c60522491aa449819e283f03ce7e1ad283a69e4a2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5babc179e69888b98c74c60522491aa449819e283f03ce7e1ad283a69e4a2b7->enter($__internal_c5babc179e69888b98c74c60522491aa449819e283f03ce7e1ad283a69e4a2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nouvelle catégorie";
        
        $__internal_c5babc179e69888b98c74c60522491aa449819e283f03ce7e1ad283a69e4a2b7->leave($__internal_c5babc179e69888b98c74c60522491aa449819e283f03ce7e1ad283a69e4a2b7_prof);

        
        $__internal_aa0e8aa1f7a9a0dff74b95e1297659ba7bebcadb039a8c6c41a02c7d964382cd->leave($__internal_aa0e8aa1f7a9a0dff74b95e1297659ba7bebcadb039a8c6c41a02c7d964382cd_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_53e29ab6369ffc06975843b08558521bfddbdd15b53b10e119468a35b88fbed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e29ab6369ffc06975843b08558521bfddbdd15b53b10e119468a35b88fbed4->enter($__internal_53e29ab6369ffc06975843b08558521bfddbdd15b53b10e119468a35b88fbed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_995a5730d96fe8ecc9effcd273c2ae2759be7f3570ac02b370a2a57799991df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995a5730d96fe8ecc9effcd273c2ae2759be7f3570ac02b370a2a57799991df9->enter($__internal_995a5730d96fe8ecc9effcd273c2ae2759be7f3570ac02b370a2a57799991df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Nouvelle catégorie";
        
        $__internal_995a5730d96fe8ecc9effcd273c2ae2759be7f3570ac02b370a2a57799991df9->leave($__internal_995a5730d96fe8ecc9effcd273c2ae2759be7f3570ac02b370a2a57799991df9_prof);

        
        $__internal_53e29ab6369ffc06975843b08558521bfddbdd15b53b10e119468a35b88fbed4->leave($__internal_53e29ab6369ffc06975843b08558521bfddbdd15b53b10e119468a35b88fbed4_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_677008c128c851c580caa852ffa7f40fbbdd36b107c931f2fd251f00ea23ee5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677008c128c851c580caa852ffa7f40fbbdd36b107c931f2fd251f00ea23ee5d->enter($__internal_677008c128c851c580caa852ffa7f40fbbdd36b107c931f2fd251f00ea23ee5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_019a643433d6e4e05223b916ccccd4a973c070e69f82b457bc4496bcc9e80347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019a643433d6e4e05223b916ccccd4a973c070e69f82b457bc4496bcc9e80347->enter($__internal_019a643433d6e4e05223b916ccccd4a973c070e69f82b457bc4496bcc9e80347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadCategorylist");
        echo "\"
   class=\"btn btn-lg btn-default\">
  Retour
</a>
";
        
        $__internal_019a643433d6e4e05223b916ccccd4a973c070e69f82b457bc4496bcc9e80347->leave($__internal_019a643433d6e4e05223b916ccccd4a973c070e69f82b457bc4496bcc9e80347_prof);

        
        $__internal_677008c128c851c580caa852ffa7f40fbbdd36b107c931f2fd251f00ea23ee5d->leave($__internal_677008c128c851c580caa852ffa7f40fbbdd36b107c931f2fd251f00ea23ee5d_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_65197928fb23c82bd062cc044564107e37afc5d4ee3c6537b326f578bac04f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65197928fb23c82bd062cc044564107e37afc5d4ee3c6537b326f578bac04f2b->enter($__internal_65197928fb23c82bd062cc044564107e37afc5d4ee3c6537b326f578bac04f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e170c125c1c0241f4fc32c9dde80012d9f76c8961fab41e0ef1c023a6949f435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e170c125c1c0241f4fc32c9dde80012d9f76c8961fab41e0ef1c023a6949f435->enter($__internal_e170c125c1c0241f4fc32c9dde80012d9f76c8961fab41e0ef1c023a6949f435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e170c125c1c0241f4fc32c9dde80012d9f76c8961fab41e0ef1c023a6949f435->leave($__internal_e170c125c1c0241f4fc32c9dde80012d9f76c8961fab41e0ef1c023a6949f435_prof);

        
        $__internal_65197928fb23c82bd062cc044564107e37afc5d4ee3c6537b326f578bac04f2b->leave($__internal_65197928fb23c82bd062cc044564107e37afc5d4ee3c6537b326f578bac04f2b_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:newcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 16,  113 => 15,  104 => 14,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}Nouvelle catégorie{% endblock %}

{% block pageheader %}Nouvelle catégorie{% endblock %}

{% block actions %}
<a href=\"{{ path('notepadCategorylist') }}\"
   class=\"btn btn-lg btn-default\">
  Retour
</a>
{% endblock %}

{% block content %}
  {{ form_start(form) }}
  {{ form_end(form) }}
{% endblock %}
", "NotepadBundle:view:newcategory.html.twig", "C:\\wamp64\\www\\pjtsymfony\\SymfonyAngular\\src\\NotepadBundle/Resources/views/view/newcategory.html.twig");
    }
}
