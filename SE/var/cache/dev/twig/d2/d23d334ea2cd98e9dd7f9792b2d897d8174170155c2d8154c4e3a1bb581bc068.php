<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2dc68a2e381a0d8a6a88bbe9c4e6504655ce5db859cf0383c25a40f16eb597fe extends Twig_Template
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
        $__internal_46796209d3f79553c2f5a004ca392ce1afec5f729dc4fdc07743c5476227e497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46796209d3f79553c2f5a004ca392ce1afec5f729dc4fdc07743c5476227e497->enter($__internal_46796209d3f79553c2f5a004ca392ce1afec5f729dc4fdc07743c5476227e497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1281c32bb562e30d7140efa812c3c7f973898c8cbcb6d0072b3e1e1d913fcb59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1281c32bb562e30d7140efa812c3c7f973898c8cbcb6d0072b3e1e1d913fcb59->enter($__internal_1281c32bb562e30d7140efa812c3c7f973898c8cbcb6d0072b3e1e1d913fcb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_46796209d3f79553c2f5a004ca392ce1afec5f729dc4fdc07743c5476227e497->leave($__internal_46796209d3f79553c2f5a004ca392ce1afec5f729dc4fdc07743c5476227e497_prof);

        
        $__internal_1281c32bb562e30d7140efa812c3c7f973898c8cbcb6d0072b3e1e1d913fcb59->leave($__internal_1281c32bb562e30d7140efa812c3c7f973898c8cbcb6d0072b3e1e1d913fcb59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
