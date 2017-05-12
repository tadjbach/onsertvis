<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_37e2d6b1e479e45b336ffb18168b36e3447a61133ed892d9a6f5501e1fb4345f extends Twig_Template
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
        $__internal_dd5989499d4a2ffe6f441e67af28ffe671373c4a48c6f55a93a474895fb3982d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5989499d4a2ffe6f441e67af28ffe671373c4a48c6f55a93a474895fb3982d->enter($__internal_dd5989499d4a2ffe6f441e67af28ffe671373c4a48c6f55a93a474895fb3982d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_dc8f446acbc5b38228c1690c50c3aa9d5c93f33ca3aa96f5cd1c92ba6ff9c012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8f446acbc5b38228c1690c50c3aa9d5c93f33ca3aa96f5cd1c92ba6ff9c012->enter($__internal_dc8f446acbc5b38228c1690c50c3aa9d5c93f33ca3aa96f5cd1c92ba6ff9c012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dd5989499d4a2ffe6f441e67af28ffe671373c4a48c6f55a93a474895fb3982d->leave($__internal_dd5989499d4a2ffe6f441e67af28ffe671373c4a48c6f55a93a474895fb3982d_prof);

        
        $__internal_dc8f446acbc5b38228c1690c50c3aa9d5c93f33ca3aa96f5cd1c92ba6ff9c012->leave($__internal_dc8f446acbc5b38228c1690c50c3aa9d5c93f33ca3aa96f5cd1c92ba6ff9c012_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
