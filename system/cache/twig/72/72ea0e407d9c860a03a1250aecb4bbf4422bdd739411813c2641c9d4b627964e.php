<?php

/* guilds.manager.html.twig */
class __TwigTemplate_e1d79fa7358d8d292d0dfb01593fd581fc551c522f6f6b440f3467b0f4e81cb6 extends Twig_Template
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
        echo "<center><h2>Welcome to guild manager!</h2></center>
Here you can change names of ranks, delete and add ranks, pass leadership to other guild member and delete guild.
<br/><br/>
<table style=\"clear:both\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t<td width=\"170\">
\t\t\t<font color=\"red\"><b>Option</b></font>
\t\t</td>
\t\t<td>
\t\t\t<font color=\"red\"><b>Description</b></font>
\t\t</td>
\t</tr>
\t<tr bgcolor=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo "\">
\t\t<td width=\"170\">
\t\t\t<b><a href=\"?subtopic=guilds&guild=";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "getName", array(), "method"), "html", null, true);
        echo "&action=pass_leadership\">Pass Leadership</a></b>
\t\t</td>
\t\t<td>
\t\t\t<b>Pass leadership of guild to other guild member.</b>
\t\t</td>
\t</tr>
\t<tr bgcolor=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t<td width=\"170\">
\t\t\t<b><a href=\"?subtopic=guilds&guild=";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "getName", array(), "method"), "html", null, true);
        echo "&action=delete_guild\">Delete Guild</a></b>
\t\t</td>
\t\t<td>
\t\t\t<b>Delete guild, kick all members.</b>
\t\t</td>
\t</tr>
\t<tr bgcolor=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo "\">
\t\t<td width=\"170\">
\t\t\t<b><a href=\"?subtopic=guilds&guild=";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "getName", array(), "method"), "html", null, true);
        echo "&action=change_description\">Change Description</a></b>
\t\t</td>
\t\t<td>
\t\t\t<b>Change description of guild.</b>
\t\t</td>
\t</tr>
\t";
        // line 37
        if (twig_constant("MOTD_EXISTS")) {
            // line 38
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
            echo "\">
\t\t<td width=\"170\">
\t\t\t<b><a href=\"?subtopic=guilds&guild=";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "getName", array(), "method"), "html", null, true);
            echo "&action=change_motd\">Change MOTD</a></b>
\t\t</td>
\t\t<td>
\t\t\t<b>Change MOTD of guild.</b>
\t\t</td>
\t</tr>
\t";
        }
        // line 47
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo "\">
\t\t<td width=\"170\">
\t\t\t<b><a href=\"?subtopic=guilds&guild=";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "getName", array(), "method"), "html", null, true);
        echo "&action=change_logo\">Change guild logo</a></b>
\t\t</td>
\t\t<td>
\t\t\t<b>Upload new guild logo.</b>
\t\t</td>
\t</tr>
</table>
<br/>
<div class=\"TableContainer\">
\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>        <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >Add new rank</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"120\" valign=\"top\">New rank name:</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<form action=\"?subtopic=guilds&guild=";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "getName", array(), "method"), "html", null, true);
        echo "&action=add_rank\" method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"rank_name\" size=\"20\"/>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Add\"/>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<center><h3>Change rank names and levels</h3></center>
<form action=\"?subtopic=guilds&action=save_ranks&guild=";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "getName", array(), "method"), "html", null, true);
        echo "\" method=\"post\">
\t<table style=\"clear:both\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
\t\t<tr bgcolor=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td rowspan=\"2\" width=\"120\" align=\"center\">
\t\t\t\t<font color=\"white\"><b>ID/Delete Rank</b></font>
\t\t\t</td>
\t\t\t<td rowspan=\"2\" width=\"300\">
\t\t\t\t<font color=\"white\"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name</b></font>
\t\t\t</td>
\t\t\t<td colspan=\"3\" align=\"center\">
\t\t\t\t<font color=\"white\"><b>Level of RANK in guild</b></font>
\t\t\t</td>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td align=\"center\" bgcolor=\"red\">
\t\t\t\t<font color=\"white\"><b>Leader (3)</b></font>
\t\t\t</td>
\t\t\t<td align=\"center\" bgcolor=\"yellow\">
\t\t\t\t<font color=\"black\"><b>Vice (2)</b></font>
\t\t\t</td>
\t\t\t<td align=\"center\" bgcolor=\"green\">
\t\t\t\t<font color=\"white\"><b>Member (1)</b></font>
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 115
        $context["i"] = 0;
        // line 116
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rank_list"]) ? $context["rank_list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 117
            echo "\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\">
\t\t\t<td align=\"center\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "getId", array(), "method"), "html", null, true);
            echo " // <a href=\"?subtopic=guilds&guild=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "getName", array(), "method"), "html", null, true);
            echo "&action=delete_rank&rankid=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "getId", array(), "method"), "html", null, true);
            echo "\" border=\"0\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/news/delete.png\" border=\"0\" alt=\"Delete Rank\"></a>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "getId", array(), "method"), "html", null, true);
            echo "_name\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "getName", array(), "method"), "html", null, true);
            echo "\" size=\"35\"/>
\t\t\t</td>
\t\t\t<td align=\"center\">
\t\t\t\t<input type=\"radio\" name=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "getId", array(), "method"), "html", null, true);
            echo "_level\" value=\"3\"
\t\t\t\t";
            // line 125
            if (($this->getAttribute($context["rank"], "getLevel", array(), "method") == 3)) {
                echo " checked=\"checked\"";
            }
            echo "/>
\t\t\t</td>
\t\t\t<td align=\"center\">
\t\t\t\t<input type=\"radio\" name=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "getId", array(), "method"), "html", null, true);
            echo "_level\" value=\"2\"
\t\t\t\t";
            // line 129
            if (($this->getAttribute($context["rank"], "getLevel", array(), "method") == 2)) {
                echo " checked=\"checked\"";
            }
            echo "/>
\t\t\t</td>
\t\t\t<td align=\"center\">
\t\t\t\t<input type=\"radio\" name=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "getId", array(), "method"), "html", null, true);
            echo "_level\" value=\"1\"
\t\t\t\t";
            // line 133
            if (($this->getAttribute($context["rank"], "getLevel", array(), "method") == 1)) {
                echo " checked=\"checked\"";
            }
            echo "/>
\t\t\t</td>
\t\t</tr>
\t\t\t";
            // line 136
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 137
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td>&nbsp;</td>
\t\t\t<td>&nbsp;</td>
\t\t\t<td colspan=\"3\" align=\"center\">
\t\t\t\t<input type=\"submit\" value=\"Save All\"/>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>
<h3>Ranks info:</h3>
<b>0. Owner of guild</b> - it's highest rank, only one player in guild may has this rank. Player with this rank can:
<li>Invite/Cancel Invitation/Kick Player from guild</li>
<li>Change ranks of all players in guild</li>
<li>Delete guild or pass leadership to other guild member</li>
<li>Change names, levels (leader, vice, member), add and delete ranks</li>
<li>Change ";
        // line 153
        if (twig_constant("MOTD_EXISTS")) {
            echo "MOTD, ";
        }
        echo "logo and description of guild</li>
<hr/>
<b>1. Leader</b> - it's second rank in guild. Player with this rank can:
<li>Invite/Cancel Invitation/Kick Player from guild (only with lower rank than his)
<li>Change ranks of players with lower rank level (\"vice leader\", \"member\") in guild<hr>
<b>2. Vice Leader</b> - it's third rank in guild. Player with this rank can:
<li>Invite/Cancel Invitation
<li>Change ranks of players with lower rank level (\"member\") in guild<hr>
<b>3. Member</b> - it's lowest rank in guild. Player with this rank can:
<li>Be a member of guild
<br/>
<center>
\t<form action=\"?subtopic=guilds&action=show&guild=";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "getName", array(), "method"), "html", null, true);
        echo "\" method=\"post\">
\t\t";
        // line 166
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t</form>
</center>";
    }

    public function getTemplateName()
    {
        return "guilds.manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 166,  318 => 165,  301 => 153,  282 => 138,  276 => 137,  274 => 136,  266 => 133,  262 => 132,  254 => 129,  250 => 128,  242 => 125,  238 => 124,  230 => 121,  218 => 118,  213 => 117,  208 => 116,  206 => 115,  192 => 104,  178 => 93,  173 => 91,  157 => 78,  144 => 68,  140 => 67,  136 => 66,  132 => 65,  125 => 63,  121 => 62,  117 => 61,  102 => 49,  96 => 47,  86 => 40,  80 => 38,  78 => 37,  69 => 31,  64 => 29,  55 => 23,  50 => 21,  41 => 15,  36 => 13,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "guilds.manager.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\guilds.manager.html.twig");
    }
}
