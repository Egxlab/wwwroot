<?php

/* buttons.edit.html.twig */
class __TwigTemplate_05747f8b04d91c7298231e579cb80e15596827a24fa3ee84c31221ca09f75597 extends Twig_Template
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
        $context["button_name"] = "Edit";
        // line 2
        $context["button_image"] = "_sbutton_edit";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.edit.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.edit.html.twig";
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
        return new Twig_Source("", "buttons.edit.html.twig", "C:\\inetpub\\wwwroot\\templates\\tibiacom\\buttons.edit.html.twig");
    }
}
