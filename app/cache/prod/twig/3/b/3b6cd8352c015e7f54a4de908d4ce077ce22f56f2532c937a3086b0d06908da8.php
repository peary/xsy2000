<?php

/* TopxiaWebBundle:EsBar:LeftList/study-center.html.twig */
class __TwigTemplate_3b6cd8352c015e7f54a4de908d4ce077ce22f56f2532c937a3086b0d06908da8 extends Twig_Template
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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($_app_, "user", array()) && $this->getAttribute($this->getAttribute($_app_, "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context["recentLiveLessons"] = $this->env->getExtension('topxia_data_twig')->getData("RecentLiveLessons", array("userId" => $this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()), "count" => 2));
            // line 3
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('translator')->trans("学<br>习<br>中<br>心");
            echo "
      ";
            // line 5
            if (isset($context["recentLiveLessons"])) { $_recentLiveLessons_ = $context["recentLiveLessons"]; } else { $_recentLiveLessons_ = null; }
            if ($_recentLiveLessons_) {
                // line 6
                echo "        <span class=\"dot\"></span>
      ";
            }
            // line 8
            echo "    </a>
  </li>
";
        } else {
            // line 11
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('translator')->trans("学<br>习<br>中<br>心</a>");
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/study-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  47 => 11,  42 => 8,  38 => 6,  35 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
