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
        $__internal_b59c6e256afdeb1abef713698e3adc7c19cd49837c812d94b0a16f54f2b7a6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59c6e256afdeb1abef713698e3adc7c19cd49837c812d94b0a16f54f2b7a6e5->enter($__internal_b59c6e256afdeb1abef713698e3adc7c19cd49837c812d94b0a16f54f2b7a6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_56e33f122ccd2e6a3494d9ad4b1f4464b3a43b07f9c324c7027de49257d289cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e33f122ccd2e6a3494d9ad4b1f4464b3a43b07f9c324c7027de49257d289cf->enter($__internal_56e33f122ccd2e6a3494d9ad4b1f4464b3a43b07f9c324c7027de49257d289cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b59c6e256afdeb1abef713698e3adc7c19cd49837c812d94b0a16f54f2b7a6e5->leave($__internal_b59c6e256afdeb1abef713698e3adc7c19cd49837c812d94b0a16f54f2b7a6e5_prof);

        
        $__internal_56e33f122ccd2e6a3494d9ad4b1f4464b3a43b07f9c324c7027de49257d289cf->leave($__internal_56e33f122ccd2e6a3494d9ad4b1f4464b3a43b07f9c324c7027de49257d289cf_prof);

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
