<?php

/* NotepadBundle::layout.html.twig */
class __TwigTemplate_8e2233c16254797c91f0ab17ae73bc733ba4290ee933c75e528845d87602eeac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'actions' => array($this, 'block_actions'),
            'pageheader' => array($this, 'block_pageheader'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d7a4a7fef257ab3581294d6ef025d1733edd111ac73ef37e99149e82a31d9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7a4a7fef257ab3581294d6ef025d1733edd111ac73ef37e99149e82a31d9dc->enter($__internal_5d7a4a7fef257ab3581294d6ef025d1733edd111ac73ef37e99149e82a31d9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle::layout.html.twig"));

        $__internal_7baab695d3620c4d2a888e4d0f1dd8767007d432c24bea7fb321f46d375aced6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baab695d3620c4d2a888e4d0f1dd8767007d432c24bea7fb321f46d375aced6->enter($__internal_7baab695d3620c4d2a888e4d0f1dd8767007d432c24bea7fb321f46d375aced6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "Notepad</title>
    <link rel=\"icon\" type=\"image/x -icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script
         src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\">
    </script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
    <nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">
      <a class=\"navbar-brand\">
    ";
        // line 18
        $this->displayBlock('nav', $context, $blocks);
        // line 20
        echo "  </a>
    <div class=\"container\">

      <div class=\"page-header\">
        <div class=\"btn-toolbar pull-right\">
          ";
        // line 25
        $this->displayBlock('actions', $context, $blocks);
        // line 26
        echo "        </div>
        <h1>
          ";
        // line 28
        $this->displayBlock('pageheader', $context, $blocks);
        // line 29
        echo "        </h1>
      </div>
      </nav>

      ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "
    </div>

    <script> function wrapText(elementID, openTag, closeTag) {
      var textArea = \$('#' + elementID);
      var len = textArea.val().length;
      var start = textArea[0].selectionStart;
      var end = textArea[0].selectionEnd;
      var selectedText = textArea.val().substring(start, end);
      var replacement = openTag + selectedText + closeTag;
      textArea.val(textArea.val().substring(0, start) + replacement +
      textArea.val().substring(end, len));
    }
    \$('#tag').click(function() {
      wrapText(\"note_content\", \"<tag>\", \"</tag>\");
    });
</script>
  </body>
</html>
";
        
        $__internal_5d7a4a7fef257ab3581294d6ef025d1733edd111ac73ef37e99149e82a31d9dc->leave($__internal_5d7a4a7fef257ab3581294d6ef025d1733edd111ac73ef37e99149e82a31d9dc_prof);

        
        $__internal_7baab695d3620c4d2a888e4d0f1dd8767007d432c24bea7fb321f46d375aced6->leave($__internal_7baab695d3620c4d2a888e4d0f1dd8767007d432c24bea7fb321f46d375aced6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_daecba91c8c2196046e97fa688c03177307e5f98f3b62826eba7371ea5daa4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daecba91c8c2196046e97fa688c03177307e5f98f3b62826eba7371ea5daa4e9->enter($__internal_daecba91c8c2196046e97fa688c03177307e5f98f3b62826eba7371ea5daa4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cbac509d0eb6a9890f56d44d7f0a32781cd22627d444bea1a372b88b93d0073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbac509d0eb6a9890f56d44d7f0a32781cd22627d444bea1a372b88b93d0073->enter($__internal_2cbac509d0eb6a9890f56d44d7f0a32781cd22627d444bea1a372b88b93d0073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Notepad";
        
        $__internal_2cbac509d0eb6a9890f56d44d7f0a32781cd22627d444bea1a372b88b93d0073->leave($__internal_2cbac509d0eb6a9890f56d44d7f0a32781cd22627d444bea1a372b88b93d0073_prof);

        
        $__internal_daecba91c8c2196046e97fa688c03177307e5f98f3b62826eba7371ea5daa4e9->leave($__internal_daecba91c8c2196046e97fa688c03177307e5f98f3b62826eba7371ea5daa4e9_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b7cd6834f057b67e6c792d2ea0c5f4d5da8b554ea77b728da3f1654be8af1b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7cd6834f057b67e6c792d2ea0c5f4d5da8b554ea77b728da3f1654be8af1b22->enter($__internal_b7cd6834f057b67e6c792d2ea0c5f4d5da8b554ea77b728da3f1654be8af1b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_3db0e2f6285d88271ff3a848ebf559cf5586613c07ab50e02ac5f9b1712acf4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db0e2f6285d88271ff3a848ebf559cf5586613c07ab50e02ac5f9b1712acf4d->enter($__internal_3db0e2f6285d88271ff3a848ebf559cf5586613c07ab50e02ac5f9b1712acf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "    ";
        
        $__internal_3db0e2f6285d88271ff3a848ebf559cf5586613c07ab50e02ac5f9b1712acf4d->leave($__internal_3db0e2f6285d88271ff3a848ebf559cf5586613c07ab50e02ac5f9b1712acf4d_prof);

        
        $__internal_b7cd6834f057b67e6c792d2ea0c5f4d5da8b554ea77b728da3f1654be8af1b22->leave($__internal_b7cd6834f057b67e6c792d2ea0c5f4d5da8b554ea77b728da3f1654be8af1b22_prof);

    }

    // line 25
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8748682f87e5d327bd55d5ef31438d2aa7af71208050c1445ddfac15ffb3f252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8748682f87e5d327bd55d5ef31438d2aa7af71208050c1445ddfac15ffb3f252->enter($__internal_8748682f87e5d327bd55d5ef31438d2aa7af71208050c1445ddfac15ffb3f252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6beca6504ba67f6f4fc49ae19d4af43ec9b768be001fdaebed67a1b6676945a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6beca6504ba67f6f4fc49ae19d4af43ec9b768be001fdaebed67a1b6676945a9->enter($__internal_6beca6504ba67f6f4fc49ae19d4af43ec9b768be001fdaebed67a1b6676945a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_6beca6504ba67f6f4fc49ae19d4af43ec9b768be001fdaebed67a1b6676945a9->leave($__internal_6beca6504ba67f6f4fc49ae19d4af43ec9b768be001fdaebed67a1b6676945a9_prof);

        
        $__internal_8748682f87e5d327bd55d5ef31438d2aa7af71208050c1445ddfac15ffb3f252->leave($__internal_8748682f87e5d327bd55d5ef31438d2aa7af71208050c1445ddfac15ffb3f252_prof);

    }

    // line 28
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_5c0cab88e026210fc33b149a10be52d340280ad046accc3086e91d364a62adf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0cab88e026210fc33b149a10be52d340280ad046accc3086e91d364a62adf3->enter($__internal_5c0cab88e026210fc33b149a10be52d340280ad046accc3086e91d364a62adf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_261247e356dd032e01ce8813161925bcdabd379ac1776fbb5e73bbac31f44e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261247e356dd032e01ce8813161925bcdabd379ac1776fbb5e73bbac31f44e5f->enter($__internal_261247e356dd032e01ce8813161925bcdabd379ac1776fbb5e73bbac31f44e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        
        $__internal_261247e356dd032e01ce8813161925bcdabd379ac1776fbb5e73bbac31f44e5f->leave($__internal_261247e356dd032e01ce8813161925bcdabd379ac1776fbb5e73bbac31f44e5f_prof);

        
        $__internal_5c0cab88e026210fc33b149a10be52d340280ad046accc3086e91d364a62adf3->leave($__internal_5c0cab88e026210fc33b149a10be52d340280ad046accc3086e91d364a62adf3_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_506a9a7fd78f1f13af479bd71b9593fce54b9c849b6a4d7f7bf8d249c3ad1fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506a9a7fd78f1f13af479bd71b9593fce54b9c849b6a4d7f7bf8d249c3ad1fae->enter($__internal_506a9a7fd78f1f13af479bd71b9593fce54b9c849b6a4d7f7bf8d249c3ad1fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_424ca063d798ec3e49e5c664bbda3975decdddaa4a24eacf2092d7c7be07cdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424ca063d798ec3e49e5c664bbda3975decdddaa4a24eacf2092d7c7be07cdd2->enter($__internal_424ca063d798ec3e49e5c664bbda3975decdddaa4a24eacf2092d7c7be07cdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_424ca063d798ec3e49e5c664bbda3975decdddaa4a24eacf2092d7c7be07cdd2->leave($__internal_424ca063d798ec3e49e5c664bbda3975decdddaa4a24eacf2092d7c7be07cdd2_prof);

        
        $__internal_506a9a7fd78f1f13af479bd71b9593fce54b9c849b6a4d7f7bf8d249c3ad1fae->leave($__internal_506a9a7fd78f1f13af479bd71b9593fce54b9c849b6a4d7f7bf8d249c3ad1fae_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 33,  172 => 28,  155 => 25,  145 => 19,  136 => 18,  118 => 6,  89 => 34,  87 => 33,  81 => 29,  79 => 28,  75 => 26,  73 => 25,  66 => 20,  64 => 18,  56 => 13,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Notepad{% endblock %}Notepad</title>
    <link rel=\"icon\" type=\"image/x -icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\">
    <script
         src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\">
    </script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
  </head>
  <body>
    <nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">
      <a class=\"navbar-brand\">
    {% block nav %}
    {% endblock %}
  </a>
    <div class=\"container\">

      <div class=\"page-header\">
        <div class=\"btn-toolbar pull-right\">
          {% block actions %}{% endblock %}
        </div>
        <h1>
          {% block pageheader %}{% endblock %}
        </h1>
      </div>
      </nav>

      {% block content %}{% endblock %}

    </div>

    <script> function wrapText(elementID, openTag, closeTag) {
      var textArea = \$('#' + elementID);
      var len = textArea.val().length;
      var start = textArea[0].selectionStart;
      var end = textArea[0].selectionEnd;
      var selectedText = textArea.val().substring(start, end);
      var replacement = openTag + selectedText + closeTag;
      textArea.val(textArea.val().substring(0, start) + replacement +
      textArea.val().substring(end, len));
    }
    \$('#tag').click(function() {
      wrapText(\"note_content\", \"<tag>\", \"</tag>\");
    });
</script>
  </body>
</html>
", "NotepadBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/layout.html.twig");
    }
}
