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
        $__internal_1511c3cb5a03c620a5b0c70f508055ef6b75fc26669fc110897dffe27a28bd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1511c3cb5a03c620a5b0c70f508055ef6b75fc26669fc110897dffe27a28bd6d->enter($__internal_1511c3cb5a03c620a5b0c70f508055ef6b75fc26669fc110897dffe27a28bd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ddf2c6bf8cad68cf6770e73a9a0b887ea4e5d489853cbe3051278d4e5bc52c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf2c6bf8cad68cf6770e73a9a0b887ea4e5d489853cbe3051278d4e5bc52c1e->enter($__internal_ddf2c6bf8cad68cf6770e73a9a0b887ea4e5d489853cbe3051278d4e5bc52c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1511c3cb5a03c620a5b0c70f508055ef6b75fc26669fc110897dffe27a28bd6d->leave($__internal_1511c3cb5a03c620a5b0c70f508055ef6b75fc26669fc110897dffe27a28bd6d_prof);

        
        $__internal_ddf2c6bf8cad68cf6770e73a9a0b887ea4e5d489853cbe3051278d4e5bc52c1e->leave($__internal_ddf2c6bf8cad68cf6770e73a9a0b887ea4e5d489853cbe3051278d4e5bc52c1e_prof);

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
