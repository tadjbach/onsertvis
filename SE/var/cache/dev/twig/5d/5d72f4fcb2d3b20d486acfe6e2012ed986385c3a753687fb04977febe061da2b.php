<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3b6ca1b2d46da73100521008658378106a83287a0f53afe550aba126b08fa583 extends Twig_Template
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
        $__internal_4b3bd00c1980125adcba9290b84b0887ab6dfbcbb2031bc72bc74da399ed4cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3bd00c1980125adcba9290b84b0887ab6dfbcbb2031bc72bc74da399ed4cf5->enter($__internal_4b3bd00c1980125adcba9290b84b0887ab6dfbcbb2031bc72bc74da399ed4cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_aea1a33d6cc687b9909aa5411ef4b81f062f393cc560e32ca1880e8549225f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea1a33d6cc687b9909aa5411ef4b81f062f393cc560e32ca1880e8549225f84->enter($__internal_aea1a33d6cc687b9909aa5411ef4b81f062f393cc560e32ca1880e8549225f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_4b3bd00c1980125adcba9290b84b0887ab6dfbcbb2031bc72bc74da399ed4cf5->leave($__internal_4b3bd00c1980125adcba9290b84b0887ab6dfbcbb2031bc72bc74da399ed4cf5_prof);

        
        $__internal_aea1a33d6cc687b9909aa5411ef4b81f062f393cc560e32ca1880e8549225f84->leave($__internal_aea1a33d6cc687b9909aa5411ef4b81f062f393cc560e32ca1880e8549225f84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
