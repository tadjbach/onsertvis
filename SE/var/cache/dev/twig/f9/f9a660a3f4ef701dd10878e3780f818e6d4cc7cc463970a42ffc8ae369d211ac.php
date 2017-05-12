<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ad958e6b25f95e8e22d70cb7752af02f260df61969197f16ddc510b987aca6e4 extends Twig_Template
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
        $__internal_9d068ff6aa867b7a6a157243d72ab0e74c9ab441352506ce1727badf6d8d1d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d068ff6aa867b7a6a157243d72ab0e74c9ab441352506ce1727badf6d8d1d28->enter($__internal_9d068ff6aa867b7a6a157243d72ab0e74c9ab441352506ce1727badf6d8d1d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a4db70bef0b28c618f7da0787c309dba349f1cb4dcd1a4897667901063d4cfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4db70bef0b28c618f7da0787c309dba349f1cb4dcd1a4897667901063d4cfa7->enter($__internal_a4db70bef0b28c618f7da0787c309dba349f1cb4dcd1a4897667901063d4cfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9d068ff6aa867b7a6a157243d72ab0e74c9ab441352506ce1727badf6d8d1d28->leave($__internal_9d068ff6aa867b7a6a157243d72ab0e74c9ab441352506ce1727badf6d8d1d28_prof);

        
        $__internal_a4db70bef0b28c618f7da0787c309dba349f1cb4dcd1a4897667901063d4cfa7->leave($__internal_a4db70bef0b28c618f7da0787c309dba349f1cb4dcd1a4897667901063d4cfa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
