<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c9d6a6f0b30e3bf0a84e383458e5961cb6e2def60cfba610286895ad10204785 extends Twig_Template
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
        $__internal_48a55d6d4091b53391010389bc1a2e231f7f6151a597a6800630528fc8d022c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a55d6d4091b53391010389bc1a2e231f7f6151a597a6800630528fc8d022c4->enter($__internal_48a55d6d4091b53391010389bc1a2e231f7f6151a597a6800630528fc8d022c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f3017b83c8245e8cfb775f5680d26be527775b317cdbb6a54e963060f2535760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3017b83c8245e8cfb775f5680d26be527775b317cdbb6a54e963060f2535760->enter($__internal_f3017b83c8245e8cfb775f5680d26be527775b317cdbb6a54e963060f2535760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_48a55d6d4091b53391010389bc1a2e231f7f6151a597a6800630528fc8d022c4->leave($__internal_48a55d6d4091b53391010389bc1a2e231f7f6151a597a6800630528fc8d022c4_prof);

        
        $__internal_f3017b83c8245e8cfb775f5680d26be527775b317cdbb6a54e963060f2535760->leave($__internal_f3017b83c8245e8cfb775f5680d26be527775b317cdbb6a54e963060f2535760_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
