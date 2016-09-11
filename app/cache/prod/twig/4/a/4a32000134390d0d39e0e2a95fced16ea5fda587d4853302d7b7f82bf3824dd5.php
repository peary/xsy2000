<?php

/* TopxiaAdminBundle:Default:system.status.html.twig */
class __TwigTemplate_4a32000134390d0d39e0e2a95fced16ea5fda587d4853302d7b7f82bf3824dd5 extends Twig_Template
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
        echo "<table class=\"table table-condensed table-bordered table-striped table-hover\">
  ";
        // line 2
        $context["status"] = 0;
        // line 3
        echo "  ";
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if (($_error_ != "error")) {
            // line 4
            echo "    ";
            if (isset($context["mainAppUpgrade"])) { $_mainAppUpgrade_ = $context["mainAppUpgrade"]; } else { $_mainAppUpgrade_ = null; }
            if ($_mainAppUpgrade_) {
                // line 5
                echo "      ";
                $context["status"] = 1;
                // line 6
                echo "      <tr>
        <td>主系统</td>
        <td>
          <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                // line 9
                echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                echo "\">立即更新</a>
          <span class=\"glyphicon glyphicon-info-sign text-info\"></span>
          ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前版本"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "&nbsp;
          ";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下一版本"), "html", null, true);
                echo ": ";
                if (isset($context["mainAppUpgrade"])) { $_mainAppUpgrade_ = $context["mainAppUpgrade"]; } else { $_mainAppUpgrade_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_mainAppUpgrade_, "package", array()), "toVersion", array()), "html", null, true);
                echo "&nbsp;
          ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新版本"), "html", null, true);
                echo ": ";
                if (isset($context["mainAppUpgrade"])) { $_mainAppUpgrade_ = $context["mainAppUpgrade"]; } else { $_mainAppUpgrade_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_mainAppUpgrade_, "latestVersion", array()), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            } else {
                // line 17
                echo "      <tr>
        <td>主系统</td>
        <td>
          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          已是最新版本 ";
                // line 21
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            }
            // line 25
            echo "
  ";
        }
        // line 27
        echo "
  ";
        // line 28
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if (($_error_ == "error")) {
            // line 29
            echo "    <tr>
      <td>主系统</td>
      <td rowspan=\"4\">
        <div class=\"empty\"><span style=\"color:#cc0000;float:left;text-align:left;\">云平台参数设置不正确，会影响到系统正常的运行，<a
                href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">请修改设置。</a></sapn></div>
      </td>
    </tr>
    <tr>
      <td>应用更新</td>
    </tr>

    <tr>
      <td>新应用</td>
    </tr>

    <tr>
      <td>云视频</td>
    </tr>

  ";
        } else {
            // line 49
            echo "    <tr>
      <td>应用更新</td>
      <td>";
            // line 51
            if (isset($context["app_count"])) { $_app_count_ = $context["app_count"]; } else { $_app_count_ = null; }
            if ($_app_count_) {
                // line 52
                echo "          ";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                if (isset($context["app_count"])) { $_app_count_ = $context["app_count"]; } else { $_app_count_ = null; }
                if (((((array_key_exists("status", $context)) ? (_twig_default_filter($_status_, 0)) : (0)) == 1) && ($_app_count_ == 1))) {
                    // line 53
                    echo "            <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 所有应用都已是最新版本
          ";
                } else {
                    // line 54
                    echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还有 <span class=\"badge\"
                                                                                           style=\"background-color:#cc0000;\">
          ";
                    // line 56
                    if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                    if ((((array_key_exists("status", $context)) ? (_twig_default_filter($_status_, 0)) : (0)) == 1)) {
                        if (isset($context["app_count"])) { $_app_count_ = $context["app_count"]; } else { $_app_count_ = null; }
                        echo twig_escape_filter($this->env, ($_app_count_ - 1), "html", null, true);
                    } else {
                        // line 57
                        echo "            ";
                        if (isset($context["app_count"])) { $_app_count_ = $context["app_count"]; } else { $_app_count_ = null; }
                        echo twig_escape_filter($this->env, $_app_count_, "html", null, true);
                        echo "
          ";
                    }
                    // line 58
                    echo "</span> 个应用没有更新 <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                    echo "\">立即更新</a>
          ";
                }
                // line 60
                echo "        ";
            } else {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 所有应用都已是最新版本
        ";
            }
            // line 61
            echo "</td>
    </tr>

    <tr>
      <td>新应用</td>
      <td>";
            // line 66
            if (isset($context["unInstallAppCount"])) { $_unInstallAppCount_ = $context["unInstallAppCount"]; } else { $_unInstallAppCount_ = null; }
            if (($_unInstallAppCount_ > 0)) {
                echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还有 <span
            class=\"badge\">";
                // line 67
                if (isset($context["unInstallAppCount"])) { $_unInstallAppCount_ = $context["unInstallAppCount"]; } else { $_unInstallAppCount_ = null; }
                echo twig_escape_filter($this->env, $_unInstallAppCount_, "html", null, true);
                echo "</span> 个应用没有安装<a class=\"pull-right\"
                                                                   href=\"";
                // line 68
                echo $this->env->getExtension('routing')->getPath("admin_app_center", array("postStatus" => "all"));
                echo "\">
            查看</a>";
            } else {
                // line 69
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已安装了全部应用
        ";
            }
            // line 70
            echo "</td>
    </tr>

    <tr>
      <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频"), "html", null, true);
            echo "</td>
      <td>";
            // line 75
            if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_bucket") != "")) {
                echo "<span
            class=\"glyphicon glyphicon-ok-sign text-success\"></span> ";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已开通"), "html", null, true);
                if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") != "cloud")) {
                    echo "(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("尚未启用"), "html", null, true);
                    echo ")
          <a class=\"pull-right\" href=\"";
                    // line 77
                    echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
                    echo "</a>";
                }
            } else {
                // line 78
                echo "          <span class=\"glyphicon glyphicon-info-sign text-info\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还未开通"), "html", null, true);
                echo "<a class=\"pull-right\"
                                                                                             href=\"";
                // line 79
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
                echo "</a>
        ";
            }
            // line 80
            echo "</td>
    </tr>
  ";
        }
        // line 83
        echo "  <tr>
    <td>直播</td>
    <td>
      ";
        // line 86
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_student_capacity", 0) > 0)) {
            // line 87
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        已开通
        ";
            // line 89
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled") == 0)) {
                // line 90
                echo "          (尚未启用)
          <a class=\"pull-right\" href=\"";
                // line 91
                echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
                echo "#live-course-set\">查看</a>
        ";
            } else {
                // line 93
                echo "          ";
                if (isset($context["liveCourseStatus"])) { $_liveCourseStatus_ = $context["liveCourseStatus"]; } else { $_liveCourseStatus_ = null; }
                if ((twig_length_filter($this->env, $_liveCourseStatus_) > 0)) {
                    // line 94
                    echo "            ";
                    if (isset($context["liveCourseStatus"])) { $_liveCourseStatus_ = $context["liveCourseStatus"]; } else { $_liveCourseStatus_ = null; }
                    if ((((($this->getAttribute($_liveCourseStatus_, "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_liveCourseStatus_, "type", array()), "")) : ("")) == "normal") && ((($this->getAttribute($_liveCourseStatus_, "expire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_liveCourseStatus_, "expire", array()), 0)) : (0)) > 0))) {
                        // line 95
                        echo "              (有效期至";
                        if (isset($context["liveCourseStatus"])) { $_liveCourseStatus_ = $context["liveCourseStatus"]; } else { $_liveCourseStatus_ = null; }
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute($_liveCourseStatus_, "expire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_liveCourseStatus_, "expire", array()), "0")) : ("0")), "Y-m-d"), "html", null, true);
                        echo " )
            ";
                    } elseif (((($this->getAttribute($_liveCourseStatus_, "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_liveCourseStatus_, "type", array()), "")) : ("")) == "tryOut")) {
                        // line 97
                        echo "              (体验用户)
            ";
                    }
                    // line 99
                    echo "          ";
                }
                // line 100
                echo "        ";
            }
            // line 101
            echo "
      ";
        } else {
            // line 103
            echo "        <span class=\"glyphicon glyphicon-info-sign text-info\"></span>
        还未开通
        <a class=\"pull-right\" href=\"";
            // line 105
            echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
            echo "#live-course-set\">查看</a>
      ";
        }
        // line 107
        echo "    </td>
  </tr>

  <tr>
    <td>移动客户端</td>
    <td>
      ";
        // line 113
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled", array()), null)) : (null))) {
            // line 114
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已启用
      ";
        } else {
            // line 116
            echo "        <span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还未启用<a class=\"pull-right\"
                                                                             href=\"";
            // line 117
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
            echo "\">查看</a>
      ";
        }
        // line 119
        echo "    </td>
  </tr>

  ";
        // line 122
        if (isset($context["mobileCustomization"])) { $_mobileCustomization_ = $context["mobileCustomization"]; } else { $_mobileCustomization_ = null; }
        if (($this->getAttribute($_mobileCustomization_, "status", array()) == "ok")) {
            // line 123
            echo "  <tr>
    <td>移动端定制</td>
    <td>
      ";
            // line 126
            if (isset($context["mobileCustomization"])) { $_mobileCustomization_ = $context["mobileCustomization"]; } else { $_mobileCustomization_ = null; }
            $context["currentVersion"] = $this->getAttribute($this->getAttribute($_mobileCustomization_, "customization", array()), "currentVersion", array());
            // line 127
            echo "      ";
            if (isset($context["mobileCustomization"])) { $_mobileCustomization_ = $context["mobileCustomization"]; } else { $_mobileCustomization_ = null; }
            $context["newestVersion"] = $this->getAttribute($_mobileCustomization_, "newestVersion", array());
            // line 128
            echo "      <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已定制
      (
      ";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前版本"), "html", null, true);
            echo ": ";
            if (isset($context["currentVersion"])) { $_currentVersion_ = $context["currentVersion"]; } else { $_currentVersion_ = null; }
            echo twig_escape_filter($this->env, $_currentVersion_, "html", null, true);
            echo "
      ";
            // line 131
            if (isset($context["newestVersion"])) { $_newestVersion_ = $context["newestVersion"]; } else { $_newestVersion_ = null; }
            if (isset($context["currentVersion"])) { $_currentVersion_ = $context["currentVersion"]; } else { $_currentVersion_ = null; }
            if (($_newestVersion_ > $_currentVersion_)) {
                // line 132
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新版本"), "html", null, true);
                echo ": ";
                if (isset($context["newestVersion"])) { $_newestVersion_ = $context["newestVersion"]; } else { $_newestVersion_ = null; }
                echo twig_escape_filter($this->env, $_newestVersion_, "html", null, true);
                echo "
      ";
            }
            // line 134
            echo "      )
      ";
            // line 135
            if (isset($context["newestVersion"])) { $_newestVersion_ = $context["newestVersion"]; } else { $_newestVersion_ = null; }
            if (isset($context["currentVersion"])) { $_currentVersion_ = $context["currentVersion"]; } else { $_currentVersion_ = null; }
            if (($_newestVersion_ > $_currentVersion_)) {
                // line 136
                echo "        <span class=\"upgrade-status\">
                  ";
                // line 137
                if (isset($context["mobileCustomization"])) { $_mobileCustomization_ = $context["mobileCustomization"]; } else { $_mobileCustomization_ = null; }
                $context["applyStatus"] = $this->getAttribute($this->getAttribute($_mobileCustomization_, "customization", array()), "applyStatus", array());
                // line 138
                echo "          ";
                if (isset($context["applyStatus"])) { $_applyStatus_ = $context["applyStatus"]; } else { $_applyStatus_ = null; }
                if (twig_in_filter($_applyStatus_, array(0 => "unsubmit", 1 => "failed"))) {
                    // line 139
                    echo "            ";
                    if (isset($context["applyStatus"])) { $_applyStatus_ = $context["applyStatus"]; } else { $_applyStatus_ = null; }
                    if (($_applyStatus_ == "failed")) {
                        // line 140
                        echo "              <span class=\"label label-danger\">升级失败</span>
            ";
                    }
                    // line 142
                    echo "                    <a class=\"btn btn-info btn-xs mls\" target=\"_blank\" href=\"http://demo.edusoho.com/mobile/\">体验</a>
            <a class=\"btn btn-info btn-xs mobile-customization-upgrade-btn\"
               data-url=\"";
                    // line 144
                    echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_customization_upgrade");
                    echo "\" data-loading-text=\"提交中...\"
               data-data=\"";
                    // line 145
                    if (isset($context["currentVersion"])) { $_currentVersion_ = $context["currentVersion"]; } else { $_currentVersion_ = null; }
                    if (isset($context["newestVersion"])) { $_newestVersion_ = $context["newestVersion"]; } else { $_newestVersion_ = null; }
                    echo twig_escape_filter($this->env, twig_jsonencode_filter(array("currentVersion" => $_currentVersion_, "targetVersion" => $_newestVersion_)), "html", null, true);
                    echo "\">申请升级</a>
                  ";
                } elseif (($_applyStatus_ == "submitted")) {
                    // line 147
                    echo "            <span class=\"label label-warning\">升级受理中</span>
          ";
                } elseif (($_applyStatus_ == "accepted")) {
                    // line 149
                    echo "            <span class=\"label label-success\">升级已受理</span>
          ";
                }
                // line 151
                echo "                </span>
        <div class=\"mls help-block\">(如有疑问，请联系客服人员 0571-86819929)</div>
      ";
            }
            // line 154
            echo "    </td>
    ";
        }
        // line 156
        echo "
</table>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:system.status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 156,  410 => 154,  405 => 151,  401 => 149,  397 => 147,  390 => 145,  386 => 144,  382 => 142,  378 => 140,  374 => 139,  370 => 138,  367 => 137,  364 => 136,  360 => 135,  357 => 134,  348 => 132,  344 => 131,  337 => 130,  333 => 128,  329 => 127,  326 => 126,  321 => 123,  318 => 122,  313 => 119,  308 => 117,  305 => 116,  301 => 114,  299 => 113,  291 => 107,  286 => 105,  282 => 103,  278 => 101,  275 => 100,  272 => 99,  268 => 97,  261 => 95,  257 => 94,  253 => 93,  248 => 91,  245 => 90,  243 => 89,  239 => 87,  237 => 86,  232 => 83,  227 => 80,  220 => 79,  215 => 78,  208 => 77,  201 => 76,  197 => 75,  193 => 74,  187 => 70,  183 => 69,  178 => 68,  173 => 67,  168 => 66,  161 => 61,  155 => 60,  149 => 58,  142 => 57,  136 => 56,  132 => 54,  128 => 53,  123 => 52,  120 => 51,  116 => 49,  97 => 33,  91 => 29,  88 => 28,  85 => 27,  81 => 25,  74 => 21,  68 => 17,  58 => 13,  51 => 12,  45 => 11,  40 => 9,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
