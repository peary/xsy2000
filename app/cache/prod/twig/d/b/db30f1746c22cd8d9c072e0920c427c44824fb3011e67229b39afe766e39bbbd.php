<?php

/* TopxiaAdminBundle:Article:index.html.twig */
class __TwigTemplate_db30f1746c22cd8d9c072e0920c427c44824fb3011e67229b39afe766e39bbbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 1);
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
        $context["script_controller"] = "article/list";
        // line 5
        $context["menu"] = "admin_operation_article_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<form class=\"well well-sm form-inline\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_article");
        echo "\">

     ";
        // line 10
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 10)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 11
        echo "     
\t<div class=\"form-group\">
\t\t<select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\">
            <option value=\"0\">--所属栏目--</option>
            ";
        // line 15
        if (isset($context["categoryTree"])) { $_categoryTree_ = $context["categoryTree"]; } else { $_categoryTree_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categoryTree_);
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 16
            echo "                <option value=";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tree_, "id", array()), "html", null, true);
            echo " ";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
            if (($this->getAttribute($_tree_, "id", array()) == $_categoryId_)) {
                echo "selected";
            }
            echo ">";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($_tree_, "depth", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
                if (($this->getAttribute($_tree_, "depth", array()) > 1)) {
                    echo "　";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tree_, "name", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"标题关键词\" value=\"";
        // line 21
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
\t</div>
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"property\">
\t\t  ";
        // line 25
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("articleProperty"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "property"), "method"), "--属性--");
        echo "
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  ";
        // line 30
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("articleStatus"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "status"), "method"), "--发布状态--");
        echo "
\t\t</select>
\t</div>
\t<button class=\"btn btn-primary\" type=\"submit\">搜索</button>
</form>

<div id=\"aticle-table-container\">

<table class=\"table table-hover table-striped\" id=\"article-table\">
\t<thead>
\t\t<tr>
\t\t\t<th><input type=\"checkbox\"  data-role=\"batch-select\" id=\"batch-select\"> ID</th>
\t\t\t<th width=\"25%\">资讯标题</th>
\t\t\t";
        // line 43
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 43)->display($context);
        // line 44
        echo "\t\t\t<th>栏目</th>
\t\t\t<th>更新时间</th>
\t\t\t<th>属性
                <a class=\"glyphicon glyphicon-question-sign text-muted pull-center \" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\">
                </a>
\t            <div id=\"article-property-tips-html\" style=\"display:none;\">
\t                <p>设为“<strong>置顶</strong>”后，该资讯将会显示在列表的最前面。</p>
\t                <p>设为“<strong>头条</strong>”后，如果设置了缩略图，则该资讯的缩略图将显示在资讯首页的头条图片区，图片尺寸建议统一为：754*424。</p>
\t                <p>设为“<strong>推荐</strong>”后，该资讯将会显示在页面右侧的推荐资讯中。</p>
\t            </div>
\t\t\t</th>
\t\t\t<th>状态</th>
\t\t\t<th width=\"10%\">操作</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 60
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ($_articles_) {
            // line 61
            echo "\t\t\t";
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 62
                echo "\t\t\t  ";
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                $context["category"] = (($this->getAttribute($_categories_, $this->getAttribute($_article_, "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_categories_, $this->getAttribute($_article_, "categoryId", array()), array(), "array"), null)) : (null));
                // line 63
                echo "\t\t\t  ";
                $this->loadTemplate("TopxiaAdminBundle:Article:article-tr.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 63)->display($context);
                // line 64
                echo "\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t";
        } else {
            // line 66
            echo "\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">暂无页面记录</div></td></tr>
\t\t";
        }
        // line 68
        echo "\t</tbody>
\t</table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"资讯\" data-url=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("admin_article_delete");
        echo "\">删除</button>
    ";
        // line 73
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 73)->display(array_merge($context, array("module" => "article", "formId" => "article-table", "generate" => "no-generate")));
        // line 74
        echo "  </div>
  </div>

";
        // line 77
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 77,  209 => 74,  207 => 73,  203 => 72,  197 => 68,  193 => 66,  190 => 65,  176 => 64,  173 => 63,  168 => 62,  149 => 61,  146 => 60,  128 => 44,  126 => 43,  109 => 30,  100 => 25,  92 => 21,  87 => 18,  56 => 16,  51 => 15,  45 => 11,  42 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
