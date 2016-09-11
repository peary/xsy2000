<?php

/* TopxiaWebBundle:EsBar:index.html.twig */
class __TwigTemplate_cec38638021dee93c56e5ce1a6751a5fc3aa669634e0353d7b896d0c2fb24cf7 extends Twig_Template
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
        echo "<!-- 侧边栏快捷操作 -->
<div class=\"es-bar hidden-xs\">

  <!-- 左侧列表 -->
  ";
        // line 5
        $this->loadTemplate("TopxiaWebBundle:EsBar:left-list.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 5)->display($context);
        // line 6
        echo "
  <!-- 列表内容 -->
  ";
        // line 8
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($_app_, "user", array()) && $this->getAttribute($this->getAttribute($_app_, "user", array()), "isLogin", array(), "method"))) {
            // line 9
            echo "    <!-- 通知 -->
    <div class=\"es-bar-main\" id=\"bar-message\">
      ";
            // line 11
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/notification.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 11)->display($context);
            // line 12
            echo "    </div>

    <!-- 考试/作业 -->
    <div class=\"es-bar-main\" id=\"bar-homework\">
      ";
            // line 16
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/practice.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 16)->display($context);
            // line 17
            echo "    </div>

    <!-- 课程/班级 -->
    <div class=\"es-bar-main\" id=\"bar-course-list\">
      ";
            // line 21
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 21)->display($context);
            // line 22
            echo "    </div>

    <!-- 学习中心 -->
    <div class=\"es-bar-main\" id=\"bar-user-center\">
      ";
            // line 27
            echo "    </div>

    <!-- 学习历史 -->
    ";
            // line 39
            echo "
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/consult.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 42)->display($context);
        // line 43
        echo "
</div>

";
        // line 46
        $this->env->getExtension('topxia_web_twig')->loadScript("es-bar/index");
        // line 47
        $this->env->getExtension('topxia_web_twig')->loadScript("notification/notification");
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 48,  83 => 47,  81 => 46,  76 => 43,  74 => 42,  71 => 41,  67 => 39,  62 => 27,  56 => 22,  54 => 21,  48 => 17,  46 => 16,  40 => 12,  38 => 11,  34 => 9,  31 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
