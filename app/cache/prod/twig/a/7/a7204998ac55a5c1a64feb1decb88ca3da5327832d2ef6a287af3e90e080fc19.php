<?php

/* ClassroomBundle:ClassroomAdmin:index.html.twig */
class __TwigTemplate_a7204998ac55a5c1a64feb1decb88ca3da5327832d2ef6a287af3e90e080fc19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 1);
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
        $context["menu"] = "admin_classroom_manage";
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
        // line 9
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 10
        echo "
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "名称\" name=\"title\" value=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>
    ";
        // line 16
        $context["tooltip_content"] = "<div style=\"width:250px;\">
              <span style=\"color:blue;\">班级说明</span><br>
              1、编号及排序无法修改；<br>
              2、班级地址规则：域名/classroom/班级编号；
            </div>";
        // line 21
        echo "    ";
        if (isset($context["tooltip_content"])) { $_tooltip_content_ = $context["tooltip_content"]; } else { $_tooltip_content_ = null; }
        $this->loadTemplate("TopxiaAdminBundle:Widget:tooltip-widget.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 21)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $_tooltip_content_, "placement" => "left")));
        // line 22
        echo "  </form>
  ";
        // line 23
        if (isset($context["classroomInfo"])) { $_classroomInfo_ = $context["classroomInfo"]; } else { $_classroomInfo_ = null; }
        if ($_classroomInfo_) {
            // line 24
            echo "  <table class=\"table table-striped table-hover\" id=\"classroom-table\">
    <thead>
    <tr>
      <th>班级编号</th>
      <th width=\"25%\">";
            // line 28
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "名称</th>
      ";
            // line 29
            $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 29)->display($context);
            // line 30
            echo "      <th>课程数</th>
      <th>学员数</th>
      <th width=\"15%\">价格</th>
      <th>状态</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>

   ";
            // line 39
            if (isset($context["classroomInfo"])) { $_classroomInfo_ = $context["classroomInfo"]; } else { $_classroomInfo_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_classroomInfo_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 40
                echo "      ";
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                $context["category"] = (($this->getAttribute($_categories_, $this->getAttribute($_classroom_, "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_categories_, $this->getAttribute($_classroom_, "categoryId", array()), array(), "array"), null)) : (null));
                // line 41
                echo "      ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                $this->loadTemplate("ClassroomBundle:ClassroomAdmin:table-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 41)->display(array_merge($context, array("classroom" => $_classroom_, "category" => $_category_)));
                // line 42
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
    </tbody>

  </table>
  ";
        } else {
            // line 49
            echo "    <div class=\"empty\">暂无";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "信息!</div>
  ";
        }
        // line 51
        echo "  ";
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 51)->display(array_merge($context, array("module" => "classroom", "formId" => "classroom-table")));
        // line 52
        echo "  <div class=\"pull-right\">
   ";
        // line 53
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
  </div>


";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 53,  155 => 52,  152 => 51,  146 => 49,  139 => 44,  124 => 42,  119 => 41,  114 => 40,  96 => 39,  85 => 30,  83 => 29,  79 => 28,  73 => 24,  70 => 23,  67 => 22,  63 => 21,  57 => 16,  47 => 12,  43 => 10,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
