<?php

/* faq.html.twig */
class __TwigTemplate_f62244ba35b12e14e6cc1958711be044a23a16168a738b48eb299d5f97946f6a extends Twig_Template
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
        echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t<tr class=\"white\" bgcolor=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td>
\t\t\t<b>FAQ</b>
\t\t</td>
\t\t<td align=\"right\">
\t\t\t<a href=\"#\" onclick=\"toggleAll(); return false;\">Toggle all</a>
\t\t</td>
\t\t";
        // line 9
        if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
            // line 10
            echo "\t\t<td style=\"width: 300px\">
\t\t\tOptions
\t\t</td>
\t\t";
        }
        // line 14
        echo "\t</tr>
\t";
        // line 15
        $context["i"] = 0;
        // line 16
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 17
            echo "\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 18
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\">
\t\t<td colspan=\"2\" style=\"cursor: pointer;\" onclick=\"toggleVisibility('faq_";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "'); return false;\">
\t\t\t<b>";
            // line 20
            echo $this->getAttribute($context["faq"], "question", array());
            echo "</b>

\t\t\t<div id=\"faq_";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" style=\"display: none;\">";
            echo $this->getAttribute($context["faq"], "answer", array());
            echo "</div>
\t\t</td>
\t\t";
            // line 24
            if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
                // line 25
                echo "\t\t\t<td>
\t\t\t\t<a href=\"?subtopic=faq&action=edit&id=";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
                echo "\" title=\"Edit\">
\t\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t\t</a>
\t\t\t\t<a id=\"delete\" href=\"?subtopic=faq&action=delete&id=";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t<img src=\"images/del.png\"/>Delete
\t\t\t\t</a>
\t\t\t\t<a href=\"?subtopic=faq&action=hide&id=";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
                echo "\" title=\"";
                if (($this->getAttribute($context["faq"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                echo "\">
\t\t\t\t\t<img src=\"images/";
                // line 33
                if (($this->getAttribute($context["faq"], "hidden", array()) != 1)) {
                    echo "success";
                } else {
                    echo "error";
                }
                echo ".png\"/>";
                if (($this->getAttribute($context["faq"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                // line 34
                echo "\t\t\t\t</a>
                ";
                // line 35
                if (((isset($context["i"]) ? $context["i"] : null) != 1)) {
                    // line 36
                    echo "\t\t\t\t\t<a href=\"?subtopic=faq&action=moveup&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
                    echo "\" title=\"Move up\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_up.gif\"/>Move up
\t\t\t\t\t</a>
                ";
                }
                // line 40
                echo "                ";
                if (((isset($context["i"]) ? $context["i"] : null) != (isset($context["last"]) ? $context["last"] : null))) {
                    // line 41
                    echo "\t\t\t\t\t<a href=\"?subtopic=faq&action=movedown&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", array()), "html", null, true);
                    echo "\" title=\"Move down\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_down.gif\"/>Move down
\t\t\t\t\t</a>
                ";
                }
                // line 45
                echo "\t\t\t</td>
\t\t";
            }
            // line 47
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</table>

<script type=\"text/javascript\">
\tvar expanded = false;

\tfunction toggleVisibility(id)
\t{
\t\tvar tmp = document.getElementById(id);
\t\tif(tmp)
\t\t\ttmp.style.display = tmp.style.display == 'none' ? '' : 'none';
\t}

\tfunction toggleAll()
\t{
\t\tfor(i = 1; i < ";
        // line 63
        echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
        echo "; i++)
\t\t{
\t\t\tdocument.getElementById('faq_' + i).style.display = expanded ? 'none' : '';
\t\t}

\t\texpanded = !expanded;
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 63,  148 => 49,  141 => 47,  137 => 45,  129 => 41,  126 => 40,  118 => 36,  116 => 35,  113 => 34,  101 => 33,  91 => 32,  85 => 29,  79 => 26,  76 => 25,  74 => 24,  67 => 22,  62 => 20,  58 => 19,  53 => 18,  50 => 17,  45 => 16,  43 => 15,  40 => 14,  34 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "faq.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\faq.html.twig");
    }
}
