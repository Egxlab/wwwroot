<?php

/* admin.items.html.twig */
class __TwigTemplate_18c9b235266e4ac82d74494a3f0380866a99dfb9ff191584e3d59e910e4da40f extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
        echo "?p=items\">
\t<input type=\"hidden\" name=\"reload\" value=\"1\" />
\t<input type=\"submit\" value=\"Reload items and weapons (it may take some time to finish)\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "admin.items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.items.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\admin.items.html.twig");
    }
}
