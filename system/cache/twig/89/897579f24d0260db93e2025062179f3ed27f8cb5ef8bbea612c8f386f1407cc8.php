<?php

/* gallery.get.html.twig */
class __TwigTemplate_56cb828f47f3d456054ccc51ef2486d36556ef784c591ad377a992bb957a9211 extends Twig_Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">
\t";
        // line 2
        if ( !(null === (isset($context["next"]) ? $context["next"] : null))) {
            // line 3
            echo "\t<a style=\"float: right;\" href=\"";
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("gallery")) . "/") . (isset($context["next"]) ? $context["next"] : null)), "html", null, true);
            echo "\" >next <img src=\"images/arrow_right.gif\" width=15 height=11 border=0 ></a>
\t";
        }
        // line 5
        echo "\t";
        if ( !(null === (isset($context["previous"]) ? $context["previous"] : null))) {
            // line 6
            echo "\t<a style=\"position: absolute;\" href=\"";
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("gallery")) . "/") . (isset($context["previous"]) ? $context["previous"] : null)), "html", null, true);
            echo "\"><img src=\"images/arrow_left.gif\" width=15 height=11 border=0 > previous</a>
\t";
        }
        // line 8
        echo "\t<div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\">
\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("gallery")), "html", null, true);
        echo "\" ><img src=\"images/arrow_up.gif\" width=11 height=15 border=0 > back</a>
\t</div>
</div>
<div style=\"position: relative; text-align: center; top: 20px; \">
\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "image", array()), "html", null, true);
        echo "\" />
\t<div style=\"margin-top: 15px; margin-bottom: 35px; \">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "comment", array()), "html", null, true);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "gallery.get.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  49 => 13,  42 => 9,  39 => 8,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gallery.get.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\gallery.get.html.twig");
    }
}
