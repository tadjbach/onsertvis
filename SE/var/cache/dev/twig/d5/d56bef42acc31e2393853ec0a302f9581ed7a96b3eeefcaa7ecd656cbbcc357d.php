<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f7f61c297d6a7c736ca87a082777a38766034271aac3973d25c72cca63a94419 extends Twig_Template
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
        $__internal_a06898842ab62f39dc1fa3b06e4a083a7a5714974310184fc408d89501552757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06898842ab62f39dc1fa3b06e4a083a7a5714974310184fc408d89501552757->enter($__internal_a06898842ab62f39dc1fa3b06e4a083a7a5714974310184fc408d89501552757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b66b89b94af2ea85e2b4a7921ad4de1840f1e8115923bc526e4217528853eb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66b89b94af2ea85e2b4a7921ad4de1840f1e8115923bc526e4217528853eb8f->enter($__internal_b66b89b94af2ea85e2b4a7921ad4de1840f1e8115923bc526e4217528853eb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a06898842ab62f39dc1fa3b06e4a083a7a5714974310184fc408d89501552757->leave($__internal_a06898842ab62f39dc1fa3b06e4a083a7a5714974310184fc408d89501552757_prof);

        
        $__internal_b66b89b94af2ea85e2b4a7921ad4de1840f1e8115923bc526e4217528853eb8f->leave($__internal_b66b89b94af2ea85e2b4a7921ad4de1840f1e8115923bc526e4217528853eb8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
