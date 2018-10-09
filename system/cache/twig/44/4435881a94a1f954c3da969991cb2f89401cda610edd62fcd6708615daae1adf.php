<?php

/* guilds.kick_player.html.twig */
class __TwigTemplate_e9710ed8058ced17b52a3d00f22a535abfd5730403768b4ab5dfa2769efae796 extends Twig_Template
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
        $context["title"] = "Kick player";
        // line 2
        $context["description"] = (("Are you sure you want to kick player with name <b>" . (isset($context["player_name"]) ? $context["player_name"] : null)) . "</b> from your guild?");
        // line 3
        $context["custom_buttons"] = "";
        // line 4
        echo twig_include($this->env, $context, "success.html.twig");
        echo "
<br/>
<center>
\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td align=\"right\" width=\"50%\">
\t\t\t\t<form action=\"?subtopic=guilds&action=kick_player&guild=";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["guild_name"]) ? $context["guild_name"] : null), "html", null, true);
        echo "&name=";
        echo twig_escape_filter($this->env, (isset($context["player_name"]) ? $context["player_name"] : null), "html", null, true);
        echo "&todo=save\" method=\"post\">
\t\t\t\t\t";
        // line 11
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t</form>
\t\t\t</td>
\t\t\t<td style=\"width: 10px;\"></td>
\t\t\t<td>
\t\t\t\t<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("guilds")) . "/") . (isset($context["guild_name"]) ? $context["guild_name"] : null)), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t";
        // line 17
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t\t\t\t</form>
\t\t\t</td>
\t\t</tr>
\t</table>
</center>";
    }

    public function getTemplateName()
    {
        return "guilds.kick_player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  48 => 16,  40 => 11,  34 => 10,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "guilds.kick_player.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\guilds.kick_player.html.twig");
    }
}
