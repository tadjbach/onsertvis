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
        $__internal_2c6a5bd7d6ec9afdee507be34d54a3c3e90116e58262733530f3224f96855a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6a5bd7d6ec9afdee507be34d54a3c3e90116e58262733530f3224f96855a72->enter($__internal_2c6a5bd7d6ec9afdee507be34d54a3c3e90116e58262733530f3224f96855a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bec85d60c0425974b6400dbebf53781c1f4b63eb97cb6ed2f41edbacda2e0a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec85d60c0425974b6400dbebf53781c1f4b63eb97cb6ed2f41edbacda2e0a48->enter($__internal_bec85d60c0425974b6400dbebf53781c1f4b63eb97cb6ed2f41edbacda2e0a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2c6a5bd7d6ec9afdee507be34d54a3c3e90116e58262733530f3224f96855a72->leave($__internal_2c6a5bd7d6ec9afdee507be34d54a3c3e90116e58262733530f3224f96855a72_prof);

        
        $__internal_bec85d60c0425974b6400dbebf53781c1f4b63eb97cb6ed2f41edbacda2e0a48->leave($__internal_bec85d60c0425974b6400dbebf53781c1f4b63eb97cb6ed2f41edbacda2e0a48_prof);

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
