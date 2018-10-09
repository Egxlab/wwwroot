<?php

/* install.installer.html.twig */
class __TwigTemplate_9644ea87c8790b5d39a582cd21a10649f3faf70d4118c7bc7f771b50294b31ea extends Twig_Template
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
        echo "<div id=\"success-1\"></div>
<div id=\"spinner\">
\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "images/loading_spinner.gif\" height=\"32\" width=\"32\"/>
\t";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
</div>
<script type=\"text/javascript\" src=\"tools/installer.js\"></script>
<script type=\"text/javascript\">
    \$(function() {
        performInstall('";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "');
    });
</script>";
    }

    public function getTemplateName()
    {
        return "install.installer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "install.installer.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\install.installer.html.twig");
    }
}
