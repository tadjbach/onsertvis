<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d9fad801b0ea5b69b472ccdc3c0890c596ab2e2553cec0a9378e1a9c00740e7e extends Twig_Template
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
        $__internal_c2a026c501b62b2eb47056ec64e74220c6be4c2246acab415f1c59291c62a62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a026c501b62b2eb47056ec64e74220c6be4c2246acab415f1c59291c62a62d->enter($__internal_c2a026c501b62b2eb47056ec64e74220c6be4c2246acab415f1c59291c62a62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_874c74bb6f8a759a3141e7bf8b988f0d3610f5e1deba86d4c3a98b55ff953eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874c74bb6f8a759a3141e7bf8b988f0d3610f5e1deba86d4c3a98b55ff953eae->enter($__internal_874c74bb6f8a759a3141e7bf8b988f0d3610f5e1deba86d4c3a98b55ff953eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c2a026c501b62b2eb47056ec64e74220c6be4c2246acab415f1c59291c62a62d->leave($__internal_c2a026c501b62b2eb47056ec64e74220c6be4c2246acab415f1c59291c62a62d_prof);

        
        $__internal_874c74bb6f8a759a3141e7bf8b988f0d3610f5e1deba86d4c3a98b55ff953eae->leave($__internal_874c74bb6f8a759a3141e7bf8b988f0d3610f5e1deba86d4c3a98b55ff953eae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
