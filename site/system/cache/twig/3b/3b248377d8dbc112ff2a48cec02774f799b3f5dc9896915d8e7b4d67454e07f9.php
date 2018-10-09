<?php

/* admin.plugins.form.html.twig */
class __TwigTemplate_59f12e90e69d4dde299dda5f817b18719b5cd3536f2b98309bb8b2e7401dd3d8 extends Twig_Template
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
        echo "<form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
        echo "?p=plugins\">
\t<input type=\"hidden\" name=\"upload_plugin\" />
\t<table cellspacing=\"3\" border=\"0\">
\t\t<tr>
\t\t\t<td colspan=\"2\">Install plugin:</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<input type=\"file\" name=\"plugin\" />
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<input type=\"submit\" value=\"Upload\" />
\t\t\t</td>
\t\t</tr>
\t</table>
</form>
<br/><br/>";
    }

    public function getTemplateName()
    {
        return "admin.plugins.form.html.twig";
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
        return new Twig_Source("", "admin.plugins.form.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\admin.plugins.form.html.twig");
    }
}
