<?php

/* admin.pages.form.html.twig */
class __TwigTemplate_7fc37c2c3f037983a7fb1849ca1a48e979a2104f7f25ee7d937015a619ea1793 extends Twig_Template
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
        echo "<form method=\"post\" action=\"?p=pages&action=";
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            echo "edit";
        } else {
            echo "add";
        }
        echo "\">
\t";
        // line 2
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            // line 3
            echo "\t<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" />
\t";
        }
        // line 5
        echo "\t<table class=\"table\" id=\"page-edit-table\" width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr>
\t\t\t<th><b>";
        // line 7
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            echo "Edit";
        } else {
            echo "Add";
        }
        echo " page</b></th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Link/name:</td>
\t\t\t\t\t\t<td><input name=\"name\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" size=\"29\" maxlength=\"29\"/></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Title:</td>
\t\t\t\t\t\t<td><input name=\"title\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\" size=\"29\" maxlength=\"29\"/></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>PHP:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"php\" name=\"php\" title=\"Check if page should be executed as PHP\" value=\"1\"";
        // line 23
        if ((isset($context["php"]) ? $context["php"] : null)) {
            echo " checked=\"true\"";
        }
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            echo " disabled";
        }
        echo "/>
\t\t\t\t\t\t\t";
        // line 24
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            // line 25
            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"php\" value=\"";
            if ((isset($context["php"]) ? $context["php"] : null)) {
                echo "1";
            } else {
                echo "0";
            }
            echo "\"/>
\t\t\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Content:</td>
\t\t\t\t\t\t<td id=\"body-parent\">
\t\t\t\t\t\t\t<textarea id=\"body\" name=\"body\" maxlength=\"65000\" cols=\"50\" rows=\"5\">";
        // line 32
        echo (isset($context["body"]) ? $context["body"] : null);
        echo "</textarea>
\t\t\t\t\t\t</td>
\t\t\t\t\t<tr/>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Access:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"access\">
\t\t\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["group"]) {
            // line 40
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getId", array(), "method"), "html", null, true);
            echo "\"";
            if (((isset($context["access"]) ? $context["access"] : null) == $this->getAttribute($context["group"], "getId", array(), "method"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td align=\"right\"><input type=\"submit\" class=\"button\" value=\"Save\"/></td>
\t\t\t\t\t\t<td align=\"left\">
\t\t\t\t\t\t\t<input type=\"button\" onclick=\"window.location = '";
        // line 48
        echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
        echo "?p=pages';\" class=\"button\" value=\"Cancel\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/tinymce/tinymce.min.js\"></script>
<script type=\"text/javascript\">
\t\$(function () {
\t\t\$('#php').on('change', function(e) {
\t\t\tif (this.checked) {
\t\t\t\ttinymce.remove('#body');


\t\t\t} else {
\t\t\t\tif(tinymce.editors.length > 0) {
\t\t\t\t\ttinymce.activeEditor.show();
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tinit_tinymce();
\t\t\t\t}
\t\t\t}
\t\t});

\t\t";
        // line 74
        if ( !(isset($context["php"]) ? $context["php"] : null)) {
            // line 75
            echo "\t\tinit_tinymce();
\t\t";
        }
        // line 77
        echo "
\t\tfunction init_tinymce() {
\t\t\ttinymce.init({
\t\t\t\tselector : \"#body\",
\t\t\t\ttheme : \"modern\",
\t\t\t\tplugins: 'code print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern help emoticons',
\t\t\t\ttoolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | emoticons link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
\t\t\t\timage_advtab: true,
\t\t\t\trelative_urls : false,
\t\t\t\tremove_script_host : false,
\t\t\t\tdocument_base_url : \"";
        // line 87
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "\"
\t\t\t});
\t\t}

\t\tfunction decodeHtml(html) {
\t\t\tvar txt = document.createElement(\"textarea\");
\t\t\ttxt.innerHTML = html;
\t\t\treturn txt.value;
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin.pages.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 87,  172 => 77,  168 => 75,  166 => 74,  145 => 56,  134 => 48,  126 => 42,  111 => 40,  107 => 39,  97 => 32,  90 => 27,  80 => 25,  78 => 24,  69 => 23,  61 => 18,  54 => 14,  40 => 7,  36 => 5,  30 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.pages.form.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\admin.pages.form.html.twig");
    }
}
