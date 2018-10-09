<?php

/* account.welcome_mail.html.twig */
class __TwigTemplate_31a31e06b54618bf00aab7f7211d082dfc07e1a476bd00625093c3ada1ec1125 extends Twig_Template
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
        echo "<h3>Dear player,</h3>
<p>Thanks for your registration at <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "\"><b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo "</b></a></p>
<br/><br/>
Your login details:
<p>Account ";
        // line 5
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo ": <b>";
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo "</b></p>
<p>Password: <b>************</b> (hidden for security reasons)</p>
<p>Kind Regards,</p>";
    }

    public function getTemplateName()
    {
        return "account.welcome_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.welcome_mail.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\account.welcome_mail.html.twig");
    }
}
