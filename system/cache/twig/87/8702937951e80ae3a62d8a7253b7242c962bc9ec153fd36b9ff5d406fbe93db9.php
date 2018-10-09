<?php

/* rules.html.twig */
class __TwigTemplate_b0ec7cfc223701c9e290d0c00dcc029ddd40a1bed53999680fb7670deb08d31a extends Twig_Template
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
        if ((twig_constant("PAGE") == "rules")) {
            // line 2
            echo "<b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
            echo " Rules</b><br/>
<textarea rows=\"25\" wrap=\"physical\" cols=\"70\" readonly=\"true\">
";
        }
        // line 5
        echo "    1. Names
a) Names which contain insulting (e.g. \"Bastard\"), racist (e.g. \"Nigger\"), extremely right-wing (e.g. \"Hitler\"), sexist (e.g. \"Bitch\") or offensive (e.g. \"Copkiller\") language.
b) Names containing parts of sentences (e.g. \"Mike returns\"), nonsensical combinations of letters (e.g. \"Fgfshdsfg\") or invalid formattings (e.g. \"Thegreatknight\").
c) Names that obviously do not describe a person (e.g. \"Christmastree\", \"Matrix\"), names of real life celebrities (e.g. \"Britney Spears\"), names that refer to real countries (e.g. \"Swedish Druid\"), names which were created to fake other players' identities (e.g. \"Arieswer\" instead of \"Arieswar\") or official positions (e.g. \"System Admin\").

2. Cheating
a) Exploiting obvious errors of the game (\"bugs\"), for instance to duplicate items. If you find an error you must report it to CipSoft immediately.
b) Intentional abuse of weaknesses in the gameplay, for example arranging objects or players in a way that other players cannot move them.
c) Using tools to automatically perform or repeat certain actions without any interaction by the player (\"macros\").
d) Manipulating the client program or using additional software to play the game.
e) Trying to steal other players' account data (\"hacking\").
f) Playing on more than one account at the same time (\"multi-clienting\").
g) Offering account data to other players or accepting other players' account data (\"account-trading/sharing\").

3. Gamemasters
a) Threatening a gamemaster because of his or her actions or position as a gamemaster.
b) Pretending to be a gamemaster or to have influence on the decisions of a gamemaster.
c) Intentionally giving wrong or misleading information to a gamemaster concerning his or her investigations or making false reports about rule violations.

4. Player Killing
a) Excessive killing of characters who are not marked with a \"skull\" on worlds which are not PvP-enforced. Please note that killing marked characters is not a reason for a banishment.

A violation of the Tibia Rules may lead to temporary banishment of characters and accounts. In severe cases removal or modification of character skills, attributes and belongings, as well as the permanent removal of accounts without any compensation may be considered. The sanction is based on the seriousness of the rule violation and the previous record of the player. It is determined by the gamemaster imposing the banishment.

These rules may be changed at any time. All changes will be announced on the official website.
";
        // line 30
        if ((twig_constant("PAGE") == "rules")) {
            // line 31
            echo "\t</textarea>
";
        }
    }

    public function getTemplateName()
    {
        return "rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 31,  55 => 30,  28 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rules.html.twig", "C:\\inetpub\\wwwroot\\system\\templates\\rules.html.twig");
    }
}
