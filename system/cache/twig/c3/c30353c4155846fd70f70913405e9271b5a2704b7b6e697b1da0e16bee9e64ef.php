<?php

/* admin.mailer.html.twig */
class __TwigTemplate_27d1349fa429232a53421f37ed64133c00aa458d668075502f83c7ae888e4e7d extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/tinymce/tinymce.min.js\"></script>
<script type=\"text/javascript\">
\ttinymce.init({
\t\tselector : \"textarea\",
\t\ttheme : \"modern\",
        plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern help code emoticons',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | emoticons link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
\t\timage_advtab: true,
\t\trelative_urls : false,
\t\tremove_script_host : false,
\t\tdocument_base_url : \"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "\"
\t});
</script>
<table width=\"800\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\" align=\"center\">
\t<form method=\"post\">
\t\t<tr>
\t\t\t<td colspan=\"2\" align=\"center\">
\t\t\t\t<p class=\"note note-image\" style=\"width: 80%;\">Sending mails may take some time if there are much users in db.</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td align=\"right\">
\t\t\t\t<label for=\"mail_subject\">Subject:</label>
\t\t\t</td>
\t\t\t<td align=\"left\">
\t\t\t\t<input type=\"text\" id=\"mail_subject\" name=\"mail_subject\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["mail_subject"]) ? $context["mail_subject"] : null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"30\" />
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">
\t\t\t\t<textarea id=\"mail_content\" name=\"mail_content\" style=\"width: 100%\" class=\"tinymce\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["mail_content"]) ? $context["mail_content"] : null), "html", null, true);
        echo "</textarea>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\" align=\"center\">
\t\t\t\t<input type=\"checkbox\" name=\"preview\" id=\"preview\" value=\"1\"/><label for=\"preview\">Just send test email to me (preview)</label>";
        // line 36
        if ((isset($context["preview_done"]) ? $context["preview_done"] : null)) {
            echo " - <b>Done.</b>";
        }
        echo "<br/><input type=\"submit\" name=\"submit\" value=\"Send\" />
\t\t\t</td>
\t\t</tr>
\t</form>
</table>";
    }

    public function getTemplateName()
    {
        return "admin.mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 36,  59 => 31,  51 => 26,  33 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.mailer.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\admin.mailer.html.twig");
    }
}
