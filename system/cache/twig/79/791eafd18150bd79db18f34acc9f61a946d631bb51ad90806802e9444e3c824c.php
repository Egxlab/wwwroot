<?php

/* admin.plugins.html.twig */
class __TwigTemplate_1ca2169b009848080fedab1e27bdd43bb89c9cfccd708214daee27d704a7a2a9 extends Twig_Template
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
        echo "<b>Installed plugins:</b>
<table class=\"table\" border=\"0\" align=\"center\">
\t<tr>
\t\t<th>Plugin name (Description on hover)</th>
\t\t<th>Filename</th>
\t\t<th>Version</th>
\t\t<th>Author</th>
\t\t<th>Contact</th>
\t\t<th>Options</th>
\t</tr>
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 12
            echo "\t<tr>
\t\t<td><div title=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "</div></td>
\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "file", array()), "html", null, true);
            echo ".json</td>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "version", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "author", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "contact", array()), "html", null, true);
            echo "</td>
\t\t<td>
\t\t";
            // line 19
            if ($this->getAttribute($context["plugin"], "uninstall", array())) {
                // line 20
                echo "\t\t\t<a href=\"?p=plugins&uninstall=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "file", array()), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\">Uninstall</a>
\t\t";
            }
            // line 22
            echo "\t\t</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "admin.plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  69 => 22,  63 => 20,  61 => 19,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.plugins.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\admin.plugins.html.twig");
    }
}
