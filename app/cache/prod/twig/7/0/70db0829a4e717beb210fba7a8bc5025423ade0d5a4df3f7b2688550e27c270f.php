<?php

/* TopxiaWebBundle:Course:header.html.twig */
class __TwigTemplate_70db0829a4e717beb210fba7a8bc5025423ade0d5a4df3f7b2688550e27c270f extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:header.html.twig", 1);
        // line 2
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("course-manage/header"), "html", null, true);
        echo "
<div class=\"es-section course-manage-header clearfix\">
  <a href=\"";
        // line 4
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\">
    <img class=\"picture\" src=\"";
        // line 5
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
  </a>
  <h1 class=\"title\">
    ";
        // line 8
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type", array()) != "normal")) {
            // line 9
            echo "      [";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("courseType"), $this->getAttribute($_course_, "type", array()), array(), "array"), "html", null, true);
            echo "]
    ";
        }
        // line 11
        echo "    <a class=\"link-dark\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 12
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "status", array()) == "closed")) {
            // line 13
            echo "      <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute($_course_, "status", array()) == "draft")) {
            // line 15
            echo "      <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute($_course_, "status", array()) == "published")) {
            // line 17
            echo "      ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "serializeMode", array()) == "serialize")) {
                // line 18
                echo "        <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新中"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute($_course_, "serializeMode", array()) == "finished")) {
                // line 20
                echo "        <span class=\"label label-warning \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完结"), "html", null, true);
                echo "</span>
      ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "  </h1>

  <div class=\"teachers\">
    ";
        // line 26
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "teacherIds", array()), null)) : (null))) {
            // line 27
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师："), "html", null, true);
            echo "
      ";
            // line 28
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "teacherIds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 29
                echo "        ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["user"] = $this->getAttribute($_users_, $_id_, array(), "array");
                // line 30
                echo "        <a href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                echo "\" >";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "  </div>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 36
        if (isset($context["manage"])) { $_manage_ = $context["manage"]; } else { $_manage_ = null; }
        if ( !$_manage_) {
            // line 37
            echo "    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
            // line 38
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_create", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\" data-role=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
            echo "\" data-placement=\"top\" href=\"#modal\">
        <i class=\"esicon esicon-like\"></i> ";
            // line 39
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum", array()), "html", null, true);
            echo "</a>
      ";
            // line 40
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if (isset($context["isAdmin"])) { $_isAdmin_ = $context["isAdmin"]; } else { $_isAdmin_ = null; }
            if (((($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1) || ((($this->getAttribute($_member_, "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "role", array()), "student")) : ("student")) == "teacher")) || $_isAdmin_)) {
                // line 41
                echo "        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_members", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\" data-role=\"tooltip\" title=\"查看";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                echo "的学习进度, 还可以发私信进行联系!\" data-placement=\"bottom\"
          href=\"#modal\"><i class=\"esicon esicon-user\"></i> ";
                // line 42
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum", array()), "html", null, true);
                echo "</a>
      ";
            }
            // line 44
            echo "
      <div class=\"btn-group\" data-role=\"tooltip\" title=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享到"), "html", null, true);
            echo "\" data-placement=\"left\" >
        <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
          <i class=\"esicon esicon-share\"></i>
        </button>
        ";
            // line 49
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Course:header.html.twig", 49)->display(array_merge($context, array("type" => "course", "right" => true)));
            // line 50
            echo "      </div>
      ";
            // line 51
            if (isset($context["canExit"])) { $_canExit_ = $context["canExit"]; } else { $_canExit_ = null; }
            if ($_canExit_) {
                // line 52
                echo "        ";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ((($this->getAttribute($_member_, "joinedType", array()) == "course") && $this->getAttribute($_member_, "orderId", array()))) {
                    // line 53
                    echo "        <a class=\"btn btn-default btn-sm \" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出学习"), "html", null, true);
                    echo "\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute($_course_, "id", array()), "targetType" => "course")), "html", null, true);
                    echo "\">
        <i class=\"esicon esicon-exit\"></i></a>
        ";
                } else {
                    // line 56
                    echo "        <a class=\"btn btn-default btn-sm course-exit-btn\" id=\"exit-course-learning\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出学习"), "html", null, true);
                    echo "\" type=\"button\"  href=\"javascript:;\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                    echo "\"  data-goto=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                    echo "\">
        <i class=\"esicon esicon-exit\"></i></a>
        ";
                }
                // line 59
                echo "      ";
            }
            // line 60
            echo "      ";
            if (isset($context["canManage"])) { $_canManage_ = $context["canManage"]; } else { $_canManage_ = null; }
            if ($_canManage_) {
                // line 61
                echo "      <a class=\"btn btn-default btn-sm \" type=\"button\" href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
                echo "\"  >
      <i class=\"esicon esicon-setting\"></i>
      </a>
      ";
            }
            // line 65
            echo "    </div>

    ";
        } else {
            // line 68
            echo "
      ";
            // line 69
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "status", array()) == "published")) {
                // line 70
                echo "        <div class=\"btn-group\">
          <a class=\"btn btn-default btn-sm\" href=\"";
                // line 71
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程主页"), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 74
            echo "
      <div class=\"btn-group\">
        <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览"), "html", null, true);
            echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu pull-right\">
          <li><a href=\"";
            // line 78
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "member")), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作为 已购买用户"), "html", null, true);
            echo "</a></li>
          <li><a href=\"";
            // line 79
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "guest")), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作为 未购买用户"), "html", null, true);
            echo "</a></li>
        </ul>
      </div>

      ";
            // line 83
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "status", array()) != "published")) {
                // line 84
                echo "        <div class=\"btn-group\">
          <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"";
                // line 85
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_publish", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布课程"), "html", null, true);
                echo "</button>
        </div>
      ";
            }
            // line 88
            echo "
    ";
        }
        // line 90
        echo "  </div>
</div>

";
        // line 93
        if (isset($context["vipChecked"])) { $_vipChecked_ = $context["vipChecked"]; } else { $_vipChecked_ = null; }
        if ((((array_key_exists("vipChecked", $context)) ? (_twig_default_filter($_vipChecked_, "ok")) : ("ok")) != "ok")) {
            // line 94
            echo "  <div class=\"alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            // line 96
            if (isset($context["vipChecked"])) { $_vipChecked_ = $context["vipChecked"]; } else { $_vipChecked_ = null; }
            if (($_vipChecked_ == "not_member")) {
                // line 97
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您已经不是会员，不能学习此课程！"), "html", null, true);
                echo "
      ";
                // line 98
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "price", array()) > 0)) {
                    // line 99
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请重新"), "html", null, true);
                    echo "<a class=\"alert-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开通会员"), "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 101
                    echo "        <a class=\"alert-link js-exit-course\" href=\"javascript:;\" data-url=\"";
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
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("！"), "html", null, true);
                echo "
    ";
            } elseif (($_vipChecked_ == "member_expired")) {
                // line 104
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的会员已过期，不能学习此课程，请先"), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_renew");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("续费"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                echo "
    ";
            } elseif (($_vipChecked_ == "level_low")) {
                // line 106
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员等级不够，不能学习此课程。请先"), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_upgrade");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级会员"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                echo "
    ";
            } else {
                // line 108
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课程已不支持会员免费学，"), "html", null, true);
                echo "<a class=\"alert-link js-exit-course\" href=\"javascript:;\" data-url=\"";
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
            // line 110
            echo "  </div>
";
        }
        // line 112
        echo "
";
        // line 113
        if (isset($context["isNonExpired"])) { $_isNonExpired_ = $context["isNonExpired"]; } else { $_isNonExpired_ = null; }
        if ( !$_isNonExpired_) {
            // line 114
            echo "  <div class=\"alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    您购买的课程已到期，无法学习课时、提问等。如有疑问，请联系老师，或点击
      <a class=\"btn btn-primary btn-sm \"  href=\"";
            // line 117
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">
      ";
            // line 118
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "price", array()) > 0)) {
                // line 119
                echo "        重新购买
      ";
            } else {
                // line 121
                echo "        重新加入
      ";
            }
            // line 123
            echo "    </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 123,  418 => 121,  414 => 119,  411 => 118,  406 => 117,  401 => 114,  398 => 113,  395 => 112,  391 => 110,  377 => 108,  365 => 106,  353 => 104,  348 => 102,  336 => 101,  326 => 99,  323 => 98,  318 => 97,  315 => 96,  311 => 94,  308 => 93,  303 => 90,  299 => 88,  290 => 85,  287 => 84,  284 => 83,  274 => 79,  267 => 78,  262 => 76,  258 => 74,  249 => 71,  246 => 70,  243 => 69,  240 => 68,  235 => 65,  224 => 61,  220 => 60,  217 => 59,  204 => 56,  194 => 53,  190 => 52,  187 => 51,  184 => 50,  182 => 49,  175 => 45,  172 => 44,  166 => 42,  158 => 41,  154 => 40,  149 => 39,  142 => 38,  139 => 37,  136 => 36,  131 => 33,  128 => 32,  115 => 30,  110 => 29,  105 => 28,  100 => 27,  97 => 26,  92 => 23,  89 => 22,  83 => 20,  77 => 18,  73 => 17,  67 => 15,  61 => 13,  58 => 12,  49 => 11,  42 => 9,  39 => 8,  32 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
