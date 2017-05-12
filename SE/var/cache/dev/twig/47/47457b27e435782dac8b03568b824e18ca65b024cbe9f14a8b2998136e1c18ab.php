<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a5861ca3eed06fdd1521db96ed7b7fb36a2f2fe8de8133a4ff8c3de326dffbd7 extends Twig_Template
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
        $__internal_4654f154570bb487d839112c183670125fd62d175bb2ed85b71a08fc486e441a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4654f154570bb487d839112c183670125fd62d175bb2ed85b71a08fc486e441a->enter($__internal_4654f154570bb487d839112c183670125fd62d175bb2ed85b71a08fc486e441a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a6713da4fe55f92e56306a97755aa4d90cda95afb4d9a6898fb8fb92d776385b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6713da4fe55f92e56306a97755aa4d90cda95afb4d9a6898fb8fb92d776385b->enter($__internal_a6713da4fe55f92e56306a97755aa4d90cda95afb4d9a6898fb8fb92d776385b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4654f154570bb487d839112c183670125fd62d175bb2ed85b71a08fc486e441a->leave($__internal_4654f154570bb487d839112c183670125fd62d175bb2ed85b71a08fc486e441a_prof);

        
        $__internal_a6713da4fe55f92e56306a97755aa4d90cda95afb4d9a6898fb8fb92d776385b->leave($__internal_a6713da4fe55f92e56306a97755aa4d90cda95afb4d9a6898fb8fb92d776385b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
