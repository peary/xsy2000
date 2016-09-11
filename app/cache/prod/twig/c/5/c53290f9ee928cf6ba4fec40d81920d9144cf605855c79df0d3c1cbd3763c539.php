<?php

/* TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig */
class __TwigTemplate_c53290f9ee928cf6ba4fec40d81920d9144cf605855c79df0d3c1cbd3763c539 extends Twig_Template
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
        echo "<!-- 紧跟标题 -->
";
        // line 2
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["homeworkLessonIds"])) { $_homeworkLessonIds_ = $context["homeworkLessonIds"]; } else { $_homeworkLessonIds_ = null; }
        if (twig_in_filter($this->getAttribute($_item_, "id", array()), ((array_key_exists("homeworkLessonIds", $context)) ? (_twig_default_filter($_homeworkLessonIds_, null)) : (null)))) {
            // line 3
            echo "  <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-mylibrarybooks mls\"></i></span>
";
        }
        // line 5
        echo "
";
        // line 6
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["exercisesLessonIds"])) { $_exercisesLessonIds_ = $context["exercisesLessonIds"]; } else { $_exercisesLessonIds_ = null; }
        if (twig_in_filter($this->getAttribute($_item_, "id", array()), ((array_key_exists("exercisesLessonIds", $context)) ? (_twig_default_filter($_exercisesLessonIds_, null)) : (null)))) {
            // line 7
            echo "  <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("练习"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-exam mls color-gray mls\"></i></span>
";
        }
        // line 9
        echo "
";
        // line 10
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (($this->getAttribute($_item_, "materialNum", array()) > 0)) {
            // line 11
            echo "  <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资料"), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-paperclip mls\"></i></span>
";
        }
        // line 13
        echo "
";
        // line 14
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["fromPlugin"])) { $_fromPlugin_ = $context["fromPlugin"]; } else { $_fromPlugin_ = null; }
        if ((((($this->getAttribute($_app_, "user", array()) && $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit")) && ($this->getAttribute($_course_, "watchLimit", array()) > 0)) && ($this->getAttribute($_item_, "type", array()) == "video")) &&  !((array_key_exists("fromPlugin", $context)) ? (_twig_default_filter($_fromPlugin_, false)) : (false)))) {
            // line 15
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["lessonLearns"])) { $_lessonLearns_ = $context["lessonLearns"]; } else { $_lessonLearns_ = null; }
            $context["remainTime"] = (($this->getAttribute($_course_, "watchLimit", array()) * $this->getAttribute($_item_, "length", array())) - (($this->getAttribute($this->getAttribute($_lessonLearns_, $this->getAttribute($_item_, "id", array()), array(), "array", false, true), "watchTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_lessonLearns_, $this->getAttribute($_item_, "id", array()), array(), "array", false, true), "watchTime", array()), 0)) : (0)));
            // line 16
            echo "  ";
            if (isset($context["remainTime"])) { $_remainTime_ = $context["remainTime"]; } else { $_remainTime_ = null; }
            if (($_remainTime_ > 0)) {
                // line 17
                echo "    <small class=\"text text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还剩"), "html", null, true);
                echo " ";
                if (isset($context["remainTime"])) { $_remainTime_ = $context["remainTime"]; } else { $_remainTime_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationTextFilter($_remainTime_), "html", null, true);
                echo "</small>
  ";
            } else {
                // line 19
                echo "    <small class=\"text text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已达最大可看时长"), "html", null, true);
                echo "</small>
  ";
            }
        }
        // line 22
        echo "

<!-- 右边图标 -->
";
        // line 25
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (($this->getAttribute($_item_, "status", array()) == "published")) {
            // line 26
            echo "  ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "type", array()) == "video")) {
                // line 27
                echo "    <span class=\"date\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长"), "html", null, true);
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length", array())), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videoclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 32
            echo "
  ";
            // line 33
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "type", array()) == "audio")) {
                // line 34
                echo "    <span class=\"date\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频时长"), "html", null, true);
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length", array())), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-audioclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 39
            echo "
  ";
            // line 40
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "type", array()) == "text")) {
                // line 41
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-graphicclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图文课程"), "html", null, true);
                echo "\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图文"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 45
            echo "
  ";
            // line 46
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "type", array()) == "testpaper")) {
                // line 47
                echo "    
    ";
                // line 48
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["testpapers"])) { $_testpapers_ = $context["testpapers"]; } else { $_testpapers_ = null; }
                if ((((($this->getAttribute($_item_, "testStartTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_item_, "testStartTime", array()), null)) : (null)) && ($this->getAttribute($_item_, "testMode", array()) == "realTime")) && (($this->getAttribute($_testpapers_, $this->getAttribute($_item_, "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_testpapers_, $this->getAttribute($_item_, "mediaId", array()), array(), "array"), null)) : (null)))) {
                    // line 49
                    echo "      ";
                    if (isset($context["testpapers"])) { $_testpapers_ = $context["testpapers"]; } else { $_testpapers_ = null; }
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    $context["endTime"] = (($this->getAttribute($this->getAttribute($_testpapers_, $this->getAttribute($_item_, "mediaId", array()), array(), "array"), "limitedTime", array()) * 60) + $this->getAttribute($_item_, "testStartTime", array()));
                    // line 50
                    echo "      <span class=\"color-gray course-type \">
        ";
                    // line 51
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < $this->getAttribute($_item_, "testStartTime", array()))) {
                        // line 52
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试倒计时"), "html", null, true);
                        echo ":<span class=\"color-primary pls\">";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute($_item_, "testStartTime", array())), "html", null, true);
                        echo "</span>
        ";
                    } else {
                        // line 54
                        echo "          ";
                        if (isset($context["endTime"])) { $_endTime_ = $context["endTime"]; } else { $_endTime_ = null; }
                        if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < $_endTime_)) {
                            // line 55
                            echo "              ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试已开始"), "html", null, true);
                            echo "
          ";
                        } else {
                            // line 57
                            echo "              ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试已结束"), "html", null, true);
                            echo "
          ";
                        }
                        // line 59
                        echo "      ";
                    }
                    // line 60
                    echo "      </span>
    ";
                } else {
                    // line 62
                    echo "      <span class=\"course-type\">
        <i class=\"es-icon es-icon-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
                    echo "\" data-original-title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
                    echo "\"></i>
      </span>
    ";
                }
                // line 66
                echo "  ";
            }
            // line 67
            echo "
  ";
            // line 68
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "type", array()) == "ppt")) {
                // line 69
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-pptclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PPT课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 73
            echo "
  ";
            // line 74
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "type", array()) == "document")) {
                // line 75
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-description\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文档课程"), "html", null, true);
                echo "\" data-original-title=\"文档\"></i>
    </span>
  ";
            }
            // line 79
            echo "
  ";
            // line 80
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "type", array()) == "flash")) {
                // line 81
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-flashclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 85
            echo "
  ";
            // line 86
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "type", array()) == "live")) {
                // line 87
                echo "
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videocam\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播课程"), "html", null, true);
                echo "\"></i>
      ";
                // line 90
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["currentTime"])) { $_currentTime_ = $context["currentTime"]; } else { $_currentTime_ = null; }
                if (($this->getAttribute($_item_, "startTime", array()) > $_currentTime_)) {
                    // line 91
                    echo "        <small class=\"type\">";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime", array()), "m月d日"), "html", null, true);
                    echo "
          ";
                    // line 97
                    echo "          ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime", array()), "H：i"), "html", null, true);
                    echo "
        </small>
      ";
                } elseif ((($this->getAttribute($_item_, "startTime", array()) <= $_currentTime_) && ($this->getAttribute($_item_, "endTime", array()) >= $_currentTime_))) {
                    // line 100
                    echo "        <small class=\"type\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在直播中"), "html", null, true);
                    echo "</small>
      ";
                } elseif (($this->getAttribute($_item_, "endTime", array()) < $_currentTime_)) {
                    // line 102
                    echo "
        <small class=\"type\">
          ";
                    // line 104
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (twig_in_filter($this->getAttribute($_item_, "replayStatus", array()), array(0 => "generated", 1 => "videoGenerated"))) {
                        // line 105
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回放"), "html", null, true);
                        echo "
          ";
                    } else {
                        // line 107
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播结束"), "html", null, true);
                        echo "
          ";
                    }
                    // line 109
                    echo "        </small>

      ";
                }
                // line 112
                echo "    </span>
  ";
            }
            // line 114
            echo "
";
        } else {
            // line 116
            echo "  <span class=\"period-state\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("敬请期待"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 116,  342 => 114,  338 => 112,  333 => 109,  327 => 107,  321 => 105,  318 => 104,  314 => 102,  308 => 100,  300 => 97,  294 => 91,  290 => 90,  286 => 89,  282 => 87,  279 => 86,  276 => 85,  270 => 82,  267 => 81,  264 => 80,  261 => 79,  255 => 76,  252 => 75,  249 => 74,  246 => 73,  240 => 70,  237 => 69,  234 => 68,  231 => 67,  228 => 66,  220 => 63,  217 => 62,  213 => 60,  210 => 59,  204 => 57,  198 => 55,  194 => 54,  185 => 52,  182 => 51,  179 => 50,  174 => 49,  170 => 48,  167 => 47,  164 => 46,  161 => 45,  153 => 42,  150 => 41,  147 => 40,  144 => 39,  138 => 36,  127 => 34,  124 => 33,  121 => 32,  115 => 29,  104 => 27,  100 => 26,  97 => 25,  92 => 22,  85 => 19,  76 => 17,  72 => 16,  66 => 15,  60 => 14,  57 => 13,  51 => 11,  48 => 10,  45 => 9,  39 => 7,  35 => 6,  32 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
