<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9a5db22b768910612b3be71b41b954972a3ebdb4e6cbfb9cc1bf1d941f6ac3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dfffb1b6e1acb7e8d935cb898f948bb0e1fbaf860e8aef6aed26031c5621521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dfffb1b6e1acb7e8d935cb898f948bb0e1fbaf860e8aef6aed26031c5621521->enter($__internal_8dfffb1b6e1acb7e8d935cb898f948bb0e1fbaf860e8aef6aed26031c5621521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8136eb246a15d285b05269e9e0d76346d38622f704445ec35cb1886a10fd6b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8136eb246a15d285b05269e9e0d76346d38622f704445ec35cb1886a10fd6b28->enter($__internal_8136eb246a15d285b05269e9e0d76346d38622f704445ec35cb1886a10fd6b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dfffb1b6e1acb7e8d935cb898f948bb0e1fbaf860e8aef6aed26031c5621521->leave($__internal_8dfffb1b6e1acb7e8d935cb898f948bb0e1fbaf860e8aef6aed26031c5621521_prof);

        
        $__internal_8136eb246a15d285b05269e9e0d76346d38622f704445ec35cb1886a10fd6b28->leave($__internal_8136eb246a15d285b05269e9e0d76346d38622f704445ec35cb1886a10fd6b28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_055fb2658a5c1620f18921df991660eda62c11e59403a971925cf26af77859eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055fb2658a5c1620f18921df991660eda62c11e59403a971925cf26af77859eb->enter($__internal_055fb2658a5c1620f18921df991660eda62c11e59403a971925cf26af77859eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b5e206d7e4ccddf5e2c5805a35b73282b8c5ed5dd42b1830f355bd5defb33a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5e206d7e4ccddf5e2c5805a35b73282b8c5ed5dd42b1830f355bd5defb33a3->enter($__internal_0b5e206d7e4ccddf5e2c5805a35b73282b8c5ed5dd42b1830f355bd5defb33a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0b5e206d7e4ccddf5e2c5805a35b73282b8c5ed5dd42b1830f355bd5defb33a3->leave($__internal_0b5e206d7e4ccddf5e2c5805a35b73282b8c5ed5dd42b1830f355bd5defb33a3_prof);

        
        $__internal_055fb2658a5c1620f18921df991660eda62c11e59403a971925cf26af77859eb->leave($__internal_055fb2658a5c1620f18921df991660eda62c11e59403a971925cf26af77859eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
