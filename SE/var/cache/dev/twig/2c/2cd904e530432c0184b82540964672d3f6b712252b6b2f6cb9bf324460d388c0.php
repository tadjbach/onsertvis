<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_74e564f1cb5e9bfcbd77129f985d2a68529be74457b2dbc82a8ca4332f82f9f5 extends Twig_Template
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
        $__internal_84b99fcdd5c3dfe2ef86fa2ae85aff86bae58d3a23de42536387d67cfe8f37fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b99fcdd5c3dfe2ef86fa2ae85aff86bae58d3a23de42536387d67cfe8f37fc->enter($__internal_84b99fcdd5c3dfe2ef86fa2ae85aff86bae58d3a23de42536387d67cfe8f37fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a710229541ecc203294962c10f5a7b687116109469ad9334259b443a5c9c71c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a710229541ecc203294962c10f5a7b687116109469ad9334259b443a5c9c71c9->enter($__internal_a710229541ecc203294962c10f5a7b687116109469ad9334259b443a5c9c71c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_84b99fcdd5c3dfe2ef86fa2ae85aff86bae58d3a23de42536387d67cfe8f37fc->leave($__internal_84b99fcdd5c3dfe2ef86fa2ae85aff86bae58d3a23de42536387d67cfe8f37fc_prof);

        
        $__internal_a710229541ecc203294962c10f5a7b687116109469ad9334259b443a5c9c71c9->leave($__internal_a710229541ecc203294962c10f5a7b687116109469ad9334259b443a5c9c71c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
