<?php

/* ClassroomBundle:ClassroomManage:student.html.twig */
class __TwigTemplate_1cf370bb1c00d8aacb7ce44f5acfa8cea00b182a4ff7ab71a7cb631886b3594d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:students.html.twig", "ClassroomBundle:ClassroomManage:student.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:students.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "student";
        // line 7
        $context["script_controller"] = "classroombundle/controller/classroom/students";
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
        echo "
  <form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group col-md-7\">
      <input class=\"form-control \" style=\"width:45%\" type=\"text\" placeholder=\"请输入用户名/邮箱/手机号\" name=\"keyword\" value=\"";
        // line 13
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">

      <button class=\"btn btn-primary\">搜索</button>
    </div>
    <div class=\"clearfix\"></div>
  </form>
  
  <table class=\"table table-striped\" id=\"course-student-list\">
    <thead>
      <tr>
        <th width=\"40%\">学员</th>
        <th width=\"30%\">学习进度</th>
        <th width=\"30%\">操作</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 29
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
            // line 30
            echo "        ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_student_, "userId", array()), array(), "array");
            // line 31
            echo "        ";
            if (isset($context["progresses"])) { $_progresses_ = $context["progresses"]; } else { $_progresses_ = null; }
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            $context["progress"] = $this->getAttribute($_progresses_, $this->getAttribute($_student_, "userId", array()), array(), "array");
            // line 32
            echo "        ";
            $this->loadTemplate("ClassroomBundle:ClassroomManage:tr.html.twig", "ClassroomBundle:ClassroomManage:student.html.twig", 32)->display($context);
            // line 33
            echo "      ";
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
            // line 34
            echo "        <tr class=\"empty\"><td colspan=\"20\">无学员记录</td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
  </table>

  ";
        // line 39
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  121 => 36,  114 => 34,  101 => 33,  98 => 32,  93 => 31,  88 => 30,  69 => 29,  49 => 13,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
