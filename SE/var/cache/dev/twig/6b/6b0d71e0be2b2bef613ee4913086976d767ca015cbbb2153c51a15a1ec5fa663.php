<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2e98fe9f5da46ac6e7f8af6de6e0aa7e0565143ddd0a8d2273f58ea244384af1 extends Twig_Template
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
        $__internal_e2095734ae8a121944dc20aa9c6ac71a90c0b25ebfa4fd93dc1d77af31138642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2095734ae8a121944dc20aa9c6ac71a90c0b25ebfa4fd93dc1d77af31138642->enter($__internal_e2095734ae8a121944dc20aa9c6ac71a90c0b25ebfa4fd93dc1d77af31138642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_06f06ad99f576cd7176697778d145b146168a92fa05bc149b12a7a5ea3f38ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f06ad99f576cd7176697778d145b146168a92fa05bc149b12a7a5ea3f38ab6->enter($__internal_06f06ad99f576cd7176697778d145b146168a92fa05bc149b12a7a5ea3f38ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e2095734ae8a121944dc20aa9c6ac71a90c0b25ebfa4fd93dc1d77af31138642->leave($__internal_e2095734ae8a121944dc20aa9c6ac71a90c0b25ebfa4fd93dc1d77af31138642_prof);

        
        $__internal_06f06ad99f576cd7176697778d145b146168a92fa05bc149b12a7a5ea3f38ab6->leave($__internal_06f06ad99f576cd7176697778d145b146168a92fa05bc149b12a7a5ea3f38ab6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
