<?php

/* buttons.base.html.twig */
class __TwigTemplate_a44c18f0b09dd9dcaab785db22738417a13b07372b9d6eeb92ae0fc187964495 extends Twig_Template
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
        ob_start();
        // line 2
        echo "<div class=\"BigButton\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/sbutton.gif)\">
\t<div onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\">
\t\t<div class=\"BigButtonOver\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/sbutton_over.gif);\" ></div>
\t\t<input class=\"ButtonText\" type=\"image\" name=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["button_name"]) ? $context["button_name"] : null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["button_name"]) ? $context["button_name"] : null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/";
        echo twig_escape_filter($this->env, (isset($context["button_image"]) ? $context["button_image"] : null), "html", null, true);
        echo ".gif\" />
\t</div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "buttons.base.html.twig", "C:\\xampp\\htdocs\\global\\templates\\tibiacom\\buttons.base.html.twig");
    }
}
