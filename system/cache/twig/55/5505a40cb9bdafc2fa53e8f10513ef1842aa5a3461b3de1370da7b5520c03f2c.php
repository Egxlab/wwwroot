<?php

/* guilds.create.success.html.twig */
class __TwigTemplate_b828109d2e26617c80b1228f775c41ed8108dd7279eff45e59369c8a1ae2e486 extends Twig_Template
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
        $context["title"] = "Created guild";
        // line 2
        echo "
";
        // line 3
        $context["motd"] = "";
        // line 4
        if (twig_constant("MOTD_EXISTS")) {
            // line 5
            $context["motd"] = " and motd";
        }
        // line 7
        echo "
";
        // line 8
        $context["description"] = (((((("<b>Congratulations!</b><br/>You have created guild <b>" . (isset($context["guild_name"]) ? $context["guild_name"] : null)) . "</b>. <b>") . (isset($context["leader_name"]) ? $context["leader_name"] : null)) . "</b> is leader of this guild. Now you can invite players, change picture, description") . (isset($context["motd"]) ? $context["motd"] : null)) . " of guild. Press submit to open guild manager.");
        // line 9
        $context["custom_buttons"] = "";
        // line 10
        echo twig_include($this->env, $context, "success.html.twig");
        echo "
<br/>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t<tr>
\t\t<td>
\t\t\t<center>
\t\t\t\t<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("guilds")) . "/") . (isset($context["guild_name"]) ? $context["guild_name"] : null)), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t";
        // line 17
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t</form>
\t\t\t</center>
\t\t</td>
\t</tr>
</table>";
    }

    public function getTemplateName()
    {
        return "guilds.create.success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  47 => 16,  38 => 10,  36 => 9,  34 => 8,  31 => 7,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "guilds.create.success.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\guilds.create.success.html.twig");
    }
}
