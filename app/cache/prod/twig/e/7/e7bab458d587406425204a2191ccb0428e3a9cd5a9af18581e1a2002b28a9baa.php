<?php

/* TopxiaWebBundle:Group:group-header.html.twig */
class __TwigTemplate_e7bab458d587406425204a2191ccb0428e3a9cd5a9af18581e1a2002b28a9baa extends Twig_Template
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
        if (isset($context["groupNav"])) { $_groupNav_ = $context["groupNav"]; } else { $_groupNav_ = null; }
        $context["groupNav"] = ((array_key_exists("groupNav", $context)) ? (_twig_default_filter($_groupNav_, null)) : (null));
        // line 2
        echo "<ol class=\"breadcrumb breadcrumb-o\" style=\"margin-top:-18px\">
  <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("homepage.name", $this->env->getExtension('translator')->trans("首页")), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("group.name", $this->env->getExtension('translator')->trans("小组频道")), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 5
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_groupinfo_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupinfo_, "title", array()), "html", null, true);
        echo "</a></li>
</ol>
<div class=\"group-header\" style=\"background:url(";
        // line 7
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_groupinfo_, "backgroundLogo", array()), "background_group.jpg"), "html", null, true);
        echo ");background-repeat: no-repeat;background-size: 100% 100%;\">
  <div class=\"media\">
    <div class=\"media-left\">
      <a href=\"";
        // line 10
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_groupinfo_, "id", array()))), "html", null, true);
        echo "\">
        <img src=\"";
        // line 11
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_groupinfo_, "logo", array()), "group.png"), "html", null, true);
        echo "\" alt=\"";
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupinfo_, "title", array()), "html", null, true);
        echo "\" class=\"avatar-square-md\" >
      </a>
    </div>
    <div class=\"media-body\">
      <h2 class=\"media-heading\">
        ";
        // line 16
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupinfo_, "title", array()), "html", null, true);
        echo "
        ";
        // line 17
        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
        if (($_is_groupmember_ == 0)) {
            // line 18
            echo "          <a id=\"add-btn\" class=\"btn btn-success btn-sm mlm\" href=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_join", array("id" => $this->getAttribute($_groupinfo_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入小组"), "html", null, true);
            echo "</a>
        ";
        }
        // line 20
        echo "        ";
        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
        if ((($_is_groupmember_ == 1) || ($_is_groupmember_ == 3))) {
            // line 21
            echo "          <a id=\"exit-btn\" class=\"btn btn-default btn-sm mlm\"  href=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_exit", array("id" => $this->getAttribute($_groupinfo_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出小组"), "html", null, true);
            echo "</a>
        ";
        }
        // line 23
        echo "
      </h2>
      <div class=\"media-metas\">
        ";
        // line 26
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupinfo_, "memberNum", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个成员"), "html", null, true);
        echo "
        <span class=\"mlm\">";
        // line 27
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupinfo_, "threadNum", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个话题"), "html", null, true);
        echo "</span>
        <span class=\"fsn mlm\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建时间："), "html", null, true);
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_groupinfo_, "createdTime", array()), "Y-m-d"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </div>
  <div class=\"image-overlay image-overlay-o\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  111 => 27,  105 => 26,  100 => 23,  91 => 21,  87 => 20,  78 => 18,  75 => 17,  70 => 16,  58 => 11,  53 => 10,  46 => 7,  37 => 5,  31 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
