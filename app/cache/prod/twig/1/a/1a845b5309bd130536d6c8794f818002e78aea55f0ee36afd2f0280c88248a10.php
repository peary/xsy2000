<?php

/* ClassroomBundle:ClassroomManage:students.html.twig */
class __TwigTemplate_1a845b5309bd130536d6c8794f818002e78aea55f0ee36afd2f0280c88248a10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:students.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学员管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">学员管理
  
  ";
        // line 12
        if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
        if ((((array_key_exists("role", $context)) ? (_twig_default_filter($_role_)) : ("")) == "auditor")) {
            // line 13
            echo "    <a class=\"btn btn-info btn-sm panel-bar mhs\" href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_export_csv", array("id" => $this->getAttribute($_classroom_, "id", array()), "role" => $_role_)), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-export\"></i> 导出旁听生</a>
  ";
        } elseif ((((        // line 14
array_key_exists("role", $context)) ? (_twig_default_filter($_role_)) : ("")) == "student")) {
            // line 15
            echo "    <div class=\"panel-bar\">
      <button class=\"btn btn-info btn-sm mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 16
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_create", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加学员</button>
      ";
            // line 17
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (($this->getAttribute($_classroom_, "status", array()) == "published")) {
                // line 18
                echo "        <a class=\"btn btn-info btn-sm mhs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("importer_index", array("type" => "classroom-member", "classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-import\"></i> 批量导入</a>
      ";
            } else {
                // line 20
                echo "        <a class=\"btn btn-info pull-right btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\" title=\"班级未发布,不可导入学员\"><i class=\"glyphicon glyphicon-import\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批量导入"), "html", null, true);
                echo "</a>
      ";
            }
            // line 22
            echo "      <a class=\"btn btn-info btn-sm mhs\" href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_export_csv", array("id" => $this->getAttribute($_classroom_, "id", array()), "role" => $_role_)), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-export\"></i> 导出学员</a>
    </div>
   ";
        }
        // line 25
        echo "
  </div>
  <div class=\"panel-body\">

    <ul class=\"nav nav-tabs mbl\">
      <li class=\"";
        // line 30
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "student")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 31
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_students", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">正式学员
        </a>
      </li>

      <li class=\"";
        // line 35
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "aduitor")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 36
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_aduitor", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">旁听生
        </a>
      </li>

      <li class=\"";
        // line 40
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "record")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 41
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_record", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">退出记录
        </a>
      </li>
    </ul>
  ";
        // line 45
        $this->displayBlock('maincontent', $context, $blocks);
        // line 46
        echo "  </div>
</div>

";
    }

    // line 45
    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 45,  148 => 46,  146 => 45,  138 => 41,  131 => 40,  123 => 36,  116 => 35,  108 => 31,  101 => 30,  94 => 25,  85 => 22,  79 => 20,  72 => 18,  69 => 17,  64 => 16,  61 => 15,  59 => 14,  52 => 13,  49 => 12,  43 => 8,  40 => 7,  33 => 3,  29 => 1,  27 => 5,  11 => 1,);
    }
}
