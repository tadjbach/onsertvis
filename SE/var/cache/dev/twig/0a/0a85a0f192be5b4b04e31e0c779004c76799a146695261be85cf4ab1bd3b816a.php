<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a41272911c9e634d12c1dec630eb9b018ff74d0668f2dd4e45d7d05ffa1bd332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41272911c9e634d12c1dec630eb9b018ff74d0668f2dd4e45d7d05ffa1bd332->enter($__internal_a41272911c9e634d12c1dec630eb9b018ff74d0668f2dd4e45d7d05ffa1bd332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_fce0ab056797c7fced003164718168bb8e6075db66f5594b3701e93799491428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce0ab056797c7fced003164718168bb8e6075db66f5594b3701e93799491428->enter($__internal_fce0ab056797c7fced003164718168bb8e6075db66f5594b3701e93799491428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41272911c9e634d12c1dec630eb9b018ff74d0668f2dd4e45d7d05ffa1bd332->leave($__internal_a41272911c9e634d12c1dec630eb9b018ff74d0668f2dd4e45d7d05ffa1bd332_prof);

        
        $__internal_fce0ab056797c7fced003164718168bb8e6075db66f5594b3701e93799491428->leave($__internal_fce0ab056797c7fced003164718168bb8e6075db66f5594b3701e93799491428_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5bc082341862724a50689d34ce3b8de5f6dc15ca04aa70313498fbcf3a5a85df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc082341862724a50689d34ce3b8de5f6dc15ca04aa70313498fbcf3a5a85df->enter($__internal_5bc082341862724a50689d34ce3b8de5f6dc15ca04aa70313498fbcf3a5a85df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3be2ac32e640a7fda9baebf9e5d146078197a1a4eaddabca618899c3150cd18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be2ac32e640a7fda9baebf9e5d146078197a1a4eaddabca618899c3150cd18a->enter($__internal_3be2ac32e640a7fda9baebf9e5d146078197a1a4eaddabca618899c3150cd18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3be2ac32e640a7fda9baebf9e5d146078197a1a4eaddabca618899c3150cd18a->leave($__internal_3be2ac32e640a7fda9baebf9e5d146078197a1a4eaddabca618899c3150cd18a_prof);

        
        $__internal_5bc082341862724a50689d34ce3b8de5f6dc15ca04aa70313498fbcf3a5a85df->leave($__internal_5bc082341862724a50689d34ce3b8de5f6dc15ca04aa70313498fbcf3a5a85df_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f61f8896f601e0c1009282a94fcd612268cef384936e326c21b493320aec5b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f61f8896f601e0c1009282a94fcd612268cef384936e326c21b493320aec5b7->enter($__internal_4f61f8896f601e0c1009282a94fcd612268cef384936e326c21b493320aec5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0119f523a0a79df754e41cb84abcb719501200362e13c350a0bef57aa900f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0119f523a0a79df754e41cb84abcb719501200362e13c350a0bef57aa900f74->enter($__internal_d0119f523a0a79df754e41cb84abcb719501200362e13c350a0bef57aa900f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d0119f523a0a79df754e41cb84abcb719501200362e13c350a0bef57aa900f74->leave($__internal_d0119f523a0a79df754e41cb84abcb719501200362e13c350a0bef57aa900f74_prof);

        
        $__internal_4f61f8896f601e0c1009282a94fcd612268cef384936e326c21b493320aec5b7->leave($__internal_4f61f8896f601e0c1009282a94fcd612268cef384936e326c21b493320aec5b7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2d2326b786073ae6e01c4ee6e08a84e1a1fbc89803c12d555463aedfd29facd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d2326b786073ae6e01c4ee6e08a84e1a1fbc89803c12d555463aedfd29facd->enter($__internal_e2d2326b786073ae6e01c4ee6e08a84e1a1fbc89803c12d555463aedfd29facd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6690c356589e4b511d99bd136357e7ad11b53c685c1bd2e3878ed81b2494d20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6690c356589e4b511d99bd136357e7ad11b53c685c1bd2e3878ed81b2494d20b->enter($__internal_6690c356589e4b511d99bd136357e7ad11b53c685c1bd2e3878ed81b2494d20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6690c356589e4b511d99bd136357e7ad11b53c685c1bd2e3878ed81b2494d20b->leave($__internal_6690c356589e4b511d99bd136357e7ad11b53c685c1bd2e3878ed81b2494d20b_prof);

        
        $__internal_e2d2326b786073ae6e01c4ee6e08a84e1a1fbc89803c12d555463aedfd29facd->leave($__internal_e2d2326b786073ae6e01c4ee6e08a84e1a1fbc89803c12d555463aedfd29facd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/bach_tadj/www/onsertvis/SE/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
