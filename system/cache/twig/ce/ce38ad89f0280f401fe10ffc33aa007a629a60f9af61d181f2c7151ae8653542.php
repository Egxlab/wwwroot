<?php

/* spells.html.twig */
class __TwigTemplate_10bfa62feb12a328206d5172b9e5e500e77f566247037ed6eb60f46276d5be9c extends Twig_Template
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
        if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
            // line 2
            echo "<form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")), "html", null, true);
            echo "\">
\t<input type=\"hidden\" name=\"reload_spells\" value=\"yes\"/>
\t<input type=\"submit\" value=\"(admin) Reload spells\"/>
</form>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")), "html", null, true);
        echo "\" method=\"post\">
\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t<tr bgcolor=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td class=\"white\"><b>Spell Search</b></td>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Only for vocation: <select name=\"vocation_id\">
\t\t\t\t\t\t\t\t<option value=\"all\" ";
        // line 18
        if (((isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null) == "all")) {
            echo " selected";
        }
        echo ">All</option>
\t\t\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations", array()));
        foreach ($context['_seq'] as $context["id"] => $context["vocation"]) {
            // line 20
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (((($context["id"] == (isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null)) && ((isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null) != "all")) && ((isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null) != ""))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["vocation"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['vocation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"order\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["post_order"]) ? $context["post_order"] : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 26
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>
<br/>
<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td class=\"white\">
\t\t\t<b><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")) . "/") . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array((isset($context["post_vocation"]) ? $context["post_vocation"] : null)))) . "/spell"), "html", null, true);
        echo "\"><font class=\"white\">Name</font></a></b>
\t\t</td>
\t\t<td class=\"white\">
\t\t\t<b><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")) . "/") . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array((isset($context["post_vocation"]) ? $context["post_vocation"] : null)))) . "/words"), "html", null, true);
        echo "\"><font class=\"white\">Words</font></a></b>
\t\t</td>
\t\t<td class=\"white\">
\t\t\t<b><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, (((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")) . "/") . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array((isset($context["post_vocation"]) ? $context["post_vocation"] : null)))) . "/type"), "html", null, true);
        echo "\"><font class=\"white\">Type<br/>(count)</font></a></b>
\t\t</td>
\t\t<td class=\"white\">
\t\t\t<b><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, (((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")) . "/") . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array((isset($context["post_vocation"]) ? $context["post_vocation"] : null)))) . "/mana"), "html", null, true);
        echo "\"><font class=\"white\">Mana</font></a></b>
\t\t</td>
\t\t<td class=\"white\">
\t\t\t<b><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")) . "/") . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array((isset($context["post_vocation"]) ? $context["post_vocation"] : null)))) . "/level"), "html", null, true);
        echo "\"><font class=\"white\">Level</font></a></b>
\t\t</td>
\t\t<td class=\"white\">
\t\t\t<b><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")) . "/") . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array((isset($context["post_vocation"]) ? $context["post_vocation"] : null)))) . "/maglevel"), "html", null, true);
        echo "\"><font class=\"white\">Magic<br/>Level</font></a></b>
\t\t</td>
\t\t<td class=\"white\">
\t\t\t<b><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, (((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")) . "/") . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array((isset($context["post_vocation"]) ? $context["post_vocation"] : null)))) . "/soul"), "html", null, true);
        echo "\"><font class=\"white\">Soul</font></a></b>
\t\t</td>
\t\t<td class=\"white\">
\t\t\t<b>Premium</b>
\t\t</td>
\t\t<td class=\"white\">
\t\t\t<b>Vocations:</b>
\t\t</td>
\t</tr>
\t";
        // line 65
        $context["i"] = 0;
        // line 66
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spells"]) ? $context["spells"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["spell"]) {
            // line 67
            echo "\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 68
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\">
\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "name", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "words", array()), "html", null, true);
            echo "</td>
\t\t<td>
\t\t";
            // line 72
            if (($this->getAttribute($context["spell"], "type", array()) == 1)) {
                // line 73
                echo "\t\tInstant
\t\t";
            } elseif (($this->getAttribute(            // line 74
$context["spell"], "type", array()) == 2)) {
                // line 75
                echo "\t\tConjure (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "conjure_count", array()), "html", null, true);
                echo ")
\t\t";
            } else {
                // line 77
                echo "\t\tRune
\t\t";
            }
            // line 79
            echo "\t\t</td>
\t\t<td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "mana", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "level", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "maglevel", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "soul", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 84
            if (($this->getAttribute($context["spell"], "premium", array()) == 1)) {
                echo "yes";
            } else {
                echo "no";
            }
            echo "</td>
\t\t<td>
\t\t";
            // line 86
            if ((twig_length_filter($this->env, $this->getAttribute($context["spell"], "vocations", array())) > 0)) {
                // line 87
                echo "\t\t<font size=\"1\">
\t\t\t";
                // line 88
                echo $this->getAttribute($context["spell"], "vocations", array());
                echo "
\t\t</font>
\t\t";
            } else {
                // line 91
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations", array()), (isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null), array(), "array"), "html", null, true);
                echo "
\t\t";
            }
            // line 93
            echo "\t\t</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "spells.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 96,  238 => 93,  232 => 91,  226 => 88,  223 => 87,  221 => 86,  212 => 84,  208 => 83,  204 => 82,  200 => 81,  196 => 80,  193 => 79,  189 => 77,  183 => 75,  181 => 74,  178 => 73,  176 => 72,  171 => 70,  167 => 69,  162 => 68,  159 => 67,  154 => 66,  152 => 65,  140 => 56,  134 => 53,  128 => 50,  122 => 47,  116 => 44,  110 => 41,  104 => 38,  99 => 36,  86 => 26,  80 => 23,  77 => 22,  62 => 20,  58 => 19,  52 => 18,  44 => 13,  38 => 10,  33 => 8,  30 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "spells.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\spells.html.twig");
    }
}
