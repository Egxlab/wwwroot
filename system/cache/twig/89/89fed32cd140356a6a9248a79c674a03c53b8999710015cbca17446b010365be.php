<?php

/* admin.visitors.html.twig */
class __TwigTemplate_120c6c34638966ffd21db2d1ad07805ecb661ea8468690f39e1d60ab8ad045b8 extends Twig_Template
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
        echo "Users being active within last ";
        echo twig_escape_filter($this->env, (isset($context["config_visitors_counter_ttl"]) ? $context["config_visitors_counter_ttl"] : null), "html", null, true);
        echo " minutes.<br/><br/>
<table class=\"table\" width=\"100%\" border=\"0\">
\t<tr>
\t\t<th><b>IP</b></th>
\t\t<th><b>Last visit</b></th>
\t\t<th><b>Page</b></th>
\t</tr>
";
        // line 8
        $context["i"] = 0;
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visitors"]) ? $context["visitors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 10
            echo "\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 11
            echo "\t<tr>
\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "ip", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visitor"], "lastvisit", array()), "H:i:s"), "html", null, true);
            echo "</td>
\t\t<td>
\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "page", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["visitor"], "page", array()), 0, 50), "html", null, true);
            echo "</a>
\t\t</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "admin.visitors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  51 => 15,  46 => 13,  42 => 12,  39 => 11,  36 => 10,  32 => 9,  30 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.visitors.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\admin.visitors.html.twig");
    }
}
