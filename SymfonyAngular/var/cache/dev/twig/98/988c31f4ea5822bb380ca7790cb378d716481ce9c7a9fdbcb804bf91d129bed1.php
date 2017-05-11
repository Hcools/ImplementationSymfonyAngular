<?php

/* NotepadBundle:view:listnote.html.twig */
class __TwigTemplate_a55992e323131ad5e45955f7b7959c565420e1ed9ba4ea19540791dbf6b6f9b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:view:layout.html.twig", "NotepadBundle:view:listnote.html.twig", 1);
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
        $__internal_cbdce997a0bda90d5e317ac5ea7762e3ee08e966eaf03d2c65d86d1ee15f6cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdce997a0bda90d5e317ac5ea7762e3ee08e966eaf03d2c65d86d1ee15f6cd0->enter($__internal_cbdce997a0bda90d5e317ac5ea7762e3ee08e966eaf03d2c65d86d1ee15f6cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listnote.html.twig"));

        $__internal_7f33fb9722723798e2a280269e069cbcc3d0b4ebe8de80e1ae16f43cbb01694e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f33fb9722723798e2a280269e069cbcc3d0b4ebe8de80e1ae16f43cbb01694e->enter($__internal_7f33fb9722723798e2a280269e069cbcc3d0b4ebe8de80e1ae16f43cbb01694e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listnote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbdce997a0bda90d5e317ac5ea7762e3ee08e966eaf03d2c65d86d1ee15f6cd0->leave($__internal_cbdce997a0bda90d5e317ac5ea7762e3ee08e966eaf03d2c65d86d1ee15f6cd0_prof);

        
        $__internal_7f33fb9722723798e2a280269e069cbcc3d0b4ebe8de80e1ae16f43cbb01694e->leave($__internal_7f33fb9722723798e2a280269e069cbcc3d0b4ebe8de80e1ae16f43cbb01694e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a047b2f294cabcfdea63c02445b4d193cb5d5a50659e1e5a536d3cb5eeaedda5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a047b2f294cabcfdea63c02445b4d193cb5d5a50659e1e5a536d3cb5eeaedda5->enter($__internal_a047b2f294cabcfdea63c02445b4d193cb5d5a50659e1e5a536d3cb5eeaedda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_170667d6c80a8cd837b34aaec0931da1bb5ee94676e29b5f1f0001ec9b129b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170667d6c80a8cd837b34aaec0931da1bb5ee94676e29b5f1f0001ec9b129b6c->enter($__internal_170667d6c80a8cd837b34aaec0931da1bb5ee94676e29b5f1f0001ec9b129b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des notes";
        
        $__internal_170667d6c80a8cd837b34aaec0931da1bb5ee94676e29b5f1f0001ec9b129b6c->leave($__internal_170667d6c80a8cd837b34aaec0931da1bb5ee94676e29b5f1f0001ec9b129b6c_prof);

        
        $__internal_a047b2f294cabcfdea63c02445b4d193cb5d5a50659e1e5a536d3cb5eeaedda5->leave($__internal_a047b2f294cabcfdea63c02445b4d193cb5d5a50659e1e5a536d3cb5eeaedda5_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_92cd01e7a6d0d13299c219959e06693898c625fe2fdb9332e957e61eed26f422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cd01e7a6d0d13299c219959e06693898c625fe2fdb9332e957e61eed26f422->enter($__internal_92cd01e7a6d0d13299c219959e06693898c625fe2fdb9332e957e61eed26f422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_1b41682b579750f7a38847396b4f0e0c393996ae342c635b2992406db8ee4055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b41682b579750f7a38847396b4f0e0c393996ae342c635b2992406db8ee4055->enter($__internal_1b41682b579750f7a38847396b4f0e0c393996ae342c635b2992406db8ee4055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Liste des notes";
        
        $__internal_1b41682b579750f7a38847396b4f0e0c393996ae342c635b2992406db8ee4055->leave($__internal_1b41682b579750f7a38847396b4f0e0c393996ae342c635b2992406db8ee4055_prof);

        
        $__internal_92cd01e7a6d0d13299c219959e06693898c625fe2fdb9332e957e61eed26f422->leave($__internal_92cd01e7a6d0d13299c219959e06693898c625fe2fdb9332e957e61eed26f422_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_cf548b0722e59a823df5be9a80877138b118c25a6fcb4e4d1ff33bace8919f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf548b0722e59a823df5be9a80877138b118c25a6fcb4e4d1ff33bace8919f85->enter($__internal_cf548b0722e59a823df5be9a80877138b118c25a6fcb4e4d1ff33bace8919f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_ab193b3108e8625d894dc8a999c4954fd3dc0f2be09b63faf697520fdde386e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab193b3108e8625d894dc8a999c4954fd3dc0f2be09b63faf697520fdde386e4->enter($__internal_ab193b3108e8625d894dc8a999c4954fd3dc0f2be09b63faf697520fdde386e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

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
  Ajouter une note
</a>

<a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadCategorylist");
        echo "\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-menu-hamburger\"></i>
  Categories
</a>
";
        
        $__internal_ab193b3108e8625d894dc8a999c4954fd3dc0f2be09b63faf697520fdde386e4->leave($__internal_ab193b3108e8625d894dc8a999c4954fd3dc0f2be09b63faf697520fdde386e4_prof);

        
        $__internal_cf548b0722e59a823df5be9a80877138b118c25a6fcb4e4d1ff33bace8919f85->leave($__internal_cf548b0722e59a823df5be9a80877138b118c25a6fcb4e4d1ff33bace8919f85_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_80ff99eb2b558157629f4f49c9d98e9c38f3b727384494712b737239bee5bd97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ff99eb2b558157629f4f49c9d98e9c38f3b727384494712b737239bee5bd97->enter($__internal_80ff99eb2b558157629f4f49c9d98e9c38f3b727384494712b737239bee5bd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e30797fc441b87c01a396e6ac5695184c11a12623d4d0a441e69f5e97cfb95df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30797fc441b87c01a396e6ac5695184c11a12623d4d0a441e69f5e97cfb95df->enter($__internal_e30797fc441b87c01a396e6ac5695184c11a12623d4d0a441e69f5e97cfb95df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "
  ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 40
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <div class=\"btn-toolbar pull-right\">
          <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadeditnote", array("note" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-pencil\"></i>
            Modifier
          </a>
          <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepaddeletenote", array("note" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer
          </a>
        </div>
        <span class=\"h2>\">
          ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "title", array()), "html", null, true);
            echo " <small> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["note"], "date", array()), "d/m/Y"), "html", null, true);
            echo " </small>
        </span>
        ";
            // line 57
            if ($this->getAttribute($this->getAttribute($context["note"], "category", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 58
                echo "          <span class=\"label label-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "category", array()), "name", array()), "html", null, true);
                echo "</span>
        ";
            }
            // line 60
            echo "      </div>
      <div class=\"panel-body\">
        ";
            // line 62
            echo $this->getAttribute($context["note"], "content", array());
            echo "
      </div>
    </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "      <p>
          ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error2"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 68
                echo "            <div class=\"alert alert-danger\">
              ";
                // line 69
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "      </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
";
        
        $__internal_e30797fc441b87c01a396e6ac5695184c11a12623d4d0a441e69f5e97cfb95df->leave($__internal_e30797fc441b87c01a396e6ac5695184c11a12623d4d0a441e69f5e97cfb95df_prof);

        
        $__internal_80ff99eb2b558157629f4f49c9d98e9c38f3b727384494712b737239bee5bd97->leave($__internal_80ff99eb2b558157629f4f49c9d98e9c38f3b727384494712b737239bee5bd97_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:listnote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 74,  225 => 72,  216 => 69,  213 => 68,  209 => 67,  206 => 66,  197 => 62,  193 => 60,  187 => 58,  185 => 57,  178 => 55,  168 => 48,  160 => 43,  155 => 40,  150 => 39,  147 => 38,  138 => 37,  122 => 30,  113 => 24,  97 => 15,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}Liste des notes{% endblock %}

{% block pageheader %}Liste des notes{% endblock %}

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
  Ajouter une note
</a>

<a href=\"{{ path('notepadCategorylist') }}\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-menu-hamburger\"></i>
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
            Modifier
          </a>
          <a href=\"{{ path('notepaddeletenote', {'note': note.id}) }}\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer
          </a>
        </div>
        <span class=\"h2>\">
          {{ note.title }} <small> {{ note.date|date(\"d/m/Y\") }} </small>
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
", "NotepadBundle:view:listnote.html.twig", "C:\\wamp64\\www\\pjtsymfony\\SymfonyAngular\\src\\NotepadBundle/Resources/views/view/listnote.html.twig");
    }
}
