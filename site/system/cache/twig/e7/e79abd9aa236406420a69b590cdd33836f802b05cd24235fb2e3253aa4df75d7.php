<?php

/* account.login.html.twig */
class __TwigTemplate_29cae9d631df297420967c72f4cec5dca49bb2246b531e9a19cec468286ae619 extends Twig_Template
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
        echo "Please enter your account ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["account"]) ? $context["account"] : null)), "html", null, true);
        echo " and your password.<br/><a href=\"?subtopic=createaccount\" >Create an account</a> if you do not have one yet.<br/><br/>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/manage")), "html", null, true);
        echo "\" method=\"post\" >
\t";
        // line 3
        if ( !(null === (isset($context["redirect"]) ? $context["redirect"] : null))) {
            // line 4
            echo "\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["redirect"]) ? $context["redirect"] : null), "html", null, true);
            echo "\" />
\t";
        }
        // line 6
        echo "\t<div class=\"TableContainer\" >
\t\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t<div class=\"CaptionContainer\" >
\t\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<div class=\"Text\" >Account Login</div>
\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >
\t\t\t\t\t\t\t\t\t<span";
        // line 27
        if ( !(null === (isset($context["error"]) ? $context["error"] : null))) {
            echo " class=\"red\"";
        }
        echo ">Account ";
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo ":</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td style=\"width:100%;\" ><input type=\"password\" name=\"account_login\" size=\"30\" maxlength=\"30\" autofocus/></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >
\t\t\t\t\t\t\t\t\t<span";
        // line 33
        if ( !(null === (isset($context["error"]) ? $context["error"] : null))) {
            echo " class=\"red\"";
        }
        echo ">Password:</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><input type=\"password\" name=\"password_login\" size=\"30\" maxlength=\"29\" ></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" ></td>
\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" id=\"remember_me\" name=\"remember_me\" value=\"true\" />
\t\t\t\t\t\t\t\t\t<label for=\"remember_me\"> Remember me</label></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 42
        if ( !(null === (isset($context["error"]) ? $context["error"] : null))) {
            // line 43
            echo "\t\t\t\t\t\t\t\t<tr><td></td><td><span class=\"FormFieldError\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</span></td></tr>
\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<br/>
\t<table width=\"100%\" >
\t\t<tr align=\"center\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t";
        // line 58
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t<tr>
\t\t\t\t\t</form>
\t\t\t\t</table>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<form action=\"";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/lost")), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t";
        // line 69
        echo twig_include($this->env, $context, "buttons.account_lost.html.twig");
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
        return "account.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 69,  144 => 66,  133 => 58,  118 => 45,  112 => 43,  110 => 42,  96 => 33,  83 => 27,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  36 => 6,  30 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.login.html.twig", "C:\\inetpub\\wwwroot\\site\\system\\templates\\account.login.html.twig");
    }
}
