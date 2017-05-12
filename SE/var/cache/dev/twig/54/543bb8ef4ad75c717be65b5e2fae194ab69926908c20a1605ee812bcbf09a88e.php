<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e4e71f926fdf95af45114576b779bcf46d1c2c8a44600236ee54b217b1ae579c extends Twig_Template
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
        $__internal_52a60e3fbd10131c8bb6d9665895b76ea6e4b3272cf9151a4c1ff9129135ea91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a60e3fbd10131c8bb6d9665895b76ea6e4b3272cf9151a4c1ff9129135ea91->enter($__internal_52a60e3fbd10131c8bb6d9665895b76ea6e4b3272cf9151a4c1ff9129135ea91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4dc40cac25aff6089cf4b4ed13af4e708f28d540b55ba0313642b4886615f0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc40cac25aff6089cf4b4ed13af4e708f28d540b55ba0313642b4886615f0bf->enter($__internal_4dc40cac25aff6089cf4b4ed13af4e708f28d540b55ba0313642b4886615f0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_52a60e3fbd10131c8bb6d9665895b76ea6e4b3272cf9151a4c1ff9129135ea91->leave($__internal_52a60e3fbd10131c8bb6d9665895b76ea6e4b3272cf9151a4c1ff9129135ea91_prof);

        
        $__internal_4dc40cac25aff6089cf4b4ed13af4e708f28d540b55ba0313642b4886615f0bf->leave($__internal_4dc40cac25aff6089cf4b4ed13af4e708f28d540b55ba0313642b4886615f0bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
