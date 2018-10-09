<?php

/* success.html.twig */
class __TwigTemplate_5455b9448f67433725371482a8c2ced86c9b38ff8cffe70f3249852a667157df extends Twig_Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2><br/>
";
        // line 2
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
";
        // line 3
        if (array_key_exists("custom_buttons", $context)) {
            // line 4
            echo (isset($context["custom_buttons"]) ? $context["custom_buttons"] : null);
            echo "
";
        } else {
            // line 6
            echo "<div style=\"text-align: center; margin: 0 auto;\">
\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t<form action=\"";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/manage")), "html", null, true);
            echo "\" method=\"post\">
\t\t\t<tr>
\t\t\t\t<td style=\"border:0px; text-align: center;\">
\t\t\t\t\t<input type=\"submit\" name=\"Back\" value=\"Back\"/>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</form>
\t</table>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 6,  30 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "success.html.twig", "C:\\xampp\\htdocs\\global\\templates\\kathrine\\success.html.twig");
    }
}
