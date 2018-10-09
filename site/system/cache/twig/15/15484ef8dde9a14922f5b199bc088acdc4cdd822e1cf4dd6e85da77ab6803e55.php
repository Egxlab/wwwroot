<?php

/* guilds.invite.html.twig */
class __TwigTemplate_e44ffc930f7ef9e88c397d69f8d683858325635da944aba0dc80344ed73d2a1f extends Twig_Template
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
        echo "<form action=\"?subtopic=guilds&action=invite&guild=";
        echo twig_escape_filter($this->env, (isset($context["guild_name"]) ? $context["guild_name"] : null), "html", null, true);
        echo "&todo=save\" method=\"post\">
\tInvite player with name:&nbsp;&nbsp;<input type=\"text\" name=\"name\">&nbsp;&nbsp;&nbsp;&nbsp;
\t";
        // line 3
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "guilds.invite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "guilds.invite.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\guilds.invite.html.twig");
    }
}
