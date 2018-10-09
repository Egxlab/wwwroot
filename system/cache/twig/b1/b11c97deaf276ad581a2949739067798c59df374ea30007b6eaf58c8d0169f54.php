<?php

/* admin.pages.links.html.twig */
class __TwigTemplate_b296dcabfabd3bad0043ed56068ded236b78b0cdc64bb3013f2d14811e0985a4 extends Twig_Template
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
        echo "<div style=\"text-align: right;\">
\t<a href=\"admin/?p=pages&action=edit&id=";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true);
        echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t\t<img src=\"images/edit.png\"/>Edit
\t</a>
\t<a id=\"delete\" href=\"admin/?p=pages&action=delete&id=";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true);
        echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete in Admin Panel\" target=\"_blank\">
\t\t<img src=\"images/del.png\"/>Delete
\t</a>
\t<a href=\"admin/?p=pages&action=hide&id=";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true);
        echo "\" title=\"";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hidden", array()) != 1)) {
            echo "Hide";
        } else {
            echo "Show";
        }
        echo " in Admin Panel\" target=\"_blank\">
\t\t<img src=\"images/";
        // line 9
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hidden", array()) != 1)) {
            echo "success";
        } else {
            echo "error";
        }
        echo ".png\"/>";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hidden", array()) != 1)) {
            echo "Hide";
        } else {
            echo "Show";
        }
        // line 10
        echo "\t</a>
\t<br/>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.pages.links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  44 => 9,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.pages.links.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\admin.pages.links.html.twig");
    }
}
