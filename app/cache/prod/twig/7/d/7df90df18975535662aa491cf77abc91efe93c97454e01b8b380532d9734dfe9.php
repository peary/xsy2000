<?php

/* TopxiaWebBundle:Course:Part/normal-header-layout.html.twig */
class __TwigTemplate_7df90df18975535662aa491cf77abc91efe93c97454e01b8b380532d9734dfe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
            'after_content' => array($this, 'block_after_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"course-detail-header ";
        if (isset($context["layoutClass"])) { $_layoutClass_ = $context["layoutClass"]; } else { $_layoutClass_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("layoutClass", $context)) ? (_twig_default_filter($_layoutClass_, "")) : ("")), "html", null, true);
        echo "\">
  <div class=\"container\">

    ";
        // line 4
        $this->displayBlock('before_content', $context, $blocks);
        // line 5
        echo "
    <div class=\"es-section clearfix\">
      ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "
      ";
        // line 9
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if ((((($this->getAttribute($_member_, "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 10
            echo "        <a href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 14
        echo "      
      ";
        // line 15
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (((array_key_exists("member", $context)) ? (_twig_default_filter($_member_, false)) : (false))) {
            // line 16
            echo "        ";
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if (((( !(($this->getAttribute($_member_, "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "fake", array()), false)) : (false)) && ($this->getAttribute($_member_, "role", array()) == "student")) && ($this->getAttribute($_member_, "joinedType", array()) == "course")) &&  !$this->getAttribute($_member_, "locked", array()))) {
                // line 17
                echo "          ";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ($this->getAttribute($_member_, "orderId", array())) {
                    // line 18
                    echo "            <a href=\"#modal\" class=\"btn btn-default setting hidden-xs hidden-sm\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute($_course_, "id", array()), "targetType" => "course")), "html", null, true);
                    echo "\">
              <i class=\"es-icon es-icon-exit\"></i>
            </a>
          ";
                } else {
                    // line 22
                    echo "            <a id=\"exit-course-learning\" class=\"course-exit-btn btn btn-default setting hidden-xs hidden-sm\" href=\"javascript:;\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                    echo "\"  data-goto=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                    echo "\" ";
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    if (($this->getAttribute($_member_, "role", array()) != "student")) {
                        echo " disabled ";
                    }
                    echo ">
              <i class=\"es-icon es-icon-exit\"></i>
            </a>
          ";
                }
                // line 26
                echo "        ";
            } elseif (($this->getAttribute($_member_, "joinedType", array(), "array") == "groupSell")) {
                // line 27
                echo "          <a class=\"btn btn-default setting hidden-xs hidden-sm\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"组合购买课程不能退出\">
            <i class=\"hz-icon icon-exit\"></i>
          </a>
        ";
            }
            // line 31
            echo "      ";
        }
        // line 32
        echo "    </div>
  </div>
</section>

";
        // line 36
        $this->displayBlock('after_content', $context, $blocks);
        // line 37
        echo "

";
    }

    // line 4
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
    }

    // line 36
    public function block_after_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  126 => 7,  121 => 4,  115 => 37,  113 => 36,  107 => 32,  104 => 31,  98 => 27,  95 => 26,  78 => 22,  69 => 18,  65 => 17,  61 => 16,  58 => 15,  55 => 14,  44 => 10,  41 => 9,  38 => 8,  36 => 7,  32 => 5,  30 => 4,  22 => 1,);
    }
}
