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
        $__internal_9671ebc5e17c4dbe4e1b624df1b971bbd0b894848902fb3dae7ae1c1dbfcc1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9671ebc5e17c4dbe4e1b624df1b971bbd0b894848902fb3dae7ae1c1dbfcc1e4->enter($__internal_9671ebc5e17c4dbe4e1b624df1b971bbd0b894848902fb3dae7ae1c1dbfcc1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a3f852c6c1781f6871d63b46138231aaed92a94b4efaed78390a340bf19e4c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f852c6c1781f6871d63b46138231aaed92a94b4efaed78390a340bf19e4c9d->enter($__internal_a3f852c6c1781f6871d63b46138231aaed92a94b4efaed78390a340bf19e4c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9671ebc5e17c4dbe4e1b624df1b971bbd0b894848902fb3dae7ae1c1dbfcc1e4->leave($__internal_9671ebc5e17c4dbe4e1b624df1b971bbd0b894848902fb3dae7ae1c1dbfcc1e4_prof);

        
        $__internal_a3f852c6c1781f6871d63b46138231aaed92a94b4efaed78390a340bf19e4c9d->leave($__internal_a3f852c6c1781f6871d63b46138231aaed92a94b4efaed78390a340bf19e4c9d_prof);

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
