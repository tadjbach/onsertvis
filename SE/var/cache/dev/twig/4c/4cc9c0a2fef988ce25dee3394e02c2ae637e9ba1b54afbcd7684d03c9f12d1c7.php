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
        $__internal_7809e871c0421b5862d6dbb9b83381303b5d874abc050a3d1873911fe93936bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7809e871c0421b5862d6dbb9b83381303b5d874abc050a3d1873911fe93936bb->enter($__internal_7809e871c0421b5862d6dbb9b83381303b5d874abc050a3d1873911fe93936bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_11d4faba2e820f21481f6762ce080b987c21b0162df0925f38ba18c6815a58f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d4faba2e820f21481f6762ce080b987c21b0162df0925f38ba18c6815a58f5->enter($__internal_11d4faba2e820f21481f6762ce080b987c21b0162df0925f38ba18c6815a58f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_7809e871c0421b5862d6dbb9b83381303b5d874abc050a3d1873911fe93936bb->leave($__internal_7809e871c0421b5862d6dbb9b83381303b5d874abc050a3d1873911fe93936bb_prof);

        
        $__internal_11d4faba2e820f21481f6762ce080b987c21b0162df0925f38ba18c6815a58f5->leave($__internal_11d4faba2e820f21481f6762ce080b987c21b0162df0925f38ba18c6815a58f5_prof);

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
