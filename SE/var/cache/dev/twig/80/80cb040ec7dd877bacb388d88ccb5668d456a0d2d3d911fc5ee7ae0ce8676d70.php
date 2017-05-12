<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_357a3709962281e74fff48f323d6a2a62b03fd37567cfddb832b7c576498d165 extends Twig_Template
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
        $__internal_51e6c11165a7cbb65ba94c64f453225df317e9ebf23ba5b178389d08f261bf37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e6c11165a7cbb65ba94c64f453225df317e9ebf23ba5b178389d08f261bf37->enter($__internal_51e6c11165a7cbb65ba94c64f453225df317e9ebf23ba5b178389d08f261bf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_982359a4f98b7b628159ea7342aa9fd4a1d230621cd05f2f0666a13deaada842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982359a4f98b7b628159ea7342aa9fd4a1d230621cd05f2f0666a13deaada842->enter($__internal_982359a4f98b7b628159ea7342aa9fd4a1d230621cd05f2f0666a13deaada842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_51e6c11165a7cbb65ba94c64f453225df317e9ebf23ba5b178389d08f261bf37->leave($__internal_51e6c11165a7cbb65ba94c64f453225df317e9ebf23ba5b178389d08f261bf37_prof);

        
        $__internal_982359a4f98b7b628159ea7342aa9fd4a1d230621cd05f2f0666a13deaada842->leave($__internal_982359a4f98b7b628159ea7342aa9fd4a1d230621cd05f2f0666a13deaada842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
