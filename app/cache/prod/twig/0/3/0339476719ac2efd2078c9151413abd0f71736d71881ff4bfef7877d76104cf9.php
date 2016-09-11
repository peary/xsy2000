<?php

/* TopxiaAdminBundle:User:roles-modal.html.twig */
class __TwigTemplate_0339476719ac2efd2078c9151413abd0f71736d71881ff4bfef7877d76104cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:roles-modal.html.twig", 1);
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
        echo "设置用户组";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"user-roles-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_roles", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\" data-currentuser=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()), "html", null, true);
        echo "\" data-edituser=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
        echo "\">
  <div class=\"checkboxs\">
  \t";
        // line 10
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute($_app_, "user", array()), "roles", array()))) {
            // line 11
            echo "    ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->checkboxs("roles", $this->env->getExtension('topxia_web_twig')->getDict("userRole"), $this->getAttribute($_user_, "roles", array()));
            echo "
    ";
        } else {
            // line 13
            echo "    <label>
    \t<input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_USER\" ";
            // line 14
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (twig_in_filter("ROLE_USER", $this->getAttribute($_user_, "roles", array()))) {
                echo "checked=\"checked\"";
            }
            echo ">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            // line 15
            echo "    </label>
    <label>
    \t<input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_TEACHER\" ";
            // line 17
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($_user_, "roles", array()))) {
                echo "checked=\"checked\"";
            }
            echo ">教师
    </label>
    <label>
      <input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_ADMIN\" ";
            // line 20
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($_user_, "roles", array()))) {
                echo "checked=\"checked\"";
            }
            echo ">管理员
    </label>
    ";
        }
        // line 23
        echo "  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "  <button id=\"change-user-roles-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-roles-form\"  data-user=\"";
        if (isset($context["default"])) { $_default_ = $context["default"]; } else { $_default_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_default_, "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_default_, "user_name", array()), "学员")) : ("学员")), "html", null, true);
        echo "\" >保存</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('user/roles-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:roles-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  113 => 29,  106 => 24,  103 => 23,  94 => 20,  85 => 17,  81 => 15,  70 => 14,  67 => 13,  60 => 11,  57 => 10,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
