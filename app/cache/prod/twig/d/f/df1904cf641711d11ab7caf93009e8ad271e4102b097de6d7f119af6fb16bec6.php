<?php

/* TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig */
class __TwigTemplate_df1904cf641711d11ab7caf93009e8ad271e4102b097de6d7f119af6fb16bec6 extends Twig_Template
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
        if (isset($context["isBuyFillUserinfo"])) { $_isBuyFillUserinfo_ = $context["isBuyFillUserinfo"]; } else { $_isBuyFillUserinfo_ = null; }
        if (((array_key_exists("isBuyFillUserinfo", $context)) ? (_twig_default_filter($_isBuyFillUserinfo_, false)) : (false))) {
            // line 2
            echo "  ";
            if (isset($context["userinfoFieldsSetting"])) { $_userinfoFieldsSetting_ = $context["userinfoFieldsSetting"]; } else { $_userinfoFieldsSetting_ = null; }
            if ($_userinfoFieldsSetting_) {
                // line 3
                echo "    ";
                if (isset($context["showNavTip"])) { $_showNavTip_ = $context["showNavTip"]; } else { $_showNavTip_ = null; }
                if (((array_key_exists("showNavTip", $context)) ? (_twig_default_filter($_showNavTip_, true)) : (true))) {
                    // line 4
                    echo "      <div class=\"help-block\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("温情提示：如果您的资料有变更，请在此修改，以便更好的为您服务！"), "html", null, true);
                    echo "</div>
      <hr>
    ";
                }
                // line 7
                echo "
    ";
                // line 8
                if (isset($context["userinfoFieldsSetting"])) { $_userinfoFieldsSetting_ = $context["userinfoFieldsSetting"]; } else { $_userinfoFieldsSetting_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_userinfoFieldsSetting_);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 9
                    echo "      ";
                    $context["defaultFields"] = $this->env->getExtension('topxia_web_twig')->getDict("userInfoFields");
                    // line 10
                    echo "      ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "truename")) {
                        // line 11
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"truename\">";
                        // line 12
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "truename", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 14
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if ((($this->getAttribute($this->getAttribute($_app_, "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute($_user_, "truename", array()))) {
                            // line 15
                            echo "              <div class=\"control-text\">";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "truename", array()), "html", null, true);
                            echo " <small class=\"text-success\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已认证"), "html", null, true);
                            echo ")</small></div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute($_app_, "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute($_user_, "truename", array()))) {
                            // line 17
                            echo "              <div class=\"control-text\">";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "truename", array()), "html", null, true);
                            echo " <small class=\"text-warning\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证中"), "html", null, true);
                            echo ")</small></div>
            ";
                        } else {
                            // line 19
                            echo "              <input class=\"form-control\" id=\"truename\" type=\"text\" name=\"truename\" value=\"";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "truename", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 21
                        echo "          </div>
        </div>
      ";
                    }
                    // line 24
                    echo "
      ";
                    // line 25
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "email")) {
                        // line 26
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"email\">";
                        // line 27
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "email", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 29
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "email", array()), "@");
                        // line 30
                        echo "            ";
                        if (isset($context["emailArr"])) { $_emailArr_ = $context["emailArr"]; } else { $_emailArr_ = null; }
                        if (($this->getAttribute($_emailArr_, 1, array(), "array") != "edusoho.net")) {
                            // line 31
                            echo "              <div class=\"control-text\">";
                            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "email", array()), "html", null, true);
                            echo "</div>
            ";
                        } else {
                            // line 33
                            echo "              <input class=\"form-control\" id=\"email\" type=\"text\" name=\"email\" value=\"\" data-url=\"";
                            echo $this->env->getExtension('routing')->getPath("register_email_check");
                            echo "\" />
            ";
                        }
                        // line 35
                        echo "          </div>
        </div>
      ";
                    }
                    // line 38
                    echo "
      ";
                    // line 39
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "mobile")) {
                        // line 40
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"mobile\">";
                        // line 41
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "mobile", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 43
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        if ((($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "verifiedMobile", array()), "")) : (""))) {
                            // line 44
                            echo "              <div class=\"control-text\">";
                            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_phone_number($this->getAttribute($this->getAttribute($_app_, "user", array()), "verifiedMobile", array())), "html", null, true);
                            echo "<small class=\"text-success\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已绑定"), "html", null, true);
                            echo ")</small></div>
            ";
                        } else {
                            // line 46
                            echo "              <input class=\"form-control\" id=\"mobile\" type=\"text\" name=\"mobile\" value=\"";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "mobile", array()), "html", null, true);
                            echo "\" data-url=\"";
                            echo $this->env->getExtension('routing')->getPath("register_mobile_check");
                            echo "\">
            ";
                        }
                        // line 48
                        echo "          </div>
        </div>
      ";
                    }
                    // line 51
                    echo "
      ";
                    // line 52
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "qq")) {
                        // line 53
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"qq\">";
                        // line 54
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "qq", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"qq\" type=\"text\" name=\"qq\" value=\"";
                        // line 56
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "qq", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 60
                    echo "
      ";
                    // line 61
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "company")) {
                        // line 62
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"company\">";
                        // line 63
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "company", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" value=\"";
                        // line 65
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "company", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 69
                    echo "
      ";
                    // line 70
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "job")) {
                        // line 71
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"job\">";
                        // line 72
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "job", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"job\" type=\"text\" name=\"job\" value=\"";
                        // line 74
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "job", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 78
                    echo "
      ";
                    // line 79
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "idcard")) {
                        // line 80
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"idcard\">";
                        // line 81
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "idcard", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 83
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if ((($this->getAttribute($this->getAttribute($_app_, "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute($_user_, "idcard", array()))) {
                            // line 84
                            echo "              <div class=\"control-text\">";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_idcard_number($this->getAttribute($_user_, "idcard", array())), "html", null, true);
                            echo " <small class=\"text-success\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已认证"), "html", null, true);
                            echo ")</small></div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute($_app_, "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute($_user_, "idcard", array()))) {
                            // line 86
                            echo "              <div class=\"control-text\">";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_idcard_number($this->getAttribute($_user_, "idcard", array())), "html", null, true);
                            echo " <small class=\"text-warning\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证中"), "html", null, true);
                            echo ")</small></div>
            ";
                        } else {
                            // line 88
                            echo "              <input type=\"text\" id=\"idcard\" name=\"";
                            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                            echo twig_escape_filter($this->env, $_field_, "html", null, true);
                            echo "\"  class=\"form-control\" value=\"";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "idcard", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 90
                        echo "          </div>
        </div>
      ";
                    }
                    // line 93
                    echo "
      ";
                    // line 94
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "gender")) {
                        // line 95
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"gender\">";
                        // line 96
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "gender", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6\">
            <div class=\"checkbox-inline\" style=\"padding-left: 0\">
              <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\" ";
                        // line 99
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if (($this->getAttribute($_user_, "gender", array()) == "male")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_0\" class=\"required mrl\">";
                        // line 100
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("男"), "html", null, true);
                        echo "</span>
              <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"  ";
                        // line 101
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if (($this->getAttribute($_user_, "gender", array()) == "female")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_1\" class=\"required\" >";
                        // line 102
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("女"), "html", null, true);
                        echo "</span>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 107
                    echo "
      ";
                    // line 108
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "weixin")) {
                        // line 109
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weixin\">";
                        // line 110
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "weixin", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weixin\" name=\"";
                        // line 112
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\" value=\"";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "weixin", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 116
                    echo "
      ";
                    // line 117
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "weibo")) {
                        // line 118
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weibo\">";
                        // line 119
                        if (isset($context["defaultFields"])) { $_defaultFields_ = $context["defaultFields"]; } else { $_defaultFields_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_defaultFields_, "weibo", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weibo\" name=\"";
                        // line 121
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\" value=\"";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "weibo", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 125
                    echo "
      ";
                    // line 126
                    if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_userFields_);
                    foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                        // line 127
                        echo "        ";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                        if (($_field_ == $this->getAttribute($_userField_, "fieldName", array()))) {
                            // line 128
                            echo "           ";
                            if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                            if (($this->getAttribute($_userField_, "type", array()) == "text")) {
                                // line 129
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 130
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label \">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title", array()), "html", null, true);
                                echo "</label>
                <div class=\"col-sm-6 controls\">
                  <textarea id=\"";
                                // line 132
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"form-control \">";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "</textarea>
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute($_userField_, "type", array()) == "int")) {
                                // line 138
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 139
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title", array()), "html", null, true);
                                echo "</label>
                <div class=\"col-sm-6 controls\">
                  <input type=\"text\" id=\"";
                                // line 141
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最大值为9位整数"), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "type", array()), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute($_userField_, "type", array()) == "float")) {
                                // line 147
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 148
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title", array()), "html", null, true);
                                echo "</label>
                <div class=\" col-sm-6 controls\">
                  <input type=\"text\" id=\"";
                                // line 150
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保留到2位小数"), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "type", array()), "html", null, true);
                                echo " form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute($_userField_, "type", array()) == "date")) {
                                // line 156
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 157
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title", array()), "html", null, true);
                                echo "</label>
                <div class=\" col-sm-6 controls\">
                  <input type=\"text\" id=\"";
                                // line 159
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "type", array()), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute($_userField_, "type", array()) == "varchar")) {
                                // line 165
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 166
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title", array()), "html", null, true);
                                echo "</label>
                <div class=\"col-sm-6  controls\">
                  <input type=\"text\" id=\"";
                                // line 168
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName", array()), "html", null, true);
                                echo "\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>
            ";
                            }
                            // line 173
                            echo "
          ";
                        }
                        // line 175
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "    ";
            }
        }
        // line 179
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 179,  581 => 177,  575 => 176,  569 => 175,  565 => 173,  549 => 168,  540 => 166,  537 => 165,  517 => 159,  508 => 157,  505 => 156,  483 => 150,  474 => 148,  471 => 147,  449 => 141,  440 => 139,  437 => 138,  420 => 132,  411 => 130,  408 => 129,  404 => 128,  399 => 127,  394 => 126,  391 => 125,  380 => 121,  374 => 119,  371 => 118,  368 => 117,  365 => 116,  354 => 112,  348 => 110,  345 => 109,  342 => 108,  339 => 107,  331 => 102,  324 => 101,  320 => 100,  313 => 99,  306 => 96,  303 => 95,  300 => 94,  297 => 93,  292 => 90,  282 => 88,  273 => 86,  264 => 84,  260 => 83,  254 => 81,  251 => 80,  248 => 79,  245 => 78,  237 => 74,  231 => 72,  228 => 71,  225 => 70,  222 => 69,  214 => 65,  208 => 63,  205 => 62,  202 => 61,  199 => 60,  191 => 56,  185 => 54,  182 => 53,  179 => 52,  176 => 51,  171 => 48,  162 => 46,  153 => 44,  150 => 43,  144 => 41,  141 => 40,  138 => 39,  135 => 38,  130 => 35,  124 => 33,  117 => 31,  113 => 30,  110 => 29,  104 => 27,  101 => 26,  98 => 25,  95 => 24,  90 => 21,  83 => 19,  74 => 17,  65 => 15,  61 => 14,  55 => 12,  52 => 11,  48 => 10,  45 => 9,  40 => 8,  37 => 7,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
