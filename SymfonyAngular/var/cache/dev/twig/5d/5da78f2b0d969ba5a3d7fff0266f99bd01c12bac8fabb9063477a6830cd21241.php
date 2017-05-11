<?php

/* NotepadBundle::base.html.twig */
class __TwigTemplate_78e1378f13fe128d53f8a26d75f37ddc7c1f33289da68513a5a094590d05cd8d extends Twig_Template
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
        $__internal_3bfd8e19fc086307a8181ab9e88502750a4c11a0eebcf0571181b0738e996642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfd8e19fc086307a8181ab9e88502750a4c11a0eebcf0571181b0738e996642->enter($__internal_3bfd8e19fc086307a8181ab9e88502750a4c11a0eebcf0571181b0738e996642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle::base.html.twig"));

        $__internal_2b45482534764d2605ac30f59f92b3aabbb6c972697b2c5970286556aec56617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b45482534764d2605ac30f59f92b3aabbb6c972697b2c5970286556aec56617->enter($__internal_2b45482534764d2605ac30f59f92b3aabbb6c972697b2c5970286556aec56617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle::base.html.twig"));

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
        
        $__internal_3bfd8e19fc086307a8181ab9e88502750a4c11a0eebcf0571181b0738e996642->leave($__internal_3bfd8e19fc086307a8181ab9e88502750a4c11a0eebcf0571181b0738e996642_prof);

        
        $__internal_2b45482534764d2605ac30f59f92b3aabbb6c972697b2c5970286556aec56617->leave($__internal_2b45482534764d2605ac30f59f92b3aabbb6c972697b2c5970286556aec56617_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e9a8e5827080eeb57b7ecf0e816d39d0d42566ad181bf3e0b1ee0f378da3e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9a8e5827080eeb57b7ecf0e816d39d0d42566ad181bf3e0b1ee0f378da3e4a->enter($__internal_1e9a8e5827080eeb57b7ecf0e816d39d0d42566ad181bf3e0b1ee0f378da3e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcb25d7cd55934eac909f363e28a6d9bcd685db847fe321ad8c5c991ddbb76a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb25d7cd55934eac909f363e28a6d9bcd685db847fe321ad8c5c991ddbb76a7->enter($__internal_dcb25d7cd55934eac909f363e28a6d9bcd685db847fe321ad8c5c991ddbb76a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Notepad";
        
        $__internal_dcb25d7cd55934eac909f363e28a6d9bcd685db847fe321ad8c5c991ddbb76a7->leave($__internal_dcb25d7cd55934eac909f363e28a6d9bcd685db847fe321ad8c5c991ddbb76a7_prof);

        
        $__internal_1e9a8e5827080eeb57b7ecf0e816d39d0d42566ad181bf3e0b1ee0f378da3e4a->leave($__internal_1e9a8e5827080eeb57b7ecf0e816d39d0d42566ad181bf3e0b1ee0f378da3e4a_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_91487fb8bb67e66fc82a89aec7ef355250b2408c4a07891c6805ee2dccab96a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91487fb8bb67e66fc82a89aec7ef355250b2408c4a07891c6805ee2dccab96a9->enter($__internal_91487fb8bb67e66fc82a89aec7ef355250b2408c4a07891c6805ee2dccab96a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_d7455bda006c0d0578e9ecda8068fbdd8832e9ac613425c42c102d02bf2eec6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7455bda006c0d0578e9ecda8068fbdd8832e9ac613425c42c102d02bf2eec6e->enter($__internal_d7455bda006c0d0578e9ecda8068fbdd8832e9ac613425c42c102d02bf2eec6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "    ";
        
        $__internal_d7455bda006c0d0578e9ecda8068fbdd8832e9ac613425c42c102d02bf2eec6e->leave($__internal_d7455bda006c0d0578e9ecda8068fbdd8832e9ac613425c42c102d02bf2eec6e_prof);

        
        $__internal_91487fb8bb67e66fc82a89aec7ef355250b2408c4a07891c6805ee2dccab96a9->leave($__internal_91487fb8bb67e66fc82a89aec7ef355250b2408c4a07891c6805ee2dccab96a9_prof);

    }

    // line 25
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1d09646ec4645a31c94ea7c6466c95128472d3ca971dfe8201ef074ac8ffc38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d09646ec4645a31c94ea7c6466c95128472d3ca971dfe8201ef074ac8ffc38c->enter($__internal_1d09646ec4645a31c94ea7c6466c95128472d3ca971dfe8201ef074ac8ffc38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_999e7f41e635cc07926ae1d3c251b25cfeee5423007ad5bc97af5ec494791ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999e7f41e635cc07926ae1d3c251b25cfeee5423007ad5bc97af5ec494791ba4->enter($__internal_999e7f41e635cc07926ae1d3c251b25cfeee5423007ad5bc97af5ec494791ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_999e7f41e635cc07926ae1d3c251b25cfeee5423007ad5bc97af5ec494791ba4->leave($__internal_999e7f41e635cc07926ae1d3c251b25cfeee5423007ad5bc97af5ec494791ba4_prof);

        
        $__internal_1d09646ec4645a31c94ea7c6466c95128472d3ca971dfe8201ef074ac8ffc38c->leave($__internal_1d09646ec4645a31c94ea7c6466c95128472d3ca971dfe8201ef074ac8ffc38c_prof);

    }

    // line 28
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_7b1f15d747292a28e996eb1145588864404050fda1979f35f164aa802e3a29a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1f15d747292a28e996eb1145588864404050fda1979f35f164aa802e3a29a2->enter($__internal_7b1f15d747292a28e996eb1145588864404050fda1979f35f164aa802e3a29a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_719a4a1b0ac3415698f13e8e8920163e207e946687997623b69ee6d687a5d15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719a4a1b0ac3415698f13e8e8920163e207e946687997623b69ee6d687a5d15f->enter($__internal_719a4a1b0ac3415698f13e8e8920163e207e946687997623b69ee6d687a5d15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        
        $__internal_719a4a1b0ac3415698f13e8e8920163e207e946687997623b69ee6d687a5d15f->leave($__internal_719a4a1b0ac3415698f13e8e8920163e207e946687997623b69ee6d687a5d15f_prof);

        
        $__internal_7b1f15d747292a28e996eb1145588864404050fda1979f35f164aa802e3a29a2->leave($__internal_7b1f15d747292a28e996eb1145588864404050fda1979f35f164aa802e3a29a2_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_76127f66d25a5423a65aa4a671aea212961bdfe6822cd32b2b751e002ea657fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76127f66d25a5423a65aa4a671aea212961bdfe6822cd32b2b751e002ea657fb->enter($__internal_76127f66d25a5423a65aa4a671aea212961bdfe6822cd32b2b751e002ea657fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a1e1b8d25ffce76439cb11e9cb885446219a111527bfc3eb38e391ad4e1b82d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e1b8d25ffce76439cb11e9cb885446219a111527bfc3eb38e391ad4e1b82d0->enter($__internal_a1e1b8d25ffce76439cb11e9cb885446219a111527bfc3eb38e391ad4e1b82d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a1e1b8d25ffce76439cb11e9cb885446219a111527bfc3eb38e391ad4e1b82d0->leave($__internal_a1e1b8d25ffce76439cb11e9cb885446219a111527bfc3eb38e391ad4e1b82d0_prof);

        
        $__internal_76127f66d25a5423a65aa4a671aea212961bdfe6822cd32b2b751e002ea657fb->leave($__internal_76127f66d25a5423a65aa4a671aea212961bdfe6822cd32b2b751e002ea657fb_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 33,  171 => 28,  154 => 25,  144 => 19,  135 => 18,  117 => 6,  89 => 34,  87 => 33,  81 => 29,  79 => 28,  75 => 26,  73 => 25,  66 => 20,  64 => 18,  56 => 13,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  30 => 1,);
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
", "NotepadBundle::base.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/base.html.twig");
    }
}
