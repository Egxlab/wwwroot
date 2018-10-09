<?php

/* account.created.html.twig */
class __TwigTemplate_7719d3b2b6bebc4d7b5e751cd318eb17fa81447bc1ab700c247c26773a4a149e extends Twig_Template
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
        echo "Your account has been created. Now you can login and create your first character. See you in Tibia!<br/><br/>
<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t<tr>
\t\t<td bgcolor=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\"><b>Account Created</b></td>
\t</tr>
\t<tr>
\t\t<td bgcolor=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 11
        if (twig_constant("USE_ACCOUNT_NAME")) {
            // line 12
            echo "\t\t\t\t\t\t\t";
            $context["account_type"] = "name";
            // line 13
            echo "\t\t\t\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t\t\t\t";
            $context["account_type"] = "number";
            // line 15
            echo "\t\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t\t<br/>Your account ";
        echo twig_escape_filter($this->env, (isset($context["account_type"]) ? $context["account_type"] : null), "html", null, true);
        echo " is <b>";
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo "</b><br/>You will need the account ";
        echo twig_escape_filter($this->env, (isset($context["account_type"]) ? $context["account_type"] : null), "html", null, true);
        echo " and your password to play on ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo ".
\t\t\t\t\t\tPlease keep your account ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["account_type"]) ? $context["account_type"] : null), "html", null, true);
        echo " and password in a safe place and
\t\t\t\t\t\tnever give your account ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["account_type"]) ? $context["account_type"] : null), "html", null, true);
        echo " or password to anybody.<br/><br/>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t</tr>
</table>
<br/><br/>";
    }

    public function getTemplateName()
    {
        return "account.created.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  62 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  39 => 12,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.created.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\account.created.html.twig");
    }
}
