<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a059dd6c7565efcfcd86138c2d357c4db3a23d120e1756affb9439ecd8680336 extends Twig_Template
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
        $__internal_3abf2bacd88b801cd18f8364043af5c62df7359fd75965c59beb76bfc7da5ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abf2bacd88b801cd18f8364043af5c62df7359fd75965c59beb76bfc7da5ef9->enter($__internal_3abf2bacd88b801cd18f8364043af5c62df7359fd75965c59beb76bfc7da5ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7ac269e97cf09bafc2c50a57c419f9e46899b5a41d9b96e241e30fda37cf5e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac269e97cf09bafc2c50a57c419f9e46899b5a41d9b96e241e30fda37cf5e47->enter($__internal_7ac269e97cf09bafc2c50a57c419f9e46899b5a41d9b96e241e30fda37cf5e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3abf2bacd88b801cd18f8364043af5c62df7359fd75965c59beb76bfc7da5ef9->leave($__internal_3abf2bacd88b801cd18f8364043af5c62df7359fd75965c59beb76bfc7da5ef9_prof);

        
        $__internal_7ac269e97cf09bafc2c50a57c419f9e46899b5a41d9b96e241e30fda37cf5e47->leave($__internal_7ac269e97cf09bafc2c50a57c419f9e46899b5a41d9b96e241e30fda37cf5e47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
