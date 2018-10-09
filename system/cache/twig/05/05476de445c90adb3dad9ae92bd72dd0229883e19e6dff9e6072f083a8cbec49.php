<?php

/* buttons.logout.html.twig */
class __TwigTemplate_803305b0e256198c3158ffb6f283bedbf60e4d0ee28077a883208ec6c3ff2494 extends Twig_Template
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
        $context["button_name"] = "Logout";
        // line 2
        $context["button_image"] = "_sbutton_logout";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.logout.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.logout.html.twig";
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
        return new Twig_Source("", "buttons.logout.html.twig", "C:\\inetpub\\wwwroot\\templates\\tibiacom\\buttons.logout.html.twig");
    }
}
