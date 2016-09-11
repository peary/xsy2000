<?php

/* ClassroomBundle:Classroom:content-layout.html.twig */
class __TwigTemplate_0409a607748b1153a480193f33b474a51c1487e456ce9f7cdf588850f1f00caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'side' => array($this, 'block_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((array_key_exists("layout", $context)) ? (_twig_default_filter($this->getContext($context, "layout"), "ClassroomBundle:Classroom:layout.html.twig")) : ("ClassroomBundle:Classroom:layout.html.twig")), "ClassroomBundle:Classroom:content-layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_keywords($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:keywords", array("classroom" => $_classroom_)));
        echo "
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("GroupSell") &&  !$_member_)) {
            // line 9
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GroupSellBundle:GroupSell:showGroup", array("type" => "classroom", "targetId" => $this->getAttribute($_classroom_, "id", array()))));
            echo "
";
        }
        // line 11
        echo "
<div class=\"class-detail row\" id=\"detail-content\">
  <div class=\"col-lg-9 col-md-8 class-detail-main\">

    ";
        // line 15
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Announcement:announcement-block.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 15)->display(array_merge($context, array("targetId" => $this->getAttribute($_classroom_, "id", array()), "targetType" => "classroom")));
        // line 16
        echo "
    <section class=\"es-section\">
      ";
        // line 18
        if (array_key_exists("nav", $context)) {
            // line 19
            echo "        ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:dashboard", array("classroom" => $_classroom_, "nav" => $_nav_, "member" => $_member_)));
            echo "
      ";
        }
        // line 21
        echo "      <div class=\"class-detail-content\">
        ";
        // line 22
        $this->displayBlock('main', $context, $blocks);
        // line 24
        echo "      </div>
    </section>
  </div>

  <aside class=\"col-lg-3 col-md-4 class-sidebar\">
    ";
        // line 29
        $this->displayBlock('side', $context, $blocks);
        // line 45
        echo "  </aside>

  ";
        // line 47
        if (isset($context["canLook"])) { $_canLook_ = $context["canLook"]; } else { $_canLook_ = null; }
        if ( !((array_key_exists("canLook", $context)) ? (_twig_default_filter($_canLook_, false)) : (false))) {
            // line 48
            echo "    <input type=\"hidden\" name=\"access-intercept-check\" value=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_canview", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">
    ";
            // line 49
            $this->loadTemplate("ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 49)->display($context);
            // line 50
            echo "  ";
        }
        // line 51
        echo "</div>
";
    }

    // line 22
    public function block_main($context, array $blocks = array())
    {
        // line 23
        echo "        ";
    }

    // line 29
    public function block_side($context, array $blocks = array())
    {
        // line 30
        echo "      ";
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 31
            echo "        ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:todayUserTaskBlock", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))));
            echo "
      ";
        }
        // line 33
        echo "
      ";
        // line 34
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute($_classroom_, "id", array()), "Take", true)) {
            // line 35
            echo "        ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:signPage", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))));
            echo "
      ";
        }
        // line 37
        echo "      
      ";
        // line 38
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:teachersBlock", array("classroom" => $_classroom_)));
        echo "

      ";
        // line 40
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:latestMembersBlock", array("classroom" => $_classroom_)));
        echo "

      ";
        // line 42
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:classroomStatusBlock", array("classroom" => $_classroom_)));
        echo "
      
    ";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  167 => 40,  161 => 38,  158 => 37,  151 => 35,  148 => 34,  145 => 33,  138 => 31,  135 => 30,  132 => 29,  128 => 23,  125 => 22,  120 => 51,  117 => 50,  115 => 49,  109 => 48,  106 => 47,  102 => 45,  100 => 29,  93 => 24,  91 => 22,  88 => 21,  79 => 19,  77 => 18,  73 => 16,  70 => 15,  64 => 11,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  42 => 5,  34 => 3,  31 => 2,  22 => 1,);
    }
}
