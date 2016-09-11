<?php

/* TopxiaWebBundle::script_boot.html.twig */
class __TwigTemplate_ca609152bd35002a77b08739b2ec935e5abd8b5b03927df0be494723f026c72a extends Twig_Template
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
        echo "<script>
  var app = {};
  app.debug = ";
        // line 3
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "debug", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
  app.version = '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetsVersion(), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 5
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 6
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "getBasePath", array(), "method"), "html", null, true);
        echo "';
  app.theme = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';
  app.themeGlobalScript = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getThemeGlobalScript(), "html", null, true);
        echo "';
  app.jsPaths = ";
        // line 9
        echo twig_jsonencode_filter($this->env->getExtension('topxia_web_twig')->getJsPaths());
        echo ";

  app.crontab = '";
        // line 11
        echo $this->env->getExtension('routing')->getPath("common_crontab");
        echo "';
  ";
        // line 12
        $context["crontabNextExecutedTime"] = $this->env->getExtension('topxia_web_twig')->getNextExecutedTime();
        // line 13
        echo "  ";
        if (isset($context["crontabNextExecutedTime"])) { $_crontabNextExecutedTime_ = $context["crontabNextExecutedTime"]; } else { $_crontabNextExecutedTime_ = null; }
        if (($_crontabNextExecutedTime_ > 0)) {
            // line 14
            echo "    ";
            if (isset($context["crontabNextExecutedTime"])) { $_crontabNextExecutedTime_ = $context["crontabNextExecutedTime"]; } else { $_crontabNextExecutedTime_ = null; }
            if ((twig_date_converter($this->env, twig_date_format_filter($this->env, $_crontabNextExecutedTime_, "Y-m-d H:i:s")) < twig_date_converter($this->env))) {
                // line 15
                echo "      app.scheduleCrontab = '";
                echo $this->env->getExtension('routing')->getPath("common_crontab");
                echo "';
    ";
            }
            // line 17
            echo "  ";
        }
        // line 18
        echo "
  var CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
  var CLOUD_FILE_SERVER = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.cloud_file_server", ""), "html", null, true);
        echo "\"; 

  app.config = ";
        // line 22
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.renren_key", ""))), "cloud" => array("video_player" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player"), "video_player_watermark_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_watermark_plugin"), "video_player_fingerprint_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_fingerprint_plugin")), "loading_img_path" => $this->env->getExtension('assets')->getAssetUrl("assets/img/default/loading.gif")));
        // line 37
        echo ";

  app.arguments = {};
  ";
        // line 40
        if (array_key_exists("script_controller", $context)) {
            // line 41
            echo "    app.controller = '";
            if (isset($context["script_controller"])) { $_script_controller_ = $context["script_controller"]; } else { $_script_controller_ = null; }
            echo twig_escape_filter($this->env, $_script_controller_, "html", null, true);
            echo "';
  ";
        }
        // line 43
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 44
            echo "    app.arguments = ";
            if (isset($context["script_arguments"])) { $_script_arguments_ = $context["script_arguments"]; } else { $_script_arguments_ = null; }
            echo twig_jsonencode_filter($_script_arguments_);
            echo ";
  ";
        }
        // line 46
        echo "  
  app.scripts = ";
        // line 47
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->exportScripts(), null));
        echo ";
  
  app.uploadUrl = '";
        // line 49
        echo $this->env->getExtension('routing')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 50
        echo $this->env->getExtension('routing')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';
  app.cloudSdkCdn = '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.cloud_sdk_cdn"), "html", null, true);
        echo "';
  app.mainScript = '";
        // line 53
        if (isset($context["script_main"])) { $_script_main_ = $context["script_main"]; } else { $_script_main_ = null; }
        echo twig_escape_filter($this->env, $_script_main_, "html", null, true);
        echo "';
</script>
";
        // line 55
        if ($this->env->getExtension('topxia_web_twig')->getSetting("cdn.enabled")) {
            echo " ";
            $context["cdnUrl"] = $this->env->getExtension('topxia_web_twig')->getSetting("cdn.url");
            echo " ";
        } else {
            echo " ";
            $context["cdnUrl"] = "";
            echo " ";
        }
        // line 56
        echo "<script src=\"";
        if (isset($context["cdnUrl"])) { $_cdnUrl_ = $context["cdnUrl"]; } else { $_cdnUrl_ = null; }
        echo twig_escape_filter($this->env, $_cdnUrl_, "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        if (isset($context["cdnUrl"])) { $_cdnUrl_ = $context["cdnUrl"]; } else { $_cdnUrl_ = null; }
        echo twig_escape_filter($this->env, $_cdnUrl_, "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
        if (isset($context["cdnUrl"])) { $_cdnUrl_ = $context["cdnUrl"]; } else { $_cdnUrl_ = null; }
        echo twig_escape_filter($this->env, $_cdnUrl_, "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        if (isset($context["cdnUrl"])) { $_cdnUrl_ = $context["cdnUrl"]; } else { $_cdnUrl_ = null; }
        echo twig_escape_filter($this->env, $_cdnUrl_, "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>
<script>
  seajs.use(app.mainScript);
</script>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 59,  170 => 58,  164 => 57,  157 => 56,  147 => 55,  141 => 53,  137 => 52,  133 => 51,  129 => 50,  125 => 49,  120 => 47,  117 => 46,  110 => 44,  107 => 43,  100 => 41,  98 => 40,  93 => 37,  91 => 22,  86 => 20,  82 => 18,  79 => 17,  73 => 15,  69 => 14,  65 => 13,  63 => 12,  59 => 11,  54 => 9,  50 => 8,  46 => 7,  41 => 6,  36 => 5,  32 => 4,  23 => 3,  19 => 1,);
    }
}
