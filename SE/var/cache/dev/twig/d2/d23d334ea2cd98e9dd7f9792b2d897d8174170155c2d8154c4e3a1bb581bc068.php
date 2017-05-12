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
        $__internal_901f9413b2363bd8e0645181639559dee69892d2cf3d7898631465b0cf5aa380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901f9413b2363bd8e0645181639559dee69892d2cf3d7898631465b0cf5aa380->enter($__internal_901f9413b2363bd8e0645181639559dee69892d2cf3d7898631465b0cf5aa380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b625ee081f287c856700c7836af3adc18062c166dfb9bff2102444adc9def21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b625ee081f287c856700c7836af3adc18062c166dfb9bff2102444adc9def21a->enter($__internal_b625ee081f287c856700c7836af3adc18062c166dfb9bff2102444adc9def21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_901f9413b2363bd8e0645181639559dee69892d2cf3d7898631465b0cf5aa380->leave($__internal_901f9413b2363bd8e0645181639559dee69892d2cf3d7898631465b0cf5aa380_prof);

        
        $__internal_b625ee081f287c856700c7836af3adc18062c166dfb9bff2102444adc9def21a->leave($__internal_b625ee081f287c856700c7836af3adc18062c166dfb9bff2102444adc9def21a_prof);

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
