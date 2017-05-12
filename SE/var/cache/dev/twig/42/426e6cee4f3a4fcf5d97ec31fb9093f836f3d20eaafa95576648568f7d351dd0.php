<?php

/* SEPlatformBundle:Default:resum.html.twig */
class __TwigTemplate_34583fe8755d68824af9ff449b911a8168260e0e106ce259872c59e4a86ccee3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SEPlatformBundle::layout.html.twig", "SEPlatformBundle:Default:resum.html.twig", 1);
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
        $__internal_a4fc31e30660db643116fd67928c834726c169244edf561ecf354323d8ae8361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fc31e30660db643116fd67928c834726c169244edf561ecf354323d8ae8361->enter($__internal_a4fc31e30660db643116fd67928c834726c169244edf561ecf354323d8ae8361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:resum.html.twig"));

        $__internal_0af843fb103f49fd84147e8f2731ad76388053b79f8727f532f14cad9ff7a5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af843fb103f49fd84147e8f2731ad76388053b79f8727f532f14cad9ff7a5fd->enter($__internal_0af843fb103f49fd84147e8f2731ad76388053b79f8727f532f14cad9ff7a5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:resum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4fc31e30660db643116fd67928c834726c169244edf561ecf354323d8ae8361->leave($__internal_a4fc31e30660db643116fd67928c834726c169244edf561ecf354323d8ae8361_prof);

        
        $__internal_0af843fb103f49fd84147e8f2731ad76388053b79f8727f532f14cad9ff7a5fd->leave($__internal_0af843fb103f49fd84147e8f2731ad76388053b79f8727f532f14cad9ff7a5fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57698962489df8d5a43aef182948659f73d2d9213d527af01238e5001650a0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57698962489df8d5a43aef182948659f73d2d9213d527af01238e5001650a0cc->enter($__internal_57698962489df8d5a43aef182948659f73d2d9213d527af01238e5001650a0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_db4202f983221029e0c682408046f89da28f6523cd2db11d218c93646bd6d45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4202f983221029e0c682408046f89da28f6523cd2db11d218c93646bd6d45e->enter($__internal_db4202f983221029e0c682408046f89da28f6523cd2db11d218c93646bd6d45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Qui sommes-nous ? - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_db4202f983221029e0c682408046f89da28f6523cd2db11d218c93646bd6d45e->leave($__internal_db4202f983221029e0c682408046f89da28f6523cd2db11d218c93646bd6d45e_prof);

        
        $__internal_57698962489df8d5a43aef182948659f73d2d9213d527af01238e5001650a0cc->leave($__internal_57698962489df8d5a43aef182948659f73d2d9213d527af01238e5001650a0cc_prof);

    }

    // line 7
    public function block_layout_header2($context, array $blocks = array())
    {
        $__internal_04a902442b724886ccad69c2fe0b8932399370b234313bc7dcb05c471492bfa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a902442b724886ccad69c2fe0b8932399370b234313bc7dcb05c471492bfa5->enter($__internal_04a902442b724886ccad69c2fe0b8932399370b234313bc7dcb05c471492bfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        $__internal_f25ea724a2d2bad3cdbb792176fcf605569c2d6a5261a12ac5b102adcd879934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25ea724a2d2bad3cdbb792176fcf605569c2d6a5261a12ac5b102adcd879934->enter($__internal_f25ea724a2d2bad3cdbb792176fcf605569c2d6a5261a12ac5b102adcd879934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        // line 8
        echo "  <div class=\"col-md-12\">
      <h3 class=\"cat-title\">Qui sommes nous?</h3>
  </div>
";
        
        $__internal_f25ea724a2d2bad3cdbb792176fcf605569c2d6a5261a12ac5b102adcd879934->leave($__internal_f25ea724a2d2bad3cdbb792176fcf605569c2d6a5261a12ac5b102adcd879934_prof);

        
        $__internal_04a902442b724886ccad69c2fe0b8932399370b234313bc7dcb05c471492bfa5->leave($__internal_04a902442b724886ccad69c2fe0b8932399370b234313bc7dcb05c471492bfa5_prof);

    }

    // line 12
    public function block_layout_body($context, array $blocks = array())
    {
        $__internal_cf51198fb50301c04b7d08814968c3bee3d7cbba95dee556567dd5bb68325336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf51198fb50301c04b7d08814968c3bee3d7cbba95dee556567dd5bb68325336->enter($__internal_cf51198fb50301c04b7d08814968c3bee3d7cbba95dee556567dd5bb68325336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_5a9b27858e0adb0ed5fc895affc19333a484fff0161bfb18aef34ae14885f8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9b27858e0adb0ed5fc895affc19333a484fff0161bfb18aef34ae14885f8ad->enter($__internal_5a9b27858e0adb0ed5fc895affc19333a484fff0161bfb18aef34ae14885f8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        // line 13
        echo "<div class=\"row\">
     <div id=\"content\" class=\"col-md-12\">
        <div class=\"col-md-2\" >
        </div>
        <div class=\"col-md-8\" >
            <h2>ServiceEnchère SARL</h2>
            <p>Société à responsabilité limitée<br>
                Société en cour d'immatriculation</p>
            <p>Le Directeur de Publication de <a class=\"contact\" href=\"http://www.serviceenchere.fr\">www.serviceenchere.fr</a>
                est Monsieur Bachir TADJER.</p>
            <p>Contact :
            <a class=\"contact\" href=\"mailto:contact@serviceenchere.fr\">contact@serviceenchere.fr</a>
            </p>
            <h2>Hébergement</h2>
            <p>
                Le site <a class=\"contact\" href=\"http://www.serviceenchere.fr\">www.serviceenchere.fr</a> est hébergé par la société OVH
                <br>
                RCS Lille Métropole 424 761 419 00045
                Siège social : 2 rue Kellermann - 59100 Roubaix - France.
            </p>
        </div>
    </div>
  </div>
";
        
        $__internal_5a9b27858e0adb0ed5fc895affc19333a484fff0161bfb18aef34ae14885f8ad->leave($__internal_5a9b27858e0adb0ed5fc895affc19333a484fff0161bfb18aef34ae14885f8ad_prof);

        
        $__internal_cf51198fb50301c04b7d08814968c3bee3d7cbba95dee556567dd5bb68325336->leave($__internal_cf51198fb50301c04b7d08814968c3bee3d7cbba95dee556567dd5bb68325336_prof);

    }

    public function getTemplateName()
    {
        return "SEPlatformBundle:Default:resum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  86 => 12,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Qui sommes-nous ? - {{ parent() }}
{% endblock %}

{% block layout_header2 %}
  <div class=\"col-md-12\">
      <h3 class=\"cat-title\">Qui sommes nous?</h3>
  </div>
{% endblock %}
{% block layout_body %}
<div class=\"row\">
     <div id=\"content\" class=\"col-md-12\">
        <div class=\"col-md-2\" >
        </div>
        <div class=\"col-md-8\" >
            <h2>ServiceEnchère SARL</h2>
            <p>Société à responsabilité limitée<br>
                Société en cour d'immatriculation</p>
            <p>Le Directeur de Publication de <a class=\"contact\" href=\"http://www.serviceenchere.fr\">www.serviceenchere.fr</a>
                est Monsieur Bachir TADJER.</p>
            <p>Contact :
            <a class=\"contact\" href=\"mailto:contact@serviceenchere.fr\">contact@serviceenchere.fr</a>
            </p>
            <h2>Hébergement</h2>
            <p>
                Le site <a class=\"contact\" href=\"http://www.serviceenchere.fr\">www.serviceenchere.fr</a> est hébergé par la société OVH
                <br>
                RCS Lille Métropole 424 761 419 00045
                Siège social : 2 rue Kellermann - 59100 Roubaix - France.
            </p>
        </div>
    </div>
  </div>
{% endblock %}
", "SEPlatformBundle:Default:resum.html.twig", "/Users/bach_tadj/www/onsertvis/SE/src/SE/PlatformBundle/Resources/views/Default/resum.html.twig");
    }
}
