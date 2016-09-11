<?php

/* ClassroomBundle:Classroom:explore.html.twig */
class __TwigTemplate_11523d122d65943f77b9c3c2dfbed987dd0cdf8bf9f2ca1878a2b894fa487478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:Classroom:explore.html.twig", 1);
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
        // line 2
        $context["bodyClass"] = "classroom-list-page bg-blank";
        // line 3
        $context["script_controller"] = "classroombundle/controller/classroom/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
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

    // line 5
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["categoryArrayDescription"])) { $_categoryArrayDescription_ = $context["categoryArrayDescription"]; } else { $_categoryArrayDescription_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter($_categoryArrayDescription_, "")) : ("")), 100);
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["categoryArray"])) { $_categoryArray_ = $context["categoryArray"]; } else { $_categoryArray_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_categoryArray_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_categoryArray_, "name", array()), "全部")) : ("全部")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By EduSoho";
        }
        // line 7
        echo "    ";
    }

    // line 9
    public function block_top_content($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        ";
        // line 14
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "列表
      </div>
      <a class=\"btn btn-primary btn-lg more\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\">
        查看课程
      </a>
    </div>
  </div>
  
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "  ";
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context["price"] = (($this->getAttribute($_filter_, "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_filter_, "price", array()), "all")) : ("all"));
        // line 25
        echo "  ";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter($_orderBy_, "createdTime")) : ("createdTime"));
        // line 26
        echo "  ";
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context["currentLevelId"] = (($this->getAttribute($_filter_, "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_filter_, "currentLevelId", array()), "all")) : ("all"));
        // line 27
        echo "  ";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Category:treeNav", array("category" => $_category_, "path" => "classroom_explore", "filter" => array("price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => $_orderBy_)));
        echo "
  <div class=\"es-filter\">
    <ul class=\"nav nav-sort\">
      <li><a href=\"";
        // line 30
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $_category_, "filter" => array("price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => "createdTime")), "html", null, true);
        echo "\" class=\"";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if (($_orderBy_ == "createdTime")) {
            echo " active ";
        }
        echo "\">最新</a></li><li><a href=\"";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $_category_, "filter" => array("price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => "studentNum")), "html", null, true);
        echo "\" class=\"";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if (($_orderBy_ == "studentNum")) {
            echo " active ";
        }
        echo "\">最热</a></li><li><a href=\"";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $_category_, "filter" => array("price" => $_price_, "currentLevelId" => $_currentLevelId_), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" class=\"";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if (($_orderBy_ == "recommendedSeq")) {
            echo " active ";
        }
        echo "\">推荐</a></li>
    </ul>
    <div class=\"filter hidden-xs\">
      ";
        // line 33
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 34
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 36
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (($_currentLevelId_ == "all")) {
                echo "会员";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            }
            // line 37
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
            // line 38
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 40
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (($_currentLevelId_ == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $_category_, "filter" => array("price" => $_price_, "currentLevelId" => "all"), "orderBy" => $_orderBy_)), "html", null, true);
            echo "\">全部</a></li>
          ";
            // line 41
            if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_levels_);
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 42
                echo "            <li role=\"presentation\"class=\"";
                if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
                if (($this->getAttribute($_level_, "id", array()) == $_currentLevelId_)) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
                if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $_category_, "filter" => array("price" => $_price_, "currentLevelId" => $this->getAttribute($_level_, "id", array())), "orderBy" => $_orderBy_)), "html", null, true);
                echo "\">";
                if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "          </ul>
        </div>
      ";
        }
        // line 47
        echo "      <label class=\"checkbox-inline hidden-xs\">
        <input type=\"checkbox\" ";
        // line 48
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (($_price_ == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 49
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        if (($_price_ == "all")) {
            // line 50
            echo "          ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $_category_, "filter" => array("price" => "free", "currentLevelId" => $_currentLevelId_), "orderBy" => $_orderBy_)), "html", null, true);
            echo "
        ";
        } else {
            // line 51
            echo " 
          ";
            // line 52
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["currentLevelId"])) { $_currentLevelId_ = $context["currentLevelId"]; } else { $_currentLevelId_ = null; }
            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $_category_, "filter" => array("price" => "all", "currentLevelId" => $_currentLevelId_), "orderBy" => $_orderBy_)), "html", null, true);
            echo "
        ";
        }
        // line 54
        echo "        \"> 免费";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "
      </label>
    </div>
  </div>
  <div class=\"class-list row\">
    ";
        // line 59
        if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
        if ($_classrooms_) {
            // line 60
            echo "      ";
            if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_classrooms_);
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
                // line 61
                echo "        <div class=\"col-md-4 col-sm-6\">
          <div class=\"class-item\">
            <div class=\"class-img\">
              <a href=\"";
                // line 64
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                ";
                // line 65
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_classroom_, "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute($_classroom_, "title", array()), "lazyload_class.png");
                echo "
                <h3>";
                // line 66
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
                echo "</h3>
                <div class=\"image-overlay\"></div>
              </a>
            </div>
            <div class=\"class-serve\">
              ";
                // line 71
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:explore.html.twig", 71)->display(array_merge($context, array("services" => $this->getAttribute($_classroom_, "service", array()))));
                // line 72
                echo "            </div>
            <ul class=\"class-data clearfix\">
              <li><i class=\"es-icon es-icon-book\"></i>";
                // line 74
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "courseNum", array()), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-people\"></i>";
                // line 75
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, ($this->getAttribute($_classroom_, "studentNum", array()) + $this->getAttribute($_classroom_, "auditorNum", array())), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-textsms\"></i>";
                // line 76
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "threadNum", array()), "html", null, true);
                echo "</li>
            </ul>
          </div>
        </div>
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
            // line 81
            echo "      
    ";
        } else {
            // line 83
            echo "      <div class=\"empty\">目前暂时无";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</div>
    ";
        }
        // line 85
        echo "  </div>
  <nav class=\"text-center\">
    ";
        // line 87
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 87,  376 => 85,  370 => 83,  366 => 81,  346 => 76,  341 => 75,  336 => 74,  332 => 72,  329 => 71,  320 => 66,  315 => 65,  310 => 64,  305 => 61,  286 => 60,  283 => 59,  274 => 54,  266 => 52,  263 => 51,  254 => 50,  251 => 49,  244 => 48,  241 => 47,  236 => 44,  214 => 42,  209 => 41,  197 => 40,  193 => 38,  177 => 37,  171 => 36,  167 => 34,  165 => 33,  131 => 30,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  105 => 23,  94 => 16,  89 => 14,  83 => 10,  80 => 9,  76 => 7,  62 => 6,  55 => 5,  37 => 4,  33 => 1,  31 => 3,  29 => 2,  11 => 1,);
    }
}
