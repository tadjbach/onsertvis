<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_52d3587c9714c0cc89a08494411f571d4d4f1aed25cee5ed448109dc9acc7a8d extends Twig_Template
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
        $__internal_caed9dfa876fc0f588fc8d9f0bddfc4db585f00c5ed983530b59c6b4d0192d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caed9dfa876fc0f588fc8d9f0bddfc4db585f00c5ed983530b59c6b4d0192d5d->enter($__internal_caed9dfa876fc0f588fc8d9f0bddfc4db585f00c5ed983530b59c6b4d0192d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2648c1ae1f611164c01416e89f845273be5bf80555d9e73547cb61be577d1a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2648c1ae1f611164c01416e89f845273be5bf80555d9e73547cb61be577d1a60->enter($__internal_2648c1ae1f611164c01416e89f845273be5bf80555d9e73547cb61be577d1a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_caed9dfa876fc0f588fc8d9f0bddfc4db585f00c5ed983530b59c6b4d0192d5d->leave($__internal_caed9dfa876fc0f588fc8d9f0bddfc4db585f00c5ed983530b59c6b4d0192d5d_prof);

        
        $__internal_2648c1ae1f611164c01416e89f845273be5bf80555d9e73547cb61be577d1a60->leave($__internal_2648c1ae1f611164c01416e89f845273be5bf80555d9e73547cb61be577d1a60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
