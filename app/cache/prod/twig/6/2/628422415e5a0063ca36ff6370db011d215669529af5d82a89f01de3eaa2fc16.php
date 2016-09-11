<?php

/* TopxiaWebBundle::powered-by.html.twig */
class __TwigTemplate_628422415e5a0063ca36ff6370db011d215669529af5d82a89f01de3eaa2fc16 extends Twig_Template
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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (((($this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned") && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), 0) != 2)) && $this->env->getExtension('topxia_web_twig')->getSetting("copyright.licenseDomains")) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), twig_split_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("copyright.licenseDomains"), ";")))) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.name")) {
                // line 3
                echo "    Powered by <a href=\"";
                echo $this->env->getExtension('routing')->getPath("homepage");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("copyright.name"), "html", null, true);
                echo "</a>
  ";
            }
        } else {
            // line 6
            echo "  Powered by <a href=\"http://www.edusoho.com/\" target=\"_blank\">EduSoho v";
            echo twig_escape_filter($this->env, twig_constant("\\Topxia\\System::VERSION"), "html", null, true);
            echo "</a>
  ©2014-";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, null, "Y"), "html", null, true);
            echo " ";
            if (( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), 0) == 2)) {
                echo "<a class=\"mlm\" href=\"http://www.howzhi.com/\" target=\"_blank\">好知网</a>";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::powered-by.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 6,  25 => 3,  22 => 2,  19 => 1,);
    }
}
