<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4939240c8d71e130601f08bbb4bda343dbe9f40335f5412a663449eadf909200 extends Twig_Template
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
        $__internal_e47cd231e60b3401de0dcdb002f51dbacb0de2dbca1f329abc8b4ae098475b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47cd231e60b3401de0dcdb002f51dbacb0de2dbca1f329abc8b4ae098475b76->enter($__internal_e47cd231e60b3401de0dcdb002f51dbacb0de2dbca1f329abc8b4ae098475b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_46a6d3871502a9e1c4d41c16e77045fcd9a6ce512be50bc4fec44cd8326bd67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a6d3871502a9e1c4d41c16e77045fcd9a6ce512be50bc4fec44cd8326bd67f->enter($__internal_46a6d3871502a9e1c4d41c16e77045fcd9a6ce512be50bc4fec44cd8326bd67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e47cd231e60b3401de0dcdb002f51dbacb0de2dbca1f329abc8b4ae098475b76->leave($__internal_e47cd231e60b3401de0dcdb002f51dbacb0de2dbca1f329abc8b4ae098475b76_prof);

        
        $__internal_46a6d3871502a9e1c4d41c16e77045fcd9a6ce512be50bc4fec44cd8326bd67f->leave($__internal_46a6d3871502a9e1c4d41c16e77045fcd9a6ce512be50bc4fec44cd8326bd67f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
