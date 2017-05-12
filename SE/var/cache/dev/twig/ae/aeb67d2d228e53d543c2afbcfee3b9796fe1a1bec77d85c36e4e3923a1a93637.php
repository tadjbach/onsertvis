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
        $__internal_09773e5333912ddefa60857fd4df2358f37b3e98f47af5410b74c00e3f49f1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09773e5333912ddefa60857fd4df2358f37b3e98f47af5410b74c00e3f49f1b4->enter($__internal_09773e5333912ddefa60857fd4df2358f37b3e98f47af5410b74c00e3f49f1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b1038bdb366ab6e37a67c870fd0c1167b5f315be80ced57147ed1128e724b6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1038bdb366ab6e37a67c870fd0c1167b5f315be80ced57147ed1128e724b6bb->enter($__internal_b1038bdb366ab6e37a67c870fd0c1167b5f315be80ced57147ed1128e724b6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09773e5333912ddefa60857fd4df2358f37b3e98f47af5410b74c00e3f49f1b4->leave($__internal_09773e5333912ddefa60857fd4df2358f37b3e98f47af5410b74c00e3f49f1b4_prof);

        
        $__internal_b1038bdb366ab6e37a67c870fd0c1167b5f315be80ced57147ed1128e724b6bb->leave($__internal_b1038bdb366ab6e37a67c870fd0c1167b5f315be80ced57147ed1128e724b6bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fea13b9073d6b5e52d173a9b436223f1eefa876f885a8edf449b6a66ee0d9522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea13b9073d6b5e52d173a9b436223f1eefa876f885a8edf449b6a66ee0d9522->enter($__internal_fea13b9073d6b5e52d173a9b436223f1eefa876f885a8edf449b6a66ee0d9522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_14fa761825ee861d69db96c5f22fa3702df2f65de4861761985365feda566cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fa761825ee861d69db96c5f22fa3702df2f65de4861761985365feda566cc6->enter($__internal_14fa761825ee861d69db96c5f22fa3702df2f65de4861761985365feda566cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_14fa761825ee861d69db96c5f22fa3702df2f65de4861761985365feda566cc6->leave($__internal_14fa761825ee861d69db96c5f22fa3702df2f65de4861761985365feda566cc6_prof);

        
        $__internal_fea13b9073d6b5e52d173a9b436223f1eefa876f885a8edf449b6a66ee0d9522->leave($__internal_fea13b9073d6b5e52d173a9b436223f1eefa876f885a8edf449b6a66ee0d9522_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8fbbf5e106d0a7622360672e3abd47819546c970cb8095add75fac57555b484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fbbf5e106d0a7622360672e3abd47819546c970cb8095add75fac57555b484->enter($__internal_c8fbbf5e106d0a7622360672e3abd47819546c970cb8095add75fac57555b484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cb015f65abd29488b1ea1de9fbf26d0fd85565a1b4ff08ccc7b641285a345d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb015f65abd29488b1ea1de9fbf26d0fd85565a1b4ff08ccc7b641285a345d1->enter($__internal_0cb015f65abd29488b1ea1de9fbf26d0fd85565a1b4ff08ccc7b641285a345d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0cb015f65abd29488b1ea1de9fbf26d0fd85565a1b4ff08ccc7b641285a345d1->leave($__internal_0cb015f65abd29488b1ea1de9fbf26d0fd85565a1b4ff08ccc7b641285a345d1_prof);

        
        $__internal_c8fbbf5e106d0a7622360672e3abd47819546c970cb8095add75fac57555b484->leave($__internal_c8fbbf5e106d0a7622360672e3abd47819546c970cb8095add75fac57555b484_prof);

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
