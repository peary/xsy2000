<?php

/* TopxiaWebBundle:CourseOrder:buy-modal.html.twig */
class __TwigTemplate_10c6798475f5c1181a11e06bf27c84c3ae6400d7085ee494e3512bc825815b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseOrder:buy-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["billable"] = true;
        // line 4
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") == 1) && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin")) && ($this->getAttribute($_course_, "price", array()) == 0)) || (( !$this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") || ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "RMB")) && ($this->getAttribute($_course_, "price", array()) == 0)))) {
            // line 8
            $context["billable"] = false;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if ($_billable_) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买课程"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
  ";
        // line 13
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($_billable_ && ($this->getAttribute($_course_, "type", array()) == "live"))) {
            // line 14
            echo "    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注意：请在30分钟内完成支付，否则订单将会过期失效"), "html", null, true);
            echo "</div>
  ";
        }
        // line 16
        echo "  <form id=\"course-buy-form\" class=\"form-horizontal\" method=\"post\"
  action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("course_buy_modify_user_info");
        echo "\"
  >
    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程名称"), "html", null, true);
        echo "</div>
      <div class=\"col-sm-9 controls\">
      \t<span class=\"control-text text-muted\">《";
        // line 22
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
        echo "》</span>
        <input type=\"hidden\" name=\"lessonId\" value=\"";
        // line 23
        if (isset($context["lessonId"])) { $_lessonId_ = $context["lessonId"]; } else { $_lessonId_ = null; }
        echo twig_escape_filter($this->env, $_lessonId_, "html", null, true);
        echo "\">
      </div>
    </div>

    ";
        // line 27
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if ($_billable_) {
            // line 28
            echo "    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
            echo "</div>
      <div class=\"col-sm-9 controls money-text\">
      \t<span class=\"control-text\">
          ";
            // line 32
            if (isset($context["vipStatus"])) { $_vipStatus_ = $context["vipStatus"]; } else { $_vipStatus_ = null; }
            if (($_vipStatus_ == "ok")) {
                // line 33
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员免费"), "html", null, true);
                echo "
          ";
            } else {
                // line 35
                echo "            ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 36
                    echo "            <strong class=\"money\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, ($this->getAttribute($_course_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo "</strong>
            <span class=\"text-muted\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 39
                    echo "            <strong class=\"money\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
                    echo "</strong>
        \t\t<span class=\"text-muted\">";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 42
                echo "          ";
            }
            // line 43
            echo "      \t</span>
      </div>
    </div>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if ($_billable_) {
            // line 49
            echo "      ";
            if (isset($context["payments"])) { $_payments_ = $context["payments"]; } else { $_payments_ = null; }
            if ( !$_payments_) {
                // line 50
                echo "        <div class=\"alert alert-info\">";
                echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("payment.disabled_message"), $this->env->getExtension('translator')->trans("尚未开启支付模块，无法购买课程。"));
                echo "</div>
      ";
            }
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "      ";
            if (isset($context["avatarAlert"])) { $_avatarAlert_ = $context["avatarAlert"]; } else { $_avatarAlert_ = null; }
            if ($_avatarAlert_) {
                // line 54
                echo "        ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["goto"] = $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array())));
                // line 55
                echo "        <div class=\"alert alert-warning\">您还没有头像，设置以后才能加入学习<br />拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href=\"";
                if (isset($context["goto"])) { $_goto_ = $context["goto"]; } else { $_goto_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_avatar", array("goto" => $_goto_)), "html", null, true);
                echo "\" class=\"alert-link\">点击设置</a></div>
      ";
            } else {
                // line 57
                echo "        <div class=\"alert alert-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课程为免费课程，无需购买，可直接加入学习。"), "html", null, true);
                echo "</div>
      ";
            }
            // line 59
            echo "    ";
        }
        // line 60
        echo "    <input type=\"hidden\" name=\"targetId\" value=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"payment\" value=\"alipay\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    ";
        // line 64
        $context["userinfo_enable"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false);
        // line 65
        echo "    ";
        $context["checkedFields"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.userinfoFields"), array());
        // line 66
        echo "    ";
        if (isset($context["userinfo_enable"])) { $_userinfo_enable_ = $context["userinfo_enable"]; } else { $_userinfo_enable_ = null; }
        if (isset($context["checkedFields"])) { $_checkedFields_ = $context["checkedFields"]; } else { $_checkedFields_ = null; }
        if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $this->loadTemplate("TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig", "TopxiaWebBundle:CourseOrder:buy-modal.html.twig", 66)->display(array_merge($context, array("isBuyFillUserinfo" => $_userinfo_enable_, "userinfoFieldsSetting" => $_checkedFields_, "userFields" => $_userFields_, "user" => $_user_, "showNavTip" => 1)));
        // line 67
        echo "
  </form>
";
    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        // line 72
        echo "  ";
        $context["priceType"] = $this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type");
        // line 73
        echo "  ";
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if (isset($context["priceType"])) { $_priceType_ = $context["priceType"]; } else { $_priceType_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($_billable_ && (((((array_key_exists("priceType", $context)) ? (_twig_default_filter($_priceType_, "RMB")) : ("RMB")) == "RMB") && ($this->getAttribute($_course_, "price", array()) > 0)) || ((((array_key_exists("priceType", $context)) ? (_twig_default_filter($_priceType_, "RMB")) : ("RMB")) == "Coin") && ($this->getAttribute($_course_, "price", array()) > 0))))) {
            // line 74
            echo "    ";
            if (isset($context["payments"])) { $_payments_ = $context["payments"]; } else { $_payments_ = null; }
            if (isset($context["vipStatus"])) { $_vipStatus_ = $context["vipStatus"]; } else { $_vipStatus_ = null; }
            if ($_payments_) {
                // line 75
                echo "      ";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ($_member_) {
                    // line 76
                    echo "        <span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览模式无法支付"), "html", null, true);
                    echo "</span>
        <button class=\"btn btn-primary\" disabled=\"disabled\">";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("去支付"), "html", null, true);
                    echo "</button>
      ";
                } else {
                    // line 79
                    echo "        ";
                    if (isset($context["vipStatus"])) { $_vipStatus_ = $context["vipStatus"]; } else { $_vipStatus_ = null; }
                    if (($_vipStatus_ == "ok")) {
                        // line 80
                        echo "           <button id=\"join-course-btn\" class=\"btn btn-primary\" data-loading-text=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                        echo "...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                        echo "</button>
        ";
                    } else {
                        // line 82
                        echo "        <button id=\"course-pay\" class=\"btn btn-primary\" type=\"submit\" data-loading-text=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在创建订单"), "html", null, true);
                        echo "...\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("去支付"), "html", null, true);
                        echo "</button>
        ";
                    }
                    // line 84
                    echo "      ";
                }
                // line 85
                echo "    ";
            } elseif (( !$_payments_ && ($_vipStatus_ == "ok"))) {
                // line 86
                echo "      <button id=\"join-course-btn\" class=\"btn btn-primary\"
        ";
                // line 87
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ((($this->getAttribute($_course_, "status", array()) != "published") || (($this->getAttribute($_course_, "type", array()) == "live") && ($this->getAttribute($_course_, "studentNum", array()) >= $this->getAttribute($_course_, "maxStudentNum", array()))))) {
                    // line 88
                    echo "        disabled=\"disabled\"
        ";
                }
                // line 90
                echo "        data-loading-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                echo "...\" data-submiting-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                echo "...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                echo "</button>
    ";
            }
            // line 92
            echo "  ";
        } else {
            // line 93
            echo "    ";
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if ($_member_) {
                // line 94
                echo "      <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览模式无法加入学习"), "html", null, true);
                echo "</span>
      <button class=\"btn btn-primary\" disabled=\"disabled\">";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                echo "</button>
    ";
            } else {
                // line 97
                echo "      ";
                if (isset($context["avatarAlert"])) { $_avatarAlert_ = $context["avatarAlert"]; } else { $_avatarAlert_ = null; }
                if ( !$_avatarAlert_) {
                    // line 98
                    echo "        <button id=\"join-course-btn\" class=\"btn btn-primary\"
        ";
                    // line 99
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if ((($this->getAttribute($_course_, "status", array()) != "published") || (($this->getAttribute($_course_, "type", array()) == "live") && ($this->getAttribute($_course_, "studentNum", array()) >= $this->getAttribute($_course_, "maxStudentNum", array()))))) {
                        // line 100
                        echo "        disabled=\"disabled\"
        ";
                    }
                    // line 102
                    echo "        data-loading-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                    echo "...\" data-submiting-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                    echo "...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                    echo "</button>
      ";
                }
                // line 104
                echo "    ";
            }
            // line 105
            echo "
  ";
        }
        // line 107
        echo "
  <script>
    app.load('course/buy-modal');
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseOrder:buy-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 107,  342 => 105,  339 => 104,  329 => 102,  325 => 100,  322 => 99,  319 => 98,  315 => 97,  310 => 95,  305 => 94,  301 => 93,  298 => 92,  288 => 90,  284 => 88,  281 => 87,  278 => 86,  275 => 85,  272 => 84,  264 => 82,  256 => 80,  252 => 79,  247 => 77,  242 => 76,  238 => 75,  233 => 74,  227 => 73,  224 => 72,  221 => 71,  215 => 67,  208 => 66,  205 => 65,  203 => 64,  198 => 62,  191 => 60,  188 => 59,  182 => 57,  175 => 55,  171 => 54,  167 => 53,  164 => 52,  158 => 50,  154 => 49,  151 => 48,  148 => 47,  142 => 43,  139 => 42,  134 => 40,  128 => 39,  123 => 37,  117 => 36,  114 => 35,  108 => 33,  105 => 32,  99 => 29,  96 => 28,  93 => 27,  85 => 23,  80 => 22,  75 => 20,  69 => 17,  66 => 16,  60 => 14,  56 => 13,  53 => 12,  50 => 11,  39 => 10,  35 => 1,  32 => 8,  29 => 4,  27 => 3,  11 => 1,);
    }
}
