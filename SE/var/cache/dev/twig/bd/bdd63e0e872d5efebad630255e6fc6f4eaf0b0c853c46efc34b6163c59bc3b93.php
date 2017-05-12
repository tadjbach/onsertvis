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
        $__internal_ef4db3a895f770e6e59e17aa75972522ae613e8a94989eeb56f49e5d840993a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4db3a895f770e6e59e17aa75972522ae613e8a94989eeb56f49e5d840993a7->enter($__internal_ef4db3a895f770e6e59e17aa75972522ae613e8a94989eeb56f49e5d840993a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a9ab33fb06f30d6fac3b46e8877ec1d9e6d644e17fdda6e107e1783559171570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ab33fb06f30d6fac3b46e8877ec1d9e6d644e17fdda6e107e1783559171570->enter($__internal_a9ab33fb06f30d6fac3b46e8877ec1d9e6d644e17fdda6e107e1783559171570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef4db3a895f770e6e59e17aa75972522ae613e8a94989eeb56f49e5d840993a7->leave($__internal_ef4db3a895f770e6e59e17aa75972522ae613e8a94989eeb56f49e5d840993a7_prof);

        
        $__internal_a9ab33fb06f30d6fac3b46e8877ec1d9e6d644e17fdda6e107e1783559171570->leave($__internal_a9ab33fb06f30d6fac3b46e8877ec1d9e6d644e17fdda6e107e1783559171570_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_af8f37ee091bfa72de58e24a0de6266afd252cb53997015ca90a9f195564378d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8f37ee091bfa72de58e24a0de6266afd252cb53997015ca90a9f195564378d->enter($__internal_af8f37ee091bfa72de58e24a0de6266afd252cb53997015ca90a9f195564378d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_88f11f07fe7808ba052f31e792728cbb9c29cf59e6edec28ffd92e143b9c59dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f11f07fe7808ba052f31e792728cbb9c29cf59e6edec28ffd92e143b9c59dd->enter($__internal_88f11f07fe7808ba052f31e792728cbb9c29cf59e6edec28ffd92e143b9c59dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_88f11f07fe7808ba052f31e792728cbb9c29cf59e6edec28ffd92e143b9c59dd->leave($__internal_88f11f07fe7808ba052f31e792728cbb9c29cf59e6edec28ffd92e143b9c59dd_prof);

        
        $__internal_af8f37ee091bfa72de58e24a0de6266afd252cb53997015ca90a9f195564378d->leave($__internal_af8f37ee091bfa72de58e24a0de6266afd252cb53997015ca90a9f195564378d_prof);

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
