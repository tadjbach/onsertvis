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
        $__internal_2e6914b21ded08f4ba877389b5c573d6abc9576f3aff3d9d99fcc921d1e2656c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6914b21ded08f4ba877389b5c573d6abc9576f3aff3d9d99fcc921d1e2656c->enter($__internal_2e6914b21ded08f4ba877389b5c573d6abc9576f3aff3d9d99fcc921d1e2656c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle::layout.html.twig"));

        $__internal_be0025dbf9c2d3c4fbff3c7847a12d6266e235805c60c802d98483718965bf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0025dbf9c2d3c4fbff3c7847a12d6266e235805c60c802d98483718965bf49->enter($__internal_be0025dbf9c2d3c4fbff3c7847a12d6266e235805c60c802d98483718965bf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e6914b21ded08f4ba877389b5c573d6abc9576f3aff3d9d99fcc921d1e2656c->leave($__internal_2e6914b21ded08f4ba877389b5c573d6abc9576f3aff3d9d99fcc921d1e2656c_prof);

        
        $__internal_be0025dbf9c2d3c4fbff3c7847a12d6266e235805c60c802d98483718965bf49->leave($__internal_be0025dbf9c2d3c4fbff3c7847a12d6266e235805c60c802d98483718965bf49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63d84374b39e61ffacfaa06ee03faf4663376d78427fbb955b5c1ad6c4bc0825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d84374b39e61ffacfaa06ee03faf4663376d78427fbb955b5c1ad6c4bc0825->enter($__internal_63d84374b39e61ffacfaa06ee03faf4663376d78427fbb955b5c1ad6c4bc0825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e135beb0cdf515324a30d6349ffc67be7d17b3b157233740f27419fb9f3228c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e135beb0cdf515324a30d6349ffc67be7d17b3b157233740f27419fb9f3228c2->enter($__internal_e135beb0cdf515324a30d6349ffc67be7d17b3b157233740f27419fb9f3228c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e135beb0cdf515324a30d6349ffc67be7d17b3b157233740f27419fb9f3228c2->leave($__internal_e135beb0cdf515324a30d6349ffc67be7d17b3b157233740f27419fb9f3228c2_prof);

        
        $__internal_63d84374b39e61ffacfaa06ee03faf4663376d78427fbb955b5c1ad6c4bc0825->leave($__internal_63d84374b39e61ffacfaa06ee03faf4663376d78427fbb955b5c1ad6c4bc0825_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3553033287a35fed50c52b1fb37d2f380342367fdb60b17f436a321a47d8bd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3553033287a35fed50c52b1fb37d2f380342367fdb60b17f436a321a47d8bd4e->enter($__internal_3553033287a35fed50c52b1fb37d2f380342367fdb60b17f436a321a47d8bd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4227bfb315918b885f1158cc76a8e1c80853548d05b9a182090f2a118f8e94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4227bfb315918b885f1158cc76a8e1c80853548d05b9a182090f2a118f8e94d->enter($__internal_c4227bfb315918b885f1158cc76a8e1c80853548d05b9a182090f2a118f8e94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4227bfb315918b885f1158cc76a8e1c80853548d05b9a182090f2a118f8e94d->leave($__internal_c4227bfb315918b885f1158cc76a8e1c80853548d05b9a182090f2a118f8e94d_prof);

        
        $__internal_3553033287a35fed50c52b1fb37d2f380342367fdb60b17f436a321a47d8bd4e->leave($__internal_3553033287a35fed50c52b1fb37d2f380342367fdb60b17f436a321a47d8bd4e_prof);

    }

    // line 11
    public function block_layout_header2($context, array $blocks = array())
    {
        $__internal_1ac9066a20dd12b3091d1bf229ef93d898e9e3c3b7afb67c77577c5f171e59cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac9066a20dd12b3091d1bf229ef93d898e9e3c3b7afb67c77577c5f171e59cd->enter($__internal_1ac9066a20dd12b3091d1bf229ef93d898e9e3c3b7afb67c77577c5f171e59cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        $__internal_18efa093204013e9a07553afd5c9d2ffd5ac9c01a4f319436316bde0ca603bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18efa093204013e9a07553afd5c9d2ffd5ac9c01a4f319436316bde0ca603bfb->enter($__internal_18efa093204013e9a07553afd5c9d2ffd5ac9c01a4f319436316bde0ca603bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        // line 12
        echo "      ";
        
        $__internal_18efa093204013e9a07553afd5c9d2ffd5ac9c01a4f319436316bde0ca603bfb->leave($__internal_18efa093204013e9a07553afd5c9d2ffd5ac9c01a4f319436316bde0ca603bfb_prof);

        
        $__internal_1ac9066a20dd12b3091d1bf229ef93d898e9e3c3b7afb67c77577c5f171e59cd->leave($__internal_1ac9066a20dd12b3091d1bf229ef93d898e9e3c3b7afb67c77577c5f171e59cd_prof);

    }

    // line 19
    public function block_layout_body($context, array $blocks = array())
    {
        $__internal_2947407ed260a1e832362c8612cf83cbf53f23d935d2e18d89247830c1f4c207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2947407ed260a1e832362c8612cf83cbf53f23d935d2e18d89247830c1f4c207->enter($__internal_2947407ed260a1e832362c8612cf83cbf53f23d935d2e18d89247830c1f4c207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_4731562ee5bdbaa1646d3e4aaf3e676d568e3bdb63949c7efbea353d363a5eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4731562ee5bdbaa1646d3e4aaf3e676d568e3bdb63949c7efbea353d363a5eb4->enter($__internal_4731562ee5bdbaa1646d3e4aaf3e676d568e3bdb63949c7efbea353d363a5eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        // line 20
        echo "            ";
        
        $__internal_4731562ee5bdbaa1646d3e4aaf3e676d568e3bdb63949c7efbea353d363a5eb4->leave($__internal_4731562ee5bdbaa1646d3e4aaf3e676d568e3bdb63949c7efbea353d363a5eb4_prof);

        
        $__internal_2947407ed260a1e832362c8612cf83cbf53f23d935d2e18d89247830c1f4c207->leave($__internal_2947407ed260a1e832362c8612cf83cbf53f23d935d2e18d89247830c1f4c207_prof);

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
