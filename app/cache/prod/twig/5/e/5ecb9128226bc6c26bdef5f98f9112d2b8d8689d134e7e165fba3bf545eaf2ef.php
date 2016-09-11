<?php

/* TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig */
class __TwigTemplate_5ecb9128226bc6c26bdef5f98f9112d2b8d8689d134e7e165fba3bf545eaf2ef extends Twig_Template
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
        echo "<section class=\"course-list-section ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"course-list-section\">

  ";
        // line 3
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        $context["count"] = (($this->getAttribute($_config_, "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "count", array()), 12)) : (12));
        // line 4
        echo "  ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        $context["categoryId"] = (($this->getAttribute($_config_, "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "categoryId", array()), 0)) : (0));
        // line 5
        echo "  ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        $context["orderBy"] = (($this->getAttribute($_config_, "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "orderBy", array()), "latest")) : ("latest"));
        // line 6
        echo "  ";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if (($_orderBy_ == "latest")) {
            // line 7
            echo "    ";
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => $_count_, "categoryId" => $_categoryId_));
            // line 8
            echo "  ";
        } elseif (($_orderBy_ == "recommendedSeq")) {
            // line 9
            echo "    ";
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendCourses", array("count" => $_count_, "categoryId" => $_categoryId_));
            // line 10
            echo "  ";
        } elseif (($_orderBy_ == "studentNum")) {
            // line 11
            echo "    ";
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("PopularCourses", array("count" => $_count_, "categoryId" => $_categoryId_, "type" => "studentNum"));
            // line 12
            echo "  ";
        }
        // line 13
        echo "  ";
        $context["categoriesFirst"] = $this->env->getExtension('topxia_data_twig')->getData("Categories", array("group" => "course"));
        // line 14
        echo "  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 16
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "title", array()), $this->getAttribute($_config_, "defaultTitle", array()))) : ($this->getAttribute($_config_, "defaultTitle", array()))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 17
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "subTitle", array()), $this->getAttribute($_config_, "defaultSubTitle", array()))) : ($this->getAttribute($_config_, "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"";
        // line 21
        if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter($_categoryId_, 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo " js-course-filter\" data-url=\"";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter($_orderBy_, "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部课程"), "html", null, true);
        echo "</a></li>
        ";
        // line 22
        if (isset($context["categoriesFirst"])) { $_categoriesFirst_ = $context["categoriesFirst"]; } else { $_categoriesFirst_ = null; }
        if ($_categoriesFirst_) {
            // line 23
            echo "          ";
            if (isset($context["categoriesFirst"])) { $_categoriesFirst_ = $context["categoriesFirst"]; } else { $_categoriesFirst_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_categoriesFirst_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                if (($this->getAttribute($_category_, "parentId", array()) == 0)) {
                    // line 24
                    echo "            ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    if (($this->getAttribute($_loop_, "index0", array()) < (($this->getAttribute($_config_, "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "categoryCount", array()), 4)) : (4)))) {
                        // line 25
                        echo "              <li role=\"presentation\" class=\"";
                        if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter($_categoryId_, 0)) : (0)) == $this->getAttribute($_category_, "id", array()))) {
                            echo "active ";
                        }
                        echo " js-course-filter\" data-url=\"";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => $this->getAttribute($_category_, "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter($_orderBy_, "latest")) : ("latest")))), "html", null, true);
                        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                        echo "</a></li>
            ";
                    }
                    // line 27
                    echo "          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部课程"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter ";
        // line 33
        if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter($_categoryId_, 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo "\" data-url=\"";
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter($_orderBy_, "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部课程"), "html", null, true);
        echo "</a></li>
          ";
        // line 34
        if (isset($context["categoriesFirst"])) { $_categoriesFirst_ = $context["categoriesFirst"]; } else { $_categoriesFirst_ = null; }
        if ($_categoriesFirst_) {
            // line 35
            echo "            ";
            if (isset($context["categoriesFirst"])) { $_categoriesFirst_ = $context["categoriesFirst"]; } else { $_categoriesFirst_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_categoriesFirst_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                if (($this->getAttribute($_category_, "parentId", array()) == 0)) {
                    // line 36
                    echo "              ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    if (($this->getAttribute($_loop_, "index0", array()) < (($this->getAttribute($_config_, "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "categoryCount", array()), 4)) : (4)))) {
                        // line 37
                        echo "                <li role=\"presentation\" class = \"js-course-filter ";
                        if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter($_categoryId_, 0)) : (0)) == $this->getAttribute($_category_, "id", array()))) {
                            echo "active ";
                        }
                        echo "\" data-url=\"";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => $this->getAttribute($_category_, "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter($_orderBy_, "latest")) : ("latest")))), "html", null, true);
                        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
                        echo "</a></li>
              ";
                    }
                    // line 39
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          ";
        }
        // line 41
        echo "        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 44
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter($_orderBy_, "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter($_categoryId_, 0)) : (0)), "orderBy" => "latest")), "html", null, true);
        echo "\" data-type='course'>
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 47
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter($_orderBy_, "recommendedSeq")) : ("recommendedSeq")) == "studentNum")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter($_categoryId_, 0)) : (0)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" data-type='course'>
          ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最热"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 50
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter($_orderBy_, "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter($_categoryId_, 0)) : (0)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" data-type='course'>
          ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 57
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
            // line 58
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
            // line 59
            $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig", 59)->display($context);
            // line 60
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
        // line 62
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多课程"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 66,  319 => 65,  314 => 62,  299 => 60,  297 => 59,  294 => 58,  276 => 57,  267 => 51,  257 => 50,  252 => 48,  242 => 47,  237 => 45,  227 => 44,  222 => 41,  219 => 40,  209 => 39,  192 => 37,  187 => 36,  173 => 35,  170 => 34,  158 => 33,  153 => 31,  149 => 29,  146 => 28,  136 => 27,  119 => 25,  114 => 24,  100 => 23,  97 => 22,  85 => 21,  77 => 17,  72 => 16,  68 => 14,  65 => 13,  62 => 12,  57 => 11,  54 => 10,  49 => 9,  46 => 8,  41 => 7,  37 => 6,  33 => 5,  29 => 4,  26 => 3,  19 => 1,);
    }
}
