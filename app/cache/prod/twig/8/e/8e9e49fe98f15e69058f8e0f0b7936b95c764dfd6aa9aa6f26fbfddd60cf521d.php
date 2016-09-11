<?php

/* TopxiaAdminBundle:Article:article-tr.html.twig */
class __TwigTemplate_8e9e49fe98f15e69058f8e0f0b7936b95c764dfd6aa9aa6f26fbfddd60cf521d extends Twig_Template
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
        echo "<tr id=\"article-";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id", array()), "html", null, true);
        echo "\">
  <td><input value=\"";
        // line 2
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\"> ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id", array()), "html", null, true);
        echo "</td>
  <td>
    <span class=\"text-muted\"><a href=\"";
        // line 4
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id", array()))), "html", null, true);
        echo "\"
                                target=\"_blank\">";
        // line 5
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($_article_, "title", array()), 0, 22), "html", null, true);
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_article_, "title", array())) > 22)) {
            echo "...";
        }
        echo "</a></span>
  </td>
  ";
        // line 7
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Article:article-tr.html.twig", 7)->display(array_merge($context, array("orgCode" => $this->getAttribute($_article_, "orgCode", array()))));
        // line 8
        echo "  <td>
    ";
        // line 9
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($_category_) {
            // line 10
            echo "      <span class=\"text-muted\"><a href=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($_category_, "code", array()))), "html", null, true);
            echo "\"
                                  target=\"_blank\">";
            // line 11
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
            echo "</a></span>
    ";
        } else {
            // line 13
            echo "      <span class=\"text-muted\">未分类</span>
    ";
        }
        // line 15
        echo "  </td>
  <td>";
        // line 16
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "publishedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</td>
  <td>
    <a href=\"javascript:;\" class=\"featured-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置为头条"), "html", null, true);
        echo "\"
       data-set-url=\"";
        // line 20
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute($_article_, "id", array()), "property" => "featured")), "html", null, true);
        echo "\"
       data-cancel-url=\"";
        // line 21
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute($_article_, "id", array()), "property" => "featured")), "html", null, true);
        echo "\">
      <span class=\"label ";
        // line 22
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "featured", array()) == 1)) {
            echo "label-success";
        } else {
            echo "label-default";
        }
        echo "\">头</span></a>
    <a href=\"javascript:;\" class=\"promoted-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐该资讯"), "html", null, true);
        echo "\"
       data-set-url=\"";
        // line 25
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute($_article_, "id", array()), "property" => "promoted")), "html", null, true);
        echo "\"
       data-cancel-url=\"";
        // line 26
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute($_article_, "id", array()), "property" => "promoted")), "html", null, true);
        echo "\">
      <span class=\"label ";
        // line 27
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "promoted", array()) == 1)) {
            echo "label-success";
        } else {
            echo "label-default";
        }
        echo "\">荐</span></a>

    <a href=\"javascript:;\" class=\"sticky-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶该资讯"), "html", null, true);
        echo "\"
       data-set-url=\"";
        // line 31
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute($_article_, "id", array()), "property" => "sticky")), "html", null, true);
        echo "\"
       data-cancel-url=\"";
        // line 32
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute($_article_, "id", array()), "property" => "sticky")), "html", null, true);
        echo "\">
      <span class=\"label ";
        // line 33
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "sticky", array()) == 1)) {
            echo "label-success";
        } else {
            echo "label-default";
        }
        echo "\">顶</span></a>

  </td>

  <td>";
        // line 37
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->getDictText("articleStatus:html", $this->getAttribute($_article_, "status", array()));
        echo "</td>

  <td>
    <div class=\"btn-group\">
      <a href=\"";
        // line 41
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_edit", array("id" => $this->getAttribute($_article_, "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">编辑</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        ";
        // line 46
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "status", array()) != "published")) {
            // line 47
            echo "          <li><a href=\"javascript:\" data-role=\"publish-item\"
                 data-url=\"";
            // line 48
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_publish", array("id" => $this->getAttribute($_article_, "id", array()))), "html", null, true);
            echo "\">发布</a></li>
        ";
        }
        // line 50
        echo "        ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "status", array()) == "published")) {
            // line 51
            echo "          <li><a href=\"javascript:\" data-role=\"unpublish-item\"
                 data-url=\"";
            // line 52
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_unpublish", array("id" => $this->getAttribute($_article_, "id", array()))), "html", null, true);
            echo "\">取消发布</a></li>
        ";
        }
        // line 54
        echo "        ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "status", array()) != "trash")) {
            // line 55
            echo "          <li><a href=\"javascript:\" data-role=\"trash-item\"
                 data-url=\"";
            // line 56
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_trash", array("id" => $this->getAttribute($_article_, "id", array()))), "html", null, true);
            echo "\">移至回收站</a></li>
        ";
        }
        // line 58
        echo "        ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "status", array()) == "trash")) {
            // line 59
            echo "          <li><a href=\"javascript:\" data-role=\"delete-item\"
                 data-url=\"";
            // line 60
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_delete", array("id" => $this->getAttribute($_article_, "id", array()))), "html", null, true);
            echo "\">永久删除</a></li>
        ";
        }
        // line 62
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:article-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 62,  221 => 60,  218 => 59,  214 => 58,  208 => 56,  205 => 55,  201 => 54,  195 => 52,  192 => 51,  188 => 50,  182 => 48,  179 => 47,  176 => 46,  167 => 41,  159 => 37,  147 => 33,  142 => 32,  137 => 31,  133 => 30,  122 => 27,  117 => 26,  112 => 25,  108 => 24,  98 => 22,  93 => 21,  88 => 20,  84 => 19,  77 => 16,  74 => 15,  70 => 13,  64 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  39 => 5,  34 => 4,  25 => 2,  19 => 1,);
    }
}
