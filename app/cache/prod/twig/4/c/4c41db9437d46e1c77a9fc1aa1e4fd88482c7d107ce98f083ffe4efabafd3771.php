<?php

/* TopxiaWebBundle:CourseStudentManage:create-modal.html.twig */
class __TwigTemplate_4c41db9437d46e1c77a9fc1aa1e4fd88482c7d107ce98f083ffe4efabafd3771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:create-modal.html.twig", 1);
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
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"student-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_create", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 9
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "status", array()) == "published")) {
            // line 10
            echo "  \t<div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-nickname\">";
            // line 12
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-nickname\" name=\"queryfield\" class=\"form-control\"
        data-url=\"";
            // line 16
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_check", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\" placeholder='";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱/手机/用户名"), "html", null, true);
            echo "' >
      \t<div class=\"help-block\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("只能添加系统中已注册的用户"), "html", null, true);
            echo "</div>
    \t</div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"buy-price\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买价格"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <div class=\"input-group\">
          <input type=\"text\" id=\"buy-price\" name=\"price\" value=\"";
            // line 27
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
            echo "\" class=\"form-control\">
          <div class=\"input-group-addon\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo "</div>
        </div>
        <div class=\"help-block\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("本课程的价格为"), "html", null, true);
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo "</div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-remark\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("备注"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-remark\" name=\"remark\" class=\"form-control\">
        <div class=\"help-block\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选填"), "html", null, true);
            echo "</div>
      </div>
    </div>
  ";
        } else {
            // line 44
            echo "    <div class=\"empty\">";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus", $this->getAttribute($_course_, "status", array()));
            echo "课程不能添加";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "，请课程发布后再添加。</div>
  ";
        }
        // line 46
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "  ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "status", array()) == "published")) {
            // line 55
            echo "    <button id=\"student-create-form-submit\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#student-create-form\" data-submiting-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存"), "html", null, true);
            echo "...\" data-user=\"";
            if (isset($context["default"])) { $_default_ = $context["default"]; } else { $_default_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_default_, "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_default_, "user_name", array()), $this->env->getExtension('translator')->trans("学员"))) : ($this->env->getExtension('translator')->trans("学员"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
  ";
        }
        // line 57
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
  <script>app.load('course-manage/student-create')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 57,  164 => 55,  160 => 54,  157 => 53,  148 => 47,  145 => 46,  132 => 44,  125 => 40,  118 => 36,  106 => 30,  101 => 28,  96 => 27,  89 => 23,  80 => 17,  73 => 16,  62 => 12,  58 => 10,  55 => 9,  50 => 8,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
