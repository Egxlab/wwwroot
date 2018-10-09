<?php

/* account.create.js.html.twig */
class __TwigTemplate_f5c7d50ba712fd33aa7edbb144be52cc38955220064e5d37bbb4de7085f30682 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\tvar eventId = 0;
\tvar lastSend = 0;

\t\$(function() {
\t\t\$('#createaccount').submit(function () {
\t\t\treturn validate_form(this);
\t\t});

\t\tupdateFlag();
\t\t\$('#account_country').change(function() {
\t\t\tupdateFlag();
\t\t});

\t\t\$('#account_input').blur(function() {
\t\t\tcheckAccount();
\t\t});
\t\t\$('#email').blur(function() {
\t\t\tcheckEmail();
\t\t});
\t\t\$('#password').blur(function() {
\t\t\tcheckPassword();
\t\t});
\t\t\$('#password2').blur(function() {
\t\t\tcheckPassword();
\t\t});
\t});

\tfunction updateFlag()
\t{
\t\tvar img = \$('#account_country_img');
\t\tvar country = \$('#account_country :selected').val();
\t\tif(country.length) {
\t\t\timg.attr('src', 'images/flags/' + country + '.gif');
\t\t\timg.show();
\t\t}
\t\telse {
\t\t\timg.hide();
\t\t}
\t}

\tfunction checkAccount()
\t{
\t\tif(eventId != 0)
\t\t{
\t\t\tclearInterval(eventId)
\t\t\teventId = 0;
\t\t}

\t\tif(document.getElementById(\"account_input\").value == \"\")
\t\t{
\t\t\t\$('#account_error').html('Please enter account ";
        // line 52
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo ".');
\t\t\t\$('#account_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#account_indicator').show();
\t\t\treturn;
\t\t}

\t\t//anti flood
\t\tvar date = new Date;
\t\tvar timeNow = parseInt(date.getTime());

\t\tif(lastSend != 0)
\t\t{
\t\t\tif(timeNow - lastSend < 1100)
\t\t\t{
\t\t\t\teventId = setInterval('checkAccount()', 1100)
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\tvar account = document.getElementById(\"account_input\").value;
\t\t\$.getJSON(\"tools/validate.php\", { account: account, uid: Math.random() },
\t\t\tfunction(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\t\$('#account_error').html ('');
\t\t\t\t\t\$('#account_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#account_error').html(data.error);
\t\t\t\t\t\$('#account_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('#account_indicator').show();
\t\t\t}
\t\t);

\t\tlastSend = timeNow;
\t}

\tfunction checkEmail()
\t{
\t\tif(eventId != 0)
\t\t{
\t\t\tclearInterval(eventId)
\t\t\teventId = 0;
\t\t}

\t\tif(document.getElementById(\"email\").value == \"\")
\t\t{
\t\t\t\$('#email_error').html('Please enter e-mail.');
\t\t\t\$('#email_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#email_indicator').show();
\t\t\treturn;
\t\t}

\t\t//anti flood
\t\tvar date = new Date;
\t\tvar timeNow = parseInt(date.getTime());

\t\tif(lastSend != 0)
\t\t{
\t\t\tif(timeNow - lastSend < 1100)
\t\t\t{
\t\t\t\teventId = setInterval('checkEmail()', 1100)
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\tvar email = document.getElementById(\"email\").value;
\t\t\$.getJSON(\"tools/validate.php\", { email: email, uid: Math.random() },
\t\t\tfunction(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\t\$('#email_error').html ('');
\t\t\t\t\t\$('#email_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#email_error').html(data.error);
\t\t\t\t\t\$('#email_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('#email_indicator').show();
\t\t\t}
\t\t);

\t\tlastSend = timeNow;
\t}

\tfunction checkPassword()
\t{
\t\tif(eventId != 0)
\t\t{
\t\t\tclearInterval(eventId)
\t\t\teventId = 0;
\t\t}

\t\tif(document.getElementById(\"password\").value == \"\")
\t\t{
\t\t\t\$('#password_error').html('Please enter the password for your new account.');
\t\t\t\$('#password_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#password_indicator').show();
\t\t\treturn;
\t\t}

\t\tif(document.getElementById(\"password2\").value == \"\")
\t\t{
\t\t\t\$('#password2_error').html('Please enter the password again!');
\t\t\t\$('#password2_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\$('#password2_indicator').show();
\t\t\treturn;
\t\t}

\t\t//anti flood
\t\tvar date = new Date;
\t\tvar timeNow = parseInt(date.getTime());

\t\tif(lastSend != 0)
\t\t{
\t\t\tif(timeNow - lastSend < 1100)
\t\t\t{
\t\t\t\teventId = setInterval('checkPassword()', 1100)
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\tvar password = document.getElementById(\"password\").value;
\t\tvar password2 = document.getElementById(\"password2\").value;
\t\t\$.getJSON(\"tools/validate.php\", { password: password, password2: password2, uid: Math.random() },
\t\t\tfunction(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\t\$('#password_error').html ('');
\t\t\t\t\t\$('#password2_error').html ('');
\t\t\t\t\t\$('#password_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t\t\$('#password2_indicator').attr('src', 'images/global/general/ok.gif');
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#password_error').html(data.error);
\t\t\t\t\t\$('#password2_error').html(data.error);
\t\t\t\t\t\$('#password_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t\t\$('#password2_indicator').attr('src', 'images/global/general/nok.gif');
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('#password_indicator').show();
\t\t\t\t\$('#password2_indicator').show();
\t\t\t}
\t\t);

\t\tlastSend = timeNow;
\t}

\tfunction validate_required(field,alerttxt)
\t{
\t\twith (field)
\t\t{
\t\t\tif (value==null || value==\"\" || value==\" \")
\t\t\t{
\t\t\t\talert(alerttxt);
\t\t\t\treturn false;
\t\t\t}
\t\t\telse
\t\t\t\treturn true
\t\t}
\t}

\tfunction validate_email(field,alerttxt)
\t{
\t\twith (field)
\t\t{
\t\t\tapos=value.indexOf(\"@\");
\t\t\tdotpos=value.lastIndexOf(\".\");
\t\t\tif (apos<1 || dotpos-apos<2)
\t\t\t{
\t\t\t\talert(alerttxt);
\t\t\t\treturn false;
\t\t\t}
\t\t\telse
\t\t\t\treturn true;
\t\t}
\t}

\tfunction validate_form(thisform)
\t{
\t\twith (thisform)
\t\t{
\t\t\tif (validate_required(account_input,\"Please enter name of new account!\")==false)
\t\t\t{account_input.focus();return false;}
\t\t\tif (validate_required(email,\"Please enter your e-mail!\")==false)
\t\t\t{email.focus();return false;}
\t\t\tif (validate_email(email,\"Invalid e-mail format!\")==false)
\t\t\t{email.focus();return false;}
\t\t";
        // line 240
        if ( !$this->getAttribute((isset($context["config"]) ? $context["config"] : null), "account_mail_verify", array())) {
            // line 241
            echo "\t\t\tif (validate_required(passor,\"Please enter password!\")==false)
\t\t\t{passor.focus();return false;}
\t\t\tif (validate_required(passor2,\"Please repeat password!\")==false)
\t\t\t{passor2.focus();return false;}
\t\t\tif (passor2.value!=passor.value)
\t\t\t{alert('Repeated password is not equal to password!');return false;}
\t\t";
        }
        // line 248
        echo "\t\t\tif(accept_rules.checked==false)
\t\t\t{alert('To create account you must accept server rules!');return false;}
\t\t}
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "account.create.js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 248,  269 => 241,  267 => 240,  72 => 52,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.create.js.html.twig", "C:\\inetpub\\wwwroot\\site\\system\\templates\\account.create.js.html.twig");
    }
}
