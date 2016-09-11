<?php

/* TopxiaAdminBundle:User:user-table-tr.html.twig */
class __TwigTemplate_d8e92a2a62ee1da86d176776ff5b375740ad6b08c16ee4f1e768e55ea84177b6 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 3)->display($context);
        // line 4
        echo "  <td>
    <strong>";
        // line 5
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $_admin_macro_->getuser_link($_user_);
        echo "</strong>
    ";
        // line 6
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "locked", array())) {
            // line 7
            echo "      <label class=\"label label-danger\">禁</label>
    ";
        }
        // line 9
        echo "
    <br>
    <span class=\"text-muted text-sm\">
      ";
        // line 12
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_user_, "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 13
            echo "        ";
            if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->getDictText("userRole", $_role_);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </span>
  </td>
 ";
        // line 17
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 17)->display(array_merge($context, array("orgCode" => $this->getAttribute($_user_, "orgCode", array()))));
        // line 18
        echo "  <td>
    ";
        // line 19
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_user_, "verifiedMobile", array())) {
            // line 20
            echo "      ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "verifiedMobile", array()), "html", null, true);
            echo "<span class=\"text-success\">(已绑定)</span>
    ";
        } elseif ($this->getAttribute($_profile_, "mobile", array())) {
            // line 22
            echo "      ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(未绑定)</span>
    ";
        } else {
            // line 24
            echo "       -- 
    ";
        }
        // line 26
        echo "  </td>

  <td>
    ";
        // line 29
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($_user_, "email", array()), "@");
        // line 30
        echo "    ";
        if (isset($context["emailArr"])) { $_emailArr_ = $context["emailArr"]; } else { $_emailArr_ = null; }
        if (($this->getAttribute($_emailArr_, 1, array(), "array") != "edusoho.net")) {
            // line 31
            echo "      ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 33
            echo "      --
    ";
        }
        // line 35
        echo "    
    <br>
    ";
        // line 37
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "emailVerified", array())) {
            // line 38
            echo "      <label class=\"label label-success\" title=\"该Email地址已验证\">已验证</label>
    ";
        }
        // line 40
        echo "  </td>

  <td>
    <span class=\"text-sm\">";
        // line 43
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 46
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "createdIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "createdIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 47
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute($_user_, "createdIp", array())), "html", null, true);
        echo "
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      ";
        // line 53
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($_user_, "loginTime", array()) == 0)) {
            // line 54
            echo "       --
      ";
        } else {
            // line 56
            echo "        ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 58
        echo "    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 61
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "loginIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 62
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute($_user_, "loginIp", array())), "html", null, true);
        echo "
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 67
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 72
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\">编辑用户信息</a></li>
        ";
        // line 73
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.enable_org", "0")) {
            // line 74
            echo "          <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_org_update", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">修改用户组织机构</a></li>
        ";
        }
        // line 76
        echo "        ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute($_app_, "user", array()), "roles", array()))) {
            // line 77
            echo "            ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($_user_, "roles", array()))) {
                // line 78
                echo "                  <li></li>
             ";
            } else {
                // line 80
                echo "                   <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_roles", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                echo "\">设置用户组</a></li>
            ";
            }
            // line 82
            echo "       ";
        } else {
            // line 83
            echo "                   <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_roles", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">设置用户组</a></li>
        ";
        }
        // line 85
        echo "
        ";
        // line 86
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 87
            echo "
        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 88
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_avatar", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">修改用户头像</a></li>

        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 90
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_change_password", array("userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">修改密码</a></li>

        ";
        }
        // line 93
        echo "
        ";
        // line 94
        if (isset($context["emailArr"])) { $_emailArr_ = $context["emailArr"]; } else { $_emailArr_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->getSetting("mailer.enabled") && ($this->getAttribute($_emailArr_, 1, array(), "array") != "edusoho.net"))) {
            // line 95
            echo "          <li><a class=\"send-passwordreset-email\" href=\"javascript:\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_send_passwordreset_email", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">发送密码重置邮件</a></li>

          <li><a class=\"send-emailverify-email\" href=\"javascript:\" data-url=\"";
            // line 97
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_send_emailverify_email", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">发送Email验证邮件</a></li>
        ";
        }
        // line 99
        echo "
        ";
        // line 100
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "locked", array())) {
            // line 101
            echo "          <li><a class=\"unlock-user\" href=\"javascript:\" title=\"解禁用户";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
            echo "\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_unlock", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">解禁用户</a></li>
        ";
        } else {
            // line 103
            echo "              ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute($_app_, "user", array()), "roles", array()))) {
                // line 104
                echo "                    ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($_user_, "roles", array()))) {
                    // line 105
                    echo "                          <li></li>
                           ";
                } else {
                    // line 107
                    echo "                            <li><a class=\"lock-user\" href=\"javascript:\" title=\"封禁用户";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
                    echo "\" data-url=\"";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                    echo "\">封禁用户</a></li>
                    ";
                }
                // line 109
                echo "               ";
            } else {
                // line 110
                echo "                   <li><a class=\"lock-user\" href=\"javascript:\" title=\"封禁用户";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
                echo "\" data-url=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                echo "\">封禁用户</a></li>
              ";
            }
            // line 112
            echo "        ";
        }
        // line 113
        echo "      </ul>
    </div>
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 113,  340 => 112,  330 => 110,  327 => 109,  317 => 107,  313 => 105,  309 => 104,  305 => 103,  295 => 101,  292 => 100,  289 => 99,  283 => 97,  276 => 95,  273 => 94,  270 => 93,  263 => 90,  257 => 88,  254 => 87,  252 => 86,  249 => 85,  242 => 83,  239 => 82,  232 => 80,  228 => 78,  224 => 77,  220 => 76,  213 => 74,  211 => 73,  206 => 72,  197 => 67,  188 => 62,  180 => 61,  175 => 58,  168 => 56,  164 => 54,  161 => 53,  151 => 47,  143 => 46,  136 => 43,  131 => 40,  127 => 38,  124 => 37,  120 => 35,  116 => 33,  109 => 31,  105 => 30,  102 => 29,  97 => 26,  93 => 24,  86 => 22,  79 => 20,  75 => 19,  72 => 18,  69 => 17,  65 => 15,  55 => 13,  50 => 12,  45 => 9,  41 => 7,  38 => 6,  32 => 5,  29 => 4,  27 => 3,  21 => 2,  19 => 1,);
    }
}
