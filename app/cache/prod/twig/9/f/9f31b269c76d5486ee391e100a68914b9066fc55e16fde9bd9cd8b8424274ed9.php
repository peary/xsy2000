<?php

/* TopxiaAdminBundle:Course:index.html.twig */
class __TwigTemplate_9f31b269c76d5486ee391e100a68914b9066fc55e16fde9bd9cd8b8424274ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 1);
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
        $context["menu"] = "admin_course_manage";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 7
        $context["tab"] = "questions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:Course:tab.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 10)->display($context);
        // line 11
        echo "  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      ";
        // line 14
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 14)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 15
        echo "
      <div class=\"form-group\">
        <select class=\"form-control\" style=\"width:150px;\" name=\"categoryId\">
          ";
        // line 18
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), "课程分类");
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"status\">
          ";
        // line 23
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "status"), "method"), "课程状态");
        echo "
        </select>
      </div>
      ";
        // line 26
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (($_filter_ == "normal")) {
            // line 27
            echo "        <div class=\"form-group\">
          <select style=\"max-width:150px;\" class=\"form-control\" name=\"chargeStatus\">
            ";
            // line 29
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("free" => "免费课程", "charge" => "收费课程"), $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "chargeStatus"), "method"), "收费状态");
            echo "
          </select>
        </div>
      ";
        }
        // line 33
        echo "
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"";
        // line 35
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\"
               value=\"";
        // line 39
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">搜索</button>

      ";
        // line 43
        $context["tooltip_content"] = "<div style=\"width:250px;\">
              <span style=\"color:blue;\">课程说明</span><br>
              1、编号无法修改以及排序；<br>
              2、课程地址规则：域名/course/课程编号;
            </div>";
        // line 48
        echo "      ";
        if (isset($context["tooltip_content"])) { $_tooltip_content_ = $context["tooltip_content"]; } else { $_tooltip_content_ = null; }
        $this->loadTemplate("TopxiaAdminBundle:Widget:tooltip-widget.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 48)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $_tooltip_content_, "placement" => "left")));
        // line 49
        echo "    </form>
  </div>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      <th>编号</th>
      <th width=\"25%\">名称</th>
      <th>价格</th>
      ";
        // line 58
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 58)->display($context);
        // line 59
        echo "      <th width=\"\">连载状态</th>
      ";
        // line 60
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (($_filter_ == "classroom")) {
            // line 61
            echo "        <th>所在";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</th>
      ";
        } else {
            // line 63
            echo "        <th>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            // line 64
            echo "          数
        </th>

      ";
        }
        // line 68
        echo "      ";
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (($_filter_ == "course")) {
            // line 69
            echo "        <th>收入(元)</th>
      ";
        } elseif (($_filter_ == "vip")) {
            // line 71
            echo "        <th>会员等级</th>
      ";
        }
        // line 73
        echo "      <th>状态</th>
      <th>创建者</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 79
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_courses_);
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 80
            echo "      ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["user"] = (($this->getAttribute($_users_, $this->getAttribute($_course_, "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_course_, "userId", array()), array(), "array"), null)) : (null));
            // line 81
            echo "      ";
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["category"] = (($this->getAttribute($_categories_, $this->getAttribute($_course_, "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_categories_, $this->getAttribute($_course_, "categoryId", array()), array(), "array"), null)) : (null));
            // line 82
            echo "      ";
            $this->loadTemplate("TopxiaAdminBundle:Course:tr.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 82)->display($context);
            // line 83
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 84
            echo "      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">暂无课程记录</div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    </tbody>
  </table>
  ";
        // line 92
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 92)->display(array_merge($context, array("module" => "course", "formId" => "course-table")));
        // line 93
        echo "  ";
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 93,  233 => 92,  229 => 90,  218 => 84,  205 => 83,  202 => 82,  197 => 81,  192 => 80,  173 => 79,  165 => 73,  161 => 71,  157 => 69,  153 => 68,  147 => 64,  140 => 63,  134 => 61,  131 => 60,  128 => 59,  126 => 58,  115 => 49,  111 => 48,  105 => 43,  97 => 39,  89 => 35,  85 => 33,  77 => 29,  73 => 27,  70 => 26,  63 => 23,  54 => 18,  49 => 15,  46 => 14,  41 => 11,  38 => 10,  35 => 9,  31 => 1,  29 => 7,  27 => 5,  25 => 3,  11 => 1,);
    }
}
