<?php

/* TopxiaWebBundle:Course:Part/normal-nav.html.twig */
class __TwigTemplate_18a8854c4185105417432a6af34774cdd00dd2d20fe2b379111162bc2551511c extends Twig_Template
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
        if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
        $context["tab"] = ((array_key_exists("tab", $context)) ? (_twig_default_filter($_tab_, null)) : (null));
        // line 2
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context["previewAs"] = $this->env->getExtension('topxia_web_twig')->getParametersFromUrl($this->getAttribute($this->getAttribute($_app_, "request", array()), "uri", array()));
        // line 3
        echo "<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    ";
        // line 5
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if ( !$_member_) {
            // line 6
            echo "      <li role=\"presentation\" ";
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程概览"), "html", null, true);
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 7
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "lesson-list")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时列表"), "html", null, true);
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 8
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 10
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute($_course_, "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("笔记"), "html", null, true);
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a></li>
    ";
        } else {
            // line 12
            echo "      <li role=\"presentation\" ";
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时列表"), "html", null, true);
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 13
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "thread")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("讨论区"), "html", null, true);
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 14
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "material")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资料区"), "html", null, true);
            echo "</a></li>
      <li role=\"presentation\" ";
            // line 15
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 17
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo " href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute($_course_, "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo " href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("笔记"), "html", null, true);
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 19
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if (($_tab_ == "info")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
            if ($_previewAs_) {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("概览"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 21
        echo "
  </ul>

  ";
        // line 24
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (((($this->getAttribute($_course_, "parentId", array()) == 0) || ($this->getAttribute($_course_, "locked", array()) == 0)) && ((($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((($this->getAttribute($_member_, "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "role", array()), "")) : ("")) == "teacher")))) {
            // line 25
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 26
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
        <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
        ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公告"), "html", null, true);
            echo "
      </a>
  </div>
  ";
        }
        // line 32
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 32,  306 => 28,  300 => 26,  297 => 25,  292 => 24,  287 => 21,  264 => 19,  234 => 17,  204 => 15,  182 => 14,  160 => 13,  137 => 12,  107 => 10,  77 => 8,  55 => 7,  32 => 6,  29 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
