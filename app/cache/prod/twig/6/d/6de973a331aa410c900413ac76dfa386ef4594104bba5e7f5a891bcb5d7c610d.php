<?php

/* TopxiaAdminBundle:System:mobile.setting.html.twig */
class __TwigTemplate_6de973a331aa410c900413ac76dfa386ef4594104bba5e7f5a891bcb5d7c610d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mobile.setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_mobile";
        // line 5
        $context["script_controller"] = "setting/mobile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style>
#mobile-splash1-container img ,
#mobile-splash2-container img ,
#mobile-splash3-container img ,
#mobile-splash4-container img ,
#mobile-splash5-container img ,
#mobile-logo-container img ,
#site-appcover-container img,
#site-applogo-container img
{max-width: 80%; margin-bottom: 10px;}
</style>

";
        // line 21
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >是否开启客户端</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 30
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_mobile_, "enabled", array()));
        echo "
      <div class=\"help-block\">开启后，网站首页顶部导航会出现客户端入口<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("admin_operation_mobile");
        echo "\">常规设置点这里</a></div>
    </div>
  </div>
  
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">网校简介</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\" data-image-upload-url=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "about", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">此简介将显示在移动客户端的\"关于网校\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">网校LOGO</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">";
        // line 50
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "logo", array())) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" data-upload-token=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "logo"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "logo"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ( !$this->getAttribute($_mobile_, "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。</p>
      <input type=\"hidden\" name=\"logo\" value=\"";
        // line 54
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "logo", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">公告</label>
    </div>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" class=\"form-control\" name=\"notice\" value=\"";
        // line 63
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "notice", array()), "html", null, true);
        echo "\">
      <p class=\"help-block\">将会在手机端banner下面显示网校的公告，建议用简练概括的语言描述，字数在20字以下。</p>
    </div>
  </div>

";
        // line 68
        if (isset($context["mobileCode"])) { $_mobileCode_ = $context["mobileCode"]; } else { $_mobileCode_ = null; }
        if ((($_mobileCode_ != "edusoho") && ($_mobileCode_ != "edusohov3"))) {
            // line 69
            echo "  <fieldset>
    <legend>定制APP设置项</legend>
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appname\">APP名称</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appname\" value=\"";
            // line 76
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "appname", array()), "html", null, true);
            echo "\" >
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appabout\">APP简介</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appabout\" value=\"";
            // line 85
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "appabout", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"applogo\">APP图标</label>
        </div>
        <div class=\"col-md-8 controls\">

         <div id=\"site-applogo-container\" class=\"mbl\">";
            // line 95
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            if ($this->getAttribute($_mobile_, "applogo", array())) {
                echo "<img src=\"";
                if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "applogo", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-applogo-upload\" data-upload-token=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "applogo"));
            echo "\">上传</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-applogo-remove\" type=\"button\"
          data-url=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "applogo"));
            echo "\" ";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            if ( !$this->getAttribute($_mobile_, "applogo", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>
          <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。推荐尺寸 120*120。</p>
           <input type=\"hidden\" name=\"applogo\" value=\"";
            // line 101
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "applogo", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appcover\">APP封面</label>
        </div>
        <div class=\"col-md-8 controls\">
         <div id=\"site-appcover-container\" class=\"mbl\">";
            // line 110
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            if ($this->getAttribute($_mobile_, "appcover", array())) {
                echo "<img src=\"";
                if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "appcover", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-appcover-upload\" data-upload-token=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "appcover"));
            echo "\">上传</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-appcover-remove\" type=\"button\"
          data-url=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "appcover"));
            echo "\" ";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            if ( !$this->getAttribute($_mobile_, "appcover", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>
          <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。推荐尺寸 225*400。</p>
          <input type=\"hidden\" name=\"appcover\" value=\"";
            // line 116
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "appcover", array()), "html", null, true);
            echo "\">
        </div>

      </div>
  </fieldset>
";
        }
        // line 122
        echo "
 <fieldset>
  <legend>设置启动图</legend>
  <div class=\"help-block\">最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">启动图1</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">";
        // line 131
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash1", array())) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash1", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" data-upload-token=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash1"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash1"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ( !$this->getAttribute($_mobile_, "splash1", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"";
        // line 135
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash1", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">启动图2</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">";
        // line 144
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash2", array())) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash2", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" data-upload-token=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash2"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash2"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ( !$this->getAttribute($_mobile_, "splash2", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash2\" value=\"";
        // line 148
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash2", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">启动图3</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">";
        // line 157
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash3", array())) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash3", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" data-upload-token=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash3"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash3"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ( !$this->getAttribute($_mobile_, "splash3", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash3\" value=\"";
        // line 161
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash3", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">启动图4</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">";
        // line 170
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash4", array())) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash4", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" data-upload-token=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash4"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash4"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ( !$this->getAttribute($_mobile_, "splash4", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash4\" value=\"";
        // line 174
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash4", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">启动图5</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">";
        // line 183
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash5", array())) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash5", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" data-upload-token=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash5"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash5"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ( !$this->getAttribute($_mobile_, "splash5", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash5\" value=\"";
        // line 187
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash5", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  </fieldset>



  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 195,  457 => 187,  447 => 185,  441 => 184,  431 => 183,  418 => 174,  408 => 172,  402 => 171,  392 => 170,  379 => 161,  369 => 159,  363 => 158,  353 => 157,  340 => 148,  330 => 146,  324 => 145,  314 => 144,  301 => 135,  291 => 133,  285 => 132,  275 => 131,  264 => 122,  254 => 116,  244 => 114,  239 => 112,  235 => 111,  225 => 110,  212 => 101,  202 => 99,  197 => 97,  193 => 96,  183 => 95,  169 => 85,  156 => 76,  147 => 69,  144 => 68,  135 => 63,  122 => 54,  112 => 52,  106 => 51,  96 => 50,  80 => 40,  68 => 31,  63 => 30,  50 => 21,  36 => 9,  33 => 8,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
