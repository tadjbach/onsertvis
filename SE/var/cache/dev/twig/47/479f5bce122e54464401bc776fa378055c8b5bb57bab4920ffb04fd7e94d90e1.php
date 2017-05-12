<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e1721a60dc789c3a6c99dca65dbac793c1f7da38caaf9309163e7e38eaf50e45 extends Twig_Template
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
        $__internal_7beb3d6d32538244b2b564426136b6b993d0c0597a77fd5c21359a87cadf4655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7beb3d6d32538244b2b564426136b6b993d0c0597a77fd5c21359a87cadf4655->enter($__internal_7beb3d6d32538244b2b564426136b6b993d0c0597a77fd5c21359a87cadf4655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3fdff8ae47761b8704e51c9b7f06423404a15cb48b99920b468c600f6b1fc2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdff8ae47761b8704e51c9b7f06423404a15cb48b99920b468c600f6b1fc2e1->enter($__internal_3fdff8ae47761b8704e51c9b7f06423404a15cb48b99920b468c600f6b1fc2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7beb3d6d32538244b2b564426136b6b993d0c0597a77fd5c21359a87cadf4655->leave($__internal_7beb3d6d32538244b2b564426136b6b993d0c0597a77fd5c21359a87cadf4655_prof);

        
        $__internal_3fdff8ae47761b8704e51c9b7f06423404a15cb48b99920b468c600f6b1fc2e1->leave($__internal_3fdff8ae47761b8704e51c9b7f06423404a15cb48b99920b468c600f6b1fc2e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
