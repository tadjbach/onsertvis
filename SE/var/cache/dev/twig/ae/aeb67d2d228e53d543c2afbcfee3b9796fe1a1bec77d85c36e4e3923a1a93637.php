<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b13b0fccfcf15b2ef04c635580a353ea5c6ec2d9577cb0ff668c8a5952c4f8e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b318c3a904d33093d10169e9ba4cf725dbaf86a02106f145af1a9cb86ae7d370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b318c3a904d33093d10169e9ba4cf725dbaf86a02106f145af1a9cb86ae7d370->enter($__internal_b318c3a904d33093d10169e9ba4cf725dbaf86a02106f145af1a9cb86ae7d370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_35d401b6a05bace97cd07f41893069321f7c0164397bd38a43804708e77cc3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d401b6a05bace97cd07f41893069321f7c0164397bd38a43804708e77cc3f8->enter($__internal_35d401b6a05bace97cd07f41893069321f7c0164397bd38a43804708e77cc3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b318c3a904d33093d10169e9ba4cf725dbaf86a02106f145af1a9cb86ae7d370->leave($__internal_b318c3a904d33093d10169e9ba4cf725dbaf86a02106f145af1a9cb86ae7d370_prof);

        
        $__internal_35d401b6a05bace97cd07f41893069321f7c0164397bd38a43804708e77cc3f8->leave($__internal_35d401b6a05bace97cd07f41893069321f7c0164397bd38a43804708e77cc3f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c22bac5bccf1550ec234786b04898be3591aed8e84b300c52204a2ce2b9e226d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22bac5bccf1550ec234786b04898be3591aed8e84b300c52204a2ce2b9e226d->enter($__internal_c22bac5bccf1550ec234786b04898be3591aed8e84b300c52204a2ce2b9e226d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f36d52d72775b0fa149c6d364626ba87bb9417351201219a66b5a6fb2c3a1601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36d52d72775b0fa149c6d364626ba87bb9417351201219a66b5a6fb2c3a1601->enter($__internal_f36d52d72775b0fa149c6d364626ba87bb9417351201219a66b5a6fb2c3a1601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f36d52d72775b0fa149c6d364626ba87bb9417351201219a66b5a6fb2c3a1601->leave($__internal_f36d52d72775b0fa149c6d364626ba87bb9417351201219a66b5a6fb2c3a1601_prof);

        
        $__internal_c22bac5bccf1550ec234786b04898be3591aed8e84b300c52204a2ce2b9e226d->leave($__internal_c22bac5bccf1550ec234786b04898be3591aed8e84b300c52204a2ce2b9e226d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e20c20beb86ee12d49949103236362d7fd5573bd8a0f1e95ca3e5fe0f811558e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20c20beb86ee12d49949103236362d7fd5573bd8a0f1e95ca3e5fe0f811558e->enter($__internal_e20c20beb86ee12d49949103236362d7fd5573bd8a0f1e95ca3e5fe0f811558e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72c8ff460a75d511fef2b9ad8cc5ade70c2b8349abb25671287053034926e1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c8ff460a75d511fef2b9ad8cc5ade70c2b8349abb25671287053034926e1d3->enter($__internal_72c8ff460a75d511fef2b9ad8cc5ade70c2b8349abb25671287053034926e1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_72c8ff460a75d511fef2b9ad8cc5ade70c2b8349abb25671287053034926e1d3->leave($__internal_72c8ff460a75d511fef2b9ad8cc5ade70c2b8349abb25671287053034926e1d3_prof);

        
        $__internal_e20c20beb86ee12d49949103236362d7fd5573bd8a0f1e95ca3e5fe0f811558e->leave($__internal_e20c20beb86ee12d49949103236362d7fd5573bd8a0f1e95ca3e5fe0f811558e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
