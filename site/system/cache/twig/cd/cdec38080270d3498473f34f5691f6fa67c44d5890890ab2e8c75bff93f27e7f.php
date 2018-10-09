<?php

/* news.html.twig */
class __TwigTemplate_8075cf183dcec10b75435081b7522a2f86013d6b8905b9cd2c12d8806edc752f extends Twig_Template
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
        echo "<div class=\"NewsHeadline\">
\t<div class=\"NewsHeadlineBackground\" style=\"background-image:url(";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/news/newsheadline_background.gif)\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/news/icon_";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo ".gif\" class=\"NewsHeadlineIcon\" />
\t\t<div class=\"NewsHeadlineDate\">";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "news_date_format", array())), "html", null, true);
        echo " - </div>
\t\t<div class=\"NewsHeadlineText\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</div>
\t\t";
        // line 6
        if ( !twig_test_empty((isset($context["author"]) ? $context["author"] : null))) {
            // line 7
            echo "\t\t<div class=\"NewsHeadlineAuthor\"><b>Author: </b><i>";
            echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
            echo "</i></div>
\t\t";
        }
        // line 9
        echo "\t</div>
</div>
<table style=\"clear:both\" border=0 cellpadding=0 cellspacing=0 width=\"100%\" >
\t<tr>
\t\t<td style=\"padding-left:10px;padding-right:10px;\" >";
        // line 13
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</td>
\t</tr>
\t";
        // line 15
        if ( !(null === (isset($context["comments"]) ? $context["comments"] : null))) {
            // line 16
            echo "\t<tr>
\t\t<td>
\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true);
            echo "\">» Comment on this news</a></div>
\t\t</td>
\t</tr>
\t";
        }
        // line 22
        echo "</table>
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
        return array (  72 => 22,  65 => 18,  61 => 16,  59 => 15,  54 => 13,  48 => 9,  42 => 7,  40 => 6,  36 => 5,  32 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "news.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\news.html.twig");
    }
}
