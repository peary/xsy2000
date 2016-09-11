<?php

/* ClassroomBundle:ClassroomManage:courses.html.twig */
class __TwigTemplate_06cd869361ffd2f2fab7a763e918a9ce7a4baabbdd9fe4b22f1489345bb2f8ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:courses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom/course";
        // line 6
        $context["side_nav"] = "courses";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<style>

.sort{
    padding-top: 50px;
    padding-right: 20px;
    padding-left: 20px;
}

.price{
  color: #e57259;
  font-size: 16px;
}

</style>

";
        // line 25
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        $context["url"] = $this->env->getExtension('routing')->getPath("classroom_courses_select", array("id" => $this->getAttribute($_classroom_, "id", array())));
        echo "       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">课程管理
    <button class=\"btn btn-success btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 28
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses_pick", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">添加课程</button></div>
  <div class=\"panel-body\">

        <form id=\"courses-form\" class=\"form-horizontal\" method=\"post\">
          ";
        // line 32
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

          <div class=\"form-group\" id=\"courses-form-group\">
            <div class=\"col-md-12 controls\">
              <ul class=\"course-list-group sortable-list course-wide-list courses-selected\" id=\"course-list-group\" data-role=\"list\" >

                ";
        // line 38
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_courses_);
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 39
            echo "
                <li class=\"course-item item-";
            // line 40
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
            echo " clearfix\" data-role=\"item\" >
                <input type=\"hidden\" name=\"courseIds[]\" value=\"";
            // line 41
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
            echo "\" />
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle sort\"></span>    <a class=\"course-picture-link\" href=\"";
            // line 42
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
            // line 43
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
            echo "\">
                    </a>
                        <button class=\"close delete-btn pull-right mrl mts mll\" data-role=\"item-delete\" type=\"button\" title=\"删除\" style=\"font-size:35px;\" data-id=\"";
            // line 45
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
            echo "\">× </button>
                    <div class=\"course-body\">
                     <div style=\"float:right;\" class=\"text-muted mrm mls\">
                        ";
            // line 48
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 49
                echo "                            <span class=\"course-price course-price-";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
                echo "\" style=\"display:inline\" data-price=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, ($this->getAttribute($_course_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                echo "\">
                              ";
                // line 50
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "price", array()) > 0)) {
                    // line 51
                    echo "                                ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, ($this->getAttribute($_course_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo "
                                ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                              ";
                } else {
                    // line 54
                    echo "                                免费
                              ";
                }
                // line 56
                echo "                            </span>

                        ";
            } else {
                // line 59
                echo "                          <span class=\"course-price course-price-";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
                echo "\" data-price=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
                echo "\">
                            ";
                // line 60
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "price", array()) > 0)) {
                    // line 61
                    echo "                              ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
                    echo " 元
                            ";
                } else {
                    // line 63
                    echo "                              免费
                            ";
                }
                // line 65
                echo "                          </span>
                        ";
            }
            // line 67
            echo "                      </div>

                      <h4 class=\"course-title\"><a href=\"";
            // line 69
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
            echo "</a>
                      ";
            // line 70
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "serializeMode", array()) == "serialize")) {
                // line 71
                echo "                        <span class=\"label label-success \">更新中</span>
                      ";
            } elseif (($this->getAttribute($_course_, "serializeMode", array()) == "finished")) {
                // line 73
                echo "                        <span class=\"label label-warning \">已完结</span>
                      ";
            }
            // line 75
            echo "                      ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "type", array()) == "live")) {
                // line 76
                echo "                          ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array(), "array"), null)) : (null));
                // line 77
                echo "                          ";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ((($_lesson_ && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($_lesson_, "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($_lesson_, "endTime", array())))) {
                    // line 78
                    echo "                            <span class=\"label label-warning\">正在直播中</span>
                          ";
                } else {
                    // line 80
                    echo "                            <span class=\"label label-success\">直播</span>
                          ";
                }
                // line 82
                echo "                      ";
            }
            // line 83
            echo "                      </h4>

                      ";
            // line 85
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "type", array()) == "live")) {
                // line 86
                echo "                        ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array()), null)) : (null));
                // line 87
                echo "                        ";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ($_lesson_) {
                    // line 88
                    echo "                          <div class=\"live-course-lesson mbm\">
                            <span class=\"text-success fsm mrm\">";
                    // line 89
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo " ~ ";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "endTime", array()), "H:i"), "html", null, true);
                    echo "</span>
                            <span class=\"text-muted fsm mrm\">第";
                    // line 90
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number", array()), "html", null, true);
                    echo "课时</span>
                          </div>
                        ";
                }
                // line 93
                echo "                      ";
            } else {
                // line 94
                echo "                        <div class=\"course-about ellipsis\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "subtitle", array()), "html", null, true);
                echo "</div>
                      ";
            }
            // line 96
            echo "
                      <div class=\"course-footer clearfix\">
                        ";
            // line 98
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["teacher"] = (($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds", array())), array(), "array"), null)) : (null));
            // line 99
            echo "                        ";
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            if ($_teacher_) {
                // line 100
                echo "                          <div class=\"teacher\">
                            <a href=\"";
                // line 101
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_teacher_, "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"teacher-avatar\"></a>
                            <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                // line 102
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
                echo "\">";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname", array()), "html", null, true);
                echo "</a>
                            <span class=\"teacher-title ellipsis\">";
                // line 103
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "title", array()), "html", null, true);
                echo "</span>
                          </div>
                        ";
            }
            // line 106
            echo "
                        <div class=\"course-metas\">  

                          ";
            // line 109
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 110
                echo "                          <span class=\"text-muted text-sm\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                echo "</span>
                          <span class=\"divider\"></span>
                          ";
            }
            // line 112
            echo "  

                            <span class=\"text-muted text-sm\">
                                ";
            // line 115
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "lessonNum", array()), "html", null, true);
            echo "个课时
                            </span>
                            <span class=\"divider\"></span>
                            <span class=\"text-muted text-sm\">
                                有效期:
                                ";
            // line 120
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "expiryDay", array())) {
                // line 121
                echo "                                    ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "expiryDay", array()), "html", null, true);
                echo "天
                                ";
            } else {
                // line 123
                echo "                                    永久
                                ";
            }
            // line 125
            echo "                            </span>
                        </div>

                      </div>

                    </div>
                </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
              </ul>
            </div>  
          </div>

          ";
        // line 139
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 140
            echo "          <div class=\"alert alert-warning pull-right\">若";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "课程被移除，则该课程内所有学习数据将被清空。</div>
          <div class=\"form-group\">
            <div class=\"col-md-offset-9 col-md-3 controls\">
              <div class=\"mbl pull-right\">共计: &nbsp; &nbsp;
                  ";
            // line 144
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 145
                echo "                    <span class=\"price\" style=\"display:inline\">

                        <span  id=\"price\">";
                // line 147
                if (isset($context["coinPrice"])) { $_coinPrice_ = $context["coinPrice"]; } else { $_coinPrice_ = null; }
                echo twig_escape_filter($this->env, $_coinPrice_, "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "

                    </span>

                  ";
            } else {
                // line 152
                echo "                    <span class=\"price\">

                        <span id=\"price\">";
                // line 154
                if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
                echo twig_escape_filter($this->env, $_price_, "html", null, true);
                echo "</span>元
                      
                    </span>
                  ";
            }
            // line 158
            echo "  
              </div>

              <button type=\"submit\" class=\"btn btn-fat btn-primary pull-right\">保存修改</button>

            </div>  
          </div>
          ";
        } else {
            // line 166
            echo "          <div class=\"empty\">赶紧添加课程吧！</div>
          ";
        }
        // line 168
        echo "
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

        </form>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 169,  433 => 168,  429 => 166,  419 => 158,  411 => 154,  407 => 152,  396 => 147,  392 => 145,  390 => 144,  382 => 140,  379 => 139,  372 => 134,  358 => 125,  354 => 123,  347 => 121,  344 => 120,  335 => 115,  330 => 112,  321 => 110,  319 => 109,  314 => 106,  307 => 103,  299 => 102,  291 => 101,  288 => 100,  284 => 99,  280 => 98,  276 => 96,  269 => 94,  266 => 93,  259 => 90,  251 => 89,  248 => 88,  244 => 87,  240 => 86,  237 => 85,  233 => 83,  230 => 82,  226 => 80,  222 => 78,  218 => 77,  214 => 76,  210 => 75,  206 => 73,  202 => 71,  199 => 70,  191 => 69,  187 => 67,  183 => 65,  179 => 63,  172 => 61,  169 => 60,  160 => 59,  155 => 56,  151 => 54,  146 => 52,  140 => 51,  137 => 50,  128 => 49,  126 => 48,  119 => 45,  110 => 43,  105 => 42,  100 => 41,  95 => 40,  92 => 39,  87 => 38,  77 => 32,  69 => 28,  62 => 25,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
