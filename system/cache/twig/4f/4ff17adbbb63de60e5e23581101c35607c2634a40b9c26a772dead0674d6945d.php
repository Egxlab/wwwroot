<?php

/* forum.fullscreen.html.twig */
class __TwigTemplate_c7474355c9faf5c9476485134906444361f98dfdee7f6a376e6b8dc9eba7d4fa extends Twig_Template
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
        echo "<div id=\"FullScreen\">
\t<img src=\"\" alt=\"\" />
</div>
<style>
\t#FullScreen {
\t\theight: 100%;
\t\tdisplay: none;
\t\tposition:fixed;
\t\ttop:0;
\t\tright:0;
\t\tbottom:0;
\t\tleft:0;
\t\tz-index: 100;
\t}
\t#FullScreen img {
\t\theight: 100%;
\t\tdisplay: block;
\t\tmargin: 0 auto;
\t\tcursor: pointer;
\t}
\t
\t.forum-image {
\t\tcursor: pointer;
\t}
</style>
<script type=\"text/javascript\">
\$(function() {
\t\$(\".forum-image\").click(function(event){\t\t
\t\tvar src = \$(this).attr('src'); //get the source attribute of the clicked image
\t\t\$('#FullScreen img').attr('src', src); //assign it to the tag for your fullscreen div
\t\t\$('#FullScreen').fadeIn();
\t});

\t\$(\"#FullScreen\").click(function(){
\t\t\$(this).fadeOut()
\t\t\$(\"#imgBig\").attr(\"src\", \"\");
\t\t\$(\"#overlay\").hide();
\t\t\$(\"#overlayContent\").hide();
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "forum.fullscreen.html.twig";
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
        return new Twig_Source("", "forum.fullscreen.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\forum.fullscreen.html.twig");
    }
}
