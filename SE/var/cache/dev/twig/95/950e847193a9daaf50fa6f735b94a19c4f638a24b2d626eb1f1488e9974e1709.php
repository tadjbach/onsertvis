<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_06924a1356a8fa6502f04dabbc9691d0029bfeffc861796df5a68debcd11c7ce extends Twig_Template
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
        $__internal_5948f9d0db4cbe64ada10310c9a8d69151c34a1bd4156ebae7748983dd965b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5948f9d0db4cbe64ada10310c9a8d69151c34a1bd4156ebae7748983dd965b40->enter($__internal_5948f9d0db4cbe64ada10310c9a8d69151c34a1bd4156ebae7748983dd965b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8fcbadbf74955f19b95f10d81b48ee160fcf933cd260f84a24b97790f5775137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcbadbf74955f19b95f10d81b48ee160fcf933cd260f84a24b97790f5775137->enter($__internal_8fcbadbf74955f19b95f10d81b48ee160fcf933cd260f84a24b97790f5775137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5948f9d0db4cbe64ada10310c9a8d69151c34a1bd4156ebae7748983dd965b40->leave($__internal_5948f9d0db4cbe64ada10310c9a8d69151c34a1bd4156ebae7748983dd965b40_prof);

        
        $__internal_8fcbadbf74955f19b95f10d81b48ee160fcf933cd260f84a24b97790f5775137->leave($__internal_8fcbadbf74955f19b95f10d81b48ee160fcf933cd260f84a24b97790f5775137_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
