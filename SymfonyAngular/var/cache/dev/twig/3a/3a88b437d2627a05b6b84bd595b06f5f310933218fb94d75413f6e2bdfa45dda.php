<?php

/* base.html.twig */
class __TwigTemplate_76ecb4b6eab5e517c7c918daf5462c70d04063a7d433480cdc8b6304e972c54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6a59942e3d8f6c260cc31562485fabd7511e3720083645e688e92701117b558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a59942e3d8f6c260cc31562485fabd7511e3720083645e688e92701117b558->enter($__internal_c6a59942e3d8f6c260cc31562485fabd7511e3720083645e688e92701117b558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_41a09d2d09a5894d007627197854d2fc81d45cf5650ccc33e9aea9b91cf698f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a09d2d09a5894d007627197854d2fc81d45cf5650ccc33e9aea9b91cf698f8->enter($__internal_41a09d2d09a5894d007627197854d2fc81d45cf5650ccc33e9aea9b91cf698f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c6a59942e3d8f6c260cc31562485fabd7511e3720083645e688e92701117b558->leave($__internal_c6a59942e3d8f6c260cc31562485fabd7511e3720083645e688e92701117b558_prof);

        
        $__internal_41a09d2d09a5894d007627197854d2fc81d45cf5650ccc33e9aea9b91cf698f8->leave($__internal_41a09d2d09a5894d007627197854d2fc81d45cf5650ccc33e9aea9b91cf698f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbeacd1ef6b80d50b0bb49dad8867b8cbc3e362ae1a5064af7e26507a51004ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbeacd1ef6b80d50b0bb49dad8867b8cbc3e362ae1a5064af7e26507a51004ae->enter($__internal_cbeacd1ef6b80d50b0bb49dad8867b8cbc3e362ae1a5064af7e26507a51004ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_921ee417c76a0a2f5ca2e03bcc6d787c1f84c0af139a869126b1ef73244a4614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921ee417c76a0a2f5ca2e03bcc6d787c1f84c0af139a869126b1ef73244a4614->enter($__internal_921ee417c76a0a2f5ca2e03bcc6d787c1f84c0af139a869126b1ef73244a4614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_921ee417c76a0a2f5ca2e03bcc6d787c1f84c0af139a869126b1ef73244a4614->leave($__internal_921ee417c76a0a2f5ca2e03bcc6d787c1f84c0af139a869126b1ef73244a4614_prof);

        
        $__internal_cbeacd1ef6b80d50b0bb49dad8867b8cbc3e362ae1a5064af7e26507a51004ae->leave($__internal_cbeacd1ef6b80d50b0bb49dad8867b8cbc3e362ae1a5064af7e26507a51004ae_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6e9f8f10689279771eabb06990e7d71b53ab7b11b8a3136e2e931a0d45b7a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e9f8f10689279771eabb06990e7d71b53ab7b11b8a3136e2e931a0d45b7a06->enter($__internal_f6e9f8f10689279771eabb06990e7d71b53ab7b11b8a3136e2e931a0d45b7a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_df1d71ba5c5074d6e3720f314570e9a933a7b67fb95ece33f4f81d331f079f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1d71ba5c5074d6e3720f314570e9a933a7b67fb95ece33f4f81d331f079f21->enter($__internal_df1d71ba5c5074d6e3720f314570e9a933a7b67fb95ece33f4f81d331f079f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_df1d71ba5c5074d6e3720f314570e9a933a7b67fb95ece33f4f81d331f079f21->leave($__internal_df1d71ba5c5074d6e3720f314570e9a933a7b67fb95ece33f4f81d331f079f21_prof);

        
        $__internal_f6e9f8f10689279771eabb06990e7d71b53ab7b11b8a3136e2e931a0d45b7a06->leave($__internal_f6e9f8f10689279771eabb06990e7d71b53ab7b11b8a3136e2e931a0d45b7a06_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f4285421e7027103eb2cf2068397bce18392424a0c2bab4b72f7aad79923956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4285421e7027103eb2cf2068397bce18392424a0c2bab4b72f7aad79923956->enter($__internal_2f4285421e7027103eb2cf2068397bce18392424a0c2bab4b72f7aad79923956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2a5fbc451361cb3b121940d721e371608acfa599e18d6c84f2f732c7c44c9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a5fbc451361cb3b121940d721e371608acfa599e18d6c84f2f732c7c44c9df->enter($__internal_d2a5fbc451361cb3b121940d721e371608acfa599e18d6c84f2f732c7c44c9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d2a5fbc451361cb3b121940d721e371608acfa599e18d6c84f2f732c7c44c9df->leave($__internal_d2a5fbc451361cb3b121940d721e371608acfa599e18d6c84f2f732c7c44c9df_prof);

        
        $__internal_2f4285421e7027103eb2cf2068397bce18392424a0c2bab4b72f7aad79923956->leave($__internal_2f4285421e7027103eb2cf2068397bce18392424a0c2bab4b72f7aad79923956_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e5dea916df4b6cfbeb99d0accad4aba5edadc9e4cf922adf13a0b24af666dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5dea916df4b6cfbeb99d0accad4aba5edadc9e4cf922adf13a0b24af666dc3->enter($__internal_7e5dea916df4b6cfbeb99d0accad4aba5edadc9e4cf922adf13a0b24af666dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1e01da6de29757e40e893d1b2021169952bfbf477d6f154342f935206bd4e2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e01da6de29757e40e893d1b2021169952bfbf477d6f154342f935206bd4e2d9->enter($__internal_1e01da6de29757e40e893d1b2021169952bfbf477d6f154342f935206bd4e2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1e01da6de29757e40e893d1b2021169952bfbf477d6f154342f935206bd4e2d9->leave($__internal_1e01da6de29757e40e893d1b2021169952bfbf477d6f154342f935206bd4e2d9_prof);

        
        $__internal_7e5dea916df4b6cfbeb99d0accad4aba5edadc9e4cf922adf13a0b24af666dc3->leave($__internal_7e5dea916df4b6cfbeb99d0accad4aba5edadc9e4cf922adf13a0b24af666dc3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\SymfonyAngular\\app\\Resources\\views\\base.html.twig");
    }
}
