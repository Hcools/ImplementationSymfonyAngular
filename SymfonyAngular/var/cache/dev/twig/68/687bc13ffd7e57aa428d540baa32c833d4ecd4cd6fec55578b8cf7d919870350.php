<?php

/* NotepadBundle:Category:listcategory.html.twig */
class __TwigTemplate_154de8354ffa3ea42d1ecc95602dbbfae7855ec6638981f9105807947896c315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:category:layout.html.twig", "NotepadBundle:Category:listcategory.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageheader' => array($this, 'block_pageheader'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NotepadBundle:category:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec26aec5b38a0d49273a84a6104bb82e20a9a304fe8efbb3ec005cbfedab2125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec26aec5b38a0d49273a84a6104bb82e20a9a304fe8efbb3ec005cbfedab2125->enter($__internal_ec26aec5b38a0d49273a84a6104bb82e20a9a304fe8efbb3ec005cbfedab2125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Category:listcategory.html.twig"));

        $__internal_4cfcc66a4a552058adb6af9e7f159e9bd381ba8044b380fc351169233621c4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfcc66a4a552058adb6af9e7f159e9bd381ba8044b380fc351169233621c4f5->enter($__internal_4cfcc66a4a552058adb6af9e7f159e9bd381ba8044b380fc351169233621c4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Category:listcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec26aec5b38a0d49273a84a6104bb82e20a9a304fe8efbb3ec005cbfedab2125->leave($__internal_ec26aec5b38a0d49273a84a6104bb82e20a9a304fe8efbb3ec005cbfedab2125_prof);

        
        $__internal_4cfcc66a4a552058adb6af9e7f159e9bd381ba8044b380fc351169233621c4f5->leave($__internal_4cfcc66a4a552058adb6af9e7f159e9bd381ba8044b380fc351169233621c4f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_86c9a2d7ec8d538d4f8f34b63811df30e09ce66881133787a8014353356149b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c9a2d7ec8d538d4f8f34b63811df30e09ce66881133787a8014353356149b4->enter($__internal_86c9a2d7ec8d538d4f8f34b63811df30e09ce66881133787a8014353356149b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e3eeb58d49edb06d177bd02c9c84f8b533f45c8fd12f59e4017388c4f18de6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3eeb58d49edb06d177bd02c9c84f8b533f45c8fd12f59e4017388c4f18de6d->enter($__internal_9e3eeb58d49edb06d177bd02c9c84f8b533f45c8fd12f59e4017388c4f18de6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Category list";
        
        $__internal_9e3eeb58d49edb06d177bd02c9c84f8b533f45c8fd12f59e4017388c4f18de6d->leave($__internal_9e3eeb58d49edb06d177bd02c9c84f8b533f45c8fd12f59e4017388c4f18de6d_prof);

        
        $__internal_86c9a2d7ec8d538d4f8f34b63811df30e09ce66881133787a8014353356149b4->leave($__internal_86c9a2d7ec8d538d4f8f34b63811df30e09ce66881133787a8014353356149b4_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_e03ff5a491b066f6505b926c4461aad89e707b9777e804c6eb57ccdcd6614ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03ff5a491b066f6505b926c4461aad89e707b9777e804c6eb57ccdcd6614ea5->enter($__internal_e03ff5a491b066f6505b926c4461aad89e707b9777e804c6eb57ccdcd6614ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_56f0bab80ea286b659833feefacb2ec7032469f98bbc14a1493377b2c76e0a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f0bab80ea286b659833feefacb2ec7032469f98bbc14a1493377b2c76e0a0c->enter($__internal_56f0bab80ea286b659833feefacb2ec7032469f98bbc14a1493377b2c76e0a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        // line 6
        echo "Category list
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
        
        $__internal_56f0bab80ea286b659833feefacb2ec7032469f98bbc14a1493377b2c76e0a0c->leave($__internal_56f0bab80ea286b659833feefacb2ec7032469f98bbc14a1493377b2c76e0a0c_prof);

        
        $__internal_e03ff5a491b066f6505b926c4461aad89e707b9777e804c6eb57ccdcd6614ea5->leave($__internal_e03ff5a491b066f6505b926c4461aad89e707b9777e804c6eb57ccdcd6614ea5_prof);

    }

    // line 21
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3f8ca4e439122703e900a3cc551a41d982a1438e303d153e3c4c0780c7c2f96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8ca4e439122703e900a3cc551a41d982a1438e303d153e3c4c0780c7c2f96c->enter($__internal_3f8ca4e439122703e900a3cc551a41d982a1438e303d153e3c4c0780c7c2f96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_591a6b6f1abd1c548fc7b65b3dadd2aa05b8c7eae3d6b0880d58e7822b85858a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591a6b6f1abd1c548fc7b65b3dadd2aa05b8c7eae3d6b0880d58e7822b85858a->enter($__internal_591a6b6f1abd1c548fc7b65b3dadd2aa05b8c7eae3d6b0880d58e7822b85858a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 22
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadcategorynew");
        echo "\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add category
</a>
<a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotelist");
        echo "\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-arrow-left\"></i>
  Back
</a>
";
        
        $__internal_591a6b6f1abd1c548fc7b65b3dadd2aa05b8c7eae3d6b0880d58e7822b85858a->leave($__internal_591a6b6f1abd1c548fc7b65b3dadd2aa05b8c7eae3d6b0880d58e7822b85858a_prof);

        
        $__internal_3f8ca4e439122703e900a3cc551a41d982a1438e303d153e3c4c0780c7c2f96c->leave($__internal_3f8ca4e439122703e900a3cc551a41d982a1438e303d153e3c4c0780c7c2f96c_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_80d404f65c01d3077e828906f1b5bbb9b2c4fe7ac75821de9a4560026350b30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d404f65c01d3077e828906f1b5bbb9b2c4fe7ac75821de9a4560026350b30d->enter($__internal_80d404f65c01d3077e828906f1b5bbb9b2c4fe7ac75821de9a4560026350b30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f256f062bc19d40a78893e2c9ad72dfd170616504268e38b24cd9891fd11dee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f256f062bc19d40a78893e2c9ad72dfd170616504268e38b24cd9891fd11dee0->enter($__internal_f256f062bc19d40a78893e2c9ad72dfd170616504268e38b24cd9891fd11dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        Modify
      </a>
      <a href=\"";
            // line 47
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
        // line 55
        echo "</div>
</table>

";
        
        $__internal_f256f062bc19d40a78893e2c9ad72dfd170616504268e38b24cd9891fd11dee0->leave($__internal_f256f062bc19d40a78893e2c9ad72dfd170616504268e38b24cd9891fd11dee0_prof);

        
        $__internal_80d404f65c01d3077e828906f1b5bbb9b2c4fe7ac75821de9a4560026350b30d->leave($__internal_80d404f65c01d3077e828906f1b5bbb9b2c4fe7ac75821de9a4560026350b30d_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Category:listcategory.html.twig";
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
        return new Twig_Source("{% extends 'NotepadBundle:category:layout.html.twig' %}

{% block title %}Category list{% endblock %}

{% block pageheader %}
Category list
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
  Add category
</a>
<a href=\"{{ path('notepadnotelist') }}\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-arrow-left\"></i>
  Back
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
</div>
</table>

{% endblock %}
", "NotepadBundle:Category:listcategory.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/Category/listcategory.html.twig");
    }
}
