<?php

/* SEPlatformBundle:Default:header.html.twig */
class __TwigTemplate_afe278d557884f651b54525eec8bce205b755ccccb4a6c163d352a6222dbb14d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc4e9396e1dfe7c3a24879ce81778fbe2764e6fdf31779a1c9d5a784a2c3cf57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4e9396e1dfe7c3a24879ce81778fbe2764e6fdf31779a1c9d5a784a2c3cf57->enter($__internal_bc4e9396e1dfe7c3a24879ce81778fbe2764e6fdf31779a1c9d5a784a2c3cf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:header.html.twig"));

        $__internal_5cbe5353af4b1a847325d3a13f49fbb321271ccf93ca9ecd72c3e6084855834b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbe5353af4b1a847325d3a13f49fbb321271ccf93ca9ecd72c3e6084855834b->enter($__internal_5cbe5353af4b1a847325d3a13f49fbb321271ccf93ca9ecd72c3e6084855834b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:header.html.twig"));

        // line 1
        echo "<!-- NEW -->
<nav class=\"navbar navbar-default se-header\">
    <div class=\"container-fluid\">
        <!-- LEFT - LOGO -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand se-color-1 logo\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("se_platform_homepage");
        echo "\">
              <!--   <img src=\"../../css/img/about-us-5.png\" class=\"logo_img\"/>-->
                <span style=\"vertical-align: -webkit-baseline-middle;\">Service €nchère</span>
            </a>
        </div>

        <!-- RIGTH - MENU -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("se_platform_advert_list");
        echo "\">
                        Toutes les demandes
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("se_platform_advert_add");
        echo "\">
                        Déposer une demande
                    </a>
                </li>
                ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "                        <li role=\"presentation\" class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"
                               role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"glyphicon glyphicon-user\"  data-toggle=\"tooltip\"
                                   data-placement=\"bottom\" title=\"Mon compte\">
                                </i>
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Mes annonces</a></li>
                                <li><a href=\"#\">Mes enchères reçues</a></li>
                                <li><a href=\"#\">Mes propositions</a></li>
                                <li><a href=\"#\">Mes messages</a></li>
                                <li><a href=\"#\" >Mon compte</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Se déconnecter</a></li>
                            </ul>
                        </li>
                    ";
        } else {
            // line 52
            echo "                        <li>
                            <a href=\"#\">
                                Se connecter
                            </a>
                        </li>
                    ";
        }
        // line 58
        echo "            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_bc4e9396e1dfe7c3a24879ce81778fbe2764e6fdf31779a1c9d5a784a2c3cf57->leave($__internal_bc4e9396e1dfe7c3a24879ce81778fbe2764e6fdf31779a1c9d5a784a2c3cf57_prof);

        
        $__internal_5cbe5353af4b1a847325d3a13f49fbb321271ccf93ca9ecd72c3e6084855834b->leave($__internal_5cbe5353af4b1a847325d3a13f49fbb321271ccf93ca9ecd72c3e6084855834b_prof);

    }

    public function getTemplateName()
    {
        return "SEPlatformBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 58,  90 => 52,  69 => 33,  67 => 32,  60 => 28,  52 => 23,  39 => 13,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- NEW -->
<nav class=\"navbar navbar-default se-header\">
    <div class=\"container-fluid\">
        <!-- LEFT - LOGO -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand se-color-1 logo\" href=\"{{ path('se_platform_homepage') }}\">
              <!--   <img src=\"../../css/img/about-us-5.png\" class=\"logo_img\"/>-->
                <span style=\"vertical-align: -webkit-baseline-middle;\">Service €nchère</span>
            </a>
        </div>

        <!-- RIGTH - MENU -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"{{ path('se_platform_advert_list')  }}\">
                        Toutes les demandes
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('se_platform_advert_add') }}\">
                        Déposer une demande
                    </a>
                </li>
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <li role=\"presentation\" class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"
                               role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"glyphicon glyphicon-user\"  data-toggle=\"tooltip\"
                                   data-placement=\"bottom\" title=\"Mon compte\">
                                </i>
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Mes annonces</a></li>
                                <li><a href=\"#\">Mes enchères reçues</a></li>
                                <li><a href=\"#\">Mes propositions</a></li>
                                <li><a href=\"#\">Mes messages</a></li>
                                <li><a href=\"#\" >Mon compte</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Se déconnecter</a></li>
                            </ul>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"#\">
                                Se connecter
                            </a>
                        </li>
                    {% endif %}
            </ul>
        </div>
    </div>
</nav>
", "SEPlatformBundle:Default:header.html.twig", "/Users/bach_tadj/www/onsertvis/SE/src/SE/PlatformBundle/Resources/views/Default/header.html.twig");
    }
}
