<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b6976b9ec018942d7c084fce8cec64fa8f58cea606fd54f5cba4cd887cf56c32 extends Twig_Template
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
        $__internal_861cc2b9c9275b08de202802971112830c4dfaf084e00a03363b3e2c572539bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861cc2b9c9275b08de202802971112830c4dfaf084e00a03363b3e2c572539bf->enter($__internal_861cc2b9c9275b08de202802971112830c4dfaf084e00a03363b3e2c572539bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_aa24b7c9132baa01226f60160ffac2c3f951d5764a3610510908c0c6ce17f302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa24b7c9132baa01226f60160ffac2c3f951d5764a3610510908c0c6ce17f302->enter($__internal_aa24b7c9132baa01226f60160ffac2c3f951d5764a3610510908c0c6ce17f302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_861cc2b9c9275b08de202802971112830c4dfaf084e00a03363b3e2c572539bf->leave($__internal_861cc2b9c9275b08de202802971112830c4dfaf084e00a03363b3e2c572539bf_prof);

        
        $__internal_aa24b7c9132baa01226f60160ffac2c3f951d5764a3610510908c0c6ce17f302->leave($__internal_aa24b7c9132baa01226f60160ffac2c3f951d5764a3610510908c0c6ce17f302_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
