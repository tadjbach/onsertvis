<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a2c9496a9cdfbc8c5a8eb78f7043af9d8fbdcc59a6f6ae7edf5d62a165968ba2 extends Twig_Template
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
        $__internal_69d0e627272cd1890f360e57e61d98b000064ef223c4feb65c56a193c75c7e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d0e627272cd1890f360e57e61d98b000064ef223c4feb65c56a193c75c7e06->enter($__internal_69d0e627272cd1890f360e57e61d98b000064ef223c4feb65c56a193c75c7e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_feef56c6354c1d388a30d11e6b20a66ae3efe60211ce68d57c6934601488d33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feef56c6354c1d388a30d11e6b20a66ae3efe60211ce68d57c6934601488d33e->enter($__internal_feef56c6354c1d388a30d11e6b20a66ae3efe60211ce68d57c6934601488d33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_69d0e627272cd1890f360e57e61d98b000064ef223c4feb65c56a193c75c7e06->leave($__internal_69d0e627272cd1890f360e57e61d98b000064ef223c4feb65c56a193c75c7e06_prof);

        
        $__internal_feef56c6354c1d388a30d11e6b20a66ae3efe60211ce68d57c6934601488d33e->leave($__internal_feef56c6354c1d388a30d11e6b20a66ae3efe60211ce68d57c6934601488d33e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
