<?php

/* SEPlatformBundle:Default:index.html.twig */
class __TwigTemplate_54514440395716820e2b6f7298a29a5d5d782751d6d1c1748f66127982c4f6f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SEPlatformBundle::layout.html.twig", "SEPlatformBundle:Default:index.html.twig", 3);
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
        $__internal_221f8be5e70bdd87c8ec674ce6439983969ba0dbf8fc4c079d8006e6852900e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221f8be5e70bdd87c8ec674ce6439983969ba0dbf8fc4c079d8006e6852900e6->enter($__internal_221f8be5e70bdd87c8ec674ce6439983969ba0dbf8fc4c079d8006e6852900e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:index.html.twig"));

        $__internal_43fc52438a2f8e9dd3fcf2fe0f0591e1f142559e9d17f94a6a67a256f871fbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fc52438a2f8e9dd3fcf2fe0f0591e1f142559e9d17f94a6a67a256f871fbef->enter($__internal_43fc52438a2f8e9dd3fcf2fe0f0591e1f142559e9d17f94a6a67a256f871fbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_221f8be5e70bdd87c8ec674ce6439983969ba0dbf8fc4c079d8006e6852900e6->leave($__internal_221f8be5e70bdd87c8ec674ce6439983969ba0dbf8fc4c079d8006e6852900e6_prof);

        
        $__internal_43fc52438a2f8e9dd3fcf2fe0f0591e1f142559e9d17f94a6a67a256f871fbef->leave($__internal_43fc52438a2f8e9dd3fcf2fe0f0591e1f142559e9d17f94a6a67a256f871fbef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e40dfac9e9c126c72a2b310a6462320e89810330ef936a2cdf4d95ca127a0499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40dfac9e9c126c72a2b310a6462320e89810330ef936a2cdf4d95ca127a0499->enter($__internal_e40dfac9e9c126c72a2b310a6462320e89810330ef936a2cdf4d95ca127a0499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_617f7b02f1fb4d929eea4784171851525f9ef4676194240f2f426f76e415ed1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617f7b02f1fb4d929eea4784171851525f9ef4676194240f2f426f76e415ed1a->enter($__internal_617f7b02f1fb4d929eea4784171851525f9ef4676194240f2f426f76e415ed1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Le bon service au bon prix
";
        
        $__internal_617f7b02f1fb4d929eea4784171851525f9ef4676194240f2f426f76e415ed1a->leave($__internal_617f7b02f1fb4d929eea4784171851525f9ef4676194240f2f426f76e415ed1a_prof);

        
        $__internal_e40dfac9e9c126c72a2b310a6462320e89810330ef936a2cdf4d95ca127a0499->leave($__internal_e40dfac9e9c126c72a2b310a6462320e89810330ef936a2cdf4d95ca127a0499_prof);

    }

    // line 9
    public function block_layout_header2($context, array $blocks = array())
    {
        $__internal_198718aa67aaace67ce241d44e46b9d5915e93d0948a0257ba54b1868bbcada4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198718aa67aaace67ce241d44e46b9d5915e93d0948a0257ba54b1868bbcada4->enter($__internal_198718aa67aaace67ce241d44e46b9d5915e93d0948a0257ba54b1868bbcada4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        $__internal_4906ad2a1f0744eb1da66f35ec3beb22b6b2c873ac7fb069a05de11275964dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4906ad2a1f0744eb1da66f35ec3beb22b6b2c873ac7fb069a05de11275964dc6->enter($__internal_4906ad2a1f0744eb1da66f35ec3beb22b6b2c873ac7fb069a05de11275964dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        // line 10
        echo "      <div class=\"slogan\"><p>Le bon service au bon prix !</p></div>
    
      <div class=\"col-md-6\">
          <h3 class=\"cat-title\">Vous cherchez une aide ?</h3>
          <h4>
              <span class=\"label label-default se-badge\">1</span>
              <a class=\"slogan-link\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("se_platform_advert_add");
        echo "\">Postez votre demande</a>
          </h4>
          <h4><span class=\"label label-default se-badge\">2</span> Recevez des offres</h4>
          <h4><span class=\"label label-default se-badge\">3</span> Choisissez la meilleure offre</h4>
      </div>
      <div class=\"col-md-6\">
          <h3 class=\"cat-title\">Vous proposez vos services ?</h3>
          <h4>
              <span class=\"label label-default se-badge\">1</span>
              <a class=\"slogan-link\" href=\"#\">Inscrivez vous</a>
          </h4>
          <h4><span class=\"label label-default se-badge\">2</span> Proposez des offres et gagnez</h4>
          <h4><span class=\"label label-default se-badge\">3</span> Retrouver le demandeur</h4>
      </div>
";
        
        $__internal_4906ad2a1f0744eb1da66f35ec3beb22b6b2c873ac7fb069a05de11275964dc6->leave($__internal_4906ad2a1f0744eb1da66f35ec3beb22b6b2c873ac7fb069a05de11275964dc6_prof);

        
        $__internal_198718aa67aaace67ce241d44e46b9d5915e93d0948a0257ba54b1868bbcada4->leave($__internal_198718aa67aaace67ce241d44e46b9d5915e93d0948a0257ba54b1868bbcada4_prof);

    }

    // line 32
    public function block_layout_body($context, array $blocks = array())
    {
        $__internal_b68c473c85f5ef9eb16ea1ca35d634e0e9908ee1906915ec203357b7cb1c6c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68c473c85f5ef9eb16ea1ca35d634e0e9908ee1906915ec203357b7cb1c6c5a->enter($__internal_b68c473c85f5ef9eb16ea1ca35d634e0e9908ee1906915ec203357b7cb1c6c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_1077a4e6def727876be1850ccb03871efd9f268f03605050a17066266c0406e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1077a4e6def727876be1850ccb03871efd9f268f03605050a17066266c0406e0->enter($__internal_1077a4e6def727876be1850ccb03871efd9f268f03605050a17066266c0406e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        // line 33
        echo "<div class=\"row\">
  <!-- CATGEORY - CARTE DE FRANCE -->
  <div class=\"col-md-4\">
      <h4 class=\"cat-title\">Par Catégories</h4>
      <ul class=\"ul-cat\">
      </ul>
      <div class=\"seprate-white\"></div>
      <h4 class=\"cat-title\">Par Régions</h4>
      <ul class=\"ul-cat\">
      </ul>
  </div>
  <div class=\"col-md-8 text-center\">
      <div id=\"tip\" style='display:none'></div>
      <div id=\"cmap\"></div>
  </div>
</div>
";
        
        $__internal_1077a4e6def727876be1850ccb03871efd9f268f03605050a17066266c0406e0->leave($__internal_1077a4e6def727876be1850ccb03871efd9f268f03605050a17066266c0406e0_prof);

        
        $__internal_b68c473c85f5ef9eb16ea1ca35d634e0e9908ee1906915ec203357b7cb1c6c5a->leave($__internal_b68c473c85f5ef9eb16ea1ca35d634e0e9908ee1906915ec203357b7cb1c6c5a_prof);

    }

    public function getTemplateName()
    {
        return "SEPlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  106 => 32,  81 => 16,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends \"SEPlatformBundle::layout.html.twig\" %}

{% block title %}
    {{ parent() }} - Le bon service au bon prix
{% endblock %}

{% block layout_header2 %}
      <div class=\"slogan\"><p>Le bon service au bon prix !</p></div>
    
      <div class=\"col-md-6\">
          <h3 class=\"cat-title\">Vous cherchez une aide ?</h3>
          <h4>
              <span class=\"label label-default se-badge\">1</span>
              <a class=\"slogan-link\" href=\"{{ path('se_platform_advert_add') }}\">Postez votre demande</a>
          </h4>
          <h4><span class=\"label label-default se-badge\">2</span> Recevez des offres</h4>
          <h4><span class=\"label label-default se-badge\">3</span> Choisissez la meilleure offre</h4>
      </div>
      <div class=\"col-md-6\">
          <h3 class=\"cat-title\">Vous proposez vos services ?</h3>
          <h4>
              <span class=\"label label-default se-badge\">1</span>
              <a class=\"slogan-link\" href=\"#\">Inscrivez vous</a>
          </h4>
          <h4><span class=\"label label-default se-badge\">2</span> Proposez des offres et gagnez</h4>
          <h4><span class=\"label label-default se-badge\">3</span> Retrouver le demandeur</h4>
      </div>
{% endblock %}

{% block layout_body %}
<div class=\"row\">
  <!-- CATGEORY - CARTE DE FRANCE -->
  <div class=\"col-md-4\">
      <h4 class=\"cat-title\">Par Catégories</h4>
      <ul class=\"ul-cat\">
      </ul>
      <div class=\"seprate-white\"></div>
      <h4 class=\"cat-title\">Par Régions</h4>
      <ul class=\"ul-cat\">
      </ul>
  </div>
  <div class=\"col-md-8 text-center\">
      <div id=\"tip\" style='display:none'></div>
      <div id=\"cmap\"></div>
  </div>
</div>
{% endblock %}
", "SEPlatformBundle:Default:index.html.twig", "/Users/bach_tadj/www/onsertvis/SE/src/SE/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
