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
        $__internal_2e4c443b63d3a4e9cfd76ad612c5bdd7c846ca2dd28dc36d5186823d9f536a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4c443b63d3a4e9cfd76ad612c5bdd7c846ca2dd28dc36d5186823d9f536a41->enter($__internal_2e4c443b63d3a4e9cfd76ad612c5bdd7c846ca2dd28dc36d5186823d9f536a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:help.html.twig"));

        $__internal_ef9d326afd4d321b6960abc2686f295955bd9d5a9815b44e6fb70ec3fc8d6564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9d326afd4d321b6960abc2686f295955bd9d5a9815b44e6fb70ec3fc8d6564->enter($__internal_ef9d326afd4d321b6960abc2686f295955bd9d5a9815b44e6fb70ec3fc8d6564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:help.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4c443b63d3a4e9cfd76ad612c5bdd7c846ca2dd28dc36d5186823d9f536a41->leave($__internal_2e4c443b63d3a4e9cfd76ad612c5bdd7c846ca2dd28dc36d5186823d9f536a41_prof);

        
        $__internal_ef9d326afd4d321b6960abc2686f295955bd9d5a9815b44e6fb70ec3fc8d6564->leave($__internal_ef9d326afd4d321b6960abc2686f295955bd9d5a9815b44e6fb70ec3fc8d6564_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_332a9cd89abc9a2a181531d4884d25118a10795acbeacc9fcb8ef3d56aed000b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332a9cd89abc9a2a181531d4884d25118a10795acbeacc9fcb8ef3d56aed000b->enter($__internal_332a9cd89abc9a2a181531d4884d25118a10795acbeacc9fcb8ef3d56aed000b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9765cb08b33a99840417fd803547642f383424c229c5741d248ff542a9202a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9765cb08b33a99840417fd803547642f383424c229c5741d248ff542a9202a6->enter($__internal_a9765cb08b33a99840417fd803547642f383424c229c5741d248ff542a9202a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Aide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a9765cb08b33a99840417fd803547642f383424c229c5741d248ff542a9202a6->leave($__internal_a9765cb08b33a99840417fd803547642f383424c229c5741d248ff542a9202a6_prof);

        
        $__internal_332a9cd89abc9a2a181531d4884d25118a10795acbeacc9fcb8ef3d56aed000b->leave($__internal_332a9cd89abc9a2a181531d4884d25118a10795acbeacc9fcb8ef3d56aed000b_prof);

    }

    // line 7
    public function block_layout_header2($context, array $blocks = array())
    {
        $__internal_18d6b424319bfd9d8510c71b148046dd8923e14a43903100c3adcb757fe60227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d6b424319bfd9d8510c71b148046dd8923e14a43903100c3adcb757fe60227->enter($__internal_18d6b424319bfd9d8510c71b148046dd8923e14a43903100c3adcb757fe60227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        $__internal_2a64a19c97b8aca2dfbf7e701c296d5620eb7b234066d5b7e4a6d423b92f31a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a64a19c97b8aca2dfbf7e701c296d5620eb7b234066d5b7e4a6d423b92f31a9->enter($__internal_2a64a19c97b8aca2dfbf7e701c296d5620eb7b234066d5b7e4a6d423b92f31a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        // line 8
        echo "  <div class=\"col-md-12\">
      <h3 class=\"cat-title\">Aide</h3>
  </div>
";
        
        $__internal_2a64a19c97b8aca2dfbf7e701c296d5620eb7b234066d5b7e4a6d423b92f31a9->leave($__internal_2a64a19c97b8aca2dfbf7e701c296d5620eb7b234066d5b7e4a6d423b92f31a9_prof);

        
        $__internal_18d6b424319bfd9d8510c71b148046dd8923e14a43903100c3adcb757fe60227->leave($__internal_18d6b424319bfd9d8510c71b148046dd8923e14a43903100c3adcb757fe60227_prof);

    }

    // line 13
    public function block_layout_body($context, array $blocks = array())
    {
        $__internal_6af6f3404f89878c3c313c7bbd4bd8aa34971670cd3cddba1608f77173b6288f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af6f3404f89878c3c313c7bbd4bd8aa34971670cd3cddba1608f77173b6288f->enter($__internal_6af6f3404f89878c3c313c7bbd4bd8aa34971670cd3cddba1608f77173b6288f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_92466b3e8bb24441d67381442695a0324bae61bd607981486d5af1aed24b7288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92466b3e8bb24441d67381442695a0324bae61bd607981486d5af1aed24b7288->enter($__internal_92466b3e8bb24441d67381442695a0324bae61bd607981486d5af1aed24b7288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

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
        
        $__internal_92466b3e8bb24441d67381442695a0324bae61bd607981486d5af1aed24b7288->leave($__internal_92466b3e8bb24441d67381442695a0324bae61bd607981486d5af1aed24b7288_prof);

        
        $__internal_6af6f3404f89878c3c313c7bbd4bd8aa34971670cd3cddba1608f77173b6288f->leave($__internal_6af6f3404f89878c3c313c7bbd4bd8aa34971670cd3cddba1608f77173b6288f_prof);

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
