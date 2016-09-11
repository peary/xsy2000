<?php

/* TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig */
class __TwigTemplate_1447805fe263b2adcaa19313e2766d989996c3969bc5f126732f9135662e450c extends Twig_Template
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
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode", "local") == "cloud")) {
            // line 2
            echo "<div class=\"video-quality-switcher\">
  <div>
    <label>视频转码类型：</label>
    <span class=\"quality-switcher-bar\">
      <span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
    </span>
  </div>

  <div class=\"quality-switcher-control\" style='display:none'>
    <div class=\"video-quality radios\">
      画质：
        ";
            // line 13
            echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_quality", "normal"));
            echo "
    </div>

    <div class=\"audio-quality radios\">
      音质：
        ";
            // line 18
            echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_audio_quality", "normal"));
            echo "
    </div>
    <input type=\"hidden\" name=\"support_mobile\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("storage.support_mobile", 0), "html", null, true);
            echo "\" />
    <div class=\"quality-actions\">
      <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">确定</a>
      <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">取消</a>
    </div>
  </div>
</div>
<script>app.load('topxiawebbundle/controller/cloud-file/cloud-video-quality-switcher')</script>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  42 => 18,  34 => 13,  21 => 2,  19 => 1,);
    }
}
