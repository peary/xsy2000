<?php

/* TopxiaAdminBundle:Category:tbody.html.twig */
class __TwigTemplate_0ab493dcdd9b083a0fd644027700e664a0fdd2cf66b837b2831db9f9738d6116 extends Twig_Template
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
        echo "<li id=\"category-table-body\" data-sort-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_category_sort");
        echo "\">
    ";
        // line 2
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        if ( !twig_test_empty($_categories_)) {
            // line 3
            echo "        ";
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo $this->getAttribute($this, "showCategoryTree", array(0 => $_categories_, 1 => $_group_, 2 => false), "method");
            echo "
    ";
        } else {
            // line 5
            echo "        <div class=\"row empty\">暂无分类记录</div>
    ";
        }
        // line 7
        echo "</li>

";
        // line 9
        $this->env->getExtension('topxia_web_twig')->loadScript("category/tbody");
        // line 10
        echo "
";
    }

    // line 11
    public function getshowCategoryTree($__categories__ = null, $__group__ = null, $__isCollapseChildren__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "group" => $__group__,
            "isCollapseChildren" => $__isCollapseChildren__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "    <ul class=\"list-table sortable-list\" data-group-id=\"";
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_categories_, 0, array(), "array"), "parentId", array(), "array"), "html", null, true);
            echo "\">
        ";
            // line 13
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_categories_);
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "            ";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                $context["isParent"] =  !twig_test_empty((($this->getAttribute($_category_, "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "children", array()), null)) : (null)));
                // line 15
                echo "            ";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                $context["isRoot"] = ($this->getAttribute($_category_, "depth", array()) == 1);
                // line 16
                echo "            <li id=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id", array()), "html", null, true);
                echo "\" class=\"tr\" data-name=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                echo "\" data-id=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id", array()), "html", null, true);
                echo "\" data-parent-id=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "parentId", array()), "html", null, true);
                echo "\" style=\"display: ";
                if (isset($context["isRoot"])) { $_isRoot_ = $context["isRoot"]; } else { $_isRoot_ = null; }
                if (isset($context["isCollapseChildren"])) { $_isCollapseChildren_ = $context["isCollapseChildren"]; } else { $_isCollapseChildren_ = null; }
                echo ((( !$_isRoot_ && $_isCollapseChildren_)) ? ("none") : ("block"));
                echo "\">
                <div class=\"row";
                // line 17
                if (isset($context["isParent"])) { $_isParent_ = $context["isParent"]; } else { $_isParent_ = null; }
                if (isset($context["isCollapseChildren"])) { $_isCollapseChildren_ = $context["isCollapseChildren"]; } else { $_isCollapseChildren_ = null; }
                echo ((($_isParent_ && $_isCollapseChildren_)) ? (" row-collapse") : (" row-expand"));
                echo "\">
                    <div class=\"td col-md-7 name sort-handle\" style=\"padding-left: ";
                // line 18
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, (24 * ($this->getAttribute($_category_, "depth", array()) - 1)), "html", null, true);
                echo "px; overflow: hidden\">
                        ";
                // line 19
                if (isset($context["isParent"])) { $_isParent_ = $context["isParent"]; } else { $_isParent_ = null; }
                if ($_isParent_) {
                    // line 20
                    echo "                            <i class=\"list-table-tree-icon glyphicon glyphicon-chevron-";
                    if (isset($context["isCollapseChildren"])) { $_isCollapseChildren_ = $context["isCollapseChildren"]; } else { $_isCollapseChildren_ = null; }
                    echo (($_isCollapseChildren_) ? ("right") : ("down"));
                    echo "\"></i>
                        ";
                } else {
                    // line 22
                    echo "                            <i class=\"list-table-tree-icon\"></i>
                        ";
                }
                // line 24
                echo "                        ";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"td col-md-2 code\">";
                // line 26
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "code", array()), "html", null, true);
                echo "</div>
                    <div class=\"td col-md-3 operation\">
                        <a href=\"javascript:;\" class=\"btn btn-default btn-sm \" data-url=\"";
                // line 28
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($_category_, "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">
                            <i class=\"glyphicon glyphicon-edit\"></i> 编辑
                        </a>
                        ";
                // line 31
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                if (($this->getAttribute($_group_, "depth", array()) > $this->getAttribute($_category_, "depth", array()))) {
                    // line 32
                    echo "                            <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_create", array("parentId" => $this->getAttribute($_category_, "id", array()), "groupId" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
                    echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> 添加子分类</a>
                        ";
                }
                // line 34
                echo "
                    </div>
                </div>
                ";
                // line 37
                if (isset($context["isParent"])) { $_isParent_ = $context["isParent"]; } else { $_isParent_ = null; }
                if ($_isParent_) {
                    // line 38
                    echo "                    ";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    if (isset($context["isCollapseChildren"])) { $_isCollapseChildren_ = $context["isCollapseChildren"]; } else { $_isCollapseChildren_ = null; }
                    echo $this->getAttribute($this, "showCategoryTree", array(0 => $this->getAttribute($_category_, "children", array()), 1 => $_group_, 2 => $_isCollapseChildren_), "method");
                    echo "
                ";
                }
                // line 40
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 42,  176 => 40,  167 => 38,  164 => 37,  159 => 34,  151 => 32,  147 => 31,  140 => 28,  134 => 26,  127 => 24,  123 => 22,  116 => 20,  113 => 19,  108 => 18,  102 => 17,  83 => 16,  79 => 15,  75 => 14,  70 => 13,  64 => 12,  50 => 11,  45 => 10,  43 => 9,  39 => 7,  35 => 5,  27 => 3,  24 => 2,  19 => 1,);
    }
}
