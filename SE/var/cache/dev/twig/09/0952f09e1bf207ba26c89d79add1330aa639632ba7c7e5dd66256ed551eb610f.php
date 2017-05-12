<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ef49dfddc4f436ae7634e9195fbf912e75728dbcaa7a630ef80bdb4c4413848d extends Twig_Template
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
        $__internal_812655667ea19ea57799466f5ba67bc0df915b0cf109032767848bc4537b7a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812655667ea19ea57799466f5ba67bc0df915b0cf109032767848bc4537b7a47->enter($__internal_812655667ea19ea57799466f5ba67bc0df915b0cf109032767848bc4537b7a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6effec3897944006430731e0d63534ae6e7a76694f991092c31d62a5fd4529fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6effec3897944006430731e0d63534ae6e7a76694f991092c31d62a5fd4529fe->enter($__internal_6effec3897944006430731e0d63534ae6e7a76694f991092c31d62a5fd4529fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_812655667ea19ea57799466f5ba67bc0df915b0cf109032767848bc4537b7a47->leave($__internal_812655667ea19ea57799466f5ba67bc0df915b0cf109032767848bc4537b7a47_prof);

        
        $__internal_6effec3897944006430731e0d63534ae6e7a76694f991092c31d62a5fd4529fe->leave($__internal_6effec3897944006430731e0d63534ae6e7a76694f991092c31d62a5fd4529fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
