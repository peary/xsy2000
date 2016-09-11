<?php

/* TopxiaWebBundle:CourseManage:base.html.twig */
class __TwigTemplate_af6732da6438264b6cffd3bdf39d50151bbdc9c46c8e6698c57201dd3ebad7a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "base";
        // line 6
        $context["script_controller"] = "course-manage/base";
        // line 8
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('routing')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('routing')->getPath("tag_match"), "locationUrl" => $this->env->getExtension('routing')->getPath("location_all"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    <form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

      ";
        // line 21
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\" value=\"";
        // line 26
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_course_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "title", array()), "")) : ("")), "html", null, true);
        echo "\">
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("副标题"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <textarea id=\"course_subtitle\" name=\"subtitle\" required=\"required\" class=\"form-control\">";
        // line 34
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_course_, "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标签"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\" tabindex=\"-1\" value=\"";
        // line 42
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        echo twig_escape_filter($this->env, twig_join_filter($_tags_, ","), "html", null, true);
        echo "\" data-explain=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理"), "html", null, true);
        echo "\">
          <div class=\"help-block\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理"), "html", null, true);
        echo "</div>
        </div>
      </div>

        <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程购买"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls radios\">
            ";
        // line 50
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("buyable", array("1" => $this->env->getExtension('translator')->trans("开启"), "0" => $this->env->getExtension('translator')->trans("关闭")), (($this->getAttribute($_course_, "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "buyable", array()), 1)) : (1)));
        echo "
           <div class=\"help-block\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭后课程将无法在线购买加入、由教师/管理员后台导入。"), "html", null, true);
        echo "</div>
        </div>
      </div>

      ";
        // line 55
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type", array()) == "live")) {
            // line 56
            echo "
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\" for=\"maxStudentNum-field\">直播最大";
            // line 58
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            echo "数</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"maxStudentNum-field\" name=\"maxStudentNum\" class=\"form-control width-input width-input-large\" value=\"";
            // line 60
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_course_, "maxStudentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "maxStudentNum", array()), 20)) : (20)), "html", null, true);
            echo "\" data-live-capacity-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_capacity", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
            echo "
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      ";
        }
        // line 66
        echo "
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\" for=\"course_expiryDay\">";
        // line 68
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_expiryDay\" name=\"expiryDay\" required=\"required\" class=\"form-control width-input width-input-large\" value=\"";
        // line 70
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "expiryDay", array()), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("天"), "html", null, true);
        echo "
          <div class=\"help-block\">设置该值后，";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
        echo "只能在有效期内进行课程的相关操作，系统默认会在到期前10天提醒";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
        echo "。该值为0，则不做此限制。</div>
        </div>
      </div>

      ";
        // line 75
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type", array()) == "normal")) {
            // line 76
            echo "        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("连载状态"), "html", null, true);
            echo "</label>
          <div class=\"col-md-8 controls radios\">
            ";
            // line 79
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->radios("serializeMode", array("none" => $this->env->getExtension('translator')->trans("非连载课程"), "serialize" => $this->env->getExtension('translator')->trans("更新中"), "finished" => $this->env->getExtension('translator')->trans("已完结")), (($this->getAttribute($_course_, "serializeMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "serializeMode", array()), "none")) : ("none")));
            echo "
          </div>
        </div>
      ";
        }
        // line 83
        echo "
      ";
        // line 84
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit")) {
            // line 85
            echo "        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频观看时间限制"), "html", null, true);
            echo "</label>
          <div class=\"col-md-8 controls\">
            <input type=\"text\" id=\"course_expiryDay\" name=\"watchLimit\" required=\"required\" class=\"form-control width-input width-input-large\" value=\"";
            // line 88
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "watchLimit", array()), "html", null, true);
            echo "\" > 倍单视频总时长
            <div class=\"help-block\">";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("0表示不限制。"), "html", null, true);
            echo "</div>
          </div>
        </div>
      ";
        }
        // line 93
        echo "
      ";
        // line 94
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.buy_before_approval")) {
            // line 95
            echo "        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证"), "html", null, true);
            echo "</label>
          <div class=\"col-md-8 controls radios\">
            ";
            // line 98
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->radios("approval", array("1" => $this->env->getExtension('translator')->trans("是"), "0" => $this->env->getExtension('translator')->trans("否")), $this->getAttribute($_course_, "approval", array()));
            echo "
            <div class=\"help-block\">";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置该值后，学员购买课程前，必须先去申请实名认证。"), "html", null, true);
            echo "</div>
          </div>
        </div>
      ";
        }
        // line 103
        echo "
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
            ";
        // line 108
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($_course_, "categoryId", array()), $this->env->getExtension('translator')->trans("分类"));
        echo "
          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>
      
      ";
        // line 114
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaWebBundle:CourseManage:base.html.twig", 114)->display(array_merge($context, array("orgCode" => $this->getAttribute($_course_, "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 115
        echo "
      ";
        // line 116
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type", array()) == "live")) {
            // line 117
            echo "      <div id=\"live-plugin-url\" class=\"form-group hidden\">
          <div class=\"col-md-offset-2 col-md-8 controls\">
            <a  href=\"\" target=\"_blank\">";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播“桌面分享”插件下载"), "html", null, true);
            echo "</a>
          </div>
      </div>
      ";
        }
        // line 123
        echo "      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 129,  302 => 125,  298 => 123,  291 => 119,  287 => 117,  284 => 116,  281 => 115,  278 => 114,  268 => 108,  262 => 105,  258 => 103,  251 => 99,  246 => 98,  241 => 96,  238 => 95,  236 => 94,  233 => 93,  226 => 89,  221 => 88,  216 => 86,  213 => 85,  211 => 84,  208 => 83,  200 => 79,  195 => 77,  192 => 76,  189 => 75,  180 => 71,  173 => 70,  163 => 68,  159 => 66,  144 => 60,  139 => 58,  135 => 56,  132 => 55,  125 => 51,  120 => 50,  115 => 48,  107 => 43,  100 => 42,  95 => 40,  85 => 34,  80 => 32,  70 => 26,  65 => 24,  58 => 21,  51 => 17,  47 => 15,  44 => 14,  36 => 3,  32 => 1,  30 => 8,  28 => 6,  26 => 5,  11 => 1,);
    }
}
