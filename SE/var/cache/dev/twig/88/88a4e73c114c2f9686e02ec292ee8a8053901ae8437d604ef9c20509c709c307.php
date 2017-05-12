<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_433e2ea3e52165e8df8dee4526a176f3d2a615947455ef007141e68fd142ec61 extends Twig_Template
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
        $__internal_9cf9948fbdfafa023548d78c1d5514135d608d0863126fca9e8d85f1596a86d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf9948fbdfafa023548d78c1d5514135d608d0863126fca9e8d85f1596a86d4->enter($__internal_9cf9948fbdfafa023548d78c1d5514135d608d0863126fca9e8d85f1596a86d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1a59e04d9b2aa3bfcbfe1805e2f3c8570e34e94f6cf098f9785525f4c1ecc02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a59e04d9b2aa3bfcbfe1805e2f3c8570e34e94f6cf098f9785525f4c1ecc02d->enter($__internal_1a59e04d9b2aa3bfcbfe1805e2f3c8570e34e94f6cf098f9785525f4c1ecc02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9cf9948fbdfafa023548d78c1d5514135d608d0863126fca9e8d85f1596a86d4->leave($__internal_9cf9948fbdfafa023548d78c1d5514135d608d0863126fca9e8d85f1596a86d4_prof);

        
        $__internal_1a59e04d9b2aa3bfcbfe1805e2f3c8570e34e94f6cf098f9785525f4c1ecc02d->leave($__internal_1a59e04d9b2aa3bfcbfe1805e2f3c8570e34e94f6cf098f9785525f4c1ecc02d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
