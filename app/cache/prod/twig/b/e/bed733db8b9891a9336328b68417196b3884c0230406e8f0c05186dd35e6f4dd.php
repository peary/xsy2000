<?php

/* ClassroomBundle:ClassroomManage:services.html.twig */
class __TwigTemplate_bed733db8b9891a9336328b68417196b3884c0230406e8f0c05186dd35e6f4dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:services.html.twig", 1);
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
        $context["side_nav"] = "service";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "服务设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "   
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">服务设置</div>
  <div class=\"panel-body\">
    <form id=\"services-form\" class=\"form-horizontal\" method=\"post\">
          ";
        // line 12
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
          <div class=\"form-group\" id=\"services-form-group\">
            <label class=\"col-md-2 control-label\">
              提供的服务
            </label>
            <div class=\"col-md-10 controls checkboxs\">
              <label><input type=\"checkbox\" name=\"service[]\" value=\"homeworkReview\" ";
        // line 18
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (twig_in_filter("homeworkReview", $this->getAttribute($_classroom_, "service", array()))) {
            echo "checked='checked'";
        }
        echo "> 24小时作业批改</label>
              <p class=\"help-block\">24小时内完成作业批改，即时反馈并巩固您的学习效果。</p>
            </div>
            <label class=\"col-md-2 control-label\">
            </label>
            <div class=\"col-md-10 controls checkboxs\">
              <label><input type=\"checkbox\" name=\"service[]\" value=\"testpaperReview\" ";
        // line 24
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (twig_in_filter("testpaperReview", $this->getAttribute($_classroom_, "service", array()))) {
            echo "checked='checked'";
        }
        echo "> 24小时阅卷点评</label>
              <p class=\"help-block\">24小时内批阅您提交的试卷，给予有针对性的点评。</p>
            </div>
            <label class=\"col-md-2 control-label\">
            </label>
            <div class=\"col-md-10 controls checkboxs\">
              <label><input type=\"checkbox\" name=\"service[]\" value=\"teacherAnswer\" ";
        // line 30
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (twig_in_filter("teacherAnswer", $this->getAttribute($_classroom_, "service", array()))) {
            echo "checked='checked'";
        }
        echo "> 提问必答</label>
              <p class=\"help-block\">对于提问做到有问必答，帮您扫清学习过程中的种种障碍。</p>
            </div>
            <label class=\"col-md-2 control-label\">
            </label>
            <div class=\"col-md-10 controls checkboxs\">
              <label><input type=\"checkbox\" name=\"service[]\" value=\"liveAnswer\" ";
        // line 36
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (twig_in_filter("liveAnswer", $this->getAttribute($_classroom_, "service", array()))) {
            echo "checked='checked'";
        }
        echo "> 一对一在线答疑</label>
              <p class=\"help-block\">提供专属的一对一在线答疑，快速答疑解惑。
              </p>
            </div>
            <label class=\"col-md-2 control-label\">
            </label>
            <div class=\"col-md-10 controls checkboxs\">
              <label><input type=\"checkbox\" name=\"service[]\" value=\"event\" ";
        // line 43
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (twig_in_filter("event", $this->getAttribute($_classroom_, "service", array()))) {
            echo "checked='checked'";
        }
        echo "> ";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "活动</label>
              <p class=\"help-block\">不定期组织各种线上或线下的";
        // line 44
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "活动，让学习更加生动有趣，同学关系更为紧密。
              </p>
            </div>
            <label class=\"col-md-2 control-label\">
            </label>
            <div class=\"col-md-10 controls checkboxs\">
              <label><input type=\"checkbox\" name=\"service[]\" value=\"workAdvise\" ";
        // line 50
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (twig_in_filter("workAdvise", $this->getAttribute($_classroom_, "service", array()))) {
            echo "checked='checked'";
        }
        echo "> 就业指导</label>
              <p class=\"help-block\">完成全部学习后，老师对您的学习成果和能力水平给出评估，并提供专业化的就业指导。
              </p>
            </div>

          <div class=\"form-group\">
            <div class=\"col-md-offset-2 col-md-8 controls\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
              <button type=\"submit\" class=\"btn btn-fat btn-primary\">保存</button>
            </div>
          </div>
        </div>  
    </form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  126 => 50,  117 => 44,  108 => 43,  95 => 36,  83 => 30,  71 => 24,  59 => 18,  49 => 12,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
