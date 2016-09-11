<?php

/* TopxiaAdminBundle:User:index.html.twig */
class __TwigTemplate_23eedfeb6c8bcfbad490eec74432a0487feac92fccbec7785d827bfbf3aac8d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:index.html.twig", 2);
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
        // line 4
        $context["menu"] = "admin_user_manage";
        // line 6
        $context["script_controller"] = "user/list";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
  <div class=\"mbm\">
    ";
        // line 14
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:User:index.html.twig", 14)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 15
        echo "   
    <select class=\"form-control\" name=\"datePicker\" id=\"datePicker\">
      ";
        // line 17
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("longinDate" => "登录时间", "registerDate" => "注册时间"), $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "datePicker"), "method"), "--时间类型--");
        echo "
    </select>

    <div class=\"form-group \">
      <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\" value=\"";
        // line 21
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
      -
      <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\" value=\"";
        // line 23
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
    </div>
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"roles\">
      ";
        // line 28
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userRole"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "roles"), "method"), "--所有角色--");
        echo "
    </select>
  </div>

  <span class=\"divider\"></span>
  <div class=\"form-group\">
    <select id=\"keywordUserType\" name=\"keywordUserType\" class=\"form-control\">
      ";
        // line 35
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userType"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "keywordUserType"), "method"), "--注册来源--");
        echo "
    </select>
  </div>
  
  <div class=\"form-group\">
    <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
      ";
        // line 41
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userKeyWordType"), (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) : ("nickname")));
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 46
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
  </div>


  <button class=\"btn btn-primary\">搜索</button>

  ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 53
            echo "    ";
            if (isset($context["showUserExport"])) { $_showUserExport_ = $context["showUserExport"]; } else { $_showUserExport_ = null; }
            if ($_showUserExport_) {
                // line 54
                echo "      <a class=\"btn btn-primary mhs\" id=\"user-export\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("admin_user_export");
                echo "\">导出搜索结果</a>
    ";
            }
            // line 56
            echo "  ";
        }
        // line 57
        echo "</form>



<table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>用户名</th>
      ";
        // line 65
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:User:index.html.twig", 65)->display($context);
        // line 66
        echo "      <th>手机号</th>
      <th>Email</th>
      <th>注册时间</th>
      <th>最近登录</th>
      <th width=\"10%\">操作</th>
    </tr>
  </thead>
  <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">用户总数：<strong class=\"inflow-num\">";
        // line 75
        if (isset($context["userCount"])) { $_userCount_ = $context["userCount"]; } else { $_userCount_ = null; }
        echo twig_escape_filter($this->env, $_userCount_, "html", null, true);
        echo "</strong></span>
    </p>
    ";
        // line 77
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
            // line 78
            echo "      ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
            $this->loadTemplate("TopxiaAdminBundle:User:user-table-tr.html.twig", "TopxiaAdminBundle:User:index.html.twig", 78)->display(array_merge($context, array("user" => $_user_, "profile" => $this->getAttribute($_profiles_, $this->getAttribute($_user_, "id", array()), array(), "array"))));
            // line 79
            echo "    ";
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
        // line 80
        echo "  </tbody>
</table>
  ";
        // line 82
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:User:index.html.twig", 82)->display(array_merge($context, array("module" => "user", "formId" => "user-table")));
        // line 83
        echo " ";
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 83,  202 => 82,  198 => 80,  184 => 79,  179 => 78,  161 => 77,  155 => 75,  144 => 66,  142 => 65,  132 => 57,  129 => 56,  123 => 54,  119 => 53,  117 => 52,  107 => 46,  98 => 41,  88 => 35,  77 => 28,  68 => 23,  62 => 21,  54 => 17,  50 => 15,  47 => 14,  39 => 10,  36 => 9,  33 => 8,  29 => 2,  27 => 6,  25 => 4,  11 => 2,);
    }
}
