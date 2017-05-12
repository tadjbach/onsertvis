<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c36bf098b45bbae56e3e3da29c311d9d2b0b635553813922a45959d6329aefd9 extends Twig_Template
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
        $__internal_154a4a9e9ba35efbe11ab3d7c4fb77cadaf4e3529d75b5a45c4bb4f9a67898b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_154a4a9e9ba35efbe11ab3d7c4fb77cadaf4e3529d75b5a45c4bb4f9a67898b7->enter($__internal_154a4a9e9ba35efbe11ab3d7c4fb77cadaf4e3529d75b5a45c4bb4f9a67898b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_03b485ac546558699b6d16586cbfca589da60f49f66adb0ccef9125ce97bf3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b485ac546558699b6d16586cbfca589da60f49f66adb0ccef9125ce97bf3bb->enter($__internal_03b485ac546558699b6d16586cbfca589da60f49f66adb0ccef9125ce97bf3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_154a4a9e9ba35efbe11ab3d7c4fb77cadaf4e3529d75b5a45c4bb4f9a67898b7->leave($__internal_154a4a9e9ba35efbe11ab3d7c4fb77cadaf4e3529d75b5a45c4bb4f9a67898b7_prof);

        
        $__internal_03b485ac546558699b6d16586cbfca589da60f49f66adb0ccef9125ce97bf3bb->leave($__internal_03b485ac546558699b6d16586cbfca589da60f49f66adb0ccef9125ce97bf3bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
