<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_30da7ad7b328d25e42683f2fbed74867e739c23ae9b246dee7985d4fe4953f05 extends Twig_Template
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
        $__internal_da1d2b6ad5b2666d7ea2169cd86a385ba66297570f8c55dd42b77a54e11949ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1d2b6ad5b2666d7ea2169cd86a385ba66297570f8c55dd42b77a54e11949ca->enter($__internal_da1d2b6ad5b2666d7ea2169cd86a385ba66297570f8c55dd42b77a54e11949ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8700b75307408f86e77588bb02e199f14fc6774f0eab996e81bdbd9d0dcbb28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8700b75307408f86e77588bb02e199f14fc6774f0eab996e81bdbd9d0dcbb28e->enter($__internal_8700b75307408f86e77588bb02e199f14fc6774f0eab996e81bdbd9d0dcbb28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_da1d2b6ad5b2666d7ea2169cd86a385ba66297570f8c55dd42b77a54e11949ca->leave($__internal_da1d2b6ad5b2666d7ea2169cd86a385ba66297570f8c55dd42b77a54e11949ca_prof);

        
        $__internal_8700b75307408f86e77588bb02e199f14fc6774f0eab996e81bdbd9d0dcbb28e->leave($__internal_8700b75307408f86e77588bb02e199f14fc6774f0eab996e81bdbd9d0dcbb28e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
