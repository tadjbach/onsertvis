<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3b6ca1b2d46da73100521008658378106a83287a0f53afe550aba126b08fa583 extends Twig_Template
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
        $__internal_800e0607f5364390e7300b571f2f59ae06563a49eaa96ab1f35a118361ca4a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800e0607f5364390e7300b571f2f59ae06563a49eaa96ab1f35a118361ca4a90->enter($__internal_800e0607f5364390e7300b571f2f59ae06563a49eaa96ab1f35a118361ca4a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_45dcf51628b6751593ecf85596042b147b36480faaa51e169b25eeb110f5b7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dcf51628b6751593ecf85596042b147b36480faaa51e169b25eeb110f5b7bd->enter($__internal_45dcf51628b6751593ecf85596042b147b36480faaa51e169b25eeb110f5b7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_800e0607f5364390e7300b571f2f59ae06563a49eaa96ab1f35a118361ca4a90->leave($__internal_800e0607f5364390e7300b571f2f59ae06563a49eaa96ab1f35a118361ca4a90_prof);

        
        $__internal_45dcf51628b6751593ecf85596042b147b36480faaa51e169b25eeb110f5b7bd->leave($__internal_45dcf51628b6751593ecf85596042b147b36480faaa51e169b25eeb110f5b7bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
