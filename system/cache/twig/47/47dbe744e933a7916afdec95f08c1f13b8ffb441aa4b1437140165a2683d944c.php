<?php

/* install.admin.html.twig */
class __TwigTemplate_5a87496d48aa040c5fbb77fc0bc9638421f3f0acee6ca599993e836acbdb5ace extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "install/\" method=\"post\" autocomplete=\"off\">
\t<input type=\"hidden\" name=\"step\" id=\"step\" value=\"finish\" />
\t<table>
\t\t";
        // line 4
        if (twig_constant("USE_ACCOUNT_NAME")) {
            // line 5
            echo "\t\t";
            $context["type"] = "account";
            // line 6
            echo "\t\t";
        } else {
            // line 7
            echo "\t\t";
            $context["type"] = "account_id";
            // line 8
            echo "\t\t";
        }
        // line 9
        echo "
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => (isset($context["type"]) ? $context["type"] : null), 1 => "password"));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 11
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_";
            // line 13
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
\t\t\t\t\t<span>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), ("step_admin_" . $context["value"]), array(), "array"), "html", null, true);
            echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<input type=\"text\" name=\"vars[";
            // line 17
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "]\" id=\"vars_";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            if ( !(null === $this->getAttribute((isset($context["session"]) ? $context["session"] : null), ("var_" . $context["value"]), array(), "array"))) {
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), ("var_" . $context["value"]), array(), "array"), "html", null, true);
                echo "\"";
            }
            echo "/>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
            // line 20
            echo $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), (("step_admin_" . $context["value"]) . "_desc"), array(), "array");
            echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t</table>

\t";
        // line 26
        if (array_key_exists("errors", $context)) {
            // line 27
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 28
                echo "\t\t\t<p class=\"error\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t";
        }
        // line 31
        echo "\t";
        echo (isset($context["buttons"]) ? $context["buttons"] : null);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "install.admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  105 => 30,  96 => 28,  91 => 27,  89 => 26,  85 => 24,  75 => 20,  61 => 17,  55 => 14,  51 => 13,  47 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "install.admin.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\install.admin.html.twig");
    }
}
