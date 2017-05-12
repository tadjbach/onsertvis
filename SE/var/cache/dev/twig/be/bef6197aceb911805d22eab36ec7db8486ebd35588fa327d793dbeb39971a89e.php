<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4939240c8d71e130601f08bbb4bda343dbe9f40335f5412a663449eadf909200 extends Twig_Template
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
        $__internal_69c5fad6faadea53aa72d35806d726299d7e8db164b34bf64bc9739a47ce48db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c5fad6faadea53aa72d35806d726299d7e8db164b34bf64bc9739a47ce48db->enter($__internal_69c5fad6faadea53aa72d35806d726299d7e8db164b34bf64bc9739a47ce48db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2d841184b18c30a54590ee2965243cff8308173da09880f2d8995a4feddfd37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d841184b18c30a54590ee2965243cff8308173da09880f2d8995a4feddfd37f->enter($__internal_2d841184b18c30a54590ee2965243cff8308173da09880f2d8995a4feddfd37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_69c5fad6faadea53aa72d35806d726299d7e8db164b34bf64bc9739a47ce48db->leave($__internal_69c5fad6faadea53aa72d35806d726299d7e8db164b34bf64bc9739a47ce48db_prof);

        
        $__internal_2d841184b18c30a54590ee2965243cff8308173da09880f2d8995a4feddfd37f->leave($__internal_2d841184b18c30a54590ee2965243cff8308173da09880f2d8995a4feddfd37f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
