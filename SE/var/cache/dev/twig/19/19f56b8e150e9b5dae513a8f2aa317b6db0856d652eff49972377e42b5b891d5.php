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
        $__internal_e686b5a08572d81b8bfe6515140c5a521537aca6b47c9660b27eb2124481f7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e686b5a08572d81b8bfe6515140c5a521537aca6b47c9660b27eb2124481f7d7->enter($__internal_e686b5a08572d81b8bfe6515140c5a521537aca6b47c9660b27eb2124481f7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_045fd92bac900798247688a47567e439fec6ee09234e3990294a60b15a7d4e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045fd92bac900798247688a47567e439fec6ee09234e3990294a60b15a7d4e9b->enter($__internal_045fd92bac900798247688a47567e439fec6ee09234e3990294a60b15a7d4e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e686b5a08572d81b8bfe6515140c5a521537aca6b47c9660b27eb2124481f7d7->leave($__internal_e686b5a08572d81b8bfe6515140c5a521537aca6b47c9660b27eb2124481f7d7_prof);

        
        $__internal_045fd92bac900798247688a47567e439fec6ee09234e3990294a60b15a7d4e9b->leave($__internal_045fd92bac900798247688a47567e439fec6ee09234e3990294a60b15a7d4e9b_prof);

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
