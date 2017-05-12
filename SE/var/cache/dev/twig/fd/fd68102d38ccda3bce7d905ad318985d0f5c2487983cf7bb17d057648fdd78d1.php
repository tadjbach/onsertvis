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
        $__internal_e08a3453cfbc1303690200cfa20c80c16a13fcd994e9dd7294eeca600d2966c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08a3453cfbc1303690200cfa20c80c16a13fcd994e9dd7294eeca600d2966c4->enter($__internal_e08a3453cfbc1303690200cfa20c80c16a13fcd994e9dd7294eeca600d2966c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_de3696b367011e5e6d78bb2357308b16abcc7e619e6bd4b3cd37680f95d27c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3696b367011e5e6d78bb2357308b16abcc7e619e6bd4b3cd37680f95d27c80->enter($__internal_de3696b367011e5e6d78bb2357308b16abcc7e619e6bd4b3cd37680f95d27c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e08a3453cfbc1303690200cfa20c80c16a13fcd994e9dd7294eeca600d2966c4->leave($__internal_e08a3453cfbc1303690200cfa20c80c16a13fcd994e9dd7294eeca600d2966c4_prof);

        
        $__internal_de3696b367011e5e6d78bb2357308b16abcc7e619e6bd4b3cd37680f95d27c80->leave($__internal_de3696b367011e5e6d78bb2357308b16abcc7e619e6bd4b3cd37680f95d27c80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c25a8a8db64172e8cf3720d479a3ecfef9b91833aaea580ef9dd31f0c7fabd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25a8a8db64172e8cf3720d479a3ecfef9b91833aaea580ef9dd31f0c7fabd7f->enter($__internal_c25a8a8db64172e8cf3720d479a3ecfef9b91833aaea580ef9dd31f0c7fabd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93a3f836c573cd29fc7657340248e88f364dfa88b6166cb1fed63af5c9833b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a3f836c573cd29fc7657340248e88f364dfa88b6166cb1fed63af5c9833b6f->enter($__internal_93a3f836c573cd29fc7657340248e88f364dfa88b6166cb1fed63af5c9833b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_93a3f836c573cd29fc7657340248e88f364dfa88b6166cb1fed63af5c9833b6f->leave($__internal_93a3f836c573cd29fc7657340248e88f364dfa88b6166cb1fed63af5c9833b6f_prof);

        
        $__internal_c25a8a8db64172e8cf3720d479a3ecfef9b91833aaea580ef9dd31f0c7fabd7f->leave($__internal_c25a8a8db64172e8cf3720d479a3ecfef9b91833aaea580ef9dd31f0c7fabd7f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b229df37b2a69d0062318ce2d1923ecb59f38b97ef8fb77cf725c2f156291900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b229df37b2a69d0062318ce2d1923ecb59f38b97ef8fb77cf725c2f156291900->enter($__internal_b229df37b2a69d0062318ce2d1923ecb59f38b97ef8fb77cf725c2f156291900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67f79aa414b58542e4b48707cc906c52ffc40edb94529a556382cbdd8c2dbd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f79aa414b58542e4b48707cc906c52ffc40edb94529a556382cbdd8c2dbd49->enter($__internal_67f79aa414b58542e4b48707cc906c52ffc40edb94529a556382cbdd8c2dbd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67f79aa414b58542e4b48707cc906c52ffc40edb94529a556382cbdd8c2dbd49->leave($__internal_67f79aa414b58542e4b48707cc906c52ffc40edb94529a556382cbdd8c2dbd49_prof);

        
        $__internal_b229df37b2a69d0062318ce2d1923ecb59f38b97ef8fb77cf725c2f156291900->leave($__internal_b229df37b2a69d0062318ce2d1923ecb59f38b97ef8fb77cf725c2f156291900_prof);

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
