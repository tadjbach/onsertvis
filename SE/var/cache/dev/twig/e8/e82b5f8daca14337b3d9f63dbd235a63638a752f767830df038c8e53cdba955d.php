<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9551d0646aa72e9b90fcc6c8daf868867a32b19fbd85b09f7d97e3b6c45f4bfd extends Twig_Template
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
        $__internal_c7df0a69a94dc448880b2ca2406907b01ae0615cacec6bdd33948bfb9556a56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7df0a69a94dc448880b2ca2406907b01ae0615cacec6bdd33948bfb9556a56c->enter($__internal_c7df0a69a94dc448880b2ca2406907b01ae0615cacec6bdd33948bfb9556a56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2db5c47caf849d1b2c1ce6bc50d55ab4ef05a22003f31ae982e55b61f46bc621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db5c47caf849d1b2c1ce6bc50d55ab4ef05a22003f31ae982e55b61f46bc621->enter($__internal_2db5c47caf849d1b2c1ce6bc50d55ab4ef05a22003f31ae982e55b61f46bc621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c7df0a69a94dc448880b2ca2406907b01ae0615cacec6bdd33948bfb9556a56c->leave($__internal_c7df0a69a94dc448880b2ca2406907b01ae0615cacec6bdd33948bfb9556a56c_prof);

        
        $__internal_2db5c47caf849d1b2c1ce6bc50d55ab4ef05a22003f31ae982e55b61f46bc621->leave($__internal_2db5c47caf849d1b2c1ce6bc50d55ab4ef05a22003f31ae982e55b61f46bc621_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
