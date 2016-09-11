<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_36819544dd101e304f35dda134a8afc1ac47239f4c84c97f3209ea912a4a2af3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
<!DOCTYPE html>
";
        // line 6
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter($_menu_, null)) : (null));
        // line 7
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        $context["menu_breadcrumb"] = $this->env->getExtension('topxia_menu_twig')->getMenuBreadcrumb("admin", $_menu_);
        // line 8
        if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
        $context["menu_current"] = twig_last($this->env, $_menu_breadcrumb_);
        // line 9
        if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
        $context["menu_nav"] = (($this->getAttribute($_menu_breadcrumb_, 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_breadcrumb_, 0, array(), "array"), null)) : (null));
        // line 10
        if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
        $context["menu_sidebar"] = (($this->getAttribute($_menu_breadcrumb_, 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_breadcrumb_, 1, array(), "array"), null)) : (null));
        // line 11
        if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
        $context["menu_main"] = (($this->getAttribute($_menu_breadcrumb_, 2, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_breadcrumb_, 2, array(), "array"), null)) : (null));
        // line 12
        $context["menu_hiddens"] = $this->env->getExtension('topxia_web_twig')->getSetting("menu_hiddens", array());
        // line 13
        echo "<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>
    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 33
        echo "    ";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 34
        echo "  </title>

  ";
        // line 36
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 37
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 40
        echo "  
  ";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "
  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo "管理后台</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
           ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", "admin", 1));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 69
            echo "            ";
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            if (($this->getAttribute($_m_, "code", array()) == "admin_app")) {
                // line 70
                echo "               ";
                if ( !$this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 71
                    echo "                ";
                    $context["parameter"] = array("postStatus" => "all");
                    // line 72
                    echo "                ";
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    if (isset($context["parameter"])) { $_parameter_ = $context["parameter"]; } else { $_parameter_ = null; }
                    $context["m"] = $this->env->getExtension('topxia_web_twig')->arrayMerge($_m_, array("router_params" => $_parameter_, "router_name" => "admin_app_center"));
                    // line 73
                    echo "               ";
                }
                // line 74
                echo "            ";
            }
            // line 75
            echo "
            ";
            // line 76
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            if (($this->getAttribute($_m_, "code", array()) == "admin_system")) {
                // line 77
                echo "              ";
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 78
                    echo "              <li ";
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    if (isset($context["menu_nav"])) { $_menu_nav_ = $context["menu_nav"]; } else { $_menu_nav_ = null; }
                    if (($this->getAttribute($_m_, "code", array()) == (($this->getAttribute($_menu_nav_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_nav_, "code", array()), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
              ";
                    // line 79
                    if (isset($context["self_macro"])) { $_self_macro_ = $context["self_macro"]; } else { $_self_macro_ = null; }
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $_self_macro_->getmenu_link_html($context, $_m_);
                    echo "
              </li>
              ";
                }
                // line 82
                echo "            ";
            } else {
                echo "    
              ";
                // line 83
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if ( !(($this->getAttribute($_m_, "code", array()) == "admin_app") && (($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") == 1) || $this->env->getExtension('topxia_web_twig')->isWithoutNetwork()))) {
                    // line 84
                    echo "                <li ";
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    if (isset($context["menu_nav"])) { $_menu_nav_ = $context["menu_nav"]; } else { $_menu_nav_ = null; }
                    if (($this->getAttribute($_m_, "code", array()) == (($this->getAttribute($_menu_nav_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_nav_, "code", array()), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                  ";
                    // line 85
                    if (isset($context["self_macro"])) { $_self_macro_ = $context["self_macro"]; } else { $_self_macro_ = null; }
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $_self_macro_->getmenu_link_html($context, $_m_);
                    echo "
                </li>
              ";
                }
                // line 88
                echo "            ";
            }
            // line 89
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </ul>

        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> 常用</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 97
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>
          <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> 回首页</a></li>

          <li class=\"dropdown\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 103
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
                <ul class=\"dropdown-menu main-list\">
                  <li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 116
        $this->displayBlock('content', $context, $blocks);
        // line 198
        echo "    </div>
  </div>

  ";
        // line 201
        $this->displayBlock('footer', $context, $blocks);
        // line 204
        echo "
  ";
        // line 205
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 205)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 206
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  ";
        // line 207
        if (($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 208
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 209
            echo $this->env->getExtension('routing')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>产品<br/>反馈</span>
      </a>
    </div>
  ";
        }
        // line 215
        echo "</body>
</html>

";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $_menu_breadcrumb_));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 26
            echo "        ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
            if (($this->getAttribute($_loop_, "index", array()) == twig_length_filter($this->env, $_menu_breadcrumb_))) {
                // line 27
                echo "          ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_m_, "name", array()), "html", null, true);
                echo "
        ";
            } else {
                // line 29
                echo "          ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_m_, "name", array()), "html", null, true);
                echo " -
        ";
            }
            // line 31
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    ";
    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 42
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
        echo "
        <div class=\"col-md-2\">
          ";
        // line 119
        $this->displayBlock('sidebar', $context, $blocks);
        // line 138
        echo "        </div>

        <div class=\"col-md-10\">
        ";
        // line 141
        if (isset($context["menu_nav"])) { $_menu_nav_ = $context["menu_nav"]; } else { $_menu_nav_ = null; }
        if (($this->getAttribute($_menu_nav_, "code", array()) != "admin_app")) {
            // line 142
            echo "          <div class=\"page-header clearfix\">
            <h1 class=\"pull-left\">";
            // line 143
            $this->displayBlock('page_title', $context, $blocks);
            echo "</h1>
            <div class=\"pull-right\">

              ";
            // line 146
            $this->displayBlock('page_buttons', $context, $blocks);
            // line 153
            echo "
            </div>
          </div>
          ";
        }
        // line 157
        echo "
          ";
        // line 158
        if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
        $context["menu_breadcrumb_length"] = twig_length_filter($this->env, $_menu_breadcrumb_);
        // line 159
        echo "
          ";
        // line 160
        if (isset($context["menu_breadcrumb_length"])) { $_menu_breadcrumb_length_ = $context["menu_breadcrumb_length"]; } else { $_menu_breadcrumb_length_ = null; }
        if (($_menu_breadcrumb_length_ >= 3)) {
            // line 161
            echo "            ";
            if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
            $context["tabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute($_menu_breadcrumb_, 1, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_menu_breadcrumb_, 1, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 162
            echo "          ";
        }
        // line 163
        echo "
          ";
        // line 164
        if (isset($context["menu_breadcrumb_length"])) { $_menu_breadcrumb_length_ = $context["menu_breadcrumb_length"]; } else { $_menu_breadcrumb_length_ = null; }
        if (($_menu_breadcrumb_length_ >= 4)) {
            // line 165
            echo "            ";
            if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
            $context["subTabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute($_menu_breadcrumb_, 2, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_menu_breadcrumb_, 2, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 166
            echo "          ";
        }
        // line 167
        echo "
          ";
        // line 168
        $this->displayBlock('content_header', $context, $blocks);
        // line 169
        echo "          
          ";
        // line 170
        if (isset($context["tabMenus"])) { $_tabMenus_ = $context["tabMenus"]; } else { $_tabMenus_ = null; }
        if (isset($context["menu_current"])) { $_menu_current_ = $context["menu_current"]; } else { $_menu_current_ = null; }
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter($_tabMenus_, null)) : (null)) && ($this->getAttribute($_menu_current_, "group", array()) == 1))) {
            // line 171
            echo "            <ul class=\"nav nav-tabs mbm\">
              ";
            // line 172
            if (isset($context["tabMenus"])) { $_tabMenus_ = $context["tabMenus"]; } else { $_tabMenus_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tabMenus_);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 173
                echo "                <li ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (isset($context["menu_main"])) { $_menu_main_ = $context["menu_main"]; } else { $_menu_main_ = null; }
                if (($this->getAttribute($_m_, "code", array()) == (($this->getAttribute($_menu_main_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_main_, "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 174
                if (isset($context["menu_hiddens"])) { $_menu_hiddens_ = $context["menu_hiddens"]; } else { $_menu_hiddens_ = null; }
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if ( !(($this->getAttribute($_menu_hiddens_, $this->getAttribute($_m_, "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_hiddens_, $this->getAttribute($_m_, "code", array()), array(), "array"), false)) : (false))) {
                    // line 175
                    echo "                    ";
                    if (isset($context["self_macro"])) { $_self_macro_ = $context["self_macro"]; } else { $_self_macro_ = null; }
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $_self_macro_->getmenu_link_html($context, $_m_, (($this->getAttribute($_m_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_m_, "class", array()), "")) : ("")));
                    echo "
                  ";
                }
                // line 177
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "            </ul>
          ";
        }
        // line 181
        echo "
          ";
        // line 182
        if (isset($context["subTabMenus"])) { $_subTabMenus_ = $context["subTabMenus"]; } else { $_subTabMenus_ = null; }
        if (isset($context["menu_current"])) { $_menu_current_ = $context["menu_current"]; } else { $_menu_current_ = null; }
        if ((((array_key_exists("subTabMenus", $context)) ? (_twig_default_filter($_subTabMenus_, null)) : (null)) && ($this->getAttribute($_menu_current_, "group", array()) == 1))) {
            // line 183
            echo "            <ul class=\"nav nav-pills mbl small\">
              ";
            // line 184
            if (isset($context["subTabMenus"])) { $_subTabMenus_ = $context["subTabMenus"]; } else { $_subTabMenus_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_subTabMenus_);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 185
                echo "                <li ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (isset($context["menu_breadcrumb"])) { $_menu_breadcrumb_ = $context["menu_breadcrumb"]; } else { $_menu_breadcrumb_ = null; }
                if (($this->getAttribute($_m_, "code", array()) == (($this->getAttribute($this->getAttribute($_menu_breadcrumb_, 3, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_menu_breadcrumb_, 3, array(), "array", false, true), "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 186
                if (isset($context["menu_hiddens"])) { $_menu_hiddens_ = $context["menu_hiddens"]; } else { $_menu_hiddens_ = null; }
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if ( !(($this->getAttribute($_menu_hiddens_, $this->getAttribute($_m_, "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_hiddens_, $this->getAttribute($_m_, "code", array()), array(), "array"), false)) : (false))) {
                    // line 187
                    echo "                    ";
                    if (isset($context["self_macro"])) { $_self_macro_ = $context["self_macro"]; } else { $_self_macro_ = null; }
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $_self_macro_->getmenu_link_html($context, $_m_);
                    echo "
                  ";
                }
                // line 189
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "            </ul>
          ";
        }
        // line 193
        echo "
          ";
        // line 194
        $this->displayBlock('main', $context, $blocks);
        // line 195
        echo "        </div>

      ";
    }

    // line 119
    public function block_sidebar($context, array $blocks = array())
    {
        // line 120
        echo "            ";
        if (isset($context["menu_nav"])) { $_menu_nav_ = $context["menu_nav"]; } else { $_menu_nav_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($_menu_nav_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_nav_, "code", array()), null)) : (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["groupedMenus"]) {
            // line 121
            echo "
              <div class=\"list-group\">
                ";
            // line 123
            if (isset($context["groupedMenus"])) { $_groupedMenus_ = $context["groupedMenus"]; } else { $_groupedMenus_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_groupedMenus_);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 124
                echo "                ";
                $context["array"] = array("0" => "admin_my_cloud", "1" => "admin_cloud_video_setting", "2" => "admin_setting_cloud", "3" => "admin_edu_cloud_sms", "4" => "admin_edu_cloud_search", "5" => "admin_edu_cloud_attachment");
                // line 125
                echo "                 ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (isset($context["array"])) { $_array_ = $context["array"]; } else { $_array_ = null; }
                if ((!twig_in_filter($this->getAttribute($_m_, "code", array()), $_array_) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
                    // line 126
                    echo "                            
                  ";
                    // line 127
                    if (isset($context["menu_hiddens"])) { $_menu_hiddens_ = $context["menu_hiddens"]; } else { $_menu_hiddens_ = null; }
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    if ( !(($this->getAttribute($_menu_hiddens_, $this->getAttribute($_m_, "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_hiddens_, $this->getAttribute($_m_, "code", array()), array(), "array"), false)) : (false))) {
                        // line 128
                        echo "                    ";
                        if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                        if (isset($context["menu_sidebar"])) { $_menu_sidebar_ = $context["menu_sidebar"]; } else { $_menu_sidebar_ = null; }
                        $context["menuClass"] = ((($this->getAttribute($_m_, "code", array()) == (($this->getAttribute($_menu_sidebar_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_sidebar_, "code", array()), null)) : (null)))) ? ("list-group-item active") : ("list-group-item"));
                        // line 129
                        echo "                    ";
                        if (isset($context["self_macro"])) { $_self_macro_ = $context["self_macro"]; } else { $_self_macro_ = null; }
                        if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                        if (isset($context["menuClass"])) { $_menuClass_ = $context["menuClass"]; } else { $_menuClass_ = null; }
                        echo $_self_macro_->getmenu_link_html($context, $_m_, $_menuClass_);
                        echo "
                  ";
                    }
                    // line 131
                    echo "                      
                  ";
                }
                // line 133
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupedMenus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "          ";
    }

    // line 143
    public function block_page_title($context, array $blocks = array())
    {
        if (isset($context["menu_current"])) { $_menu_current_ = $context["menu_current"]; } else { $_menu_current_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_menu_current_, "fullname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_current_, "fullname", array()), $this->getAttribute($_menu_current_, "name", array()))) : ($this->getAttribute($_menu_current_, "name", array()))), "html", null, true);
    }

    // line 146
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 147
        echo "                ";
        if (isset($context["menu_current"])) { $_menu_current_ = $context["menu_current"]; } else { $_menu_current_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", $this->getAttribute($_menu_current_, "code", array()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 148
            echo "                  ";
            if (isset($context["menu_hiddens"])) { $_menu_hiddens_ = $context["menu_hiddens"]; } else { $_menu_hiddens_ = null; }
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            if ( !(($this->getAttribute($_menu_hiddens_, $this->getAttribute($_m_, "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_hiddens_, $this->getAttribute($_m_, "code", array()), array(), "array"), false)) : (false))) {
                // line 149
                echo "                    ";
                if (isset($context["self_macro"])) { $_self_macro_ = $context["self_macro"]; } else { $_self_macro_ = null; }
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                echo $_self_macro_->getmenu_link_html($context, $_m_, "btn btn-success btn-sm");
                echo "
                  ";
            }
            // line 151
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "              ";
    }

    // line 168
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 194
    public function block_main($context, array $blocks = array())
    {
    }

    // line 201
    public function block_footer($context, array $blocks = array())
    {
        // line 202
        echo "    ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo " 
  ";
    }

    // line 218
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 219
            echo "  <a 
  ";
            // line 220
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            if ($_class_) {
                // line 221
                echo "    class=\"";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, $_class_, "html", null, true);
                echo "\"
  ";
            }
            // line 223
            echo "  ";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            if (((($this->getAttribute($_menu_, "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_, "mode", array()), null)) : (null)) == "modal")) {
                // line 224
                echo "    data-url=\"";
                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, $_menu_), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 228
                echo "    href=\"";
                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, $_menu_), "html", null, true);
                echo "\"
  ";
            }
            // line 230
            echo "  ";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            if ((($this->getAttribute($_menu_, "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_menu_, "blank", array()), false)) : (false))) {
                // line 231
                echo "    target=\"blank\"
  ";
            }
            // line 233
            echo "  >";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "name", array()), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 233,  753 => 231,  749 => 230,  742 => 228,  733 => 224,  729 => 223,  722 => 221,  719 => 220,  716 => 219,  702 => 218,  695 => 202,  692 => 201,  687 => 194,  682 => 168,  678 => 152,  672 => 151,  664 => 149,  659 => 148,  653 => 147,  650 => 146,  643 => 143,  639 => 137,  632 => 135,  625 => 133,  621 => 131,  612 => 129,  607 => 128,  603 => 127,  600 => 126,  595 => 125,  592 => 124,  587 => 123,  583 => 121,  577 => 120,  574 => 119,  568 => 195,  566 => 194,  563 => 193,  559 => 191,  552 => 189,  544 => 187,  540 => 186,  531 => 185,  526 => 184,  523 => 183,  519 => 182,  516 => 181,  512 => 179,  505 => 177,  497 => 175,  493 => 174,  484 => 173,  479 => 172,  476 => 171,  472 => 170,  469 => 169,  467 => 168,  464 => 167,  461 => 166,  457 => 165,  454 => 164,  451 => 163,  448 => 162,  444 => 161,  441 => 160,  438 => 159,  435 => 158,  432 => 157,  426 => 153,  424 => 146,  418 => 143,  415 => 142,  412 => 141,  407 => 138,  405 => 119,  401 => 117,  398 => 116,  393 => 49,  387 => 46,  383 => 45,  379 => 44,  375 => 43,  370 => 42,  367 => 41,  363 => 32,  349 => 31,  342 => 29,  335 => 27,  330 => 26,  311 => 25,  308 => 24,  301 => 215,  292 => 209,  289 => 208,  287 => 207,  284 => 206,  282 => 205,  279 => 204,  277 => 201,  272 => 198,  270 => 116,  256 => 105,  250 => 103,  244 => 100,  238 => 97,  232 => 94,  227 => 91,  220 => 89,  217 => 88,  209 => 85,  200 => 84,  197 => 83,  192 => 82,  184 => 79,  175 => 78,  172 => 77,  169 => 76,  166 => 75,  163 => 74,  160 => 73,  155 => 72,  152 => 71,  149 => 70,  145 => 69,  141 => 68,  130 => 64,  115 => 52,  111 => 51,  108 => 50,  106 => 49,  103 => 48,  101 => 41,  98 => 40,  93 => 38,  88 => 37,  86 => 36,  82 => 34,  77 => 33,  75 => 24,  70 => 22,  59 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }
}
