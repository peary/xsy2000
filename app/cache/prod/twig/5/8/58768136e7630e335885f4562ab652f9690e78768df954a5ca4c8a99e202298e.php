<?php

/* TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig */
class __TwigTemplate_58768136e7630e335885f4562ab652f9690e78768df954a5ca4c8a99e202298e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-layout.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 1);
        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["layoutClass"] = "before";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_before_content($context, array $blocks = array())
    {
        // line 6
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("首页"), "html", null, true);
        echo "</a></li>
    ";
        // line 8
        if (isset($context["breadcrumbs"])) { $_breadcrumbs_ = $context["breadcrumbs"]; } else { $_breadcrumbs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumbs_);
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $this->getAttribute($_breadcrumb_, "code", array()))), "html", null, true);
            echo "\">";
            if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_breadcrumb_, "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <li class=\"active\">";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->getAttribute($_course_, "title", array());
        echo "</li>
  </ol>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
  ";
        // line 17
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["previewLesson"])) { $_previewLesson_ = $context["previewLesson"]; } else { $_previewLesson_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "picture", array(0 => $_course_, 1 => $_previewLesson_), "method"), "html", null, true);
        echo "

  ";
        // line 19
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (isset($context["userVipStatus"])) { $_userVipStatus_ = $context["userVipStatus"]; } else { $_userVipStatus_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "info", array(0 => $_course_, 1 => $_member_, 2 => $_userVipStatus_), "method"), "html", null, true);
        echo "
  <div class=\"course-operation clearfix\">
    ";
        // line 21
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "student_num", array(0 => $_course_), "method"), "html", null, true);
        echo "
    <ul class=\"course-data clearfix ";
        // line 22
        if (isset($context["courseVip"])) { $_courseVip_ = $context["courseVip"]; } else { $_courseVip_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($_courseVip_ && ($this->getAttribute($_course_, "parentId", array()) == "0"))) {
            echo "active";
        }
        echo "\">
      ";
        // line 23
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["hasFavorited"])) { $_hasFavorited_ = $context["hasFavorited"]; } else { $_hasFavorited_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "favorite_btn", array(0 => $_course_, 1 => $_hasFavorited_), "method"), "html", null, true);
        echo "
      ";
        // line 24
        if (isset($context["header_macro"])) { $_header_macro_ = $context["header_macro"]; } else { $_header_macro_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_header_macro_, "share_btn", array(0 => $_course_), "method"), "html", null, true);
        echo "
      ";
        // line 25
        if (isset($context["courseVip"])) { $_courseVip_ = $context["courseVip"]; } else { $_courseVip_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($_courseVip_ && ($this->getAttribute($_course_, "parentId", array()) == "0"))) {
            // line 26
            echo "        <li class=\"hidden-xs color-warning icon-vip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员课程"), "html", null, true);
            echo "\" data-content=\"";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 26)->display($context);
            echo "\">
          <i class=\"es-icon es-icon-crown\"></i><br>
          ";
            // line 28
            if (isset($context["userVipStatus"])) { $_userVipStatus_ = $context["userVipStatus"]; } else { $_userVipStatus_ = null; }
            if (isset($context["courseVip"])) { $_courseVip_ = $context["courseVip"]; } else { $_courseVip_ = null; }
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 28)->display(array_merge($context, array("userVipStatus" => $_userVipStatus_, "level" => $_courseVip_)));
            // line 29
            echo "        </li>
      ";
        }
        // line 31
        echo "    </ul>
    <div class=\"buy\">
      ";
        // line 33
        if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter($_source_, "")) : ("")) == "classroom")) {
            // line 34
            echo "        ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:classroomInfo", array("courseId" => $this->getAttribute($_course_, "id", array()))));
            echo "
      ";
        } else {
            // line 36
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 36)->display($context);
            // line 37
            echo "      ";
        }
        // line 38
        echo "    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 38,  158 => 37,  155 => 36,  148 => 34,  145 => 33,  141 => 31,  137 => 29,  133 => 28,  125 => 26,  121 => 25,  115 => 24,  108 => 23,  100 => 22,  94 => 21,  85 => 19,  77 => 17,  74 => 16,  71 => 15,  62 => 11,  49 => 9,  44 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
