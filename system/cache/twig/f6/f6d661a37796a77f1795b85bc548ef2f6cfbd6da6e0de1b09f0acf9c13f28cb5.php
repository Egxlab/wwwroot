<?php

/* online.html.twig */
class __TwigTemplate_13ff66aab4c5212f65cbb2af80facc419ce967372a23d74177b2174a12537b0f extends Twig_Template
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
\t\t<td class=\"white\"><b>Server Status</b></td>
\t</tr>
";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)) == 0)) {
            // line 6
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
            echo "\"><td>Currently no one is playing on ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
            echo ".</td></tr></table>
";
        } else {
            // line 8
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
            echo "\">
\t\t<td>
\t\t\t";
            // line 10
            if ( !$this->getAttribute((isset($context["status"]) ? $context["status"] : null), "online", array())) {
                // line 11
                echo "\t\t\tServer is offline.<br/>
\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "online_afk", array())) {
                    // line 14
                    echo "\t\t\t\t\t";
                    $context["players_count"] = twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null));
                    // line 15
                    echo "\t\t\t\t\t";
                    $context["afk"] = ((isset($context["players_count"]) ? $context["players_count"] : null) - $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "players", array()));
                    // line 16
                    echo "\t\t\t\t\t";
                    if (((isset($context["afk"]) ? $context["afk"] : null) < 0)) {
                        // line 17
                        echo "\t\t\t\t\t\t";
                        $context["players_count"] = ((isset($context["players_count"]) ? $context["players_count"] : null) + abs((isset($context["afk"]) ? $context["afk"] : null)));
                        // line 18
                        echo "\t\t\t\t\t\t";
                        $context["afk"] = 0;
                        // line 19
                        echo "\t\t\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t\t\tCurrently there are <b>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "players", array()), "html", null, true);
                    echo "</b> active and <b>";
                    echo twig_escape_filter($this->env, (isset($context["afk"]) ? $context["afk"] : null), "html", null, true);
                    echo "</b> AFK players.<br/>
\t\t\t\t\tTotal number of players: <b>";
                    // line 21
                    echo twig_escape_filter($this->env, (isset($context["players_count"]) ? $context["players_count"] : null), "html", null, true);
                    echo "</b>.<br/>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\tCurrently ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)), "html", null, true);
                    echo " players are online.<br/>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            // line 26
            echo "\t\t</td>
\t</tr>
</table>
\t";
            // line 30
            echo "\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "online_vocations", array())) {
                // line 31
                echo "<br/>
\t\t";
                // line 32
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "online_vocations_images", array())) {
                    // line 33
                    echo "\t<table width=\"200\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" align=\"center\">
\t\t<tr bgcolor=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
                    echo "\">
\t\t\t<td><img src=\"images/sorcerer.png\" /></td>
\t\t\t<td><img src=\"images/druid.png\" /></td>
\t\t\t<td><img src=\"images/paladin.png\" /></td>
\t\t\t<td><img src=\"images/knight.png\" /></td>
\t\t</tr>
\t\t<tr bgcolor=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
                    echo "\">
\t\t\t<td class=\"white\" style=\"text-align: center;\"><strong>Sorcerers</strong></td>
\t\t\t<td class=\"white\" style=\"text-align: center;\"><strong>Druids</strong></td>
\t\t\t<td class=\"white\" style=\"text-align: center;\"><strong>Paladins</strong></td>
\t\t\t<td class=\"white\" style=\"text-align: center;\"><strong>Knights</strong></td>
\t\t</tr>
\t\t<tr bgcolor=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
                    echo "\">
\t\t\t<td style=\"text-align: center;\">";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vocs"]) ? $context["vocs"] : null), 1, array(), "array"), "html", null, true);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vocs"]) ? $context["vocs"] : null), 2, array(), "array"), "html", null, true);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vocs"]) ? $context["vocs"] : null), 3, array(), "array"), "html", null, true);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vocs"]) ? $context["vocs"] : null), 4, array(), "array"), "html", null, true);
                    echo "</td>
\t\t</tr>
\t</table>
\t<div style=\"text-align: center;\">&nbsp;</div>
\t\t";
                } else {
                    // line 55
                    echo "\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t<tr bgcolor=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
                    echo "\">
\t\t\t<td class=\"white\" colspan=\"2\"><b>Vocation statistics</b></td>
\t\t</tr>

\t\t";
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations_amount", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 61
                        echo "\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array($context["i"])), "html", null, true);
                        echo "\">
\t\t\t<td width=\"25%\">";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations", array()), $context["i"], array(), "array"), "html", null, true);
                        echo "</td>
\t\t\t<td width=\"75%\">";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vocs"]) ? $context["vocs"] : null), $context["i"], array(), "array"), "html", null, true);
                        echo "</td>
\t\t</tr>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "\t</table>
<br/>
\t\t";
                }
                // line 69
                echo "\t";
            }
            // line 70
            echo "
\t";
            // line 72
            echo "\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "online_skulls", array())) {
                // line 73
                echo "<table width=\"100%\" cellspacing=\"1\">
\t<tr>
\t\t<td style=\"background: ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
                echo ";\" align=\"center\">
\t\t\t<img src=\"images/white_skull.gif\"/> - 1 - 6 Frags<br/>
\t\t\t<img src=\"images/red_skull.gif\"/> - 6+ Frags or Red Skull<br/>
\t\t\t<img src=\"images/black_skull.gif\"/> - 10+ Frags or Black Skull
\t\t</td>
\t</tr>
</table>
\t";
            }
            // line 83
            echo "
<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr bgcolor=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
            echo "\">
\t\t";
            // line 86
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_country", array())) {
                // line 87
                echo "\t\t<td width=\"11px\"><a href=\"?subtopic=online&order=country\" class=\"white\">#</A></td>
\t\t";
            }
            // line 89
            echo "\t\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "online_outfit", array())) {
                // line 90
                echo "\t\t<td class=\"white\"><b>Outfit</b></td>
\t\t";
            }
            // line 92
            echo "\t\t<td width=\"60%\"><a href=\"?subtopic=online&order=name\" class=\"white\">Name</A></td>
\t\t<td width=\"20%\"><a href=\"?subtopic=online&order=level\" class=\"white\">Level</A></td>
\t\t<td width=\"20%\"><a href=\"?subtopic=online&order=vocation\" class=\"white\">Vocation</td>
\t</tr>
\t";
            // line 96
            $context["i"] = 0;
            // line 97
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 98
                echo "\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 99
                echo "\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
                echo "\">
\t\t";
                // line 100
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_country", array())) {
                    // line 101
                    echo "\t\t\t<td>";
                    echo $this->getAttribute($context["player"], "country_image", array());
                    echo "</td>
\t\t";
                }
                // line 103
                echo "\t\t";
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "online_outfit", array())) {
                    // line 104
                    echo "\t\t\t<td width=\"5%\"><img style=\"position:absolute;margin-top:";
                    if (twig_in_filter($this->getAttribute($this->getAttribute($context["player"], "player", array()), "looktype", array()), array(0 => 75, 1 => 266, 2 => 302))) {
                        echo "-20px;margin-left:-0px;";
                    } else {
                        echo "-45px;margin-left:-25px;";
                    }
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "outfit", array()), "html", null, true);
                    echo "\" alt=\"player outfit\"/></td>
\t\t";
                }
                // line 106
                echo "\t\t\t<td>";
                echo $this->getAttribute($context["player"], "name", array());
                echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "skull", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "level", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "vocation", array()), "html", null, true);
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</table>
";
        }
    }

    public function getTemplateName()
    {
        return "online.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 111,  286 => 108,  282 => 107,  276 => 106,  264 => 104,  261 => 103,  255 => 101,  253 => 100,  248 => 99,  245 => 98,  240 => 97,  238 => 96,  232 => 92,  228 => 90,  225 => 89,  221 => 87,  219 => 86,  215 => 85,  211 => 83,  200 => 75,  196 => 73,  193 => 72,  190 => 70,  187 => 69,  182 => 66,  173 => 63,  169 => 62,  164 => 61,  160 => 60,  153 => 56,  150 => 55,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  117 => 40,  108 => 34,  105 => 33,  103 => 32,  100 => 31,  97 => 30,  92 => 26,  89 => 25,  83 => 23,  78 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  53 => 14,  50 => 13,  46 => 11,  44 => 10,  38 => 8,  30 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "online.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\online.html.twig");
    }
}
