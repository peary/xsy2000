<?php

/* TopxiaWebBundle:CourseStudentManage:student.html.twig */
class __TwigTemplate_7209de6b4b90484bcf3795bc9a37bfe9de605e7198f1a81143ed82ee3f0d8f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:index.html.twig", "TopxiaWebBundle:CourseStudentManage:student.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "student";
        // line 7
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学员管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "<form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>
  <div class=\"form-group col-md-7\">
    <input class=\"form-control \" type=\"text\" style=\"width:45%\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请输入用户名/邮箱/手机号"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">

    <button class=\"btn btn-primary\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
  </div>
  <div class=\"clearfix\"></div>
</form>
<table class=\"table table-striped\" id=\"course-student-list\">
  <thead>
    <tr>
      <th width=\"40%\">";
        // line 21
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo "</th>
      <th width=\"30%\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习进度"), "html", null, true);
        echo "</th>
      <th width=\"30%\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 27
        if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_students_);
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 28
            echo "      ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_student_, "userId", array()), array(), "array");
            // line 29
            echo "      ";
            if (isset($context["progresses"])) { $_progresses_ = $context["progresses"]; } else { $_progresses_ = null; }
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            $context["progress"] = $this->getAttribute($_progresses_, $this->getAttribute($_student_, "userId", array()), array(), "array");
            // line 30
            echo "      ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["followingIds"])) { $_followingIds_ = $context["followingIds"]; } else { $_followingIds_ = null; }
            $context["isFollowing"] = twig_in_filter($this->getAttribute($_user_, "id", array()), $_followingIds_);
            // line 31
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:tr.html.twig", "TopxiaWebBundle:CourseStudentManage:student.html.twig", 31)->display($context);
            // line 32
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 33
            echo "      <tr class=\"empty\"><td colspan=\"20\">无";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "记录</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tbody>
</table>
";
        // line 37
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 37,  148 => 35,  135 => 33,  122 => 32,  119 => 31,  114 => 30,  109 => 29,  104 => 28,  85 => 27,  78 => 23,  74 => 22,  66 => 21,  56 => 14,  48 => 12,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
