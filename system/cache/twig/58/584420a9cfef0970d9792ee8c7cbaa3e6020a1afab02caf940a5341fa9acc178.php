<?php

/* changelog.html.twig */
class __TwigTemplate_d484ee3118de5d17b0994dba4017e91b01e32db68facdf1bc30d3632e8fb7e9b extends Twig_Template
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
        echo "<br/>
<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td width=\"22\"><font class=\"white\"><b>Type</b></font></td>
\t\t<td width=\"22\"><font class=\"white\"><b>Where</b></font></td>
\t\t<td width=\"50\"><font class=\"white\"><b>Date</b></font></td>
\t\t<td><font class=\"white\"><b>Description</b></font></td>
\t</tr>
\t";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["changelogs"]) ? $context["changelogs"] : null)) > 0)) {
            // line 10
            echo "\t\t";
            $context["i"] = 0;
            // line 11
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["changelogs"]) ? $context["changelogs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 12
                echo "\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
                echo "\">
\t\t\t<td align=\"center\">
\t\t\t\t<img src=\"images/changelog/";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "type", array()), "html", null, true);
                echo ".png\" title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["log"], "type", array())), "html", null, true);
                echo "\"/>
\t\t\t</td>
\t\t\t<td align=\"center\">
\t\t\t\t<img src=\"images/changelog/";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "where", array()), "html", null, true);
                echo ".png\" title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["log"], "where", array())), "html", null, true);
                echo "\"/>
\t\t\t</td>
\t\t\t<td>";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "date", array()), "j.m.Y"), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 20
                echo $this->getAttribute($context["log"], "body", array());
                echo "</td>
\t\t</tr>
\t\t";
                // line 22
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 23
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t";
        } else {
            // line 25
            echo "\t<tr>
\t\t<td colspan=\"4\" bgcolor=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
            echo "\">There are no changelogs for the moment.</td>
\t</tr>
\t";
        }
        // line 29
        echo "\t
\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t";
        // line 31
        if (((isset($context["page"]) ? $context["page"] : null) > 0)) {
            // line 32
            echo "\t\t<tr><td width=\"100%\" align=\"right\" valign=\"bottom\"><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array(("changelog/" . ((isset($context["page"]) ? $context["page"] : null) - 1)))), "html", null, true);
            echo "\" class=\"size_xxs\">Previous Page</a></td></tr>
\t\t";
        }
        // line 34
        echo "\t\t";
        if ((isset($context["next_page"]) ? $context["next_page"] : null)) {
            // line 35
            echo "\t\t<tr><td width=\"100%\" align=\"right\" valign=\"bottom\"><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array(("changelog/" . ((isset($context["page"]) ? $context["page"] : null) + 1)))), "html", null, true);
            echo "\" class=\"size_xxs\">Next Page</a></td></tr>
\t";
        }
        // line 37
        echo "\t</table>
</table>";
    }

    public function getTemplateName()
    {
        return "changelog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  107 => 35,  104 => 34,  98 => 32,  96 => 31,  92 => 29,  86 => 26,  83 => 25,  80 => 24,  74 => 23,  72 => 22,  67 => 20,  63 => 19,  56 => 17,  48 => 14,  42 => 12,  37 => 11,  34 => 10,  32 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "changelog.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\changelog.html.twig");
    }
}
