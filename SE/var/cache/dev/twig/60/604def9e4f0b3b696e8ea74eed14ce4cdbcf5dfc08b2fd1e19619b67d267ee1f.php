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
        $__internal_86e9209a40585ef88cefa4cbb166c112cd0c32044ab64482db2211df8f2f6657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e9209a40585ef88cefa4cbb166c112cd0c32044ab64482db2211df8f2f6657->enter($__internal_86e9209a40585ef88cefa4cbb166c112cd0c32044ab64482db2211df8f2f6657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_972be5fa1c111b6de5ad2f864feb32e128094673ffe691920d27c8116a0e93e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972be5fa1c111b6de5ad2f864feb32e128094673ffe691920d27c8116a0e93e3->enter($__internal_972be5fa1c111b6de5ad2f864feb32e128094673ffe691920d27c8116a0e93e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_86e9209a40585ef88cefa4cbb166c112cd0c32044ab64482db2211df8f2f6657->leave($__internal_86e9209a40585ef88cefa4cbb166c112cd0c32044ab64482db2211df8f2f6657_prof);

        
        $__internal_972be5fa1c111b6de5ad2f864feb32e128094673ffe691920d27c8116a0e93e3->leave($__internal_972be5fa1c111b6de5ad2f864feb32e128094673ffe691920d27c8116a0e93e3_prof);

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
