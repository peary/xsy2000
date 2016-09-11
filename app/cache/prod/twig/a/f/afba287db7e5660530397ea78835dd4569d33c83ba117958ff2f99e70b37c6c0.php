<?php

/* ClassroomBundle:ClassroomManage:create-modal.html.twig */
class __TwigTemplate_afba287db7e5660530397ea78835dd4569d33c83ba117958ff2f99e70b37c6c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "ClassroomBundle:ClassroomManage:create-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "添加学员";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"student-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_create", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 9
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "published")) {
            // line 10
            echo "  \t<div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-nickname\">学员</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-nickname\" name=\"queryfield\" class=\"form-control\" 
        data-url=\"";
            // line 16
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_check", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\" placeholder='邮箱/手机/用户名' >
      \t<div class=\"help-block\">只能添加系统中已注册的用户</div>
    \t</div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"buy-price\">购买价格</label>
      </div>
      <div class=\"col-md-7 controls\">
        <div class=\"input-group\">
          <input type=\"text\" id=\"buy-price\" name=\"price\" value=\"";
            // line 27
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "price", array()), "html", null, true);
            echo "\" class=\"form-control\">
          <div class=\"input-group-addon\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo "</div>
        </div>
        <div class=\"help-block\">
          ";
            // line 31
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 32
                echo "            ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                $context["price"] = ($this->getAttribute($_classroom_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate"));
                // line 33
                echo "            ";
                $context["price_unit"] = $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name");
                // line 34
                echo "          ";
            } else {
                // line 35
                echo "            ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                $context["price"] = $this->getAttribute($_classroom_, "price", array());
                // line 36
                echo "            ";
                $context["price_unit"] = $this->env->getExtension('translator')->trans("元");
                // line 37
                echo "          ";
            }
            // line 38
            echo "          本";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("classroom.name", "班级"), "html", null, true);
            echo "的价格为";
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            echo twig_escape_filter($this->env, $_price_, "html", null, true);
            if (isset($context["price_unit"])) { $_price_unit_ = $context["price_unit"]; } else { $_price_unit_ = null; }
            echo twig_escape_filter($this->env, $_price_unit_, "html", null, true);
            echo "
        </div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-remark\">备注</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-remark\" name=\"remark\" class=\"form-control\">
        <div class=\"help-block\">选填</div>
      </div>
    </div>
  ";
        } else {
            // line 53
            echo "    <div class=\"empty\">";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->getDictText("classroomStatus", $this->getAttribute($_classroom_, "status", array()));
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "不能添加学员，请";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "发布后再添加。</div>
  ";
        }
        // line 55
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "  ";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "published")) {
            // line 64
            echo "    <button id=\"student-create-form-submit\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#student-create-form\" data-submiting-text=\"正在保存...\" data-user=\"";
            if (isset($context["default"])) { $_default_ = $context["default"]; } else { $_default_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_default_, "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_default_, "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\">保存</button>
  ";
        }
        // line 66
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('classroombundle/controller/classroom/student-create')</script>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 66,  162 => 64,  158 => 63,  155 => 62,  146 => 56,  143 => 55,  133 => 53,  109 => 38,  106 => 37,  103 => 36,  99 => 35,  96 => 34,  93 => 33,  89 => 32,  87 => 31,  81 => 28,  76 => 27,  61 => 16,  53 => 10,  50 => 9,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
