<?php

/* NotepadBundle:Category:list_category.html.twig */
class __TwigTemplate_01257c5b14ec9a9bb19c33504ec7527a8734ce4acc7eeedb3c3efa6f66b074eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle::layout.html.twig", "NotepadBundle:Category:list_category.html.twig", 1);
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
        $__internal_f09d14df919da93e8b00b354513fe1ea3a1ee254453e2cb365620cebc24e10e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09d14df919da93e8b00b354513fe1ea3a1ee254453e2cb365620cebc24e10e3->enter($__internal_f09d14df919da93e8b00b354513fe1ea3a1ee254453e2cb365620cebc24e10e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Category:list_category.html.twig"));

        $__internal_6bfce9ab7c085fe2ece50c953da9206a7ec92e86ad5bee7586e7ef5c6ad995ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfce9ab7c085fe2ece50c953da9206a7ec92e86ad5bee7586e7ef5c6ad995ca->enter($__internal_6bfce9ab7c085fe2ece50c953da9206a7ec92e86ad5bee7586e7ef5c6ad995ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Category:list_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f09d14df919da93e8b00b354513fe1ea3a1ee254453e2cb365620cebc24e10e3->leave($__internal_f09d14df919da93e8b00b354513fe1ea3a1ee254453e2cb365620cebc24e10e3_prof);

        
        $__internal_6bfce9ab7c085fe2ece50c953da9206a7ec92e86ad5bee7586e7ef5c6ad995ca->leave($__internal_6bfce9ab7c085fe2ece50c953da9206a7ec92e86ad5bee7586e7ef5c6ad995ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb33d6e75e38f22cbdeb2f6fa6d2f95518dd5d3aabb1c1617f36d6adebfa0aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb33d6e75e38f22cbdeb2f6fa6d2f95518dd5d3aabb1c1617f36d6adebfa0aa2->enter($__internal_bb33d6e75e38f22cbdeb2f6fa6d2f95518dd5d3aabb1c1617f36d6adebfa0aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6422b2c3b303092157a0c8aa9e8a08cc2242d8c250b0cef2425e27d4ee06929a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6422b2c3b303092157a0c8aa9e8a08cc2242d8c250b0cef2425e27d4ee06929a->enter($__internal_6422b2c3b303092157a0c8aa9e8a08cc2242d8c250b0cef2425e27d4ee06929a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Category list";
        
        $__internal_6422b2c3b303092157a0c8aa9e8a08cc2242d8c250b0cef2425e27d4ee06929a->leave($__internal_6422b2c3b303092157a0c8aa9e8a08cc2242d8c250b0cef2425e27d4ee06929a_prof);

        
        $__internal_bb33d6e75e38f22cbdeb2f6fa6d2f95518dd5d3aabb1c1617f36d6adebfa0aa2->leave($__internal_bb33d6e75e38f22cbdeb2f6fa6d2f95518dd5d3aabb1c1617f36d6adebfa0aa2_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_0b0bb3fd2adf636bcb404cbbe476f99ecaca39a4a279e93257e8e5a26015f316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0bb3fd2adf636bcb404cbbe476f99ecaca39a4a279e93257e8e5a26015f316->enter($__internal_0b0bb3fd2adf636bcb404cbbe476f99ecaca39a4a279e93257e8e5a26015f316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_3e107e3c9d7815dbf3745983ded98bc7ee62dd610e41e5cd857842e6b271dfe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e107e3c9d7815dbf3745983ded98bc7ee62dd610e41e5cd857842e6b271dfe6->enter($__internal_3e107e3c9d7815dbf3745983ded98bc7ee62dd610e41e5cd857842e6b271dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Category list  <p>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "<div class=\"alert alert-danger\">

";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "yolo"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "<div class=\"alert alert-success\">

";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  </p>
";
        
        $__internal_3e107e3c9d7815dbf3745983ded98bc7ee62dd610e41e5cd857842e6b271dfe6->leave($__internal_3e107e3c9d7815dbf3745983ded98bc7ee62dd610e41e5cd857842e6b271dfe6_prof);

        
        $__internal_0b0bb3fd2adf636bcb404cbbe476f99ecaca39a4a279e93257e8e5a26015f316->leave($__internal_0b0bb3fd2adf636bcb404cbbe476f99ecaca39a4a279e93257e8e5a26015f316_prof);

    }

    // line 20
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a95aa7133907432710867dcc74cbc2880a66bd836c101907ac398d407ea4803c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95aa7133907432710867dcc74cbc2880a66bd836c101907ac398d407ea4803c->enter($__internal_a95aa7133907432710867dcc74cbc2880a66bd836c101907ac398d407ea4803c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_9f4d61afe393620c07d55fb91a69cb48159bca06699f1db3c44588a6366afdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4d61afe393620c07d55fb91a69cb48159bca06699f1db3c44588a6366afdea->enter($__internal_9f4d61afe393620c07d55fb91a69cb48159bca06699f1db3c44588a6366afdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 21
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadcategorynew");
        echo "\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add category
</a>
<a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotelist");
        echo "\"
   class=\"btn btn-lg btn-default\">
  Back
</a>
";
        
        $__internal_9f4d61afe393620c07d55fb91a69cb48159bca06699f1db3c44588a6366afdea->leave($__internal_9f4d61afe393620c07d55fb91a69cb48159bca06699f1db3c44588a6366afdea_prof);

        
        $__internal_a95aa7133907432710867dcc74cbc2880a66bd836c101907ac398d407ea4803c->leave($__internal_a95aa7133907432710867dcc74cbc2880a66bd836c101907ac398d407ea4803c_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_8cac14ae3ed019b722407dc0ca79ebeb17e6918673cc6ed7d3b85cfe36bf2bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cac14ae3ed019b722407dc0ca79ebeb17e6918673cc6ed7d3b85cfe36bf2bab->enter($__internal_8cac14ae3ed019b722407dc0ca79ebeb17e6918673cc6ed7d3b85cfe36bf2bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cfb18c6cd697bd0157a14dc57e29208460db6a74e6dfc61325ca56727de7f8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb18c6cd697bd0157a14dc57e29208460db6a74e6dfc61325ca56727de7f8e1->enter($__internal_cfb18c6cd697bd0157a14dc57e29208460db6a74e6dfc61325ca56727de7f8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "

<table class=\"table table-striped\">
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            echo "  <tr>
    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
    <td class=\"text-right\">
      <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadeditcategory", array("category" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-pencil\"></i>
        Modify
      </a>
      <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepaddeletecategory", array("category" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        Delete
      </a>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</table>

";
        
        $__internal_cfb18c6cd697bd0157a14dc57e29208460db6a74e6dfc61325ca56727de7f8e1->leave($__internal_cfb18c6cd697bd0157a14dc57e29208460db6a74e6dfc61325ca56727de7f8e1_prof);

        
        $__internal_8cac14ae3ed019b722407dc0ca79ebeb17e6918673cc6ed7d3b85cfe36bf2bab->leave($__internal_8cac14ae3ed019b722407dc0ca79ebeb17e6918673cc6ed7d3b85cfe36bf2bab_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Category:list_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 53,  183 => 45,  175 => 40,  170 => 38,  167 => 37,  163 => 36,  158 => 33,  149 => 32,  134 => 26,  125 => 21,  116 => 20,  104 => 16,  95 => 13,  88 => 11,  79 => 8,  72 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}Category list{% endblock %}

{% block pageheader %}Category list  <p>
{% for flashMessage in app.session.flashbag.get('error') %}<div class=\"alert alert-danger\">

{{ flashMessage }}
</div>
{% endfor %}
{% for flashMessage in app.session.flashbag.get('yolo') %}<div class=\"alert alert-success\">

{{ flashMessage }}
</div>
{% endfor %}

  </p>
{% endblock %}

{% block actions %}
<a href=\"{{ path('notepadcategorynew') }}\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add category
</a>
<a href=\"{{ path('notepadnotelist') }}\"
   class=\"btn btn-lg btn-default\">
  Back
</a>
{% endblock %}

{% block content %}


<table class=\"table table-striped\">
{% for category in categories %}
  <tr>
    <td>{{ category.name }}</td>
    <td class=\"text-right\">
      <a href=\"{{ path('notepadeditcategory', {'category': category.id}) }}\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-pencil\"></i>
        Modify
      </a>
      <a href=\"{{ path('notepaddeletecategory', {'category': category.id}) }}\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        Delete
      </a>
    </td>
  </tr>
{% endfor %}
</table>

{% endblock %}
", "NotepadBundle:Category:list_category.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/Category/list_category.html.twig");
    }
}
