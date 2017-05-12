<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a5861ca3eed06fdd1521db96ed7b7fb36a2f2fe8de8133a4ff8c3de326dffbd7 extends Twig_Template
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
        $__internal_369f9d0919f1fbdaf8f9df923e46bf1f0e04445dfc2bcc5200cbf211b3db0e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369f9d0919f1fbdaf8f9df923e46bf1f0e04445dfc2bcc5200cbf211b3db0e4a->enter($__internal_369f9d0919f1fbdaf8f9df923e46bf1f0e04445dfc2bcc5200cbf211b3db0e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4f361ea49d650f52526a12e142783993c2ea0718fd0c60910df0fffffae56a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f361ea49d650f52526a12e142783993c2ea0718fd0c60910df0fffffae56a1d->enter($__internal_4f361ea49d650f52526a12e142783993c2ea0718fd0c60910df0fffffae56a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_369f9d0919f1fbdaf8f9df923e46bf1f0e04445dfc2bcc5200cbf211b3db0e4a->leave($__internal_369f9d0919f1fbdaf8f9df923e46bf1f0e04445dfc2bcc5200cbf211b3db0e4a_prof);

        
        $__internal_4f361ea49d650f52526a12e142783993c2ea0718fd0c60910df0fffffae56a1d->leave($__internal_4f361ea49d650f52526a12e142783993c2ea0718fd0c60910df0fffffae56a1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
