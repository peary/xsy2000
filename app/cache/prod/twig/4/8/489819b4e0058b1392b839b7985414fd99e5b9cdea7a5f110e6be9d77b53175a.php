<?php

/* TopxiaWebBundle:CourseManage:picture.html.twig */
class __TwigTemplate_489819b4e0058b1392b839b7985414fd99e5b9cdea7a5f110e6be9d77b53175a extends Twig_Template
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
        return $this->loadTemplate($this->getContext($context, "layout"), "TopxiaWebBundle:CourseManage:picture.html.twig", 6);
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
        $context["script_controller"] = "course-manage/picture";
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

  <div class=\"panel-body\">
      ";
        // line 20
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img class=\"img-responsive\" src=\"";
        // line 24
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          ";
        // line 30
        echo $this->env->getExtension('translator')->trans("<p class=\"help-block\">你可以上传jpg, gif, png格式的文件, 图片建议尺寸至少为480x270。<br>文件大小不能超过<strong>2M</strong>。</p>");
        echo "
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <a
          id=\"upload-picture-btn\"
          class=\"btn btn-fat btn-primary\"
          data-upload-token=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
          ";
        // line 40
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "type", array()) == "open") || ($this->getAttribute($_course_, "type", array()) == "liveOpen"))) {
            // line 41
            echo "            data-goto-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_picture_crop", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"
          ";
        } else {
            // line 43
            echo "            data-goto-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture_crop", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"
          ";
        }
        // line 45
        echo "          
          >";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选择要上传的图片"), "html", null, true);
        echo "</a>
        </div>
      </div>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:picture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 46,  116 => 45,  109 => 43,  102 => 41,  99 => 40,  95 => 39,  83 => 30,  73 => 24,  65 => 20,  58 => 16,  53 => 13,  50 => 12,  42 => 8,  38 => 6,  36 => 11,  34 => 10,  31 => 4,  28 => 2,  25 => 1,  19 => 6,);
    }
}
