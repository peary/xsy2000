<?php

/* TopxiaAdminBundle:Teacher:index.html.twig */
class __TwigTemplate_4058e63c18f5e28f506c9546fe2490b7c032d5ef79eefc937247d098a07dbe04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 1);
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
        $context["menu"] = "admin_teacher_manage";
        // line 5
        $context["script_controller"] = "teacher/teacher-list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
  ";
        // line 9
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 10
        echo "  
  <div class=\"form-group\">
    <input type=\"text\" name=\"nickname\" class=\"form-control\" value=\"";
        // line 12
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"用户名\">
  </div>

  <button class=\"btn btn-primary\">搜索</button>

</form>
<table id=\"teacher-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>用户名</th>
      ";
        // line 22
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 22)->display($context);
        // line 23
        echo "      <th width=\"30%\" >推荐教师</th>
      <th>最近登录</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 29
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        if ($_users_) {
            // line 30
            echo "      ";
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
                // line 31
                echo "        ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                $this->loadTemplate("TopxiaAdminBundle:Teacher:tr.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 31)->display(array_merge($context, array("user" => $_user_)));
                // line 32
                echo "      ";
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
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "       <tr><td colspan=\"20\"><div class=\"empty\">暂无教师记录</div></td></tr>
    ";
        }
        // line 36
        echo "  </tbody>
</table>
 ";
        // line 38
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 38,  117 => 36,  113 => 34,  110 => 33,  96 => 32,  92 => 31,  73 => 30,  70 => 29,  62 => 23,  60 => 22,  46 => 12,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
