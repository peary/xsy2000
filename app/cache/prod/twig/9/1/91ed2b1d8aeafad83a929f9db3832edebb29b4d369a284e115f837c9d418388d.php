<?php

/* TopxiaAdminBundle:User:approvals.html.twig */
class __TwigTemplate_91ed2b1d8aeafad83a929f9db3832edebb29b4d369a284e115f837c9d418388d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "user/approved";
        // line 5
        $context["menu"] = "admin_approval_approvals";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"btn-group\">
    <a type=\"button\" class=\"btn btn-default btn-sm ";
        // line 9
        if (isset($context["approvalStatus"])) { $_approvalStatus_ = $context["approvalStatus"]; } else { $_approvalStatus_ = null; }
        if (($_approvalStatus_ == "approving")) {
            echo "btn-primary";
        }
        echo "\"
       href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_approval_approvals", array("approvalStatus" => "approving"));
        echo "\">审核中</a>
    <a type=\"button\" class=\"btn btn-default btn-sm ";
        // line 11
        if (isset($context["approvalStatus"])) { $_approvalStatus_ = $context["approvalStatus"]; } else { $_approvalStatus_ = null; }
        if (($_approvalStatus_ == "approved")) {
            echo "btn-primary";
        }
        echo "\"
       href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_approval_approvals", array("approvalStatus" => "approved"));
        echo "\">审核成功</a>
  </div>
  <form id=\"user-search-form\" class=\"form-inline well well-sm mtl\" action=\"\" method=\"get\" novalidate>
   ";
        // line 15
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 15)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 16
        echo "  
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 19
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("" => "--查询条件--", "nickname" => "用户名", "email" => "邮箱", "truename" => "真实姓名", "idcard" => "身份证号码"), $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 23
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"
             placeholder=\"关键词\">
    </div>
    <div class=\"form-group\">
      申请时间:
      <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\"
             value=\"";
        // line 29
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
      -
      <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\"
             value=\"";
        // line 32
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
    </div>
    <button class=\"btn btn-primary\">搜索</button>
  </form>

  ";
        // line 37
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        if ($_users_) {
            // line 38
            echo "    <table id=\"user-table\" class=\"table table-striped\">
      <thead>
      <tr>
        <th>ID</th>
        <th>用户名</th>
        ";
            // line 43
            $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 43)->display($context);
            // line 44
            echo "        <th>真实姓名</th>
        <th>身份证号码</th>
        <th>邮件</th>
        <th>申请时间</th>
        <th>操作</th>
      </tr>
      </thead>
      <tbody>
      ";
            // line 52
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_users_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 53
                echo "        <tr id=\"user-table-tr-";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
                echo "\">
          <td>";
                // line 54
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
                echo "</td>
          <td><strong>";
                // line 55
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $_user_), "method"), "html", null, true);
                echo "</strong></td>
          ";
                // line 56
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 56)->display(array_merge($context, array("orgCode" => $this->getAttribute($_user_, "orgCode", array()))));
                // line 57
                echo "          <td>";
                if (isset($context["userProfiles"])) { $_userProfiles_ = $context["userProfiles"]; } else { $_userProfiles_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_userProfiles_, $this->getAttribute($_user_, "id", array()), array(), "array"), "truename", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 58
                if (isset($context["userProfiles"])) { $_userProfiles_ = $context["userProfiles"]; } else { $_userProfiles_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_userProfiles_, $this->getAttribute($_user_, "id", array()), array(), "array"), "idcard", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 59
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 60
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "approvalTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
          <td>
            ";
                // line 62
                if (isset($context["approvalStatus"])) { $_approvalStatus_ = $context["approvalStatus"]; } else { $_approvalStatus_ = null; }
                if (($_approvalStatus_ == "approved")) {
                    // line 63
                    echo "              <div class=\"btn-group\">
                <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 64
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_info_view", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                    echo "\"
                   class=\"btn btn-default btn-sm\">查看</a>

                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                </a>

                <ul class=\"dropdown-menu\">
                  <li><a data-url=\"";
                    // line 72
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_cancel", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                    echo "\" class=\"btn cancel-approval\">撤销</a>
                  </li>
                </ul>
              </div>
            ";
                } elseif (($_approvalStatus_ == "approving")) {
                    // line 77
                    echo "              <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_approve", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                    echo "\"
                 class=\"btn btn-default btn-sm\">审核</a>
            ";
                }
                // line 80
                echo "          </td>
        </tr>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "      </tbody>
    </table>

    ";
            // line 86
            if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo "
  ";
        } else {
            // line 88
            echo "    ";
            if (isset($context["approvalStatus"])) { $_approvalStatus_ = $context["approvalStatus"]; } else { $_approvalStatus_ = null; }
            if (($_approvalStatus_ == "approved")) {
                // line 89
                echo "      <div class=\"empty\">暂无已经审核成功的实名认证用户</div>
    ";
            } elseif (($_approvalStatus_ == "approving")) {
                // line 91
                echo "      <div class=\"empty\">暂无需要审核中的实名认证用户</div>
    ";
            }
            // line 93
            echo "  ";
        }
        // line 94
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:approvals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 94,  264 => 93,  260 => 91,  256 => 89,  252 => 88,  245 => 86,  240 => 83,  224 => 80,  216 => 77,  207 => 72,  195 => 64,  192 => 63,  189 => 62,  183 => 60,  178 => 59,  172 => 58,  165 => 57,  162 => 56,  156 => 55,  151 => 54,  145 => 53,  127 => 52,  117 => 44,  115 => 43,  108 => 38,  105 => 37,  96 => 32,  89 => 29,  79 => 23,  71 => 19,  66 => 16,  63 => 15,  57 => 12,  50 => 11,  46 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
