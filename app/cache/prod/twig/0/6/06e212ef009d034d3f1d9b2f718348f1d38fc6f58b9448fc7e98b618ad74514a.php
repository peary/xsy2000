<?php

/* ClassroomBundle:ClassroomManage/Course:course-pick-modal.html.twig */
class __TwigTemplate_06e212ef009d034d3f1d9b2f718348f1d38fc6f58b9448fc7e98b618ad74514a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "ClassroomBundle:ClassroomManage/Course:course-pick-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "选择课程";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<style>
.course-item:hover {
    cursor: pointer;
}
.course-wide-list .course-item .select{

}
</style>

<div class=\"alert alert-info\" role=\"alert\">加入";
        // line 16
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "的课程为选中的原课程复制生成，并与原课程实时同步更新。如需解除同步，请对该课程进行编辑。
</div>

<form class=\"form-inline form-search\" role=\"search-form\">
      <div class=\"form-group \">
        <input type=\"text\" class=\"form-control\" name=\"key\" id=\"enterSearch\" value=\"\" placeholder=\"课程名称\" data-url=\"";
        // line 21
        if (isset($context["classroomId"])) { $_classroomId_ = $context["classroomId"]; } else { $_classroomId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_search", array("classroomId" => $_classroomId_)), "html", null, true);
        echo "\">
      </div>
      <button type=\"button\" class=\"btn btn-primary\"  id=\"search\"  data-url=\"";
        // line 23
        if (isset($context["classroomId"])) { $_classroomId_ = $context["classroomId"]; } else { $_classroomId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_search", array("classroomId" => $_classroomId_)), "html", null, true);
        echo "\">搜索</button>
      <a class=\"btn btn-primary\" id=\"all-courses\" data-url=\"";
        // line 24
        if (isset($context["classroomId"])) { $_classroomId_ = $context["classroomId"]; } else { $_classroomId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses_pick", array("classroomId" => $_classroomId_)), "html", null, true);
        echo "\">全部课程</a>
</form>

<div class=\"row mtl\">
    <div class=\"col-md-12\">
      <div class=\"courses-list\">
        ";
        // line 30
        $this->loadTemplate("TopxiaWebBundle:Course:course-select-list.html.twig", "ClassroomBundle:ClassroomManage/Course:course-pick-modal.html.twig", 30)->display($context);
        // line 31
        echo "        ";
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
      </div>
    </div>
</div>

";
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "  <button id=\"sure\" class=\"btn btn-primary pull-right\" data-url=\"";
        if (isset($context["classroomId"])) { $_classroomId_ = $context["classroomId"]; } else { $_classroomId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses_select", array("id" => $_classroomId_)), "html", null, true);
        echo "\">添加</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

    <script>app.load('classroombundle/controller/classroom/manage/course/pick')</script>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage/Course:course-pick-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 39,  97 => 38,  84 => 31,  82 => 30,  72 => 24,  67 => 23,  61 => 21,  53 => 16,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
