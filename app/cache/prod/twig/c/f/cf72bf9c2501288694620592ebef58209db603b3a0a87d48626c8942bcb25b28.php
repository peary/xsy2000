<?php

/* TopxiaWebBundle:Course:explore.html.twig */
class __TwigTemplate_cf72bf9c2501288694620592ebef58209db603b3a0a87d48626c8942bcb25b28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "course-list-page bg-blank";
        // line 4
        $context["siteNav"] = "course/explore";
        // line 5
        $context["script_controller"] = "course/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["categoryArray"])) { $_categoryArray_ = $context["categoryArray"]; } else { $_categoryArray_ = null; }
        if ($_categoryArray_) {
            if (isset($context["categoryArray"])) { $_categoryArray_ = $context["categoryArray"]; } else { $_categoryArray_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_categoryArray_, "name", array()), "html", null, true);
            if (isset($context["categoryParent"])) { $_categoryParent_ = $context["categoryParent"]; } else { $_categoryParent_ = null; }
            if ($_categoryParent_) {
                echo ",";
                if (isset($context["categoryParent"])) { $_categoryParent_ = $context["categoryParent"]; } else { $_categoryParent_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_categoryParent_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_categoryParent_, "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo "全部";
        }
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["categoryArrayDescription"])) { $_categoryArrayDescription_ = $context["categoryArrayDescription"]; } else { $_categoryArrayDescription_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter($_categoryArrayDescription_, "")) : ("")), 100);
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["categoryArray"])) { $_categoryArray_ = $context["categoryArray"]; } else { $_categoryArray_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_categoryArray_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_categoryArray_, "name", array()), $this->env->getExtension('translator')->trans("全部"))) : ($this->env->getExtension('translator')->trans("全部"))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By EduSoho";
        }
        // line 10
        echo "    ";
    }

    // line 12
    public function block_top_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程列表"), "html", null, true);
        echo "
      </div>

      ";
        // line 20
        $context["classrooms"] = $this->env->getExtension('topxia_data_twig')->getData("Classrooms", array("count" => 1));
        // line 21
        echo "      ";
        if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
        if (((array_key_exists("classrooms", $context)) ? (_twig_default_filter($_classrooms_, null)) : (null))) {
            // line 22
            echo "        <a class=\"btn btn-primary btn-lg more\" href=\"";
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\">
          查看";
            // line 23
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "
        </a>
      ";
        }
        // line 26
        echo "    </div>
  </div>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "  ";
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context["type"] = (($this->getAttribute($_filter_, "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_filter_, "type", array()), "all")) : ("all"));
        // line 32
        echo "  ";
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context["price"] = (($this->getAttribute($_filter_, "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_filter_, "price", array()), "all")) : ("all"));
        // line 33
        echo "  ";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter($_orderBy_, "latest")) : ("latest"));
        // line 34
        echo "  ";
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context["currentLevelId"] = (($this->getAttribute($_filter_, "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_filter_, "currentLevelId", array()), "all")) : ("all"));
        // line 35
        echo "  ";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Category:treeNav", array("category" => ((array_key_exists("category", $context)) ? (_twig_default_filter($_category_, "")) : ("")), "path" => "course_explore", "filter" => array("type" => $_type_, "price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => $_orderBy_)));
        echo "
  <div class=\"es-filter\">
    <ul class=\"nav nav-sort clearfix\">
      <li><a href=\"";
        // line 38
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $_category_, "filter" => array("type" => $_type_, "price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => "latest")), "html", null, true);
        echo "\" class=\"";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if (($_orderBy_ == "latest")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新"), "html", null, true);
        echo "</a></li><li><a href=\"";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $_category_, "filter" => array("type" => $_type_, "price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => "studentNum")), "html", null, true);
        echo "\" class=\"";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if (($_orderBy_ == "studentNum")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最热"), "html", null, true);
        echo "</a></li><li><a href=\"";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $_category_, "filter" => array("type" => $_type_, "price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" class=\"";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if (($_orderBy_ == "recommendedSeq")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐"), "html", null, true);
        echo "</a></li>
    </ul>
    <div class=\"filter hidden-xs\">
      ";
        // line 41
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 42
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 44
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (($_currentLevelId_ == "all")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员课程"), "html", null, true);
            }
            // line 45
            echo "            ";
            if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_levels_);
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
                if (($this->getAttribute($_level_, "id", array()) == $_currentLevelId_)) {
                    if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name", array()), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 48
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (($_currentLevelId_ == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $_category_, "filter" => array("type" => $_type_, "price" => $_price_, "currentLevelId" => "all"), "orderBy" => $_orderBy_)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
            echo "</a></li>
          ";
            // line 49
            if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_levels_);
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 50
                echo "            <li role=\"presentation\"class=\"";
                if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
                if (($this->getAttribute($_level_, "id", array()) == $_currentLevelId_)) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
                if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $_category_, "filter" => array("type" => $_type_, "price" => $_price_, "currentLevelId" => $this->getAttribute($_level_, "id", array())), "orderBy" => $_orderBy_)), "html", null, true);
                echo "\">";
                if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "          </ul>
        </div>
      ";
        }
        // line 55
        echo "      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 56
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "live")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"live\" value=\"
        ";
        // line 57
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "all")) {
            // line 58
            echo "          ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $_category_, "filter" => array("type" => "live", "price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => $_orderBy_)), "html", null, true);
            echo "
        ";
        } else {
            // line 60
            echo "          ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $_category_, "filter" => array("type" => "all", "price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => $_orderBy_)), "html", null, true);
            echo "
        ";
        }
        // line 61
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播课程"), "html", null, true);
        echo "
      </label>
      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 64
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (($_price_ == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 65
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (($_price_ == "all")) {
            // line 66
            echo "          ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $_category_, "filter" => array("type" => $_type_, "price" => "free", "currentLevelId" => $_currentLevelId_), "orderBy" => $_orderBy_)), "html", null, true);
            echo "
        ";
        } else {
            // line 68
            echo "          ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $_category_, "filter" => array("type" => $_type_, "price" => "all", "currentLevelId" => $_currentLevelId_), "orderBy" => $_orderBy_)), "html", null, true);
            echo "
        ";
        }
        // line 70
        echo "        \"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费课程"), "html", null, true);
        echo "
      </label>
    </div>
  </div>

  <div class=\"course-list\">
    <div class=\"row\">
      ";
        // line 77
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 78
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_courses_);
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
                // line 79
                echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
                // line 80
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 80)->display($context);
                // line 81
                echo "          </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "      ";
        } else {
            // line 84
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该分类下无课程"), "html", null, true);
            echo "</div>
      ";
        }
        // line 86
        echo "    </div>
  </div>
  <nav class=\"text-center\">
    ";
        // line 89
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 89,  405 => 86,  399 => 84,  396 => 83,  381 => 81,  379 => 80,  376 => 79,  357 => 78,  354 => 77,  343 => 70,  333 => 68,  323 => 66,  320 => 65,  313 => 64,  306 => 61,  296 => 60,  286 => 58,  283 => 57,  276 => 56,  273 => 55,  268 => 52,  245 => 50,  240 => 49,  225 => 48,  221 => 46,  205 => 45,  200 => 44,  196 => 42,  194 => 41,  151 => 38,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  120 => 30,  114 => 26,  108 => 23,  103 => 22,  99 => 21,  97 => 20,  91 => 17,  85 => 13,  82 => 12,  78 => 10,  64 => 9,  57 => 8,  39 => 7,  35 => 1,  33 => 5,  31 => 4,  29 => 3,  11 => 1,);
    }
}
