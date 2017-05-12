<?php

/* SEPlatformBundle:Default:help.html.twig */
class __TwigTemplate_0186ae4fdc168583099dae031286126c56abc2906371e5336517cc13c476fc20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SEPlatformBundle::layout.html.twig", "SEPlatformBundle:Default:help.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'layout_header2' => array($this, 'block_layout_header2'),
            'layout_body' => array($this, 'block_layout_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SEPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e63dc5283a28a3ea662bb90b1dcf8778de77450cd5f76b77337450678b3cdb27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63dc5283a28a3ea662bb90b1dcf8778de77450cd5f76b77337450678b3cdb27->enter($__internal_e63dc5283a28a3ea662bb90b1dcf8778de77450cd5f76b77337450678b3cdb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:help.html.twig"));

        $__internal_5783f5b9e8980f78fd329f881c885de4baf1c7a36ab70b9ac066bfe7aac2521a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5783f5b9e8980f78fd329f881c885de4baf1c7a36ab70b9ac066bfe7aac2521a->enter($__internal_5783f5b9e8980f78fd329f881c885de4baf1c7a36ab70b9ac066bfe7aac2521a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:help.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63dc5283a28a3ea662bb90b1dcf8778de77450cd5f76b77337450678b3cdb27->leave($__internal_e63dc5283a28a3ea662bb90b1dcf8778de77450cd5f76b77337450678b3cdb27_prof);

        
        $__internal_5783f5b9e8980f78fd329f881c885de4baf1c7a36ab70b9ac066bfe7aac2521a->leave($__internal_5783f5b9e8980f78fd329f881c885de4baf1c7a36ab70b9ac066bfe7aac2521a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64a829e0b14cb2c7e89341b910c5fae47116f088f0c9cebc7a28375dd338ae45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a829e0b14cb2c7e89341b910c5fae47116f088f0c9cebc7a28375dd338ae45->enter($__internal_64a829e0b14cb2c7e89341b910c5fae47116f088f0c9cebc7a28375dd338ae45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7d1a7232bfacee8d32ba2bbd6946b211df8bcc7fd7e5ade319fcb053c279765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d1a7232bfacee8d32ba2bbd6946b211df8bcc7fd7e5ade319fcb053c279765->enter($__internal_a7d1a7232bfacee8d32ba2bbd6946b211df8bcc7fd7e5ade319fcb053c279765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Aide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a7d1a7232bfacee8d32ba2bbd6946b211df8bcc7fd7e5ade319fcb053c279765->leave($__internal_a7d1a7232bfacee8d32ba2bbd6946b211df8bcc7fd7e5ade319fcb053c279765_prof);

        
        $__internal_64a829e0b14cb2c7e89341b910c5fae47116f088f0c9cebc7a28375dd338ae45->leave($__internal_64a829e0b14cb2c7e89341b910c5fae47116f088f0c9cebc7a28375dd338ae45_prof);

    }

    // line 7
    public function block_layout_header2($context, array $blocks = array())
    {
        $__internal_3eccc85e3d43ff0784720a191edf8a62a0de49e56ec317be8bbb2122bf9ee061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eccc85e3d43ff0784720a191edf8a62a0de49e56ec317be8bbb2122bf9ee061->enter($__internal_3eccc85e3d43ff0784720a191edf8a62a0de49e56ec317be8bbb2122bf9ee061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        $__internal_953a2cff5ffe218660595665aa0d846a8bba047d2e5ffdabd6b325809e383352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953a2cff5ffe218660595665aa0d846a8bba047d2e5ffdabd6b325809e383352->enter($__internal_953a2cff5ffe218660595665aa0d846a8bba047d2e5ffdabd6b325809e383352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        // line 8
        echo "  <div class=\"col-md-12\">
      <h3 class=\"cat-title\">Aide</h3>
  </div>
";
        
        $__internal_953a2cff5ffe218660595665aa0d846a8bba047d2e5ffdabd6b325809e383352->leave($__internal_953a2cff5ffe218660595665aa0d846a8bba047d2e5ffdabd6b325809e383352_prof);

        
        $__internal_3eccc85e3d43ff0784720a191edf8a62a0de49e56ec317be8bbb2122bf9ee061->leave($__internal_3eccc85e3d43ff0784720a191edf8a62a0de49e56ec317be8bbb2122bf9ee061_prof);

    }

    // line 13
    public function block_layout_body($context, array $blocks = array())
    {
        $__internal_0ef5abcea9bc48462b3bd86904fb822d44cbb4ef9e8606340b4cb634b243e5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef5abcea9bc48462b3bd86904fb822d44cbb4ef9e8606340b4cb634b243e5a2->enter($__internal_0ef5abcea9bc48462b3bd86904fb822d44cbb4ef9e8606340b4cb634b243e5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_488bedc74094c5454c23787c1773585fa0f517d6cd30cfdc797ae1acfdced3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488bedc74094c5454c23787c1773585fa0f517d6cd30cfdc797ae1acfdced3e0->enter($__internal_488bedc74094c5454c23787c1773585fa0f517d6cd30cfdc797ae1acfdced3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        // line 14
        echo "
      <div class=\"row\">
           <div id=\"content\" class=\"col-md-12\">
              <div class=\"col-md-2\" >
              </div>
              <div class=\"col-md-8\" >

              </div>
              <div class=\"col-md-2\" >
              </div>
          </div>
      </div>

";
        
        $__internal_488bedc74094c5454c23787c1773585fa0f517d6cd30cfdc797ae1acfdced3e0->leave($__internal_488bedc74094c5454c23787c1773585fa0f517d6cd30cfdc797ae1acfdced3e0_prof);

        
        $__internal_0ef5abcea9bc48462b3bd86904fb822d44cbb4ef9e8606340b4cb634b243e5a2->leave($__internal_0ef5abcea9bc48462b3bd86904fb822d44cbb4ef9e8606340b4cb634b243e5a2_prof);

    }

    public function getTemplateName()
    {
        return "SEPlatformBundle:Default:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  86 => 13,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SEPlatformBundle::layout.html.twig\" %}

{% block title %}
    Aide - {{ parent() }}
{% endblock %}

{% block layout_header2 %}
  <div class=\"col-md-12\">
      <h3 class=\"cat-title\">Aide</h3>
  </div>
{% endblock %}

{% block layout_body %}

      <div class=\"row\">
           <div id=\"content\" class=\"col-md-12\">
              <div class=\"col-md-2\" >
              </div>
              <div class=\"col-md-8\" >

              </div>
              <div class=\"col-md-2\" >
              </div>
          </div>
      </div>

{% endblock %}
", "SEPlatformBundle:Default:help.html.twig", "/Users/bach_tadj/www/onsertvis/SE/src/SE/PlatformBundle/Resources/views/Default/help.html.twig");
    }
}
