<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c1c7eedc8361023cbd0a5b58c0097e66e899eccd134b61a274c86a9e900b1727 extends Twig_Template
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
        $__internal_90036276ea944f473a8918a0b3a35d14cd22bc3e2d15bbbad234f9f7d90b5a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90036276ea944f473a8918a0b3a35d14cd22bc3e2d15bbbad234f9f7d90b5a7c->enter($__internal_90036276ea944f473a8918a0b3a35d14cd22bc3e2d15bbbad234f9f7d90b5a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_501ad54fa483b8f804fffd264b759f9765659e3a2158f219310403d11434f287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501ad54fa483b8f804fffd264b759f9765659e3a2158f219310403d11434f287->enter($__internal_501ad54fa483b8f804fffd264b759f9765659e3a2158f219310403d11434f287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_90036276ea944f473a8918a0b3a35d14cd22bc3e2d15bbbad234f9f7d90b5a7c->leave($__internal_90036276ea944f473a8918a0b3a35d14cd22bc3e2d15bbbad234f9f7d90b5a7c_prof);

        
        $__internal_501ad54fa483b8f804fffd264b759f9765659e3a2158f219310403d11434f287->leave($__internal_501ad54fa483b8f804fffd264b759f9765659e3a2158f219310403d11434f287_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
