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
        $__internal_56e35b7d926bb7de6e444e117821ee7b95185d6a6a41d8627b8a48dc9db52c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e35b7d926bb7de6e444e117821ee7b95185d6a6a41d8627b8a48dc9db52c9c->enter($__internal_56e35b7d926bb7de6e444e117821ee7b95185d6a6a41d8627b8a48dc9db52c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_db7a1577620582f7f502a20d325cf4f0e15a3e7bf27b58fa1692d92a9cb6c2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7a1577620582f7f502a20d325cf4f0e15a3e7bf27b58fa1692d92a9cb6c2cd->enter($__internal_db7a1577620582f7f502a20d325cf4f0e15a3e7bf27b58fa1692d92a9cb6c2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_56e35b7d926bb7de6e444e117821ee7b95185d6a6a41d8627b8a48dc9db52c9c->leave($__internal_56e35b7d926bb7de6e444e117821ee7b95185d6a6a41d8627b8a48dc9db52c9c_prof);

        
        $__internal_db7a1577620582f7f502a20d325cf4f0e15a3e7bf27b58fa1692d92a9cb6c2cd->leave($__internal_db7a1577620582f7f502a20d325cf4f0e15a3e7bf27b58fa1692d92a9cb6c2cd_prof);

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
