<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2ec45baad8a9b5b0b9843288b53f8e023e2378e47a88b5e1bd185e463192940c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dc5c0766b6a2bd9ae1edacfa84bef05ed0c45083a40b8e7daf582a24b929746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc5c0766b6a2bd9ae1edacfa84bef05ed0c45083a40b8e7daf582a24b929746->enter($__internal_2dc5c0766b6a2bd9ae1edacfa84bef05ed0c45083a40b8e7daf582a24b929746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4de23248ea5d3b8719d9a94ca4197ceaba168b4eccea7543c18d84becde6d133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de23248ea5d3b8719d9a94ca4197ceaba168b4eccea7543c18d84becde6d133->enter($__internal_4de23248ea5d3b8719d9a94ca4197ceaba168b4eccea7543c18d84becde6d133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2dc5c0766b6a2bd9ae1edacfa84bef05ed0c45083a40b8e7daf582a24b929746->leave($__internal_2dc5c0766b6a2bd9ae1edacfa84bef05ed0c45083a40b8e7daf582a24b929746_prof);

        
        $__internal_4de23248ea5d3b8719d9a94ca4197ceaba168b4eccea7543c18d84becde6d133->leave($__internal_4de23248ea5d3b8719d9a94ca4197ceaba168b4eccea7543c18d84becde6d133_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1918f76967dc28e139cea14ff0ba93a317b4316164268e0c3967cfd31ad62a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1918f76967dc28e139cea14ff0ba93a317b4316164268e0c3967cfd31ad62a7d->enter($__internal_1918f76967dc28e139cea14ff0ba93a317b4316164268e0c3967cfd31ad62a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43b441e1cd57f347f4ab99e45829fa1638541208ebe0b3482dcdd12c6990cfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b441e1cd57f347f4ab99e45829fa1638541208ebe0b3482dcdd12c6990cfc8->enter($__internal_43b441e1cd57f347f4ab99e45829fa1638541208ebe0b3482dcdd12c6990cfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_43b441e1cd57f347f4ab99e45829fa1638541208ebe0b3482dcdd12c6990cfc8->leave($__internal_43b441e1cd57f347f4ab99e45829fa1638541208ebe0b3482dcdd12c6990cfc8_prof);

        
        $__internal_1918f76967dc28e139cea14ff0ba93a317b4316164268e0c3967cfd31ad62a7d->leave($__internal_1918f76967dc28e139cea14ff0ba93a317b4316164268e0c3967cfd31ad62a7d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
