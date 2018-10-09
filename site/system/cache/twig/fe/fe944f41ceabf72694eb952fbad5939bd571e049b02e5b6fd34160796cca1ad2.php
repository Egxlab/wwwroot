<?php

/* forum.new_thread.html.twig */
class __TwigTemplate_a9294853d8b72bb0089a9960fd2ecef9d4c5392c403b5bdd4dbd88ccd6740bec extends Twig_Template
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
        echo "<form action=\"?\" method=\"post\">
\t<input type=\"hidden\" name=\"action\" value=\"new_thread\" />
\t<input type=\"hidden\" name=\"section_id\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["section_id"]) ? $context["section_id"] : null), "html", null, true);
        echo "\" />
\t<input type=\"hidden\" name=\"subtopic\" value=\"forum\" />
\t<input type=\"hidden\" name=\"save\" value=\"save\" />
\t<table width=\"100%\">
\t\t<tr bgcolor=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td colspan=\"2\">
\t\t\t\t<font color=\"white\"><b>Post New Reply</b></font>
\t\t\t</td>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td width=\"180\"><b>Character:</b></td>
\t\t\t<td>
\t\t\t\t<select name=\"char_id\"><option value=\"0\">(Choose character)</option>
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 17
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "id", array()), "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["player"], "id", array()) == (isset($context["post_player_id"]) ? $context["post_player_id"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</select>
\t\t\t</td>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo "\">
\t\t\t<td><b>Topic:</b></td>
\t\t\t<td><input type=\"text\" name=\"topic\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["post_thread"]) ? $context["post_thread"] : null));
        echo "\" size=\"40\" maxlength=\"60\" /> (Optional)</td>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td valign=\"top\"><b>Message:</b><font size=\"1\"><br />You can use:<br />[player]Nick[/player]<br />[url]http://address.com/[/url]<br />[img]http://images.com/images3.gif[/img]<br />[code]Code[/code]<br />[b]<b>Text</b>[/b]<br />[i]<i>Text</i>[/i]<br />[u]<u>Text</u>[/u]<br />and smileys:<br />;) , :) , :D , :( , :rolleyes:<br />:cool: , :eek: , :o , :p</font></td>
\t\t\t<td><textarea rows=\"10\" cols=\"60\" name=\"text\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["post_text"]) ? $context["post_text"] : null));
        echo "</textarea><br />(Max. 15,000 letters)</td>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo "\">
\t\t\t<td valign=\"top\">Options:</td>
\t\t\t<td>
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" name=\"smile\" value=\"1\"";
        // line 34
        if ((isset($context["post_smile"]) ? $context["post_smile"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/>Disable Smileys in This Post
\t\t\t\t</label>
\t\t\t\t";
        // line 36
        if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
            // line 37
            echo "\t\t\t\t<br/>
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" name=\"html\" value=\"1\"";
            // line 39
            if ((isset($context["post_html"]) ? $context["post_html"] : null)) {
                echo " checked=\"checked\"";
            }
            echo "/>Enable HTML in this post (moderator only)
\t\t\t\t</label>
\t\t\t";
        }
        // line 42
        echo "\t\t\t</td>
\t\t</tr>
\t</table>
\t<center>
\t\t<input type=\"submit\" value=\"Post Thread\" />
\t</center>
</form>";
    }

    public function getTemplateName()
    {
        return "forum.new_thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  109 => 39,  105 => 37,  103 => 36,  96 => 34,  89 => 30,  84 => 28,  79 => 26,  74 => 24,  69 => 22,  64 => 19,  49 => 17,  45 => 16,  38 => 12,  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forum.new_thread.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\forum.new_thread.html.twig");
    }
}
