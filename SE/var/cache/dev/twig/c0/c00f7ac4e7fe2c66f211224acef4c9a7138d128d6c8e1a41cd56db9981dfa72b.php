<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_571621d5270244bf66e42e97c0e327e29631da880e0e2536b9b1ac421aeac333 extends Twig_Template
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
        $__internal_e611f850691f558370804cb66c60cb932363aa2570739e9cb0f7a59e116f0ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e611f850691f558370804cb66c60cb932363aa2570739e9cb0f7a59e116f0ea6->enter($__internal_e611f850691f558370804cb66c60cb932363aa2570739e9cb0f7a59e116f0ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_07d27e6415d1cc4368875be29bc3261056c7a45e4f9e96199c056243f2bb485f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d27e6415d1cc4368875be29bc3261056c7a45e4f9e96199c056243f2bb485f->enter($__internal_07d27e6415d1cc4368875be29bc3261056c7a45e4f9e96199c056243f2bb485f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e611f850691f558370804cb66c60cb932363aa2570739e9cb0f7a59e116f0ea6->leave($__internal_e611f850691f558370804cb66c60cb932363aa2570739e9cb0f7a59e116f0ea6_prof);

        
        $__internal_07d27e6415d1cc4368875be29bc3261056c7a45e4f9e96199c056243f2bb485f->leave($__internal_07d27e6415d1cc4368875be29bc3261056c7a45e4f9e96199c056243f2bb485f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
