<?php

/* TopxiaAdminBundle:Course:delete.html.twig */
class __TwigTemplate_c2dca7f1c252d1ea65244b669e425ee4b8cc22276bd797d19b51b84a479f562e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Course:delete.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "核实用户";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <form id=\"delete-form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_check_password");
        echo "\">
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"title\">用户密码</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"请输入你的登录密码\">
      </div>
    </div>
    <input type=\"hidden\" name=\"courseId\" value=\"";
        // line 14
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
  <div id=\"delete-course-progress\" class=\"delete-course-progress\" style=\"display:none;\">
    <div class=\"progress progress-striped active\">
      <div class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
    </div>
    <div class=\"text-success progress-text\"></div>
  </div>
";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "  <button id=\"delete-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#delete-form\"
  data-question-delete-url=\"";
        // line 27
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "questions")), "html", null, true);
        echo "\"
  data-testpaper-delete-url=\"";
        // line 28
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "testpapers")), "html", null, true);
        echo "\"
  data-material-delete-url=\"";
        // line 29
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "materials")), "html", null, true);
        echo "\"
  data-chapter-delete-url=\"";
        // line 30
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "chapters")), "html", null, true);
        echo "\"
  data-draft-delete-url=\"";
        // line 31
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "drafts")), "html", null, true);
        echo "\"
  data-lessonlearns-delete-url=\"";
        // line 32
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "lessonLearns")), "html", null, true);
        echo "\"
  data-lessonreplays-delete-url=\"";
        // line 33
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "lessonReplays")), "html", null, true);
        echo "\"
  data-lessonviews-delete-url=\"";
        // line 34
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "lessonViews")), "html", null, true);
        echo "\"
  data-homework-delete-url=\"";
        // line 35
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "homeworks")), "html", null, true);
        echo "\"
  data-exercise-delete-url=\"";
        // line 36
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "exercises")), "html", null, true);
        echo "\"
  data-lesson-delete-url=\"";
        // line 37
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "lessons")), "html", null, true);
        echo "\"
  data-favorite-delete-url=\"";
        // line 38
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "favorites")), "html", null, true);
        echo "\"
  data-note-delete-url=\"";
        // line 39
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "notes")), "html", null, true);
        echo "\"
  data-thread-delete-url=\"";
        // line 40
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "threads")), "html", null, true);
        echo "\"
  data-review-delete-url=\"";
        // line 41
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "reviews")), "html", null, true);
        echo "\"
  data-announcement-delete-url=\"";
        // line 42
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "announcements")), "html", null, true);
        echo "\"
  data-status-delete-url=\"";
        // line 43
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "statuses")), "html", null, true);
        echo "\"
  data-member-delete-url=\"";
        // line 44
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "members")), "html", null, true);
        echo "\"
  data-course-delete-url=\"";
        // line 45
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "course")), "html", null, true);
        echo "\"
  >提交</button>
  <button type=\"button\" class=\"btn btn-link pull-right btn-closed\" data-dismiss=\"modal\">取消</button>

   <strong class=\"text text-danger\" id=\"delete-hint\" style=\"display:none;\">正在删除，请不要关闭当前窗口...</strong>

  <button id=\"finish-delete-btn\" data-loading-text=\"正在完成删除, 请稍等...\" class=\"btn btn-primary\" style=\"display:none;\"data-dismiss=\"modal\">完成删除</button>
  <script>app.load('course/delete-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 45,  161 => 44,  156 => 43,  151 => 42,  146 => 41,  141 => 40,  136 => 39,  131 => 38,  126 => 37,  121 => 36,  116 => 35,  111 => 34,  106 => 33,  101 => 32,  96 => 31,  91 => 30,  86 => 29,  81 => 28,  76 => 27,  73 => 26,  70 => 25,  57 => 15,  52 => 14,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
