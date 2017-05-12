<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2eff544ccf817e726e5d29d9d78d9ce3b3cea1355772dc5e0929c778b0f020a8 extends Twig_Template
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
        $__internal_2d1b0d99b7341717726673326c1b32f6443d1f002fa5030ebde46d77b5df29f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1b0d99b7341717726673326c1b32f6443d1f002fa5030ebde46d77b5df29f4->enter($__internal_2d1b0d99b7341717726673326c1b32f6443d1f002fa5030ebde46d77b5df29f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_dfa8925adb7c54778896afc43e6bbac843e51ed099e6aed9a8dd603c328167f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa8925adb7c54778896afc43e6bbac843e51ed099e6aed9a8dd603c328167f8->enter($__internal_dfa8925adb7c54778896afc43e6bbac843e51ed099e6aed9a8dd603c328167f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2d1b0d99b7341717726673326c1b32f6443d1f002fa5030ebde46d77b5df29f4->leave($__internal_2d1b0d99b7341717726673326c1b32f6443d1f002fa5030ebde46d77b5df29f4_prof);

        
        $__internal_dfa8925adb7c54778896afc43e6bbac843e51ed099e6aed9a8dd603c328167f8->leave($__internal_dfa8925adb7c54778896afc43e6bbac843e51ed099e6aed9a8dd603c328167f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
