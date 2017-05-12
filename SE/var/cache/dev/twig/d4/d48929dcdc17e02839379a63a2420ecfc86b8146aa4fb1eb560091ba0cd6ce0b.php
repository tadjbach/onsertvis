<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d73eb0827a759900e7561ec6bb50fee62aaeadf76beb4620a683399b86322d24 extends Twig_Template
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
        $__internal_f483fe3d75cba8c9d0c79169859c014859022f4d44c46afd5ffa3549744a723b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f483fe3d75cba8c9d0c79169859c014859022f4d44c46afd5ffa3549744a723b->enter($__internal_f483fe3d75cba8c9d0c79169859c014859022f4d44c46afd5ffa3549744a723b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_dd62852ff336e288ad91b77dd8bf27b498b7fa447abffd201005a207635b622b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd62852ff336e288ad91b77dd8bf27b498b7fa447abffd201005a207635b622b->enter($__internal_dd62852ff336e288ad91b77dd8bf27b498b7fa447abffd201005a207635b622b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f483fe3d75cba8c9d0c79169859c014859022f4d44c46afd5ffa3549744a723b->leave($__internal_f483fe3d75cba8c9d0c79169859c014859022f4d44c46afd5ffa3549744a723b_prof);

        
        $__internal_dd62852ff336e288ad91b77dd8bf27b498b7fa447abffd201005a207635b622b->leave($__internal_dd62852ff336e288ad91b77dd8bf27b498b7fa447abffd201005a207635b622b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
