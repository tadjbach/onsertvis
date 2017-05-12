<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0992200e561741c94855ec9c52355578c09f2c1fbf44ef79972620a1370059fc extends Twig_Template
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
        $__internal_fe6b07b2d6e40079ba78838910d7b43d24b4a06f62dcac9e8903700a3d99da70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6b07b2d6e40079ba78838910d7b43d24b4a06f62dcac9e8903700a3d99da70->enter($__internal_fe6b07b2d6e40079ba78838910d7b43d24b4a06f62dcac9e8903700a3d99da70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f4069b55b20147533452bd04359f3a2c66b3adb14f200f2d4842e6f31fa55b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4069b55b20147533452bd04359f3a2c66b3adb14f200f2d4842e6f31fa55b92->enter($__internal_f4069b55b20147533452bd04359f3a2c66b3adb14f200f2d4842e6f31fa55b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fe6b07b2d6e40079ba78838910d7b43d24b4a06f62dcac9e8903700a3d99da70->leave($__internal_fe6b07b2d6e40079ba78838910d7b43d24b4a06f62dcac9e8903700a3d99da70_prof);

        
        $__internal_f4069b55b20147533452bd04359f3a2c66b3adb14f200f2d4842e6f31fa55b92->leave($__internal_f4069b55b20147533452bd04359f3a2c66b3adb14f200f2d4842e6f31fa55b92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
