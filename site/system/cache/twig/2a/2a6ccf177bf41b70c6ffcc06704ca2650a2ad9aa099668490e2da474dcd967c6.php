<?php

/* account.management.html.twig */
class __TwigTemplate_fc89bad1f25eda2fdbeb4f0e6615b03d4978311935a0b2db81febfcdefcf27da extends Twig_Template
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
        echo "<div class=\"SmallBox\">
\t<div class=\"MessageContainer\">
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-horizontal.gif);\"></div>
\t<div class=\"BoxFrameEdgeLeftTop\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"Message\">
\t\t\t<div class=\"BoxFrameVerticalLeft\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"BoxFrameVerticalRight\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"100%\"></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t\t\t<form action=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/logout")), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 17
        echo twig_include($this->env, $context, "buttons.logout.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightBottom\" style=\"background-image:url(";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftBottom\" style=\"background-image:url(";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t</div>
</div>
<br/>
<center>
\t<table>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/headline-bracer-left.gif\" />
\t\t\t</td>
\t\t\t<td style=\"text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;\" >";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["welcome_message"]) ? $context["welcome_message"] : null), "html", null, true);
        echo "<br/></td>
\t\t\t<td><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/headline-bracer-right.gif\" /></td>
\t\t</tr>
\t</table>
\t<br/>
</center>
";
        // line 45
        if (twig_test_empty((isset($context["recovery_key"]) ? $context["recovery_key"] : null))) {
            // line 46
            echo "<div class=\"SmallBox\">
\t<div class=\"MessageContainer\">
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftTop\" style=\"background-image:url(";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightTop\" style=\"background-image:url(";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"Message\">
\t\t\t<div class=\"BoxFrameVerticalLeft\" style=\"background-image:url(";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"BoxFrameVerticalRight\" style=\"background-image:url(";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"LabelV\" >Hint:</td>
\t\t\t\t\t<td style=\"width:100%;\" >You can register your account for increased protection. Click on \"Register Account\" and get your free recovery key today!</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<div align=\"center\">
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<form action=\"";
            // line 62
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/register")), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t";
            // line 65
            echo twig_include($this->env, $context, "buttons.register_account.html.twig");
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</form>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\" /></div>
\t\t<div class=\"BoxFrameEdgeRightBottom\" style=\"background-image:url(";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\" /></div>
\t\t<div class=\"BoxFrameEdgeLeftBottom\" style=\"background-image:url(";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\" /></div>
\t</div>
</div>
<br/>
";
        }
        // line 79
        echo "
";
        // line 80
        if ((isset($context["email_request"]) ? $context["email_request"] : null)) {
            // line 81
            echo "<div class=\"SmallBox\">
\t<div class=\"MessageContainer\">
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftTop\" style=\"background-image:url(";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightTop\" style=\"background-image:url(";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"Message\">
\t\t\t<div class=\"BoxFrameVerticalLeft\" style=\"background-image:url(";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"BoxFrameVerticalRight\" style=\"background-image:url(";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"LabelV\" >Note:</td>
\t\t\t\t\t<td style=\"width:100%;\" >A request has been submitted to change the email address of this account to <b>";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["email_new"]) ? $context["email_new"] : null), "html", null, true);
            echo "</b>. After <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["email_new_time"]) ? $context["email_new_time"] : null), "j F Y, G:i:s"), "html", null, true);
            echo "</b> you can accept the new email address and finish the process. Please cancel the request if you do not want your email address to be changed! Also cancel the request if you have no access to the new email address!</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<div align=\"center\">
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<form action=\"";
            // line 97
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/email")), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t";
            // line 100
            echo twig_include($this->env, $context, "buttons.edit.html.twig");
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</form>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightBottom\" style=\"background-image:url(";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftBottom\" style=\"background-image:url(";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t</div>
</div>
<br/><br/>
";
        }
        // line 114
        echo "<a name=\"General+Information\" ></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\">
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/back-to-top.gif\" />
\t\t</a>
\t</div>
</div>
<div class=\"TableContainer\">
\t<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >General Information</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Account ";
        // line 150
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "Name";
        } else {
            echo "Number";
        }
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Email Address:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 155
        echo twig_escape_filter($this->env, ((isset($context["account_email"]) ? $context["account_email"] : null) . (isset($context["email_change"]) ? $context["email_change"] : null)), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Created:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 159
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["account_created"]) ? $context["account_created"] : null), "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Last Login:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 163
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 166
        echo "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array());
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Account Status:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 168
        echo (isset($context["account_status"]) ? $context["account_status"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 170
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array());
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Registered:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 172
        echo (isset($context["account_registered"]) ? $context["account_registered"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 175
        echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-bm.gif);\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-br.gif);\"></div>  \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table class=\"InnerTableButtonRow\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 191
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/password")), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 194
        echo twig_include($this->env, $context, "buttons.change_password.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 202
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/email")), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"newemail\" value=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"newemaildate\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 207
        echo twig_include($this->env, $context, "buttons.change_email.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td width=\"100%\"></td>
\t\t\t\t\t\t\t\t\t\t";
        // line 215
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty((isset($context["recovery_key"]) ? $context["recovery_key"] : null))) {
            // line 216
            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 218
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/register")), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 221
            echo twig_include($this->env, $context, "buttons.register_account.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 228
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<br/>
<a name=\"Public+Information\"></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\">
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/back-to-top.gif\"/>
\t\t</a>
\t</div>
</div>
<div class=\"TableContainer\">
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >Public Information</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 257
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\" ></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\" >
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Real Name:</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 279
        echo twig_escape_filter($this->env, (isset($context["account_rlname"]) ? $context["account_rlname"] : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Location:</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["account_location"]) ? $context["account_location"] : null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=right>
\t\t\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 289
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/info")), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 292
        echo twig_include($this->env, $context, "buttons.edit.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 303
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-bm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 304
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 305
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-br.gif);\"></div>  \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<br/>
<a name=\"Account+Logs\" ></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\">
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/back-to-top.gif\"/>
\t\t</a>
\t</div>
</div>
<div class=\"TableContainer\">
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >Account logs</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 333
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 334
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 335
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 336
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 346
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 348
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\" >
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\" >
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"LabelH\">
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:60%\">Action</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:25%\">Date</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:15%\">IP</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 357
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context["i"] = 0;
        // line 358
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 359
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 360
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
            echo call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null)));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 361
            echo $this->getAttribute($context["action"], "action", array());
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 362
            echo twig_date_format_filter($this->env, $this->getAttribute($context["action"], "date", array()), "jS F Y H:i:s");
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 363
            echo $this->getAttribute($context["action"], "ip", array());
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 367
        echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\" >
\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 371
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-bm.gif);\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 372
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 373
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-br.gif);\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td align=right>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<br/>
<a name=\"Characters\" ></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\" >
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 391
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/back-to-top.gif\" />
\t\t</a>
\t</div>
</div>
<div class=\"TableContainer\">
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\" >
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 399
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 400
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 401
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 402
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\">Characters</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 404
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 405
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 407
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 419
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"LabelH\">
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:65%\">Name</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:15%\">Level</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:7%\">Status</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:5%\">&#160;</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 428
        $context["i"] = 0;
        // line 429
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 430
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 431
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<nobr>";
            // line 433
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", array(), "method"), "html", null, true);
            if ($this->getAttribute($context["player"], "isDeleted", array(), "method")) {
                echo "<font color=\"red\"><b> [ DELETED ] </b></font>";
            }
            echo "</nobr>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<nobr>";
            // line 436
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations", array()), $this->getAttribute($context["player"], "getVocation", array(), "method"), array(), "array"), "html", null, true);
            echo "</nobr>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 438
            if ($this->getAttribute($context["player"], "isOnline", array(), "method")) {
                // line 439
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><font color=\"green\"><b>Online</b></font></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 441
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><font color=\"red\"><b>Offline</b></font></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 443
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>[<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array(("account/character/comment/" . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array($this->getAttribute($context["player"], "getName", array())))))), "html", null, true);
            echo "\" >Edit</a>]</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url('.\$template_path.'/images/content/table-shadow-bm.gif);\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 451
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 452
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-shadow-br.gif);\"></div>  \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table class=\"InnerTableButtonRow\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 462
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/create")), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 465
        echo twig_include($this->env, $context, "buttons.create_character.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
        // line 471
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_change_character_name", array())) {
            // line 472
            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 474
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/name")), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 477
            echo twig_include($this->env, $context, "buttons.change_name.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 484
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_change_character_sex", array())) {
            // line 485
            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 487
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/sex")), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 490
            echo twig_include($this->env, $context, "buttons.change_sex.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 497
        echo "\t\t\t\t\t\t\t\t\t\t<td style=\"width:100%;\" ></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 500
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/delete")), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 503
        echo twig_include($this->env, $context, "buttons.delete_character.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<br/><br/>";
    }

    public function getTemplateName()
    {
        return "account.management.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  974 => 503,  968 => 500,  963 => 497,  953 => 490,  947 => 487,  943 => 485,  940 => 484,  930 => 477,  924 => 474,  920 => 472,  918 => 471,  909 => 465,  903 => 462,  890 => 452,  886 => 451,  879 => 446,  869 => 443,  865 => 441,  861 => 439,  859 => 438,  852 => 436,  841 => 433,  835 => 431,  832 => 430,  827 => 429,  825 => 428,  813 => 419,  808 => 417,  795 => 407,  791 => 406,  787 => 405,  783 => 404,  778 => 402,  774 => 401,  770 => 400,  766 => 399,  755 => 391,  734 => 373,  730 => 372,  726 => 371,  720 => 367,  718 => 366,  709 => 363,  705 => 362,  701 => 361,  696 => 360,  693 => 359,  688 => 358,  685 => 357,  674 => 348,  669 => 346,  656 => 336,  652 => 335,  648 => 334,  644 => 333,  639 => 331,  635 => 330,  631 => 329,  627 => 328,  616 => 320,  598 => 305,  594 => 304,  590 => 303,  576 => 292,  570 => 289,  561 => 283,  554 => 279,  543 => 271,  538 => 269,  525 => 259,  521 => 258,  517 => 257,  513 => 256,  508 => 254,  504 => 253,  500 => 252,  496 => 251,  485 => 243,  468 => 228,  458 => 221,  452 => 218,  448 => 216,  445 => 215,  435 => 207,  427 => 202,  416 => 194,  410 => 191,  397 => 181,  393 => 180,  389 => 179,  383 => 175,  378 => 172,  373 => 170,  368 => 168,  362 => 166,  357 => 163,  352 => 161,  347 => 159,  342 => 157,  337 => 155,  332 => 153,  327 => 151,  319 => 150,  315 => 149,  309 => 146,  304 => 144,  291 => 134,  287 => 133,  283 => 132,  279 => 131,  274 => 129,  270 => 128,  266 => 127,  262 => 126,  251 => 118,  245 => 114,  237 => 109,  233 => 108,  229 => 107,  219 => 100,  213 => 97,  203 => 92,  196 => 88,  192 => 87,  187 => 85,  183 => 84,  179 => 83,  175 => 81,  173 => 80,  170 => 79,  162 => 74,  158 => 73,  154 => 72,  144 => 65,  138 => 62,  126 => 53,  122 => 52,  117 => 50,  113 => 49,  109 => 48,  105 => 46,  103 => 45,  95 => 39,  91 => 38,  86 => 36,  75 => 28,  71 => 27,  67 => 26,  55 => 17,  49 => 14,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.management.html.twig", "C:\\xampp\\htdocs\\global\\templates\\tibiacom\\account.management.html.twig");
    }
}
