<?php

/* buttons.submit.html.twig */
class __TwigTemplate_e6b57aa1a2074805ce7bb195b5b4b4d042db68b69e89790b6fef37d6e3fbdb47 extends Twig_Template
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
        $context["button_name"] = "Submit";
        // line 2
        $this->loadTemplate("buttons.base.html.twig", "buttons.submit.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.submit.html.twig";
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
        return new Twig_Source("", "buttons.submit.html.twig", "C:\\inetpub\\wwwroot\\site\\system\\templates\\buttons.submit.html.twig");
    }
}
