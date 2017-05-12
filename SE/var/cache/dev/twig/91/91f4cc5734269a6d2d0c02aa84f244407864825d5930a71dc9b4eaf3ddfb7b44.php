<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_322ee3f571c96b6a415f34e3acc0b0595c0bed45700e299e069ec5e58e23eaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322ee3f571c96b6a415f34e3acc0b0595c0bed45700e299e069ec5e58e23eaae->enter($__internal_322ee3f571c96b6a415f34e3acc0b0595c0bed45700e299e069ec5e58e23eaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ed866c4ab01ef4c1b857ecebcd522e48e86e36535f69650132629aff4d9d94f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed866c4ab01ef4c1b857ecebcd522e48e86e36535f69650132629aff4d9d94f0->enter($__internal_ed866c4ab01ef4c1b857ecebcd522e48e86e36535f69650132629aff4d9d94f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_322ee3f571c96b6a415f34e3acc0b0595c0bed45700e299e069ec5e58e23eaae->leave($__internal_322ee3f571c96b6a415f34e3acc0b0595c0bed45700e299e069ec5e58e23eaae_prof);

        
        $__internal_ed866c4ab01ef4c1b857ecebcd522e48e86e36535f69650132629aff4d9d94f0->leave($__internal_ed866c4ab01ef4c1b857ecebcd522e48e86e36535f69650132629aff4d9d94f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61fb2da2f81ca2e27be564fa170efd31c1bfbed8cf29970d006b87d35cc82dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fb2da2f81ca2e27be564fa170efd31c1bfbed8cf29970d006b87d35cc82dbc->enter($__internal_61fb2da2f81ca2e27be564fa170efd31c1bfbed8cf29970d006b87d35cc82dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b98564325a2ccf583387f03466c150ecd4e5d9601ea6565c529296c1dfbc611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b98564325a2ccf583387f03466c150ecd4e5d9601ea6565c529296c1dfbc611->enter($__internal_6b98564325a2ccf583387f03466c150ecd4e5d9601ea6565c529296c1dfbc611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6b98564325a2ccf583387f03466c150ecd4e5d9601ea6565c529296c1dfbc611->leave($__internal_6b98564325a2ccf583387f03466c150ecd4e5d9601ea6565c529296c1dfbc611_prof);

        
        $__internal_61fb2da2f81ca2e27be564fa170efd31c1bfbed8cf29970d006b87d35cc82dbc->leave($__internal_61fb2da2f81ca2e27be564fa170efd31c1bfbed8cf29970d006b87d35cc82dbc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3fdf938fecfebea7481773c9433c850c9f050ff9e0e44cb865cad086f5ad17aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdf938fecfebea7481773c9433c850c9f050ff9e0e44cb865cad086f5ad17aa->enter($__internal_3fdf938fecfebea7481773c9433c850c9f050ff9e0e44cb865cad086f5ad17aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed12159a26567de9da060c6ee250401886864735c840d4b5c1acf08f30c389a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed12159a26567de9da060c6ee250401886864735c840d4b5c1acf08f30c389a8->enter($__internal_ed12159a26567de9da060c6ee250401886864735c840d4b5c1acf08f30c389a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ed12159a26567de9da060c6ee250401886864735c840d4b5c1acf08f30c389a8->leave($__internal_ed12159a26567de9da060c6ee250401886864735c840d4b5c1acf08f30c389a8_prof);

        
        $__internal_3fdf938fecfebea7481773c9433c850c9f050ff9e0e44cb865cad086f5ad17aa->leave($__internal_3fdf938fecfebea7481773c9433c850c9f050ff9e0e44cb865cad086f5ad17aa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_598f6e8d7b8b8f643389bd4ba4a33e26185a8cdf41a3a768b276d8ef590382b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598f6e8d7b8b8f643389bd4ba4a33e26185a8cdf41a3a768b276d8ef590382b2->enter($__internal_598f6e8d7b8b8f643389bd4ba4a33e26185a8cdf41a3a768b276d8ef590382b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5eb2b0cbe9a224a83648f5460f76753bd277246ab923cff363591c157d394f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb2b0cbe9a224a83648f5460f76753bd277246ab923cff363591c157d394f95->enter($__internal_5eb2b0cbe9a224a83648f5460f76753bd277246ab923cff363591c157d394f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5eb2b0cbe9a224a83648f5460f76753bd277246ab923cff363591c157d394f95->leave($__internal_5eb2b0cbe9a224a83648f5460f76753bd277246ab923cff363591c157d394f95_prof);

        
        $__internal_598f6e8d7b8b8f643389bd4ba4a33e26185a8cdf41a3a768b276d8ef590382b2->leave($__internal_598f6e8d7b8b8f643389bd4ba4a33e26185a8cdf41a3a768b276d8ef590382b2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
