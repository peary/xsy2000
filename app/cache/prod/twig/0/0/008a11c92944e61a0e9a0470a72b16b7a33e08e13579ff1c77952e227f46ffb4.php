<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_008a11c92944e61a0e9a0470a72b16b7a33e08e13579ff1c77952e227f46ffb4 extends Twig_Template
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
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 17
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 18
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <meta content=\"";
        // line 20
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\" />
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\" />
  ";
        // line 22
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 23
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 24
            echo "  <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
  <link rel=\"shortcut icon\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 27
        echo "
  ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
  <!--[if lt IE 9]>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 39
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 40
        echo "
</head>
<body ";
        // line 42
        if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter($_bodyClass_, "")) : (""))) {
            echo "class=\"";
            if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
            echo twig_escape_filter($this->env, $_bodyClass_, "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle::layout.html.twig", 88)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 89
        echo "
</body>
</html>";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
    }

    // line 17
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 18
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["currentTheme"] = $this->env->getExtension('topxia_theme_twig')->getCurrentTheme();
        // line 30
        echo "    ";
        if (isset($context["currentTheme"])) { $_currentTheme_ = $context["currentTheme"]; } else { $_currentTheme_ = null; }
        if (isset($context["isEditColor"])) { $_isEditColor_ = $context["isEditColor"]; } else { $_isEditColor_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TopxiaWebBundle::layout.html.twig", 30)->display(array_merge($context, array("config" => $_currentTheme_, "isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter($_isEditColor_, false)) : (false)))));
        // line 31
        echo "
  ";
    }

    // line 39
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "  <div class=\"es-wrap\">

    ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "
    ";
        // line 52
        $this->displayBlock('full_content', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('bottom', $context, $blocks);
        // line 67
        echo "  </div>

  ";
        // line 69
        $this->displayBlock('esBar', $context, $blocks);
        // line 74
        echo "
  ";
        // line 75
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 82
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
";
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        // line 48
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 48)->display($context);
        // line 49
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 49)->display($context);
        // line 50
        echo "    ";
    }

    // line 52
    public function block_full_content($context, array $blocks = array())
    {
        // line 53
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 54
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "      </div>

      ";
        // line 59
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 60
        echo "    ";
    }

    // line 53
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:footer.html.twig", "TopxiaWebBundle::layout.html.twig", 63)->display($context);
        // line 64
        echo "    ";
    }

    // line 66
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 69
    public function block_esBar($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
            // line 71
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:index.html.twig", "TopxiaWebBundle::layout.html.twig", 71)->display($context);
            // line 72
            echo "    ";
        }
        // line 73
        echo "  ";
    }

    // line 75
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        if (isset($context["consultDisplay"])) { $_consultDisplay_ = $context["consultDisplay"]; } else { $_consultDisplay_ = null; }
        if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter($_consultDisplay_, false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter($_siteNav_)) : ("")) == "/")))) {
            // line 77
            echo "      ";
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 78
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle::float-consult.html.twig", "TopxiaWebBundle::layout.html.twig", 78)->display($context);
                // line 79
                echo "      ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 81,  334 => 80,  331 => 79,  328 => 78,  325 => 77,  320 => 76,  317 => 75,  313 => 73,  310 => 72,  307 => 71,  304 => 70,  301 => 69,  296 => 66,  292 => 64,  289 => 63,  286 => 62,  281 => 59,  276 => 56,  271 => 53,  267 => 60,  265 => 59,  261 => 57,  259 => 56,  255 => 54,  252 => 53,  249 => 52,  245 => 50,  242 => 49,  239 => 48,  236 => 47,  228 => 83,  225 => 82,  223 => 75,  220 => 74,  218 => 69,  214 => 67,  212 => 66,  209 => 65,  207 => 62,  204 => 61,  202 => 52,  199 => 51,  197 => 47,  193 => 45,  190 => 44,  185 => 39,  180 => 31,  175 => 30,  172 => 29,  169 => 28,  163 => 18,  157 => 17,  146 => 14,  143 => 13,  137 => 89,  135 => 88,  132 => 87,  130 => 44,  119 => 42,  115 => 40,  113 => 39,  107 => 36,  103 => 35,  99 => 33,  97 => 28,  94 => 27,  89 => 25,  84 => 24,  82 => 23,  78 => 22,  74 => 21,  69 => 20,  65 => 19,  59 => 18,  53 => 17,  50 => 16,  48 => 13,  36 => 2,  34 => 1,);
    }
}
