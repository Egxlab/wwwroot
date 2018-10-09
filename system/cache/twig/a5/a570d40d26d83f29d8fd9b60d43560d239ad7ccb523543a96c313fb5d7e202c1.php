<?php

/* guilds.accept_invite.html.twig */
class __TwigTemplate_eefe0f5038e7acf9eac7d64091c8daa89eba6b91d1879732f25ca36a553de729 extends Twig_Template
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
        echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td class=\"white\"><b>Accept invitation</b></td>
\t</tr>
\t<tr bgcolor=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo "\">
\t\t<td width=\"100%\">Select character to join guild:</td>
\t</tr>
\t<tr bgcolor=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t<td>
\t\t\t<form action=\"?subtopic=guilds&action=accept_invite&guild=";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["guild_name"]) ? $context["guild_name"] : null), "html", null, true);
        echo "&todo=save\" method=\"post\">
\t\t\t\t";
        // line 11
        $context["i"] = 0;
        // line 12
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invited_players"]) ? $context["invited_players"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 13
            echo "\t\t\t\t<input type=\"radio\" name=\"name\" id=\"name_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["player"], "html", null, true);
            echo "\" /><label for=\"name_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["player"], "html", null, true);
            echo "</label>
\t\t\t\t";
            // line 14
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 15
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t";
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t</form>
\t\t</td>
\t</tr>
</table>
<br/>
<center>
\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t<form action=\"";
        // line 26
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("guilds")) . "/") . (isset($context["guild_name"]) ? $context["guild_name"] : null)), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t";
        // line 27
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t\t\t\t</form>
\t\t\t</td>
\t\t</tr>
\t</table>
</center>";
    }

    public function getTemplateName()
    {
        return "guilds.accept_invite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  83 => 26,  69 => 16,  63 => 15,  61 => 14,  50 => 13,  45 => 12,  43 => 11,  39 => 10,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "guilds.accept_invite.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\guilds.accept_invite.html.twig");
    }
}
