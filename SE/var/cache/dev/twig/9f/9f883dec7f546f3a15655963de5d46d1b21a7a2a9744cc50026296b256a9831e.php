<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a2962e0bc332439165087d82d424f9ab89a831a96d185b1da56608ada1667f7a extends Twig_Template
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
        $__internal_95b57bf385f0d71d87a3c02ccc0a84776dcba2798ed46627e7e879d682580d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b57bf385f0d71d87a3c02ccc0a84776dcba2798ed46627e7e879d682580d9e->enter($__internal_95b57bf385f0d71d87a3c02ccc0a84776dcba2798ed46627e7e879d682580d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_352b13425c63f8e4ce013c89418e410416d66a1e7be95ffa1c62cf8f1ad70f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352b13425c63f8e4ce013c89418e410416d66a1e7be95ffa1c62cf8f1ad70f92->enter($__internal_352b13425c63f8e4ce013c89418e410416d66a1e7be95ffa1c62cf8f1ad70f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_95b57bf385f0d71d87a3c02ccc0a84776dcba2798ed46627e7e879d682580d9e->leave($__internal_95b57bf385f0d71d87a3c02ccc0a84776dcba2798ed46627e7e879d682580d9e_prof);

        
        $__internal_352b13425c63f8e4ce013c89418e410416d66a1e7be95ffa1c62cf8f1ad70f92->leave($__internal_352b13425c63f8e4ce013c89418e410416d66a1e7be95ffa1c62cf8f1ad70f92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
