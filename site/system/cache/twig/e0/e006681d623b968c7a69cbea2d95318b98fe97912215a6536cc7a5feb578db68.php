<?php

/* buttons.base.html.twig */
class __TwigTemplate_cb17a40f578268762cc09a36f585f74d4fb062ef933ad6802c1b3ec22ffe27b0 extends Twig_Template
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
        echo "<input type=\"submit\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["button_name"]) ? $context["button_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["button_name"]) ? $context["button_name"] : null), "html", null, true);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "buttons.base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "buttons.base.html.twig", "C:\\inetpub\\wwwroot\\site\\system\\templates\\buttons.base.html.twig");
    }
}
