<?php

/* NotepadBundle:Note:listnote.html.twig */
class __TwigTemplate_da69bf5d844fc43424bd75edcd679f50ecae183223b2db26d3130e3c541760b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle::layout.html.twig", "NotepadBundle:Note:listnote.html.twig", 1);
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
        $__internal_6801853c57bf0a68f572dd792d3c29d6988d97f188e53a4d3c9390340d331d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6801853c57bf0a68f572dd792d3c29d6988d97f188e53a4d3c9390340d331d1a->enter($__internal_6801853c57bf0a68f572dd792d3c29d6988d97f188e53a4d3c9390340d331d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Note:listnote.html.twig"));

        $__internal_6a6dbdccaebc69619512bbcbfb1da8b8c9b3d9ee8ebb91858f286b2848ea49af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6dbdccaebc69619512bbcbfb1da8b8c9b3d9ee8ebb91858f286b2848ea49af->enter($__internal_6a6dbdccaebc69619512bbcbfb1da8b8c9b3d9ee8ebb91858f286b2848ea49af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Note:listnote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6801853c57bf0a68f572dd792d3c29d6988d97f188e53a4d3c9390340d331d1a->leave($__internal_6801853c57bf0a68f572dd792d3c29d6988d97f188e53a4d3c9390340d331d1a_prof);

        
        $__internal_6a6dbdccaebc69619512bbcbfb1da8b8c9b3d9ee8ebb91858f286b2848ea49af->leave($__internal_6a6dbdccaebc69619512bbcbfb1da8b8c9b3d9ee8ebb91858f286b2848ea49af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d320239287584d86fdf65f1829b25be94bcf4b09e0214d20c739724a472e1fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d320239287584d86fdf65f1829b25be94bcf4b09e0214d20c739724a472e1fee->enter($__internal_d320239287584d86fdf65f1829b25be94bcf4b09e0214d20c739724a472e1fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53be982ca39013dbe5b1b26445508d8dbd9d5ba3fb036b9e540f5022260309ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53be982ca39013dbe5b1b26445508d8dbd9d5ba3fb036b9e540f5022260309ff->enter($__internal_53be982ca39013dbe5b1b26445508d8dbd9d5ba3fb036b9e540f5022260309ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Note list";
        
        $__internal_53be982ca39013dbe5b1b26445508d8dbd9d5ba3fb036b9e540f5022260309ff->leave($__internal_53be982ca39013dbe5b1b26445508d8dbd9d5ba3fb036b9e540f5022260309ff_prof);

        
        $__internal_d320239287584d86fdf65f1829b25be94bcf4b09e0214d20c739724a472e1fee->leave($__internal_d320239287584d86fdf65f1829b25be94bcf4b09e0214d20c739724a472e1fee_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_c7d9e720edd457ec41cd42207c440b8a5c8b81820fc9e8ec12f503687a447d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d9e720edd457ec41cd42207c440b8a5c8b81820fc9e8ec12f503687a447d50->enter($__internal_c7d9e720edd457ec41cd42207c440b8a5c8b81820fc9e8ec12f503687a447d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_ca095c4517e22ceac1d51f77f7544eadee2cf2a671057fb922d2218f697731a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca095c4517e22ceac1d51f77f7544eadee2cf2a671057fb922d2218f697731a7->enter($__internal_ca095c4517e22ceac1d51f77f7544eadee2cf2a671057fb922d2218f697731a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Note list";
        
        $__internal_ca095c4517e22ceac1d51f77f7544eadee2cf2a671057fb922d2218f697731a7->leave($__internal_ca095c4517e22ceac1d51f77f7544eadee2cf2a671057fb922d2218f697731a7_prof);

        
        $__internal_c7d9e720edd457ec41cd42207c440b8a5c8b81820fc9e8ec12f503687a447d50->leave($__internal_c7d9e720edd457ec41cd42207c440b8a5c8b81820fc9e8ec12f503687a447d50_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d031326189a76aae74f7f837fb07dcdfe9bd0a8ef91d24e064596bc1b9a9aa92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d031326189a76aae74f7f837fb07dcdfe9bd0a8ef91d24e064596bc1b9a9aa92->enter($__internal_d031326189a76aae74f7f837fb07dcdfe9bd0a8ef91d24e064596bc1b9a9aa92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_868a58506a13c945f83607d60c371b97d40643213a002a9e6488ab2c1fc7ad64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868a58506a13c945f83607d60c371b97d40643213a002a9e6488ab2c1fc7ad64->enter($__internal_868a58506a13c945f83607d60c371b97d40643213a002a9e6488ab2c1fc7ad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

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
   <i class=\"glyphicon glyphicon-menu-hamburger\"></i>
  Categories
</a>
";
        
        $__internal_868a58506a13c945f83607d60c371b97d40643213a002a9e6488ab2c1fc7ad64->leave($__internal_868a58506a13c945f83607d60c371b97d40643213a002a9e6488ab2c1fc7ad64_prof);

        
        $__internal_d031326189a76aae74f7f837fb07dcdfe9bd0a8ef91d24e064596bc1b9a9aa92->leave($__internal_d031326189a76aae74f7f837fb07dcdfe9bd0a8ef91d24e064596bc1b9a9aa92_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_48d070614650ae4842563a6b7f7436d8b431d9809e78599830ed92fec67fc895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d070614650ae4842563a6b7f7436d8b431d9809e78599830ed92fec67fc895->enter($__internal_48d070614650ae4842563a6b7f7436d8b431d9809e78599830ed92fec67fc895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7ad0c88710470b2395db56693b621f5b70d44104860d97b5d55a4c18080aa12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad0c88710470b2395db56693b621f5b70d44104860d97b5d55a4c18080aa12d->enter($__internal_7ad0c88710470b2395db56693b621f5b70d44104860d97b5d55a4c18080aa12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            Modify
          </a>
          <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepaddeletenote", array("note" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Delete
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
        
        $__internal_7ad0c88710470b2395db56693b621f5b70d44104860d97b5d55a4c18080aa12d->leave($__internal_7ad0c88710470b2395db56693b621f5b70d44104860d97b5d55a4c18080aa12d_prof);

        
        $__internal_48d070614650ae4842563a6b7f7436d8b431d9809e78599830ed92fec67fc895->leave($__internal_48d070614650ae4842563a6b7f7436d8b431d9809e78599830ed92fec67fc895_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Note:listnote.html.twig";
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
            Modify
          </a>
          <a href=\"{{ path('notepaddeletenote', {'note': note.id}) }}\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Delete
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
", "NotepadBundle:Note:listnote.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/Note/listnote.html.twig");
    }
}
