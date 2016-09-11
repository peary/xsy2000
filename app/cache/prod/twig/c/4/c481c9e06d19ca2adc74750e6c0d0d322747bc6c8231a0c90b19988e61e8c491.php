<?php

/* TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig */
class __TwigTemplate_c481c9e06d19ca2adc74750e6c0d0d322747bc6c8231a0c90b19988e61e8c491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-layout.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", 1);
        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["layoutClass"] = "after";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_before_content($context, array $blocks = array())
    {
        // line 6
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("首页"), "html", null, true);
        echo "</a></li>
    ";
        // line 8
        if (isset($context["breadcrumbs"])) { $_breadcrumbs_ = $context["breadcrumbs"]; } else { $_breadcrumbs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumbs_);
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $this->getAttribute($_breadcrumb_, "code", array()))), "html", null, true);
            echo "\">";
            if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_breadcrumb_, "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <li class=\"active\">";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
        echo "</li>
  </ol>
  ";
        // line 13
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (($_member_ && $this->getAttribute($_member_, "locked", array()))) {
            // line 14
            echo "    <div class=\"alert alert-warning\">
      ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的退款申请已提交，请等待管理员的处理。"), "html", null, true);
            echo "
      <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 16
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_cancel_refund", array("id" => $this->getAttribute($_course_, "id", array()), "targetType" => "course")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消退款，继续学习！"), "html", null, true);
            echo "</button>
    </div>
  ";
        }
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("course/common"), "html", null, true);
        echo "

  <div class=\"course-header-top clearfix\">

    ";
        // line 26
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "picture", array(0 => $_course_), "method"), "html", null, true);
        echo "

    ";
        // line 28
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (isset($context["userVipStatus"])) { $_userVipStatus_ = $context["userVipStatus"]; } else { $_userVipStatus_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "info", array(0 => $_course_, 1 => $_member_, 2 => $_userVipStatus_), "method"), "html", null, true);
        echo "

    <div class=\"course-operation\">
      ";
        // line 31
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "student_num", array(0 => $_course_), "method"), "html", null, true);
        echo "
      <ul class=\"course-data clearfix two-col\">
        ";
        // line 33
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["hasFavorited"])) { $_hasFavorited_ = $context["hasFavorited"]; } else { $_hasFavorited_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "favorite_btn", array(0 => $_course_, 1 => $_hasFavorited_), "method"), "html", null, true);
        echo "
        ";
        // line 34
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "share_btn", array(0 => $_course_), "method"), "html", null, true);
        echo "
      </ul>
    </div>
  </div>

  <div class=\"progress progress-sm\">
    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 40
        if (isset($context["learnProgress"])) { $_learnProgress_ = $context["learnProgress"]; } else { $_learnProgress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_learnProgress_, "percent", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        if (isset($context["learnProgress"])) { $_learnProgress_ = $context["learnProgress"]; } else { $_learnProgress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_learnProgress_, "percent", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"course-header-bottom clearfix\">
    <span class=\"pull-left\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成课时："), "html", null, true);
        echo " ";
        if (isset($context["learnProgress"])) { $_learnProgress_ = $context["learnProgress"]; } else { $_learnProgress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_learnProgress_, "number", array()), "html", null, true);
        echo "/";
        if (isset($context["learnProgress"])) { $_learnProgress_ = $context["learnProgress"]; } else { $_learnProgress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_learnProgress_, "total", array()), "html", null, true);
        echo "</span>
    ";
        // line 46
        if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
        if ($_nextLearnLesson_) {
            // line 47
            echo "      <a class=\"btn btn-lg btn-primary\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "#lesson/";
            if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_nextLearnLesson_, "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("继续学习"), "html", null, true);
            echo "</a>
      <span class=\"next-class hidden-xs\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下一课时："), "html", null, true);
            echo "<a href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "#lesson/";
            if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_nextLearnLesson_, "id", array()), "html", null, true);
            echo "\">";
            if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
            echo $this->getAttribute($_nextLearnLesson_, "title", array());
            echo "</a></span>
    ";
        }
        // line 50
        echo "  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 50,  179 => 48,  168 => 47,  165 => 46,  155 => 45,  143 => 40,  132 => 34,  125 => 33,  118 => 31,  108 => 28,  101 => 26,  93 => 22,  90 => 21,  79 => 16,  75 => 15,  72 => 14,  69 => 13,  62 => 11,  49 => 9,  44 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
