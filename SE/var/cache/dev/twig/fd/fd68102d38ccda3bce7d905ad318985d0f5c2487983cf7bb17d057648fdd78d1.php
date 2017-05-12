<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9b3d75d9857ca5d728ae6d599c01aa3590042d29e32328d63ad27fd0088645ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06b562c5bbb931753b2feeb262e96b112fbdf208a7a3c4ab9221d87c43e0d9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b562c5bbb931753b2feeb262e96b112fbdf208a7a3c4ab9221d87c43e0d9d1->enter($__internal_06b562c5bbb931753b2feeb262e96b112fbdf208a7a3c4ab9221d87c43e0d9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2a85be9b8eee4fecb3d7272c73269cd6418d3fa2b4a4820ab1eb35e0d0f3b437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a85be9b8eee4fecb3d7272c73269cd6418d3fa2b4a4820ab1eb35e0d0f3b437->enter($__internal_2a85be9b8eee4fecb3d7272c73269cd6418d3fa2b4a4820ab1eb35e0d0f3b437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b562c5bbb931753b2feeb262e96b112fbdf208a7a3c4ab9221d87c43e0d9d1->leave($__internal_06b562c5bbb931753b2feeb262e96b112fbdf208a7a3c4ab9221d87c43e0d9d1_prof);

        
        $__internal_2a85be9b8eee4fecb3d7272c73269cd6418d3fa2b4a4820ab1eb35e0d0f3b437->leave($__internal_2a85be9b8eee4fecb3d7272c73269cd6418d3fa2b4a4820ab1eb35e0d0f3b437_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a111a9f8c07ca8a15cd0c377c654722e53d0ebcb4e22f434c77f2cdea1c2bc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a111a9f8c07ca8a15cd0c377c654722e53d0ebcb4e22f434c77f2cdea1c2bc74->enter($__internal_a111a9f8c07ca8a15cd0c377c654722e53d0ebcb4e22f434c77f2cdea1c2bc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c861e706fd158885796af30ef0095c1ff0fc0a93469f03226319ab35e5d43e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c861e706fd158885796af30ef0095c1ff0fc0a93469f03226319ab35e5d43e83->enter($__internal_c861e706fd158885796af30ef0095c1ff0fc0a93469f03226319ab35e5d43e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c861e706fd158885796af30ef0095c1ff0fc0a93469f03226319ab35e5d43e83->leave($__internal_c861e706fd158885796af30ef0095c1ff0fc0a93469f03226319ab35e5d43e83_prof);

        
        $__internal_a111a9f8c07ca8a15cd0c377c654722e53d0ebcb4e22f434c77f2cdea1c2bc74->leave($__internal_a111a9f8c07ca8a15cd0c377c654722e53d0ebcb4e22f434c77f2cdea1c2bc74_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e93443b1d3ed449c37c9aac9c6e6594e3051e6d576b23c93590ee2849625e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e93443b1d3ed449c37c9aac9c6e6594e3051e6d576b23c93590ee2849625e3b->enter($__internal_2e93443b1d3ed449c37c9aac9c6e6594e3051e6d576b23c93590ee2849625e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6c229acd5bc843d6d9073a6a576cb902e0470016e0bef6fd7dc65140658c789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c229acd5bc843d6d9073a6a576cb902e0470016e0bef6fd7dc65140658c789->enter($__internal_a6c229acd5bc843d6d9073a6a576cb902e0470016e0bef6fd7dc65140658c789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a6c229acd5bc843d6d9073a6a576cb902e0470016e0bef6fd7dc65140658c789->leave($__internal_a6c229acd5bc843d6d9073a6a576cb902e0470016e0bef6fd7dc65140658c789_prof);

        
        $__internal_2e93443b1d3ed449c37c9aac9c6e6594e3051e6d576b23c93590ee2849625e3b->leave($__internal_2e93443b1d3ed449c37c9aac9c6e6594e3051e6d576b23c93590ee2849625e3b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
