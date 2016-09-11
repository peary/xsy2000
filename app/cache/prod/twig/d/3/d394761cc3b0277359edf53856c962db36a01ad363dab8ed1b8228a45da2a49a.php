<?php

/* TopxiaWebBundle:CourseManage:picture-crop.html.twig */
class __TwigTemplate_d394761cc3b0277359edf53856c962db36a01ad363dab8ed1b8228a45da2a49a extends Twig_Template
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
        return $this->loadTemplate($this->getContext($context, "layout"), "TopxiaWebBundle:CourseManage:picture-crop.html.twig", 6);
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
        $context["side_nav"] = "picture";
        // line 11
        $context["script_controller"] = "course-manage/picture-crop";
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程图片"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程图片"), "html", null, true);
        echo "
  </div>

  <div id=\"course-picture-crop-form\" class=\"panel-body\">

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img class=\"img-responsive\" src=\"";
        // line 23
        if (isset($context["pictureUrl"])) { $_pictureUrl_ = $context["pictureUrl"]; } else { $_pictureUrl_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($_pictureUrl_), "html", null, true);
        echo "\"
          id=\"course-picture-crop\"
          width=\"";
        // line 25
        if (isset($context["scaledSize"])) { $_scaledSize_ = $context["scaledSize"]; } else { $_scaledSize_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_scaledSize_, "width", array()), "html", null, true);
        echo "\" height=\"";
        if (isset($context["scaledSize"])) { $_scaledSize_ = $context["scaledSize"]; } else { $_scaledSize_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_scaledSize_, "height", array()), "html", null, true);
        echo "\" data-natural-width=\"";
        if (isset($context["naturalSize"])) { $_naturalSize_ = $context["naturalSize"]; } else { $_naturalSize_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_naturalSize_, "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        if (isset($context["naturalSize"])) { $_naturalSize_ = $context["naturalSize"]; } else { $_naturalSize_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_naturalSize_, "height", array()), "html", null, true);
        echo "\" />
          <div class=\"help-block\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提示：请选择图片裁剪区域。"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
        ";
        // line 32
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "type", array()) == "open") || ($this->getAttribute($_course_, "type", array()) == "liveOpen"))) {
            // line 33
            echo "         <button class=\"btn btn-fat btn-primary\"
          data-url=\"";
            // line 34
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_picture_crop", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 35
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_picture", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"
          id=\"upload-picture-btn\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
        ";
        } else {
            // line 38
            echo "         <button class=\"btn btn-fat btn-primary\"
          data-url=\"";
            // line 39
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture_crop", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 40
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"
          id=\"upload-picture-btn\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
        ";
        }
        // line 43
        echo "          <a href=\"javascript:;\" class=\"go-back btn btn-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新选择图片"), "html", null, true);
        echo "</a>
        </div>
      </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:picture-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  131 => 41,  126 => 40,  121 => 39,  118 => 38,  113 => 36,  108 => 35,  103 => 34,  100 => 33,  97 => 32,  88 => 26,  74 => 25,  68 => 23,  58 => 16,  53 => 13,  50 => 12,  42 => 8,  38 => 6,  36 => 11,  34 => 10,  31 => 4,  28 => 2,  25 => 1,  19 => 6,);
    }
}
