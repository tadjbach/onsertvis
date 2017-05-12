<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a57e3beeace61d5ef344e7724bd92c52149f3194f5fd6da2181ecb0f563dd635 extends Twig_Template
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
        $__internal_1c8d1a97f0cbad6a6d4fcaef682343abb13940c16b33b8d52956bdab520b2b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8d1a97f0cbad6a6d4fcaef682343abb13940c16b33b8d52956bdab520b2b4f->enter($__internal_1c8d1a97f0cbad6a6d4fcaef682343abb13940c16b33b8d52956bdab520b2b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_801ebb374d2d358c043bc470ab14620ae070cd4bdb69c2f843be5f79be94cc01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801ebb374d2d358c043bc470ab14620ae070cd4bdb69c2f843be5f79be94cc01->enter($__internal_801ebb374d2d358c043bc470ab14620ae070cd4bdb69c2f843be5f79be94cc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1c8d1a97f0cbad6a6d4fcaef682343abb13940c16b33b8d52956bdab520b2b4f->leave($__internal_1c8d1a97f0cbad6a6d4fcaef682343abb13940c16b33b8d52956bdab520b2b4f_prof);

        
        $__internal_801ebb374d2d358c043bc470ab14620ae070cd4bdb69c2f843be5f79be94cc01->leave($__internal_801ebb374d2d358c043bc470ab14620ae070cd4bdb69c2f843be5f79be94cc01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
