<?php

/* TopxiaWebBundle:Settings:user-profile.html.twig */
class __TwigTemplate_28d8cb7bf63ee3566a95c773b4dce0edf460f76aecfd73bc612a5110064a7ab6 extends Twig_Template
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
        // line 2
        $this->env->getExtension('topxia_web_twig')->loadScript("settings/user-profile");
        // line 3
        echo "<div class=\"alert alert-info\">
  <h5><strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请先完成以下设置，才能创建课程："), "html", null, true);
        echo "</strong></h5>
  <ol>
    <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置头像。"), "html", null, true);
        echo "
      ";
        // line 7
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "user", array()), "largeAvatar", array())) {
            // line 8
            echo "        <span class=\"text-success\"><span class=\"glyphicon glyphicon-ok-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完成"), "html", null, true);
            echo "</span> </li>
      ";
        } else {
            // line 10
            echo "        <span class=\"text-danger\"><span class=\"glyphicon glyphicon-remove-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未完成"), "html", null, true);
            echo "</span>
      ";
        }
        // line 12
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置头衔 、自我介绍。"), "html", null, true);
        echo "
      ";
        // line 13
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["userProfile"])) { $_userProfile_ = $context["userProfile"]; } else { $_userProfile_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "title", array()) && $this->getAttribute($_userProfile_, "about", array()))) {
            // line 14
            echo "        <span class=\"text-success\"><span class=\"glyphicon glyphicon-ok-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完成"), "html", null, true);
            echo "</span> </li>
      ";
        } else {
            // line 16
            echo "        <span class=\"text-danger\"><span class=\"glyphicon glyphicon-remove-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未完成"), "html", null, true);
            echo "</span>
      ";
        }
        // line 18
        echo "    </li>
  </ol>
</div>

<form id=\"user-profile-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\">
  ";
        // line 23
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\" for=\"profile_avatar\"><b>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户头像"), "html", null, true);
        echo "</b></label>
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 28
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute($_app_, "user", array()), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
      <input id=\"profile_avatar\" type=\"hidden\"  value=\"";
        // line 29
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "largeAvatar", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
    </div>
    <div class=\"controls col-md-8 controls\">
      ";
        // line 37
        echo $this->env->getExtension('translator')->trans("<p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>2M</strong>。</p>");
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"></div>
    <div class=\"controls col-md-8 controls\">
      <a id=\"upload-picture-btn\"
      class=\"btn btn-primary\"
      data-upload-token=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
      data-goto-url=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("settings_avatar_crop_modal");
        echo "\"
      >";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传新头像"), "html", null, true);
        echo "</a>
    </div>
  </div>

  ";
        // line 52
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context["user"] = $this->env->getExtension('topxia_data_twig')->getData("UserandProfiles", array("userId" => $this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array())));
        // line 53
        echo "  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\" for=\"profile_title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头衔"), "html", null, true);
        echo "</label>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" id=\"profile_title\" name=\"profile[title]\" class=\"form-control\" value=\"";
        // line 56
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "title", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\" style=\"display:none;\"></div>
    </div>
  </div>

  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\" for=\"profile_about\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("自我介绍"), "html", null, true);
        echo "</label>
    <div class=\"col-md-8 controls\">
      <textarea name=\"profile[about]\" rows=\"10\" id=\"profile_about\" class=\"form-control\" data-image-upload-url=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("user"))), "html", null, true);
        echo "\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_user_, "profiles", array()), "about", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-7 col-md-offset-2\">
      <button id=\"profile-save-btn\" data-submiting-text=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:user-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 73,  172 => 69,  161 => 64,  156 => 62,  146 => 56,  141 => 54,  138 => 53,  135 => 52,  128 => 48,  124 => 47,  120 => 46,  108 => 37,  96 => 29,  91 => 28,  86 => 26,  79 => 23,  75 => 22,  69 => 18,  63 => 16,  57 => 14,  53 => 13,  48 => 12,  42 => 10,  36 => 8,  33 => 7,  29 => 6,  24 => 4,  21 => 3,  19 => 2,);
    }
}
