<?php

/* ClassroomBundle:ClassroomManage:header.html.twig */
class __TwigTemplate_2ad6e2eae21d5820aba926f8ca5980a694da783b261e6262edff71e408511060 extends Twig_Template
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
        $context["unsetted"] = "";
        // line 2
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ( !$this->getAttribute($_classroom_, "about", array())) {
            // line 3
            if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
            $context["unsetted"] = ($_unsetted_ . ",简介");
        }
        // line 5
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ( !$this->getAttribute($_classroom_, "smallPicture", array())) {
            // line 6
            if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
            $context["unsetted"] = ($_unsetted_ . ",图片");
        }
        // line 8
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "price", array()) == 0)) {
            // line 9
            echo "  ";
            if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
            $context["unsetted"] = ($_unsetted_ . ",价格");
        }
        // line 11
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "courseNum", array()) == 0)) {
            // line 12
            if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
            $context["unsetted"] = ($_unsetted_ . ",课程");
        }
        // line 14
        echo "

<div class=\"es-section course-manage-header clearfix\">
  <img class=\"picture\" src=\"";
        // line 17
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_classroom_, "smallPicture", array()), "classroom.png"), "html", null, true);
        echo "\">
  <h1 class=\"title\"><a href=\"";
        // line 18
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 19
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "draft")) {
            // line 20
            echo "    <span class=\"label label-warning \">未发布</span>
    ";
        } elseif (($this->getAttribute($_classroom_, "status", array()) == "closed")) {
            // line 22
            echo "    <span class=\"label label-danger \">已关闭</span>
    ";
        }
        // line 24
        echo "    ";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "published")) {
            // line 25
            echo "    <span class=\"label label-success\"> 已发布</span>
    ";
        }
        // line 27
        echo "  </h1>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 30
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "published")) {
            // line 31
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle btn-sm\" href=\"";
            // line 32
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">返回";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "主页</a>
      </div>
    ";
        }
        // line 35
        echo "
    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-sm\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        预览 <span class=\"caret\"></span>
      </button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"";
        // line 41
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"blank\">作为未购买用户</a></li>
        ";
        // line 42
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ($this->getAttribute($_classroom_, "showable", array())) {
            // line 43
            echo "          <li><a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "previewAs" => "auditor")), "html", null, true);
            echo "\" target=\"blank\">作为旁听生</a></li>
        ";
        }
        // line 45
        echo "        <li><a href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\">作为正式学员</a></li>
      </ul>
    </div>


    ";
        // line 50
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) != "published")) {
            // line 51
            echo "      <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">
          发布
        </button>
      </div>

      <div id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
              <h4 class=\"modal-title\">发布";
            // line 62
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
            // line 66
            if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
            if ((twig_length_filter($this->env, $_unsetted_) > 0)) {
                // line 67
                echo "                ";
                if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
                $context["unsetted"] = twig_split_filter($this->env, $this->env->getExtension('topxia_web_twig')->subStr($_unsetted_, 1, (twig_length_filter($this->env, $_unsetted_) - 1)), ",");
                // line 68
                echo "                <span class=\"text-danger\">
                    ";
                // line 69
                if (isset($context["unsetted"])) { $_unsetted_ = $context["unsetted"]; } else { $_unsetted_ = null; }
                echo twig_escape_filter($this->env, twig_join_filter($_unsetted_, "，"), "html", null, true);
                echo "还未设置
                </span>
                ";
            }
            // line 72
            echo "                &nbsp;确定要发布吗？
              </p>
            </div>
            <div class=\"modal-footer\">
              <a data-dismiss=\"modal\" href=\"\">取消</a>&nbsp;
              <button type=\"button\" class=\"btn btn-success\" id=\"publishSure\" data-url=\"";
            // line 77
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_publish", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">确定</button>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 83
        echo "
  </div>
</div>

";
        // line 87
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/manage/publish");
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 87,  197 => 83,  187 => 77,  180 => 72,  173 => 69,  170 => 68,  166 => 67,  163 => 66,  156 => 62,  143 => 51,  140 => 50,  130 => 45,  123 => 43,  120 => 42,  115 => 41,  107 => 35,  98 => 32,  95 => 31,  92 => 30,  87 => 27,  83 => 25,  79 => 24,  75 => 22,  71 => 20,  68 => 19,  60 => 18,  55 => 17,  50 => 14,  46 => 12,  43 => 11,  38 => 9,  35 => 8,  31 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
