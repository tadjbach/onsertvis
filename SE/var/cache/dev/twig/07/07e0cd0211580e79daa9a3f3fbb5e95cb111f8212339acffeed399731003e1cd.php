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
        $__internal_fa6955db7b200f5a1fe0239f5f52a827cd0c5bb4ea82ad215ece8957423f89f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6955db7b200f5a1fe0239f5f52a827cd0c5bb4ea82ad215ece8957423f89f1->enter($__internal_fa6955db7b200f5a1fe0239f5f52a827cd0c5bb4ea82ad215ece8957423f89f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2a38c2662a205774a7ad78ef1edb67fad14f3f53cd613608258187f73bafa902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a38c2662a205774a7ad78ef1edb67fad14f3f53cd613608258187f73bafa902->enter($__internal_2a38c2662a205774a7ad78ef1edb67fad14f3f53cd613608258187f73bafa902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fa6955db7b200f5a1fe0239f5f52a827cd0c5bb4ea82ad215ece8957423f89f1->leave($__internal_fa6955db7b200f5a1fe0239f5f52a827cd0c5bb4ea82ad215ece8957423f89f1_prof);

        
        $__internal_2a38c2662a205774a7ad78ef1edb67fad14f3f53cd613608258187f73bafa902->leave($__internal_2a38c2662a205774a7ad78ef1edb67fad14f3f53cd613608258187f73bafa902_prof);

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
