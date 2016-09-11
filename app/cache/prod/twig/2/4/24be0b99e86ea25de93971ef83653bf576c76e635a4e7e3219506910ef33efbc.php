<?php

/* TopxiaAdminBundle:Default:popular-courses-table.html.twig */
class __TwigTemplate_24be0b99e86ea25de93971ef83653bf576c76e635a4e7e3219506910ef33efbc extends Twig_Template
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
        if (isset($context["sortedCourses"])) { $_sortedCourses_ = $context["sortedCourses"]; } else { $_sortedCourses_ = null; }
        if ($_sortedCourses_) {
            // line 2
            echo "\t<table class=\"table table-condensed table-striped table-hover\" style=\"word-break: break-all;\">
\t  <thead>
\t    <tr>
\t      <th>课程名称</th>
\t      <th>新增学生人数</th>
\t      <th>总学生人数</th>
\t      <th>新增收入</th>
\t    </tr>
\t  </thead>
\t\t<tbody>
\t\t\t";
            // line 12
            if (isset($context["sortedCourses"])) { $_sortedCourses_ = $context["sortedCourses"]; } else { $_sortedCourses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_sortedCourses_);
            foreach ($context['_seq'] as $context["_key"] => $context["sortedcourse"]) {
                // line 13
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 15
                if (isset($context["sortedcourse"])) { $_sortedcourse_ = $context["sortedcourse"]; } else { $_sortedcourse_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_sortedcourse_, "courseId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                if (isset($context["sortedcourse"])) { $_sortedcourse_ = $context["sortedcourse"]; } else { $_sortedcourse_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_sortedcourse_, "title", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 17
                if (isset($context["sortedcourse"])) { $_sortedcourse_ = $context["sortedcourse"]; } else { $_sortedcourse_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_sortedcourse_, "addedStudentNum", array(), "array"), "html", null, true);
                echo " 人 </td>
\t\t\t\t\t<td>";
                // line 18
                if (isset($context["sortedcourse"])) { $_sortedcourse_ = $context["sortedcourse"]; } else { $_sortedcourse_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_sortedcourse_, "studentNum", array(), "array"), "html", null, true);
                echo " 人</td>
\t\t\t\t\t<td class=\"money-text\">";
                // line 19
                if (isset($context["sortedcourse"])) { $_sortedcourse_ = $context["sortedcourse"]; } else { $_sortedcourse_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_sortedcourse_, "addedMoney", array(), "array"), "html", null, true);
                echo " 元 </td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortedcourse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t</tbody>
\t</table>
";
        } else {
            // line 25
            echo "  <div class=\"empty\">暂无受欢迎课程</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:popular-courses-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  72 => 22,  62 => 19,  57 => 18,  52 => 17,  43 => 15,  39 => 13,  34 => 12,  22 => 2,  19 => 1,);
    }
}
