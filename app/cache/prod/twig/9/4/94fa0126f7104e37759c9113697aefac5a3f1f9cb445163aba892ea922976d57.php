<?php

/* TopxiaWebBundle::site-hint.html.twig */
class __TwigTemplate_94fa0126f7104e37759c9113697aefac5a3f1f9cb445163aba892ea922976d57 extends Twig_Template
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
        if (isset($context["hideSetupHint"])) { $_hideSetupHint_ = $context["hideSetupHint"]; } else { $_hideSetupHint_ = null; }
        if (((($this->getAttribute($_app_, "user", array()) && ($this->getAttribute($this->getAttribute($_app_, "user", array()), "setup", array()) == 0)) && ( !array_key_exists("hideSetupHint", $context) || ($_hideSetupHint_ != true))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "cookies", array()), "get", array(0 => "close_set_email_alert"), "method"))) {
            // line 2
            echo "\t";
            $this->loadTemplate("TopxiaWebBundle::email-setting.html.twig", "TopxiaWebBundle::site-hint.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $this->loadTemplate("TopxiaWebBundle:Announcement:announcement.html.twig", "TopxiaWebBundle::site-hint.html.twig", 4)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 2,  19 => 1,);
    }
}
