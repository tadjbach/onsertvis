<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6433c15b8cce8609775c1d6f40f542b10dd83c95a66ac90f302beae12654d522 extends Twig_Template
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
        $__internal_256ce2ad7173f65484c8b1d133d5a010880df9789e88fc8afe63b61c09ce341f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256ce2ad7173f65484c8b1d133d5a010880df9789e88fc8afe63b61c09ce341f->enter($__internal_256ce2ad7173f65484c8b1d133d5a010880df9789e88fc8afe63b61c09ce341f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_54c5b9079104754cb7cdcbb115b9250da11fc84b80b53caf5d0be71ea41a6b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c5b9079104754cb7cdcbb115b9250da11fc84b80b53caf5d0be71ea41a6b11->enter($__internal_54c5b9079104754cb7cdcbb115b9250da11fc84b80b53caf5d0be71ea41a6b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_256ce2ad7173f65484c8b1d133d5a010880df9789e88fc8afe63b61c09ce341f->leave($__internal_256ce2ad7173f65484c8b1d133d5a010880df9789e88fc8afe63b61c09ce341f_prof);

        
        $__internal_54c5b9079104754cb7cdcbb115b9250da11fc84b80b53caf5d0be71ea41a6b11->leave($__internal_54c5b9079104754cb7cdcbb115b9250da11fc84b80b53caf5d0be71ea41a6b11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
