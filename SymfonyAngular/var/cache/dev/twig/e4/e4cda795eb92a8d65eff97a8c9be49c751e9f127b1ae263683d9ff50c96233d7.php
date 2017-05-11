<?php

/* NotepadBundle:Note:list_note.html.twig */
class __TwigTemplate_b9f5ce4a39300de7d1313b761a9763c4ef5c4db75977d036261f8b34bcc6947a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle::layout.html.twig", "NotepadBundle:Note:list_note.html.twig", 1);
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
        $__internal_5e6db5fab52c5816153141bab4ab7fb8de6d1c3fb814f46d66486fa54d3148cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6db5fab52c5816153141bab4ab7fb8de6d1c3fb814f46d66486fa54d3148cd->enter($__internal_5e6db5fab52c5816153141bab4ab7fb8de6d1c3fb814f46d66486fa54d3148cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Note:list_note.html.twig"));

        $__internal_d2a2c4dc1fbcb80df72905f1641c36ecf1aeed3e92a522402c39c6c176756ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a2c4dc1fbcb80df72905f1641c36ecf1aeed3e92a522402c39c6c176756ab8->enter($__internal_d2a2c4dc1fbcb80df72905f1641c36ecf1aeed3e92a522402c39c6c176756ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Note:list_note.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e6db5fab52c5816153141bab4ab7fb8de6d1c3fb814f46d66486fa54d3148cd->leave($__internal_5e6db5fab52c5816153141bab4ab7fb8de6d1c3fb814f46d66486fa54d3148cd_prof);

        
        $__internal_d2a2c4dc1fbcb80df72905f1641c36ecf1aeed3e92a522402c39c6c176756ab8->leave($__internal_d2a2c4dc1fbcb80df72905f1641c36ecf1aeed3e92a522402c39c6c176756ab8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59a35a9698888a8caceb7da10ec40bb11a624ba31441c618f4b1e9b204ed2f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a35a9698888a8caceb7da10ec40bb11a624ba31441c618f4b1e9b204ed2f48->enter($__internal_59a35a9698888a8caceb7da10ec40bb11a624ba31441c618f4b1e9b204ed2f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc16476b3f027fd75136f466e36c4e49452955e63725e4da7221573be824f99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc16476b3f027fd75136f466e36c4e49452955e63725e4da7221573be824f99a->enter($__internal_bc16476b3f027fd75136f466e36c4e49452955e63725e4da7221573be824f99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Note list";
        
        $__internal_bc16476b3f027fd75136f466e36c4e49452955e63725e4da7221573be824f99a->leave($__internal_bc16476b3f027fd75136f466e36c4e49452955e63725e4da7221573be824f99a_prof);

        
        $__internal_59a35a9698888a8caceb7da10ec40bb11a624ba31441c618f4b1e9b204ed2f48->leave($__internal_59a35a9698888a8caceb7da10ec40bb11a624ba31441c618f4b1e9b204ed2f48_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_fcf57cf0aba13ebb672bf7e887a38c76c4fddc5ffe53758b5563bd99d5c2241a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf57cf0aba13ebb672bf7e887a38c76c4fddc5ffe53758b5563bd99d5c2241a->enter($__internal_fcf57cf0aba13ebb672bf7e887a38c76c4fddc5ffe53758b5563bd99d5c2241a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_c93bb045bea12e77ff51886b708007bf0f1a05034354e368ce1e85536b3fe798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93bb045bea12e77ff51886b708007bf0f1a05034354e368ce1e85536b3fe798->enter($__internal_c93bb045bea12e77ff51886b708007bf0f1a05034354e368ce1e85536b3fe798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Note list";
        
        $__internal_c93bb045bea12e77ff51886b708007bf0f1a05034354e368ce1e85536b3fe798->leave($__internal_c93bb045bea12e77ff51886b708007bf0f1a05034354e368ce1e85536b3fe798_prof);

        
        $__internal_fcf57cf0aba13ebb672bf7e887a38c76c4fddc5ffe53758b5563bd99d5c2241a->leave($__internal_fcf57cf0aba13ebb672bf7e887a38c76c4fddc5ffe53758b5563bd99d5c2241a_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b80eacc3bc82f79e1b6bf6a1a5b77d0eeb406db9c70f994d6b2f57b6f92608d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80eacc3bc82f79e1b6bf6a1a5b77d0eeb406db9c70f994d6b2f57b6f92608d4->enter($__internal_b80eacc3bc82f79e1b6bf6a1a5b77d0eeb406db9c70f994d6b2f57b6f92608d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_53a44275d3d852dbee35b70eaa0e8db5a437e056e2b6bf74171de26143484d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a44275d3d852dbee35b70eaa0e8db5a437e056e2b6bf74171de26143484d05->enter($__internal_53a44275d3d852dbee35b70eaa0e8db5a437e056e2b6bf74171de26143484d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "<form class=\"pull-right\" role=\"search\" method=\"POST\">
  <div class=\"input-group input-group-lg\">
    <input type=\"text\"
           class=\"form-control mr-sm-2\"
           placeholder=\"Search tags\"
           name=\"srch\"
           id=\"srch\"
           ";
        // line 15
        if (($context["search"] ?? $this->getContext($context, "search"))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
            echo "\" ";
        }
        echo " />
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\">
        <i class=\"glyphicon glyphicon-search\"></i>
      </button>
    </div>
  </div>
</form>

<a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotenew");
        echo "\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add note
</a>

<a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadCategorylist");
        echo "\"
   class=\"btn btn-lg btn-default\">
  Categories
</a>
";
        
        $__internal_53a44275d3d852dbee35b70eaa0e8db5a437e056e2b6bf74171de26143484d05->leave($__internal_53a44275d3d852dbee35b70eaa0e8db5a437e056e2b6bf74171de26143484d05_prof);

        
        $__internal_b80eacc3bc82f79e1b6bf6a1a5b77d0eeb406db9c70f994d6b2f57b6f92608d4->leave($__internal_b80eacc3bc82f79e1b6bf6a1a5b77d0eeb406db9c70f994d6b2f57b6f92608d4_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_712c639645a46b010849b85d1f15c18b66c7a9f6a29df0c7d1de83c33204f2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712c639645a46b010849b85d1f15c18b66c7a9f6a29df0c7d1de83c33204f2f8->enter($__internal_712c639645a46b010849b85d1f15c18b66c7a9f6a29df0c7d1de83c33204f2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_aeb5861da5e7dd67688a552ddb600c745f36691a98723be0bcbe23457d7f44b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb5861da5e7dd67688a552ddb600c745f36691a98723be0bcbe23457d7f44b6->enter($__internal_aeb5861da5e7dd67688a552ddb600c745f36691a98723be0bcbe23457d7f44b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "
  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 39
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <div class=\"btn-toolbar pull-right\">
          <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadeditnote", array("note" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-pencil\"></i>
            Modify
          </a>
          <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepaddeletenote", array("note" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Delete
          </a>
        </div>
        <span class=\"h3\">
          ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "title", array()), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["note"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</small>
        </span>
        ";
            // line 56
            if ($this->getAttribute($this->getAttribute($context["note"], "category", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 57
                echo "          <span class=\"label label-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "category", array()), "name", array()), "html", null, true);
                echo "</span>
        ";
            }
            // line 59
            echo "      </div>
      <div class=\"panel-body\">
        ";
            // line 61
            echo $this->getAttribute($context["note"], "content", array());
            echo "
      </div>
    </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "      <p>
          ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error2"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 67
                echo "            <div class=\"alert alert-danger\">
              ";
                // line 68
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "      </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
";
        
        $__internal_aeb5861da5e7dd67688a552ddb600c745f36691a98723be0bcbe23457d7f44b6->leave($__internal_aeb5861da5e7dd67688a552ddb600c745f36691a98723be0bcbe23457d7f44b6_prof);

        
        $__internal_712c639645a46b010849b85d1f15c18b66c7a9f6a29df0c7d1de83c33204f2f8->leave($__internal_712c639645a46b010849b85d1f15c18b66c7a9f6a29df0c7d1de83c33204f2f8_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Note:list_note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 73,  224 => 71,  215 => 68,  212 => 67,  208 => 66,  205 => 65,  196 => 61,  192 => 59,  186 => 57,  184 => 56,  177 => 54,  167 => 47,  159 => 42,  154 => 39,  149 => 38,  146 => 37,  137 => 36,  122 => 30,  113 => 24,  97 => 15,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}Note list{% endblock %}

{% block pageheader %}Note list{% endblock %}

{% block actions %}
<form class=\"pull-right\" role=\"search\" method=\"POST\">
  <div class=\"input-group input-group-lg\">
    <input type=\"text\"
           class=\"form-control mr-sm-2\"
           placeholder=\"Search tags\"
           name=\"srch\"
           id=\"srch\"
           {% if search %} value=\"{{ search }}\" {% endif %} />
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\">
        <i class=\"glyphicon glyphicon-search\"></i>
      </button>
    </div>
  </div>
</form>

<a href=\"{{ path('notepadnotenew') }}\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add note
</a>

<a href=\"{{ path('notepadCategorylist') }}\"
   class=\"btn btn-lg btn-default\">
  Categories
</a>
{% endblock %}

{% block content %}

  {% for note in notes %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <div class=\"btn-toolbar pull-right\">
          <a href=\"{{ path('notepadeditnote', {'note': note.id}) }}\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-pencil\"></i>
            Modify
          </a>
          <a href=\"{{ path('notepaddeletenote', {'note': note.id}) }}\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Delete
          </a>
        </div>
        <span class=\"h3\">
          {{ note.title }} <small>{{ note.date|date(\"d/m/Y\") }}</small>
        </span>
        {% if note.category.name is defined %}
          <span class=\"label label-default\">{{ note.category.name }}</span>
        {% endif %}
      </div>
      <div class=\"panel-body\">
        {{ note.content|raw }}
      </div>
    </div>
  {% else %}
      <p>
          {% for flashMessage in app.session.flashbag.get('error2') %}
            <div class=\"alert alert-danger\">
              {{ flashMessage }}
            </div>
          {% endfor %}
      </p>
  {% endfor %}

{% endblock %}
", "NotepadBundle:Note:list_note.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/Note/list_note.html.twig");
    }
}
