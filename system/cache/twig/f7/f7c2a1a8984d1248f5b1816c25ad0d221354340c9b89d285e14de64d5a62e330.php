<?php

/* admin.login.html.twig */
class __TwigTemplate_ba3de594ca4be6c0438410956af7f738539fcc032c9393f9f6fa49d00731c3d5 extends Twig_Template
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
        echo "Please login.
<form method=\"post\">
\t<input type=\"password\" name=\"account_login\" id=\"account-name-input\" size=\"30\" maxlength=\"30\" autofocus/><br/>
\t<input type=\"password\" name=\"password_login\" size=\"30\" maxlength=\"29\"/><br/>
\t<input type=\"checkbox\" id=\"remember_me\" name=\"remember_me\" value=\"true\"/>
\t<label for=\"remember_me\"> Remember me</label><br/>
\t<input type=\"hidden\" name=\"admin\" value=\"1\"/>
\t<input type=\"submit\" class=\"button\" value=\"Login\"/>
</form>";
    }

    public function getTemplateName()
    {
        return "admin.login.html.twig";
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
        return new Twig_Source("", "admin.login.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\admin.login.html.twig");
    }
}
