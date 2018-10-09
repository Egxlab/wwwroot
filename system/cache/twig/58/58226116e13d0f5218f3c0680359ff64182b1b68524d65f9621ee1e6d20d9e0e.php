<?php

/* news.tickers.html.twig */
class __TwigTemplate_a41db45e6359c78ae9e7ecd802ef008c96a240484403506580f5812fb52cf829 extends Twig_Template
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
        echo "<div id=\"newsticker\" class=\"Box\">
\t<div class=\"Corner-tl\" style=\"background-image: url(";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/corner-tl.gif);\"></div>
\t<div class=\"Corner-tr\" style=\"background-image: url(";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/corner-tr.gif);\"></div>
\t<div class=\"Border_1\" style=\"background-image: url(";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/border-1.gif);\"></div>
\t<div class=\"BorderTitleText\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/title-background-green.gif);\"></div>
\t<img class=\"Title\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/header/headline-newsticker.gif\" alt=\"Contentbox headline\">
\t<div class=\"Border_2\">
\t\t<div class=\"Border_3\">
\t\t\t<div class=\"BoxContent\" style=\"background-image: url(";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/scroll.gif);\">
\t\t\t\t";
        // line 10
        if ( !array_key_exists("i", $context)) {
            // line 11
            echo "\t\t\t\t";
            $context["i"] = 0;
            // line 12
            echo "\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickers"]) ? $context["tickers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticker"]) {
            // line 14
            echo "\t\t\t\t<div id=\"TickerEntry-";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"Row\" onclick='TickerAction(\"TickerEntry-";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\")'>
\t\t\t\t\t<div class=\"";
            // line 15
            if (preg_match("/^\\d+\$/", ((isset($context["i"]) ? $context["i"] : null) / 2))) {
                echo "Odd";
            } else {
                echo "Even";
            }
            echo "\">
\t\t\t\t\t<div class=\"NewsTickerIcon\" style=\"background-image: url(";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/news/icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "icon", array()), "html", null, true);
            echo "_small.gif);\"></div>
\t\t\t\t\t<div id=\"TickerEntry-";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "-Button\" class=\"NewsTickerExtend\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/general/plus.gif);\"></div>
\t\t\t\t\t<div class=\"NewsTickerText\">
\t\t\t\t\t\t<span class=\"NewsTickerDate\">";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticker"], "date", array()), "j M Y"), "html", null, true);
            echo " -</span>
\t\t\t\t\t\t<div id=\"TickerEntry-";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "-ShortText\" class=\"NewsTickerShortText\">";
            echo $this->getAttribute($context["ticker"], "body_short", array());
            echo "</div>
\t\t\t\t\t\t<div id=\"TickerEntry-";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "-FullText\" class=\"NewsTickerFullText\">";
            echo $this->getAttribute($context["ticker"], "body", array());
            echo "
\t\t\t\t\t\t\t";
            // line 22
            if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
                // line 23
                echo "\t\t\t\t\t\t\t<a href=\"?subtopic=news&action=edit&id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", array()), "html", null, true);
                echo "\" title=\"Edit\">
\t\t\t\t\t\t\t\t<img src=\"images/edit.png\"/>
\t\t\t\t\t\t\t\tEdit
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a id=\"delete\" href=\"?subtopic=news&action=delete&id=";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", array()), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t<img src=\"images/del.png\"/>
\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"?subtopic=news&action=hide&id=";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", array()), "html", null, true);
                echo "\" title=\"";
                if (($this->getAttribute($context["ticker"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"images/";
                // line 32
                if (($this->getAttribute($context["ticker"], "hidden", array()) != 1)) {
                    echo "success";
                } else {
                    echo "error";
                }
                echo ".png\"/>
\t\t\t\t\t\t\t\t";
                // line 33
                if (($this->getAttribute($context["ticker"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                // line 34
                echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 40
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 41
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</div>
\t</div>
</div>
<div class=\"Border_1\" style=\"background-image: url(";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/border-1.gif);\"></div>
<div class=\"CornerWrapper-b\"><div class=\"Corner-bl\" style=\"background-image: url(";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/corner-bl.gif);\"></div></div>
<div class=\"CornerWrapper-b\"><div class=\"Corner-br\" style=\"background-image: url(";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/corner-br.gif);\"></div></div>
</div>";
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
        return array (  177 => 47,  173 => 46,  169 => 45,  164 => 42,  158 => 41,  156 => 40,  150 => 36,  146 => 34,  140 => 33,  132 => 32,  122 => 31,  115 => 27,  107 => 23,  105 => 22,  99 => 21,  93 => 20,  89 => 19,  82 => 17,  76 => 16,  68 => 15,  61 => 14,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "news.tickers.html.twig", "C:\\inetpub\\wwwroot\\templates\\tibiacom\\news.tickers.html.twig");
    }
}
