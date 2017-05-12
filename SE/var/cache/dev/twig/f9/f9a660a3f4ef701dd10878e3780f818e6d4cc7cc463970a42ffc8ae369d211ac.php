<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ad958e6b25f95e8e22d70cb7752af02f260df61969197f16ddc510b987aca6e4 extends Twig_Template
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
        $__internal_3ad3b8980a1d08f3de4b9f4c43ec3aebda505c0895e3cd082449da5b8d3f7af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad3b8980a1d08f3de4b9f4c43ec3aebda505c0895e3cd082449da5b8d3f7af6->enter($__internal_3ad3b8980a1d08f3de4b9f4c43ec3aebda505c0895e3cd082449da5b8d3f7af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6f64e37f930790128b6642e39aa2a50b0a3561a1dbd94b93dc3b9cde0fd49369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f64e37f930790128b6642e39aa2a50b0a3561a1dbd94b93dc3b9cde0fd49369->enter($__internal_6f64e37f930790128b6642e39aa2a50b0a3561a1dbd94b93dc3b9cde0fd49369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3ad3b8980a1d08f3de4b9f4c43ec3aebda505c0895e3cd082449da5b8d3f7af6->leave($__internal_3ad3b8980a1d08f3de4b9f4c43ec3aebda505c0895e3cd082449da5b8d3f7af6_prof);

        
        $__internal_6f64e37f930790128b6642e39aa2a50b0a3561a1dbd94b93dc3b9cde0fd49369->leave($__internal_6f64e37f930790128b6642e39aa2a50b0a3561a1dbd94b93dc3b9cde0fd49369_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
