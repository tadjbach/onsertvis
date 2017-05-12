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
        $__internal_b8b02f362a0e4f3510efe42edd3b5251f3f1e92919b014f4c451d93eb3e53959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b02f362a0e4f3510efe42edd3b5251f3f1e92919b014f4c451d93eb3e53959->enter($__internal_b8b02f362a0e4f3510efe42edd3b5251f3f1e92919b014f4c451d93eb3e53959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_983bb0345d77ada0ab036d94522cc607310a245ee3a99a2d2e654b44ce735575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983bb0345d77ada0ab036d94522cc607310a245ee3a99a2d2e654b44ce735575->enter($__internal_983bb0345d77ada0ab036d94522cc607310a245ee3a99a2d2e654b44ce735575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b8b02f362a0e4f3510efe42edd3b5251f3f1e92919b014f4c451d93eb3e53959->leave($__internal_b8b02f362a0e4f3510efe42edd3b5251f3f1e92919b014f4c451d93eb3e53959_prof);

        
        $__internal_983bb0345d77ada0ab036d94522cc607310a245ee3a99a2d2e654b44ce735575->leave($__internal_983bb0345d77ada0ab036d94522cc607310a245ee3a99a2d2e654b44ce735575_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_c44a5986a4c5be5746b98815f7e42dde1d63139fdaec30dec8abc5615afa0037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44a5986a4c5be5746b98815f7e42dde1d63139fdaec30dec8abc5615afa0037->enter($__internal_c44a5986a4c5be5746b98815f7e42dde1d63139fdaec30dec8abc5615afa0037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb19ecef609fb929490eb402938ca5824309cc2efd20ca2a68ba242f2a96758f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb19ecef609fb929490eb402938ca5824309cc2efd20ca2a68ba242f2a96758f->enter($__internal_bb19ecef609fb929490eb402938ca5824309cc2efd20ca2a68ba242f2a96758f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Service Enchère";
        
        $__internal_bb19ecef609fb929490eb402938ca5824309cc2efd20ca2a68ba242f2a96758f->leave($__internal_bb19ecef609fb929490eb402938ca5824309cc2efd20ca2a68ba242f2a96758f_prof);

        
        $__internal_c44a5986a4c5be5746b98815f7e42dde1d63139fdaec30dec8abc5615afa0037->leave($__internal_c44a5986a4c5be5746b98815f7e42dde1d63139fdaec30dec8abc5615afa0037_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24c1016dfaed810f3a25150280f26ae2c638d21d7fa67b3af74914c0455b64d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c1016dfaed810f3a25150280f26ae2c638d21d7fa67b3af74914c0455b64d9->enter($__internal_24c1016dfaed810f3a25150280f26ae2c638d21d7fa67b3af74914c0455b64d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8a6ace08a877a1681ea4fa24f8dd9b3267523e0dbd310f64c4cce4dd15ed2449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6ace08a877a1681ea4fa24f8dd9b3267523e0dbd310f64c4cce4dd15ed2449->enter($__internal_8a6ace08a877a1681ea4fa24f8dd9b3267523e0dbd310f64c4cce4dd15ed2449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_8a6ace08a877a1681ea4fa24f8dd9b3267523e0dbd310f64c4cce4dd15ed2449->leave($__internal_8a6ace08a877a1681ea4fa24f8dd9b3267523e0dbd310f64c4cce4dd15ed2449_prof);

        
        $__internal_24c1016dfaed810f3a25150280f26ae2c638d21d7fa67b3af74914c0455b64d9->leave($__internal_24c1016dfaed810f3a25150280f26ae2c638d21d7fa67b3af74914c0455b64d9_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_e78d22b83b78730ac1a41b9e57f46b07f201158099eadfc09a0370367882b089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78d22b83b78730ac1a41b9e57f46b07f201158099eadfc09a0370367882b089->enter($__internal_e78d22b83b78730ac1a41b9e57f46b07f201158099eadfc09a0370367882b089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de6773ac2f1342f2d5d84e20f9985cc5813e602caa67e62f66bd010274249aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6773ac2f1342f2d5d84e20f9985cc5813e602caa67e62f66bd010274249aec->enter($__internal_de6773ac2f1342f2d5d84e20f9985cc5813e602caa67e62f66bd010274249aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de6773ac2f1342f2d5d84e20f9985cc5813e602caa67e62f66bd010274249aec->leave($__internal_de6773ac2f1342f2d5d84e20f9985cc5813e602caa67e62f66bd010274249aec_prof);

        
        $__internal_e78d22b83b78730ac1a41b9e57f46b07f201158099eadfc09a0370367882b089->leave($__internal_e78d22b83b78730ac1a41b9e57f46b07f201158099eadfc09a0370367882b089_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fee96ff30a19ca413a8510617d1a28d416bbccf64b25761e3b90d0665f9f786d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee96ff30a19ca413a8510617d1a28d416bbccf64b25761e3b90d0665f9f786d->enter($__internal_fee96ff30a19ca413a8510617d1a28d416bbccf64b25761e3b90d0665f9f786d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_19204f3e9640ce41c8e30a8444a70ecee27964c13ef6e50214e9c72ad84767d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19204f3e9640ce41c8e30a8444a70ecee27964c13ef6e50214e9c72ad84767d1->enter($__internal_19204f3e9640ce41c8e30a8444a70ecee27964c13ef6e50214e9c72ad84767d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_19204f3e9640ce41c8e30a8444a70ecee27964c13ef6e50214e9c72ad84767d1->leave($__internal_19204f3e9640ce41c8e30a8444a70ecee27964c13ef6e50214e9c72ad84767d1_prof);

        
        $__internal_fee96ff30a19ca413a8510617d1a28d416bbccf64b25761e3b90d0665f9f786d->leave($__internal_fee96ff30a19ca413a8510617d1a28d416bbccf64b25761e3b90d0665f9f786d_prof);

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
