<?php

/* TopxiaAdminBundle:Teacher:teacher-promote-list.html.twig */
class __TwigTemplate_1cc582855b43b794241c9432fe27e5295b1e674f678a95b98f28bc16d834aaa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Teacher:teacher-promote-list.html.twig", 1);
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
        $context["script_controller"] = "teacher/promote-list";
        // line 5
        $context["menu"] = "admin_teacher_promote";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
        // line 10
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Teacher:teacher-promote-list.html.twig", 10)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 11
        echo "    
    <div class=\"form-group\">
      <input type=\"text\" name=\"nickname\" class=\"form-control\" value=\"";
        // line 13
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\"
             placeholder=\"用户名\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>

  <table class=\"table table-striped table-hover mtl\" id=\"teacher-promote-table\">
    <thead>
    <tr>
      <th>顺序号</th>
      <th width=\"35%\">用户名</th>
      ";
        // line 26
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Teacher:teacher-promote-list.html.twig", 26)->display($context);
        // line 27
        echo "      <th>推荐时间</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 32
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "      ";
            $this->loadTemplate("TopxiaAdminBundle:Teacher:teacher-promote-tr.html.twig", "TopxiaAdminBundle:Teacher:teacher-promote-list.html.twig", 33)->display($context);
            // line 34
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
            // line 35
            echo "      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">暂无推荐老师</div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </tbody>
  </table>

  ";
        // line 44
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:teacher-promote-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  119 => 41,  108 => 35,  95 => 34,  92 => 33,  73 => 32,  66 => 27,  64 => 26,  47 => 13,  43 => 11,  40 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
