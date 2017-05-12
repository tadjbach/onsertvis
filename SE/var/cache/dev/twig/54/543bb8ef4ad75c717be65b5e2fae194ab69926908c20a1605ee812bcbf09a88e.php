<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e4e71f926fdf95af45114576b779bcf46d1c2c8a44600236ee54b217b1ae579c extends Twig_Template
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
        $__internal_39d4904f673b12ad2d0b992c637747cb5e299598d1c705090a31baf6bf0cab0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d4904f673b12ad2d0b992c637747cb5e299598d1c705090a31baf6bf0cab0f->enter($__internal_39d4904f673b12ad2d0b992c637747cb5e299598d1c705090a31baf6bf0cab0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_dce0218d50088a001d172a732503067dc9c5a6d27d74df37759f6155f6eaffa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce0218d50088a001d172a732503067dc9c5a6d27d74df37759f6155f6eaffa4->enter($__internal_dce0218d50088a001d172a732503067dc9c5a6d27d74df37759f6155f6eaffa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_39d4904f673b12ad2d0b992c637747cb5e299598d1c705090a31baf6bf0cab0f->leave($__internal_39d4904f673b12ad2d0b992c637747cb5e299598d1c705090a31baf6bf0cab0f_prof);

        
        $__internal_dce0218d50088a001d172a732503067dc9c5a6d27d74df37759f6155f6eaffa4->leave($__internal_dce0218d50088a001d172a732503067dc9c5a6d27d74df37759f6155f6eaffa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
