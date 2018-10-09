<?php

/* guilds.create.html.twig */
class __TwigTemplate_1515c3985821dca4e5a2810eb85aa8a786045f86e8c041a7c94e6faa8d279727 extends Twig_Template
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
        echo "<form action=\"?subtopic=guilds&action=create&todo=save\" method=\"post\">
\t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\"><B>Create a ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo " Guild</b></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t\t<table border=\"0\" cellspacing=\"8\" cellpadding=\"0\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"5\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td width=\"150\" valign=\"top\">
\t\t\t\t\t\t\t\t\t\t<b>Leader: </b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<select name=\"name\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 19
            echo "\t\t\t\t\t\t\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $context["player"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t\t\t\t\t\t\t</select><br/>
\t\t\t\t\t\t\t\t\t\t<font size=\"1\" face=\"verdana,arial,helvetica\">(Name of leader of new guild.)</font>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td width=\"150\" valign=\"top\"><b>Guild name: </b></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input name=\"guild\" value=\"\" size=\"30\" maxlength=\"50\"/><br/>
\t\t\t\t\t\t\t\t\t\t<font size=\"1\" face=\"verdana,arial,helvetica\">(Here write name of your new guild.)</font></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<br/>
\t<table border=0 width=100%>
\t\t<tr>
\t\t\t<td align=\"center\">
\t\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/general/blank.gif\" width=120 height=1 border=0><br/>
\t\t\t</td>
\t\t\t<td align=\"center\" valign=\"top\">
\t\t\t\t";
        // line 45
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
</form>
\t\t\t</td>
\t\t\t<td align=\"center\">
\t\t\t\t<form  action=\"?subtopic=guilds\" method=\"post\">
\t\t\t\t\t";
        // line 50
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t\t\t\t</form>
\t\t\t</td>
\t\t\t<td align=\"center\">
\t\t\t\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/general/blank.gif\" width=\"120\" height=\"1\" border=\"0\"><br>
\t\t\t</td>
\t\t</tr>
\t</table>";
    }

    public function getTemplateName()
    {
        return "guilds.create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 54,  96 => 50,  88 => 45,  82 => 42,  59 => 21,  50 => 19,  46 => 18,  32 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "guilds.create.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\guilds.create.html.twig");
    }
}
