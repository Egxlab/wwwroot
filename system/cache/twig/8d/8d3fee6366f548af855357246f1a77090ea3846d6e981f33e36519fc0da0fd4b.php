<?php

/* news.archive.html.twig */
class __TwigTemplate_bf429e80f268a91e95483dd6bb4d1183f39d78b71d9d36bc40b939c051bce15b extends Twig_Template
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
        echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td colspan=\"3\" class=\"white\"><b>News archive</b></td>
\t</tr>

\t";
        // line 6
        $context["i"] = 0;
        // line 7
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newses"]) ? $context["newses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 8
            echo "\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 9
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\">
\t\t<td width=4%>
\t\t\t<center>
\t\t\t\t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/news/icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "icon_id", array()), "html", null, true);
            echo "_small.gif\"/>
\t\t\t</center>
\t\t</td>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "date", array()), "j.n.Y"), "html", null, true);
            echo "</td>
\t\t<td>
\t\t\t<b><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</a></b>
\t\t</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "news.archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  59 => 17,  54 => 15,  46 => 12,  39 => 9,  36 => 8,  31 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "news.archive.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\news.archive.html.twig");
    }
}
