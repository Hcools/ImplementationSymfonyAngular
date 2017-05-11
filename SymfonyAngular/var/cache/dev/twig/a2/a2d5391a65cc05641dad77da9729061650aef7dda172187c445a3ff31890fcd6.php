<?php

/* NotepadBundle:view:layout.html.twig */
class __TwigTemplate_65f064eca5d6138cafa1837de79cc382f44ff6b44c88d416e6139643e8b36673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13e99e4118dc8b9a6bb246ea2c25f64d2fe10f5312b7c1a7c152b13da8968f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e99e4118dc8b9a6bb246ea2c25f64d2fe10f5312b7c1a7c152b13da8968f4c->enter($__internal_13e99e4118dc8b9a6bb246ea2c25f64d2fe10f5312b7c1a7c152b13da8968f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:layout.html.twig"));

        $__internal_e8456b39f347bbc1d97bedf3e9d55b0154c1df5e3de415237ed39470f0ab1f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8456b39f347bbc1d97bedf3e9d55b0154c1df5e3de415237ed39470f0ab1f47->enter($__internal_e8456b39f347bbc1d97bedf3e9d55b0154c1df5e3de415237ed39470f0ab1f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:layout.html.twig"));

        // line 1
        echo "<html>
<head>
  <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta charset=\"utf-8\">
  <base href=\"http://localhost:8070/notepad/\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"icon\" type=\"image/x-icon\"
                   href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/favicon.ico"), "html", null, true);
        echo "\">
  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/styles.bundle.css"), "html", null, true);
        echo "\"
        rel=\"stylesheet\"/>
</head>
<body>
  <div class=\"container\">
    <my-app>Loading...</my-app>
  </div>
  <script type=\"text/javascript\"
          src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/inline.bundle.js"), "html", null, true);
        echo "\">
  </script>
  <script type=\"text/javascript\"
          src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/polyfills.bundle.js"), "html", null, true);
        echo "\">
  </script>
  <script type=\"text/javascript\"
          src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/vendor.bundle.js"), "html", null, true);
        echo "\">
  </script>
  <script type=\"text/javascript\"
          src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/main.bundle.js"), "html", null, true);
        echo "\">
  </script>

  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script
       src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\">
  </script>
</body>
</html>
";
        
        $__internal_13e99e4118dc8b9a6bb246ea2c25f64d2fe10f5312b7c1a7c152b13da8968f4c->leave($__internal_13e99e4118dc8b9a6bb246ea2c25f64d2fe10f5312b7c1a7c152b13da8968f4c_prof);

        
        $__internal_e8456b39f347bbc1d97bedf3e9d55b0154c1df5e3de415237ed39470f0ab1f47->leave($__internal_e8456b39f347bbc1d97bedf3e9d55b0154c1df5e3de415237ed39470f0ab1f47_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e8cf97b20704111a528c019c578832e989b45a520f48c76af66c2a9938d9497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8cf97b20704111a528c019c578832e989b45a520f48c76af66c2a9938d9497->enter($__internal_7e8cf97b20704111a528c019c578832e989b45a520f48c76af66c2a9938d9497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_403b7d5ccc6c678ccbfc9bdd8401793f296cd3fbd45bfd9414a12dff725107aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403b7d5ccc6c678ccbfc9bdd8401793f296cd3fbd45bfd9414a12dff725107aa->enter($__internal_403b7d5ccc6c678ccbfc9bdd8401793f296cd3fbd45bfd9414a12dff725107aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Notepad";
        
        $__internal_403b7d5ccc6c678ccbfc9bdd8401793f296cd3fbd45bfd9414a12dff725107aa->leave($__internal_403b7d5ccc6c678ccbfc9bdd8401793f296cd3fbd45bfd9414a12dff725107aa_prof);

        
        $__internal_7e8cf97b20704111a528c019c578832e989b45a520f48c76af66c2a9938d9497->leave($__internal_7e8cf97b20704111a528c019c578832e989b45a520f48c76af66c2a9938d9497_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 3,  81 => 30,  75 => 27,  69 => 24,  63 => 21,  57 => 18,  46 => 10,  42 => 9,  38 => 8,  30 => 3,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
  <title>{% block title %}Notepad{% endblock %}</title>
  <meta charset=\"utf-8\">
  <base href=\"http://localhost:8070/notepad/\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"icon\" type=\"image/x-icon\"
                   href=\"{{ asset('bundles/notepad/js/favicon.ico') }}\">
  <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('bundles/notepad/js/styles.bundle.css')}}\"
        rel=\"stylesheet\"/>
</head>
<body>
  <div class=\"container\">
    <my-app>Loading...</my-app>
  </div>
  <script type=\"text/javascript\"
          src=\"{{ asset('bundles/notepad/js/inline.bundle.js')}}\">
  </script>
  <script type=\"text/javascript\"
          src=\"{{ asset('bundles/notepad/js/polyfills.bundle.js')}}\">
  </script>
  <script type=\"text/javascript\"
          src=\"{{ asset('bundles/notepad/js/vendor.bundle.js')}}\">
  </script>
  <script type=\"text/javascript\"
          src=\"{{asset('bundles/notepad/js/main.bundle.js')}}\">
  </script>

  <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
  <script
       src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\">
  </script>
</body>
</html>
", "NotepadBundle:view:layout.html.twig", "C:\\wamp64\\www\\SymfonyAngular\\SymfonyAngular\\src\\NotepadBundle/Resources/views/view/layout.html.twig");
    }
}
