<?php

/* news.html.twig */
class __TwigTemplate_f9de507bb53d44081b063193d99e03e4aa19ab083ee822a972ed3c819ed7c0b0 extends Twig_Template
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
        echo "<table class=\"table\" style=\"clear:both\" border=0 cellpadding=0 cellspacing=0 width=\"100%\" >
\t<tr>
\t\t<th width=\"15%\">";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "news_date_format", array())), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</th>
\t\t";
        // line 5
        if ( !twig_test_empty((isset($context["author"]) ? $context["author"] : null))) {
            // line 6
            echo "\t\t<th style=\"text-align: right\" width=\"30%\"><b>Author: </b><i>";
            echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
            echo "</i></th>
\t\t";
        }
        // line 8
        echo "\t</tr>
\t<tr>
\t\t<td colspan=\"3\" style=\"padding-left:10px;padding-right:10px;\" >";
        // line 10
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</td>
\t</tr>
\t";
        // line 12
        if ( !(null === (isset($context["comments"]) ? $context["comments"] : null))) {
            // line 13
            echo "\t<tr>
\t\t<td colspan=\"3\">
\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true);
            echo "\">» Comment on this news</a></div>
\t\t</td>
\t</tr>
\t";
        }
        // line 19
        echo "\t</table>
<br/>";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  54 => 15,  50 => 13,  48 => 12,  43 => 10,  39 => 8,  33 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "news.html.twig", "C:\\inetpub\\wwwroot\\templates\\ShadowCores\\news.html.twig");
    }
}
