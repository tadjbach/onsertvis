<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_94dc0279a6d8e22bf237b0582aa864b73e2a8daa85e8f9a9df988553033f63d7 extends Twig_Template
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
        $__internal_1157bc3be4bfe1b31e23f46618a0ca6e9afd1f2cef16a84cfb14762836c437b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1157bc3be4bfe1b31e23f46618a0ca6e9afd1f2cef16a84cfb14762836c437b6->enter($__internal_1157bc3be4bfe1b31e23f46618a0ca6e9afd1f2cef16a84cfb14762836c437b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c91a3bbe48e362781dd1517b7746f35116eee44b3ce3c885eeb6ae8ddc2687c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91a3bbe48e362781dd1517b7746f35116eee44b3ce3c885eeb6ae8ddc2687c2->enter($__internal_c91a3bbe48e362781dd1517b7746f35116eee44b3ce3c885eeb6ae8ddc2687c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1157bc3be4bfe1b31e23f46618a0ca6e9afd1f2cef16a84cfb14762836c437b6->leave($__internal_1157bc3be4bfe1b31e23f46618a0ca6e9afd1f2cef16a84cfb14762836c437b6_prof);

        
        $__internal_c91a3bbe48e362781dd1517b7746f35116eee44b3ce3c885eeb6ae8ddc2687c2->leave($__internal_c91a3bbe48e362781dd1517b7746f35116eee44b3ce3c885eeb6ae8ddc2687c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
