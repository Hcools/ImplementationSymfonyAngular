<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e96acece55f74ae948039a82e8f61fd87338ffb0e5f08a9a6e531bc80f0d6944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96acece55f74ae948039a82e8f61fd87338ffb0e5f08a9a6e531bc80f0d6944->enter($__internal_e96acece55f74ae948039a82e8f61fd87338ffb0e5f08a9a6e531bc80f0d6944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_23f7fcea1c58cdb326246e2a506a2fa15cc94eb8226b0a781739c103daf07d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f7fcea1c58cdb326246e2a506a2fa15cc94eb8226b0a781739c103daf07d21->enter($__internal_23f7fcea1c58cdb326246e2a506a2fa15cc94eb8226b0a781739c103daf07d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e96acece55f74ae948039a82e8f61fd87338ffb0e5f08a9a6e531bc80f0d6944->leave($__internal_e96acece55f74ae948039a82e8f61fd87338ffb0e5f08a9a6e531bc80f0d6944_prof);

        
        $__internal_23f7fcea1c58cdb326246e2a506a2fa15cc94eb8226b0a781739c103daf07d21->leave($__internal_23f7fcea1c58cdb326246e2a506a2fa15cc94eb8226b0a781739c103daf07d21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67e244846d8874ebb6c2813812c33cd53ff2d38def9093392d65ba6ec804c5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e244846d8874ebb6c2813812c33cd53ff2d38def9093392d65ba6ec804c5f3->enter($__internal_67e244846d8874ebb6c2813812c33cd53ff2d38def9093392d65ba6ec804c5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dded65b0328ae8d6c419fed4e875d1cb14cca014dde9ff3e4ba09617afe7d75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dded65b0328ae8d6c419fed4e875d1cb14cca014dde9ff3e4ba09617afe7d75c->enter($__internal_dded65b0328ae8d6c419fed4e875d1cb14cca014dde9ff3e4ba09617afe7d75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dded65b0328ae8d6c419fed4e875d1cb14cca014dde9ff3e4ba09617afe7d75c->leave($__internal_dded65b0328ae8d6c419fed4e875d1cb14cca014dde9ff3e4ba09617afe7d75c_prof);

        
        $__internal_67e244846d8874ebb6c2813812c33cd53ff2d38def9093392d65ba6ec804c5f3->leave($__internal_67e244846d8874ebb6c2813812c33cd53ff2d38def9093392d65ba6ec804c5f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f5e2eaafd7e23ffacdfcc95094817f706140da4f781d009ee768425b603e4b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5e2eaafd7e23ffacdfcc95094817f706140da4f781d009ee768425b603e4b6->enter($__internal_6f5e2eaafd7e23ffacdfcc95094817f706140da4f781d009ee768425b603e4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_286e74b8397b5c96f0e558749b9ce841d4a016102e34b493a8456dc7f71ddffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286e74b8397b5c96f0e558749b9ce841d4a016102e34b493a8456dc7f71ddffe->enter($__internal_286e74b8397b5c96f0e558749b9ce841d4a016102e34b493a8456dc7f71ddffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_286e74b8397b5c96f0e558749b9ce841d4a016102e34b493a8456dc7f71ddffe->leave($__internal_286e74b8397b5c96f0e558749b9ce841d4a016102e34b493a8456dc7f71ddffe_prof);

        
        $__internal_6f5e2eaafd7e23ffacdfcc95094817f706140da4f781d009ee768425b603e4b6->leave($__internal_6f5e2eaafd7e23ffacdfcc95094817f706140da4f781d009ee768425b603e4b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86326705fa5bac774a58c40f059720a33690978593393d6139bf880e521c8bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86326705fa5bac774a58c40f059720a33690978593393d6139bf880e521c8bde->enter($__internal_86326705fa5bac774a58c40f059720a33690978593393d6139bf880e521c8bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0428af4e97ac47ec26581c315dd40c2cc80d53c6682692b1c7d7622a1fb43ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0428af4e97ac47ec26581c315dd40c2cc80d53c6682692b1c7d7622a1fb43ca4->enter($__internal_0428af4e97ac47ec26581c315dd40c2cc80d53c6682692b1c7d7622a1fb43ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0428af4e97ac47ec26581c315dd40c2cc80d53c6682692b1c7d7622a1fb43ca4->leave($__internal_0428af4e97ac47ec26581c315dd40c2cc80d53c6682692b1c7d7622a1fb43ca4_prof);

        
        $__internal_86326705fa5bac774a58c40f059720a33690978593393d6139bf880e521c8bde->leave($__internal_86326705fa5bac774a58c40f059720a33690978593393d6139bf880e521c8bde_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
