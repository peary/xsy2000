<?php

/* ClassroomBundle:Classroom:classroom-order.html.twig */
class __TwigTemplate_a17952cffbcebee7af129cc8470e281a6a42fe4caa18715aa55b1685f604ee48 extends Twig_Template
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
        echo " <div class=\"order-detail-bg  checkout\" style=\"border:none\">
   <div class=\"order-detail  clearfix\">
     <div class=\"order-img hidden-xs\">
        <a href=\"";
        // line 4
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
          <img class=\"img-responsive\" src=\"";
        // line 5
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_classroom_, "middlePicture", array()), "classroom.png"), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/classroom-default-213-142.png")), "html", null, true);
        echo "\"alt=\"收费\">
        </a>
     </div>
     <div class=\"order-info\">
       <p>订单名称：";
        // line 9
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title", array()), "html", null, true);
        echo "</p>
       <p>订单号：";
        // line 10
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "sn", array()), "html", null, true);
        echo "</p>
       <p>
         订单价格：
         <span class=\"pay-rmb\">￥";
        // line 13
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "amount", array()), "html", null, true);
        echo "</span>
       </p>
     </div>
   </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  42 => 10,  37 => 9,  29 => 5,  24 => 4,  19 => 1,);
    }
}
