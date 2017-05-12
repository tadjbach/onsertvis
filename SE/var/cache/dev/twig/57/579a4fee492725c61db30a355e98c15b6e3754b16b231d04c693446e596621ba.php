<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7b1126dbb042ee451dd32e9f3dfbbd5f9f1a7d81ccb4fad2a079297ffbd2d96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1126dbb042ee451dd32e9f3dfbbd5f9f1a7d81ccb4fad2a079297ffbd2d96d->enter($__internal_7b1126dbb042ee451dd32e9f3dfbbd5f9f1a7d81ccb4fad2a079297ffbd2d96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9e911ebffa10d4ee7e9a42631f73f9a1c7b789f599432c34dabd0e69555248d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e911ebffa10d4ee7e9a42631f73f9a1c7b789f599432c34dabd0e69555248d7->enter($__internal_9e911ebffa10d4ee7e9a42631f73f9a1c7b789f599432c34dabd0e69555248d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b1126dbb042ee451dd32e9f3dfbbd5f9f1a7d81ccb4fad2a079297ffbd2d96d->leave($__internal_7b1126dbb042ee451dd32e9f3dfbbd5f9f1a7d81ccb4fad2a079297ffbd2d96d_prof);

        
        $__internal_9e911ebffa10d4ee7e9a42631f73f9a1c7b789f599432c34dabd0e69555248d7->leave($__internal_9e911ebffa10d4ee7e9a42631f73f9a1c7b789f599432c34dabd0e69555248d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bae906e7ca9ae083d0aa57c226b07c424e929087821bab2672ec7069606677f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae906e7ca9ae083d0aa57c226b07c424e929087821bab2672ec7069606677f3->enter($__internal_bae906e7ca9ae083d0aa57c226b07c424e929087821bab2672ec7069606677f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1e2a20c0392832cebdf016d2fb8e5b1c05ab97e217abf7687c8dd726b91ed157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2a20c0392832cebdf016d2fb8e5b1c05ab97e217abf7687c8dd726b91ed157->enter($__internal_1e2a20c0392832cebdf016d2fb8e5b1c05ab97e217abf7687c8dd726b91ed157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e2a20c0392832cebdf016d2fb8e5b1c05ab97e217abf7687c8dd726b91ed157->leave($__internal_1e2a20c0392832cebdf016d2fb8e5b1c05ab97e217abf7687c8dd726b91ed157_prof);

        
        $__internal_bae906e7ca9ae083d0aa57c226b07c424e929087821bab2672ec7069606677f3->leave($__internal_bae906e7ca9ae083d0aa57c226b07c424e929087821bab2672ec7069606677f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee53bea53ee400bfb54cf11aa3ab3f48ec7d674ed100ef70f8424de832d12f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee53bea53ee400bfb54cf11aa3ab3f48ec7d674ed100ef70f8424de832d12f50->enter($__internal_ee53bea53ee400bfb54cf11aa3ab3f48ec7d674ed100ef70f8424de832d12f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8057db5ef30b76fa78e13e3d4bfd3cb15c1f9b543e4f5286c04234fdb1618a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8057db5ef30b76fa78e13e3d4bfd3cb15c1f9b543e4f5286c04234fdb1618a1f->enter($__internal_8057db5ef30b76fa78e13e3d4bfd3cb15c1f9b543e4f5286c04234fdb1618a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8057db5ef30b76fa78e13e3d4bfd3cb15c1f9b543e4f5286c04234fdb1618a1f->leave($__internal_8057db5ef30b76fa78e13e3d4bfd3cb15c1f9b543e4f5286c04234fdb1618a1f_prof);

        
        $__internal_ee53bea53ee400bfb54cf11aa3ab3f48ec7d674ed100ef70f8424de832d12f50->leave($__internal_ee53bea53ee400bfb54cf11aa3ab3f48ec7d674ed100ef70f8424de832d12f50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96dc1b533b92c020c468a4e4564f2b0f5f28b850288e614546497e777d0197d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96dc1b533b92c020c468a4e4564f2b0f5f28b850288e614546497e777d0197d4->enter($__internal_96dc1b533b92c020c468a4e4564f2b0f5f28b850288e614546497e777d0197d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2698aa597f3dfd07ea9dffaff4c7b0988e687c4fee7694bcf5ac8605ec2623a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2698aa597f3dfd07ea9dffaff4c7b0988e687c4fee7694bcf5ac8605ec2623a5->enter($__internal_2698aa597f3dfd07ea9dffaff4c7b0988e687c4fee7694bcf5ac8605ec2623a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2698aa597f3dfd07ea9dffaff4c7b0988e687c4fee7694bcf5ac8605ec2623a5->leave($__internal_2698aa597f3dfd07ea9dffaff4c7b0988e687c4fee7694bcf5ac8605ec2623a5_prof);

        
        $__internal_96dc1b533b92c020c468a4e4564f2b0f5f28b850288e614546497e777d0197d4->leave($__internal_96dc1b533b92c020c468a4e4564f2b0f5f28b850288e614546497e777d0197d4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
