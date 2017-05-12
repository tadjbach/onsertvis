<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_acc8081fcaf1146b277ef1f3a48793869c4fc2a33e0ab88df9eae448cb9d44c4 extends Twig_Template
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
        $__internal_4dd9ee3804ff142acf7316be5055d5ae6d3303bc0d64d87297f95fc02ce83bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd9ee3804ff142acf7316be5055d5ae6d3303bc0d64d87297f95fc02ce83bb3->enter($__internal_4dd9ee3804ff142acf7316be5055d5ae6d3303bc0d64d87297f95fc02ce83bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_eeeb842988df95e498ed23273320705955da505e76981a4eaeae7f26345ba4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeeb842988df95e498ed23273320705955da505e76981a4eaeae7f26345ba4ed->enter($__internal_eeeb842988df95e498ed23273320705955da505e76981a4eaeae7f26345ba4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4dd9ee3804ff142acf7316be5055d5ae6d3303bc0d64d87297f95fc02ce83bb3->leave($__internal_4dd9ee3804ff142acf7316be5055d5ae6d3303bc0d64d87297f95fc02ce83bb3_prof);

        
        $__internal_eeeb842988df95e498ed23273320705955da505e76981a4eaeae7f26345ba4ed->leave($__internal_eeeb842988df95e498ed23273320705955da505e76981a4eaeae7f26345ba4ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
