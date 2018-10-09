<?php

/* account.lost.form.html.twig */
class __TwigTemplate_cb7b5d3f711afcef3da66b4550f0b7b35b8922ad26a513cf3463ada76b10bb9f extends Twig_Template
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
        echo "The Lost Account Interface can help you to get back your account name and password. Please enter your character name and select what you want to do.<br/>
<form action=\"?subtopic=lostaccount&action=step1\" method=post>
\t<input type=\"hidden\" name=\"character\" value=\"\">
\t<table cellspacing=\"1\" cellpadding=\"4\" border=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\"><b>Please enter your character name</b></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"text\" name=\"nick\" size=\"40\" autofocus/><br>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<table cellspacing=\"1\" cellpadding=\"4\" border=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\"><b>What do you want?</b></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"radio\" name=\"action_type\" id=\"action_type_email\" value=\"email\">
\t\t\t\t<label for=\"action_type_email\"> Send me new password and my account name to account e-mail adress.</label><br/>
\t\t\t\t<input type=radio name=\"action_type\" id=\"action_type_key\" value=\"reckey\">
\t\t\t\t<label for=\"action_type_key\"> I got <b>recovery key</b> and want set new password and e-mail adress to my account.</label><br/>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<br/>
\t<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td align=\"center\">
\t\t\t\t";
        // line 31
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "account.lost.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 31,  48 => 19,  42 => 16,  32 => 9,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.lost.form.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\account.lost.form.html.twig");
    }
}
