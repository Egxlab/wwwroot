<?php

/* guilds.back_button.html.twig */
class __TwigTemplate_5a6f98d22374edccbcfe2857a434c2e1381887eace677b440c5eb2f6ebc360a8 extends Twig_Template
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
        if ((array_key_exists("new_line", $context) && (isset($context["new_line"]) ? $context["new_line"] : null))) {
            // line 2
            echo "<br/>
";
        }
        // line 4
        echo "<center>
\t<form action=\"";
        // line 5
        if ( !array_key_exists("action", $context)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("guilds")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        }
        echo "\" method=\"post\">
\t\t";
        // line 6
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t</form>
</center>";
    }

    public function getTemplateName()
    {
        return "guilds.back_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "guilds.back_button.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\guilds.back_button.html.twig");
    }
}
