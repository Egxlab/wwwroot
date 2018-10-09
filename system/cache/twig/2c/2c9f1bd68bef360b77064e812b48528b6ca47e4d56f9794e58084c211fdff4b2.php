<?php

/* buttons.register_account.html.twig */
class __TwigTemplate_1e45ed8945496ddce567e8f9a8f8b44e8fc6cb4c69e763965dce75b20d7d7e99 extends Twig_Template
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
        $context["button_name"] = "Register Account";
        // line 2
        $context["button_image"] = "_sbutton_registeraccount";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.register_account.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.register_account.html.twig";
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
        return new Twig_Source("", "buttons.register_account.html.twig", "C:\\inetpub\\wwwroot\\templates\\tibiacom\\buttons.register_account.html.twig");
    }
}
