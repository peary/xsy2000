<?php

/* TopxiaWebBundle:Common:share-dropdown.html.twig */
class __TwigTemplate_f155dc28784c04dce7066eaee74897f7ca572ebc6793a43d9a0fd17062452a3f extends Twig_Template
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
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "course")) {
            // line 2
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["title"] = $this->getAttribute($_course_, "title", array());
            // line 3
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_course_, "about", array()), 50);
            // line 4
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.courseShareContent"), $this->env->getExtension('translator')->trans("我正在学习{{course}}，收获巨大哦，一起来学习吧！")), array("course" => (("《" . $this->getAttribute($_course_, "title", array())) . "》")));
            // line 5
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["url"] = $this->env->getExtension('routing')->getUrl("course_show", array("id" => $this->getAttribute($_course_, "id", array())));
            // line 6
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["picture"] = $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "largePicture", array()), "course.png");
            // line 7
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["id"] = $this->getAttribute($_course_, "id", array());
        } elseif (($_type_ == "classroom")) {
            // line 9
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            $context["title"] = $this->getAttribute($_classroom_, "title", array());
            // line 10
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_classroom_, "about", array()), 50);
            // line 11
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.classroomShareContent"), $this->env->getExtension('translator')->trans("我正在学习{{classroom}}，收获巨大哦，一起来学习吧！")), array("classroom" => (("「" . $this->getAttribute($_classroom_, "title", array())) . "」")));
            // line 12
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            $context["url"] = $this->env->getExtension('routing')->getUrl("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array())));
            // line 13
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            $context["picture"] = $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_classroom_, "largePicture", array()), "classroom.png");
            // line 14
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            $context["id"] = $this->getAttribute($_classroom_, "id", array());
        } elseif (($_type_ == "article")) {
            // line 16
            echo "  ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            $context["title"] = $this->getAttribute($_article_, "title", array());
            // line 17
            echo "  ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_article_, "body", array()), 50);
            // line 18
            echo "  ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.articleShareContent"), $this->env->getExtension('translator')->trans("我正在看{{articletitle}}，关注{{sitename}}，分享知识，成就未来。")), array("articletitle" => (("「" . $this->getAttribute($_article_, "title", array())) . "」"), "sitename" => (("「" . $this->env->getExtension('topxia_web_twig')->getSetting("site.name")) . "」")));
            // line 19
            echo "  ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            $context["url"] = $this->env->getExtension('routing')->getUrl("article_detail", array("id" => $this->getAttribute($_article_, "id", array())));
            // line 20
            echo "  ";
            $context["picture"] = "";
            // line 21
            echo "  ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            $context["id"] = $this->getAttribute($_article_, "id", array());
        } elseif (($_type_ == "group_thread")) {
            // line 23
            echo "  ";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["title"] = $this->getAttribute($_thread_, "title", array());
            // line 24
            echo "  ";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_thread_, "content", array()), 50);
            // line 25
            echo "  ";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.groupShareContent"), $this->env->getExtension('translator')->trans("我正在{{groupname}}小组，看到{{threadname}}，很不错哦，一起来看看吧！")), array("threadname" => (("「" . $this->getAttribute($_thread_, "title", array())) . "」"), "groupname" => (("「" . $this->getAttribute($_group_, "title", array())) . "」")));
            // line 26
            echo "  ";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["url"] = $this->env->getExtension('routing')->getUrl("group_thread_show", array("id" => $this->getAttribute($_group_, "id", array()), "threadId" => $this->getAttribute($_thread_, "id", array())));
            // line 27
            echo "  ";
            $context["picture"] = "";
            // line 28
            echo "  ";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context["id"] = $this->getAttribute($_group_, "id", array());
        } elseif (($_type_ == "open_course")) {
            // line 30
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["title"] = $this->getAttribute($_course_, "title", array());
            // line 31
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_course_, "about", array()), 50);
            // line 32
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.courseShareContent"), $this->env->getExtension('translator')->trans("我正在学习{{course}}，收获巨大哦，一起来学习吧！")), array("course" => (("《" . $this->getAttribute($_course_, "title", array())) . "》")));
            // line 33
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["url"] = $this->env->getExtension('routing')->getUrl("open_course_show", array("courseId" => $this->getAttribute($_course_, "id", array())));
            // line 34
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["picture"] = $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "largePicture", array()), "course.png");
            // line 35
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["id"] = $this->getAttribute($_course_, "id", array());
        }
        // line 37
        echo "
<div class=\"dropdown-menu ";
        // line 38
        if (isset($context["right"])) { $_right_ = $context["right"]; } else { $_right_ = null; }
        if (((array_key_exists("right", $context)) ? (_twig_default_filter($_right_, false)) : (false))) {
            echo "pull-right";
        }
        echo " js-social-share-params\" data-title=\"";
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "\" data-summary=\"";
        if (isset($context["summary"])) { $_summary_ = $context["summary"]; } else { $_summary_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("summary", $context)) ? (_twig_default_filter($_summary_, "")) : ("")), "html", null, true);
        echo "\" data-message=\"";
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $_message_, "html", null, true);
        echo "\" data-url=\"";
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $_url_, "html", null, true);
        echo "\" data-picture=\"";
        if (isset($context["picture"])) { $_picture_ = $context["picture"]; } else { $_picture_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("picture", $context)) ? (_twig_default_filter($_picture_, "")) : ("")), "html", null, true);
        echo "\">
  ";
        // line 39
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Point")) {
            // line 40
            echo "    <input type=\"hidden\" class=\"point-share-url\" value=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("share_point", array("id" => $_id_, "title" => $_title_, "type" => $_type_)), "html", null, true);
            echo "\">
  ";
        }
        // line 42
        echo "
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"weixin\" title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享到微信"), "html", null, true);
        echo "\" data-share=\"weixin\" data-qrcode-url=\"";
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("common_qrcode", array("text" => $_url_)), "html", null, true);
        echo "\"><i class=\"es-icon es-icon-weixin\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"tsina\" title=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享到新浪微博"), "html", null, true);
        echo "\" data-share=\"weibo\"><i class=\"es-icon es-icon-weibo\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qq\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享到QQ好友"), "html", null, true);
        echo "\" data-share=\"qq\"><i class=\"es-icon es-icon-qq\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qzone\" title=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享到QQ空间"), "html", null, true);
        echo "\" data-share=\"qzone\"><i class=\"es-icon es-icon-qzone\"></i></a>

</div>

";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("common/share-dropdown"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Common:share-dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 50,  201 => 46,  197 => 45,  193 => 44,  186 => 43,  183 => 42,  174 => 40,  172 => 39,  150 => 38,  147 => 37,  142 => 35,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  122 => 30,  117 => 28,  114 => 27,  109 => 26,  104 => 25,  100 => 24,  96 => 23,  91 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
