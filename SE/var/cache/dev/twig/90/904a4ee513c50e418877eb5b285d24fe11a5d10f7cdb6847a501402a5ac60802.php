<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bdc4a107988af3ffb1294e73c8b9d975e7e84f4fc2c4dd87d84f62dbabf6a5af extends Twig_Template
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
        $__internal_326bc431da48b21f57d0d7593b98051c0706c2adef2239e9120a02e9fe497fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326bc431da48b21f57d0d7593b98051c0706c2adef2239e9120a02e9fe497fa1->enter($__internal_326bc431da48b21f57d0d7593b98051c0706c2adef2239e9120a02e9fe497fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f3348f0da4b09142900b2d257551f3fd68b9c697b2d9eff6725fd54f1b373306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3348f0da4b09142900b2d257551f3fd68b9c697b2d9eff6725fd54f1b373306->enter($__internal_f3348f0da4b09142900b2d257551f3fd68b9c697b2d9eff6725fd54f1b373306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_326bc431da48b21f57d0d7593b98051c0706c2adef2239e9120a02e9fe497fa1->leave($__internal_326bc431da48b21f57d0d7593b98051c0706c2adef2239e9120a02e9fe497fa1_prof);

        
        $__internal_f3348f0da4b09142900b2d257551f3fd68b9c697b2d9eff6725fd54f1b373306->leave($__internal_f3348f0da4b09142900b2d257551f3fd68b9c697b2d9eff6725fd54f1b373306_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
