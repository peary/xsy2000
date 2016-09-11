<?php

/* TopxiaAdminBundle:LiveCourse:index.html.twig */
class __TwigTemplate_deeaa702a15edd6832dc28cbf639982cbc969a4304e77ea15d56ba4b3d7f8487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 1);
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
        $context["menu"] = "admin_live_course";
        // line 5
        $context["script_controller"] = "course/live-lesson-search";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled") == 1)) {
            // line 10
            echo "
  ";
            // line 11
            $this->loadTemplate("TopxiaAdminBundle:LiveCourse:tab.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 11)->display($context);
            // line 12
            echo "  <br>
  <form id=\"message-search-form\" class=\"form-inline well well-sm mtl\" action=\" ";
            // line 13
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_live_course", array("status" => $_status_)), "html", null, true);
            echo "\" method=\"get\" novalidate>
    ";
            // line 14
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 14)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
            // line 15
            echo "    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
            // line 17
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("courseTitle" => "课程名", "lessonTitle" => "课时名"), $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "keywordType"), "method"));
            echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"关键词\" name=\"keyword\" value=\"";
            // line 21
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
    直播开始时间:
    <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" placeholder=\"开始时间\" value=\"";
            // line 25
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
            echo "\">
    <div class=\"form-group\">-</div>
    <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" placeholder=\"结束时间\" value=\"";
            // line 27
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
            echo "\">
    </div>
    <button class=\"btn btn-primary\">搜索</button>
  </form>
  <input type=\"hidden\" id=\"status\" value=\"";
            // line 31
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            echo twig_escape_filter($this->env, $_status_, "html", null, true);
            echo "\">
  <table class=\"table table-striped table-hover\" id=\"course-table\">
    <thead>
    <tr>
      <th width=\"45%\">课时</th>
      ";
            // line 36
            $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 36)->display($context);
            // line 37
            echo "      <th>直播开始时间</th>
      <th>直播时长(分)</th>
      <th>最大参与人数</th>
      ";
            // line 41
            echo "    </tr>
    </thead>
    <tbody>
      ";
            // line 44
            if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_lessons_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 45
                echo "        ";
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_lesson_, "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_lesson_, "courseId", array()), array(), "array"), null)) : (null));
                // line 46
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:LiveCourse:tr.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 46)->display($context);
                // line 47
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
                // line 48
                echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无直播</div></td></tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    </tbody>
  </table>

  ";
            // line 53
            if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo "
";
        } else {
            // line 55
            echo "<div class=\"well\" style=\"text-align:center;\">


直播功能未开启，请先在<a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("admin_setting_live_course_setting");
            echo "\"> 系统-课程设置-直播 </a>中设置开启

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 58,  171 => 55,  164 => 53,  159 => 50,  152 => 48,  139 => 47,  136 => 46,  131 => 45,  112 => 44,  107 => 41,  102 => 37,  100 => 36,  91 => 31,  83 => 27,  77 => 25,  69 => 21,  61 => 17,  57 => 15,  54 => 14,  49 => 13,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
