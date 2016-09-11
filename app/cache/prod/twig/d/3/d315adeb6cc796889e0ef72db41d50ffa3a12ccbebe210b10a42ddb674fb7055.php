<?php

/* TopxiaWebBundle:Course:course-select-list.html.twig */
class __TwigTemplate_d315adeb6cc796889e0ef72db41d50ffa3a12ccbebe210b10a42ddb674fb7055 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:course-select-list.html.twig", 1);
        // line 2
        echo "<style>
.course-wide-list .enabled:hover{

    background: #eee;
    border-color: #ddd;
}

.course-wide-list .enabled{

    cursor: default;
    background: #eee;
}

</style>
<ul class=\"course-wide-list\">
  ";
        // line 17
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 18
            echo "  ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_courses_);
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 19
                echo "
  <li class=\"course-item clearfix\"   data-id=\"";
                // line 20
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
                echo "\" >
    <a class=\"course-picture-link\" href=\"";
                // line 21
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
      <img class=\"course-picture\" src=\"";
                // line 22
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
                echo "\">
    </a>
    <div class=\"course-body\">
      <div style=\"float:right;\" class=\"text-muted mrm mls\">
        ";
                // line 26
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 27
                    echo "          <span class=\"course-price\" style=\"display:inline\">
            ";
                    // line 28
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price", array()) > 0)) {
                        // line 29
                        echo "               ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格："), "html", null, true);
                        echo " ";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, ($this->getAttribute($_course_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 31
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                        echo "
            ";
                    }
                    // line 33
                    echo "          </span>
        ";
                } else {
                    // line 35
                    echo "          <span class=\"course-price\">
            ";
                    // line 36
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price", array()) > 0)) {
                        // line 37
                        echo "               ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格："), "html", null, true);
                        echo " ";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 39
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                        echo "
            ";
                    }
                    // line 41
                    echo "          </span>
        ";
                }
                // line 43
                echo "
        ";
                // line 44
                if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                    // line 45
                    echo "          <span class=\"divider\"></span>
          <span class=\"text-muted mrm mls\"><strong>";
                    // line 46
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum", array()), "html", null, true);
                    echo "</strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                    echo "</span>
        ";
                }
                // line 48
                echo "
      </div>

      <h4 class=\"course-title\"><a href=\"";
                // line 51
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
                echo "</a>
      ";
                // line 52
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "serializeMode", array()) == "serialize")) {
                    // line 53
                    echo "        <span class=\"label label-success \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新中"), "html", null, true);
                    echo "</span>
      ";
                } elseif (($this->getAttribute($_course_, "serializeMode", array()) == "finished")) {
                    // line 55
                    echo "        <span class=\"label label-warning \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完结"), "html", null, true);
                    echo "</span>
      ";
                }
                // line 57
                echo "
      ";
                // line 58
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "type", array()) == "live")) {
                    // line 59
                    echo "          ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array(), "array"), null)) : (null));
                    // line 60
                    echo "          ";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    if ((($_lesson_ && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($_lesson_, "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($_lesson_, "endTime", array())))) {
                        // line 61
                        echo "            <span class=\"label label-warning\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在直播中"), "html", null, true);
                        echo "</span>
          ";
                    } else {
                        // line 63
                        echo "            <span class=\"label label-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播"), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 65
                    echo "      ";
                }
                // line 66
                echo "      </h4>

      ";
                // line 68
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "type", array()) == "live")) {
                    // line 69
                    echo "        ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array()), null)) : (null));
                    // line 70
                    echo "        ";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    if ($_lesson_) {
                        // line 71
                        echo "          <div class=\"live-course-lesson mbm\">
            <span class=\"text-success fsm mrm\">";
                        // line 72
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "startTime", array()), "n月j日 H:i"), "html", null, true);
                        echo " ~ ";
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "endTime", array()), "H:i"), "html", null, true);
                        echo "</span>
            <span class=\"text-muted fsm mrm\">第";
                        // line 73
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number", array()), "html", null, true);
                        echo "课时</span>
          </div>
        ";
                    }
                    // line 76
                    echo "      ";
                } else {
                    // line 77
                    echo "        <div class=\"course-about ellipsis\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "subtitle", array()), "html", null, true);
                    echo "</div>
      ";
                }
                // line 79
                echo "
      <div class=\"course-footer clearfix\">
        ";
                // line 81
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["teacher"] = (($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds", array())), array(), "array"), null)) : (null));
                // line 82
                echo "        ";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                if ($_teacher_) {
                    // line 83
                    echo "          <div class=\"teacher\">
            <a href=\"";
                    // line 84
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><img src=\"";
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_teacher_, "smallAvatar", array()), "course.png"), "html", null, true);
                    echo "\" class=\"teacher-avatar\"></a>
            <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                    // line 85
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
                    echo "\">";
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname", array()), "html", null, true);
                    echo "</a>
            <span class=\"teacher-title ellipsis\">";
                    // line 86
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "title", array()), "html", null, true);
                    echo "</span>
          </div>
        ";
                }
                // line 89
                echo "
        <div class=\"course-metas-";
                // line 90
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
                echo "\" style=\"display:none;\">
          <span class=\"glyphicon glyphicon-ok pull-right\" style=\"z-index:100;color:#02b980;font-size:30px;\"></span>
        </div>

      </div>
    </div>
  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "  ";
        } else {
            // line 99
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("找不到相关课程！"), "html", null, true);
            echo "</div>
  ";
        }
        // line 101
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:course-select-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 101,  300 => 99,  297 => 98,  282 => 90,  279 => 89,  272 => 86,  264 => 85,  256 => 84,  253 => 83,  249 => 82,  245 => 81,  241 => 79,  234 => 77,  231 => 76,  224 => 73,  216 => 72,  213 => 71,  209 => 70,  205 => 69,  202 => 68,  198 => 66,  195 => 65,  189 => 63,  183 => 61,  179 => 60,  175 => 59,  172 => 58,  169 => 57,  163 => 55,  157 => 53,  154 => 52,  146 => 51,  141 => 48,  133 => 46,  130 => 45,  128 => 44,  125 => 43,  121 => 41,  115 => 39,  105 => 37,  102 => 36,  99 => 35,  95 => 33,  89 => 31,  79 => 29,  76 => 28,  73 => 27,  71 => 26,  60 => 22,  55 => 21,  50 => 20,  47 => 19,  41 => 18,  38 => 17,  21 => 2,  19 => 1,);
    }
}
