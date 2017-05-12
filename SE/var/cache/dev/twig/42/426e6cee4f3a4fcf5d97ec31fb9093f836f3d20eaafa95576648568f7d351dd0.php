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
        $__internal_3e65aaf648f63e465b89c37af114fe84010e99c74a116826313fec44c241945b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e65aaf648f63e465b89c37af114fe84010e99c74a116826313fec44c241945b->enter($__internal_3e65aaf648f63e465b89c37af114fe84010e99c74a116826313fec44c241945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:resum.html.twig"));

        $__internal_61810bd83416ee5413b23eeb0aaf23160a96045d5a146f301b07d1bf92a5954c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61810bd83416ee5413b23eeb0aaf23160a96045d5a146f301b07d1bf92a5954c->enter($__internal_61810bd83416ee5413b23eeb0aaf23160a96045d5a146f301b07d1bf92a5954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:resum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e65aaf648f63e465b89c37af114fe84010e99c74a116826313fec44c241945b->leave($__internal_3e65aaf648f63e465b89c37af114fe84010e99c74a116826313fec44c241945b_prof);

        
        $__internal_61810bd83416ee5413b23eeb0aaf23160a96045d5a146f301b07d1bf92a5954c->leave($__internal_61810bd83416ee5413b23eeb0aaf23160a96045d5a146f301b07d1bf92a5954c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b73ff6027a2e22b13c098967c639f3ecc869b362609c8efe9d26e5871bfc86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b73ff6027a2e22b13c098967c639f3ecc869b362609c8efe9d26e5871bfc86d->enter($__internal_5b73ff6027a2e22b13c098967c639f3ecc869b362609c8efe9d26e5871bfc86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0ff7e75a6d729b11f3fae714ff08bb7fc9f19d5964ca501687f9ec5b2f6de71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ff7e75a6d729b11f3fae714ff08bb7fc9f19d5964ca501687f9ec5b2f6de71->enter($__internal_f0ff7e75a6d729b11f3fae714ff08bb7fc9f19d5964ca501687f9ec5b2f6de71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Qui sommes-nous ? - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f0ff7e75a6d729b11f3fae714ff08bb7fc9f19d5964ca501687f9ec5b2f6de71->leave($__internal_f0ff7e75a6d729b11f3fae714ff08bb7fc9f19d5964ca501687f9ec5b2f6de71_prof);

        
        $__internal_5b73ff6027a2e22b13c098967c639f3ecc869b362609c8efe9d26e5871bfc86d->leave($__internal_5b73ff6027a2e22b13c098967c639f3ecc869b362609c8efe9d26e5871bfc86d_prof);

    }

    // line 7
    public function block_layout_header2($context, array $blocks = array())
    {
        $__internal_d4128a8bc5ab0f25a2a0f28da2bb581b4bea9e18b221d67149f8fdc7bb76f0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4128a8bc5ab0f25a2a0f28da2bb581b4bea9e18b221d67149f8fdc7bb76f0ec->enter($__internal_d4128a8bc5ab0f25a2a0f28da2bb581b4bea9e18b221d67149f8fdc7bb76f0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        $__internal_e49fd3863ce13856799d90ea8ab30ba752f50af5c9b56542a187973778a887fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49fd3863ce13856799d90ea8ab30ba752f50af5c9b56542a187973778a887fd->enter($__internal_e49fd3863ce13856799d90ea8ab30ba752f50af5c9b56542a187973778a887fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        // line 8
        echo "  <div class=\"col-md-12\">
      <h3 class=\"cat-title\">Qui sommes nous?</h3>
  </div>
";
        
        $__internal_e49fd3863ce13856799d90ea8ab30ba752f50af5c9b56542a187973778a887fd->leave($__internal_e49fd3863ce13856799d90ea8ab30ba752f50af5c9b56542a187973778a887fd_prof);

        
        $__internal_d4128a8bc5ab0f25a2a0f28da2bb581b4bea9e18b221d67149f8fdc7bb76f0ec->leave($__internal_d4128a8bc5ab0f25a2a0f28da2bb581b4bea9e18b221d67149f8fdc7bb76f0ec_prof);

    }

    // line 12
    public function block_layout_body($context, array $blocks = array())
    {
        $__internal_911bc19302d36e7962056dccf538815ce76a10e8599b56c596f458b32268eb65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911bc19302d36e7962056dccf538815ce76a10e8599b56c596f458b32268eb65->enter($__internal_911bc19302d36e7962056dccf538815ce76a10e8599b56c596f458b32268eb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_af92d8805b27278d337fc83ed48e76b41022b83081536bfb04596fe8397f862b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af92d8805b27278d337fc83ed48e76b41022b83081536bfb04596fe8397f862b->enter($__internal_af92d8805b27278d337fc83ed48e76b41022b83081536bfb04596fe8397f862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

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
        
        $__internal_af92d8805b27278d337fc83ed48e76b41022b83081536bfb04596fe8397f862b->leave($__internal_af92d8805b27278d337fc83ed48e76b41022b83081536bfb04596fe8397f862b_prof);

        
        $__internal_911bc19302d36e7962056dccf538815ce76a10e8599b56c596f458b32268eb65->leave($__internal_911bc19302d36e7962056dccf538815ce76a10e8599b56c596f458b32268eb65_prof);

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
