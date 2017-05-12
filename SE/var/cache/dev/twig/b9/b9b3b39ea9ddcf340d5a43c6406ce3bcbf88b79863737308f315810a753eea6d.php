<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fe57c777a999d78c814327b35f450c63aea346a0ace73ee043f6e0cdd0048cd0 extends Twig_Template
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
        $__internal_1ed10ecfe1e720f766921e0a6fa4caed375e5cac687f1930dc17a0bcd6197d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed10ecfe1e720f766921e0a6fa4caed375e5cac687f1930dc17a0bcd6197d9a->enter($__internal_1ed10ecfe1e720f766921e0a6fa4caed375e5cac687f1930dc17a0bcd6197d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_dac4222b35f6c2e6adfd44a6d598d73b95d881f3c5413138d87a0effa1603f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac4222b35f6c2e6adfd44a6d598d73b95d881f3c5413138d87a0effa1603f56->enter($__internal_dac4222b35f6c2e6adfd44a6d598d73b95d881f3c5413138d87a0effa1603f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1ed10ecfe1e720f766921e0a6fa4caed375e5cac687f1930dc17a0bcd6197d9a->leave($__internal_1ed10ecfe1e720f766921e0a6fa4caed375e5cac687f1930dc17a0bcd6197d9a_prof);

        
        $__internal_dac4222b35f6c2e6adfd44a6d598d73b95d881f3c5413138d87a0effa1603f56->leave($__internal_dac4222b35f6c2e6adfd44a6d598d73b95d881f3c5413138d87a0effa1603f56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
