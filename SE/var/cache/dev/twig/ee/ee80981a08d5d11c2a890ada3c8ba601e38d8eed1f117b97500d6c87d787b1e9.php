<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4339d000dc752b49fcc130e86b78e8979a85d0ebf7e701bdaeec31a3c287ad06 extends Twig_Template
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
        $__internal_33c35fc8dee873085694c5f5f3cec116dbb8eec94c8f34c4c51e6f82e29b9ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c35fc8dee873085694c5f5f3cec116dbb8eec94c8f34c4c51e6f82e29b9ee7->enter($__internal_33c35fc8dee873085694c5f5f3cec116dbb8eec94c8f34c4c51e6f82e29b9ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_23b14297def899e75c7b480baa4eead5621d62fecdb9ec5fbb6cd8507d60179d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b14297def899e75c7b480baa4eead5621d62fecdb9ec5fbb6cd8507d60179d->enter($__internal_23b14297def899e75c7b480baa4eead5621d62fecdb9ec5fbb6cd8507d60179d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_33c35fc8dee873085694c5f5f3cec116dbb8eec94c8f34c4c51e6f82e29b9ee7->leave($__internal_33c35fc8dee873085694c5f5f3cec116dbb8eec94c8f34c4c51e6f82e29b9ee7_prof);

        
        $__internal_23b14297def899e75c7b480baa4eead5621d62fecdb9ec5fbb6cd8507d60179d->leave($__internal_23b14297def899e75c7b480baa4eead5621d62fecdb9ec5fbb6cd8507d60179d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
