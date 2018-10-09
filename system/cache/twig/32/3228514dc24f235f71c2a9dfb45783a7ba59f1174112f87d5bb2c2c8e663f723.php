<?php

/* admin.pages.html.twig */
class __TwigTemplate_24f41a2efeae3d2aef68c25e86a854ecd02273a5e8d808e0700e82b956b33092 extends Twig_Template
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
        echo "<table class=\"table\" width=\"100%\" cellspacing=\"1\" cellpadding=\"4\">
\t<tr>
\t\t<th><b>Name</b></th>
\t\t<th><b>Title</b></th>
\t\t<th><b>Options</b></th>
\t</tr>
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 8
            echo "\t<tr>
\t\t<td>";
            // line 9
            echo $this->getAttribute($context["page"], "link", array());
            echo "</td>
\t\t<td><i>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</i></td>
\t\t<td>
\t\t\t<a href=\"?p=pages&action=edit&id=";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "images/edit.png\"/>
\t\t\t\tEdit
\t\t\t</a>
\t\t\t<a href=\"?p=pages&action=delete&id=";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t<img src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "images/del.png\"/>
\t\t\t\tDelete
\t\t\t</a>
\t\t\t<a href=\"?p=pages&action=hide&id=";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" title=\"<?php echo (\$_page['hidden'] != 1 ? 'Hide' : 'Show'); ?>\">
\t\t\t\t<img src=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "images/";
            if (($this->getAttribute($context["page"], "hidden", array()) != 1)) {
                echo "success";
            } else {
                echo "error";
            }
            echo ".png\"/>
\t\t\t\t";
            // line 22
            if (($this->getAttribute($context["page"], "hidden", array()) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            // line 23
            echo "\t\t\t</a>
\t\t</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "admin.pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  83 => 23,  77 => 22,  67 => 21,  63 => 20,  57 => 17,  53 => 16,  47 => 13,  43 => 12,  38 => 10,  34 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.pages.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\admin.pages.html.twig");
    }
}
