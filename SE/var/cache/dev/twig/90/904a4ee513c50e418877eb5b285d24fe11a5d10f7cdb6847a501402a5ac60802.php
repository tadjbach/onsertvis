<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bdc4a107988af3ffb1294e73c8b9d975e7e84f4fc2c4dd87d84f62dbabf6a5af extends Twig_Template
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
        $__internal_cfd5831f7fa5bfd312e1043c3cfda027dab584d81677df5e1b4af67220c537b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd5831f7fa5bfd312e1043c3cfda027dab584d81677df5e1b4af67220c537b4->enter($__internal_cfd5831f7fa5bfd312e1043c3cfda027dab584d81677df5e1b4af67220c537b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_acef81e2121d85d0712c5118e2989927f9da9a02f2c922f05da1bcc30013babe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acef81e2121d85d0712c5118e2989927f9da9a02f2c922f05da1bcc30013babe->enter($__internal_acef81e2121d85d0712c5118e2989927f9da9a02f2c922f05da1bcc30013babe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cfd5831f7fa5bfd312e1043c3cfda027dab584d81677df5e1b4af67220c537b4->leave($__internal_cfd5831f7fa5bfd312e1043c3cfda027dab584d81677df5e1b4af67220c537b4_prof);

        
        $__internal_acef81e2121d85d0712c5118e2989927f9da9a02f2c922f05da1bcc30013babe->leave($__internal_acef81e2121d85d0712c5118e2989927f9da9a02f2c922f05da1bcc30013babe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
