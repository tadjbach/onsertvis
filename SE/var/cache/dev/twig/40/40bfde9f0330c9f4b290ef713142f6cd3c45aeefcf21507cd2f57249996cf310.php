<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3e5e1a781825ca5e0f69fd0e9e9978e55bde34e58df75ce20b9837536167278a extends Twig_Template
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
        $__internal_750077934d93fd7c9965079f79027691cdf4009d25126b4cd0a4f538cf3e74fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750077934d93fd7c9965079f79027691cdf4009d25126b4cd0a4f538cf3e74fa->enter($__internal_750077934d93fd7c9965079f79027691cdf4009d25126b4cd0a4f538cf3e74fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ea3530f1e0e70e1baf75cc904c42df6ac6653eb30bee4301770b4d902d180153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3530f1e0e70e1baf75cc904c42df6ac6653eb30bee4301770b4d902d180153->enter($__internal_ea3530f1e0e70e1baf75cc904c42df6ac6653eb30bee4301770b4d902d180153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_750077934d93fd7c9965079f79027691cdf4009d25126b4cd0a4f538cf3e74fa->leave($__internal_750077934d93fd7c9965079f79027691cdf4009d25126b4cd0a4f538cf3e74fa_prof);

        
        $__internal_ea3530f1e0e70e1baf75cc904c42df6ac6653eb30bee4301770b4d902d180153->leave($__internal_ea3530f1e0e70e1baf75cc904c42df6ac6653eb30bee4301770b4d902d180153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
