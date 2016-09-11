<?php

/* TopxiaWebBundle:Order:order-create.html.twig */
class __TwigTemplate_f374a00e41ec9db84f27addc220c6403c3435921674df146bd96f801d7166ec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Order:order-create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esBar' => array($this, 'block_esBar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "order/create";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单确认"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"order-pay\">
  <div class=\"es-section\">
    <ul class=\"es-step es-step-3 clearfix\">
      <li class=\"doing\"><span class=\"number\">1</span>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单确认"), "html", null, true);
        echo "</li>
      <li><span class=\"number\">2</span>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单支付"), "html", null, true);
        echo "</li>
      <li><span class=\"number\">3</span>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单完成"), "html", null, true);
        echo "</li>
    </ul>
    <div class=\"order-pay-body\">
      <form id=\"order-create-form\" method=\"post\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("order_create");
        echo "\">
        <input type=\"password\" style=\"display:none\">
      \t";
        // line 18
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (((array_key_exists("order", $context)) ? (_twig_default_filter($_order_, null)) : (null))) {
            // line 19
            echo "        <input type=\"hidden\" name=\"orderId\" value=\"";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id", array()), "html", null, true);
            echo "\"/>
        ";
        }
        // line 21
        echo "      \t<input type=\"hidden\" role=\"cash-rate\" value=\"";
        if (isset($context["cashRate"])) { $_cashRate_ = $context["cashRate"]; } else { $_cashRate_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("cashRate", $context)) ? (_twig_default_filter($_cashRate_, null)) : (null)), "html", null, true);
        echo "\"
        data-price-type = \"";
        // line 22
        if (isset($context["priceType"])) { $_priceType_ = $context["priceType"]; } else { $_priceType_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("priceType", $context)) ? (_twig_default_filter($_priceType_, "RMB")) : ("RMB")), "html", null, true);
        echo "\" data-cash-model='";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_model"), "none"), "html", null, true);
        echo "'/>
        <input type=\"hidden\" name=\"targetType\" value=\"";
        // line 23
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"maxRate\" value=\"";
        // line 24
        if (isset($context["maxRate"])) { $_maxRate_ = $context["maxRate"]; } else { $_maxRate_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("maxRate", $context)) ? (_twig_default_filter($_maxRate_, 100)) : (100)), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"targetId\" value=\"";
        // line 25
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $_targetId_, "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"totalPrice\" value=\"";
        // line 26
        if (isset($context["totalPrice"])) { $_totalPrice_ = $context["totalPrice"]; } else { $_totalPrice_ = null; }
        echo twig_escape_filter($this->env, $_totalPrice_, "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"shouldPayMoney\" value=\"\"/>
        <input type=\"hidden\" name=\"sms_code\" value=\"\"/>
        <input type=\"hidden\" name=\"mobile\" data-role=\"mobile\" value=\"";
        // line 29
        if (isset($context["verifiedMobile"])) { $_verifiedMobile_ = $context["verifiedMobile"]; } else { $_verifiedMobile_ = null; }
        echo twig_escape_filter($this->env, $_verifiedMobile_, "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <div class=\"order-detail-bg\" style=\"border:none\">
          ";
        // line 32
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if ($this->env->getExtension('topxia_order_twig')->checkOrderType($_targetType_)) {
            // line 33
            echo "            ";
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            $this->loadTemplate($this->env->getExtension('topxia_order_twig')->checkOrderType($_targetType_), "TopxiaWebBundle:Order:order-create.html.twig", 33)->display($context);
            // line 34
            echo "          ";
        }
        // line 35
        echo "        </div>

        ";
        // line 37
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if ($this->env->getExtension('topxia_order_twig')->checkOrderType($_targetType_)) {
            // line 38
            echo "          <div class=\"order-detail-bg\">

            ";
            // line 40
            if ((($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Coupon") && $this->env->getExtension('topxia_web_twig')->getSetting("coupon.enabled")) || _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("invite.invite_code_setting"), false))) {
                // line 43
                echo "              ";
                if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
                if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
                if (isset($context["totalPrice"])) { $_totalPrice_ = $context["totalPrice"]; } else { $_totalPrice_ = null; }
                if (isset($context["priceType"])) { $_priceType_ = $context["priceType"]; } else { $_priceType_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Card:useableCoupons", array("targetType" => $_targetType_, "targetId" => $_targetId_, "totalPrice" => $_totalPrice_, "priceType" => ((array_key_exists("priceType", $context)) ? (_twig_default_filter($_priceType_, "RMB")) : ("RMB")))));
                echo "
            ";
            }
            // line 45
            echo "
            ";
            // line 46
            if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
                // line 47
                echo "            \t";
                $this->loadTemplate("TopxiaWebBundle:Order:order-item-coin.html.twig", "TopxiaWebBundle:Order:order-create.html.twig", 47)->display($context);
                // line 48
                echo "            ";
            }
            // line 49
            echo "
          </div>
        ";
        }
        // line 52
        echo "
        <div class=\"form-group\">
          <div class=\"total-price\">
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("应付金额："), "html", null, true);
        echo "
            ";
        // line 56
        if (isset($context["priceType"])) { $_priceType_ = $context["priceType"]; } else { $_priceType_ = null; }
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter($_priceType_, "RMB")) : ("RMB")) == "Coin")) {
            // line 57
            echo "              <span role=\"pay-coin\">0</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo " ÷ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("汇率"), "html", null, true);
            echo "(";
            if (isset($context["cashRate"])) { $_cashRate_ = $context["cashRate"]; } else { $_cashRate_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("cashRate", $context)) ? (_twig_default_filter($_cashRate_, 1)) : (1)), "html", null, true);
            echo ") = <span class=\"pay-rmb\">￥</span> <span role=\"pay-rmb\" class=\"pay-rmb\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo "
            ";
        } else {
            // line 59
            echo "              <span class=\"pay-rmb\">￥</span><span role=\"pay-rmb\" class=\"pay-rmb\"></span>
            ";
        }
        // line 61
        echo "          </div>
        </div>
        <div class=\"form-group text-right\">
          <a
            ";
        // line 65
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($_targetType_ == "course") && ((array_key_exists("course", $context)) ? (_twig_default_filter($_course_, null)) : (null)))) {
            // line 66
            echo "              href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"
            ";
        } elseif (($_targetType_ == "vip")) {
            // line 68
            echo "              href=\"";
            echo $this->env->getExtension('routing')->getPath("vip_renew");
            echo "\"
            ";
        } elseif (($_targetType_ == "classroom")) {
            // line 70
            echo "              href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\"
            ";
        }
        // line 72
        echo "            class=\"btn btn-link\" style=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</a>
          ";
        // line 73
        if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") == "1") && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_user_pay"), "") == "on"))) {
            // line 74
            echo "            <a class=\"btn btn-primary\" id=\"js-order-create-sms-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("order_pay_sms_verification");
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交订单"), "html", null, true);
            echo "</a>
          ";
        } else {
            // line 76
            echo "            <button class=\"btn btn-primary\" id=\"order-create-btn\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交订单"), "html", null, true);
            echo "</button>
          ";
        }
        // line 78
        echo "        </div>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 78,  252 => 76,  244 => 74,  242 => 73,  237 => 72,  230 => 70,  224 => 68,  217 => 66,  213 => 65,  207 => 61,  203 => 59,  190 => 57,  187 => 56,  183 => 55,  178 => 52,  173 => 49,  170 => 48,  167 => 47,  165 => 46,  162 => 45,  152 => 43,  150 => 40,  146 => 38,  143 => 37,  139 => 35,  136 => 34,  132 => 33,  129 => 32,  124 => 30,  119 => 29,  112 => 26,  107 => 25,  102 => 24,  97 => 23,  90 => 22,  84 => 21,  77 => 19,  74 => 18,  69 => 16,  63 => 13,  59 => 12,  55 => 11,  50 => 8,  47 => 7,  42 => 5,  33 => 2,  29 => 1,  27 => 3,  11 => 1,);
    }
}
