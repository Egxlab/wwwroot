<?php

/* creatures.back_button.html.twig */
class __TwigTemplate_3f103e4692735510f05cf9dd211e60bbc8a784bac02931778584e0b1740051d4 extends Twig_Template
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
        echo "<br/></br>
<center>
\t<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("creatures")), "html", null, true);
        echo "\" method=\"post\">
\t\t";
        // line 4
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t</form>
</center>";
    }

    public function getTemplateName()
    {
        return "creatures.back_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "creatures.back_button.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\creatures.back_button.html.twig");
    }
}
