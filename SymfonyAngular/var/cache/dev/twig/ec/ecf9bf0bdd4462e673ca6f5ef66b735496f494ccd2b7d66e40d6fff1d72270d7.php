<?php

/* NotepadBundle:category:layout.html.twig */
class __TwigTemplate_1ec02a316ac3bb6fda685a0bc4e218bc7a5807fd82a6eede2c19c903ddbcebe3 extends Twig_Template
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
        $__internal_230d542d5d67e5ba591f0ba06df91481d4bb257d2839c091fcb3c99c5b52f892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230d542d5d67e5ba591f0ba06df91481d4bb257d2839c091fcb3c99c5b52f892->enter($__internal_230d542d5d67e5ba591f0ba06df91481d4bb257d2839c091fcb3c99c5b52f892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:category:layout.html.twig"));

        $__internal_b5559a1924aa1e78b177d874b9b0a5234d50465f2200a923fc16c44ccaa6a0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5559a1924aa1e78b177d874b9b0a5234d50465f2200a923fc16c44ccaa6a0fc->enter($__internal_b5559a1924aa1e78b177d874b9b0a5234d50465f2200a923fc16c44ccaa6a0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:category:layout.html.twig"));

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
        
        $__internal_230d542d5d67e5ba591f0ba06df91481d4bb257d2839c091fcb3c99c5b52f892->leave($__internal_230d542d5d67e5ba591f0ba06df91481d4bb257d2839c091fcb3c99c5b52f892_prof);

        
        $__internal_b5559a1924aa1e78b177d874b9b0a5234d50465f2200a923fc16c44ccaa6a0fc->leave($__internal_b5559a1924aa1e78b177d874b9b0a5234d50465f2200a923fc16c44ccaa6a0fc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2efa5ad0fa0e31bab2b406f9702bd526c5391004d61eaf1031e1f769b1016a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efa5ad0fa0e31bab2b406f9702bd526c5391004d61eaf1031e1f769b1016a14->enter($__internal_2efa5ad0fa0e31bab2b406f9702bd526c5391004d61eaf1031e1f769b1016a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b5ad6b4a10f1db42b945dda55053d6c3067e35563d1c6e812fd54b97117610e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5ad6b4a10f1db42b945dda55053d6c3067e35563d1c6e812fd54b97117610e->enter($__internal_6b5ad6b4a10f1db42b945dda55053d6c3067e35563d1c6e812fd54b97117610e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Notepad";
        
        $__internal_6b5ad6b4a10f1db42b945dda55053d6c3067e35563d1c6e812fd54b97117610e->leave($__internal_6b5ad6b4a10f1db42b945dda55053d6c3067e35563d1c6e812fd54b97117610e_prof);

        
        $__internal_2efa5ad0fa0e31bab2b406f9702bd526c5391004d61eaf1031e1f769b1016a14->leave($__internal_2efa5ad0fa0e31bab2b406f9702bd526c5391004d61eaf1031e1f769b1016a14_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a74ba484049df7c4d9750165ee5888dd9f8c6a3c2702dc17a6d7e09476ea8a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74ba484049df7c4d9750165ee5888dd9f8c6a3c2702dc17a6d7e09476ea8a14->enter($__internal_a74ba484049df7c4d9750165ee5888dd9f8c6a3c2702dc17a6d7e09476ea8a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6fd229eec11ff2555498ccd94e13861474f9a3200ca7e611effcc794973ce019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd229eec11ff2555498ccd94e13861474f9a3200ca7e611effcc794973ce019->enter($__internal_6fd229eec11ff2555498ccd94e13861474f9a3200ca7e611effcc794973ce019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "    ";
        
        $__internal_6fd229eec11ff2555498ccd94e13861474f9a3200ca7e611effcc794973ce019->leave($__internal_6fd229eec11ff2555498ccd94e13861474f9a3200ca7e611effcc794973ce019_prof);

        
        $__internal_a74ba484049df7c4d9750165ee5888dd9f8c6a3c2702dc17a6d7e09476ea8a14->leave($__internal_a74ba484049df7c4d9750165ee5888dd9f8c6a3c2702dc17a6d7e09476ea8a14_prof);

    }

    // line 25
    public function block_actions($context, array $blocks = array())
    {
        $__internal_703529c81fdd53a340f47e019ed8467a9f1af234277283d0aec690791898432f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703529c81fdd53a340f47e019ed8467a9f1af234277283d0aec690791898432f->enter($__internal_703529c81fdd53a340f47e019ed8467a9f1af234277283d0aec690791898432f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_35a8ed437f4d91bfcc5964c2d86460b4bbc2e2ce249bb667aae17c74f0ef8482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a8ed437f4d91bfcc5964c2d86460b4bbc2e2ce249bb667aae17c74f0ef8482->enter($__internal_35a8ed437f4d91bfcc5964c2d86460b4bbc2e2ce249bb667aae17c74f0ef8482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_35a8ed437f4d91bfcc5964c2d86460b4bbc2e2ce249bb667aae17c74f0ef8482->leave($__internal_35a8ed437f4d91bfcc5964c2d86460b4bbc2e2ce249bb667aae17c74f0ef8482_prof);

        
        $__internal_703529c81fdd53a340f47e019ed8467a9f1af234277283d0aec690791898432f->leave($__internal_703529c81fdd53a340f47e019ed8467a9f1af234277283d0aec690791898432f_prof);

    }

    // line 28
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_67611fe1f2fa18a1ea541190c495ac960c077559238934bf437caf4c06842b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67611fe1f2fa18a1ea541190c495ac960c077559238934bf437caf4c06842b38->enter($__internal_67611fe1f2fa18a1ea541190c495ac960c077559238934bf437caf4c06842b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_195618e89ae8958601653c718231660f1df50df016b703ad079858b952df2e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195618e89ae8958601653c718231660f1df50df016b703ad079858b952df2e02->enter($__internal_195618e89ae8958601653c718231660f1df50df016b703ad079858b952df2e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        
        $__internal_195618e89ae8958601653c718231660f1df50df016b703ad079858b952df2e02->leave($__internal_195618e89ae8958601653c718231660f1df50df016b703ad079858b952df2e02_prof);

        
        $__internal_67611fe1f2fa18a1ea541190c495ac960c077559238934bf437caf4c06842b38->leave($__internal_67611fe1f2fa18a1ea541190c495ac960c077559238934bf437caf4c06842b38_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3b3c32ce35bfc42b32d124635fd7615be94bc42453e14b644e756bedcc73a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b3c32ce35bfc42b32d124635fd7615be94bc42453e14b644e756bedcc73a6c->enter($__internal_d3b3c32ce35bfc42b32d124635fd7615be94bc42453e14b644e756bedcc73a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bedc8803a17505121a2677c9fb671fb822438db7ccc9ead50c31f73861558d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedc8803a17505121a2677c9fb671fb822438db7ccc9ead50c31f73861558d0f->enter($__internal_bedc8803a17505121a2677c9fb671fb822438db7ccc9ead50c31f73861558d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bedc8803a17505121a2677c9fb671fb822438db7ccc9ead50c31f73861558d0f->leave($__internal_bedc8803a17505121a2677c9fb671fb822438db7ccc9ead50c31f73861558d0f_prof);

        
        $__internal_d3b3c32ce35bfc42b32d124635fd7615be94bc42453e14b644e756bedcc73a6c->leave($__internal_d3b3c32ce35bfc42b32d124635fd7615be94bc42453e14b644e756bedcc73a6c_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:category:layout.html.twig";
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
", "NotepadBundle:category:layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/category/layout.html.twig");
    }
}
