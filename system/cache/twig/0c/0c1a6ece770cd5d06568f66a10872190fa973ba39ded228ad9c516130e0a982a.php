<?php

/* account.management.html.twig */
class __TwigTemplate_1b0dba90c733b92092e08b9fd7d003c3c4829ef3cb334ee1387b0339ecf2230c extends Twig_Template
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
        echo "<style type=\"text/css\">
\t#account-manage {
\t\twidth: 100%;
\t\tmargin: auto;
\t\tpadding: 10px;
\t}
\tdiv#one {
\t\twidth: 150px;
\t\tfloat: left;
\t}
\tdiv#two {
\t\tmargin-left: 150px;
\t\tpadding-left: 10px;
\t}

\t.vertical-menu a {
\t\tbackground-color: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo "; /* Grey background color */
\t\tcolor: black; /* Black text color */
\t\tdisplay: block; /* Make the links appear below each other */
\t\tpadding: 12px; /* Add some padding */
\t\ttext-decoration: none; /* Remove underline from links */
\t}

\t.vertical-menu a:hover {
\t\tbackground-color: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "; /* Dark grey background on mouse-over */
\t}
</style>
";
        // line 28
        $context["menus"] = array("Create Character" => "account/character/create", "Delete Character" => "account/character/delete", "Change Info" => "account/info", "Change Password" => "account/password", "Change Email" => "account/email");
        // line 32
        echo "<div id=\"account-manage\">
\t<div id=\"one\">
\t\t<div class=\"vertical-menu\">
\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/manage")), "html", null, true);
        echo "\">My Account</a>
\t\t\t";
        // line 36
        if (twig_test_empty((isset($context["recovery_key"]) ? $context["recovery_key"] : null))) {
            // line 37
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/register")), "html", null, true);
            echo "\">Register Account</a>
\t\t\t";
        }
        // line 39
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["link"]) {
            // line 40
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array($context["link"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_change_character_name", array())) {
            // line 43
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/name")), "html", null, true);
            echo "\">Change Name</a>
\t\t\t";
        }
        // line 45
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_change_character_sex", array())) {
            // line 46
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/sex")), "html", null, true);
            echo "\">Change Sex</a>
\t\t\t";
        }
        // line 48
        echo "\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/logout")), "html", null, true);
        echo "\">Logout</a>
\t\t</div>
\t</div>
\t<div id=\"two\">
\t\t<h1>My account</h1>
\t\t<p>Welcome to your account page, ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo "<br>
\t\t\t";
        // line 54
        if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "freePremium", array())) {
            // line 55
            echo "\t\t\tYou have unlimited Premium Account.
\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t";
            $context["premiumDays"] = $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getPremDays", array(), "method");
            // line 58
            echo "\t\t\t\t";
            if (((isset($context["premiumDays"]) ? $context["premiumDays"] : null) == 0)) {
                // line 59
                echo "\t\t\t\tYou don't have Premium Account
\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\tYou have ";
                echo twig_escape_filter($this->env, (isset($context["premiumDays"]) ? $context["premiumDays"] : null), "html", null, true);
                echo " days remaining Premium Account.
\t\t\t\t";
            }
            // line 63
            echo "\t\t\t";
        }
        // line 64
        echo "\t\t</p>

\t\t";
        // line 67
        echo "\t\t";
        if (twig_test_empty((isset($context["recovery_key"]) ? $context["recovery_key"] : null))) {
            // line 68
            echo "\t\t<div align=\"center\">
\t\t\tYou can register your account for increased protection. Click on \"Register Account\" and get your free recovery key today!<br/>
\t\t\t<form action=\"";
            // line 70
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/register")), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t";
            // line 71
            $context["button_name"] = "Register Account";
            // line 72
            echo "\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 72)->display($context);
            // line 73
            echo "\t\t\t</form>
\t\t</div>
\t\t<br/>
\t\t";
        }
        // line 77
        echo "
\t\t";
        // line 78
        if ((isset($context["email_request"]) ? $context["email_request"] : null)) {
            // line 79
            echo "\t\t\t<div align=\"center\">
\t\t\t\tA request has been submitted to change the email address of this account to <b>";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["email_new"]) ? $context["email_new"] : null), "html", null, true);
            echo "</b>. After <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["email_new_time"]) ? $context["email_new_time"] : null), "j F Y, G:i:s"), "html", null, true);
            echo "</b> you can accept the new email address and finish the process. Please cancel the request if you do not want your email address to be changed! Also cancel the request if you have no access to the new email address!

\t\t\t\t<form action=\"";
            // line 82
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/email")), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t";
            // line 83
            $context["button_name"] = "Edit";
            // line 84
            echo "\t\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 84)->display($context);
            // line 85
            echo "\t\t\t\t</form>
\t\t\t</div>
\t\t<br/><br/>
\t\t";
        }
        // line 89
        echo "\t\t<a name=\"General+Information\"></a>
\t\t<h2>General Information</h2>
\t\t<table width=\"100%\">
\t\t\t<tr style=\"background-color: ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 90px;\">Account ";
        // line 93
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "Name";
        } else {
            echo "Number";
        }
        echo ":</td>
\t\t\t\t<td>";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 90px;\">Email Address:</td>
\t\t\t\t<td>";
        // line 98
        echo twig_escape_filter($this->env, ((isset($context["account_email"]) ? $context["account_email"] : null) . (isset($context["email_change"]) ? $context["email_change"] : null)), "html", null, true);
        echo "
\t\t\t\t\t<form action=\"";
        // line 99
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/email")), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t";
        // line 100
        $context["button_name"] = "Change Email";
        // line 101
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 101)->display($context);
        // line 102
        echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t<td>Created:</td>
\t\t\t\t<td>";
        // line 107
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["account_created"]) ? $context["account_created"] : null), "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t<td>Last Login:</td>
\t\t\t\t<td>";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t";
        // line 114
        echo "\t\t\t<tr style=\"background-color: ";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array());
        echo ";\" >
\t\t\t\t<td>Account Status:</td>
\t\t\t\t<td>";
        // line 116
        echo (isset($context["account_status"]) ? $context["account_status"] : null);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 118
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array());
        echo ";\" >
\t\t\t\t<td>Registered:</td>
\t\t\t\t<td>";
        // line 120
        echo (isset($context["account_registered"]) ? $context["account_registered"] : null);
        echo "</td>
\t\t\t</tr>
\t\t\t";
        // line 123
        echo "\t\t</table>
\t\t<br/>
\t\t<a name=\"Public+Information\"></a>
\t\t<h2>Public Information</h2>
\t\t<table width=\"100%\">
\t\t\t<tr style=\"background-color: ";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 80px;\">Real name:</td>
\t\t\t\t<td>";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["account_rlname"]) ? $context["account_rlname"] : null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 80px;\">Location:</td>
\t\t\t\t<td >";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["account_location"]) ? $context["account_location"] : null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</table>
\t\t<form action=\"";
        // line 137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/info")), "html", null, true);
        echo "\" method=\"post\">
\t\t\t";
        // line 138
        $context["button_name"] = "Change Info";
        // line 139
        echo "\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 139)->display($context);
        // line 140
        echo "\t\t</form>
\t\t<br/>
\t\t<a name=\"Account+Logs\" ></a>
\t\t<h2>Action Log</h2>
\t\t<table>
\t\t\t<tr bgcolor=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\">
\t\t\t\t<th>Action</th><th>Date</th><th>IP</th>
\t\t\t</tr>
\t\t\t";
        // line 149
        echo "\t\t\t\t";
        $context["i"] = 0;
        // line 150
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 151
            echo "\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 152
            echo "\t\t\t\t\t<tr style=\"background-color: ";
            echo call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null)));
            echo "\">
\t\t\t\t\t\t<td>";
            // line 153
            echo $this->getAttribute($context["action"], "action", array());
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 154
            echo twig_date_format_filter($this->env, $this->getAttribute($context["action"], "date", array()), "jS F Y H:i:s");
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 155
            echo $this->getAttribute($context["action"], "ip", array());
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t";
        // line 159
        echo "\t\t</table>
\t\t<br/>
\t\t<a name=\"Characters\" ></a>
\t\t<h2>Character list: ";
        // line 162
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)), "html", null, true);
        echo " characters.</h2>
\t\t<table>
\t\t\t<tr bgcolor=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\">
\t\t\t\t<th>Name</th><th>Level</th><th>Vocation</th><th>Town</th><th>Last login</th><th>Status</th><th>Hide</th><th>Edit</th>
\t\t\t</tr>
\t\t\t";
        // line 167
        $context["i"] = 0;
        // line 168
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 169
            echo "\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 170
            echo "\t\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\">
\t\t\t\t\t<td><a href=\"";
            // line 171
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array(("characters/" . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array($this->getAttribute($context["player"], "getName", array(), "method")))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", array(), "method"), "html", null, true);
            echo "</a></td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", array(), "method"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getVocationName", array(), "method"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "towns", array()), $this->getAttribute($context["player"], "getTownId", array(), "method"), array(), "array"), "html", null, true);
            echo "</td><td>";
            if (($this->getAttribute($context["player"], "getLastLogin", array(), "method") > 0)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["player"], "getLastLogin", array()), "d F Y (H:i)"), "html", null, true);
            } else {
                echo "Never.";
            }
            echo "</td><td>";
            if ($this->getAttribute($context["player"], "isOnline", array(), "method")) {
                echo "<font color=\"green\">ONLINE</font>";
            } else {
                echo "<font color=\"red\">Offline</font>";
            }
            echo "</td><td>";
            if ($this->getAttribute($context["player"], "isHidden", array(), "method")) {
                echo "Hidden";
            } else {
                echo "Visible";
            }
            echo "</td><td>[<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array(("account/character/comment/" . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), array($this->getAttribute($context["player"], "getName", array())))))), "html", null, true);
            echo "\" >Edit</a>]</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t</table>
\t\t<br/>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
        // line 179
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/create")), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t";
        // line 180
        $context["button_name"] = "Create Character";
        // line 181
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 181)->display($context);
        // line 182
        echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t";
        // line 184
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_change_character_name", array())) {
            // line 185
            echo "\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
            // line 186
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/name")), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t";
            // line 187
            $context["button_name"] = "Change Name";
            // line 188
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 188)->display($context);
            // line 189
            echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_change_character_sex", array())) {
            // line 193
            echo "\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
            // line 194
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/sex")), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t";
            // line 195
            $context["button_name"] = "Change Sex";
            // line 196
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 196)->display($context);
            // line 197
            echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t";
        }
        // line 200
        echo "\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
        // line 201
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/character/delete")), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t";
        // line 202
        $context["button_name"] = "Delete Character";
        // line 203
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 203)->display($context);
        // line 204
        echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "account.management.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 204,  508 => 203,  506 => 202,  502 => 201,  499 => 200,  494 => 197,  491 => 196,  489 => 195,  485 => 194,  482 => 193,  479 => 192,  474 => 189,  471 => 188,  469 => 187,  465 => 186,  462 => 185,  460 => 184,  456 => 182,  453 => 181,  451 => 180,  447 => 179,  440 => 174,  403 => 171,  398 => 170,  395 => 169,  390 => 168,  388 => 167,  382 => 164,  377 => 162,  372 => 159,  370 => 158,  361 => 155,  357 => 154,  353 => 153,  348 => 152,  345 => 151,  340 => 150,  337 => 149,  331 => 145,  324 => 140,  321 => 139,  319 => 138,  315 => 137,  309 => 134,  304 => 132,  299 => 130,  294 => 128,  287 => 123,  282 => 120,  277 => 118,  272 => 116,  266 => 114,  261 => 111,  256 => 109,  251 => 107,  246 => 105,  241 => 102,  238 => 101,  236 => 100,  232 => 99,  228 => 98,  223 => 96,  218 => 94,  210 => 93,  206 => 92,  201 => 89,  195 => 85,  192 => 84,  190 => 83,  186 => 82,  179 => 80,  176 => 79,  174 => 78,  171 => 77,  165 => 73,  162 => 72,  160 => 71,  156 => 70,  152 => 68,  149 => 67,  145 => 64,  142 => 63,  136 => 61,  132 => 59,  129 => 58,  126 => 57,  122 => 55,  120 => 54,  116 => 53,  107 => 48,  101 => 46,  98 => 45,  92 => 43,  89 => 42,  78 => 40,  73 => 39,  67 => 37,  65 => 36,  61 => 35,  56 => 32,  54 => 28,  48 => 25,  37 => 17,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.management.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\account.management.html.twig");
    }
}
