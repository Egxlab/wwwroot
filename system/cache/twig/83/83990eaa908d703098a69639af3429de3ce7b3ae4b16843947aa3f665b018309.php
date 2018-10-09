<?php

/* install.welcome.html.twig */
class __TwigTemplate_bed705278e5977dc9edfca6d1e707980749026fa65f90f7b1d9f1f45fe83befc extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "install/\" method=\"post\">
\t<input type=\"hidden\" name=\"step\" id=\"step\" value=\"license\" />
\t<div class=\"input\"><p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "step_welcome_desc", array()), "html", null, true);
        echo "</p>
\t\t<select name=\"lang\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["locale_"]) {
            // line 6
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale_"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale_"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale_'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t</select>
\t</div>

\t";
        // line 11
        echo (isset($context["buttons"]) ? $context["buttons"] : null);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "install.welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  45 => 8,  34 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "install.welcome.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\install.welcome.html.twig");
    }
}
