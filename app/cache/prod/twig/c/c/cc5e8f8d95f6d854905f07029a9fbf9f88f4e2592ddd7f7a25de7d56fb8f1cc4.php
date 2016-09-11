<?php

/* TwigBundle:Exception:layout.html.twig */
class __TwigTemplate_cc5e8f8d95f6d854905f07029a9fbf9f88f4e2592ddd7f7a25de7d56fb8f1cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 13
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 14
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
  <meta content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  ";
        // line 16
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 17
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 18
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

</head>
<body ";
        // line 30
        if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter($_bodyClass_, "")) : (""))) {
            echo "class=\"";
            if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
            echo twig_escape_filter($this->env, $_bodyClass_, "html", null, true);
            echo "\"";
        }
        echo ">
  ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By EduSoho";
        }
    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 14
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TwigBundle:Exception:layout.html.twig", 22)->display($context);
        // line 23
        echo "  ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 31,  130 => 23,  127 => 22,  124 => 21,  118 => 14,  112 => 13,  101 => 10,  98 => 9,  93 => 32,  91 => 31,  81 => 30,  74 => 26,  70 => 25,  67 => 24,  65 => 21,  62 => 20,  56 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  35 => 12,  33 => 9,  24 => 1,);
    }
}
