<?php

/* buttons.account_lost.html.twig */
class __TwigTemplate_53a2a25594464b5b514e0e5b5ebd813fdc93bc296cc588481846150057a63be1 extends Twig_Template
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
        $context["button_image"] = "_sbutton_accountlost";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.account_lost.html.twig", 3)->display($context);
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
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "buttons.account_lost.html.twig", "C:\\xampp\\htdocs\\global\\templates\\tibiacom\\buttons.account_lost.html.twig");
    }
}
