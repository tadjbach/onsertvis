<?php

/* SEPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_35f1c1c3a0f63d00a04becb2bbda76b72296fbfbc7ad1b190071a1d103cba386 extends Twig_Template
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
        $__internal_ffb7f76f2b5fa4a9f24d27a2e0ca3e00d1aad6833fc0c0c331cf10cd4319ae55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb7f76f2b5fa4a9f24d27a2e0ca3e00d1aad6833fc0c0c331cf10cd4319ae55->enter($__internal_ffb7f76f2b5fa4a9f24d27a2e0ca3e00d1aad6833fc0c0c331cf10cd4319ae55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Advert:view.html.twig"));

        $__internal_c751b3ef6b056a31376e77cc75203a17443e45d7760058109e84da470b1c6e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c751b3ef6b056a31376e77cc75203a17443e45d7760058109e84da470b1c6e1f->enter($__internal_c751b3ef6b056a31376e77cc75203a17443e45d7760058109e84da470b1c6e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Advert:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Affichage de l'annonce ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Affichage de l'annonce n° ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
        
        <div>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "                <p>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </body>
</html>";
        
        $__internal_ffb7f76f2b5fa4a9f24d27a2e0ca3e00d1aad6833fc0c0c331cf10cd4319ae55->leave($__internal_ffb7f76f2b5fa4a9f24d27a2e0ca3e00d1aad6833fc0c0c331cf10cd4319ae55_prof);

        
        $__internal_c751b3ef6b056a31376e77cc75203a17443e45d7760058109e84da470b1c6e1f->leave($__internal_c751b3ef6b056a31376e77cc75203a17443e45d7760058109e84da470b1c6e1f_prof);

    }

    public function getTemplateName()
    {
        return "SEPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  46 => 11,  42 => 10,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>Affichage de l'annonce {{ id }}</title>
    </head>
    <body>
        <h1>Affichage de l'annonce n° {{ id }}</h1>
        
        <div>
            {% for message in app.session.flashbag.get('info') %}
                <p>{{ message }}
            {% endfor %}
        </div>
    </body>
</html>", "SEPlatformBundle:Advert:view.html.twig", "/Users/bach_tadj/www/onsertvis/SE/src/SE/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
