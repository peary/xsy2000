<?php

/* TopxiaAdminBundle:User:change-password-modal.html.twig */
class __TwigTemplate_635803377967ba4ffa03fa2ba0ee2cb75ca29291fcdcbfc9438278bfe0c3cce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:change-password-modal.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "重置用户";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
        echo "的密码";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  <form class=\"form-horizontal\" id=\"change-password-form\"  action=\"";
        // line 7
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_change_password", array("userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\"  method=\"post\">

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"><label for=\"code\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "</label></div>
        <div class=\"col-md-8 controls\"> 
          <div style=\"margin-top: 7px;\">
          ";
        // line 13
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
        echo "
          </div>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"><label for=\"code\">用户邮箱</label></div>
        <div class=\"col-md-8 controls\"> 
          <div style=\"margin-top: 7px;\">
            ";
        // line 22
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($_user_, "email", array()), "@");
        // line 23
        echo "            ";
        if (isset($context["emailArr"])) { $_emailArr_ = $context["emailArr"]; } else { $_emailArr_ = null; }
        if (($this->getAttribute($_emailArr_, 1, array(), "array") != "edusoho.net")) {
            // line 24
            echo "              ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 26
            echo "              --
            ";
        }
        // line 28
        echo "          </div>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"><label for=\"newPassword\">新密码</label></div>
        <div class=\"col-md-8 controls\"> 
        <input class=\"form-control\" type=\"password\" id=\"newPassword\" value=\"\" name=\"newPassword\">
          <p class=\"help-block\">5-20位英文、数字、符号，区分大小写</p>
        </div>
      </div>

       <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"><label for=\"confirmPassword\">确认密码</label></div>
        <div class=\"col-md-8 controls\"> 
          <input class=\"form-control\" type=\"password\" id=\"confirmPassword\" value=\"\"
          name=\"confirmPassword\" data-explain=\"再输入一次密码\">
          <p class=\"help-block\">再输入一次密码</p>
        </div>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "  <button id=\"change-password-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#change-password-form\">提交</button>
  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
 <script>app.load('user/change-password')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:change-password-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  119 => 53,  111 => 48,  89 => 28,  85 => 26,  78 => 24,  74 => 23,  71 => 22,  58 => 13,  52 => 10,  45 => 7,  42 => 6,  39 => 5,  30 => 3,  11 => 1,);
    }
}
