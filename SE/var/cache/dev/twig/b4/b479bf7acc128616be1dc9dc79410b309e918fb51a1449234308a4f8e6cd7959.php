<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95dfecc2bc54143adf6739b230500a66d929caa10de6f5bfaf6ce3ad3a17378e extends Twig_Template
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
        $__internal_0b51b531047d266deb831645b694f067c559ad4de8980f91445de87e6a0048e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b51b531047d266deb831645b694f067c559ad4de8980f91445de87e6a0048e5->enter($__internal_0b51b531047d266deb831645b694f067c559ad4de8980f91445de87e6a0048e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_aff28d4fdd695c6759de3248a124115aac38dfa87f59774d02c8ee7983200e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff28d4fdd695c6759de3248a124115aac38dfa87f59774d02c8ee7983200e33->enter($__internal_aff28d4fdd695c6759de3248a124115aac38dfa87f59774d02c8ee7983200e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0b51b531047d266deb831645b694f067c559ad4de8980f91445de87e6a0048e5->leave($__internal_0b51b531047d266deb831645b694f067c559ad4de8980f91445de87e6a0048e5_prof);

        
        $__internal_aff28d4fdd695c6759de3248a124115aac38dfa87f59774d02c8ee7983200e33->leave($__internal_aff28d4fdd695c6759de3248a124115aac38dfa87f59774d02c8ee7983200e33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
