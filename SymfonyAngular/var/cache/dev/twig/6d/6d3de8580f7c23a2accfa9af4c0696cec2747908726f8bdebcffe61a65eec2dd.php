<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_118fa8d4821cef41223f47291209c1f29c7a3db418fbc1d315629b4ed5b74197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ec01ff1da665942dd9686d30bed207cd04dd09cc6e92e0ff263b7e0c01ca5a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec01ff1da665942dd9686d30bed207cd04dd09cc6e92e0ff263b7e0c01ca5a8->enter($__internal_0ec01ff1da665942dd9686d30bed207cd04dd09cc6e92e0ff263b7e0c01ca5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_578349c49caf627b53b0b2a26782037f766d59271226ec47de59ae24f7a6d2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578349c49caf627b53b0b2a26782037f766d59271226ec47de59ae24f7a6d2ce->enter($__internal_578349c49caf627b53b0b2a26782037f766d59271226ec47de59ae24f7a6d2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_0ec01ff1da665942dd9686d30bed207cd04dd09cc6e92e0ff263b7e0c01ca5a8->leave($__internal_0ec01ff1da665942dd9686d30bed207cd04dd09cc6e92e0ff263b7e0c01ca5a8_prof);

        
        $__internal_578349c49caf627b53b0b2a26782037f766d59271226ec47de59ae24f7a6d2ce->leave($__internal_578349c49caf627b53b0b2a26782037f766d59271226ec47de59ae24f7a6d2ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}
