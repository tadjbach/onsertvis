<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_db9287946f6f94b22896d46a2f8b509d370f2fe1849ba969f04a7622465f3386 extends Twig_Template
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
        $__internal_f5b24157a83e1cef5ca0be4e8733006701ec0a07eb30258d27204c42d0340025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b24157a83e1cef5ca0be4e8733006701ec0a07eb30258d27204c42d0340025->enter($__internal_f5b24157a83e1cef5ca0be4e8733006701ec0a07eb30258d27204c42d0340025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ff2732dcc460390275074ed37d758456481a5bb9a08a78789c0b1447d78c967f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2732dcc460390275074ed37d758456481a5bb9a08a78789c0b1447d78c967f->enter($__internal_ff2732dcc460390275074ed37d758456481a5bb9a08a78789c0b1447d78c967f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f5b24157a83e1cef5ca0be4e8733006701ec0a07eb30258d27204c42d0340025->leave($__internal_f5b24157a83e1cef5ca0be4e8733006701ec0a07eb30258d27204c42d0340025_prof);

        
        $__internal_ff2732dcc460390275074ed37d758456481a5bb9a08a78789c0b1447d78c967f->leave($__internal_ff2732dcc460390275074ed37d758456481a5bb9a08a78789c0b1447d78c967f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
