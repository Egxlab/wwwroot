<?php

/* account.create.html.twig */
class __TwigTemplate_4e8bc4455959563ca7bdf5321332ede65fb95e483cacefd508f49e9bd00aa457 extends Twig_Template
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
        echo "To play on ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo " you need an account.
All you have to do to create your new account is to enter an account ";
        // line 2
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo ", password";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "recaptcha_enabled", array())) {
            echo ", confirm reCAPTCHA";
        }
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_country", array())) {
            echo ", country";
        }
        echo " and your email address.
Also you have to agree to the terms presented below. If you have done so, your account ";
        // line 3
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo " will be shown on the following page and your account password will be sent to your email address along with further instructions. If you do not receive the email with your password, please check your spam filter.<br/><br/>
<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/create")), "html", null, true);
        echo "\" method=\"post\" id=\"createaccount\">
\t<div class=\"TableContainer\" >
\t\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t<div class=\"CaptionContainer\" >
\t\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<div class=\"Text\" >Create ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo " Account</div>
\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >
\t\t\t\t\t\t\t\t\t<span";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "account", array(), "any", false, true), 0, array(), "array", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Account ";
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "Name";
        } else {
            echo "Number";
        }
        echo ":</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"account\" id=\"account_input\" size=\"30\" maxlength=\"";
        // line 29
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "30";
        } else {
            echo "10";
        }
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo "\" autofocus/>
\t\t\t\t\t\t\t\t\t<img id=\"account_indicator\" src=\"images/global/general/";
        // line 30
        if (( !(isset($context["save"]) ? $context["save"] : null) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "account", array(), "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr><td></td><td><span id=\"account_error\" class=\"FormFieldError\">";
        // line 33
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "account", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "account", array()), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >
\t\t\t\t\t\t\t\t\t<span";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array(), "any", false, true), 0, array(), "array", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Email Address:</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td style=\"width:100%;\" >
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" size=\"30\" maxlength=\"50\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t<img id=\"email_indicator\" src=\"images/global/general/";
        // line 40
        if (( !(isset($context["save"]) ? $context["save"] : null) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "account", array(), "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr><td></td><td><span id=\"email_error\" class=\"FormFieldError\">";
        // line 43
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array()), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t";
        // line 44
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_country", array())) {
            // line 45
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >
\t\t\t\t\t\t\t\t\t<span";
            // line 47
            if ($this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "country", array(), "any", false, true), 0, array(), "array", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Country:</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"country\" id=\"account_country\">
\t\t\t\t\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["country_"]) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"";
                if (((array_key_exists("country", $context) && ((isset($context["country"]) ? $context["country"] : null) == $context["code"])) || ((null === (isset($context["country"]) ? $context["country"] : null)) && ((isset($context["country_recognized"]) ? $context["country_recognized"] : null) == $context["code"])))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["country_"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['country_'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<img src=\"\" id=\"account_country_img\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            // line 58
            if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "country", array(), "any", true, true)) {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t<tr><td></td><td><span class=\"FormFieldError\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "country", array()), "html", null, true);
                echo "</span></td></tr>
\t\t\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >
\t\t\t\t\t\t\t\t\t<span";
        // line 64
        if ($this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array(), "any", false, true), 0, array(), "array", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Password:</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" value=\"\" size=\"30\" maxlength=\"50\" />
\t\t\t\t\t\t\t\t\t<img id=\"password_indicator\" src=\"images/global/general/";
        // line 68
        if (( !(isset($context["save"]) ? $context["save"] : null) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "account", array(), "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr><td></td><td><span id=\"password_error\" class=\"FormFieldError\">";
        // line 71
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array()), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >
\t\t\t\t\t\t\t\t\t<span";
        // line 74
        if ($this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array(), "any", false, true), 0, array(), "array", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Repeat password:</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password2\" id=\"password2\" value=\"\" size=\"30\" maxlength=\"50\" />
\t\t\t\t\t\t\t\t\t<img id=\"password2_indicator\" src=\"images/global/general/";
        // line 78
        if (( !(isset($context["save"]) ? $context["save"] : null) || $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "account", array(), "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr><td></td><td><span id=\"password2_error\" class=\"FormFieldError\">";
        // line 81
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array()), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t";
        // line 82
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "recaptcha_enabled", array())) {
            // line 83
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >
\t\t\t\t\t\t\t\t\t<span";
            // line 85
            if ($this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "verification", array(), "any", false, true), 0, array(), "array", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Verification:</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "recaptcha_site_key", array()), "html", null, true);
            echo "\" data-theme=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "recaptcha_theme", array()), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            // line 91
            if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "verification", array(), "any", true, true)) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t<tr><td></td><td><span class=\"FormFieldError\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "verification", array()), "html", null, true);
                echo "</span></td></tr>
\t\t\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><br/></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\" ><b>Please select all of the following check boxes:</b></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\" >
\t\t\t\t\t\t\t\t\t<span><input type=\"checkbox\" id=\"accept_rules\" name=\"accept_rules\" value=\"true\"";
        // line 103
        if ((isset($context["accept_rules"]) ? $context["accept_rules"] : null)) {
            echo "checked";
        }
        echo "/> <label for=\"accept_rules\">I agree to the <a href=\"?subtopic=rules\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo " Rules</a>.</label></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 106
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "accept_rules", array(), "any", true, true)) {
            // line 107
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<span class=\"FormFieldError\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "accept_rules", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<br/>
\t<table width=\"100%\">
\t\t<tr align=\"center\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save\" value=\"1\" >
\t\t\t\t\t\t\t";
        // line 127
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "account.create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 127,  334 => 113,  327 => 109,  323 => 107,  321 => 106,  311 => 103,  301 => 95,  298 => 94,  292 => 92,  290 => 91,  282 => 88,  274 => 85,  270 => 83,  268 => 82,  262 => 81,  254 => 78,  245 => 74,  237 => 71,  229 => 68,  220 => 64,  216 => 62,  213 => 61,  207 => 59,  205 => 58,  199 => 54,  184 => 52,  180 => 51,  171 => 47,  167 => 45,  165 => 44,  159 => 43,  151 => 40,  147 => 39,  139 => 36,  131 => 33,  123 => 30,  113 => 29,  99 => 26,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  47 => 4,  39 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.create.html.twig", "C:\\inetpub\\wwwroot\\site\\system\\templates\\account.create.html.twig");
    }
}
