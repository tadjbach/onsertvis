<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0161c191cb3db52c07e4d4b28ec2a649ba0873feebaa84b2b4ab6655afc723ad extends Twig_Template
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
        $__internal_f05aafea89d2468cbd79c239829dac64c9e75ed9793af872632abd9ab9960625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05aafea89d2468cbd79c239829dac64c9e75ed9793af872632abd9ab9960625->enter($__internal_f05aafea89d2468cbd79c239829dac64c9e75ed9793af872632abd9ab9960625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_200e715b768a83504e73bb4ad54fd2676a490f97bf4e06c6ec92f22805aabe96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200e715b768a83504e73bb4ad54fd2676a490f97bf4e06c6ec92f22805aabe96->enter($__internal_200e715b768a83504e73bb4ad54fd2676a490f97bf4e06c6ec92f22805aabe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f05aafea89d2468cbd79c239829dac64c9e75ed9793af872632abd9ab9960625->leave($__internal_f05aafea89d2468cbd79c239829dac64c9e75ed9793af872632abd9ab9960625_prof);

        
        $__internal_200e715b768a83504e73bb4ad54fd2676a490f97bf4e06c6ec92f22805aabe96->leave($__internal_200e715b768a83504e73bb4ad54fd2676a490f97bf4e06c6ec92f22805aabe96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
