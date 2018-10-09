<?php

/* account.change_info.html.twig */
class __TwigTemplate_1be06592cd4c9fbd884aef6ead6cd3dde134dc8610a05366b757e51f72bd8bb4 extends Twig_Template
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
        echo "Here you can tell other players about yourself. This information will be displayed alongside the data of your characters. If you do not want to fill in a certain field, just leave it blank.<br/><br/>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/info")), "html", null, true);
        echo "\" method=post>
\t<div class=\"TableContainer\" >
\t\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t<div class=\"CaptionContainer\" >
\t\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<div class=\"Text\" >Change Public Information</div>
\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Real Name:</td>
\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >
\t\t\t\t\t\t\t\t\t<input name=\"info_rlname\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["account_rlname"]) ? $context["account_rlname"] : null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"50\" >
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Location:</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input name=\"info_location\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["account_location"]) ? $context["account_location"] : null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"50\" >
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 34
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_country", array())) {
            // line 35
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Country:</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"info_country\" id=\"account_country\">
\t\t\t\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["country"]) {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"";
                if (((isset($context["account_country"]) ? $context["account_country"] : null) == $context["code"])) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["country"], "html", null, true);
                echo " </option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<img src=\"\" id=\"account_country_img\"/>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\tfunction updateFlag()
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tvar img = \$('#account_country_img');
\t\t\t\t\t\t\t\t\t\t\tvar country = \$('#account_country :selected').val();
\t\t\t\t\t\t\t\t\t\t\tif(country.length) {
\t\t\t\t\t\t\t\t\t\t\t\timg.attr('src', 'images/flags/' + country + '.gif');
\t\t\t\t\t\t\t\t\t\t\t\timg.show();
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\t\t\t\t\timg.hide();
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\$(function() {
\t\t\t\t\t\t\t\t\t\t\tupdateFlag();
\t\t\t\t\t\t\t\t\t\t\t\$('#account_country').change(function() {
\t\t\t\t\t\t\t\t\t\t\t\tupdateFlag();
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 68
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
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"changeinfosave\" value=\"1\">
\t\t\t\t\t\t\t\t";
        // line 82
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t\t<td>
</form>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t<form action=\"";
        // line 90
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/manage")), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t";
        // line 93
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
        return "account.change_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 93,  169 => 90,  158 => 82,  142 => 68,  114 => 42,  99 => 40,  95 => 39,  89 => 35,  87 => 34,  81 => 31,  72 => 25,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.change_info.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\account.change_info.html.twig");
    }
}
