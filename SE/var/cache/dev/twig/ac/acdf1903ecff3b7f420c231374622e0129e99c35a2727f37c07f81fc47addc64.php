<?php

/* ::base.html.twig */
class __TwigTemplate_5243e67711bac2fc0c14b6ec06976c49537ac5c99c8f4cd130d64480f977da94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14d8d753d931e5e185bebaabd51d23b59b7f4843b408ed438f460a818d662450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d8d753d931e5e185bebaabd51d23b59b7f4843b408ed438f460a818d662450->enter($__internal_14d8d753d931e5e185bebaabd51d23b59b7f4843b408ed438f460a818d662450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bd8d54af1f39be32e967246c98c521079cd9d8116127a0a8b142d8e13f44c392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8d54af1f39be32e967246c98c521079cd9d8116127a0a8b142d8e13f44c392->enter($__internal_bd8d54af1f39be32e967246c98c521079cd9d8116127a0a8b142d8e13f44c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- PAGE - TITLE -->
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- PAGE - FAVICON -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fav.ico"), "html", null, true);
        echo "\" />

        <!-- PAGE - CSS -->
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
        <link rel=\"stylesheet\" href=\"../../css/main.css\" type=\"text/css\" />

    </head>
    <body>
        <!-- HADER - MENU -->
        ";
        // line 24
        echo twig_include($this->env, $context, "@SEPlatform/Default/header.html.twig");
        echo "

        <!-- CONTAINER -->
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
        <!-- PAGE - FOOTER - SERVICE -->
        ";
        // line 30
        echo twig_include($this->env, $context, "@SEPlatform/Default/footer.html.twig");
        echo "

        <!-- PAGE - JS -->
        ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
        
        $__internal_14d8d753d931e5e185bebaabd51d23b59b7f4843b408ed438f460a818d662450->leave($__internal_14d8d753d931e5e185bebaabd51d23b59b7f4843b408ed438f460a818d662450_prof);

        
        $__internal_bd8d54af1f39be32e967246c98c521079cd9d8116127a0a8b142d8e13f44c392->leave($__internal_bd8d54af1f39be32e967246c98c521079cd9d8116127a0a8b142d8e13f44c392_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd95f599c8636f4786c9cff9703123aa447018986926ef1f023cc33ecb24ba87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd95f599c8636f4786c9cff9703123aa447018986926ef1f023cc33ecb24ba87->enter($__internal_bd95f599c8636f4786c9cff9703123aa447018986926ef1f023cc33ecb24ba87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56a2f716bc376c07cf17ef83886d2470591818e064c6469a38553cf24208d722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a2f716bc376c07cf17ef83886d2470591818e064c6469a38553cf24208d722->enter($__internal_56a2f716bc376c07cf17ef83886d2470591818e064c6469a38553cf24208d722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Service Enchère";
        
        $__internal_56a2f716bc376c07cf17ef83886d2470591818e064c6469a38553cf24208d722->leave($__internal_56a2f716bc376c07cf17ef83886d2470591818e064c6469a38553cf24208d722_prof);

        
        $__internal_bd95f599c8636f4786c9cff9703123aa447018986926ef1f023cc33ecb24ba87->leave($__internal_bd95f599c8636f4786c9cff9703123aa447018986926ef1f023cc33ecb24ba87_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efb8facd69c48bdd46884135610d04287377a66b2ddb09659e4f273448096f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb8facd69c48bdd46884135610d04287377a66b2ddb09659e4f273448096f41->enter($__internal_efb8facd69c48bdd46884135610d04287377a66b2ddb09659e4f273448096f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76e744150edfdf4d8db3fb5c809b47106cd18a753cc4823f3af6726f7cae8142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e744150edfdf4d8db3fb5c809b47106cd18a753cc4823f3af6726f7cae8142->enter($__internal_76e744150edfdf4d8db3fb5c809b47106cd18a753cc4823f3af6726f7cae8142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_76e744150edfdf4d8db3fb5c809b47106cd18a753cc4823f3af6726f7cae8142->leave($__internal_76e744150edfdf4d8db3fb5c809b47106cd18a753cc4823f3af6726f7cae8142_prof);

        
        $__internal_efb8facd69c48bdd46884135610d04287377a66b2ddb09659e4f273448096f41->leave($__internal_efb8facd69c48bdd46884135610d04287377a66b2ddb09659e4f273448096f41_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f8fb7b959f05a775b2c39081088bdfd094b43eb1dd040d77fce45aafa740e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8fb7b959f05a775b2c39081088bdfd094b43eb1dd040d77fce45aafa740e59->enter($__internal_5f8fb7b959f05a775b2c39081088bdfd094b43eb1dd040d77fce45aafa740e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bebfdeb0e6a0ba89eea44a47533414b9f7f49eec17d62085e23f4b7a83a6b891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebfdeb0e6a0ba89eea44a47533414b9f7f49eec17d62085e23f4b7a83a6b891->enter($__internal_bebfdeb0e6a0ba89eea44a47533414b9f7f49eec17d62085e23f4b7a83a6b891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bebfdeb0e6a0ba89eea44a47533414b9f7f49eec17d62085e23f4b7a83a6b891->leave($__internal_bebfdeb0e6a0ba89eea44a47533414b9f7f49eec17d62085e23f4b7a83a6b891_prof);

        
        $__internal_5f8fb7b959f05a775b2c39081088bdfd094b43eb1dd040d77fce45aafa740e59->leave($__internal_5f8fb7b959f05a775b2c39081088bdfd094b43eb1dd040d77fce45aafa740e59_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1156a17f8b28e4f69d94b68d676d1440ceb4b570e72e12deb8cc5353afc39af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1156a17f8b28e4f69d94b68d676d1440ceb4b570e72e12deb8cc5353afc39af0->enter($__internal_1156a17f8b28e4f69d94b68d676d1440ceb4b570e72e12deb8cc5353afc39af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_45a6b169702f636509d48418f42aae0d56ed38f375a87b0a0b66962f79f921f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a6b169702f636509d48418f42aae0d56ed38f375a87b0a0b66962f79f921f0->enter($__internal_45a6b169702f636509d48418f42aae0d56ed38f375a87b0a0b66962f79f921f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
        <script type=\"text/javascript\" src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
                integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
                crossorigin=\"anonymous\">
        </script>
        <script type=\"text/javascript\" src=\"../../js/js.js\" ></script>
        <script type=\"text/javascript\" src=\"../../js/france.js\" ></script>
        <script type=\"text/javascript\" src=\"../../js/cmap.js\" ></script>
        ";
        
        $__internal_45a6b169702f636509d48418f42aae0d56ed38f375a87b0a0b66962f79f921f0->leave($__internal_45a6b169702f636509d48418f42aae0d56ed38f375a87b0a0b66962f79f921f0_prof);

        
        $__internal_1156a17f8b28e4f69d94b68d676d1440ceb4b570e72e12deb8cc5353afc39af0->leave($__internal_1156a17f8b28e4f69d94b68d676d1440ceb4b570e72e12deb8cc5353afc39af0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 34,  148 => 33,  131 => 27,  120 => 16,  111 => 15,  93 => 9,  81 => 44,  79 => 33,  73 => 30,  69 => 28,  67 => 27,  61 => 24,  53 => 18,  51 => 15,  45 => 12,  39 => 9,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- PAGE - TITLE -->
        <title>{% block title %}Service Enchère{% endblock %}</title>

        <!-- PAGE - FAVICON -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('fav.ico') }}\" />

        <!-- PAGE - CSS -->
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        {% endblock %}

        <link rel=\"stylesheet\" href=\"../../css/main.css\" type=\"text/css\" />

    </head>
    <body>
        <!-- HADER - MENU -->
        {{ include('@SEPlatform/Default/header.html.twig') }}

        <!-- CONTAINER -->
        {% block body %}{% endblock %}

        <!-- PAGE - FOOTER - SERVICE -->
        {{ include('@SEPlatform/Default/footer.html.twig') }}

        <!-- PAGE - JS -->
        {% block javascripts %}
        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
        <script type=\"text/javascript\" src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
                integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
                crossorigin=\"anonymous\">
        </script>
        <script type=\"text/javascript\" src=\"../../js/js.js\" ></script>
        <script type=\"text/javascript\" src=\"../../js/france.js\" ></script>
        <script type=\"text/javascript\" src=\"../../js/cmap.js\" ></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/bach_tadj/www/onsertvis/SE/app/Resources/views/base.html.twig");
    }
}
