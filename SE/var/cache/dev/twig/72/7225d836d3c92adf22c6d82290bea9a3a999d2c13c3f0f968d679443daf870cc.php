<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4da0d465ef7b09819e0199d9198ddf28ba896e604979d7afe237542da8914c85 extends Twig_Template
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
        $__internal_ad1b400563e7931152ea91926b827e25e836df7dead69484d060de26a21ae702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1b400563e7931152ea91926b827e25e836df7dead69484d060de26a21ae702->enter($__internal_ad1b400563e7931152ea91926b827e25e836df7dead69484d060de26a21ae702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e91bcc0043fb82533f7e0eb627d04e109f0924a1fcb7111df05d7458ccff3fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91bcc0043fb82533f7e0eb627d04e109f0924a1fcb7111df05d7458ccff3fb5->enter($__internal_e91bcc0043fb82533f7e0eb627d04e109f0924a1fcb7111df05d7458ccff3fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ad1b400563e7931152ea91926b827e25e836df7dead69484d060de26a21ae702->leave($__internal_ad1b400563e7931152ea91926b827e25e836df7dead69484d060de26a21ae702_prof);

        
        $__internal_e91bcc0043fb82533f7e0eb627d04e109f0924a1fcb7111df05d7458ccff3fb5->leave($__internal_e91bcc0043fb82533f7e0eb627d04e109f0924a1fcb7111df05d7458ccff3fb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
