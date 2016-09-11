<?php

/* TopxiaWebBundle:PayCenter:show.html.twig */
class __TwigTemplate_3170dc4b6e5c57965817869afea8e6ac5df286d2e8cd51968446fd046e6d6c2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PayCenter:show.html.twig", 1);
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
        // line 4
        $context["script_controller"] = "pay/select";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付中心"), "html", null, true);
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
      <li class=\"done\"><span class=\"number\"><i class=\"es-icon es-icon-done\"></i></span>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单确认"), "html", null, true);
        echo "</li>
      <li class=\"doing\"><span class=\"number\">2</span>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单支付"), "html", null, true);
        echo "</li>
      <li><span class=\"number\">3</span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单完成"), "html", null, true);
        echo "</li>
    </ul>
    <div class=\"order-pay-body\">
      <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单已提交，请在４８小时内完成支付！逾期订单将被取消。"), "html", null, true);
        echo "
      </div>

      ";
        // line 24
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (isset($context["sn"])) { $_sn_ = $context["sn"]; } else { $_sn_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller($_template_, array("sn" => $_sn_)));
        echo "

      <div class=\"es-piece\" style=\"margin-bottom:20px;\"><div class=\"piece-header\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付方式"), "html", null, true);
        echo "</div></div>
      <form class=\"form-paytype\" method=\"post\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pay_center_pay");
        echo "\">
        <input type=\"hidden\" name=\"targetType\" value=\"";
        // line 28
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "targetType", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"orderId\" value=\"";
        // line 29
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id", array()), "html", null, true);
        echo "\"/>
        
        ";
        // line 31
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (isset($context["firstEnabledPayment"])) { $_firstEnabledPayment_ = $context["firstEnabledPayment"]; } else { $_firstEnabledPayment_ = null; }
        $context["activePayment"] = (($this->getAttribute($_order_, "payment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_order_, "payment", array()), (($this->getAttribute($_firstEnabledPayment_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_firstEnabledPayment_, "name", array()), "")) : ("")))) : ((($this->getAttribute($_firstEnabledPayment_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_firstEnabledPayment_, "name", array()), "")) : (""))));
        // line 32
        echo "        ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (($this->getAttribute($_order_, "payment", array()) == "none")) {
            // line 33
            echo "          ";
            if (isset($context["firstEnabledPayment"])) { $_firstEnabledPayment_ = $context["firstEnabledPayment"]; } else { $_firstEnabledPayment_ = null; }
            $context["activePayment"] = (($this->getAttribute($_firstEnabledPayment_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_firstEnabledPayment_, "name", array()), "")) : (""));
            // line 34
            echo "        ";
        }
        // line 35
        echo "
        <input type=\"hidden\" name=\"payment\" value=\"";
        // line 36
        if (isset($context["activePayment"])) { $_activePayment_ = $context["activePayment"]; } else { $_activePayment_ = null; }
        echo twig_escape_filter($this->env, $_activePayment_, "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        ";
        // line 38
        $context["cbpay"] = false;
        // line 39
        echo "        ";
        $context["alipay"] = false;
        // line 40
        echo "
        <div class=\"form-group order-detail-bg\">
          ";
        // line 42
        if (isset($context["payments"])) { $_payments_ = $context["payments"]; } else { $_payments_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_payments_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 43
            echo "            ";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            if ((twig_in_filter($this->getAttribute($_payment_, "name", array()), array(0 => "heepay", 1 => "llcbpay")) && ($this->getAttribute($_payment_, "enabled", array()) == 0))) {
                // line 44
                echo "              ";
                $context["cbpay"] = true;
                // line 45
                echo "            ";
            } elseif ((($this->getAttribute($_payment_, "name", array()) == "alipay") && ($this->getAttribute($_payment_, "enabled", array()) == 0))) {
                // line 46
                echo "              ";
                $context["alipay"] = true;
                // line 47
                echo "            ";
            }
            // line 48
            echo "              ";
            if (isset($context["activePayment"])) { $_activePayment_ = $context["activePayment"]; } else { $_activePayment_ = null; }
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            if ((twig_in_filter($_activePayment_, array(0 => "none", 1 => "")) && $this->getAttribute($_payment_, "enabled", array()))) {
                // line 49
                echo "                ";
                if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
                $context["activePayment"] = $this->getAttribute($_payment_, "name", array());
                // line 50
                echo "              ";
            }
            // line 51
            echo "              <div class=\"check ";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            if ( !$this->getAttribute($_payment_, "enabled", array())) {
                echo "disabled";
            }
            echo " ";
            if (isset($context["activePayment"])) { $_activePayment_ = $context["activePayment"]; } else { $_activePayment_ = null; }
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            if (($_activePayment_ == $this->getAttribute($_payment_, "name", array()))) {
                echo "active";
            }
            echo "\" id=\"";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "name", array()), "html", null, true);
            echo "\">
                ";
            // line 52
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            $context["picture"] = (("assets/img/order/" . $this->getAttribute($_payment_, "name", array())) . ".png");
            // line 53
            echo "                <img src=\"";
            if (isset($context["picture"])) { $_picture_ = $context["picture"]; } else { $_picture_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($_picture_), "html", null, true);
            echo "\" />
                <span class=\"icon\"></span>
              </div>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <div class=\"pay-type-label text-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付方式未开启，请联系管理员。"), "html", null, true);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "          ";
        if (isset($context["payAgreements"])) { $_payAgreements_ = $context["payAgreements"]; } else { $_payAgreements_ = null; }
        if ( !twig_test_empty($_payAgreements_)) {
            // line 60
            echo "          <div class=\"js-pay-agreement\" style=\"display:none\">
            <ul class=\"pay-agreement-list row\">
              ";
            // line 62
            if (isset($context["payAgreements"])) { $_payAgreements_ = $context["payAgreements"]; } else { $_payAgreements_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_payAgreements_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["payAgreement"]) {
                // line 63
                echo "                <li id=\"unbind-bank-";
                if (isset($context["payAgreement"])) { $_payAgreement_ = $context["payAgreement"]; } else { $_payAgreement_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_payAgreement_, "id", array()), "html", null, true);
                echo "\" class=\"col-md-6 js-pay-bank ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "index0", array()) == 0)) {
                    echo "checked";
                }
                echo "\">
                  <div class=\"pay-bank clearfix\">
                    <input class=\"hidden\" type=\"radio\" name='payAgreementId' value=\"";
                // line 65
                if (isset($context["payAgreement"])) { $_payAgreement_ = $context["payAgreement"]; } else { $_payAgreement_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_payAgreement_, "id", array()), "html", null, true);
                echo "\" ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "index0", array()) == 0)) {
                    echo "checked";
                }
                echo " />
                    <span class=\"name\">";
                // line 66
                if (isset($context["payAgreement"])) { $_payAgreement_ = $context["payAgreement"]; } else { $_payAgreement_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_payAgreement_, "bankName", array()), "html", null, true);
                echo "</span>
                    <span class=\"number\">***";
                // line 67
                if (isset($context["payAgreement"])) { $_payAgreement_ = $context["payAgreement"]; } else { $_payAgreement_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_payAgreement_, "bankNumber", array()), "html", null, true);
                echo "</span>
                    <span class=\"hidden-xs\">";
                // line 68
                if (isset($context["payAgreement"])) { $_payAgreement_ = $context["payAgreement"]; } else { $_payAgreement_ = null; }
                if (($this->getAttribute($_payAgreement_, "type", array()) == 0)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("储蓄卡"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("信用卡"), "html", null, true);
                }
                echo "</span>
                    <a href=\"javascript:;\" class=\"closed visible-lg\" data-url=\"";
                // line 69
                echo $this->env->getExtension('routing')->getPath("auth_unbind_mobile_show");
                echo "\"><i class=\"es-icon es-icon-icon_close_circle\"></i></a>
                  </div>
                </li>
              ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payAgreement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "              <li class=\"col-md-6 js-pay-bank\">
                <div class=\"pay-bank\">
                  <input class=\"hidden\" type=\"radio\" name='payAgreementId' value=\"\"/>
                  <span class=\"color-gray\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("使用新的银行卡"), "html", null, true);
            echo "</span>
                </div>
              </li>
            </ul>
          </div>
          ";
        }
        // line 82
        echo "          ";
        if (isset($context["alipay"])) { $_alipay_ = $context["alipay"]; } else { $_alipay_ = null; }
        if (isset($context["cbpay"])) { $_cbpay_ = $context["cbpay"]; } else { $_cbpay_ = null; }
        if ((((array_key_exists("alipay", $context)) ? (_twig_default_filter($_alipay_, "")) : ("")) || ((array_key_exists("cbpay", $context)) ? (_twig_default_filter($_cbpay_, "")) : ("")))) {
            // line 83
            echo "              ";
            if ($this->env->getExtension('topxia_web_twig')->isMicroMessenger()) {
                // line 84
                echo "                <p class=\"color-danger\">您正在使用微信浏览，暂不支持其他支付方式</p>
              ";
            } else {
                // line 86
                echo "                <p class=\"color-danger\">若需使用网银支付，请使用IE浏览器</p>
              ";
            }
            // line 88
            echo "          ";
        }
        // line 89
        echo "        </div>
        <div class=\"form-group\">
          <div class=\"total-price\">
            ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("应付金额："), "html", null, true);
        echo "
            <span role=\"pay-rmb\" class=\"pay-rmb\">￥";
        // line 93
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "amount", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"form-group text-right\">
          ";
        // line 97
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (twig_in_filter($_targetType_, array(0 => "course", 1 => "classroom", 2 => "vip"))) {
            // line 98
            echo "            ";
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            $this->loadTemplate((("TopxiaWebBundle:PayCenter:" . $_targetType_) . "-cancelled.html.twig"), "TopxiaWebBundle:PayCenter:show.html.twig", 98)->display($context);
            // line 99
            echo "          ";
        }
        // line 100
        echo "          <button class=\"pay-button btn btn-primary\" ";
        if (isset($context["activePayment"])) { $_activePayment_ = $context["activePayment"]; } else { $_activePayment_ = null; }
        if (($_activePayment_ == "")) {
            echo "disabled=\"disabled\"";
        } else {
            echo "type=\"submit\"";
        }
        echo " >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确认支付"), "html", null, true);
        echo "</button>
        </div>

      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 100,  358 => 99,  354 => 98,  351 => 97,  343 => 93,  339 => 92,  334 => 89,  331 => 88,  327 => 86,  323 => 84,  320 => 83,  315 => 82,  306 => 76,  301 => 73,  283 => 69,  274 => 68,  269 => 67,  264 => 66,  254 => 65,  242 => 63,  224 => 62,  220 => 60,  216 => 59,  207 => 57,  196 => 53,  193 => 52,  176 => 51,  173 => 50,  169 => 49,  164 => 48,  161 => 47,  158 => 46,  155 => 45,  152 => 44,  148 => 43,  142 => 42,  138 => 40,  135 => 39,  133 => 38,  129 => 37,  124 => 36,  121 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  100 => 29,  95 => 28,  91 => 27,  87 => 26,  80 => 24,  74 => 21,  64 => 14,  60 => 13,  56 => 12,  50 => 8,  47 => 7,  42 => 5,  33 => 3,  29 => 1,  27 => 4,  11 => 1,);
    }
}
