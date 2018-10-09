<?php

/* admin.statistics.html.twig */
class __TwigTemplate_88c8bd1d3568f5b5a83c9144b74a720b4a3419ed712f24f5ff4864490224fe81 extends Twig_Template
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
        echo "<table>
\t<tr>
\t\t<td>
\t\t\t<table class=\"table\">
\t\t\t\t<tr><th colspan=\"2\">Statistics</th></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Total accounts:</td>
\t\t\t\t\t<td>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["total_accounts"]) ? $context["total_accounts"] : null), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Total players:</td>
\t\t\t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["total_players"]) ? $context["total_players"] : null), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Total guilds:</td>
\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["total_guilds"]) ? $context["total_guilds"] : null), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td>Total houses:</td>
\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["total_houses"]) ? $context["total_houses"] : null), "html", null, true);
        echo "</td></tr>
\t\t\t</table>
\t\t</td>
\t\t<td>
\t\t\t<table class=\"table\">
\t\t\t\t<tr><th colspan=\"3\">TOP 10 - Most wealth accounts</th></tr>
\t\t\t\t<tr><th>#</th><th>Account ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["account_type"]) ? $context["account_type"] : null), "html", null, true);
        echo "</th><th>Premium points</th></tr>
\t\t\t\t";
        // line 26
        $context["i"] = 0;
        // line 27
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) ? $context["points"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 28
            echo "\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 29
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "premium_points", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</table>
\t\t</td>
\t</tr>
</table>";
    }

    public function getTemplateName()
    {
        return "admin.statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  82 => 32,  78 => 31,  74 => 30,  71 => 29,  68 => 28,  63 => 27,  61 => 26,  57 => 25,  48 => 19,  42 => 16,  35 => 12,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.statistics.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\admin.statistics.html.twig");
    }
}
