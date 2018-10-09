<?php

/* gesior-shop-system/points.html.twig */
class __TwigTemplate_81205fbe608abb0cdb68d88ec53762fecd7604148adbb01011ab0c366302db55 extends Twig_Template
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
        echo "<div class=\"main-box\">
\t";
        // line 2
        if ($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "paypal", array())) {
            // line 3
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=paypal\" title=\"Gain with PayPal\"><img class=\"floating-logo\" src=\"images/shop-system/paypal.gif\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tCredit card, paypal.<br/>
\t\t\t\t<b>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "paypal", array()), "currency_code", array()), "html", null, true);
            echo "</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tALL COUNTRIES!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 16
        echo "\t";
        if ($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "fortumo", array())) {
            // line 17
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<script src=\"https://assets.fortumo.com/fmp/fortumopay.js\" type=\"text/javascript\"></script>
\t\t\t\t<a id=\"fmp-button\" href=\"#\" rel=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "fortumo", array()), "service_id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t<img class=\"floating-logo\" src=\"https://assets.fortumo.com/fmp/fortumopay_150x50_red.png\" width=\"150\" height=\"50\" alt=\"Mobile Payments by Fortumo\" border=\"0\" />
\t\t\t\t</a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tSMS.<br/>
\t\t\t\t<b>ALL CURRENCIES</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tALL COUNTRIES!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 33
        echo "\t";
        if ($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "cryptobox", array())) {
            // line 34
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=cryptobox\" title=\"Pay with Crypto Coins\"><img class=\"floating-logo\" src=\"images/shop-system/gourl.png\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\t<b>BitCoins</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tALL COUNTRIES!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 46
        echo "\t";
        if ($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "daopay", array())) {
            // line 47
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=daopay\" title=\"Gain with DaoPay (EUR)\"><img class=\"floating-logo\" src=\"images/shop-system/daopay.gif\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tSMS, phone call.<br/>
\t\t\t\t<b>EUR</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tALL COUNTRIES!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 60
        echo "\t";
        if ($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "pagseguro", array())) {
            // line 61
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=pagseguro\" title=\"Pay with PagSeguro (BRL)\"><img class=\"floating-logo\" src=\"images/shop-system/pagseguro.png\" style=\"width: 260px; heigth: 80px;\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\t<b>BRL</b>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tBRAZIL!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 73
        echo "\t";
        if ($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "dotpay", array())) {
            // line 74
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=dotpay\" title=\"Zapłać poprzez SMS lub przelewem - POLSKA/POLAND (PLN)\"><img class=\"floating-logo\" src=\"images/shop-system/dotpay.png\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tSMS, przelew.<br/>
\t\t\t\t<b>PLN</b><br/>
\t\t\t\tDla graczy z Polski.
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tONLY POLAND!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 88
        echo "\t";
        if ($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "homepay", array())) {
            // line 89
            echo "\t\t<div class=\"floating-box\">
\t\t\t<div class=\"floating-logo-box\">
\t\t\t\t<a href=\"?subtopic=points&system=homepay\" title=\"Zapłać poprzez SMS lub przelewem - POLSKA/POLAND (PLN)\"><img class=\"floating-logo\" src=\"images/shop-system/homepay.png\" border=\"0\" /></a><br/>
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tSMS, przelew.<br/>
\t\t\t\t<b>PLN</b><br/>
\t\t\t\tDla graczy z Polski.
\t\t\t</div>
\t\t\t<div class=\"info-box\">
\t\t\t\tONLY POLAND!
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 103
        echo "</div>
<style>
.main-box {
\tmargin: 0 auto;
\t display: inline-block;
    height: 100%;
}
.floating-box {
\tfloat: left;
\tmargin-left: 30px;
}
.floating-logo-box {
\theight: 120px;
\tline-height:8em;
}
.floating-logo {
\tvertical-align: bottom;
}
.info-box {
\theight: 70px;
\ttext-align: center;
}
</style>";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/points.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 103,  142 => 89,  139 => 88,  123 => 74,  120 => 73,  106 => 61,  103 => 60,  88 => 47,  85 => 46,  71 => 34,  68 => 33,  50 => 20,  45 => 17,  42 => 16,  32 => 9,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gesior-shop-system/points.html.twig", "C:\\xampp\\htdocs\\global\\system\\templates\\gesior-shop-system\\points.html.twig");
    }
}
