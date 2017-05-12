<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_357a3709962281e74fff48f323d6a2a62b03fd37567cfddb832b7c576498d165 extends Twig_Template
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
        $__internal_e70892466b74f9abcaf141ea410efa9118497faceb6d66b37c2fa90a54570491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70892466b74f9abcaf141ea410efa9118497faceb6d66b37c2fa90a54570491->enter($__internal_e70892466b74f9abcaf141ea410efa9118497faceb6d66b37c2fa90a54570491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c1dd620b30203deff1897550522b7177f3427cf49f396d3d3741e72477ef0c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1dd620b30203deff1897550522b7177f3427cf49f396d3d3741e72477ef0c38->enter($__internal_c1dd620b30203deff1897550522b7177f3427cf49f396d3d3741e72477ef0c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e70892466b74f9abcaf141ea410efa9118497faceb6d66b37c2fa90a54570491->leave($__internal_e70892466b74f9abcaf141ea410efa9118497faceb6d66b37c2fa90a54570491_prof);

        
        $__internal_c1dd620b30203deff1897550522b7177f3427cf49f396d3d3741e72477ef0c38->leave($__internal_c1dd620b30203deff1897550522b7177f3427cf49f396d3d3741e72477ef0c38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
