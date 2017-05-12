<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_dc1c62e7f97d3db95972fb296fdf6de7976737d02c4ac47b68461e781a5aa705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a41a689a102b9e19da67df126bba78b3a13406e7a539c7a3a5065a3916bd7e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41a689a102b9e19da67df126bba78b3a13406e7a539c7a3a5065a3916bd7e25->enter($__internal_a41a689a102b9e19da67df126bba78b3a13406e7a539c7a3a5065a3916bd7e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_019c1663eb15bc26405202acb70229e4020d9c44e8b1568ba579e14a3b90e192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019c1663eb15bc26405202acb70229e4020d9c44e8b1568ba579e14a3b90e192->enter($__internal_019c1663eb15bc26405202acb70229e4020d9c44e8b1568ba579e14a3b90e192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41a689a102b9e19da67df126bba78b3a13406e7a539c7a3a5065a3916bd7e25->leave($__internal_a41a689a102b9e19da67df126bba78b3a13406e7a539c7a3a5065a3916bd7e25_prof);

        
        $__internal_019c1663eb15bc26405202acb70229e4020d9c44e8b1568ba579e14a3b90e192->leave($__internal_019c1663eb15bc26405202acb70229e4020d9c44e8b1568ba579e14a3b90e192_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8dadcb7ba123314ff5bacc4e3b4acc075ccd8b4406512767a72eac2d4680532d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dadcb7ba123314ff5bacc4e3b4acc075ccd8b4406512767a72eac2d4680532d->enter($__internal_8dadcb7ba123314ff5bacc4e3b4acc075ccd8b4406512767a72eac2d4680532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_57a3f7c40a4f0fe19e32ecd952746e1feb80c40b521d69b5e8ad5c86244b733e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a3f7c40a4f0fe19e32ecd952746e1feb80c40b521d69b5e8ad5c86244b733e->enter($__internal_57a3f7c40a4f0fe19e32ecd952746e1feb80c40b521d69b5e8ad5c86244b733e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_57a3f7c40a4f0fe19e32ecd952746e1feb80c40b521d69b5e8ad5c86244b733e->leave($__internal_57a3f7c40a4f0fe19e32ecd952746e1feb80c40b521d69b5e8ad5c86244b733e_prof);

        
        $__internal_8dadcb7ba123314ff5bacc4e3b4acc075ccd8b4406512767a72eac2d4680532d->leave($__internal_8dadcb7ba123314ff5bacc4e3b4acc075ccd8b4406512767a72eac2d4680532d_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cf806058461c35adc759640f55308614b962f114801cfb3ed8c75832b0b09d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf806058461c35adc759640f55308614b962f114801cfb3ed8c75832b0b09d0->enter($__internal_3cf806058461c35adc759640f55308614b962f114801cfb3ed8c75832b0b09d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44dd5bacf91644ab4587e0723d5902b99aa46572cda30268b10aa13d5cc69247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44dd5bacf91644ab4587e0723d5902b99aa46572cda30268b10aa13d5cc69247->enter($__internal_44dd5bacf91644ab4587e0723d5902b99aa46572cda30268b10aa13d5cc69247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_44dd5bacf91644ab4587e0723d5902b99aa46572cda30268b10aa13d5cc69247->leave($__internal_44dd5bacf91644ab4587e0723d5902b99aa46572cda30268b10aa13d5cc69247_prof);

        
        $__internal_3cf806058461c35adc759640f55308614b962f114801cfb3ed8c75832b0b09d0->leave($__internal_3cf806058461c35adc759640f55308614b962f114801cfb3ed8c75832b0b09d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
