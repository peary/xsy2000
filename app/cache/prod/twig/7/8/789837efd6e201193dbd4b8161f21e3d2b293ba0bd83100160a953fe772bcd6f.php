<?php

/* ClassroomBundle:ClassroomManage:set-info.html.twig */
class __TwigTemplate_789837efd6e201193dbd4b8161f21e3d2b293ba0bd83100160a953fe772bcd6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:set-info.html.twig", 1);
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
        // line 3
        $context["side_nav"] = "base";
        // line 4
        $context["script_controller"] = "classroombundle/controller/classroom/set-info";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom-admin/classroom-create");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "基本信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">基本信息</div>
  <div class=\"panel-body\">
    ";
        // line 13
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"classroom-set-form\" novalidate>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"title\">名称</label>
        </div>
        <div class=\"controls col-md-8\">
          <input name=\"title\" type=\"text\"  id=\"title\" class=\"form-control\" value=\"";
        // line 21
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo "\"/>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >简介</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea name=\"about\" class=\"form-control\" rows=\"6\" 
          data-image-upload-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\"
          data-flash-upload-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default", "flash"))), "html", null, true);
        echo "\" id=\"about\">";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo $this->getAttribute($_classroom_, "about", array());
        echo "</textarea>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 38
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "展示</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"showable-open\" type=\"radio\" name=\"showable\" value=\"1\" data-showable=\"";
        // line 42
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "showable", array()), "html", null, true);
        echo "\"> 开启
          </label>
          <label>
            <input id=\"showable-close\" type=\"radio\" name=\"showable\" value=\"0\"> 关闭
          </label>
          <div class=\"help-block\">关闭后，";
        // line 47
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "将彻底隐藏，无法在前台查看到。</div>
        </div>

      </div>
      <div class=\"row form-group\">
      <div id='buyable'>
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 54
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "购买</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"buyable-open\" type=\"radio\" name=\"buyable\" value=\"1\" data-buyable=\"";
        // line 58
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "buyable", array()), "html", null, true);
        echo "\" > 开启
          </label>
          <label>
            <input id=\"buyable-close\" type=\"radio\" name=\"buyable\" value=\"0\"> 关闭
          </label>
          <div class=\"help-block\">关闭后";
        // line 63
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "将无法在线购买加入。</div>
        </div>
        </div>
      </div>
      
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">分类</label>
        <div class=\"col-md-8 controls\">
          <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
            ";
        // line 72
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($_classroom_, "categoryId", array()), array("0" => "分类"));
        echo "
          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

     ";
        // line 78
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "ClassroomBundle:ClassroomManage:set-info.html.twig", 78)->display(array_merge($context, array("orgCode" => $this->getAttribute($_classroom_, "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 79
        echo "    
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\" id=\"classroom-save\">提交</button>  
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:set-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 87,  160 => 79,  157 => 78,  147 => 72,  135 => 63,  126 => 58,  119 => 54,  109 => 47,  100 => 42,  93 => 38,  81 => 32,  77 => 31,  63 => 21,  51 => 13,  46 => 10,  43 => 9,  36 => 7,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
