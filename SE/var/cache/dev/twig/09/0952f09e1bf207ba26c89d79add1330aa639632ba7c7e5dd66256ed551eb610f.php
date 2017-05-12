<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ef49dfddc4f436ae7634e9195fbf912e75728dbcaa7a630ef80bdb4c4413848d extends Twig_Template
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
        $__internal_98ac3d18cd37eb0f0fc9a6eeb039def3c1a966bb94eef07481e23d323fb9c072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ac3d18cd37eb0f0fc9a6eeb039def3c1a966bb94eef07481e23d323fb9c072->enter($__internal_98ac3d18cd37eb0f0fc9a6eeb039def3c1a966bb94eef07481e23d323fb9c072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ed35ff809245d059251751311d0960f8ba61cec946cafac089c8f3fea00f4f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed35ff809245d059251751311d0960f8ba61cec946cafac089c8f3fea00f4f80->enter($__internal_ed35ff809245d059251751311d0960f8ba61cec946cafac089c8f3fea00f4f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_98ac3d18cd37eb0f0fc9a6eeb039def3c1a966bb94eef07481e23d323fb9c072->leave($__internal_98ac3d18cd37eb0f0fc9a6eeb039def3c1a966bb94eef07481e23d323fb9c072_prof);

        
        $__internal_ed35ff809245d059251751311d0960f8ba61cec946cafac089c8f3fea00f4f80->leave($__internal_ed35ff809245d059251751311d0960f8ba61cec946cafac089c8f3fea00f4f80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
