<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_470af82c395534327fa4192cf28e5ca126e59715193e849734abd49f87d02b2d extends Twig_Template
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
        $__internal_0eef4646da935590f9c3f215c4e9faa4ffb5e6c6e5e0ec69ec98d9592f157090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eef4646da935590f9c3f215c4e9faa4ffb5e6c6e5e0ec69ec98d9592f157090->enter($__internal_0eef4646da935590f9c3f215c4e9faa4ffb5e6c6e5e0ec69ec98d9592f157090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0da536e9aa1761351f29a850c460280e8b102be9e6238bde26e98fefe577e130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da536e9aa1761351f29a850c460280e8b102be9e6238bde26e98fefe577e130->enter($__internal_0da536e9aa1761351f29a850c460280e8b102be9e6238bde26e98fefe577e130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0eef4646da935590f9c3f215c4e9faa4ffb5e6c6e5e0ec69ec98d9592f157090->leave($__internal_0eef4646da935590f9c3f215c4e9faa4ffb5e6c6e5e0ec69ec98d9592f157090_prof);

        
        $__internal_0da536e9aa1761351f29a850c460280e8b102be9e6238bde26e98fefe577e130->leave($__internal_0da536e9aa1761351f29a850c460280e8b102be9e6238bde26e98fefe577e130_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
