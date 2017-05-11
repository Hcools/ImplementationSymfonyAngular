<?php

/* NotepadBundle:view:listcategory.html.twig */
class __TwigTemplate_00e07d859496465b7c8112e638ec2d44e551a73cc5a8d34a5323b0a5402d906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:view:layout.html.twig", "NotepadBundle:view:listcategory.html.twig", 1);
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
        $__internal_13f3c9def562dc1e86368022083b0670141d8db3e4fb12f8344f708c1eefddbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f3c9def562dc1e86368022083b0670141d8db3e4fb12f8344f708c1eefddbc->enter($__internal_13f3c9def562dc1e86368022083b0670141d8db3e4fb12f8344f708c1eefddbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listcategory.html.twig"));

        $__internal_2031acd2030ece846badf5f1759c22ae60f98a7a2204fa49200e164bfffcbadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2031acd2030ece846badf5f1759c22ae60f98a7a2204fa49200e164bfffcbadf->enter($__internal_2031acd2030ece846badf5f1759c22ae60f98a7a2204fa49200e164bfffcbadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f3c9def562dc1e86368022083b0670141d8db3e4fb12f8344f708c1eefddbc->leave($__internal_13f3c9def562dc1e86368022083b0670141d8db3e4fb12f8344f708c1eefddbc_prof);

        
        $__internal_2031acd2030ece846badf5f1759c22ae60f98a7a2204fa49200e164bfffcbadf->leave($__internal_2031acd2030ece846badf5f1759c22ae60f98a7a2204fa49200e164bfffcbadf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58ddbb5ee21e48f5c71ffcc07189c2f4e62c1f3fb1e9017c517f95584a8e6d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ddbb5ee21e48f5c71ffcc07189c2f4e62c1f3fb1e9017c517f95584a8e6d18->enter($__internal_58ddbb5ee21e48f5c71ffcc07189c2f4e62c1f3fb1e9017c517f95584a8e6d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c69406e3022f2524b8aaa93b9a3d2f99cbd9ea564805cf0e7cfe4a93e57272d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69406e3022f2524b8aaa93b9a3d2f99cbd9ea564805cf0e7cfe4a93e57272d2->enter($__internal_c69406e3022f2524b8aaa93b9a3d2f99cbd9ea564805cf0e7cfe4a93e57272d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Category list";
        
        $__internal_c69406e3022f2524b8aaa93b9a3d2f99cbd9ea564805cf0e7cfe4a93e57272d2->leave($__internal_c69406e3022f2524b8aaa93b9a3d2f99cbd9ea564805cf0e7cfe4a93e57272d2_prof);

        
        $__internal_58ddbb5ee21e48f5c71ffcc07189c2f4e62c1f3fb1e9017c517f95584a8e6d18->leave($__internal_58ddbb5ee21e48f5c71ffcc07189c2f4e62c1f3fb1e9017c517f95584a8e6d18_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_14c92da4b8c48cee058403fc6169c284c3b4e5920191a3ae5b0c10435357d0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c92da4b8c48cee058403fc6169c284c3b4e5920191a3ae5b0c10435357d0f2->enter($__internal_14c92da4b8c48cee058403fc6169c284c3b4e5920191a3ae5b0c10435357d0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_e612ac819f2624739f9b662444411702b10eb588bf51b8a01ec9bb5e0eadc4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e612ac819f2624739f9b662444411702b10eb588bf51b8a01ec9bb5e0eadc4e8->enter($__internal_e612ac819f2624739f9b662444411702b10eb588bf51b8a01ec9bb5e0eadc4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        // line 6
        echo "Liste des catégories
  <p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "      <div class=\"alert alert-danger\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "yolo"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "          <div class=\"alert alert-success\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </p>
";
        
        $__internal_e612ac819f2624739f9b662444411702b10eb588bf51b8a01ec9bb5e0eadc4e8->leave($__internal_e612ac819f2624739f9b662444411702b10eb588bf51b8a01ec9bb5e0eadc4e8_prof);

        
        $__internal_14c92da4b8c48cee058403fc6169c284c3b4e5920191a3ae5b0c10435357d0f2->leave($__internal_14c92da4b8c48cee058403fc6169c284c3b4e5920191a3ae5b0c10435357d0f2_prof);

    }

    // line 21
    public function block_actions($context, array $blocks = array())
    {
        $__internal_02acb4af1c2f0d5a49860c20d94496f66fa2344bf0e95c1e656664df1cf0ffd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02acb4af1c2f0d5a49860c20d94496f66fa2344bf0e95c1e656664df1cf0ffd6->enter($__internal_02acb4af1c2f0d5a49860c20d94496f66fa2344bf0e95c1e656664df1cf0ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_647c4a9184a6e3b8f15df7b9fbeab6ac15ce9722b2fb1d3f40a2571a64e9cce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647c4a9184a6e3b8f15df7b9fbeab6ac15ce9722b2fb1d3f40a2571a64e9cce6->enter($__internal_647c4a9184a6e3b8f15df7b9fbeab6ac15ce9722b2fb1d3f40a2571a64e9cce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 22
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadcategorynew");
        echo "\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Ajouter une catégorie
</a>
<a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotelist");
        echo "\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-arrow-left\"></i>
  Retour
</a>
";
        
        $__internal_647c4a9184a6e3b8f15df7b9fbeab6ac15ce9722b2fb1d3f40a2571a64e9cce6->leave($__internal_647c4a9184a6e3b8f15df7b9fbeab6ac15ce9722b2fb1d3f40a2571a64e9cce6_prof);

        
        $__internal_02acb4af1c2f0d5a49860c20d94496f66fa2344bf0e95c1e656664df1cf0ffd6->leave($__internal_02acb4af1c2f0d5a49860c20d94496f66fa2344bf0e95c1e656664df1cf0ffd6_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_3f9bde3f53471225fc8c097ccac1c0bc85d3ea44e48b6aa1dba50b11cb6f8428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9bde3f53471225fc8c097ccac1c0bc85d3ea44e48b6aa1dba50b11cb6f8428->enter($__internal_3f9bde3f53471225fc8c097ccac1c0bc85d3ea44e48b6aa1dba50b11cb6f8428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5c4ecf3efcb4a8f9fcbcf16f04cfe28d5e66d9bae1d2137801c5dea20cc5aaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4ecf3efcb4a8f9fcbcf16f04cfe28d5e66d9bae1d2137801c5dea20cc5aaa6->enter($__internal_5c4ecf3efcb4a8f9fcbcf16f04cfe28d5e66d9bae1d2137801c5dea20cc5aaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "
<table class=\"table table-striped\">
 <div class=\" col-md-offset-2\">
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 39
            echo "  <tr>
    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
    <td class=\"text-right\">
      <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadeditcategory", array("category" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-pencil\"></i>
        Modifier
      </a>
      <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepaddeletecategory", array("category" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        Supprimer
      </a>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>
</table>

";
        
        $__internal_5c4ecf3efcb4a8f9fcbcf16f04cfe28d5e66d9bae1d2137801c5dea20cc5aaa6->leave($__internal_5c4ecf3efcb4a8f9fcbcf16f04cfe28d5e66d9bae1d2137801c5dea20cc5aaa6_prof);

        
        $__internal_3f9bde3f53471225fc8c097ccac1c0bc85d3ea44e48b6aa1dba50b11cb6f8428->leave($__internal_3f9bde3f53471225fc8c097ccac1c0bc85d3ea44e48b6aa1dba50b11cb6f8428_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:listcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 55,  186 => 47,  178 => 42,  173 => 40,  170 => 39,  166 => 38,  161 => 35,  152 => 34,  136 => 27,  127 => 22,  118 => 21,  107 => 18,  98 => 15,  95 => 14,  90 => 13,  81 => 10,  78 => 9,  74 => 8,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}Category list{% endblock %}

{% block pageheader %}
Liste des catégories
  <p>
    {% for flashMessage in app.session.flashbag.get('error') %}
      <div class=\"alert alert-danger\">
        {{ flashMessage }}
      </div>
        {% endfor %}
        {% for flashMessage in app.session.flashbag.get('yolo') %}
          <div class=\"alert alert-success\">
            {{ flashMessage }}
          </div>
        {% endfor %}
  </p>
{% endblock %}

{% block actions %}
<a href=\"{{ path('notepadcategorynew') }}\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Ajouter une catégorie
</a>
<a href=\"{{ path('notepadnotelist') }}\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-arrow-left\"></i>
  Retour
</a>
{% endblock %}

{% block content %}

<table class=\"table table-striped\">
 <div class=\" col-md-offset-2\">
{% for category in categories %}
  <tr>
    <td>{{ category.name }}</td>
    <td class=\"text-right\">
      <a href=\"{{ path('notepadeditcategory', {'category': category.id}) }}\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-pencil\"></i>
        Modifier
      </a>
      <a href=\"{{ path('notepaddeletecategory', {'category': category.id}) }}\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        Supprimer
      </a>
    </td>
  </tr>
{% endfor %}
</div>
</table>

{% endblock %}
", "NotepadBundle:view:listcategory.html.twig", "C:\\wamp64\\www\\pjtsymfony\\SymfonyAngular\\src\\NotepadBundle/Resources/views/view/listcategory.html.twig");
    }
}
