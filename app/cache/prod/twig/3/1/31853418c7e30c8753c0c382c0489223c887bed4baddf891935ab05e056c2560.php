<?php

/* ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig */
class __TwigTemplate_31853418c7e30c8753c0c382c0489223c887bed4baddf891935ab05e056c2560 extends Twig_Template
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
        echo "<div class=\"nav-filter clearfix\">
  
  ";
        // line 3
        if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ($this->getAttribute($_service_, "canAccess", array(0 => "thread.create", 1 => array("targetType" => "classroom", "targetId" => $this->getAttribute($_classroom_, "id", array()))), "method")) {
            // line 4
            echo "    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">发话题 <span class=\"caret\"></span></button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"";
            // line 7
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "type" => "discussion")), "html", null, true);
            echo "\">发话题</a></li>
        <li><a href=\"";
            // line 8
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "type" => "question")), "html", null, true);
            echo "\">提问题</a></li>
        ";
            // line 9
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if ($this->getAttribute($_service_, "canAccess", array(0 => "thread.event.create", 1 => array("targetType" => "classroom", "targetId" => $this->getAttribute($_classroom_, "id", array()))), "method")) {
                // line 10
                echo "          <li><a href=\"";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "type" => "event")), "html", null, true);
                echo "\">建活动</a></li> 
        ";
            }
            // line 12
            echo "      </ul>
    </div>
  ";
        }
        // line 15
        echo "
  <ul class=\"nav nav-pills nav-pills-sm\">
    <li";
        // line 17
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "type", array()) == "all")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute($_classroom_, "id", array())), $_filters_), array("type" => "all"))), "html", null, true);
        echo "\">全部</a></li>
    
    <li";
        // line 19
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "type", array()) == "question")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute($_classroom_, "id", array())), $_filters_), array("type" => "question"))), "html", null, true);
        echo "\">问答</a></li>

    <li";
        // line 21
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "type", array()) == "nice")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute($_classroom_, "id", array())), $_filters_), array("type" => "nice"))), "html", null, true);
        echo "\">精华</a></li>

    <li class=\"dropdown\">
      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span>排序：</span>
        ";
        // line 26
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort", array()) == "posted")) {
            // line 27
            echo "          最后回复
        ";
        } elseif (($this->getAttribute($_filters_, "sort", array()) == "created")) {
            // line 28
            echo " 
          最新发帖
        ";
        }
        // line 31
        echo "        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu hidden-xs\">
        <li class=\"";
        // line 34
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort", array()) == "posted")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute($_classroom_, "id", array())), $_filters_), array("sort" => "posted"))), "html", null, true);
        echo "\">最后回复</a></li>
        <li class=\"";
        // line 35
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort", array()) == "created")) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute($_classroom_, "id", array())), $_filters_), array("sort" => "created"))), "html", null, true);
        echo "\">最新发帖</a></li>
      </ul>
    </li>
  </ul>

</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  118 => 34,  113 => 31,  108 => 28,  104 => 27,  101 => 26,  86 => 21,  74 => 19,  62 => 17,  58 => 15,  53 => 12,  46 => 10,  42 => 9,  37 => 8,  32 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
