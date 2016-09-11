<?php

/* TopxiaWebBundle:Course/Part:normal-header-recommend-classrooms.html.twig */
class __TwigTemplate_e16f7bb188386f4eb2b97e3c3c90716c479223b5fbf812faccd5db91bea2c264 extends Twig_Template
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
        if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
        if ($_classrooms_) {
            // line 2
            echo "  <div class=\"panel panel-default panel-class hidden-sm\" id=\"panel-class\">
    <div class=\"panel-heading\">
      <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
      <h3 class=\"panel-title\">
        <i class=\"es-icon es-icon-locallibrary\"></i>
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
            echo "
      </h3>
    </div>
    <div class=\"panel-body\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
          ";
            // line 13
            if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_classrooms_);
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 14
                echo "            <div class=\"swiper-slide swiper-hidden\">
              <a class=\"class-img\" href=\"";
                // line 15
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                echo "\">
                <img class=\"img-responsive\" src=\"";
                // line 16
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_classroom_, "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
                echo "\">
              </a>
              <h5 style=\"margin-bottom:0\"><a class=\"link-dark text-overflow\" href=\"";
                // line 18
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                echo "\">";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
                echo "</a></h5>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
        ";
            // line 22
            if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
            if ((twig_length_filter($this->env, $_classrooms_) > 1)) {
                // line 23
                echo "          <a href=\"javascipt:;\" class=\"arrow-prev\">
            <i class=\"es-icon es-icon-chevronleft\"></i>
          </a>
          <a href=\"javascipt:;\" class=\"arrow-next\">
            <i class=\"es-icon es-icon-chevronright\"></i>
          </a>
        ";
            }
            // line 30
            echo "      </div>
    </div>
  </div>
  ";
            // line 33
            $this->env->getExtension('topxia_web_twig')->loadScript("course/recommend-classroom");
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-header-recommend-classrooms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  92 => 30,  83 => 23,  80 => 22,  77 => 21,  64 => 18,  55 => 16,  50 => 15,  47 => 14,  42 => 13,  32 => 7,  26 => 4,  22 => 2,  19 => 1,);
    }
}
