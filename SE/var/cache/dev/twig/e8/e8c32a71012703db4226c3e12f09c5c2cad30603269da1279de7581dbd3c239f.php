<?php

/* SEPlatformBundle::layout.html.twig */
class __TwigTemplate_f3c52f9106c0215e2683a118f32b948909a2b454b4615f01db7a1906ac0417df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SEPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'layout_header2' => array($this, 'block_layout_header2'),
            'layout_body' => array($this, 'block_layout_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc9e57088cca0146ca7219c7e618db17eed6cb0ad524a09d1677833fbd01025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc9e57088cca0146ca7219c7e618db17eed6cb0ad524a09d1677833fbd01025->enter($__internal_5fc9e57088cca0146ca7219c7e618db17eed6cb0ad524a09d1677833fbd01025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle::layout.html.twig"));

        $__internal_d10b0da7949f9a5b4faa95cbccad705ca45c21cb2d1f77480117f5b834f3f41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10b0da7949f9a5b4faa95cbccad705ca45c21cb2d1f77480117f5b834f3f41e->enter($__internal_d10b0da7949f9a5b4faa95cbccad705ca45c21cb2d1f77480117f5b834f3f41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc9e57088cca0146ca7219c7e618db17eed6cb0ad524a09d1677833fbd01025->leave($__internal_5fc9e57088cca0146ca7219c7e618db17eed6cb0ad524a09d1677833fbd01025_prof);

        
        $__internal_d10b0da7949f9a5b4faa95cbccad705ca45c21cb2d1f77480117f5b834f3f41e->leave($__internal_d10b0da7949f9a5b4faa95cbccad705ca45c21cb2d1f77480117f5b834f3f41e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdc91360a07778202393d6ef6eefcad836dc509e6bd4d233e11d6b58be28e7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc91360a07778202393d6ef6eefcad836dc509e6bd4d233e11d6b58be28e7b4->enter($__internal_fdc91360a07778202393d6ef6eefcad836dc509e6bd4d233e11d6b58be28e7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33a0cf8560024d089cd0211679539aa1e215241f98471f35ee20ed974ccffae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a0cf8560024d089cd0211679539aa1e215241f98471f35ee20ed974ccffae2->enter($__internal_33a0cf8560024d089cd0211679539aa1e215241f98471f35ee20ed974ccffae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_33a0cf8560024d089cd0211679539aa1e215241f98471f35ee20ed974ccffae2->leave($__internal_33a0cf8560024d089cd0211679539aa1e215241f98471f35ee20ed974ccffae2_prof);

        
        $__internal_fdc91360a07778202393d6ef6eefcad836dc509e6bd4d233e11d6b58be28e7b4->leave($__internal_fdc91360a07778202393d6ef6eefcad836dc509e6bd4d233e11d6b58be28e7b4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e98d216c150187d184b18931e2e92ca526105262ab2427fd97aef5b4b374ded1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98d216c150187d184b18931e2e92ca526105262ab2427fd97aef5b4b374ded1->enter($__internal_e98d216c150187d184b18931e2e92ca526105262ab2427fd97aef5b4b374ded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cb5328d6ffaf7b0da04b69a1af712db18bb448224f71862371546dcfce5940f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb5328d6ffaf7b0da04b69a1af712db18bb448224f71862371546dcfce5940f->enter($__internal_3cb5328d6ffaf7b0da04b69a1af712db18bb448224f71862371546dcfce5940f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <div class=\"well slogan-well\">
      <div class=\"panel-body\">
      ";
        // line 11
        $this->displayBlock('layout_header2', $context, $blocks);
        // line 13
        echo "    </div>
  </div>

  <div class=\"well se-well\">
      <div class=\"index-container\" >

            ";
        // line 19
        $this->displayBlock('layout_body', $context, $blocks);
        // line 21
        echo "      </div>
  </div>

";
        
        $__internal_3cb5328d6ffaf7b0da04b69a1af712db18bb448224f71862371546dcfce5940f->leave($__internal_3cb5328d6ffaf7b0da04b69a1af712db18bb448224f71862371546dcfce5940f_prof);

        
        $__internal_e98d216c150187d184b18931e2e92ca526105262ab2427fd97aef5b4b374ded1->leave($__internal_e98d216c150187d184b18931e2e92ca526105262ab2427fd97aef5b4b374ded1_prof);

    }

    // line 11
    public function block_layout_header2($context, array $blocks = array())
    {
        $__internal_e5696c1a36e745d70407c8fcb2af8670938937ec0adcc9a8baa7c40066d5d63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5696c1a36e745d70407c8fcb2af8670938937ec0adcc9a8baa7c40066d5d63d->enter($__internal_e5696c1a36e745d70407c8fcb2af8670938937ec0adcc9a8baa7c40066d5d63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        $__internal_4464d58b39aa79a0f7a9a28a91fc33c27fd5e19b06fb8b0a9c026a853cba448c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4464d58b39aa79a0f7a9a28a91fc33c27fd5e19b06fb8b0a9c026a853cba448c->enter($__internal_4464d58b39aa79a0f7a9a28a91fc33c27fd5e19b06fb8b0a9c026a853cba448c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        // line 12
        echo "      ";
        
        $__internal_4464d58b39aa79a0f7a9a28a91fc33c27fd5e19b06fb8b0a9c026a853cba448c->leave($__internal_4464d58b39aa79a0f7a9a28a91fc33c27fd5e19b06fb8b0a9c026a853cba448c_prof);

        
        $__internal_e5696c1a36e745d70407c8fcb2af8670938937ec0adcc9a8baa7c40066d5d63d->leave($__internal_e5696c1a36e745d70407c8fcb2af8670938937ec0adcc9a8baa7c40066d5d63d_prof);

    }

    // line 19
    public function block_layout_body($context, array $blocks = array())
    {
        $__internal_6f8f4c4948a0c6df1b6a3553ae9135e55f0cbcb900224670bad17fe2f863a69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8f4c4948a0c6df1b6a3553ae9135e55f0cbcb900224670bad17fe2f863a69a->enter($__internal_6f8f4c4948a0c6df1b6a3553ae9135e55f0cbcb900224670bad17fe2f863a69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_63a32363ff931aa4e8b11afb7bf0f8cd1ae26aa0fe1c39e84b04a83bd1e7f02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a32363ff931aa4e8b11afb7bf0f8cd1ae26aa0fe1c39e84b04a83bd1e7f02f->enter($__internal_63a32363ff931aa4e8b11afb7bf0f8cd1ae26aa0fe1c39e84b04a83bd1e7f02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        // line 20
        echo "            ";
        
        $__internal_63a32363ff931aa4e8b11afb7bf0f8cd1ae26aa0fe1c39e84b04a83bd1e7f02f->leave($__internal_63a32363ff931aa4e8b11afb7bf0f8cd1ae26aa0fe1c39e84b04a83bd1e7f02f_prof);

        
        $__internal_6f8f4c4948a0c6df1b6a3553ae9135e55f0cbcb900224670bad17fe2f863a69a->leave($__internal_6f8f4c4948a0c6df1b6a3553ae9135e55f0cbcb900224670bad17fe2f863a69a_prof);

    }

    public function getTemplateName()
    {
        return "SEPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 20,  123 => 19,  113 => 12,  104 => 11,  91 => 21,  89 => 19,  81 => 13,  79 => 11,  74 => 8,  65 => 7,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}
    {{ parent() }}
{% endblock %}

{% block body %}

  <div class=\"well slogan-well\">
      <div class=\"panel-body\">
      {% block layout_header2 %}
      {% endblock %}
    </div>
  </div>

  <div class=\"well se-well\">
      <div class=\"index-container\" >

            {% block layout_body %}
            {% endblock %}
      </div>
  </div>

{% endblock %}
", "SEPlatformBundle::layout.html.twig", "/Users/bach_tadj/www/onsertvis/SE/src/SE/PlatformBundle/Resources/views/layout.html.twig");
    }
}
