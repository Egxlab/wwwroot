<?php

/* news.tickers.html.twig */
class __TwigTemplate_9368c486839ba87cf5568873049b7b1edccf0442ae09a5cfde1d808e9e630642 extends Twig_Template
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
        // line 1
        echo "<table style=\"width: 100%\">
\t<tr class=\"white\" bgcolor=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td colspan=\"3\">Tickers</td>
\t</tr>
\t";
        // line 5
        $context["i"] = 0;
        // line 6
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickers"]) ? $context["tickers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticker"]) {
            // line 7
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\">
\t\t<td style=\"width: 16px;\"><img src=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/news/icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "icon", array()), "html", null, true);
            echo "_small.gif\"/></td>
\t\t<td style=\"width: 80px;\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticker"], "date", array()), "j M Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 10
            echo $this->getAttribute($context["ticker"], "body", array());
            echo "</td>
\t</tr>
\t";
            // line 12
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 13
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</table>
<br/>";
    }

    public function getTemplateName()
    {
        return "news.tickers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  57 => 13,  55 => 12,  50 => 10,  46 => 9,  40 => 8,  35 => 7,  30 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "news.tickers.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\news.tickers.html.twig");
    }
}
