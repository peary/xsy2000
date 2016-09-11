<?php

/* ClassroomBundle:ClassroomAdmin:table-tr.html.twig */
class __TwigTemplate_3baaf4409dcd8828bca59e843e108dc0707e1e0b4249c4f5821171a207345dac extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"classroom-table-tr-";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 3)->display($context);
        // line 4
        echo "    <td>";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "id", array()), "html", null, true);
        echo "</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 8
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo "</a>
    </strong>
    <br>
    <span class=\"text-muted text-sm\">分类：";
        // line 11
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_category_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 12
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ($this->getAttribute($_classroom_, "recommended", array())) {
            // line 13
            echo "      <span class=\"label label-default\">荐:";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_classroom_, "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / 序号:";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 15
        echo "    </td>
    ";
        // line 16
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 16)->display(array_merge($context, array("orgCode" => $this->getAttribute($_classroom_, "orgCode", array()))));
        // line 17
        echo "    <td>
    ";
        // line 18
        if (isset($context["classroomCoursesNum"])) { $_classroomCoursesNum_ = $context["classroomCoursesNum"]; } else { $_classroomCoursesNum_ = null; }
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroomCoursesNum_, $this->getAttribute($_classroom_, "id", array()), array(), "array"), "html", null, true);
        echo "

    ";
        // line 20
        if (isset($context["classroomCoursesNum"])) { $_classroomCoursesNum_ = $context["classroomCoursesNum"]; } else { $_classroomCoursesNum_ = null; }
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroomCoursesNum_, $this->getAttribute($_classroom_, "id", array()), array(), "array") > 0)) {
            // line 21
            echo "    <strong>  
      <a target=\"_blank\" href=\"";
            // line 22
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">详情</a>
    </strong>
    ";
        }
        // line 25
        echo "    </td>

    <td>
    ";
        // line 28
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "studentNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    <span style=\"color: #F40; \">
            ";
        // line 33
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 34
            echo "               ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($_classroom_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
            ";
        } else {
            // line 36
            echo "                ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "price", array()), "html", null, true);
            echo "元
            ";
        }
        // line 38
        echo "     </span>
    &nbsp;


    <span style=\"font-size: 13px;color: #666;\">
      ";
        // line 43
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 44
            echo "        原价 ";
            if (isset($context["coinPriceAll"])) { $_coinPriceAll_ = $context["coinPriceAll"]; } else { $_coinPriceAll_ = null; }
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_coinPriceAll_, (($this->getAttribute($_classroom_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_classroom_, "id", array()), 0)) : (0)), array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
      ";
        } else {
            // line 46
            echo "        原价 ";
            if (isset($context["priceAll"])) { $_priceAll_ = $context["priceAll"]; } else { $_priceAll_ = null; }
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_priceAll_, (($this->getAttribute($_classroom_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_classroom_, "id", array()), 0)) : (0)), array(), "array"), "html", null, true);
            echo "元
      ";
        }
        // line 48
        echo "    </span>


    </td>

    <td>
    ";
        // line 54
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "published")) {
            // line 55
            echo "    <span style=\"color: #090;\">已发布</span>
    ";
        } elseif (($this->getAttribute($_classroom_, "status", array()) == "closed")) {
            // line 57
            echo "    
    <span style=\"color: #900;\">已关闭</span>
    ";
        } else {
            // line 60
            echo "    未发布
    ";
        }
        // line 62
        echo "    </td>

    <td>

  <div class=\"btn-group\">

    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
      编辑
      <span class=\"caret\"></span>
    </button>

 <ul class=\"dropdown-menu\">
       <li><a href=\"";
        // line 74
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-edit\"></span> 管理";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "</a></li>
        
        ";
        // line 76
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ($this->getAttribute($_classroom_, "recommended", array())) {
            // line 77
            echo "          <li><a class=\"cancel-recommend-classroom\" href=\"javascript:\" data-url=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_cancel_recommend", array("id" => $this->getAttribute($_classroom_, "id", array()), "ref" => "classroomList")), "html", null, true);
            echo "\" title=\"取消";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "推荐\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
        ";
        } else {
            // line 79
            echo "          <li><a class=\"recommend-classroom\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_set_recommend", array("id" => $this->getAttribute($_classroom_, "id", array()), "ref" => "classroomList")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> 推荐";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 81
        echo "          
       ";
        // line 82
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "published")) {
            // line 83
            echo "       <li><a href=\"javascript:\" class=\"close-classroom\" title=\"关闭";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "(";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_close", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> 关闭";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>

       <li><a href=\"javascript:\" title=\"发送发布";
            // line 85
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "(";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
            echo ")通知短信\" data-url=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sms_prepare", array("targetType" => "classroom", "id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\"><span class=\"glyphicon glyphicon-envelope\"></span> 发送发布通知短信</a></li>

       ";
        } else {
            // line 88
            echo "       <li><a href=\"javascript:\" class=\"open-classroom\" title=\"发布";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "(";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_open", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span>发布";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>

       ";
        }
        // line 91
        echo "
       ";
        // line 92
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "draft")) {
            // line 93
            echo "      <li><a href=\"javascript:\" class=\"delete-classroom\" title=\"删除";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "(";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_delete", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\"></span> 删除";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>
      ";
        }
        // line 95
        echo "  </div>
 </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 95,  275 => 93,  272 => 92,  269 => 91,  254 => 88,  242 => 85,  228 => 83,  225 => 82,  222 => 81,  213 => 79,  204 => 77,  201 => 76,  193 => 74,  179 => 62,  175 => 60,  170 => 57,  166 => 55,  163 => 54,  155 => 48,  147 => 46,  137 => 44,  135 => 43,  128 => 38,  121 => 36,  112 => 34,  110 => 33,  101 => 28,  96 => 25,  89 => 22,  86 => 21,  82 => 20,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  56 => 13,  53 => 12,  48 => 11,  38 => 8,  29 => 4,  27 => 3,  21 => 2,  19 => 1,);
    }
}
