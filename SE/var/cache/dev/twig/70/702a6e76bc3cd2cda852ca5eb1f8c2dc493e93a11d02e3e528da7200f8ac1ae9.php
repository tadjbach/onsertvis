<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_470af82c395534327fa4192cf28e5ca126e59715193e849734abd49f87d02b2d extends Twig_Template
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
        $__internal_33abfe2e12e91ee72e6151022bb11984ae71b7e3f59f6ccfc247f5fdd5891af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33abfe2e12e91ee72e6151022bb11984ae71b7e3f59f6ccfc247f5fdd5891af4->enter($__internal_33abfe2e12e91ee72e6151022bb11984ae71b7e3f59f6ccfc247f5fdd5891af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9f8368374bedb057cf585408287903a72ed0b580a80d76eb77a4c75aa725072d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8368374bedb057cf585408287903a72ed0b580a80d76eb77a4c75aa725072d->enter($__internal_9f8368374bedb057cf585408287903a72ed0b580a80d76eb77a4c75aa725072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_33abfe2e12e91ee72e6151022bb11984ae71b7e3f59f6ccfc247f5fdd5891af4->leave($__internal_33abfe2e12e91ee72e6151022bb11984ae71b7e3f59f6ccfc247f5fdd5891af4_prof);

        
        $__internal_9f8368374bedb057cf585408287903a72ed0b580a80d76eb77a4c75aa725072d->leave($__internal_9f8368374bedb057cf585408287903a72ed0b580a80d76eb77a4c75aa725072d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
