<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_433e2ea3e52165e8df8dee4526a176f3d2a615947455ef007141e68fd142ec61 extends Twig_Template
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
        $__internal_77c2586bf6a91f0a83beee6f34aa0bef7a9364176511af6a1653f927685931d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c2586bf6a91f0a83beee6f34aa0bef7a9364176511af6a1653f927685931d1->enter($__internal_77c2586bf6a91f0a83beee6f34aa0bef7a9364176511af6a1653f927685931d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8010edef844c7fddab843325e6034eb67eed00cd8a31da8164c042bbb646273f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8010edef844c7fddab843325e6034eb67eed00cd8a31da8164c042bbb646273f->enter($__internal_8010edef844c7fddab843325e6034eb67eed00cd8a31da8164c042bbb646273f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_77c2586bf6a91f0a83beee6f34aa0bef7a9364176511af6a1653f927685931d1->leave($__internal_77c2586bf6a91f0a83beee6f34aa0bef7a9364176511af6a1653f927685931d1_prof);

        
        $__internal_8010edef844c7fddab843325e6034eb67eed00cd8a31da8164c042bbb646273f->leave($__internal_8010edef844c7fddab843325e6034eb67eed00cd8a31da8164c042bbb646273f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
