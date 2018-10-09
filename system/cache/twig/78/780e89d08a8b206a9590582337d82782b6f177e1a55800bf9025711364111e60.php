<?php

/* gallery.html.twig */
class __TwigTemplate_6ea6627012624540108ca6883ef3e6a2dee06644f7d6e7eaf1042d2e4cdce027 extends Twig_Template
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
        echo "Click on the image to enlarge.<br/><br/>
";
        // line 2
        $context["i"] = 0;
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 4
            echo "\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 5
            echo "\t<table>
\t\t<tr>
\t\t\t<td style=\"height: 120px;\" >
\t\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("gallery")) . "/") . $this->getAttribute($context["image"], "id", array())), "html", null, true);
            echo "\" >
\t\t\t\t\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "thumb", array()), "html", null, true);
            echo "\" border=\"0\" />
\t\t\t\t</a>
\t\t\t</td>
\t\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "comment", array()), "html", null, true);
            echo "</td>
\t\t\t";
            // line 13
            if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
                // line 14
                echo "\t\t\t<td>
\t\t\t\t<a href=\"?subtopic=gallery&action=edit&id=";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\" title=\"Edit\">
\t\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t\t</a>
\t\t\t\t<a id=\"delete\" href=\"?subtopic=gallery&action=delete&id=";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t<img src=\"images/del.png\"/>Delete
\t\t\t\t</a>
\t\t\t\t<a href=\"?subtopic=gallery&action=hide&id=";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\" title=\"";
                if (($this->getAttribute($context["image"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                echo "\">
\t\t\t\t\t<img src=\"images/";
                // line 22
                if (($this->getAttribute($context["image"], "hidden", array()) != 1)) {
                    echo "success";
                } else {
                    echo "error";
                }
                echo ".png\"/>";
                if (($this->getAttribute($context["image"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                // line 23
                echo "\t\t\t\t</a>
\t\t\t\t";
                // line 24
                if (((isset($context["i"]) ? $context["i"] : null) != 1)) {
                    // line 25
                    echo "\t\t\t\t<a href=\"?subtopic=gallery&action=moveup&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                    echo "\" title=\"Move up\">
\t\t\t\t\t<img src=\"images/icons/arrow_up.gif\"/>Move up
\t\t\t\t</a>
\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t";
                if (((isset($context["i"]) ? $context["i"] : null) != (isset($context["last"]) ? $context["last"] : null))) {
                    // line 30
                    echo "\t\t\t\t<a href=\"?subtopic=gallery&action=movedown&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                    echo "\" title=\"Move down\">
\t\t\t\t\t<img src=\"images/icons/arrow_down.gif\"/>Move down
\t\t\t\t</a>
\t\t\t\t";
                }
                // line 34
                echo "\t\t\t</td>
\t\t\t";
            }
            // line 36
            echo "\t\t</tr>
\t</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  113 => 34,  105 => 30,  102 => 29,  94 => 25,  92 => 24,  89 => 23,  77 => 22,  67 => 21,  61 => 18,  55 => 15,  52 => 14,  50 => 13,  46 => 12,  40 => 9,  36 => 8,  31 => 5,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gallery.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\gallery.html.twig");
    }
}
