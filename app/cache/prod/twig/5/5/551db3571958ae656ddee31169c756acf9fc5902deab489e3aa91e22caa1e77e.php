<?php

/* TopxiaWebBundle:Teacher:teacher-item.html.twig */
class __TwigTemplate_551db3571958ae656ddee31169c756acf9fc5902deab489e3aa91e22caa1e77e extends Twig_Template
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
        echo "<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"";
        // line 3
        if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
        echo "\">
      <img class=\"avatar-lg\" src=\"";
        // line 4
        if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_teacher_, "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
    <h3 class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 7
        if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname", array()), "html", null, true);
        echo "</a>
    </h3>
    <div class=\"position\">
      ";
        // line 10
        if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
        if ($this->getAttribute($_teacher_, "title", array())) {
            // line 11
            echo "        ";
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "title", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无头衔"), "html", null, true);
            echo "
      ";
        }
        // line 15
        echo "    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      ";
        // line 19
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "about", array())) {
            // line 20
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_profile_, "about", array()), 30);
            echo "
      ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无简介"), "html", null, true);
            echo "
      ";
        }
        // line 24
        echo "    </div>
    <div class=\"metas\">
      ";
        // line 26
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
        if (( !$this->getAttribute($_app_, "user", array()) || ($this->getAttribute($_teacher_, "id", array()) != $this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array())))) {
            // line 27
            echo "        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["isFollowed"])) { $_isFollowed_ = $context["isFollowed"]; } else { $_isFollowed_ = null; }
            if ($_isFollowed_) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($_app_, "user", array()) && $this->getAttribute($this->getAttribute($_app_, "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
            // line 28
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["isFollowed"])) { $_isFollowed_ = $context["isFollowed"]; } else { $_isFollowed_ = null; }
            if ( !$_isFollowed_) {
                echo " style=\"display:none;\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"";
            // line 29
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "</a>
      ";
        }
        // line 31
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Teacher:teacher-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 31,  123 => 29,  111 => 28,  91 => 27,  87 => 26,  83 => 24,  77 => 22,  70 => 20,  67 => 19,  61 => 15,  55 => 13,  48 => 11,  45 => 10,  35 => 7,  28 => 4,  23 => 3,  19 => 1,);
    }
}
