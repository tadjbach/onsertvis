<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d73eb0827a759900e7561ec6bb50fee62aaeadf76beb4620a683399b86322d24 extends Twig_Template
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
        $__internal_45b00bbcd9e19d3014534fe2e275ef5a03a411052197a56e95c9ce05367132a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b00bbcd9e19d3014534fe2e275ef5a03a411052197a56e95c9ce05367132a4->enter($__internal_45b00bbcd9e19d3014534fe2e275ef5a03a411052197a56e95c9ce05367132a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_010bb3ac835587635f4dd0e274af47cdf8314dc6cde91457cfa7aaa524af9202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010bb3ac835587635f4dd0e274af47cdf8314dc6cde91457cfa7aaa524af9202->enter($__internal_010bb3ac835587635f4dd0e274af47cdf8314dc6cde91457cfa7aaa524af9202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_45b00bbcd9e19d3014534fe2e275ef5a03a411052197a56e95c9ce05367132a4->leave($__internal_45b00bbcd9e19d3014534fe2e275ef5a03a411052197a56e95c9ce05367132a4_prof);

        
        $__internal_010bb3ac835587635f4dd0e274af47cdf8314dc6cde91457cfa7aaa524af9202->leave($__internal_010bb3ac835587635f4dd0e274af47cdf8314dc6cde91457cfa7aaa524af9202_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
