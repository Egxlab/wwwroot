<?php

/* admin.notepad.html.twig */
class __TwigTemplate_18832c4f564fb0146a9a1e7dccb66371f2173fceb4fbbf5b977817d13c45069f extends Twig_Template
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
        echo "<table width=\"700\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\" align=\"center\">
\t<form method=\"post\">
\t\t<tr>
\t\t\t<td align=\"center\">
\t\t\t\t<p>This is your personal notepad. Be sure to save it each time you modify something.</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td align=\"center\">
\t\t\t\t<textarea style=\"text-align: left;\" name=\"content\" cols=\"50\" rows=\"15\" onchange=\"notepad_onchange(this);\">";
        // line 10
        if ( !(null === (isset($context["content"]) ? $context["content"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        }
        echo "</textarea>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td align=\"center\">
\t\t\t\t<input type=\"submit\" name=\"submit\" onclick=\"notepad_save(this);\" value=\"Save\" />
\t\t\t</td>
\t\t</tr>
\t</form>
</table>
";
        // line 21
        echo "
";
        // line 23
        echo "
<script type=\"text/javascript\">
    var original_value = document.getElementsByName(\"content\")[0].value;

    function confirm_exit(e) {
        var e = e || window.event;
        var message = 'Are you sure you want to quit? Remaining changes will be unsaved.';

        // for IE and Firefox prior to version 4
        if (e) {
            e.returnValue = message;
        }

        // for Safari
        return message;
    }

    function notepad_onchange(e) {
        if(original_value != e.value) {
            window.onbeforeunload = confirm_exit;
        }
        return true;
    }

    function notepad_save(e) {
        window.onbeforeunload = function(e) {};
        return true;
    }
</script>";
    }

    public function getTemplateName()
    {
        return "admin.notepad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 23,  45 => 21,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.notepad.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\admin.notepad.html.twig");
    }
}
