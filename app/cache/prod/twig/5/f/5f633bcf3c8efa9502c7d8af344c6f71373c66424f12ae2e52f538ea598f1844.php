<?php

/* ClassroomBundle:ClassroomManage:headteacher.html.twig */
class __TwigTemplate_5f633bcf3c8efa9502c7d8af344c6f71373c66424f12ae2e52f538ea598f1844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:headteacher.html.twig", 1);
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
        $context["side_nav"] = "headTeacher";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/manage/headteacher";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "班主任设置 - ";
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
  <div class=\"panel-heading\">班主任设置</div>
  <div class=\"panel-body\">

    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\">
      ";
        // line 44
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\" id=\"teachers-form-group\">
        <label class=\"col-md-2 control-label\">设置班主任</label>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group teacher-list-group sortable-list\" id=\"teacher-list-group\" data-role=\"list\" style=\"display:none;\"></ul>
          <div class=\"input-group\">
            ";
        // line 51
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        $context["url"] = ($this->env->getExtension('routing')->getPath("classroom_headteacher_match", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))) . "?q={{query}}");
        // line 52
        echo "            <input class=\"form-control\" id=\"teacher-input\" type=\"text\" data-role=\"item-input\" data-url=\"";
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $_url_, "html", null, true);
        echo "\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >添加</button>
            </span>
          </div>
          <p class=\"help-block\">班主任负责管理整个";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("classroom.name", "班级"), "html", null, true);
        echo "，班主任只有一位，并且必须要由老师来担任。</p>
     
          <script type=\"text/plain\" data-role=\"model\">";
        // line 59
        if (isset($context["headTeacher"])) { $_headTeacher_ = $context["headTeacher"]; } else { $_headTeacher_ = null; }
        echo twig_jsonencode_filter($_headTeacher_);
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
              ";
        // line 67
        echo "
              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <img src=\"{{ avatar }}\" class=\"avatar-small\">
                <span class=\"nickname\">{{ nickname }}</span>
                <input type=\"hidden\" name=\"ids[]\" value=\"{{ id }}\">   
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
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:headteacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 79,  116 => 67,  110 => 59,  105 => 57,  95 => 52,  92 => 51,  81 => 44,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
