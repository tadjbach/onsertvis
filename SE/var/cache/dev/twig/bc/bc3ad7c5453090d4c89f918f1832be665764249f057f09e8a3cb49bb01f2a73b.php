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
        $__internal_39825ed4b0a8509910cb2b381555b5234b36d7e8915d120b94529c1bc81b884d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39825ed4b0a8509910cb2b381555b5234b36d7e8915d120b94529c1bc81b884d->enter($__internal_39825ed4b0a8509910cb2b381555b5234b36d7e8915d120b94529c1bc81b884d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:index.html.twig"));

        $__internal_b0a02f71f08273d82ad5389e7cecc3ca800064c0b8c52de6003dd7d56da82284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a02f71f08273d82ad5389e7cecc3ca800064c0b8c52de6003dd7d56da82284->enter($__internal_b0a02f71f08273d82ad5389e7cecc3ca800064c0b8c52de6003dd7d56da82284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39825ed4b0a8509910cb2b381555b5234b36d7e8915d120b94529c1bc81b884d->leave($__internal_39825ed4b0a8509910cb2b381555b5234b36d7e8915d120b94529c1bc81b884d_prof);

        
        $__internal_b0a02f71f08273d82ad5389e7cecc3ca800064c0b8c52de6003dd7d56da82284->leave($__internal_b0a02f71f08273d82ad5389e7cecc3ca800064c0b8c52de6003dd7d56da82284_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8869dc3c42f492d3719b0435a42dca45dcb2710fd6f2959caa752b2dceed7b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8869dc3c42f492d3719b0435a42dca45dcb2710fd6f2959caa752b2dceed7b93->enter($__internal_8869dc3c42f492d3719b0435a42dca45dcb2710fd6f2959caa752b2dceed7b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_502ed273af460352ca5a2d5dc38c969b83cae38497461851d54e6c7479475c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502ed273af460352ca5a2d5dc38c969b83cae38497461851d54e6c7479475c18->enter($__internal_502ed273af460352ca5a2d5dc38c969b83cae38497461851d54e6c7479475c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Le bon service au bon prix
";
        
        $__internal_502ed273af460352ca5a2d5dc38c969b83cae38497461851d54e6c7479475c18->leave($__internal_502ed273af460352ca5a2d5dc38c969b83cae38497461851d54e6c7479475c18_prof);

        
        $__internal_8869dc3c42f492d3719b0435a42dca45dcb2710fd6f2959caa752b2dceed7b93->leave($__internal_8869dc3c42f492d3719b0435a42dca45dcb2710fd6f2959caa752b2dceed7b93_prof);

    }

    // line 9
    public function block_layout_header2($context, array $blocks = array())
    {
        $__internal_1aad341ea8d57017f38055d3ac2fb54bfefeb1682d6cc3397ad2ac67558f8abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aad341ea8d57017f38055d3ac2fb54bfefeb1682d6cc3397ad2ac67558f8abb->enter($__internal_1aad341ea8d57017f38055d3ac2fb54bfefeb1682d6cc3397ad2ac67558f8abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        $__internal_8f1984f34b33099df4f2e37266209a7f164ffd86842ebbbbe139c9043671ac8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1984f34b33099df4f2e37266209a7f164ffd86842ebbbbe139c9043671ac8c->enter($__internal_8f1984f34b33099df4f2e37266209a7f164ffd86842ebbbbe139c9043671ac8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

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
        
        $__internal_8f1984f34b33099df4f2e37266209a7f164ffd86842ebbbbe139c9043671ac8c->leave($__internal_8f1984f34b33099df4f2e37266209a7f164ffd86842ebbbbe139c9043671ac8c_prof);

        
        $__internal_1aad341ea8d57017f38055d3ac2fb54bfefeb1682d6cc3397ad2ac67558f8abb->leave($__internal_1aad341ea8d57017f38055d3ac2fb54bfefeb1682d6cc3397ad2ac67558f8abb_prof);

    }

    // line 32
    public function block_layout_body($context, array $blocks = array())
    {
        $__internal_2e665d2eca705cb2fa441142cc478d873f672687f5ca9f29bf92e6a6b8adebd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e665d2eca705cb2fa441142cc478d873f672687f5ca9f29bf92e6a6b8adebd6->enter($__internal_2e665d2eca705cb2fa441142cc478d873f672687f5ca9f29bf92e6a6b8adebd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_6af4477e8ff8d5e22645f8b067089a30c8b193df7bfb706860ef948ef35ce2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af4477e8ff8d5e22645f8b067089a30c8b193df7bfb706860ef948ef35ce2f2->enter($__internal_6af4477e8ff8d5e22645f8b067089a30c8b193df7bfb706860ef948ef35ce2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

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
        
        $__internal_6af4477e8ff8d5e22645f8b067089a30c8b193df7bfb706860ef948ef35ce2f2->leave($__internal_6af4477e8ff8d5e22645f8b067089a30c8b193df7bfb706860ef948ef35ce2f2_prof);

        
        $__internal_2e665d2eca705cb2fa441142cc478d873f672687f5ca9f29bf92e6a6b8adebd6->leave($__internal_2e665d2eca705cb2fa441142cc478d873f672687f5ca9f29bf92e6a6b8adebd6_prof);

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
