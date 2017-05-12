<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_e160cbfa57304790f59f839adfc746f3d9d11d8663a198652b2fecfc8fb4b63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e160cbfa57304790f59f839adfc746f3d9d11d8663a198652b2fecfc8fb4b63a->enter($__internal_e160cbfa57304790f59f839adfc746f3d9d11d8663a198652b2fecfc8fb4b63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_22bd14ea17602936d21290e7572326553cc15695674ce937e3001be549f518a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bd14ea17602936d21290e7572326553cc15695674ce937e3001be549f518a5->enter($__internal_22bd14ea17602936d21290e7572326553cc15695674ce937e3001be549f518a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e160cbfa57304790f59f839adfc746f3d9d11d8663a198652b2fecfc8fb4b63a->leave($__internal_e160cbfa57304790f59f839adfc746f3d9d11d8663a198652b2fecfc8fb4b63a_prof);

        
        $__internal_22bd14ea17602936d21290e7572326553cc15695674ce937e3001be549f518a5->leave($__internal_22bd14ea17602936d21290e7572326553cc15695674ce937e3001be549f518a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8485a829a989b8e89bf43bc636f320f72410050eb71d5224fddfe69849accc91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8485a829a989b8e89bf43bc636f320f72410050eb71d5224fddfe69849accc91->enter($__internal_8485a829a989b8e89bf43bc636f320f72410050eb71d5224fddfe69849accc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c5eba516fca359086cc0b1645529bc05b5f7c6450cf184816ed319b7429b2abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5eba516fca359086cc0b1645529bc05b5f7c6450cf184816ed319b7429b2abd->enter($__internal_c5eba516fca359086cc0b1645529bc05b5f7c6450cf184816ed319b7429b2abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c5eba516fca359086cc0b1645529bc05b5f7c6450cf184816ed319b7429b2abd->leave($__internal_c5eba516fca359086cc0b1645529bc05b5f7c6450cf184816ed319b7429b2abd_prof);

        
        $__internal_8485a829a989b8e89bf43bc636f320f72410050eb71d5224fddfe69849accc91->leave($__internal_8485a829a989b8e89bf43bc636f320f72410050eb71d5224fddfe69849accc91_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52e62f10153d7a0ab04515e0a7726092930f41dd41ac7bb57ae4c4c2766ab375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e62f10153d7a0ab04515e0a7726092930f41dd41ac7bb57ae4c4c2766ab375->enter($__internal_52e62f10153d7a0ab04515e0a7726092930f41dd41ac7bb57ae4c4c2766ab375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e42d0b36c4eb884ef580423dc89765c2bfb166b00e1bcde47353be37e200ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e42d0b36c4eb884ef580423dc89765c2bfb166b00e1bcde47353be37e200ccc->enter($__internal_3e42d0b36c4eb884ef580423dc89765c2bfb166b00e1bcde47353be37e200ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3e42d0b36c4eb884ef580423dc89765c2bfb166b00e1bcde47353be37e200ccc->leave($__internal_3e42d0b36c4eb884ef580423dc89765c2bfb166b00e1bcde47353be37e200ccc_prof);

        
        $__internal_52e62f10153d7a0ab04515e0a7726092930f41dd41ac7bb57ae4c4c2766ab375->leave($__internal_52e62f10153d7a0ab04515e0a7726092930f41dd41ac7bb57ae4c4c2766ab375_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_345a36ac8ed7c310b3a7f7fdb34fa1472bbf603753cdcfec162ed4fe36787000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345a36ac8ed7c310b3a7f7fdb34fa1472bbf603753cdcfec162ed4fe36787000->enter($__internal_345a36ac8ed7c310b3a7f7fdb34fa1472bbf603753cdcfec162ed4fe36787000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb8e5a4a3fa7bd35324dce57d2e3cfa0a85ba21427580753ce46cdfed83e15ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8e5a4a3fa7bd35324dce57d2e3cfa0a85ba21427580753ce46cdfed83e15ff->enter($__internal_cb8e5a4a3fa7bd35324dce57d2e3cfa0a85ba21427580753ce46cdfed83e15ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cb8e5a4a3fa7bd35324dce57d2e3cfa0a85ba21427580753ce46cdfed83e15ff->leave($__internal_cb8e5a4a3fa7bd35324dce57d2e3cfa0a85ba21427580753ce46cdfed83e15ff_prof);

        
        $__internal_345a36ac8ed7c310b3a7f7fdb34fa1472bbf603753cdcfec162ed4fe36787000->leave($__internal_345a36ac8ed7c310b3a7f7fdb34fa1472bbf603753cdcfec162ed4fe36787000_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
