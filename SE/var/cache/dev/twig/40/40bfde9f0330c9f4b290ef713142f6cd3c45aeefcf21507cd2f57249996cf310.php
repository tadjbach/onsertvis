<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3e5e1a781825ca5e0f69fd0e9e9978e55bde34e58df75ce20b9837536167278a extends Twig_Template
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
        $__internal_a9783ddbf081971114d2b83e79f7757ccdf718c6c23e286f3cbb55e8122ea6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9783ddbf081971114d2b83e79f7757ccdf718c6c23e286f3cbb55e8122ea6a5->enter($__internal_a9783ddbf081971114d2b83e79f7757ccdf718c6c23e286f3cbb55e8122ea6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f2adba9d27b88616126161c07084f143c3afb0f80b03c02f7205062d9450ec85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2adba9d27b88616126161c07084f143c3afb0f80b03c02f7205062d9450ec85->enter($__internal_f2adba9d27b88616126161c07084f143c3afb0f80b03c02f7205062d9450ec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a9783ddbf081971114d2b83e79f7757ccdf718c6c23e286f3cbb55e8122ea6a5->leave($__internal_a9783ddbf081971114d2b83e79f7757ccdf718c6c23e286f3cbb55e8122ea6a5_prof);

        
        $__internal_f2adba9d27b88616126161c07084f143c3afb0f80b03c02f7205062d9450ec85->leave($__internal_f2adba9d27b88616126161c07084f143c3afb0f80b03c02f7205062d9450ec85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
