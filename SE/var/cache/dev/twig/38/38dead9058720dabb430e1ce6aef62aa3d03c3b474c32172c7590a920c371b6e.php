<?php

/* SEPlatformBundle:Default:footer.html.twig */
class __TwigTemplate_3131f4e293b4951be56489f0d7be79eeeffb5591bff78aead9908ca76c2145c1 extends Twig_Template
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
        $__internal_c217b169726e44647f38f84f763f9d1646dc1e52258c8ed19a41cc5125a8b4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c217b169726e44647f38f84f763f9d1646dc1e52258c8ed19a41cc5125a8b4d4->enter($__internal_c217b169726e44647f38f84f763f9d1646dc1e52258c8ed19a41cc5125a8b4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:footer.html.twig"));

        $__internal_71f5c6a750e8dc5ee445a4d9fb23e7388b5899b55ec7536a4a95925d14ece3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f5c6a750e8dc5ee445a4d9fb23e7388b5899b55ec7536a4a95925d14ece3a7->enter($__internal_71f5c6a750e8dc5ee445a4d9fb23e7388b5899b55ec7536a4a95925d14ece3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:footer.html.twig"));

        // line 1
        echo "<div class=\"well well-sm well-footer\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h5>À propos</h5>
            <ul class=\"ul-footer\">
                <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("se_platform_resum");
        echo "\">Qui sommes-nous ?</a></li>
            </ul>
        </div>
        <div class=\"col-md-4 col-footer\">
            <h5>Informations légales</h5>
            <ul class=\"ul-footer\">
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("se_platform_cgu");
        echo "\">Conditions Générales d'Utilisation</a></li>
            </ul>
        </div>
        <div class=\"col-md-4 col-footer\">
            <h5>Des questions ?</h5>
            <ul class=\"ul-footer\">
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("se_platform_help");
        echo "\">Aide</a></li>
            </ul>
        </div>
    </div>
    <!-- PAGE - FOOTER - COPY -->
    <div id=\"footer\" class=\"copyr\">
        <footer>
            <p>Tous droits réservés. COPYRIGHT © ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Service Enchère.</p>
        </footer>
    </div>
</div>
";
        
        $__internal_c217b169726e44647f38f84f763f9d1646dc1e52258c8ed19a41cc5125a8b4d4->leave($__internal_c217b169726e44647f38f84f763f9d1646dc1e52258c8ed19a41cc5125a8b4d4_prof);

        
        $__internal_71f5c6a750e8dc5ee445a4d9fb23e7388b5899b55ec7536a4a95925d14ece3a7->leave($__internal_71f5c6a750e8dc5ee445a4d9fb23e7388b5899b55ec7536a4a95925d14ece3a7_prof);

    }

    public function getTemplateName()
    {
        return "SEPlatformBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  50 => 18,  41 => 12,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well well-sm well-footer\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h5>À propos</h5>
            <ul class=\"ul-footer\">
                <li><a href=\"{{ path('se_platform_resum') }}\">Qui sommes-nous ?</a></li>
            </ul>
        </div>
        <div class=\"col-md-4 col-footer\">
            <h5>Informations légales</h5>
            <ul class=\"ul-footer\">
                <li><a href=\"{{ path('se_platform_cgu') }}\">Conditions Générales d'Utilisation</a></li>
            </ul>
        </div>
        <div class=\"col-md-4 col-footer\">
            <h5>Des questions ?</h5>
            <ul class=\"ul-footer\">
                <li><a href=\"{{ path('se_platform_help') }}\">Aide</a></li>
            </ul>
        </div>
    </div>
    <!-- PAGE - FOOTER - COPY -->
    <div id=\"footer\" class=\"copyr\">
        <footer>
            <p>Tous droits réservés. COPYRIGHT © {{ 'now'|date('Y') }} Service Enchère.</p>
        </footer>
    </div>
</div>
", "SEPlatformBundle:Default:footer.html.twig", "/Users/bach_tadj/www/onsertvis/SE/src/SE/PlatformBundle/Resources/views/Default/footer.html.twig");
    }
}
