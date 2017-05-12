<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e1721a60dc789c3a6c99dca65dbac793c1f7da38caaf9309163e7e38eaf50e45 extends Twig_Template
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
        $__internal_690e628998e3c16a4c72fbcdaa6afd69051b6bc540d1e02d1ee2314130171ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690e628998e3c16a4c72fbcdaa6afd69051b6bc540d1e02d1ee2314130171ea8->enter($__internal_690e628998e3c16a4c72fbcdaa6afd69051b6bc540d1e02d1ee2314130171ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c10f8030859a0e29e8643be3811679f991a9b0755078533413d6c6e237d9ef77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10f8030859a0e29e8643be3811679f991a9b0755078533413d6c6e237d9ef77->enter($__internal_c10f8030859a0e29e8643be3811679f991a9b0755078533413d6c6e237d9ef77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_690e628998e3c16a4c72fbcdaa6afd69051b6bc540d1e02d1ee2314130171ea8->leave($__internal_690e628998e3c16a4c72fbcdaa6afd69051b6bc540d1e02d1ee2314130171ea8_prof);

        
        $__internal_c10f8030859a0e29e8643be3811679f991a9b0755078533413d6c6e237d9ef77->leave($__internal_c10f8030859a0e29e8643be3811679f991a9b0755078533413d6c6e237d9ef77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
