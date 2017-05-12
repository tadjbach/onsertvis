<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1c4122c91df9e1e57064f2fbaf9eb0a2cb645b74d003b6a471498370b1a7b48f extends Twig_Template
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
        $__internal_e5b4bb2b9c057e2f8b48005bbcaa8462d91411b11d8e9e6673af0f8d42c1950d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b4bb2b9c057e2f8b48005bbcaa8462d91411b11d8e9e6673af0f8d42c1950d->enter($__internal_e5b4bb2b9c057e2f8b48005bbcaa8462d91411b11d8e9e6673af0f8d42c1950d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_dc566cb33b32a16645cd22fcf44c355b77a010c514f655a8fd828b03453e81ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc566cb33b32a16645cd22fcf44c355b77a010c514f655a8fd828b03453e81ca->enter($__internal_dc566cb33b32a16645cd22fcf44c355b77a010c514f655a8fd828b03453e81ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e5b4bb2b9c057e2f8b48005bbcaa8462d91411b11d8e9e6673af0f8d42c1950d->leave($__internal_e5b4bb2b9c057e2f8b48005bbcaa8462d91411b11d8e9e6673af0f8d42c1950d_prof);

        
        $__internal_dc566cb33b32a16645cd22fcf44c355b77a010c514f655a8fd828b03453e81ca->leave($__internal_dc566cb33b32a16645cd22fcf44c355b77a010c514f655a8fd828b03453e81ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
