<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b685b16dfe6a86f2059a48079ac009145b60c691ad6abd8c154dc7c55aaa0dce extends Twig_Template
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
        $__internal_544d87e89bf5a97d004828414f75c516d34ed4dd7474afbe0875e80e8e219f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544d87e89bf5a97d004828414f75c516d34ed4dd7474afbe0875e80e8e219f19->enter($__internal_544d87e89bf5a97d004828414f75c516d34ed4dd7474afbe0875e80e8e219f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_787d05b5d4536be3fb50869b72f0e89d8912ac9234c85ac6948cbb73d56eee67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787d05b5d4536be3fb50869b72f0e89d8912ac9234c85ac6948cbb73d56eee67->enter($__internal_787d05b5d4536be3fb50869b72f0e89d8912ac9234c85ac6948cbb73d56eee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_544d87e89bf5a97d004828414f75c516d34ed4dd7474afbe0875e80e8e219f19->leave($__internal_544d87e89bf5a97d004828414f75c516d34ed4dd7474afbe0875e80e8e219f19_prof);

        
        $__internal_787d05b5d4536be3fb50869b72f0e89d8912ac9234c85ac6948cbb73d56eee67->leave($__internal_787d05b5d4536be3fb50869b72f0e89d8912ac9234c85ac6948cbb73d56eee67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
