<?php

/* TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig */
class __TwigTemplate_722c99cd1e59fb48b6be06444bd104552a4bb757bcb38c2a8f825e071a583c5d extends Twig_Template
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
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["userVipStatus"])) { $_userVipStatus_ = $context["userVipStatus"]; } else { $_userVipStatus_ = null; }
        if ((((($this->getAttribute($_course_, "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "buyable", array()), true)) : (true)) == false) && ($_userVipStatus_ != "ok"))) {
            // line 2
            echo "  ";
            if (isset($context["courseVip"])) { $_courseVip_ = $context["courseVip"]; } else { $_courseVip_ = null; }
            if ($_courseVip_) {
                // line 3
                echo "    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员免费学"), "html", null, true);
                echo "<br/><br/>
  ";
            } else {
                // line 5
                echo "    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该课程为限制课程"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请联系客服"), "html", null, true);
                echo "
  ";
            }
        } else {
            // line 8
            echo "  <a class=\"btn btn-primary btn-lg\"
    ";
            // line 9
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["userVipStatus"])) { $_userVipStatus_ = $context["userVipStatus"]; } else { $_userVipStatus_ = null; }
            if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false) || (($this->getAttribute($_course_, "approval", array()) && $this->getAttribute($_app_, "user", array())) && ($this->getAttribute($this->getAttribute($_app_, "user", array()), "approvalStatus", array()) != "approved"))) || $this->env->getExtension('topxia_web_twig')->getSetting("user_partner.avatar_alert"))) {
                // line 10
                echo "      href=\"#modal\"
      data-toggle=\"modal\"
      data-url=\"";
                // line 12
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id", array()), "targetType" => "course")), "html", null, true);
                echo "\"
    ";
            } elseif (($_userVipStatus_ == "ok")) {
                // line 14
                echo "      id=\"vip-join-course\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_become_use_member", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"
    ";
            } else {
                // line 16
                echo "      href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute($_course_, "id", array()), "targetType" => "course")), "html", null, true);
                echo "\"
    ";
            }
            // line 18
            echo "    ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ((($this->getAttribute($_course_, "status", array()) != "published") || (($this->getAttribute($_course_, "maxStudentNum", array()) > 0) && ($this->getAttribute($_course_, "studentNum", array()) >= $this->getAttribute($_course_, "maxStudentNum", array()))))) {
                // line 19
                echo "      disabled=\"disabled\"
    ";
            }
            // line 21
            echo "  >
    ";
            // line 22
            if (isset($context["userVipStatus"])) { $_userVipStatus_ = $context["userVipStatus"]; } else { $_userVipStatus_ = null; }
            if (($_userVipStatus_ == "ok")) {
                // line 23
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                echo "
    ";
            } else {
                // line 25
                echo "      ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 26
                    echo "        ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买课程"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                    }
                    echo "</a>
      ";
                } else {
                    // line 28
                    echo "        ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买课程"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                    }
                    echo "</a>
      ";
                }
                // line 30
                echo "    ";
            }
            // line 31
            echo "  </a>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 31,  119 => 30,  108 => 28,  97 => 26,  94 => 25,  88 => 23,  85 => 22,  82 => 21,  78 => 19,  74 => 18,  67 => 16,  60 => 14,  54 => 12,  50 => 10,  45 => 9,  42 => 8,  33 => 5,  27 => 3,  23 => 2,  19 => 1,);
    }
}
