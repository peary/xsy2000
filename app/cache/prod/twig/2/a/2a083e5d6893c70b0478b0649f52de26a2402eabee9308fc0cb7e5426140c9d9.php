<?php

/* TopxiaWebBundle:Default:stylesheet.html.twig */
class __TwigTemplate_2a083e5d6893c70b0478b0649f52de26a2402eabee9308fc0cb7e5426140c9d9 extends Twig_Template
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
        if (isset($context["isEditColor"])) { $_isEditColor_ = $context["isEditColor"]; } else { $_isEditColor_ = null; }
        if (((array_key_exists("isEditColor", $context)) ? (_twig_default_filter($_isEditColor_, 0)) : (0))) {
            // line 2
            echo "\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context["maincolor"] = (($this->getAttribute($this->getAttribute($_config_, "config", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_config_, "config", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 3
            echo "\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute($_config_, "config", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_config_, "config", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        } else {
            // line 5
            echo "\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context["maincolor"] = (($this->getAttribute($this->getAttribute($_config_, "confirmConfig", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_config_, "confirmConfig", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 6
            echo "\t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute($_config_, "confirmConfig", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_config_, "confirmConfig", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        }
        // line 8
        echo "
";
        // line 9
        if (isset($context["maincolor"])) { $_maincolor_ = $context["maincolor"]; } else { $_maincolor_ = null; }
        if (($_maincolor_ == "default")) {
            // line 10
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/bootstrap/css/bootstrap.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        } else {
            // line 12
            echo "\t<link href=\"";
            if (isset($context["maincolor"])) { $_maincolor_ = $context["maincolor"]; } else { $_maincolor_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/bootstrap/css/bootstrap-" . $_maincolor_) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 14
        echo "
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />

";
        // line 19
        if (isset($context["maincolor"])) { $_maincolor_ = $context["maincolor"]; } else { $_maincolor_ = null; }
        if (($_maincolor_ == "default")) {
            // line 20
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        } else {
            // line 22
            echo "\t<link href=\"";
            if (isset($context["maincolor"])) { $_maincolor_ = $context["maincolor"]; } else { $_maincolor_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/css/main-" . $_maincolor_) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 24
        echo "
";
        // line 25
        if (isset($context["navigationcolor"])) { $_navigationcolor_ = $context["navigationcolor"]; } else { $_navigationcolor_ = null; }
        if (($_navigationcolor_ != "default")) {
            // line 26
            echo "\t<link href=\"";
            if (isset($context["navigationcolor"])) { $_navigationcolor_ = $context["navigationcolor"]; } else { $_navigationcolor_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/css/header-" . $_navigationcolor_) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 28
        echo "
";
        // line 29
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "request", array()), "getLocale", array(), "method") == "ug_CN")) {
            // line 30
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/rtl/css/rtl.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:stylesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  107 => 29,  104 => 28,  97 => 26,  94 => 25,  91 => 24,  84 => 22,  78 => 20,  75 => 19,  70 => 17,  66 => 16,  62 => 15,  59 => 14,  52 => 12,  46 => 10,  43 => 9,  40 => 8,  35 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
