<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c9d6a6f0b30e3bf0a84e383458e5961cb6e2def60cfba610286895ad10204785 extends Twig_Template
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
        $__internal_860471d9b279beddf26f16baa5e209c2c79f7a46cc7978004c707bdda923e2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860471d9b279beddf26f16baa5e209c2c79f7a46cc7978004c707bdda923e2c9->enter($__internal_860471d9b279beddf26f16baa5e209c2c79f7a46cc7978004c707bdda923e2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ddb849a717bb119708e5805f1f7b07b72d391deb908a0c2d59011340a04bf042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb849a717bb119708e5805f1f7b07b72d391deb908a0c2d59011340a04bf042->enter($__internal_ddb849a717bb119708e5805f1f7b07b72d391deb908a0c2d59011340a04bf042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_860471d9b279beddf26f16baa5e209c2c79f7a46cc7978004c707bdda923e2c9->leave($__internal_860471d9b279beddf26f16baa5e209c2c79f7a46cc7978004c707bdda923e2c9_prof);

        
        $__internal_ddb849a717bb119708e5805f1f7b07b72d391deb908a0c2d59011340a04bf042->leave($__internal_ddb849a717bb119708e5805f1f7b07b72d391deb908a0c2d59011340a04bf042_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
