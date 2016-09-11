<?php

/* TopxiaWebBundle:CourseManage:courseSync.html.twig */
class __TwigTemplate_9dd53742a2c8cfdd7aac0214c748ecf5c7b0cb1664a1b3d71d8af4d41f8c7f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:courseSync.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["side_nav"] = $_type_;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<style>
  .panel-locked{
    margin:80px 50px;
  }
  .panel-locked p{
    text-align: center;
    line-height:35px;
  }
  .panel-margin{
    margin-top:30px;
  }
</style>

<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 23
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    <div class=\"panel-locked\">
      <h5><p>本课程内容与原课程
        <a href=\"";
        // line 27
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if ((($_type_ == "question") || ($_type_ == "testpaper"))) {
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            if (isset($context["parentCourse"])) { $_parentCourse_ = $context["parentCourse"]; } else { $_parentCourse_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_url_, array("courseId" => $this->getAttribute($_parentCourse_, "id", array()))), "html", null, true);
        } elseif (($_type_ == "question_plumber")) {
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            if (isset($context["parentCourse"])) { $_parentCourse_ = $context["parentCourse"]; } else { $_parentCourse_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_url_, array("courseId" => $this->getAttribute($_parentCourse_, "id", array()), "type" => "import")), "html", null, true);
        } else {
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            if (isset($context["parentCourse"])) { $_parentCourse_ = $context["parentCourse"]; } else { $_parentCourse_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_url_, array("id" => $this->getAttribute($_parentCourse_, "id", array()))), "html", null, true);
        }
        echo "\" target=\"_blank\">&nbsp;&nbsp;《";
        if (isset($context["parentCourse"])) { $_parentCourse_ = $context["parentCourse"]; } else { $_parentCourse_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_parentCourse_, "title", array()), "html", null, true);
        echo "》&nbsp;&nbsp;</a>
        实时同步中。如需更改内容可以选择对原课程进行更改。
        </p>
      </h5>
      <h5>
        ";
        // line 32
        echo $this->env->getExtension('translator')->trans("<p class=\"panel-margin\">如需解除同步单独编辑本课程，可点击下方按钮解除同步。<font color=\"#e83d2c\">注意：本操作不可逆！</font>");
        echo "
        </p>
      </h5>
      <p class=\"panel-margin\"><a href=\"#modal\" data-toggle=\"modal\" data-url= \"";
        // line 35
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync_edit", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => $_type_, "url" => $_url_)), "html", null, true);
        echo "\" class=\"btn btn-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("解除同步"), "html", null, true);
        echo "</a></p>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:courseSync.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  94 => 32,  70 => 27,  62 => 23,  45 => 8,  42 => 7,  33 => 3,  29 => 1,  26 => 5,  11 => 1,);
    }
}
