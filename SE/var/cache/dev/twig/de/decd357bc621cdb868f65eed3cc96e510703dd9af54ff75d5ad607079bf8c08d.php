<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b685b16dfe6a86f2059a48079ac009145b60c691ad6abd8c154dc7c55aaa0dce extends Twig_Template
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
        $__internal_412cd82cabd039eb0b06aa3c38240c458e859edc4d97ac5d0606873b946e339a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412cd82cabd039eb0b06aa3c38240c458e859edc4d97ac5d0606873b946e339a->enter($__internal_412cd82cabd039eb0b06aa3c38240c458e859edc4d97ac5d0606873b946e339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bb547f512e694593ff238a942c157a352d0ce7541aea97210c408dafa74b7ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb547f512e694593ff238a942c157a352d0ce7541aea97210c408dafa74b7ebf->enter($__internal_bb547f512e694593ff238a942c157a352d0ce7541aea97210c408dafa74b7ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_412cd82cabd039eb0b06aa3c38240c458e859edc4d97ac5d0606873b946e339a->leave($__internal_412cd82cabd039eb0b06aa3c38240c458e859edc4d97ac5d0606873b946e339a_prof);

        
        $__internal_bb547f512e694593ff238a942c157a352d0ce7541aea97210c408dafa74b7ebf->leave($__internal_bb547f512e694593ff238a942c157a352d0ce7541aea97210c408dafa74b7ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
