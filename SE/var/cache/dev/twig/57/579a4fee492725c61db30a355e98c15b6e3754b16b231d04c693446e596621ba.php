<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
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
        $__internal_4a709e654cddd7861c80faa5faaf782ece8c0977eb14550451a871a31e057e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a709e654cddd7861c80faa5faaf782ece8c0977eb14550451a871a31e057e5c->enter($__internal_4a709e654cddd7861c80faa5faaf782ece8c0977eb14550451a871a31e057e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_496a34282278e599e6dd089b4e1fe9748a3f595b358d67f3aa349dde1904be73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496a34282278e599e6dd089b4e1fe9748a3f595b358d67f3aa349dde1904be73->enter($__internal_496a34282278e599e6dd089b4e1fe9748a3f595b358d67f3aa349dde1904be73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a709e654cddd7861c80faa5faaf782ece8c0977eb14550451a871a31e057e5c->leave($__internal_4a709e654cddd7861c80faa5faaf782ece8c0977eb14550451a871a31e057e5c_prof);

        
        $__internal_496a34282278e599e6dd089b4e1fe9748a3f595b358d67f3aa349dde1904be73->leave($__internal_496a34282278e599e6dd089b4e1fe9748a3f595b358d67f3aa349dde1904be73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d485c8539c949bcb805a1276dc3aeed6eb217adc9741e438ec59ff6e50aa435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d485c8539c949bcb805a1276dc3aeed6eb217adc9741e438ec59ff6e50aa435->enter($__internal_8d485c8539c949bcb805a1276dc3aeed6eb217adc9741e438ec59ff6e50aa435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7dfef4c9eb9292937411ee8de1ace43a96e77d08caa3e7ef4c63370b4caa1a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfef4c9eb9292937411ee8de1ace43a96e77d08caa3e7ef4c63370b4caa1a15->enter($__internal_7dfef4c9eb9292937411ee8de1ace43a96e77d08caa3e7ef4c63370b4caa1a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7dfef4c9eb9292937411ee8de1ace43a96e77d08caa3e7ef4c63370b4caa1a15->leave($__internal_7dfef4c9eb9292937411ee8de1ace43a96e77d08caa3e7ef4c63370b4caa1a15_prof);

        
        $__internal_8d485c8539c949bcb805a1276dc3aeed6eb217adc9741e438ec59ff6e50aa435->leave($__internal_8d485c8539c949bcb805a1276dc3aeed6eb217adc9741e438ec59ff6e50aa435_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ad24c4d97b2f7860200eaff5cba040fde3eed96bfe213171aaa619846b7c98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad24c4d97b2f7860200eaff5cba040fde3eed96bfe213171aaa619846b7c98e->enter($__internal_5ad24c4d97b2f7860200eaff5cba040fde3eed96bfe213171aaa619846b7c98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca308068143eccb65368e777c106199e92c82d0bdaa40da946e438c206b335c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca308068143eccb65368e777c106199e92c82d0bdaa40da946e438c206b335c3->enter($__internal_ca308068143eccb65368e777c106199e92c82d0bdaa40da946e438c206b335c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca308068143eccb65368e777c106199e92c82d0bdaa40da946e438c206b335c3->leave($__internal_ca308068143eccb65368e777c106199e92c82d0bdaa40da946e438c206b335c3_prof);

        
        $__internal_5ad24c4d97b2f7860200eaff5cba040fde3eed96bfe213171aaa619846b7c98e->leave($__internal_5ad24c4d97b2f7860200eaff5cba040fde3eed96bfe213171aaa619846b7c98e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0d0e2e910d00e4654f7224dafe579494c44f67e724e36e37efd5bd0d7c282ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d0e2e910d00e4654f7224dafe579494c44f67e724e36e37efd5bd0d7c282ce->enter($__internal_e0d0e2e910d00e4654f7224dafe579494c44f67e724e36e37efd5bd0d7c282ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04de9c94162659f826c3d63417c2cdb241dbf60c8a4724441f3b530eee6949fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04de9c94162659f826c3d63417c2cdb241dbf60c8a4724441f3b530eee6949fb->enter($__internal_04de9c94162659f826c3d63417c2cdb241dbf60c8a4724441f3b530eee6949fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_04de9c94162659f826c3d63417c2cdb241dbf60c8a4724441f3b530eee6949fb->leave($__internal_04de9c94162659f826c3d63417c2cdb241dbf60c8a4724441f3b530eee6949fb_prof);

        
        $__internal_e0d0e2e910d00e4654f7224dafe579494c44f67e724e36e37efd5bd0d7c282ce->leave($__internal_e0d0e2e910d00e4654f7224dafe579494c44f67e724e36e37efd5bd0d7c282ce_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
