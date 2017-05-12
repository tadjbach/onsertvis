<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3be2048eedc56ffa44862edaa6324fb9c0d440f212a8caef551b56568ae97948 extends Twig_Template
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
        $__internal_bc38c923dcff594c2bd2484b8da0c11041400219cb4fcb530266e82c524d84be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc38c923dcff594c2bd2484b8da0c11041400219cb4fcb530266e82c524d84be->enter($__internal_bc38c923dcff594c2bd2484b8da0c11041400219cb4fcb530266e82c524d84be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ff078dd3328b0d2e395b607dc561148f28923c38f383db3e822e31a4e1dcef35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff078dd3328b0d2e395b607dc561148f28923c38f383db3e822e31a4e1dcef35->enter($__internal_ff078dd3328b0d2e395b607dc561148f28923c38f383db3e822e31a4e1dcef35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bc38c923dcff594c2bd2484b8da0c11041400219cb4fcb530266e82c524d84be->leave($__internal_bc38c923dcff594c2bd2484b8da0c11041400219cb4fcb530266e82c524d84be_prof);

        
        $__internal_ff078dd3328b0d2e395b607dc561148f28923c38f383db3e822e31a4e1dcef35->leave($__internal_ff078dd3328b0d2e395b607dc561148f28923c38f383db3e822e31a4e1dcef35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
