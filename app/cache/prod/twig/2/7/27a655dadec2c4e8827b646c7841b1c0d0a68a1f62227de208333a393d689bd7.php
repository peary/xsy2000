<?php

/* TopxiaWebBundle:Group:groups-threads-ul.html.twig */
class __TwigTemplate_27a655dadec2c4e8827b646c7841b1c0d0a68a1f62227de208333a393d689bd7 extends Twig_Template
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
        echo "<ul class=\"media-list thread-list\">
  ";
        // line 2
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_threads_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 3
            echo "    ";
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["group"] = (($this->getAttribute($_groups_, $this->getAttribute($_thread_, "groupId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_groups_, $this->getAttribute($_thread_, "groupId", array()), array(), "array"), null)) : (null));
            // line 4
            echo "    ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (((array_key_exists("users", $context)) ? (_twig_default_filter($_users_, null)) : (null))) {
                // line 5
                echo "    ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                $context["user"] = (($this->getAttribute($_users_, $this->getAttribute($_thread_, "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_thread_, "userId", array()), array(), "array"), null)) : (null));
                // line 6
                echo "    ";
            }
            // line 7
            echo "    <li class=\"media\">
      <div class=\"media-left\">
        <span class=\"reply-num\">
         <strong>";
            // line 10
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if ($this->getAttribute($_thread_, "postNum", array())) {
                echo " ";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "postNum", array()), "html", null, true);
                echo " ";
            } else {
                echo " 0 ";
            }
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
            echo "
        </span>
      </div>
      <div class=\"media-body pts\">
        <div class=\"media-heading\">
         <a class=\"title gray-darker\" href=\"";
            // line 15
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($_thread_, "groupId", array()), "threadId" => $this->getAttribute($_thread_, "id", array()))), "html", null, true);
            echo "\">";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_thread_, "title", array()), 90);
            echo "</a>
          ";
            // line 16
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if ($this->getAttribute($_thread_, "isStick", array())) {
                // line 17
                echo "            <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
                echo "</span>
          ";
            }
            // line 19
            echo "          ";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if ($this->getAttribute($_thread_, "isElite", array())) {
                // line 20
                echo "            <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精华"), "html", null, true);
                echo "</span>
          ";
            }
            // line 22
            echo "
          ";
            // line 23
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                // line 24
                echo "            ";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                if ((($this->getAttribute($_thread_, "type", array()) == "reward") && ($this->getAttribute($_thread_, "rewardCoin", array()) > 0))) {
                    // line 25
                    echo "              <span class=\"label label-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("奖"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 27
                echo "          ";
            }
            // line 28
            echo "        </div>

        <div class=\"metas\">
          ";
            // line 31
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $_user_, 1 => "userImg", 2 => "avatar-xxs"), "method"), "html", null, true);
            echo "
          ";
            // line 32
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_user_, 1 => "pls"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发起了问题"), "html", null, true);
            echo "
          <span class=\"divider\">•</span>
          ";
            // line 34
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_thread_, "createdTime", array())), "html", null, true);
            echo "
          ";
            // line 35
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if ($_group_) {
                // line 36
                echo "          <span class=\"divider\">•</span>
          <a class=\"gray-darker\" href=\"";
                // line 37
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_thread_, "groupId", array()))), "html", null, true);
                echo "\" title=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                echo "\" >";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                echo "</a>
          ";
            }
            // line 39
            echo "          ";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if ($this->getAttribute($_thread_, "lastPostTime", array())) {
                // line 40
                echo "            <span class=\"divider\">•</span>
            ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后回复"), "html", null, true);
                echo " ";
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["lastPostMembers"])) { $_lastPostMembers_ = $context["lastPostMembers"]; } else { $_lastPostMembers_ = null; }
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $this->getAttribute($_lastPostMembers_, $this->getAttribute($_thread_, "lastPostMemberId", array()), array(), "array"), 1 => "link-muted"), "method"), "html", null, true);
                echo "
            <span class=\"divider\">•</span>
            ";
                // line 43
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_thread_, "lastPostTime", array())), "html", null, true);
                echo "
          ";
            }
            // line 45
            echo "        </div>
      </div>
    </li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "    <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无话题！"), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groups-threads-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 51,  186 => 49,  178 => 45,  172 => 43,  162 => 41,  159 => 40,  155 => 39,  143 => 37,  140 => 36,  137 => 35,  132 => 34,  124 => 32,  118 => 31,  113 => 28,  110 => 27,  104 => 25,  100 => 24,  98 => 23,  95 => 22,  89 => 20,  85 => 19,  79 => 17,  76 => 16,  68 => 15,  50 => 10,  45 => 7,  42 => 6,  37 => 5,  33 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
