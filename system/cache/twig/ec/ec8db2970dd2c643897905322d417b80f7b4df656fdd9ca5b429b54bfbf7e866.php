<?php

/* account.create_character.html.twig */
class __TwigTemplate_69cffa5d5a127f8c5c2e8defa8606e00405f3a0654ca504d52c3d56b4e01f648 extends Twig_Template
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
        echo "Please choose a name";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "character_samples", array())) > 1)) {
            echo ", vocation";
        }
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "character_towns", array())) > 1)) {
            echo ", town";
        }
        // line 3
        echo " and sex for your character. <br/>
In any case the name must not violate the naming conventions stated in the <a href=\"?subtopic=rules\" target=\"_blank\" >";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo " Rules</a>, or your character might get deleted or name locked.
";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getPlayersList", array(), "method")) >= $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "characters_per_account", array()))) {
            // line 6
            echo "<b><font color=\"red\"> You have maximum number of characters per account on your account. Delete one before you make new.</font></b>
";
        }
        // line 8
        echo "<br/><br/>
<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/create")), "html", null, true);
        echo "\" method=\"post\">
\t<input type=\"hidden\" name=\"save\" value=\"1\">
\t<div class=\"TableContainer\">
\t\t<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t<div class=\"CaptionContainer\">
\t\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t\t<div class=\"Text\" >Create Character</div>
\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"LabelH\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:50%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Name</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Sex</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"Odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"name\" id=\"character_name\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" size=\"25\" maxlength=\"25\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"character_indicator\" src=\"images/global/general/";
        // line 49
        if (( !(isset($context["save"]) ? $context["save"] : null) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "name", array(), "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<font size=\"1\" face=\"verdana,arial,helvetica\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"character_error\">";
        // line 52
        if (( !(isset($context["save"]) ? $context["save"] : null) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "name", array(), "any", true, true))) {
            echo "Please enter your character name.";
        }
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 56
        $context["i"] = 0;
        // line 57
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "genders", array()), true));
        foreach ($context['_seq'] as $context["id"] => $context["gender"]) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" id=\"sex";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (( !(null === (isset($context["sex"]) ? $context["sex"] : null)) && ((isset($context["sex"]) ? $context["sex"] : null) == $context["id"]))) {
                echo " checked=\"checked\"";
            }
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t><label for=\"sex";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["gender"]), "html", null, true);
            echo "</label><br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
        // line 72
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "character_samples", array())) > 1)) {
            // line 73
            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t<tr class=\"Odd\" valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t<td width=\"160\"><br/><b>Select your vocation:</b></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "character_samples", array()));
            foreach ($context['_seq'] as $context["key"] => $context["sample_char"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vocation\" id=\"vocation";
                // line 82
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 83
                if (( !(null === (isset($context["vocation"]) ? $context["vocation"] : null)) && ((isset($context["vocation"]) ? $context["vocation"] : null) == $context["key"]))) {
                    echo " checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"vocation";
                // line 84
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations", array(), "array"), $context["key"], array(), "array"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sample_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "character_towns", array())) > 1)) {
            // line 94
            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t<tr class=\"Odd\" valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t<td width=\"160\"><br/><b>Select your city:</b></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "character_towns", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["town_id"]) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"town\" id=\"town";
                // line 103
                echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 104
                if (( !(null === (isset($context["town"]) ? $context["town"] : null)) && ((isset($context["town"]) ? $context["town"] : null) == $context["town_id"]))) {
                    echo " checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"town";
                // line 105
                echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "towns", array()), $context["town_id"], array(), "array"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<br/>
\t<table style=\"width:100%;\">
\t\t<tr align=\"center\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t";
        // line 129
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
</form>
\t\t\t\t</table>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<form action=\"";
        // line 137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/manage")), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t";
        // line 140
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</form>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>";
    }

    public function getTemplateName()
    {
        return "account.create_character.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 140,  306 => 137,  295 => 129,  279 => 115,  271 => 109,  259 => 105,  253 => 104,  247 => 103,  243 => 101,  239 => 100,  231 => 94,  228 => 93,  221 => 88,  209 => 84,  203 => 83,  197 => 82,  193 => 80,  189 => 79,  181 => 73,  179 => 72,  167 => 62,  156 => 60,  147 => 59,  144 => 58,  139 => 57,  137 => 56,  128 => 52,  120 => 49,  116 => 48,  100 => 35,  95 => 33,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  44 => 9,  41 => 8,  37 => 6,  35 => 5,  31 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.create_character.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\account.create_character.html.twig");
    }
}
