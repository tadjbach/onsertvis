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
        $__internal_6cf01ff047650d0aaabc464457e76d78d8d69b5d7c8361af223ce75f4b5b3354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf01ff047650d0aaabc464457e76d78d8d69b5d7c8361af223ce75f4b5b3354->enter($__internal_6cf01ff047650d0aaabc464457e76d78d8d69b5d7c8361af223ce75f4b5b3354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a028148d63716f3bae4d0293d515cde94e977dba195a2e92a94bea6fae6d79c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a028148d63716f3bae4d0293d515cde94e977dba195a2e92a94bea6fae6d79c6->enter($__internal_a028148d63716f3bae4d0293d515cde94e977dba195a2e92a94bea6fae6d79c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6cf01ff047650d0aaabc464457e76d78d8d69b5d7c8361af223ce75f4b5b3354->leave($__internal_6cf01ff047650d0aaabc464457e76d78d8d69b5d7c8361af223ce75f4b5b3354_prof);

        
        $__internal_a028148d63716f3bae4d0293d515cde94e977dba195a2e92a94bea6fae6d79c6->leave($__internal_a028148d63716f3bae4d0293d515cde94e977dba195a2e92a94bea6fae6d79c6_prof);

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
