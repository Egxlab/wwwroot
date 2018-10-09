<?php

/* guilds.change_rank.html.twig */
class __TwigTemplate_a4744217dba24380f2ec5595bf05a939c905a2283ace4db26a5c29f602a3fc44 extends Twig_Template
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
        echo "<form action=\"?subtopic=guilds&action=change_rank&guild=";
        echo twig_escape_filter($this->env, (isset($context["guild_name"]) ? $context["guild_name"] : null), "html", null, true);
        echo "&todo=save\" method=\"post\">
\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t<tr bgcolor=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\"><td class=\"white\"><b>Change Rank</b></td></tr>
\t\t<tr bgcolor=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Name: <select name=\"name\">
\t\t\t\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 10
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], 0, array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], 1, array(), "array"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t\t\t\t\t</select>&nbsp;Rank:&nbsp;<select name=\"rankid\">
\t\t\t\t\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ranks"]) ? $context["ranks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 14
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], 0, array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], 1, array(), "array"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 19
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t<tr>
\t\t<td>
\t\t\t<center>
\t\t\t\t<form action=\"?subtopic=guilds&action=show&guild=";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["guild_name"]) ? $context["guild_name"] : null), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t";
        // line 32
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t\t\t\t</form>
\t\t\t</center>
\t\t</td>
\t</tr>
</table>";
    }

    public function getTemplateName()
    {
        return "guilds.change_rank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  90 => 31,  75 => 19,  70 => 16,  59 => 14,  55 => 13,  52 => 12,  41 => 10,  37 => 9,  29 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "guilds.change_rank.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\guilds.change_rank.html.twig");
    }
}
