<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_85fc24af5cf3152218c906656d23275582e34535935507c054dcad624e1a0e90 extends Twig_Template
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
        $__internal_3565fc8cf8c7a6592192814c5c3e37d871be2e3a2ed92de397396c022f4f777c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3565fc8cf8c7a6592192814c5c3e37d871be2e3a2ed92de397396c022f4f777c->enter($__internal_3565fc8cf8c7a6592192814c5c3e37d871be2e3a2ed92de397396c022f4f777c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f2061823e8c02150e8ea6ffd44efd39e51e3d22ff86e6da82ed70345c07b2bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2061823e8c02150e8ea6ffd44efd39e51e3d22ff86e6da82ed70345c07b2bcd->enter($__internal_f2061823e8c02150e8ea6ffd44efd39e51e3d22ff86e6da82ed70345c07b2bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3565fc8cf8c7a6592192814c5c3e37d871be2e3a2ed92de397396c022f4f777c->leave($__internal_3565fc8cf8c7a6592192814c5c3e37d871be2e3a2ed92de397396c022f4f777c_prof);

        
        $__internal_f2061823e8c02150e8ea6ffd44efd39e51e3d22ff86e6da82ed70345c07b2bcd->leave($__internal_f2061823e8c02150e8ea6ffd44efd39e51e3d22ff86e6da82ed70345c07b2bcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
