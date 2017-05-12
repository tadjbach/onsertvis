<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a059dd6c7565efcfcd86138c2d357c4db3a23d120e1756affb9439ecd8680336 extends Twig_Template
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
        $__internal_6a1c001ad8039bcef98450e5366d5447cd4d4e3df6b5cb4266a1b9ad50e44784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1c001ad8039bcef98450e5366d5447cd4d4e3df6b5cb4266a1b9ad50e44784->enter($__internal_6a1c001ad8039bcef98450e5366d5447cd4d4e3df6b5cb4266a1b9ad50e44784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_bd514e7217d29dbb4efd52154219e5d31c968e1f33b0d6529a58b7cd12d96575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd514e7217d29dbb4efd52154219e5d31c968e1f33b0d6529a58b7cd12d96575->enter($__internal_bd514e7217d29dbb4efd52154219e5d31c968e1f33b0d6529a58b7cd12d96575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6a1c001ad8039bcef98450e5366d5447cd4d4e3df6b5cb4266a1b9ad50e44784->leave($__internal_6a1c001ad8039bcef98450e5366d5447cd4d4e3df6b5cb4266a1b9ad50e44784_prof);

        
        $__internal_bd514e7217d29dbb4efd52154219e5d31c968e1f33b0d6529a58b7cd12d96575->leave($__internal_bd514e7217d29dbb4efd52154219e5d31c968e1f33b0d6529a58b7cd12d96575_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
