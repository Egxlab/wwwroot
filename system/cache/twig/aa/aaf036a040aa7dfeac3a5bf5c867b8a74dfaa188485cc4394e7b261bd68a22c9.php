<?php

/* forum.show_thread.html.twig */
class __TwigTemplate_4f6c852ce0671049507db90519f99cbcb70711f72a322f1afd9b448740518413 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("forum")), "html", null, true);
        echo "\">Boards</a> >> <a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array(("forum/board/" . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array())))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "name", array()), "html", null, true);
        echo "</a> >> <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread_starter"]) ? $context["thread_starter"] : null), "post_topic", array()), "html", null, true);
        echo "</b>
<br/><br/>
<a href=\"?subtopic=forum&action=new_post&thread_id=";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["thread_id"]) ? $context["thread_id"] : null), "html", null, true);
        echo "\"><img src=\"images/forum/post.gif\" border=\"0\" /></a><br/>
<br/>
Page: ";
        // line 5
        echo (isset($context["links_to_pages"]) ? $context["links_to_pages"] : null);
        echo "<br/>
<table width=\"100%\">
\t<tr bgcolor=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo "\" width=\"100%\">
\t\t<td colspan=\"2\">
\t\t\t<font size=\"4\"><b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread_starter"]) ? $context["thread_starter"] : null), "post_topic", array()), "html", null, true);
        echo "</b></font>
\t\t\t<font size=\"1\"><br/>
\t\t\tby ";
        // line 11
        echo (isset($context["author_link"]) ? $context["author_link"] : null);
        echo "</font>
\t\t</td>
\t</tr>
\t<tr bgcolor=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td width=\"200\">
\t\t\t<font color=\"white\" size=\"1\"><b>Author</b></font>
\t\t</td>
\t\t<td>&nbsp;</td>
\t</tr>
\t
\t";
        // line 21
        $context["i"] = 0;
        // line 22
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 23
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\">
\t\t";
            // line 24
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 25
            echo "\t\t<td valign=\"top\">";
            echo $this->getAttribute($context["post"], "player_link", array());
            echo "<br/>
\t\t\t";
            // line 26
            if ($this->getAttribute($context["post"], "outfit", array(), "any", true, true)) {
                // line 27
                echo "\t\t\t<img style=\"margin-left:";
                if (twig_in_filter($this->getAttribute($this->getAttribute($context["post"], "player", array()), "getLookType", array(), "method"), array(0 => 75, 1 => 266, 2 => 302))) {
                    echo "-0px;margin-top:-0px;width:64px;height:64px;";
                } else {
                    echo "-60px;margin-top:-60px;width:128px;height:128px;";
                }
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "outfit", array()), "html", null, true);
                echo "\" alt=\"player outfit\"/>
\t\t\t<br />
\t\t\t";
            }
            // line 30
            echo "\t\t\t<font size=\"1\">
\t\t\t\t";
            // line 31
            if ($this->getAttribute($context["post"], "group", array(), "any", true, true)) {
                // line 32
                echo "\t\t\t\t\tPosition: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "group", array()), "html", null, true);
                echo "<br />
\t\t\t\t";
            }
            // line 34
            echo "
\t\t\t\tProfession: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "vocation", array()), "html", null, true);
            echo "<br />
\t\t\t\tLevel: ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "player", array()), "getLevel", array(), "method"), "html", null, true);
            echo " <br />
\t\t\t\t";
            // line 37
            if ($this->getAttribute($context["post"], "guildRank", array(), "any", true, true)) {
                // line 38
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["guildRank"]) ? $context["guildRank"] : null), "html", null, true);
                echo "<br />
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t<br />Posts: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author_posts_count", array()), "html", null, true);
            echo "<br />
\t\t\t</font>
\t\t</td>
\t\t<td valign=\"top\">";
            // line 43
            echo $this->getAttribute($context["post"], "content", array());
            echo " </td></tr>
\t\t<tr bgcolor=\"";
            // line 44
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\">
\t\t\t<td>
\t\t\t\t<font size=\"1\">";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "d.m.y H:i:s"), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 47
            if ($this->getAttribute($context["post"], "edited_by", array(), "any", true, true)) {
                // line 48
                echo "\t\t\t\t\t<br />Edited by ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "edited_by", array()), "html", null, true);
                echo "
\t\t\t\t\t<br />on ";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "edit_date", array()), "d.m.y H:i:s"), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t</font>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 54
            if ((isset($context["is_moderator"]) ? $context["is_moderator"] : null)) {
                // line 55
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["post"], "first_post", array()) != $this->getAttribute($context["post"], "id", array()))) {
                    // line 56
                    echo "\t\t\t\t\t\t<a href=\"?subtopic=forum&action=remove_post&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" title=\"Remove Post\" onclick=\"return confirm('Are you sure you want remove post of ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "player", array()), "getName", array(), "method"), "html", null, true);
                    echo "?')\"><img src=\"images/del.png\"/></a>
\t\t\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t\t\t<a href=\"?subtopic=forum&action=move_thread&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" title=\"Move Thread\"><img src=\"images/icons/arrow_right.gif\"/></a>
\t\t\t\t\t\t<a href=\"?subtopic=forum&action=remove_post&id=";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" title=\"Remove Thread\" target=\"_blank\" onclick=\"return confirm('Are you sure you want remove thread > ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_topic", array()), "html", null, true);
                    echo " <?')\"><img src=\"images/del.png\"/></a>
\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t";
                if (((isset($context["logged"]) ? $context["logged"] : null) && (($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "player", array()), "getAccount", array(), "method"), "getId", array(), "method") == $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getId", array(), "method")) || (isset($context["is_moderator"]) ? $context["is_moderator"] : null)))) {
                    // line 62
                    echo "\t\t\t\t\t\t<a href=\"?subtopic=forum&action=edit_post&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" title=\"Edit Post\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"images/edit.png\"/></a>
\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t";
                if ((isset($context["logged"]) ? $context["logged"] : null)) {
                    // line 66
                    echo "\t\t\t\t\t\t<a href=\"?subtopic=forum&action=new_post&thread_id=";
                    echo twig_escape_filter($this->env, (isset($context["thread_id"]) ? $context["thread_id"] : null), "html", null, true);
                    echo "&quote=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" title=\"Quote Post\"><img src=\"images/icons/comment_add.png\"/></a>
\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t";
            }
            // line 69
            echo "\t\t\t</td>
\t\t</tr>
\t\t";
            // line 71
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 72
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</table>
<br/>
<a href=\"?subtopic=forum&action=new_post&thread_id=";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["thread_id"]) ? $context["thread_id"] : null), "html", null, true);
        echo "\"><img src=\"images/forum/post.gif\" border=\"0\" /></a>";
    }

    public function getTemplateName()
    {
        return "forum.show_thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 75,  229 => 73,  223 => 72,  221 => 71,  217 => 69,  214 => 68,  206 => 66,  203 => 65,  196 => 62,  193 => 61,  186 => 59,  181 => 58,  173 => 56,  170 => 55,  168 => 54,  163 => 51,  158 => 49,  153 => 48,  151 => 47,  147 => 46,  142 => 44,  138 => 43,  131 => 40,  125 => 38,  123 => 37,  119 => 36,  115 => 35,  112 => 34,  106 => 32,  104 => 31,  101 => 30,  88 => 27,  86 => 26,  81 => 25,  79 => 24,  74 => 23,  69 => 22,  67 => 21,  57 => 14,  51 => 11,  46 => 9,  41 => 7,  36 => 5,  31 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forum.show_thread.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\forum.show_thread.html.twig");
    }
}
