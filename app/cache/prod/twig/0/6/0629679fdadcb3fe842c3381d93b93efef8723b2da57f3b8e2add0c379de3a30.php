<?php

/* ClassroomBundle:ClassroomManage:picture-crop.html.twig */
class __TwigTemplate_0629679fdadcb3fe842c3381d93b93efef8723b2da57f3b8e2add0c379de3a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:picture-crop.html.twig", 1);
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
        $context["side_nav"] = "picture";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/picture-crop";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "封面图片 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">封面图片</div>
  <div class=\"panel-body\">

  <form id=\"classroom-picture-crop-form\" method=\"post\" enctype=\"multipart/form-data\">

    <div class=\"form-group clearfix\">
      <div class=\"col-md-offset-2 col-md-8 controls\">
        <img class=\"img-responsive\" src=\"";
        // line 17
        if (isset($context["pictureUrl"])) { $_pictureUrl_ = $context["pictureUrl"]; } else { $_pictureUrl_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($_pictureUrl_), "html", null, true);
        echo "\" id=\"classroom-picture-crop\" width=\"";
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
        <div class=\"help-block\">提示：请选择图片裁剪区域。</div>
      </div>
    </div>

    <div class=\"form-group clearfix\">
      <div class=\"col-md-offset-2 col-md-8 controls\">

        <a class=\"btn btn-fat btn-primary\" id=\"upload-picture-btn\" 
        data-url=\"";
        // line 26
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_picture_crop", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 27
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\"
        >保存</a>
        <a href=\"javascript:;\" class=\"go-back btn btn-link\">重新选择图片</a>
      </div>
    </div>

  </form>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:picture-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  79 => 26,  54 => 17,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
