<?php

/* TopxiaWebBundle:User:card-show.html.twig */
class __TwigTemplate_e07380e3c558ae1b52ddc88ab4c5346c6ff573f461e2e5e6ec14fa78a48e4b0f extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:User:card-show.html.twig", 1);
        // line 2
        echo "
<div id=\"user-card-";
        // line 3
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
        echo "\" class=\"js-card-content\" data-user-id=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
        echo "\">
  <div class=\"card-header media-middle\">
    <div class=\"media\">
      <div class=\"media-left\">
        <div class=\"user-avatar\">
          ";
        // line 8
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $_web_macro_->getuser_avatar($_user_, "", "avatar-md", false);
        echo "
          ";
        // line 9
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($_user_, "roles", array()))) {
            // line 10
            echo "            <span class=\"icon-user-status\"><i class=\"es-icon es-icon-school\"></i></span
          >
          ";
        } elseif ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 13
            echo "            ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            $context["userVip"] = $this->env->getExtension('topxia_web_twig')->getUserVipLevel($this->getAttribute($_user_, "id", array()));
            // line 14
            echo "              ";
            if (isset($context["userVip"])) { $_userVip_ = $context["userVip"]; } else { $_userVip_ = null; }
            if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
            if (isset($context["nowTime"])) { $_nowTime_ = $context["nowTime"]; } else { $_nowTime_ = null; }
            if ((($_userVip_ && $_levels_) && (twig_date_format_filter($this->env, $this->getAttribute($_userVip_, "deadline", array()), "Y-m-d") > twig_date_format_filter($this->env, $_nowTime_, "Y-m-d")))) {
                // line 15
                echo "                <span class=\"icon-user-status\"><img src=\"";
                if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
                if (isset($context["userVip"])) { $_userVip_ = $context["userVip"]; } else { $_userVip_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_levels_, $this->getAttribute($_userVip_, "levelId", array()), array(), "array", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_levels_, $this->getAttribute($_userVip_, "levelId", array()), array(), "array", false, true), "icon", array()), $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))) : ($this->env->getExtension('assets')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))), "html", null, true);
                echo "\" alt=\"\"></span>
              ";
            }
            // line 17
            echo "            ";
        }
        // line 18
        echo "        </div>
      </div>
      <div class=\"media-body\">
        <div class=\"title\">
          ";
        // line 22
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $_web_macro_->getuser_link($_user_, "", false);
        echo "
        </div>
        <div class=\"content\">
          ";
        // line 25
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "title", array())) {
            // line 26
            echo "            ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 28
        echo "        </div>
      </div>
    </div>
    ";
        // line 31
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (( !$this->getAttribute($_app_, "user", array()) || ($this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()) != $this->getAttribute($_user_, "id", array())))) {
            // line 32
            echo "      <div class=\"metas\">
        <a class=\"btn btn-primary btn-xs follow-btn\" href=\"javascript:;\" data-url=\"";
            // line 33
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["isFollowed"])) { $_isFollowed_ = $context["isFollowed"]; } else { $_isFollowed_ = null; }
            if ($_isFollowed_) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($_app_, "user", array()) && $this->getAttribute($this->getAttribute($_app_, "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-xs unfollow-btn\" href=\"javascript:;\"  data-url=\"";
            // line 34
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["isFollowed"])) { $_isFollowed_ = $context["isFollowed"]; } else { $_isFollowed_ = null; }
            if ( !$_isFollowed_) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-xs direct-message-btn\" herf=\"javascript:;\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
            // line 35
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 38
        echo "  </div>
  <div class=\"card-body\">
    ";
        // line 40
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "signature", array())) {
            // line 41
            echo "      ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "signature", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 43
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有签名"), "html", null, true);
            echo "
    ";
        }
        // line 45
        echo "  </div>
  <div class=\"card-footer clearfix\">
    <span><a class=\"link-light\" href=\"";
        // line 47
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_learn", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "learningNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在学"), "html", null, true);
        echo "</a></span>
    <span><a class=\"link-light\" href=\"";
        // line 48
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_following", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "followingNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关注"), "html", null, true);
        echo "</a></span>
    <span><a class=\"link-light\" href=\"";
        // line 49
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follower", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "followerNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("粉丝"), "html", null, true);
        echo "</a></span>
  </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:card-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 49,  181 => 48,  171 => 47,  167 => 45,  161 => 43,  154 => 41,  151 => 40,  147 => 38,  138 => 35,  126 => 34,  107 => 33,  104 => 32,  100 => 31,  95 => 28,  88 => 26,  85 => 25,  77 => 22,  71 => 18,  68 => 17,  60 => 15,  54 => 14,  50 => 13,  45 => 10,  42 => 9,  36 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }
}
