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
        $__internal_411f9a8df6af59e939a4a475ae31787c008abba6ac1170a01ea9fadd7f282d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411f9a8df6af59e939a4a475ae31787c008abba6ac1170a01ea9fadd7f282d65->enter($__internal_411f9a8df6af59e939a4a475ae31787c008abba6ac1170a01ea9fadd7f282d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2a1345227f47a06fa2a5596edc0c64d5bf48a7e44b13a6bc393674337d3c24bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1345227f47a06fa2a5596edc0c64d5bf48a7e44b13a6bc393674337d3c24bc->enter($__internal_2a1345227f47a06fa2a5596edc0c64d5bf48a7e44b13a6bc393674337d3c24bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_411f9a8df6af59e939a4a475ae31787c008abba6ac1170a01ea9fadd7f282d65->leave($__internal_411f9a8df6af59e939a4a475ae31787c008abba6ac1170a01ea9fadd7f282d65_prof);

        
        $__internal_2a1345227f47a06fa2a5596edc0c64d5bf48a7e44b13a6bc393674337d3c24bc->leave($__internal_2a1345227f47a06fa2a5596edc0c64d5bf48a7e44b13a6bc393674337d3c24bc_prof);

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
