<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f7f61c297d6a7c736ca87a082777a38766034271aac3973d25c72cca63a94419 extends Twig_Template
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
        $__internal_1492d6085566bacc09930b797bbef6c7fbe034320bbffb3816db659b8c79e5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1492d6085566bacc09930b797bbef6c7fbe034320bbffb3816db659b8c79e5b6->enter($__internal_1492d6085566bacc09930b797bbef6c7fbe034320bbffb3816db659b8c79e5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dbdf7dfff571f01b32379fc7beda55889ac276b4c17765de8c120c90f1202ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdf7dfff571f01b32379fc7beda55889ac276b4c17765de8c120c90f1202ad5->enter($__internal_dbdf7dfff571f01b32379fc7beda55889ac276b4c17765de8c120c90f1202ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1492d6085566bacc09930b797bbef6c7fbe034320bbffb3816db659b8c79e5b6->leave($__internal_1492d6085566bacc09930b797bbef6c7fbe034320bbffb3816db659b8c79e5b6_prof);

        
        $__internal_dbdf7dfff571f01b32379fc7beda55889ac276b4c17765de8c120c90f1202ad5->leave($__internal_dbdf7dfff571f01b32379fc7beda55889ac276b4c17765de8c120c90f1202ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
