<?php

/* buttons.login.html.twig */
class __TwigTemplate_2bd998b063c27437ac28952fa953d597b60a986cd96351569e5d725e6f169b25 extends Twig_Template
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
        $context["button_name"] = "Login";
        // line 2
        $context["button_image"] = "_sbutton_login";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.login.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.login.html.twig";
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
        return new Twig_Source("", "buttons.login.html.twig", "C:\\inetpub\\wwwroot\\templates\\tibiacom\\buttons.login.html.twig");
    }
}
