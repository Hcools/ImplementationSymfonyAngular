<?php

/* NotepadBundle:Category:new_category.html.twig */
class __TwigTemplate_f1d4b4de4a9a30af24cc04db009454c85e70a15d5659d5728f03c2803db1995d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle::layout.html.twig", "NotepadBundle:Category:new_category.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageheader' => array($this, 'block_pageheader'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NotepadBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07f0bc0b48f2e90a16d11eb13a1b6420a9a4495c61a2eaf0dbcf01fa8fa8975e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f0bc0b48f2e90a16d11eb13a1b6420a9a4495c61a2eaf0dbcf01fa8fa8975e->enter($__internal_07f0bc0b48f2e90a16d11eb13a1b6420a9a4495c61a2eaf0dbcf01fa8fa8975e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Category:new_category.html.twig"));

        $__internal_cd24c95eeb1a8bcfd33ae689d5eecd569234c8432b2df4d2f33de93f2b939aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd24c95eeb1a8bcfd33ae689d5eecd569234c8432b2df4d2f33de93f2b939aba->enter($__internal_cd24c95eeb1a8bcfd33ae689d5eecd569234c8432b2df4d2f33de93f2b939aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Category:new_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f0bc0b48f2e90a16d11eb13a1b6420a9a4495c61a2eaf0dbcf01fa8fa8975e->leave($__internal_07f0bc0b48f2e90a16d11eb13a1b6420a9a4495c61a2eaf0dbcf01fa8fa8975e_prof);

        
        $__internal_cd24c95eeb1a8bcfd33ae689d5eecd569234c8432b2df4d2f33de93f2b939aba->leave($__internal_cd24c95eeb1a8bcfd33ae689d5eecd569234c8432b2df4d2f33de93f2b939aba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ae526aa15d2b1f522af15e4867f3355277c2b0434a16d59fc05d7f4f8118d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae526aa15d2b1f522af15e4867f3355277c2b0434a16d59fc05d7f4f8118d3a->enter($__internal_8ae526aa15d2b1f522af15e4867f3355277c2b0434a16d59fc05d7f4f8118d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60740166d959eaa31c33a6e2dbd3b8332473c343d72187f8f6e88746d3343cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60740166d959eaa31c33a6e2dbd3b8332473c343d72187f8f6e88746d3343cd0->enter($__internal_60740166d959eaa31c33a6e2dbd3b8332473c343d72187f8f6e88746d3343cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Category";
        
        $__internal_60740166d959eaa31c33a6e2dbd3b8332473c343d72187f8f6e88746d3343cd0->leave($__internal_60740166d959eaa31c33a6e2dbd3b8332473c343d72187f8f6e88746d3343cd0_prof);

        
        $__internal_8ae526aa15d2b1f522af15e4867f3355277c2b0434a16d59fc05d7f4f8118d3a->leave($__internal_8ae526aa15d2b1f522af15e4867f3355277c2b0434a16d59fc05d7f4f8118d3a_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_ea9c5a1681d7b58c7a1b430465b6555f50fe14d9d76f980bf1912bacd654c4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9c5a1681d7b58c7a1b430465b6555f50fe14d9d76f980bf1912bacd654c4c7->enter($__internal_ea9c5a1681d7b58c7a1b430465b6555f50fe14d9d76f980bf1912bacd654c4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_cf226a31eb8c564234695712cc4aae26b688699255694f60a7228b059de9df2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf226a31eb8c564234695712cc4aae26b688699255694f60a7228b059de9df2b->enter($__internal_cf226a31eb8c564234695712cc4aae26b688699255694f60a7228b059de9df2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "New Category";
        
        $__internal_cf226a31eb8c564234695712cc4aae26b688699255694f60a7228b059de9df2b->leave($__internal_cf226a31eb8c564234695712cc4aae26b688699255694f60a7228b059de9df2b_prof);

        
        $__internal_ea9c5a1681d7b58c7a1b430465b6555f50fe14d9d76f980bf1912bacd654c4c7->leave($__internal_ea9c5a1681d7b58c7a1b430465b6555f50fe14d9d76f980bf1912bacd654c4c7_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_04fb37daee09e118e2abf822a3973f5bab3fa6aff025be8cee747090dc1a72a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04fb37daee09e118e2abf822a3973f5bab3fa6aff025be8cee747090dc1a72a4->enter($__internal_04fb37daee09e118e2abf822a3973f5bab3fa6aff025be8cee747090dc1a72a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_3e90f9d139fcb16ee7e6e593a66b43e4a7feaf91e941c8d0f47695fe63704290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e90f9d139fcb16ee7e6e593a66b43e4a7feaf91e941c8d0f47695fe63704290->enter($__internal_3e90f9d139fcb16ee7e6e593a66b43e4a7feaf91e941c8d0f47695fe63704290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadCategorylist");
        echo "\"
   class=\"btn btn-lg btn-default\">
  Retour
</a>
";
        
        $__internal_3e90f9d139fcb16ee7e6e593a66b43e4a7feaf91e941c8d0f47695fe63704290->leave($__internal_3e90f9d139fcb16ee7e6e593a66b43e4a7feaf91e941c8d0f47695fe63704290_prof);

        
        $__internal_04fb37daee09e118e2abf822a3973f5bab3fa6aff025be8cee747090dc1a72a4->leave($__internal_04fb37daee09e118e2abf822a3973f5bab3fa6aff025be8cee747090dc1a72a4_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_4321574b5427b1ce8a429a464fc1a8a322599b007104dd2dc851e37a290ffbb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4321574b5427b1ce8a429a464fc1a8a322599b007104dd2dc851e37a290ffbb2->enter($__internal_4321574b5427b1ce8a429a464fc1a8a322599b007104dd2dc851e37a290ffbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_67fdab3562d92798a1c7f908b100d40917a987f14ef3feeab90f293d217f0ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fdab3562d92798a1c7f908b100d40917a987f14ef3feeab90f293d217f0ad8->enter($__internal_67fdab3562d92798a1c7f908b100d40917a987f14ef3feeab90f293d217f0ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_67fdab3562d92798a1c7f908b100d40917a987f14ef3feeab90f293d217f0ad8->leave($__internal_67fdab3562d92798a1c7f908b100d40917a987f14ef3feeab90f293d217f0ad8_prof);

        
        $__internal_4321574b5427b1ce8a429a464fc1a8a322599b007104dd2dc851e37a290ffbb2->leave($__internal_4321574b5427b1ce8a429a464fc1a8a322599b007104dd2dc851e37a290ffbb2_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Category:new_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 18,  120 => 17,  116 => 16,  113 => 15,  104 => 14,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NotepadBundle::layout.html.twig' %}

{% block title %}New Category{% endblock %}

{% block pageheader %}New Category{% endblock %}

{% block actions %}
<a href=\"{{ path('notepadCategorylist') }}\"
   class=\"btn btn-lg btn-default\">
  Retour
</a>
{% endblock %}

{% block content %}

{{ form_start(form) }}
  {{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "NotepadBundle:Category:new_category.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/Category/new_category.html.twig");
    }
}
