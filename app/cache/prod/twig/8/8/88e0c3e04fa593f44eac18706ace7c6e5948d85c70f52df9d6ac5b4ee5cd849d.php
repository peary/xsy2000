<?php

/* TopxiaAdminBundle:System:course-setting.html.twig */
class __TwigTemplate_88e0c3e04fa593f44eac18706ace7c6e5948d85c70f52df9d6ac5b4ee5cd849d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:course-setting.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_course";
        // line 4
        $context["script_controller"] = "setting/course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <legend>课程规则</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >给新";
        // line 17
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "发送欢迎私信</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 20
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_message_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "welcome_message_enabled", array()));
        echo "
      <p class=\"help-block\">开启后，新";
        // line 21
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "加入课程后，会收到教师的欢迎私信</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">欢迎私信内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">";
        // line 30
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_courseSetting_, "welcome_message_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 38
        echo "
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户用户名</li>
            <li>{{course}} 为课程名称</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>课程详情页显示相关课程</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 48
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("relatedCourses", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "relatedCourses", array()));
        echo "
        <div class=\"help-block\">根据课程的标签，显示相关课程</div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>权限与版权</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师设置课程价格</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 61
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_modify_price", array(1 => "是", 0 => "否"), $this->getAttribute($_courseSetting_, "teacher_modify_price", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师查询课程订单</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 70
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_search_order", array(1 => "是", 0 => "否"), $this->getAttribute($_courseSetting_, "teacher_search_order", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师添加/移除";
        // line 76
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 79
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_manage_student", array(1 => "是", 0 => "否"), $this->getAttribute($_courseSetting_, "teacher_manage_student", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师导出";
        // line 85
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 88
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_export_student", array(1 => "是", 0 => "否"), $this->getAttribute($_courseSetting_, "teacher_export_student", array()));
        echo "
      </div>
    </div>
    ";
        // line 91
        $context["smsSetting"] = $this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms");
        // line 92
        echo "    ";
        if (isset($context["smsSetting"])) { $_smsSetting_ = $context["smsSetting"]; } else { $_smsSetting_ = null; }
        if (((($this->getAttribute($_smsSetting_, "sms_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_smsSetting_, "sms_enabled", array()), 0)) : (0)) && (((($this->getAttribute($_smsSetting_, "sms_normal_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_smsSetting_, "sms_normal_lesson_publish", array()), "off")) : ("off")) == "on") || ((($this->getAttribute($_smsSetting_, "sms_live_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_smsSetting_, "sms_live_lesson_publish", array()), "off")) : ("off")) == "on")))) {
            // line 93
            echo "    ";
        }
        // line 94
        echo "

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许";
        // line 98
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "下载课时的音视频</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 101
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("student_download_media", array(0 => "不允许", 1 => "允许"), $this->getAttribute($_courseSetting_, "student_download_media", array()));
        echo "
        <div class=\"help-block\">开启此项设置后，";
        // line 102
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "可在课时学习界面侧栏的\"资料\"面板中下载。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >课程列表页默认排序</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 111
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("explore_default_orderBy", array("latest" => "最新", "studentNum" => "最热", "recommendedSeq" => "推荐"), $this->getAttribute($_courseSetting_, "explore_default_orderBy", array()));
        echo "
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>图文、文档课时防复制</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 120
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("copy_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "copy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>试卷防复制</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 130
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("testpaperCopy_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "testpaperCopy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>课程运营模式</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>免费课时允许未登录用户观看</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 145
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("allowAnonymousPreview", array(1 => "允许", 0 => "不允许"), $this->getAttribute($_courseSetting_, "allowAnonymousPreview", array()));
        echo "
        <div class=\"help-block\">如果允许此项设置,未登录用户（游客）可观看免费课时</div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">课程中允许显示";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
        echo "人数</label>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 153
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("show_student_num_enabled", array("1" => "开启", "0" => "关闭"), (($this->getAttribute($_courseSetting_, "show_student_num_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_courseSetting_, "show_student_num_enabled", array()), "1")) : ("1")));
        echo "
      </div>
    </div>

  </fieldset>

  <fieldset>
      <legend>名称设置</legend>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            <label>设置章节名称</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
        // line 167
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("custom_chapter_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "custom_chapter_enabled", array()));
        echo "
            <div class=\"help-block\">
              开启后，在课时管理中添加章,节时，系统会自动生成按如下设置的章节名称。</div>
          </div>
        </div>

      <div id=\"show_course_chapter_name\"  style=\"display: ";
        // line 173
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        if ($this->getAttribute($_courseSetting_, "custom_chapter_enabled", array())) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"chapter_name\">课程章名称</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"chapter_name\" name=\"chapter_name\" class=\"form-control\" ";
        // line 179
        if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
        if ($this->getAttribute($_defaultSetting_, "chapter_name", array())) {
            echo "value=\"";
            if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_defaultSetting_, "chapter_name", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"章\" ";
        }
        echo ">
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"part_name\">课程节名称</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"part_name\" name=\"part_name\" class=\"form-control\" ";
        // line 188
        if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
        if ($this->getAttribute($_defaultSetting_, "part_name", array())) {
            echo " value=\"";
            if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_defaultSetting_, "part_name", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"节\" ";
        }
        echo ">
          </div>
        </div>
      </div>
    <div class=\"alert alert-info deduction text-center\">
    <p><strong>
    注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称
    </strong></p>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 205,  354 => 188,  334 => 179,  320 => 173,  310 => 167,  292 => 153,  287 => 151,  277 => 145,  258 => 130,  244 => 120,  231 => 111,  215 => 102,  210 => 101,  200 => 98,  194 => 94,  191 => 93,  187 => 92,  185 => 91,  178 => 88,  168 => 85,  158 => 79,  148 => 76,  138 => 70,  125 => 61,  108 => 48,  89 => 38,  83 => 30,  67 => 21,  62 => 20,  52 => 17,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
