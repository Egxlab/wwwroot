<?php

/* admin.dashboard.html.twig */
class __TwigTemplate_ad70819cf84551b70170f45a15295f18b665fd75ed1d30a92456558767470221 extends Twig_Template
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
        echo "<table class=\"table\">
\t<tr>
\t\t<th><a href=\"?p=dashboard&clear_cache\" onclick=\"return confirm('Are you sure?');\">Clear cache</a></th>
\t</tr>
</table>
<form action=\"?p=dashboard&maintenance\" method=\"post\">
\t<table class=\"table\">
\t\t<tr>
\t\t\t<th colspan=\"2\">Maintenance
\t\t\t</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Site status:</td>
\t\t\t<td>
\t\t\t\t<select name=\"status\">
\t\t\t\t\t<option value=\"0\"";
        // line 16
        if ( !(isset($context["is_closed"]) ? $context["is_closed"] : null)) {
            echo " selected";
        }
        echo ">Open</option>
\t\t\t\t\t<option value=\"1\"";
        // line 17
        if ((isset($context["is_closed"]) ? $context["is_closed"] : null)) {
            echo " selected";
        }
        echo ">Closed</option>
\t\t\t\t</select>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Message: (only if closed)</td>
\t\t\t<td>
\t\t\t\t<textarea name=\"message\" maxlength=\"255\" cols=\"40\" rows=\"5\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["closed_message"]) ? $context["closed_message"] : null), "html", null, true);
        echo "</textarea>
\t\t\t<td>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">
\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Update\"/>
\t\t\t</td>
\t</table>
</form>
<br/>
<div>
\t";
        // line 35
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "online", array())) {
            // line 36
            echo "\t<p class=\"success\" style=\"width: 150px; text-align: center;\">Status: Online<br/>
\t\t";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "uptimeReadable", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "players", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "playersMax", array()), "html", null, true);
            echo "<br/>
\t\t";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "ip", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "loginPort", array()), "html", null, true);
            echo "
\t\t<br/><br/><u><a id=\"more-button\" href=\"#\"></a></u>

\t\t<span id=\"status-more\">
\t\t<br/>
\t\t<b>Server</b>:<br/> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "server", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "serverVersion", array()), "html", null, true);
            echo "<br/>
\t\t<b>Version</b>: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "clientVersion", array()), "html", null, true);
            echo "<br/><br/>

\t\t<b>Monsters</b>: ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "monsters", array()), "html", null, true);
            echo "<br/>
\t\t<b>Map</b>: ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "mapName", array()), "html", null, true);
            echo ", <b>author</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "mapAuthor", array()), "html", null, true);
            echo ", <b>size</b>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "mapWidth", array()), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "mapHeight", array()), "html", null, true);
            echo "<br/>
\t\t<b>MOTD</b>:<br/> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "motd", array()), "html", null, true);
            echo "<br/><br/>

\t\t<b>Last updated</b>: ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "lastCheck", array()), "H:i:s"), "html", null, true);
            echo "
\t\t</span>
\t</p>
\t";
        } else {
            // line 54
            echo "\t<p class=\"error\" style=\"width: 120px; text-align: center;\">Status: Offline</p>
\t";
        }
        // line 56
        echo "</div>
";
        // line 57
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "online", array())) {
            // line 58
            echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#status-more\").hide();
        \$(\"#more-button\").text(\"More\");
    });

    \$(\"#more-button\").click(function() {
        if(\$(\"#status-more\").is(\":hidden\")) {
            \$(\"#more-button\").text(\"Hide\");
            \$(\"#status-more\").show();
        }
        else {
            \$(\"#more-button\").text(\"More\");
            \$(\"#status-more\").hide();
        }

        return false;
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "admin.dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 58,  135 => 57,  132 => 56,  128 => 54,  121 => 50,  116 => 48,  106 => 47,  102 => 46,  97 => 44,  91 => 43,  81 => 38,  73 => 37,  70 => 36,  68 => 35,  54 => 24,  42 => 17,  36 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.dashboard.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\admin.dashboard.html.twig");
    }
}
