<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0161c191cb3db52c07e4d4b28ec2a649ba0873feebaa84b2b4ab6655afc723ad extends Twig_Template
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
        $__internal_f917a9151ebb2dc51e8cde35957e77506d527f5de03c11a53cd416ea1c0a5dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f917a9151ebb2dc51e8cde35957e77506d527f5de03c11a53cd416ea1c0a5dfe->enter($__internal_f917a9151ebb2dc51e8cde35957e77506d527f5de03c11a53cd416ea1c0a5dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f83377ccf112eaf1560afa5c39db7e0ae6018ac08db979cc451fd3ed9b4530a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83377ccf112eaf1560afa5c39db7e0ae6018ac08db979cc451fd3ed9b4530a9->enter($__internal_f83377ccf112eaf1560afa5c39db7e0ae6018ac08db979cc451fd3ed9b4530a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f917a9151ebb2dc51e8cde35957e77506d527f5de03c11a53cd416ea1c0a5dfe->leave($__internal_f917a9151ebb2dc51e8cde35957e77506d527f5de03c11a53cd416ea1c0a5dfe_prof);

        
        $__internal_f83377ccf112eaf1560afa5c39db7e0ae6018ac08db979cc451fd3ed9b4530a9->leave($__internal_f83377ccf112eaf1560afa5c39db7e0ae6018ac08db979cc451fd3ed9b4530a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
