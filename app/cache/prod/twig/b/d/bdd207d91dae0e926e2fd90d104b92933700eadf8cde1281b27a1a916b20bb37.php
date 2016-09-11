<?php

/* TopxiaWebBundle:CourseFileManage:index.html.twig */
class __TwigTemplate_bdd207d91dae0e926e2fd90d104b92933700eadf8cde1281b27a1a916b20bb37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate($this->getContext($context, "layout"), "TopxiaWebBundle:CourseFileManage:index.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "type", array()) == "open") || ($this->getAttribute($_course_, "type", array()) == "liveOpen"))) {
            // line 2
            $context["layout"] = "TopxiaWebBundle:OpenCourseManage:open-course-layout.html.twig";
        } else {
            // line 4
            $context["layout"] = "TopxiaWebBundle:CourseManage:layout.html.twig";
        }
        // line 10
        $context["side_nav"] = "files";
        // line 11
        $context["tab"] = "courseLesson";
        // line 12
        $context["script_controller"] = "course-manage-file/index";
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程文件"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "  <style type=\"text/css\">
  .tooltip-inner{
  max-width: 600px;
  }
  </style>
  ";
        // line 19
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (twig_in_filter($this->getAttribute($_course_, "type", array()), array(0 => "open", 1 => "liveOpen"))) {
            // line 20
            echo "    ";
            $context["targetType"] = "opencoursematerial";
            // line 21
            echo "  ";
        } else {
            // line 22
            echo "    ";
            $context["targetType"] = "coursematerial";
            // line 23
            echo "  ";
        }
        // line 24
        echo "  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">
      <a class=\"btn btn-info btn-sm pull-right\"
        data-toggle=\"modal\" data-target=\"#modal\"
        data-url=\"";
        // line 28
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_batch_uplod", array("token" => $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken($_targetType_, $this->getAttribute($_course_, "id", array()), "private"))), "html", null, true);
        echo "\"
      >
        <i class=\"glyphicon glyphicon-cloud-upload\"></i>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加课程文件"), "html", null, true);
        echo "
      </a>
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程文件"), "html", null, true);
        echo "
    </div>

    <div class=\"panel-body\" id=\"file-manage-panel\" data-file-status-url=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("course_manage_file_status");
        echo "\">
      <table class=\"table table-striped table-hover\" id=\"course-lesson-table\">
        <thead>
          <tr>
            <th width=\"5%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
            <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件名"), "html", null, true);
        echo "</th>
            <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("类型"), "html", null, true);
        echo "</th>
            <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("大小"), "html", null, true);
        echo "</th>
            <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("使用"), "html", null, true);
        echo "</th>
            <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后更新"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody>

          ";
        // line 49
        if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_files_);
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["uploadFile"]) {
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            if ($_uploadFile_) {
                // line 50
                echo "            ";
                $this->loadTemplate("TopxiaWebBundle:CourseFileManage:tbody-tr.html.twig", "TopxiaWebBundle:CourseFileManage:index.html.twig", 50)->display($context);
                // line 51
                echo "          ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 52
            echo "            <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无文件记录"), "html", null, true);
            echo "</td></tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uploadFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "          
        </tbody>
      </table>

      <label class=\"checkbox-inline mrm mbm\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全选"), "html", null, true);
        echo "</label>

      <div class=\"btn-group mbm\">
        ";
        // line 61
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "type", array()) == "normal") || ($this->getAttribute($_course_, "type", array()) == "live"))) {
            // line 62
            echo "          <button class=\"btn btn-danger btn-sm\" data-role=\"batch-delete\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件记录"), "html", null, true);
            echo "\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_delete_materials_show", array("id" => $this->getAttribute($_course_, "id", array()), "type" => $_tab_)), "html", null, true);
            echo "\">
        ";
        } elseif ((($this->getAttribute($_course_, "type", array()) == "open") || ($this->getAttribute($_course_, "type", array()) == "liveOpen"))) {
            // line 64
            echo "          <button class=\"btn btn-danger btn-sm\" data-role=\"batch-delete\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件记录"), "html", null, true);
            echo "\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_delete_materials_show", array("id" => $this->getAttribute($_course_, "id", array()), "type" => $_tab_)), "html", null, true);
            echo "\">
        ";
        }
        // line 66
        echo "        <i class=\"glyphicon glyphicon-trash\"></i>
        ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移除"), "html", null, true);
        echo "</button>
      </div>

      <nav class=\"text-center\">
        ";
        // line 71
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
      </nav>

    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseFileManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 71,  206 => 67,  203 => 66,  193 => 64,  183 => 62,  180 => 61,  174 => 58,  168 => 54,  159 => 52,  150 => 51,  147 => 50,  133 => 49,  125 => 44,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  101 => 35,  95 => 32,  90 => 30,  83 => 28,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  55 => 14,  52 => 13,  44 => 8,  40 => 6,  38 => 12,  36 => 11,  34 => 10,  31 => 4,  28 => 2,  25 => 1,  19 => 6,);
    }
}
