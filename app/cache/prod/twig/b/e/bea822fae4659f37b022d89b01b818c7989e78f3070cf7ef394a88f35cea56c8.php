<?php

/* TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig */
class __TwigTemplate_bea822fae4659f37b022d89b01b818c7989e78f3070cf7ef394a88f35cea56c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 1);
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
        // line 4
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter($_lesson_, null)) : (null));
        // line 163
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($_lesson_) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑课时"), "html", null, true);
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加课时"), "html", null, true);
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<form id=\"course-lesson-form\" data-course-id=\"";
        // line 13
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
        echo "\" class=\"form-horizontal lesson-form\" method=\"post\" ";
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            if (isset($context["parentId"])) { $_parentId_ = $context["parentId"]; } else { $_parentId_ = null; }
            echo twig_escape_filter($this->env, $_parentId_, "html", null, true);
            echo "\" ";
        }
        // line 14
        echo "  data-create-draft-url=\"";
        echo $this->env->getExtension('routing')->getPath("course_draft_create");
        echo "\"
  ";
        // line 15
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($_lesson_) {
            // line 16
            echo "    action=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute($_course_, "id", array()), "lessonId" => $this->getAttribute($_lesson_, "id", array()))), "html", null, true);
            echo "\" data-lesson-id=\"";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "id", array()), "html", null, true);
            echo "\"
  ";
        } else {
            // line 18
            echo "    action=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 20
        echo "  >

  <div class=\"form-group\" ";
        // line 22
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($_lesson_) {
            echo "style=\"display:none;\"";
        }
        echo ">
    <div class=\"col-md-2 control-label\"><label>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("类型"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"radios\">
        ";
        // line 26
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("type", $this->env->getExtension('topxia_web_twig')->getDict("lessonType"), _twig_default_filter($this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "type"), "video"));
        echo "
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 31
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (((($this->getAttribute($_storageSetting_, "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "upload_mode", array()), "local")) : ("local")) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\" >
    <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"row\">
        <div class=\"col-md-10\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 36
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "title");
        echo "\" >
        </div>
        <div class=\"col-md-2\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" name=\"free\" value=\"1\" ";
        // line 40
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "free")) {
            echo " checked=\"checked\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费课时"), "html", null, true);
        echo "</label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 47
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (((($this->getAttribute($_storageSetting_, "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "upload_mode", array()), "local")) : ("local")) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-summary-field\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("简介"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\"><textarea class=\"form-control\" id=\"lesson-summary-field\" name=\"summary\" >";
        // line 49
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "summary");
        echo "</textarea>

    </div>
  </div>

  <div class=\"form-group for-text-type\">



    <div class=\"col-md-2 control-label\"><label for=\"lesson-content-field\" class=\"style1\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">

      ";
        // line 61
        if (isset($context["draft"])) { $_draft_ = $context["draft"]; } else { $_draft_ = null; }
        if (((array_key_exists("draft", $context)) ? (_twig_default_filter($_draft_, false)) : (false))) {
            // line 62
            echo "      <a id =\"see-draft-btn\" class=\"btn btn-link\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("course_draft_view");
            echo "\" >
        <small>
        ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您有一段自动保存内容，继续编辑请点击"), "html", null, true);
            echo "
        </small>
      </a>
      ";
        }
        // line 68
        echo "
      <textarea class=\"form-control\" id=\"lesson-content-field\" name=\"content\"
      data-image-upload-url=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      data-flash-upload-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course", "flash"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      >";
        // line 72
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_lesson_, "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_lesson_, "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type ";
        // line 76
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (((($this->getAttribute($_storageSetting_, "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "upload_mode", array()), "local")) : ("local")) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo " \">
    <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-audio-type\"><label>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-ppt-type\"><label>PPT</label></div>
    <div class=\"col-md-2 control-label for-document-type\"><label>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文档"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-flash-type\"><label>Flash</label></div>
    <div class=\"col-md-9 controls\">
      ";
        // line 83
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 83)->display(array_merge($context, array("lesson" => ((array_key_exists("lesson", $context)) ? (_twig_default_filter($_lesson_, null)) : (null)))));
        // line 84
        echo "      <input id=\"lesson-media-field\" type=\"hidden\" name=\"media\" value=\"";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "media")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 88
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (((($this->getAttribute($_storageSetting_, "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "upload_mode", array()), "local")) : ("local")) != "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright($this->env->getExtension('translator')->trans("PPT课时需要开通EduSoho云文档服务才能使用,")), "html", null, true);
        echo "
          点击<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">这里</a>了解详情。</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 97
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (((($this->getAttribute($_storageSetting_, "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "upload_mode", array()), "local")) : ("local")) != "cloud")) {
            echo "for-document-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright($this->env->getExtension('translator')->trans("文档课时需要开通EduSoho云文档服务才能使用,")), "html", null, true);
        echo "
          点击<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">这里</a>了解详情。</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 106
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (((($this->getAttribute($_storageSetting_, "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "upload_mode", array()), "local")) : ("local")) != "cloud")) {
            echo "for-flash-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright($this->env->getExtension('translator')->trans("Flash课时需要开通EduSoho云视频服务才能使用,")), "html", null, true);
        echo "
          点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type\" id=\"lesson-length-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长"), "html", null, true);
        echo "</label></div>
      <div class=\"hide\"><label for=\"lesson-length-field\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长或"), "html", null, true);
        echo "</label></div>
      <div class=\"col-md-2 control-label for-audio-type\"><label for=\"lesson-length-field\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频时长"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-minute-field\" type=\"text\" name=\"minute\" value=\"";
        // line 120
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "minute");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
        echo "
      <input class=\"form-control width-input width-input-small\" id=\"lesson-second-field\" type=\"text\" name=\"second\" value=\"";
        // line 121
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "second");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("秒"), "html", null, true);
        echo "
      <div class=\"help-block\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("时长必须为非负整数"), "html", null, true);
        echo "</div>
    </div>
  </div>

  ";
        // line 126
        if (isset($context["features"])) { $_features_ = $context["features"]; } else { $_features_ = null; }
        if (twig_in_filter("lesson_credit", $_features_)) {
            // line 127
            echo "  <div class=\"form-group for-text-type for-video-type for-audio-type for-ppt-type\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-give-credit-field\">";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学分"), "html", null, true);
            echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-give-credit-field\" type=\"text\" name=\"giveCredit\" value=\"";
            // line 130
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_lesson_, "giveCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_lesson_, "giveCredit", array()), 0)) : (0)), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
            echo "
      <div class=\"help-block\">";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学完此课时，可获得的学分"), "html", null, true);
            echo "</div>
    </div>
  </div>
  ";
        }
        // line 135
        echo "

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label>";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("建议学习时长"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-suggest-period-field\" type=\"text\" name=\"suggestHours\" value=\"";
        // line 140
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_lesson_, "suggestHours", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_lesson_, "suggestHours", array()), "1.0")) : ("1.0")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小时"), "html", null, true);
        echo "
      <span class=\"for-video-type\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（如未设置，则默认学习时长为视频时长3倍取整。）"), "html", null, true);
        echo "</span>
      <span class=\"for-audio-type\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（如未设置，则默认学习时长为音频时长3倍取整。）"), "html", null, true);
        echo "</span>
      <span class=\"for-flash-type for-text-type for-ppt-type for-document-type\">";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（如未设置，则默认学习时长1小时。）"), "html", null, true);
        echo "</span>
      <div class=\"help-block\"></div>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">


</form>


<script>app.load('course-manage/lesson-modal')</script>


";
    }

    // line 158
    public function block_footer($context, array $blocks = array())
    {
        // line 159
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" id=\"cancel-btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
    <button id=\"course-lesson-btn\" data-submiting-text=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($_lesson_) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
        }
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 160,  424 => 159,  421 => 158,  407 => 148,  399 => 143,  395 => 142,  391 => 141,  384 => 140,  379 => 138,  374 => 135,  367 => 131,  360 => 130,  355 => 128,  352 => 127,  349 => 126,  342 => 122,  335 => 121,  328 => 120,  323 => 118,  319 => 117,  315 => 116,  305 => 109,  296 => 106,  287 => 100,  278 => 97,  269 => 91,  260 => 88,  251 => 84,  248 => 83,  242 => 80,  237 => 78,  233 => 77,  226 => 76,  218 => 72,  212 => 71,  208 => 70,  204 => 68,  197 => 64,  191 => 62,  188 => 61,  182 => 58,  169 => 49,  165 => 48,  158 => 47,  143 => 40,  135 => 36,  128 => 32,  121 => 31,  112 => 26,  106 => 23,  99 => 22,  95 => 20,  88 => 18,  77 => 16,  74 => 15,  69 => 14,  59 => 13,  56 => 12,  53 => 11,  41 => 8,  38 => 7,  34 => 1,  32 => 163,  29 => 4,  27 => 3,  11 => 1,);
    }
}
