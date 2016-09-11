<?php

/* TopxiaWebBundle:Default:header.html.twig */
class __TwigTemplate_8a548e468d08e892c3ffda7a664586d9987244f33db8ffa223323fed389a644e extends Twig_Template
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
        echo "<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>
        <ul class=\"nav navbar-nav\">
          ";
        // line 16
        $context["navigations"] = $this->env->getExtension('topxia_data_twig')->getData("NavigationsTree", array());
        // line 17
        echo "          ";
        if (isset($context["navigations"])) { $_navigations_ = $context["navigations"]; } else { $_navigations_ = null; }
        if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 17)->display(array_merge($context, array("navigations" => $_navigations_, "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter($_siteNav_, null)) : (null)), "isMobile" => true)));
        // line 18
        echo "        </ul>
      </div>
    </div>
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
      ";
        // line 22
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 23
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), "html", null, true);
            echo "\">
      ";
        } else {
            // line 25
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "
      ";
        }
        // line 27
        echo "    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 31
        if (isset($context["navigations"])) { $_navigations_ = $context["navigations"]; } else { $_navigations_ = null; }
        if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 31)->display(array_merge($context, array("navigations" => $_navigations_, "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter($_siteNav_, null)) : (null)), "isMobile" => false)));
        // line 32
        echo "    </ul>
    <div class=\"navbar-user ";
        // line 33
        if ($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
      <ul class=\"nav user-nav\">
        ";
        // line 35
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user", array())) {
            // line 36
            echo "        <li class=\"user-avatar-li nav-hover\">
          <a href=\"javascript:;\" class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"";
            // line 38
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute($_app_, "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li role=\"presentation\" class=\"dropdown-header\">";
            // line 41
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "nickname", array()), "html", null, true);
            echo "</li>
            <li><a href=\"";
            // line 42
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-person\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人主页"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"es-icon es-icon-setting\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人设置"), "html", null, true);
            echo "</a></li>
            <li class=\"hidden-lg\">
              <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">
                <i class=\"es-icon es-icon-eventnote\"></i>";
            // line 46
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute($_app_, "user", array()), "roles", array()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
            }
            // line 47
            echo "              </a>
            </li>
            <li><a href=\"";
            // line 49
            if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
                echo $this->env->getExtension('routing')->getPath("my_coin");
            } else {
                echo $this->env->getExtension('routing')->getPath("my_bill");
            }
            echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("账户中心"), "html", null, true);
            echo "</a></li>
            ";
            // line 50
            if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
                echo "<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理后台"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 52
            echo "
            <li class=\"hidden-lg\"><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\"><span class=\"pull-right num\">";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "newNotificationNum", array()) > 0)) {
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "newNotificationNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通知"), "html", null, true);
            echo "</a></li>
            <li class=\"hidden-lg\"><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\"><span class=\"pull-right num\">";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "newMessageNum", array()) > 0)) {
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-mail\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"es-icon es-icon-power\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出登录"), "html", null, true);
            echo "</a></li>
          </ul>
        </li>
        <li class=\"visible-lg\">
          <a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">
            ";
            // line 60
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute($_app_, "user", array()), "roles", array()))) {
                // line 61
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
                echo "
            ";
            } else {
                // line 63
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
                echo "
            ";
            }
            // line 65
            echo "          </a>
        </li>
        <li class=\"visible-lg nav-hover\">

          ";
            // line 69
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && ($this->getAttribute($this->getAttribute($_app_, "user", array()), "newMessageNum", array()) > 0))) {
                // line 70
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } elseif (( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute($_app_, "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute($_app_, "user", array()), "newMessageNum", array()) > 0)))) {
                // line 72
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } else {
                // line 74
                echo "            <a><i class=\"es-icon es-icon-mail\"></i></a>
          ";
            }
            // line 76
            echo "
          <ul class=\"dropdown-menu\" role=\"menu\">
            ";
            // line 78
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 79
                echo "              <li>
                <a href=\"";
                // line 80
                echo $this->env->getExtension('routing')->getPath("notification");
                echo "\">
                  <span class=\"pull-right num\">";
                // line 81
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "newNotificationNum", array()) > 0)) {
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "newNotificationNum", array()), "html", null, true);
                }
                echo "</span>
                  <i class=\"es-icon es-icon-notificationson\"></i>";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通知"), "html", null, true);
                echo "
                </a>
              </li>
            ";
            }
            // line 86
            echo "            <li>
              <a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\">
                <span class=\"pull-right num\">";
            // line 88
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "newMessageNum", array()) > 0)) {
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span>
                <i class=\"es-icon es-icon-mail\"></i>";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "
              </a>
            </li>
          </ul>
        </li>
        ";
        } else {
            // line 95
            echo "        <li class=\"user-avatar-li nav-hover visible-xs\">
          <a href=\"javascript:;\" class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
            echo "\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
            // line 100
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 101
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
            echo "</a></li>
          </ul>
        </li>
        <li class=\"hidden-xs\"><a href=\"";
            // line 104
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</a></li>
        <li class=\"hidden-xs\"><a href=\"";
            // line 105
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 107
        echo "      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 110,  335 => 108,  332 => 107,  323 => 105,  315 => 104,  305 => 101,  297 => 100,  291 => 97,  287 => 95,  278 => 89,  270 => 88,  266 => 87,  263 => 86,  256 => 82,  248 => 81,  244 => 80,  241 => 79,  239 => 78,  235 => 76,  231 => 74,  227 => 72,  223 => 70,  220 => 69,  214 => 65,  208 => 63,  202 => 61,  199 => 60,  195 => 59,  186 => 55,  174 => 54,  162 => 53,  159 => 52,  150 => 50,  140 => 49,  136 => 47,  129 => 46,  125 => 45,  118 => 43,  111 => 42,  106 => 41,  99 => 38,  95 => 36,  92 => 35,  85 => 33,  82 => 32,  78 => 31,  72 => 27,  66 => 25,  60 => 23,  58 => 22,  54 => 21,  49 => 18,  44 => 17,  42 => 16,  34 => 11,  29 => 9,  19 => 1,);
    }
}
