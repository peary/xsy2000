<?php

/* ClassroomBundle:ClassroomManage:index.html.twig */
class __TwigTemplate_2da27dcf789b5cb1b6a32beb945b4378a5f0c0b33856e4a2590d2a7902f8edd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:index.html.twig", 1);
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
        $context["side_nav"] = "main";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $context["unsetted"] = "";
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-body\">
    ";
        // line 14
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>设置</h4>
          <table class=\"table\">
            <tr>
              <td>简介</td>
              ";
        // line 22
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ( !$this->getAttribute($_classroom_, "about", array())) {
            // line 23
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 24
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">
                    未设置 <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 28
            if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
            $context["unsetted"] = ($_unsetted_ . ",简介");
            // line 29
            echo "              ";
        } else {
            // line 30
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 34
        echo "            </tr>
            <tr>
              <td>图片</td>
              ";
        // line 37
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ( !$this->getAttribute($_classroom_, "smallPicture", array())) {
            // line 38
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 39
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">
                    未设置 <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 43
            if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
            $context["unsetted"] = ($_unsetted_ . ",图片");
            // line 44
            echo "              ";
        } else {
            // line 45
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 49
        echo "            </tr>
            <tr>
              <td>价格</td>
              <td>
                <a class=\"btn btn-info btn-xs pull-right\" href=\"";
        // line 53
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 54
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 55
            echo "                    ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($_classroom_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
                    ";
            // line 56
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if ((($this->getAttribute($_classroom_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")) == 0)) {
                // line 57
                echo "                      ";
                if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
                $context["unsetted"] = ($_unsetted_ . ",价格");
                // line 58
                echo "                    ";
            }
            // line 59
            echo "                  ";
        } else {
            // line 60
            echo "                    ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "price", array()), "html", null, true);
            echo "元
                    ";
            // line 61
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (($this->getAttribute($_classroom_, "price", array()) == 0)) {
                // line 62
                echo "                      ";
                if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
                $context["unsetted"] = ($_unsetted_ . ",价格");
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                  ";
        }
        // line 65
        echo "                  <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>课程</h4>
          <table class=\"table\">
            <tr>
              <td>课程数</td>
              <td>
                <a class=\"btn btn-";
        // line 79
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "courseNum", array()) > 0)) {
            echo "info";
        } else {
            echo "danger";
        }
        echo " btn-xs pull-right\" href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 80
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_classroom_, "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_classroom_, "courseNum", array()), 0)) : (0)), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
              ";
        // line 83
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "courseNum", array()) == 0)) {
            // line 84
            echo "                ";
            if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
            $context["unsetted"] = ($_unsetted_ . ",课程");
            // line 85
            echo "              ";
        }
        // line 86
        echo "            </tr>
            <tr>
              <td>课时数</td>
              <td><span class=\"label label-default pull-right\">";
        // line 89
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "lessonNum", array()), "html", null, true);
        echo "</span></td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>学员</h4>
          <table class=\"table\">
            <tr>
              <td>学员数</td>
              <td>
                <a class=\"btn ";
        // line 101
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "studentNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_students", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 102
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "studentNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>旁听生数</td>
              <td>
                <a class=\"btn ";
        // line 109
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "auditorNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_aduitor", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 110
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "auditorNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    ";
        // line 118
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "published")) {
            // line 119
            echo "      <hr>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <h4>";
            // line 122
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "学习情况</h4>
          <table class=\"table\">
            <thead>
              <th></th>
              <th>昨日</th>
              <th>今日</th>
            </thead>
            <tr>
              <td>全部学员数</td>
              <td>";
            // line 131
            if (isset($context["yestodayAllCount"])) { $_yestodayAllCount_ = $context["yestodayAllCount"]; } else { $_yestodayAllCount_ = null; }
            echo twig_escape_filter($this->env, $_yestodayAllCount_, "html", null, true);
            echo "</td>
              <td>";
            // line 132
            if (isset($context["allCount"])) { $_allCount_ = $context["allCount"]; } else { $_allCount_ = null; }
            echo twig_escape_filter($this->env, $_allCount_, "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>正式学员数</td>
              <td>";
            // line 136
            if (isset($context["yestodayStudentCount"])) { $_yestodayStudentCount_ = $context["yestodayStudentCount"]; } else { $_yestodayStudentCount_ = null; }
            echo twig_escape_filter($this->env, $_yestodayStudentCount_, "html", null, true);
            echo "</td>
              <td>";
            // line 137
            if (isset($context["studentCount"])) { $_studentCount_ = $context["studentCount"]; } else { $_studentCount_ = null; }
            echo twig_escape_filter($this->env, $_studentCount_, "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>课时完成学习数</td>
              <td>";
            // line 141
            if (isset($context["yesterdayFinishedLessonNum"])) { $_yesterdayFinishedLessonNum_ = $context["yesterdayFinishedLessonNum"]; } else { $_yesterdayFinishedLessonNum_ = null; }
            echo twig_escape_filter($this->env, $_yesterdayFinishedLessonNum_, "html", null, true);
            echo "</td>
              <td>";
            // line 142
            if (isset($context["todayFinishedLessonNum"])) { $_todayFinishedLessonNum_ = $context["todayFinishedLessonNum"]; } else { $_todayFinishedLessonNum_ = null; }
            echo twig_escape_filter($this->env, $_todayFinishedLessonNum_, "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>新增话题数</td>
                <td>";
            // line 146
            if (isset($context["yesterdayThreadCount"])) { $_yesterdayThreadCount_ = $context["yesterdayThreadCount"]; } else { $_yesterdayThreadCount_ = null; }
            echo twig_escape_filter($this->env, $_yesterdayThreadCount_, "html", null, true);
            echo "</td>
                <td>";
            // line 147
            if (isset($context["todayThreadCount"])) { $_todayThreadCount_ = $context["todayThreadCount"]; } else { $_todayThreadCount_ = null; }
            echo twig_escape_filter($this->env, $_todayThreadCount_, "html", null, true);
            echo "</td>
            </tr>
          </table>
        </div>

        <div class=\"col-md-6 reviews\">
          <h4>最新评价</h4>
          <br>
          ";
            // line 155
            if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
            if ($_reviews_) {
                // line 156
                echo "            ";
                if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_reviews_);
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
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 157
                    echo "              ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "index", array()) <= 4)) {
                        // line 158
                        echo "                <div class=\"media\">
                  <div class=\"pull-left\">
                    <span class=\"class-name\">";
                        // line 160
                        if (isset($context["reviewUsers"])) { $_reviewUsers_ = $context["reviewUsers"]; } else { $_reviewUsers_ = null; }
                        if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_reviewUsers_, $this->getAttribute($_review_, "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                        echo "</span>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"stars-";
                        // line 163
                        if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_review_, "rating", array())), "html", null, true);
                        echo "\"></div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<time>";
                        // line 164
                        if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_review_, "createdTime", array())), "html", null, true);
                        echo "</time>                                                    
                    <button class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        // line 165
                        if (isset($context["reviewUsers"])) { $_reviewUsers_ = $context["reviewUsers"]; } else { $_reviewUsers_ = null; }
                        if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($this->getAttribute($_reviewUsers_, $this->getAttribute($_review_, "userId", array()), array(), "array"), "id", array()))), "html", null, true);
                        echo "\" style=\"float:right;\">私信</button>
                  </div>
                  <p>";
                        // line 167
                        if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_review_, "content", array()), 40);
                        echo "</p>
                </div>
              ";
                    }
                    // line 170
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "          ";
            } else {
                // line 172
                echo "            <div class=\"empty\">该";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "尚无评价</div>
          ";
            }
            // line 174
            echo "        </div>
      </div>
      <hr>
    ";
        }
        // line 178
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 178,  451 => 174,  445 => 172,  442 => 171,  428 => 170,  421 => 167,  414 => 165,  409 => 164,  404 => 163,  396 => 160,  392 => 158,  388 => 157,  369 => 156,  366 => 155,  354 => 147,  349 => 146,  341 => 142,  336 => 141,  328 => 137,  323 => 136,  315 => 132,  310 => 131,  298 => 122,  293 => 119,  290 => 118,  278 => 110,  266 => 109,  255 => 102,  243 => 101,  227 => 89,  222 => 86,  219 => 85,  215 => 84,  212 => 83,  205 => 80,  193 => 79,  177 => 65,  174 => 64,  171 => 63,  167 => 62,  164 => 61,  158 => 60,  155 => 59,  152 => 58,  148 => 57,  145 => 56,  137 => 55,  135 => 54,  130 => 53,  124 => 49,  118 => 45,  115 => 44,  112 => 43,  104 => 39,  101 => 38,  98 => 37,  93 => 34,  87 => 30,  84 => 29,  81 => 28,  73 => 24,  70 => 23,  67 => 22,  55 => 14,  50 => 11,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
