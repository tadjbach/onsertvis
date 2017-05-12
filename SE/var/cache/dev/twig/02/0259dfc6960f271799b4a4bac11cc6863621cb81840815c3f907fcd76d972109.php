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
        $__internal_71b143804ede7fa0d4023faf73fb32b73317ac2db63afe3a156f49923af48397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b143804ede7fa0d4023faf73fb32b73317ac2db63afe3a156f49923af48397->enter($__internal_71b143804ede7fa0d4023faf73fb32b73317ac2db63afe3a156f49923af48397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d653eaacbb1f26cced11ebbc6865045b394573e0d13ebf341d7fd3c6536e8816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d653eaacbb1f26cced11ebbc6865045b394573e0d13ebf341d7fd3c6536e8816->enter($__internal_d653eaacbb1f26cced11ebbc6865045b394573e0d13ebf341d7fd3c6536e8816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_71b143804ede7fa0d4023faf73fb32b73317ac2db63afe3a156f49923af48397->leave($__internal_71b143804ede7fa0d4023faf73fb32b73317ac2db63afe3a156f49923af48397_prof);

        
        $__internal_d653eaacbb1f26cced11ebbc6865045b394573e0d13ebf341d7fd3c6536e8816->leave($__internal_d653eaacbb1f26cced11ebbc6865045b394573e0d13ebf341d7fd3c6536e8816_prof);

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
