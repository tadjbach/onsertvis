<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_bacf48ce4835ee77772131f4c48b914b2c049d738a366e49a4befef131d2d64e extends Twig_Template
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
        $__internal_ae804992989154796fd4d4e11f3fd9dbd5ecf2a5e9eadd546e822e4eacf2ed32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae804992989154796fd4d4e11f3fd9dbd5ecf2a5e9eadd546e822e4eacf2ed32->enter($__internal_ae804992989154796fd4d4e11f3fd9dbd5ecf2a5e9eadd546e822e4eacf2ed32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d72d12dbb3165a64e0770dcef0505582ef0e1bc0139d4dc11516c68a9e6cfb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72d12dbb3165a64e0770dcef0505582ef0e1bc0139d4dc11516c68a9e6cfb51->enter($__internal_d72d12dbb3165a64e0770dcef0505582ef0e1bc0139d4dc11516c68a9e6cfb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ae804992989154796fd4d4e11f3fd9dbd5ecf2a5e9eadd546e822e4eacf2ed32->leave($__internal_ae804992989154796fd4d4e11f3fd9dbd5ecf2a5e9eadd546e822e4eacf2ed32_prof);

        
        $__internal_d72d12dbb3165a64e0770dcef0505582ef0e1bc0139d4dc11516c68a9e6cfb51->leave($__internal_d72d12dbb3165a64e0770dcef0505582ef0e1bc0139d4dc11516c68a9e6cfb51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
