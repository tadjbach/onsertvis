<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5d6bb839a2a0a8914a335e36fc5dcb2f30f0311be0fd8a15cfefcc13f228235c extends Twig_Template
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
        $__internal_14ed179ae1772ed9c1fa61e8cd217dd0c09e374555fe21c2f7543a8aadad6cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ed179ae1772ed9c1fa61e8cd217dd0c09e374555fe21c2f7543a8aadad6cfb->enter($__internal_14ed179ae1772ed9c1fa61e8cd217dd0c09e374555fe21c2f7543a8aadad6cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_83120338a6ece0cd5b0bf499d6605dc85240729ae02341f5e2c136f4e65774d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83120338a6ece0cd5b0bf499d6605dc85240729ae02341f5e2c136f4e65774d5->enter($__internal_83120338a6ece0cd5b0bf499d6605dc85240729ae02341f5e2c136f4e65774d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_14ed179ae1772ed9c1fa61e8cd217dd0c09e374555fe21c2f7543a8aadad6cfb->leave($__internal_14ed179ae1772ed9c1fa61e8cd217dd0c09e374555fe21c2f7543a8aadad6cfb_prof);

        
        $__internal_83120338a6ece0cd5b0bf499d6605dc85240729ae02341f5e2c136f4e65774d5->leave($__internal_83120338a6ece0cd5b0bf499d6605dc85240729ae02341f5e2c136f4e65774d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
