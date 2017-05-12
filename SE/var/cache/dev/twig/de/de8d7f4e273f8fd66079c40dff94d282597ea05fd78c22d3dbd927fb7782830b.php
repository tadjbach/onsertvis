<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0992200e561741c94855ec9c52355578c09f2c1fbf44ef79972620a1370059fc extends Twig_Template
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
        $__internal_ae6f05113c7281875e05d39a592db81bf9fe41cb82de60111e18cbc6cbe1f51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6f05113c7281875e05d39a592db81bf9fe41cb82de60111e18cbc6cbe1f51d->enter($__internal_ae6f05113c7281875e05d39a592db81bf9fe41cb82de60111e18cbc6cbe1f51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_bfadaafc1fe1c3d4f07837ec61bc2ed620f929ff874de6108aadd202afea9999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfadaafc1fe1c3d4f07837ec61bc2ed620f929ff874de6108aadd202afea9999->enter($__internal_bfadaafc1fe1c3d4f07837ec61bc2ed620f929ff874de6108aadd202afea9999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ae6f05113c7281875e05d39a592db81bf9fe41cb82de60111e18cbc6cbe1f51d->leave($__internal_ae6f05113c7281875e05d39a592db81bf9fe41cb82de60111e18cbc6cbe1f51d_prof);

        
        $__internal_bfadaafc1fe1c3d4f07837ec61bc2ed620f929ff874de6108aadd202afea9999->leave($__internal_bfadaafc1fe1c3d4f07837ec61bc2ed620f929ff874de6108aadd202afea9999_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
