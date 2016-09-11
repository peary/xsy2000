<?php

/* TopxiaWebBundle:Course:Part/normal-header.html.twig */
class __TwigTemplate_e86b361a5a6532f4b66c2cba407362dbf87796e2de39ec3d2fa41bc4558ba226 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 1);
        // line 2
        $context["header_macro"] = $this;
        // line 3
        echo "
";
        // line 4
        $this->env->getExtension('topxia_web_twig')->loadScript("course/common");
        // line 5
        echo "
";
        // line 6
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($_member_) {
            // line 7
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 7)->display($context);
        } elseif ((($this->getAttribute($_course_, "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "parentId", array()), false)) : (false))) {
            // line 9
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 9)->display(array_merge($context, array("source" => "classroom")));
        } else {
            // line 11
            echo "
  ";
            // line 12
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 12)->display($context);
        }
        // line 14
        echo "
";
        // line 36
        echo "
";
        // line 131
        echo "
";
        // line 148
        echo "
";
        // line 164
        echo "
";
    }

    // line 15
    public function getpicture($__course__ = null, $__previewLesson__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "previewLesson" => $__previewLesson__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "  <div class=\"course-img\">
    ";
            // line 17
            if (isset($context["previewLesson"])) { $_previewLesson_ = $context["previewLesson"]; } else { $_previewLesson_ = null; }
            if ($_previewLesson_) {
                // line 18
                echo "      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["previewLesson"])) { $_previewLesson_ = $context["previewLesson"]; } else { $_previewLesson_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute($_course_, "id", array()), "lessonId" => $this->getAttribute($_previewLesson_, "id", array()))), "html", null, true);
                echo "\" class=\"course-img-cover\">
        <i class=\"es-icon es-icon-playcircleoutline\"></i>
      </a>
    ";
            }
            // line 22
            echo "
    <img class=\"img-responsive\" src=\"";
            // line 23
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "largePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
            echo "\">
    <div class=\"tags\">
      ";
            // line 25
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "serializeMode", array()) == "serialize")) {
                // line 26
                echo "        <span class=\"tag-serialing\"></span>
      ";
            } elseif (($this->getAttribute($_course_, "serializeMode", array()) == "finished")) {
                // line 28
                echo "        <span class=\"tag-finished\"></span>
      ";
            }
            // line 30
            echo "      ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "type", array()) == "live")) {
                // line 31
                echo "        <span class=\"tag-live\"></span>
      ";
            }
            // line 33
            echo "    </div>
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getinfo($__course__ = null, $__member__ = null, $__userVipStatus__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "member" => $__member__,
            "userVipStatus" => $__userVipStatus__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "  ";
            $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 38);
            // line 39
            echo "  <div class=\"course-info\">
    <h2 class=\"title\">
      ";
            // line 41
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
            echo "
      <span class=\"es-qrcode top\" data-url=\"";
            // line 42
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_qrcode", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">
        <i class=\"es-icon es-icon-qrcode\"></i>
        <span class=\"qrcode-popover\">
          <img src=\"\" alt=\"\">
          ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫二维码继续学习"), "html", null, true);
            echo "
          ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二维码时效为半小时"), "html", null, true);
            echo "
        </span>
      </span>
    </h2>
    <div class=\"subtitle\">";
            // line 51
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "subtitle", array()), "html", null, true);
            echo "</div>
    <div class=\"metas\">
      <div class=\"score\">
        ";
            // line 54
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $_web_macro_->getstar($this->getAttribute($_course_, "rating", array()));
            echo "
        <span>(";
            // line 55
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
            echo ")</span>
      </div>

      ";
            // line 58
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if (($_member_ && ($this->getAttribute($_member_, "deadline", array()) > 0))) {
                // line 59
                echo "        ";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if (($this->getAttribute($_member_, "deadline", array()) > twig_date_format_filter($this->env, "now", "U"))) {
                    // line 60
                    echo "          <p class=\"expiry-date hidden-sm\">
            <span class=\"mrm\">有效期至</span>
            <span>";
                    // line 62
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_member_, "deadline", array()), "Y年m月d日 H时i分"), "html", null, true);
                    echo "</span>
          </p>
        ";
                } else {
                    // line 65
                    echo "         <div class=\"alert alert-danger alert-dismissable\">
            您购买的课程已到期，无法学习课时、提问等。如有疑问请联系老师，或点击
              <a class=\" \"  href=\"";
                    // line 67
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                    echo "\">
              ";
                    // line 68
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price", array()) > 0)) {
                        // line 69
                        echo "              重新购买
              ";
                    } else {
                        // line 71
                        echo "              重新加入
              ";
                    }
                    // line 73
                    echo "              </a>。
          </div>
        ";
                }
                // line 76
                echo "      ";
            }
            // line 77
            echo "

      ";
            // line 79
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if ( !$_member_) {
                // line 80
                echo "        ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ($this->getAttribute($_course_, "expiryDay", array())) {
                    // line 81
                    echo "          <p class=\"expiry-date hidden-sm\">
            <label for=\"\">";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期"), "html", null, true);
                    echo "</label>
            <span>";
                    // line 83
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "expiryDay", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("天"), "html", null, true);
                    echo "</span>
          </p>
        ";
                }
                // line 86
                echo "        <p class=\"discount-price\">
          <label>";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
                echo "</label>
          ";
                // line 88
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 88)->display(array_merge($context, array("shows" => array(0 => "price", 1 => "discount"))));
                // line 89
                echo "        </p>
        ";
                // line 90
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "discountId", array()) > 0)) {
                    // line 91
                    echo "          <p class=\"old-price hidden-sm\">
            <label>";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("原价"), "html", null, true);
                    echo "</label>
            ";
                    // line 93
                    $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 93)->display(array_merge($context, array("shows" => array(0 => "originPrice"))));
                    // line 94
                    echo "          </p>
          ";
                    // line 95
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if ((($this->getAttribute($_course_, "discountObj", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "discountObj", array()), null)) : (null))) {
                        // line 96
                        echo "            <p class=\"activity\">
              <label>";
                        // line 97
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("活动"), "html", null, true);
                        echo "</label>
              <span class=\"name\">";
                        // line 98
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_course_, "discountObj", array()), "name", array()), "html", null, true);
                        echo "</span>
              <span>
                <i class=\"es-icon es-icon-accesstime\"></i>
                <span id=\"discount-endtime-countdown\" class=\"text-muted\" data-remaintime=\"";
                        // line 101
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_course_, "discountObj", array()), "endTime", array()) - twig_date_format_filter($this->env, "now", "U")), "html", null, true);
                        echo "\"
                ></span>
              </span>
            </p>
          ";
                    }
                    // line 106
                    echo "        ";
                }
                // line 107
                echo "      ";
            }
            // line 108
            echo "    </div>

    ";
            // line 110
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if (isset($context["userVipStatus"])) { $_userVipStatus_ = $context["userVipStatus"]; } else { $_userVipStatus_ = null; }
            if ((((( !(($this->getAttribute($_member_, "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "fake", array()), false)) : (false)) && $_member_) && ($this->getAttribute($_member_, "role", array()) == "student")) && ($this->getAttribute($_member_, "levelId", array()) > 0)) && ($_userVipStatus_ != "ok"))) {
                // line 111
                echo "      <div class=\"alert alert-danger\">
        ";
                // line 112
                if (isset($context["userVipStatus"])) { $_userVipStatus_ = $context["userVipStatus"]; } else { $_userVipStatus_ = null; }
                if (($_userVipStatus_ == "not_member")) {
                    // line 113
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您已经不是会员，不能学习此课程！"), "html", null, true);
                    echo "
          ";
                    // line 114
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price", array()) > 0)) {
                        // line 115
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请重新"), "html", null, true);
                        echo "<a class=\"btn-link\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("vip");
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开通会员"), "html", null, true);
                        echo "</a>
          ";
                    } else {
                        // line 117
                        echo "            <a class=\"btn-link js-exit-course\" data-url=\"";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                        echo "\" data-go=\"";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                        echo "</a>
          ";
                    }
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("！"), "html", null, true);
                    echo "
        ";
                } elseif (($_userVipStatus_ == "member_expired")) {
                    // line 120
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的会员已过期，不能学习此课程，请先"), "html", null, true);
                    echo "<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_renew");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("续费"), "html", null, true);
                    echo "</a>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                    echo "
        ";
                } elseif (($_userVipStatus_ == "level_low")) {
                    // line 122
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员等级不够，不能学习此课程。请先"), "html", null, true);
                    echo "<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_upgrade");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级会员"), "html", null, true);
                    echo "</a>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 124
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课程已不支持会员免费学，"), "html", null, true);
                    echo "<a class=\"btn-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                    echo "\" data-go=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 126
                echo "      </div>
    ";
            }
            // line 128
            echo "
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 132
    public function getstudent_num($__course__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 133
            echo "  <div class=\"student-num hidden-xs\">
    ";
            // line 134
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 135
                echo "      <i class=\"es-icon es-icon-people\"></i>";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
                echo "
      ";
                // line 136
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "maxStudentNum", array()) > 0)) {
                    // line 137
                    echo "        ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "studentNum", array()) >= $this->getAttribute($_course_, "maxStudentNum", array()))) {
                        // line 138
                        echo "          <small class=\"hidden-sm text-sm\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名额已满"), "html", null, true);
                        echo ")</small>
        ";
                    } else {
                        // line 140
                        echo "          <small class=\"hidden-sm text-sm\">(";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "maxStudentNum", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名额"), "html", null, true);
                        echo ")</small>
        ";
                    }
                    // line 142
                    echo "      ";
                }
                // line 143
                echo "    ";
            } else {
                // line 144
                echo "      <i class=\"es-icon es-icon-accesstime\"></i>";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "lessonNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
                echo "
    ";
            }
            // line 146
            echo "  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 149
    public function getfavorite_btn($__course__ = null, $__hasFavorited__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "hasFavorited" => $__hasFavorited__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "  <li id=\"unfavorite-btn\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_unfavorite", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["hasFavorited"])) { $_hasFavorited_ = $context["hasFavorited"]; } else { $_hasFavorited_ = null; }
            if ( !$_hasFavorited_) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <a href=\"javascript:;\" class=\"color-primary\">
      <p><i class=\"es-icon es-icon-bookmark\"></i></p>
      <p>";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已收藏"), "html", null, true);
            echo "</p>
    </a>
  </li>

  <li id=\"favorite-btn\" data-url=\"";
            // line 157
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_favorite", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["hasFavorited"])) { $_hasFavorited_ = $context["hasFavorited"]; } else { $_hasFavorited_ = null; }
            if ($_hasFavorited_) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <a href=\"javascript:;\">
      <p><i class=\"es-icon es-icon-bookmarkoutline\"></i></p>
      <p>";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收藏"), "html", null, true);
            echo "</p>
    </a>
  </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getshare_btn($__course__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "  <li>
    <span class=\"es-share top\">
      <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">
        <p><i class=\"es-icon es-icon-share\"></i></p>
        <p>";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享"), "html", null, true);
            echo "</p>
      </a>
      ";
            // line 172
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 172)->display(array_merge($context, array("type" => "course")));
            // line 173
            echo "    </span>
  </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 173,  594 => 172,  589 => 170,  583 => 166,  571 => 165,  556 => 160,  544 => 157,  537 => 153,  524 => 150,  511 => 149,  499 => 146,  491 => 144,  488 => 143,  485 => 142,  477 => 140,  471 => 138,  467 => 137,  464 => 136,  457 => 135,  455 => 134,  452 => 133,  440 => 132,  427 => 128,  423 => 126,  409 => 124,  397 => 122,  385 => 120,  380 => 118,  368 => 117,  358 => 115,  355 => 114,  350 => 113,  347 => 112,  344 => 111,  340 => 110,  336 => 108,  333 => 107,  330 => 106,  321 => 101,  314 => 98,  310 => 97,  307 => 96,  304 => 95,  301 => 94,  299 => 93,  295 => 92,  292 => 91,  289 => 90,  286 => 89,  284 => 88,  280 => 87,  277 => 86,  269 => 83,  265 => 82,  262 => 81,  258 => 80,  255 => 79,  251 => 77,  248 => 76,  243 => 73,  239 => 71,  235 => 69,  232 => 68,  227 => 67,  223 => 65,  216 => 62,  212 => 60,  208 => 59,  205 => 58,  197 => 55,  191 => 54,  184 => 51,  177 => 47,  173 => 46,  165 => 42,  160 => 41,  156 => 39,  153 => 38,  139 => 37,  126 => 33,  122 => 31,  118 => 30,  114 => 28,  110 => 26,  107 => 25,  98 => 23,  95 => 22,  85 => 18,  82 => 17,  79 => 16,  66 => 15,  61 => 164,  58 => 148,  55 => 131,  52 => 36,  49 => 14,  46 => 12,  43 => 11,  39 => 9,  35 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
