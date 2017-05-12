<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2e98fe9f5da46ac6e7f8af6de6e0aa7e0565143ddd0a8d2273f58ea244384af1 extends Twig_Template
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
        $__internal_fdf424d635f6dce5f4055fb0c8374b2e9d5f7314230bfb3669358364c45bfc26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf424d635f6dce5f4055fb0c8374b2e9d5f7314230bfb3669358364c45bfc26->enter($__internal_fdf424d635f6dce5f4055fb0c8374b2e9d5f7314230bfb3669358364c45bfc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_db22b296456ea5b5efb1ded5cf4ca5153aaa3127a16243642901712b7949d02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db22b296456ea5b5efb1ded5cf4ca5153aaa3127a16243642901712b7949d02c->enter($__internal_db22b296456ea5b5efb1ded5cf4ca5153aaa3127a16243642901712b7949d02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fdf424d635f6dce5f4055fb0c8374b2e9d5f7314230bfb3669358364c45bfc26->leave($__internal_fdf424d635f6dce5f4055fb0c8374b2e9d5f7314230bfb3669358364c45bfc26_prof);

        
        $__internal_db22b296456ea5b5efb1ded5cf4ca5153aaa3127a16243642901712b7949d02c->leave($__internal_db22b296456ea5b5efb1ded5cf4ca5153aaa3127a16243642901712b7949d02c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
