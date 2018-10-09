<?php

/* forum.boards.html.twig */
class __TwigTemplate_184f1254034e7d40962a734c088ac9b8bab790249e7ac68149d1cc57f406d1b2 extends Twig_Template
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
        echo "<b>Boards</b>
<table width=\"100%\">
\t<tr bgcolor=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td>
\t\t\t<font color=\"white\" size=\"1\"><b>Board</b></font>
\t\t</td>
\t\t<td>
\t\t\t<font color=\"white\" size=\"1\"><b>Posts</b></font>
\t\t</td>
\t\t<td>
\t\t\t<font color=\"white\" size=\"1\"><b>Threads</b></font>
\t\t</td>
\t\t<td align=\"center\">
\t\t\t<font color=\"white\" size=\"1\"><b>Last Post</b></font>
\t\t</td>
\t\t";
        // line 16
        if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
            // line 17
            echo "\t\t\t<td>
\t\t\t\t<font color=\"white\" size=\"1\"><b>Options</b></font>
\t\t\t</td>
\t\t";
        }
        // line 21
        echo "\t</tr>
\t";
        // line 22
        $context["i"] = 0;
        // line 23
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boards"]) ? $context["boards"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 24
            echo "\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 25
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\">
\t\t<td>
\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "name", array()), "html", null, true);
            echo "</a><br /><small>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "description", array()), "html", null, true);
            echo "</small>
\t\t</td>
\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "posts", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "threads", array()), "html", null, true);
            echo "</td>
\t\t<td>
\t\t";
            // line 32
            if ( !(null === $this->getAttribute($this->getAttribute($context["board"], "last_post", array()), "name", array()))) {
                // line 33
                echo "\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["board"], "last_post", array()), "date", array()), "d.m.y H:i:s"), "html", null, true);
                echo "<br/>by ";
                echo $this->getAttribute($this->getAttribute($context["board"], "last_post", array()), "player_link", array());
                echo "
\t\t";
            } else {
                // line 35
                echo "\t\tNo posts
\t\t";
            }
            // line 37
            echo "\t\t</td>
\t\t";
            // line 38
            if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
                // line 39
                echo "\t\t\t<td>
\t\t\t\t<a href=\"?subtopic=forum&action=edit_board&id=";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", array()), "html", null, true);
                echo "\" title=\"Edit\">
\t\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t\t</a>
\t\t\t\t<a id=\"delete\" href=\"?subtopic=forum&action=delete_board&id=";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", array()), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t<img src=\"images/del.png\"/>Delete
\t\t\t\t</a>
\t\t\t\t<a href=\"?subtopic=forum&action=hide_board&id=";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", array()), "html", null, true);
                echo "\" title=\"";
                if (($this->getAttribute($context["board"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                echo "\">
\t\t\t\t\t<img src=\"images/";
                // line 47
                if (($this->getAttribute($context["board"], "hidden", array()) != 1)) {
                    echo "success";
                } else {
                    echo "error";
                }
                echo ".png\"/>";
                if (($this->getAttribute($context["board"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                // line 48
                echo "\t\t\t\t</a>
\t\t\t\t";
                // line 49
                if (((isset($context["i"]) ? $context["i"] : null) != 1)) {
                    // line 50
                    echo "\t\t\t\t\t<a href=\"?subtopic=forum&action=moveup_board&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", array()), "html", null, true);
                    echo "\" title=\"Move up\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_up.gif\"/>Move up
\t\t\t\t\t</a>
\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : null) != (isset($context["last"]) ? $context["last"] : null))) {
                    // line 55
                    echo "\t\t\t\t\t<a href=\"?subtopic=forum&action=movedown_board&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", array()), "html", null, true);
                    echo "\" title=\"Move down\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_down.gif\"/>Move down
\t\t\t\t\t</a>
\t\t\t\t";
                }
                // line 59
                echo "\t\t\t</td>
\t\t";
            }
            // line 61
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "forum.boards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 63,  168 => 61,  164 => 59,  156 => 55,  153 => 54,  145 => 50,  143 => 49,  140 => 48,  128 => 47,  118 => 46,  112 => 43,  106 => 40,  103 => 39,  101 => 38,  98 => 37,  94 => 35,  86 => 33,  84 => 32,  79 => 30,  75 => 29,  66 => 27,  60 => 25,  57 => 24,  52 => 23,  50 => 22,  47 => 21,  41 => 17,  39 => 16,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forum.boards.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\forum.boards.html.twig");
    }
}
