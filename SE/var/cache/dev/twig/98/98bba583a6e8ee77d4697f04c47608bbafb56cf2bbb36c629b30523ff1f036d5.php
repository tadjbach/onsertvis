<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5e5416f515ff09f051aeca5752f0ecfce7ecf32d540f7919204d777b17fc983c extends Twig_Template
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
        $__internal_7fc63d1072db14a9bfe2ea71831f48f53938cefe61e33bf3a624e98f868a0309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc63d1072db14a9bfe2ea71831f48f53938cefe61e33bf3a624e98f868a0309->enter($__internal_7fc63d1072db14a9bfe2ea71831f48f53938cefe61e33bf3a624e98f868a0309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_37fb745864b37b098ea6a8e68977321cb45fde0814708ba06c3159f5c7f74e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fb745864b37b098ea6a8e68977321cb45fde0814708ba06c3159f5c7f74e20->enter($__internal_37fb745864b37b098ea6a8e68977321cb45fde0814708ba06c3159f5c7f74e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7fc63d1072db14a9bfe2ea71831f48f53938cefe61e33bf3a624e98f868a0309->leave($__internal_7fc63d1072db14a9bfe2ea71831f48f53938cefe61e33bf3a624e98f868a0309_prof);

        
        $__internal_37fb745864b37b098ea6a8e68977321cb45fde0814708ba06c3159f5c7f74e20->leave($__internal_37fb745864b37b098ea6a8e68977321cb45fde0814708ba06c3159f5c7f74e20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
