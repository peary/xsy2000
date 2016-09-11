<?php

/* ClassroomBundle:ClassroomManage:assistants.html.twig */
class __TwigTemplate_7592514f5fd74e6c4cfebf9748ac086f9d827df9259f43ffb343e3cd3bf3e31b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:assistants.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "assistant";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/manage/assistants";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "助教设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<style>

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}

</style>
       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">助教设置</div>
  <div class=\"panel-body\">

    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\">
      ";
        // line 44
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\" id=\"teachers-form-group\">
        <label class=\"col-md-2 control-label\">设置助教</label>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group teacher-list-group sortable-list\" id=\"teacher-list-group\" data-role=\"list\" style=\"display:none;\"></ul>
          <div class=\"input-group\">
            ";
        // line 51
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        $context["url"] = ($this->env->getExtension('routing')->getPath("classroom_assistants_match", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))) . "?q={{query}}");
        // line 52
        echo "            <input class=\"form-control\" id=\"teacher-input\" type=\"text\" data-role=\"item-input\" data-url=\"";
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $_url_, "html", null, true);
        echo "\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >添加</button>
            </span>
          </div>
          
          <p class=\"help-block\">
            <div>助教可在【";
        // line 59
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "管理】中批改";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "作业和试卷，并且可以在";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "讨论区创建活动</div>
          </p>
          <script type=\"text/plain\" data-role=\"model\">";
        // line 61
        if (isset($context["assistants"])) { $_assistants_ = $context["assistants"]; } else { $_assistants_ = null; }
        echo twig_jsonencode_filter($_assistants_);
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
              ";
        // line 72
        echo "

              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                <img src=\"{{ avatar }}\" class=\"avatar-small\">
                <span class=\"nickname\">{{ nickname }}</span>
                <input type=\"hidden\" name=\"ids[]\" value=\"{{ id }}\">     
                <button  class=\"close delete-btn\" data-role=\"item-delete\" type=\"button\" title=\"删除\" >&times; </button>
              </li>
            ";
        echo "
          </script>

        </div>  
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <button type=\"submit\" class=\"btn btn-fat btn-primary\">保存</button>
        </div>  
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:assistants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 84,  122 => 72,  116 => 61,  107 => 59,  95 => 52,  92 => 51,  81 => 44,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
