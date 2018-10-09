<?php

/* buttons.account_lost.html.twig */
class __TwigTemplate_d041eab3afea38582d97935e8bb6759b22e498b8e134db1020b7024441a3b480 extends Twig_Template
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
        $context["button_name"] = "Account lost?";
        // line 2
        $this->loadTemplate("buttons.base.html.twig", "buttons.account_lost.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.account_lost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "buttons.account_lost.html.twig", "C:\\inetpub\\wwwroot\\site\\system\\templates\\buttons.account_lost.html.twig");
    }
}
