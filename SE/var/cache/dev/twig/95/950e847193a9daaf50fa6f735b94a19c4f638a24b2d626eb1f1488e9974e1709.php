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
        $__internal_2b9d1c6e237e10e4fdd104188669bb7ecdb1fbdc71c9678b0d3f9bac1b4560d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9d1c6e237e10e4fdd104188669bb7ecdb1fbdc71c9678b0d3f9bac1b4560d3->enter($__internal_2b9d1c6e237e10e4fdd104188669bb7ecdb1fbdc71c9678b0d3f9bac1b4560d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3afd30264631ff1bf6fbc2478b32aa28b6eb4ecb76f691d808a96a925c8301c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afd30264631ff1bf6fbc2478b32aa28b6eb4ecb76f691d808a96a925c8301c5->enter($__internal_3afd30264631ff1bf6fbc2478b32aa28b6eb4ecb76f691d808a96a925c8301c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2b9d1c6e237e10e4fdd104188669bb7ecdb1fbdc71c9678b0d3f9bac1b4560d3->leave($__internal_2b9d1c6e237e10e4fdd104188669bb7ecdb1fbdc71c9678b0d3f9bac1b4560d3_prof);

        
        $__internal_3afd30264631ff1bf6fbc2478b32aa28b6eb4ecb76f691d808a96a925c8301c5->leave($__internal_3afd30264631ff1bf6fbc2478b32aa28b6eb4ecb76f691d808a96a925c8301c5_prof);

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
