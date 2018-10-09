<?php

/* news.add.html.twig */
class __TwigTemplate_6abbe03e77726dd72b7ef88f24b0ea0cef3bae44d291536116728e5a304aed03 extends Twig_Template
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
        echo "<div id=\"news_preview\"></div>
";
        // line 2
        if (((isset($context["action"]) ? $context["action"] : null) != "edit")) {
            // line 3
            echo "<a id=\"news-button\" href=\"#\">Add news</a>
";
        }
        // line 5
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["news_link_form"]) ? $context["news_link_form"] : null), "html", null, true);
        echo "\" id=\"news-edit-form\">
\t";
        // line 6
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            // line 7
            echo "\t<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["news_id"]) ? $context["news_id"] : null), "html", null, true);
            echo "\" />
\t";
        }
        // line 9
        echo "\t<table id=\"news-edit\" width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr>
\t\t\t<td colspan=\"2\" bgcolor=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\"><b>";
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            echo "Edit";
        } else {
            echo "Add";
        }
        echo " news</b></td>
\t\t</tr>

\t\t";
        // line 14
        $context["rows"] = 1;
        // line 15
        echo "
\t\t";
        // line 16
        $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
        // line 17
        echo "\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
        echo "\">
\t\t\t<td><b>Title:</b></td>
\t\t\t<td><input name=\"title\" id=\"title\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\" size=\"50\" maxlength=\"100\"/></td>
\t\t</tr>

\t\t";
        // line 22
        $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
        // line 23
        echo "\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
        echo "\">
\t\t\t<!--td>Description:</td-->
\t\t\t<td colspan=\"2\"><textarea name=\"body\" id=\"body\" maxlength=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_constant("BODY_LIMIT"), "html", null, true);
        echo "\" class=\"tinymce\">";
        echo twig_escape_filter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true);
        echo "</textarea></td>
\t\t<tr/>

\t\t";
        // line 28
        $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
        // line 29
        echo "\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
        echo "\">
\t\t\t<td><b>Type:</b></td>
\t\t\t<td>
\t\t\t\t<select name=\"type\" id=\"select-type\">
\t\t\t\t\t<option value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_constant("NEWS"), "html", null, true);
        echo "\" ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == twig_constant("NEWS")))) {
            echo "selected=\"yes\"";
        }
        if ((((isset($context["action"]) ? $context["action"] : null) == "edit") && ((isset($context["type"]) ? $context["type"] : null) != twig_constant("NEWS")))) {
            echo " disabled";
        }
        echo ">News</option>
\t\t\t\t\t<option value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_constant("TICKER"), "html", null, true);
        echo "\" ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == twig_constant("TICKER")))) {
            echo "selected=\"yes\"";
        }
        if ((((isset($context["action"]) ? $context["action"] : null) == "edit") && ((isset($context["type"]) ? $context["type"] : null) != twig_constant("TICKER")))) {
            echo " disabled";
        }
        echo ">Ticket</option>
\t\t\t\t\t<option value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_constant("ARTICLE"), "html", null, true);
        echo "\" ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == twig_constant("ARTICLE")))) {
            echo "selected=\"yes\"";
        }
        if ((((isset($context["action"]) ? $context["action"] : null) == "edit") && ((isset($context["type"]) ? $context["type"] : null) != twig_constant("ARTICLE")))) {
            echo " disabled";
        }
        echo ">Article</option>
\t\t\t\t</select>
\t\t\t</td>
\t\t</tr>

\t\t";
        // line 40
        $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
        // line 41
        echo "\t\t<tr id=\"article-text\" bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
        echo "\"";
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) ? $context["type"] : null) != twig_constant("ARTICLE")))) {
            echo " style=\"display: none;\"";
        }
        echo ">
\t\t\t<td><b>Article short text:<br/>This will be displayed on news page.<br/>Rest will be available on \"read more\" page.</b></td>
\t\t\t<td>
\t\t\t\t<textarea name=\"article_text\" id=\"article_text\">";
        // line 44
        if ( !twig_test_empty((isset($context["article_text"]) ? $context["article_text"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["article_text"]) ? $context["article_text"] : null), "html", null, true);
        }
        echo "</textarea>
\t\t\t</td>
\t\t</tr>

\t\t";
        // line 48
        $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
        // line 49
        echo "\t\t<tr id=\"article-image\" bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
        echo "\"";
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) ? $context["type"] : null) != twig_constant("ARTICLE")))) {
            echo " style=\"display: none;\"";
        }
        echo ">
\t\t\t<td><b>Article image:</b></td>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"article_image\" id=\"article_image\" value=\"";
        // line 52
        if ( !twig_test_empty((isset($context["article_image"]) ? $context["article_image"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["article_image"]) ? $context["article_image"] : null), "html", null, true);
        } else {
            echo "images/news/announcement.jpg";
        }
        echo "\" />
\t\t\t</td>
\t\t</tr>

\t\t";
        // line 56
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            // line 57
            echo "\t\t\t";
            $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
            // line 58
            echo "\t\t\t";
            if (array_key_exists("player", $context)) {
                // line 59
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"180\"><b>Author:</b></td>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"original_id\" disabled=\"disabled\">
\t\t\t\t\t\t<option value=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "getId", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "getName", array(), "method"), "html", null, true);
                echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
            }
            // line 68
            echo "\t\t";
        }
        // line 69
        echo "
\t\t";
        // line 70
        $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
        // line 71
        echo "\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
        echo "\">
\t\t\t<td width=\"180\"><b>";
        // line 72
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            echo "Modified by";
        } else {
            echo "Author";
        }
        echo ":</b></td>
\t\t\t<td>
\t\t\t\t<select name=\"player_id\" id=\"player_id\">
\t\t\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["account_players"]) ? $context["account_players"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 76
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getId", array(), "method"), "html", null, true);
            echo "\"";
            if ((array_key_exists("player_id", $context) && ($this->getAttribute($context["player"], "getId", array(), "method") == (isset($context["player_id"]) ? $context["player_id"] : null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", array(), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t</select>
\t\t\t</td>
\t\t</tr>

\t\t";
        // line 82
        $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
        // line 83
        echo "\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
        echo "\">
\t\t\t<td><b>Category:</b></td>
\t\t\t<td>
\t\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["cat"]) {
            // line 87
            echo "\t\t\t\t<input type=\"radio\" name=\"category\" value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" ";
            if (((((isset($context["category"]) ? $context["category"] : null) == 0) && ($context["id"] == 1)) || ((isset($context["category"]) ? $context["category"] : null) == $context["id"]))) {
                echo "checked=\"yes\"";
            }
            echo "/> <img src=\"images/news/icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "icon_id", array()), "html", null, true);
            echo "_small.gif\" />
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t\t</td>
\t\t</tr>

\t\t";
        // line 92
        if (((isset($context["action"]) ? $context["action"] : null) == "")) {
            // line 93
            echo "\t\t\t";
            $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
            // line 94
            echo "\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
            echo "\">
\t\t\t<td><b>Create forum thread in section:</b></td>
\t\t\t<td>
\t\t\t\t<select name=\"forum_section\" id=\"forum_section\">
\t\t\t\t\t<option value=\"-1\">None</option>
\t\t\t\t\t\t";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forum_boards"]) ? $context["forum_boards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 100
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                echo "\" ";
                if ((array_key_exists("forum_section", $context) && ((isset($context["forum_section"]) ? $context["forum_section"] : null) == $this->getAttribute($context["section"], "id", array())))) {
                    echo "checked=\"yes\"";
                }
                echo "/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t\t</select>
\t\t\t</td>
\t\t</tr>
\t\t";
        } elseif ( !(null ===         // line 105
(isset($context["comments"]) ? $context["comments"] : null))) {
            // line 106
            echo "\t\t\t<input type=\"hidden\" name=\"forum_section\" id=\"forum_section\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true);
            echo "\" />
\t\t";
        }
        // line 108
        echo "
\t\t";
        // line 109
        $context["rows"] = ((isset($context["rows"]) ? $context["rows"] : null) + 1);
        // line 110
        echo "\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["rows"]) ? $context["rows"] : null))), "html", null, true);
        echo "\">
\t\t\t<td align=\"right\">
\t\t\t\t<a id=\"preview\" style=\"cursor: pointer;\">Preview</a>
\t\t\t\t<input type=\"submit\" value=\"Submit\"/>
\t\t\t</td>
\t\t\t<td align=\"left\">
\t\t\t\t<input id=\"cancel\" type=\"button\" value=\"Cancel\"/>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>

";
        // line 122
        if (((isset($context["action"]) ? $context["action"] : null) != "edit")) {
            // line 123
            echo "<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\"#news-edit\").hide();

\t\t\$(\"#news-button\").click(function() {
\t\t\t\$(\"#news-edit\").toggle();
\t\t\treturn false;
\t\t});

\t\t\$('#select-type').change(function() {
\t\t    var value = \$('#select-type').val();
\t\t\tif(value == ";
            // line 134
            echo twig_escape_filter($this->env, twig_constant("ARTICLE"), "html", null, true);
            echo ") {
                \$('#article-text').show();
\t\t\t    \$('#article-image').show();
\t\t\t}
\t\t\telse {
                \$('#article-text').hide();
\t\t\t    \$('#article-image').hide();
            }
\t\t});
\t});
</script>
";
        }
        // line 146
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/tinymce/tinymce.min.js\"></script>
<script type=\"text/javascript\">
\tvar unsaved = false;
\tvar lastContent = '';

\ttinymce.init({
\t\tselector : \"#body\",
\t\ttheme : \"modern\",
\t\tplugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern help code emoticons',
\t\ttoolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | emoticons link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
\t\timage_advtab: true,
\t\tsetup: function(ed){
\t\t\ted.on('NodeChange', function(e) {
\t\t\t\tif(ed.getContent() != lastContent) {
\t\t\t\t\tunsaved = true;
\t\t\t\t}
\t\t\t});
\t\t}
\t});

\t\$(document).ready(function() {
\t\t\$(\":input\").change(function(){ //trigers change in all input fields including text type
\t\t\tunsaved = true;
\t\t});
\t\t
\t\t\$(\"#cancel\").click(function( event ) {
\t\t\tunsaved = false;
\t\t\twindow.location = '";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["news_link"]) ? $context["news_link"] : null), "html", null, true);
        echo "';
\t\t});
\t\t
\t\t\$(\"#news-edit-form\").submit(function( event ) {
\t\t\tunsaved = false;
\t\t});

\t\tif(\$(\"#news.Box\").length > 0) {
\t\t\t\$('<div id=\"article_preview\"></div>').insertBefore(\"#news.Box\");
\t\t\t\$('<div id=\"ticker_preview\"></div>').insertBefore(\"#news.Box\");
\t\t}
\t\telse {
\t\t\t\$('<div id=\"article_preview\"></div>').insertBefore(\"#news-edit\");
\t\t\t\$('<div id=\"ticker_preview\"></div>').insertBefore(\"#news-edit\");
\t\t}

\t\t\$(\"#preview\").click(function(e) {
\t\t\tvar title = document.getElementById(\"title\").value;
\t\t\tvar body = tinyMCE.activeEditor.getContent();
\t\t\tvar player_id = document.getElementById(\"player_id\").value;
\t\t\tvar category = \$('input[name=category]:checked').val();
\t\t\tvar forum_section = document.getElementById(\"forum_section\").value;
\t\t\tvar type = document.getElementById(\"select-type\").value;
\t\t\t
\t\t\tvar params = { title: title, body: body, player_id: player_id, category: category, forum_section: forum_section, template_path: '";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "', type: type, uid: Math.random() }
\t\t\t
\t\t\tif(type == 3) {
\t\t\t\tparams.article_text = document.getElementById(\"article_text\").value;
\t\t\t\tparams.article_image = document.getElementById(\"article_image\").value;
\t\t\t}

\t\t\t\$.getJSON(\"tools/news_preview.php\", params, function(data){
\t\t\t\tif(data.hasOwnProperty('success')) {
\t\t\t\t\tif(type == 3) { // ARTICLE
\t\t\t\t\t\t\$('#news_preview').html('');
\t\t\t\t\t\t\$('#ticker_preview').html('');
\t\t\t\t\t\t\$('#article_preview').html(data.success);
\t\t\t\t\t}
\t\t\t\t\telse if(type == 2) { // TICKER
\t\t\t\t\t\t\$('#news_preview').html('');
\t\t\t\t\t\t\$('#ticker_preview').html(data.success);
\t\t\t\t\t\t\$('#article_preview').html('');
\t\t\t\t\t}
\t\t\t\t\telse { // NEWS
\t\t\t\t\t\t\$('#news_preview').html(data.success);
\t\t\t\t\t\t\$('#ticker_preview').html('');
\t\t\t\t\t\t\$('#article_preview').html('');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse if(data.hasOwnProperty('error')) {
\t\t\t\t\t\$('#news_preview').html(data.error);
\t\t\t\t}
\t\t\t});
\t\t});

\t\tlastContent = \$(\"#body\").val();
\t});
\t
\tfunction unloadPage(){ 
\t\tif(unsaved){
\t\t\treturn \"You have unsaved changes on this page. Do you want to leave this page and discard your changes or stay on this page?\";
\t\t}
\t}

\twindow.onbeforeunload = unloadPage;
</script>";
    }

    public function getTemplateName()
    {
        return "news.add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 197,  420 => 173,  389 => 146,  374 => 134,  361 => 123,  359 => 122,  343 => 110,  341 => 109,  338 => 108,  332 => 106,  330 => 105,  325 => 102,  310 => 100,  306 => 99,  297 => 94,  294 => 93,  292 => 92,  287 => 89,  272 => 87,  268 => 86,  261 => 83,  259 => 82,  253 => 78,  238 => 76,  234 => 75,  224 => 72,  219 => 71,  217 => 70,  214 => 69,  211 => 68,  201 => 63,  193 => 59,  190 => 58,  187 => 57,  185 => 56,  174 => 52,  163 => 49,  161 => 48,  152 => 44,  141 => 41,  139 => 40,  124 => 35,  113 => 34,  102 => 33,  94 => 29,  92 => 28,  84 => 25,  78 => 23,  76 => 22,  70 => 19,  64 => 17,  62 => 16,  59 => 15,  57 => 14,  45 => 11,  41 => 9,  35 => 7,  33 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "news.add.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\news.add.html.twig");
    }
}
