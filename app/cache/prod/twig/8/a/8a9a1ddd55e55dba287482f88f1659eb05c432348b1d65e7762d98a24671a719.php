<?php

/* TopxiaWebBundle:CourseManage:teachers.html.twig */
class __TwigTemplate_8a9a1ddd55e55dba287482f88f1659eb05c432348b1d65e7762d98a24671a719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate($this->getContext($context, "layout"), "TopxiaWebBundle:CourseManage:teachers.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "type", array()) == "open") || ($this->getAttribute($_course_, "type", array()) == "liveOpen"))) {
            // line 2
            $context["layout"] = "TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig";
        } else {
            // line 4
            $context["layout"] = "TopxiaWebBundle:CourseManage:layout.html.twig";
        }
        // line 10
        $context["side_nav"] = "teachers";
        // line 11
        $context["script_controller"] = "course-manage/teachers";
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "
<style>

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}

</style>

<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师设置"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">

    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 48
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "type", array()) == "open") || ($this->getAttribute($_course_, "type", array()) == "liveOpen"))) {
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_teachers", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        } else {
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_teachers", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        }
        echo "\">
      ";
        // line 49
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\" id=\"teachers-form-group\">
        <div class=\"col-md-2 control-label\"><label>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已添加教师"), "html", null, true);
        echo "</label></div>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group teacher-list-group sortable-list\" id=\"teacher-list-group\" data-role=\"list\" style=\"display:none;\"></ul>
          <div class=\"input-group\">
            ";
        // line 56
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context["url"] = ($this->env->getExtension('routing')->getPath("course_manage_teachers_match", array("id" => $this->getAttribute($_course_, "id", array()))) . "?q={{query}}");
        // line 57
        echo "            <input class=\"form-control\" id=\"teacher-input\" type=\"text\" data-role=\"item-input\" data-url=\"";
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $_url_, "html", null, true);
        echo "\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" id=\"teacher-add\" >";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
        echo "</button>
            </span>
          </div>
          <div>
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("只能添加有教师权限的用户"), "html", null, true);
        echo "
          </div>

          <script type=\"text/plain\" data-role=\"model\">";
        // line 66
        if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
        echo twig_jsonencode_filter($_teachers_);
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
              ";
        // line 78
        echo "

              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                <img src=\"{{ avatar }}\" class=\"avatar-small\">
                <span class=\"nickname\">{{ nickname }}</span>
                <label class=\"visible-checkbox\"><input type=\"checkbox\" value=\"1\" name=\"visible_{{ id }}\" {{#if isVisible }}checked=\"checked\"{{/if}}> 显示</label>
                <input type=\"hidden\" name=\"ids[]\" value=\"{{ id }}\">
                <button  class=\"close delete-btn\" data-role=\"item-delete\" type=\"button\" title=\"删除\" >&times; </button>
              </li>
            ";
        echo "
          </script>

          
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <button type=\"submit\" class=\"btn btn-fat btn-primary\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
        </div>
      </div>

      ";
        // line 91
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["capacity"])) { $_capacity_ = $context["capacity"]; } else { $_capacity_ = null; }
        if ((twig_in_filter($this->getAttribute($_course_, "type", array()), array(0 => "live", 1 => "liveOpen")) && ((($this->getAttribute($_capacity_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_capacity_, "code", array()), 0)) : (0)) == 4))) {
            // line 92
            echo "        <div class=\"help-block\">
          提示：排序第一位的老师默认为 <b>直播课堂管理员</b>，直播课堂管理员拥有 <b>直播课堂最高权限</b>
        </div>
      ";
        }
        // line 96
        echo "      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 96,  179 => 92,  175 => 91,  168 => 87,  146 => 78,  140 => 66,  134 => 63,  127 => 59,  120 => 57,  117 => 56,  110 => 52,  103 => 49,  92 => 48,  86 => 45,  53 => 14,  50 => 13,  42 => 8,  38 => 6,  36 => 11,  34 => 10,  31 => 4,  28 => 2,  25 => 1,  19 => 6,);
    }
}
