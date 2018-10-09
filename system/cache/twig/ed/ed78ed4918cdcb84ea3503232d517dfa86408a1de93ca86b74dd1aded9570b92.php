<?php

/* buttons.create_character.html.twig */
class __TwigTemplate_6d5bf2beb3f96a28148c1f09cf729b1d296932804366cb540e55be2f91fd61b7 extends Twig_Template
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
        $context["button_name"] = "Create Character";
        // line 2
        $context["button_image"] = "_sbutton_createcharacter";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.create_character.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.create_character.html.twig";
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
        return new Twig_Source("", "buttons.create_character.html.twig", "C:\\inetpub\\wwwroot\\templates\\tibiacom\\buttons.create_character.html.twig");
    }
}
