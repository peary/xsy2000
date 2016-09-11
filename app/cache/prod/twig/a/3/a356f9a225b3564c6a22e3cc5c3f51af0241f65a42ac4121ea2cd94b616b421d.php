<?php

/* TopxiaWebBundle:Course:normal-layout.html.twig */
class __TwigTemplate_a356f9a225b3564c6a22e3cc5c3f51af0241f65a42ac4121ea2cd94b616b421d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'course_main' => array($this, 'block_course_main'),
            'dashboard_relatedCoursesBlock' => array($this, 'block_dashboard_relatedCoursesBlock'),
            'course_sidebar' => array($this, 'block_course_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["bodyClass"] = "course-dashboard-page";
        // line 12
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context["script_arguments"] = array("course_uri" => $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Course:keywords.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 6)->display(array_merge($context, array("course" => $_course_)));
    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getPurifyAndTrimHtml($this->getAttribute($_course_, "about", array())), ""), 100);
    }

    // line 14
    public function block_top_content($context, array $blocks = array())
    {
        // line 15
        echo "  ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:header", array("course" => $_course_, "member" => $_member_)));
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
  ";
        // line 20
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("GroupSell") &&  !$_member_)) {
            // line 21
            echo "    ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GroupSellBundle:GroupSell:showGroup", array("type" => "course", "targetId" => $this->getAttribute($_course_, "id", array()))));
            echo "  
  ";
        }
        // line 23
        echo "  <div class=\"course-detail row\">
    <div class=\"col-lg-9 col-md-8  course-detail-main\">

      ";
        // line 26
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Announcement:announcement-block.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 26)->display(array_merge($context, array("targetId" => $this->getAttribute($_course_, "id", array()), "targetType" => "course")));
        // line 27
        echo "
      <section class=\"es-section\">
        ";
        // line 29
        $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-nav.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 29)->display($context);
        // line 30
        echo "        ";
        $this->displayBlock('course_main', $context, $blocks);
        // line 31
        echo "      </section>
      ";
        // line 32
        $this->displayBlock('dashboard_relatedCoursesBlock', $context, $blocks);
        // line 37
        echo "    </div>

    <div class=\"col-lg-3 col-md-4  course-sidebar\">
      ";
        // line 40
        $this->displayBlock('course_sidebar', $context, $blocks);
        // line 57
        echo "    </div>
  </div>

     ";
        // line 60
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("HowzhiPopAd")) {
            // line 61
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HowzhiPopAdBundle:HowzhiPop:index"));
            echo "
     ";
        }
        // line 62
        echo " 

";
    }

    // line 30
    public function block_course_main($context, array $blocks = array())
    {
    }

    // line 32
    public function block_dashboard_relatedCoursesBlock($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.relatedCourses") == 1)) {
            // line 34
            echo "          ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:relatedCoursesBlock", array("course" => $_course_)));
            echo "
        ";
        }
        // line 36
        echo "      ";
    }

    // line 40
    public function block_course_sidebar($context, array $blocks = array())
    {
        // line 41
        echo "        ";
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (((array_key_exists("member", $context)) ? (_twig_default_filter($_member_, null)) : (null))) {
            // line 42
            echo "          ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:belongClassrooms", array("course" => $_course_)));
            echo "
        ";
        }
        // line 44
        echo "        ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "parentId", array()) == 0)) {
            // line 45
            echo "          ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:recommendClassrooms", array("course" => $_course_)));
            echo "
        ";
        }
        // line 47
        echo "
        ";
        // line 48
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:teachers", array("course" => $_course_)));
        echo "
        
        ";
        // line 50
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey((("course/" . $this->getAttribute($_course_, "id", array())) . "/sidebar/students"), 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 51
                echo "          ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:students", array("course" => $_course_)));
                echo "
        ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 53
        echo "        
        ";
        // line 54
        $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 54)->display($context);
        // line 55
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 55,  219 => 54,  216 => 53,  205 => 51,  198 => 50,  192 => 48,  189 => 47,  182 => 45,  178 => 44,  171 => 42,  167 => 41,  164 => 40,  160 => 36,  153 => 34,  150 => 33,  147 => 32,  142 => 30,  136 => 62,  130 => 61,  128 => 60,  123 => 57,  121 => 40,  116 => 37,  114 => 32,  111 => 31,  108 => 30,  106 => 29,  102 => 27,  99 => 26,  94 => 23,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  69 => 15,  66 => 14,  59 => 9,  53 => 6,  50 => 5,  41 => 3,  37 => 1,  34 => 12,  32 => 11,  11 => 1,);
    }
}
