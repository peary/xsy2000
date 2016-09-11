<?php

/* TopxiaWebBundle:Order:classroom.html.twig */
class __TwigTemplate_755ff5d75ce8f9b321e5b011ceb254dea0b0d9249b5ed9a8be8891ed27930b12 extends Twig_Template
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
        echo "
<div class=\"order-detail\">
  <div class=\"order-img  hidden-xs\">
    <a href=\"";
        // line 4
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
      <img class=\"img-responsive\" src=\"";
        // line 5
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_classroom_, "middlePicture", array()), "classroom.png"), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/classroom-default-213-142.png")), "html", null, true);
        echo "\" alt=\"\" width=\"213\" height=\"142\"></a>
  </div>
  <div class=\"order-info\">";
        // line 7
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo "</div>
  <div class=\"order-price\">
    ";
        // line 9
        if (isset($context["priceType"])) { $_priceType_ = $context["priceType"]; } else { $_priceType_ = null; }
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter($_priceType_, "RMB")) : ("RMB")) == "RMB")) {
            // line 10
            echo "    <span class=\"pay-rmb\">￥</span>
    <span class=\"pay-rmb\">";
            // line 11
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "price", array()), "html", null, true);
            echo "</span>
    ";
        } elseif ((((        // line 12
array_key_exists("priceType", $context)) ? (_twig_default_filter($_priceType_, "RMB")) : ("RMB")) == "Coin")) {
            // line 13
            echo "    <span class=\"pay-rmb\">";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (isset($context["cashRate"])) { $_cashRate_ = $context["cashRate"]; } else { $_cashRate_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($_classroom_, "price", array()) * $_cashRate_), "html", null, true);
            echo "</span>
    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
    ";
        }
        // line 16
        echo "    <span role=\"total-price\" class=\"order-price hidden\">";
        if (isset($context["totalPrice"])) { $_totalPrice_ = $context["totalPrice"]; } else { $_totalPrice_ = null; }
        echo twig_escape_filter($this->env, $_totalPrice_, "html", null, true);
        echo "</span>
  </div>
</div>
";
        // line 19
        if (isset($context["paidCourses"])) { $_paidCourses_ = $context["paidCourses"]; } else { $_paidCourses_ = null; }
        if (((twig_length_filter($this->env, $_paidCourses_) > 0) && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.discount_buy"), 1) == 1))) {
            // line 20
            $this->loadTemplate("TopxiaWebBundle:Order:paid-course.html.twig", "TopxiaWebBundle:Order:classroom.html.twig", 20)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  74 => 19,  66 => 16,  61 => 14,  54 => 13,  52 => 12,  47 => 11,  44 => 10,  41 => 9,  35 => 7,  29 => 5,  24 => 4,  19 => 1,);
    }
}
