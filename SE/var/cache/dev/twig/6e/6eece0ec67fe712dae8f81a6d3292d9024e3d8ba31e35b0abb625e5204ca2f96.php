<?php

/* SEPlatformBundle:Advert:list.html.twig */
class __TwigTemplate_9a7383aea7d63e417ab7cc63b682fdf6e797c67af835b67f5274a1be2af3e32a extends Twig_Template
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
        $__internal_de57aaae127224591f5d86a994ad6e6c83522093819b3fb28a9656ff520157f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de57aaae127224591f5d86a994ad6e6c83522093819b3fb28a9656ff520157f0->enter($__internal_de57aaae127224591f5d86a994ad6e6c83522093819b3fb28a9656ff520157f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Advert:list.html.twig"));

        $__internal_8f06a3904989bccf98ed9abf7f6d4c265116a7a313d21c13beae4befc153532c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f06a3904989bccf98ed9abf7f6d4c265116a7a313d21c13beae4befc153532c->enter($__internal_8f06a3904989bccf98ed9abf7f6d4c265116a7a313d21c13beae4befc153532c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Advert:list.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Liste des annonces en cours</title>
    </head>
    <body>
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
        echo "</h1>
        
        <p>
            Liste des annonces en cours
        </p>
    </body>
</html>";
        
        $__internal_de57aaae127224591f5d86a994ad6e6c83522093819b3fb28a9656ff520157f0->leave($__internal_de57aaae127224591f5d86a994ad6e6c83522093819b3fb28a9656ff520157f0_prof);

        
        $__internal_8f06a3904989bccf98ed9abf7f6d4c265116a7a313d21c13beae4befc153532c->leave($__internal_8f06a3904989bccf98ed9abf7f6d4c265116a7a313d21c13beae4befc153532c_prof);

    }

    public function getTemplateName()
    {
        return "SEPlatformBundle:Advert:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>Liste des annonces en cours</title>
    </head>
    <body>
        <h1>{{ search }}</h1>
        
        <p>
            Liste des annonces en cours
        </p>
    </body>
</html>", "SEPlatformBundle:Advert:list.html.twig", "/Users/bach_tadj/www/onsertvis/SE/src/SE/PlatformBundle/Resources/views/Advert/list.html.twig");
    }
}
