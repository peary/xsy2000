<?php

/* TopxiaWebBundle:Group:thread.html.twig */
class __TwigTemplate_ab9a55595b4adc6676ee2f03d4f0c72618c3858570987c48f7b64a202987d418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'group_main' => array($this, 'block_group_main'),
            'group_side' => array($this, 'block_group_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "group/group";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_threadMain_, "title", array()), "html", null, true);
        echo " - ";
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupinfo_, "title", array()), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupinfo_, "title", array()), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["threadMainContent"])) { $_threadMainContent_ = $context["threadMainContent"]; } else { $_threadMainContent_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($_threadMainContent_, 100);
    }

    // line 7
    public function block_group_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
        ";
        // line 11
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_threadMain_, "title", array()), "html", null, true);
        echo "
        ";
        // line 12
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        if ($this->getAttribute($_threadMain_, "isStick", array())) {
            // line 13
            echo "          <span class=\"label label-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
            echo "</span>
        ";
        }
        // line 15
        echo "        ";
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        if ($this->getAttribute($_threadMain_, "isElite", array())) {
            // line 16
            echo "          <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精华"), "html", null, true);
            echo "</span>
        ";
        }
        // line 18
        echo "        ";
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 19
            echo "          ";
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            if ((($this->getAttribute($_threadMain_, "type", array()) == "reward") && ($this->getAttribute($_threadMain_, "rewardCoin", array()) > 0))) {
                // line 20
                echo "            <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("奖"), "html", null, true);
                echo "</span>
            <span style=\"color:#d9534f;\" class=\"mll\"> ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("悬赏"), "html", null, true);
                echo ":";
                if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_threadMain_, "rewardCoin", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "html", null, true);
                echo "</span>
          ";
            }
            // line 23
            echo "        ";
        }
        // line 24
        echo "      </h3>
    </div>
    <div class=\"panel-body clearfix\" id=\"post-action\">
      <div class=\"well well-sm text-sm color-gray clearfix\" style=\"line-height:20px\">
        <div class=\"es-share dropdown pull-right\">
          <span class=\"es-share top\" style=\"font-size:14px;\">
            <a href=\"javascript:;\" class=\"gray-dark\" data-toggle=\"dropdown\"><i class=\"es-icon es-icon-share\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享"), "html", null, true);
        echo "</a>
            ";
        // line 31
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 31)->display(array_merge($context, array("type" => "group_thread", "thread" => $_threadMain_, "group" => $_groupinfo_)));
        // line 32
        echo "          </span>
        </div>
        <div class=\"pull-right mrm\" id=\"thread-list\">
          ";
        // line 35
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($_threadMain_, "userId", array()) != $this->getAttribute($_user_, "id", array()))) {
            // line 36
            echo "            <a href=\"javascript:;\" class=\"uncollect-btn link-dark\" data-url=\"";
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_uncollect", array("threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["isCollected"])) { $_isCollected_ = $context["isCollected"]; } else { $_isCollected_ = null; }
            if (($_isCollected_ == false)) {
                echo " style=\"display:none;\"";
            }
            echo "><i class=\"es-icon es-icon-favorite mrs\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已收藏"), "html", null, true);
            echo "</a>
            <a href=\"javascript:;\" class=\"collect-btn link-dark\" data-url=\"";
            // line 37
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_collect", array("threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["isCollected"])) { $_isCollected_ = $context["isCollected"]; } else { $_isCollected_ = null; }
            if (($_isCollected_ == true)) {
                echo " style=\"display:none;\"";
            }
            echo "><i class=\"es-icon es-icon-favoriteoutline mrs\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收藏"), "html", null, true);
            echo "</a>
          ";
        }
        // line 39
        echo "        </div>
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表于"), "html", null, true);
        echo " ";
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_threadMain_, "createdTime", array())), "html", null, true);
        echo "
        <span class=\"mll\">";
        // line 41
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_threadMain_, "hitNum", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("次查看"), "html", null, true);
        echo "</span>
      </div>
      <div class=\"editor-text\">
        ";
        // line 44
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        echo $this->getAttribute($_threadMain_, "content", array());
        echo "
      </div>
      
      ";
        // line 47
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Attachment/Widget:list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 47)->display(array_merge($context, array("targetType" => "group.thread", "targetId" => $this->getAttribute($_threadMain_, "id", array()))));
        // line 48
        echo "
      ";
        // line 49
        if (isset($context["attachs"])) { $_attachs_ = $context["attachs"]; } else { $_attachs_ = null; }
        if ($_attachs_) {
            // line 50
            echo "        <hr>
        <span class=\"glyphicon glyphicon-paperclip\"></span> ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("附件下载"), "html", null, true);
            echo " :
        <div class=\"row clearfix mtm\">
          ";
            // line 53
            if (isset($context["attachs"])) { $_attachs_ = $context["attachs"]; } else { $_attachs_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attachs_);
            foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                // line 54
                echo "            <div class=\"pull-left attach col-md-4 col-sm-6 col-lg-4\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                if ($this->getAttribute($_attach_, "description", array())) {
                    echo "描述：";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "description", array()), "html", null, true);
                }
                echo "  上传于 ";
                if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($this->getAttribute($_files_, $this->getAttribute($_attach_, "fileId", array()), array(), "array"), "createdTime", array())), "html", null, true);
                echo "\">
              ";
                // line 55
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (((($this->getAttribute($_attach_, "coin", array()) > 0) && ($this->getAttribute($_user_, "id", array()) != $this->getAttribute($_attach_, "userId", array()))) && $this->getAttribute($_app_, "user", array()))) {
                    // line 56
                    echo "                <a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($_attach_, "id", array()))), "html", null, true);
                    echo "\" class=\"pull-left mrm\"><img src=\"";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($_attach_, "title", array()), ".png")), "html", null, true);
                    echo "\" class=\"avatar-md\"></a>
              ";
                } else {
                    // line 58
                    echo "                <a href=\"";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($_attach_, "id", array()))), "html", null, true);
                    echo "\" class=\"pull-left mrm\"><img src=\"";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($_attach_, "title", array()), ".png")), "html", null, true);
                    echo "\" class=\"avatar-md\"></a>
              ";
                }
                // line 60
                echo "              <div class=\"media-body\">
                <div class=\"metas mts\">
                  ";
                // line 62
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (((($this->getAttribute($_attach_, "coin", array()) > 0) && ($this->getAttribute($_user_, "id", array()) != $this->getAttribute($_attach_, "userId", array()))) && $this->getAttribute($_app_, "user", array()))) {
                    // line 63
                    echo "                    <strong><a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($_attach_, "id", array()))), "html", null, true);
                    echo "\">";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "title", array()), "html", null, true);
                    echo "</a></strong>
                  ";
                } else {
                    // line 65
                    echo "                    <strong><a href=\"";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($_attach_, "id", array()))), "html", null, true);
                    echo "\">";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "title", array()), "html", null, true);
                    echo "</a></strong>
                  ";
                }
                // line 67
                echo "                </div>

                <div class=\"content\" style=\"color: #999;font-size:11px;\">
                  ";
                // line 70
                if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($this->getAttribute($_files_, $this->getAttribute($_attach_, "fileId", array()), array(), "array"), "size", array())), "html", null, true);
                echo "
                  ";
                // line 71
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                if (($this->getAttribute($_attach_, "coin", array()) > 0)) {
                    // line 72
                    echo "                    <span class=\"mls\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("售价"), "html", null, true);
                    echo ":";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "coin", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "html", null, true);
                    echo "</span>
                    ";
                } else {
                    // line 74
                    echo "                    <span class=\"mls\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 76
                echo "                  <br>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下载次数："), "html", null, true);
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "hitNum", array()), "html", null, true);
                echo "
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </div>
      ";
        }
        // line 83
        echo "      <div class=\"mtl text-right\">
        ";
        // line 84
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward") && ($this->getAttribute($_threadMain_, "count", array()) == 1))) {
            // line 85
            echo "          ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["owner"])) { $_owner_ = $context["owner"]; } else { $_owner_ = null; }
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
            if ((((($this->getAttribute($_user_, "id", array()) == $this->getAttribute($_owner_, "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($this->getAttribute($_user_, "id", array()) == $this->getAttribute($_groupinfo_, "ownerId", array()))) || ($_is_groupmember_ == 3))) {
                // line 86
                echo "          ";
            } else {
                // line 87
                echo "            ";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if ($this->getAttribute($_app_, "user", array())) {
                    // line 88
                    echo "            <a class=\"btn btn-default btn-sm mrm\" href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                    if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_hide", array("threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看隐藏内容"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 90
                echo "          ";
            }
            // line 91
            echo "        ";
        }
        // line 92
        echo "
        ";
        // line 93
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (isset($context["owner"])) { $_owner_ = $context["owner"]; } else { $_owner_ = null; }
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
        if ((((($this->getAttribute($_user_, "id", array()) == $this->getAttribute($_owner_, "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($this->getAttribute($_user_, "id", array()) == $this->getAttribute($_groupinfo_, "ownerId", array()))) || ($_is_groupmember_ == 3))) {
            // line 94
            echo "          <a class=\"btn btn-default btn-sm mrm\" href=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_update", array("id" => $this->getAttribute($_groupinfo_, "id", array()), "threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
            echo "</a>
        ";
        }
        // line 96
        echo "
        ";
        // line 97
        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
        if (((($_is_groupmember_ == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($_is_groupmember_ == 3))) {
            // line 98
            echo "          ";
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            if (($this->getAttribute($_threadMain_, "isElite", array()) == 1)) {
                // line 99
                echo "            <a id=\"elite\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消加精"), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm mrm\"
              href=\"javascript:\"
            data-url=\"";
                // line 101
                if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_removeElite", array("threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消加精"), "html", null, true);
                echo "</a>
          ";
            } else {
                // line 103
                echo "            <a id=\"elite\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加精"), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm mrm\"
            href=\"javascript:\" data-url=\"";
                // line 104
                if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_setElite", array("threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加精"), "html", null, true);
                echo "</a>
          ";
            }
            // line 106
            echo "
          ";
            // line 107
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            if (($this->getAttribute($_threadMain_, "isStick", array()) == 1)) {
                // line 108
                echo "             <a id=\"stick\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消置顶"), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm mrm\"
            href=\"javascript:\" data-url=\"";
                // line 109
                if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_removeStick", array("threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消置顶"), "html", null, true);
                echo "</a>
          ";
            } else {
                // line 111
                echo "            <a id=\"stick\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm mrm\"
            href=\"javascript:\" data-url=\"";
                // line 112
                if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_setStick", array("threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
                echo "</a>
          ";
            }
            // line 114
            echo "
          ";
            // line 115
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                // line 116
                echo "            ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
                if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
                if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($_user_, "id", array()) == $this->getAttribute($_groupinfo_, "ownerId", array()))) || ($_is_groupmember_ == 3))) {
                    // line 117
                    echo "              ";
                    if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                    if ((($this->getAttribute($_threadMain_, "type", array()) == "reward") && ($this->getAttribute($_threadMain_, "rewardCoin", array()) > 0))) {
                        // line 118
                        echo "                ";
                        if (isset($context["isAdopt"])) { $_isAdopt_ = $context["isAdopt"]; } else { $_isAdopt_ = null; }
                        if ( !$_isAdopt_) {
                            // line 119
                            echo "                  <a id=\"cancelReward\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消悬赏"), "html", null, true);
                            echo "\" class=\"btn btn-default btn-sm mrm\"
                  href=\"javascript:\" data-url=\"";
                            // line 120
                            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_cancel_reward", array("threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
                            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消悬赏"), "html", null, true);
                            echo "</a>
                ";
                        }
                        // line 122
                        echo "              ";
                    } else {
                        // line 123
                        echo "                ";
                        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                        if (($this->getAttribute($_threadMain_, "type", array()) == "default")) {
                            // line 124
                            echo "                  <a id=\"rewardCoin\"  title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("悬赏"), "html", null, true);
                            echo "\" class=\"btn btn-default btn-sm mrm\"
                    href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                            // line 125
                            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_reward", array("threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
                            echo "\"><span class=\"glyphicon glyphicon-usd\"></span>  ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("悬赏"), "html", null, true);
                            echo "</a>
                ";
                        }
                        // line 127
                        echo "              ";
                    }
                    // line 128
                    echo "            ";
                }
                // line 129
                echo "          ";
            }
            // line 130
            echo "        ";
        }
        // line 131
        echo "        ";
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "type", array()) == "onlyOwner")) {
            // line 132
            echo "          <a class=\"btn btn-default btn-sm mrm\" href=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($_groupinfo_, "id", array()), "threadId" => $this->getAttribute($_threadMain_, "id", array()), "type" => "all", "sort" => $this->getAttribute($_filters_, "sort", array()))), "html", null, true);
            echo "\" %}><span class=\"glyphicon glyphicon-filter\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看全部"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 134
            echo "          <a class=\"btn btn-default btn-sm mrm\" href=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($_groupinfo_, "id", array()), "threadId" => $this->getAttribute($_threadMain_, "id", array()), "type" => "onlyOwner", "sort" => $this->getAttribute($_filters_, "sort", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("只看楼主"), "html", null, true);
            echo "</a>
        ";
        }
        // line 136
        echo "
        ";
        // line 137
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort", array()) == "desc")) {
            // line 138
            echo "          <a type=\"button\" class=\"btn btn-default btn-sm mrm\" href=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($_groupinfo_, "id", array()), "threadId" => $this->getAttribute($_threadMain_, "id", array()), "type" => $this->getAttribute($_filters_, "type", array()), "sort" => "asc")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("顺序查看"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 140
            echo "          <a type=\"button\" class=\"btn btn-default btn-sm mrm\" href=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($_groupinfo_, "id", array()), "threadId" => $this->getAttribute($_threadMain_, "id", array()), "type" => $this->getAttribute($_filters_, "type", array()), "sort" => "desc")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("倒序查看"), "html", null, true);
            echo "</a>
        ";
        }
        // line 142
        echo "      </div>
    </div>
  </div>

  ";
        // line 146
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 147
            echo "    ";
            if (isset($context["isAdopt"])) { $_isAdopt_ = $context["isAdopt"]; } else { $_isAdopt_ = null; }
            if ($_isAdopt_) {
                // line 148
                echo "    <div class=\"panel panel-default group-post-list\">
      <div class=\"panel-heading\" style=\"color:#d9534f;\">
        ";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最佳回答"), "html", null, true);
                echo "
      </div>
      <div class=\"panel-body\">
        <ul class=\"media-list\">
          <li class=\"media\">
            <a href=\"";
                // line 155
                if (isset($context["isAdopt"])) { $_isAdopt_ = $context["isAdopt"]; } else { $_isAdopt_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_isAdopt_, 0, array(), "array"), "userId", array()))), "html", null, true);
                echo "\" class=\"pull-left\"><img src=\"";
                if (isset($context["postMember"])) { $_postMember_ = $context["postMember"]; } else { $_postMember_ = null; }
                if (isset($context["isAdopt"])) { $_isAdopt_ = $context["isAdopt"]; } else { $_isAdopt_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute($_postMember_, $this->getAttribute($this->getAttribute($_isAdopt_, 0, array(), "array"), "userId", array()), array(), "array"), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"avatar-md\"></a>
            <div class=\"media-body\">
              <div class=\"metas\">
                <strong>";
                // line 158
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["postMember"])) { $_postMember_ = $context["postMember"]; } else { $_postMember_ = null; }
                if (isset($context["isAdopt"])) { $_isAdopt_ = $context["isAdopt"]; } else { $_isAdopt_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $this->getAttribute($_postMember_, $this->getAttribute($this->getAttribute($_isAdopt_, 0, array(), "array"), "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "</strong>
                <span class=\"mhm\">";
                // line 159
                if (isset($context["isAdopt"])) { $_isAdopt_ = $context["isAdopt"]; } else { $_isAdopt_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($this->getAttribute($_isAdopt_, 0, array(), "array"), "createdTime", array())), "html", null, true);
                echo " </span>
              </div>
              <div class=\"content\">
                ";
                // line 162
                if (isset($context["isAdopt"])) { $_isAdopt_ = $context["isAdopt"]; } else { $_isAdopt_ = null; }
                echo $this->getAttribute($this->getAttribute($_isAdopt_, 0, array(), "array"), "content", array());
                echo "
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    ";
            }
            // line 170
            echo "  ";
        }
        // line 171
        echo "
  ";
        // line 172
        if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
        if ($this->getAttribute($_threadMain_, "postNum", array())) {
            // line 173
            echo "  <div class=\"panel panel-default group-post-list\">
    <div class=\"panel-heading\">
      ";
            // line 175
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_threadMain_, "postNum", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
            echo "
    </div>
    <div class=\"panel-body\">
      <ul class=\"media-list\">
        ";
            // line 179
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_post_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 180
                echo "          ";
                if (isset($context["postReply"])) { $_postReply_ = $context["postReply"]; } else { $_postReply_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                $context["subPosts"] = (($this->getAttribute($_postReply_, $this->getAttribute($_post_, "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_postReply_, $this->getAttribute($_post_, "id", array()), array(), "array"), null)) : (null));
                // line 181
                echo "          <li id=\"post-";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                echo "\" class=\"media\">
            <a href=\"";
                // line 182
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_post_, "userId", array()))), "html", null, true);
                echo "\" class=\"pull-left\"><img src=\"";
                if (isset($context["postMember"])) { $_postMember_ = $context["postMember"]; } else { $_postMember_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute($_postMember_, $this->getAttribute($_post_, "userId", array()), array(), "array"), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"avatar-sm\"></a>
            <div class=\"media-body\">
              <div class=\"metas\">
                <span class=\"floor\">
                  ";
                // line 186
                if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
                if (($this->getAttribute($_filters_, "sort", array()) == "desc")) {
                    // line 187
                    echo "                    ";
                    if (isset($context["postCount"])) { $_postCount_ = $context["postCount"]; } else { $_postCount_ = null; }
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, ((($_postCount_ + 1) - ($this->getAttribute($_paginator_, "getPerPageCount", array(), "method") * ($this->getAttribute($_paginator_, "currentPage", array()) - 1))) - $this->getAttribute($_loop_, "index0", array())), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("楼"), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 189
                    echo "                    ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_loop_, "index", array()) + 1) + ($this->getAttribute($_paginator_, "getPerPageCount", array(), "method") * ($this->getAttribute($_paginator_, "currentPage", array()) - 1))), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("楼"), "html", null, true);
                    echo "
                  ";
                }
                // line 191
                echo "                </span>
                <strong>";
                // line 192
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["postMember"])) { $_postMember_ = $context["postMember"]; } else { $_postMember_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $this->getAttribute($_postMember_, $this->getAttribute($_post_, "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "</strong>
                <span class=\"divider mhm\">•</span>
                <span >";
                // line 194
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_post_, "createdTime", array())), "html", null, true);
                echo " </span>
              </div>

              <div class=\"content editor-text\">
                ";
                // line 198
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo $this->getAttribute($_post_, "content", array());
                echo "
                  ";
                // line 199
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                $this->loadTemplate("TopxiaWebBundle:Attachment/Widget:list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 199)->display(array_merge($context, array("targetType" => "group.thread.post", "targetId" => $this->getAttribute($_post_, "id", array()))));
                // line 200
                echo "              </div>

              <div class=\"actions\">
                ";
                // line 203
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
                if ((((($this->getAttribute($_user_, "id", array()) == $this->getAttribute($_post_, "userId", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($_is_groupmember_ == 3)) || ($_is_groupmember_ == 2))) {
                    // line 204
                    echo "                  <a title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定删除这条回复"), "html", null, true);
                    echo "\" class=\"mhm post-delete-btn\" href=\"javascript:\" data-url=\"";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_deletePost", array("postId" => $this->getAttribute($_post_, "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 206
                echo "
                ";
                // line 207
                if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                    // line 208
                    echo "                  ";
                    if (isset($context["isAdopt"])) { $_isAdopt_ = $context["isAdopt"]; } else { $_isAdopt_ = null; }
                    if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                    if (( !$_isAdopt_ && ($this->getAttribute($_threadMain_, "type", array()) == "reward"))) {
                        // line 209
                        echo "                    ";
                        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
                        if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($_is_groupmember_ == 3)) || ($_is_groupmember_ == 2))) {
                            // line 210
                            echo "                      <a title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定采纳这条回复"), "html", null, true);
                            echo "\" class=\"mhm post-adopt-btn\" href=\"javascript:\" data-url=\"";
                            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_adopt", array("postId" => $this->getAttribute($_post_, "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("采纳"), "html", null, true);
                            echo "</a>
                    ";
                        }
                        // line 212
                        echo "                  ";
                    }
                    // line 213
                    echo "                ";
                }
                // line 214
                echo "
                ";
                // line 215
                if (isset($context["subPosts"])) { $_subPosts_ = $context["subPosts"]; } else { $_subPosts_ = null; }
                if ( !$_subPosts_) {
                    // line 216
                    echo "                  <a href=\"javascript:\" class=\"reply\" id=\"reply-";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\"  postId=\"";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" postName=\"";
                    if (isset($context["postMember"])) { $_postMember_ = $context["postMember"]; } else { $_postMember_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_postMember_, $this->getAttribute($_post_, "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                    echo "\" data-from-user-id-nosub=\"";
                    if (isset($context["postMember"])) { $_postMember_ = $context["postMember"]; } else { $_postMember_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_postMember_, $this->getAttribute($_post_, "userId", array()), array(), "array"), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
                    echo "</a>
                  <a href=\"javascript:\" class=\"unreply\" id=\"unreply-";
                    // line 217
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" postId=\"";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" style=\"display:none;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 219
                    echo "                  <a style=\"display:none;\" href=\"javascript:\" class=\"reply\" id=\"reply-";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\"  postId=\"";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" postName=\"";
                    if (isset($context["postMember"])) { $_postMember_ = $context["postMember"]; } else { $_postMember_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_postMember_, $this->getAttribute($_post_, "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                    echo "\" data-from-user-id-nosub=\"\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
                    echo "(";
                    if (isset($context["postReplyCount"])) { $_postReplyCount_ = $context["postReplyCount"]; } else { $_postReplyCount_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_postReplyCount_, $this->getAttribute($_post_, "id", array()), array(), "array"), "html", null, true);
                    echo ")</a>
                  <a href=\"javascript:\" class=\"unreply\" id=\"unreply-";
                    // line 220
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" postId=\"";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 222
                echo "              </div>
              <div class=\"reply-";
                // line 223
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                echo "\">
                ";
                // line 224
                if (isset($context["subPosts"])) { $_subPosts_ = $context["subPosts"]; } else { $_subPosts_ = null; }
                if ($_subPosts_) {
                    // line 225
                    echo "                  ";
                    if (isset($context["subPosts"])) { $_subPosts_ = $context["subPosts"]; } else { $_subPosts_ = null; }
                    if (isset($context["postReplyMembers"])) { $_postReplyMembers_ = $context["postReplyMembers"]; } else { $_postReplyMembers_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    $this->loadTemplate("TopxiaWebBundle:Group:post-reply-list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 225)->display(array_merge($context, array("posts" => $_subPosts_, "users" => $_postReplyMembers_, "postMain" => $_post_)));
                    // line 226
                    echo "                ";
                } else {
                    // line 227
                    echo "                  <div class=\"reply-";
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" style=\"display:none;\">
                    <form  class=\"thread-post-reply-form reply-";
                    // line 228
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" method=\"post\"  post-url=\"";
                    if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
                    if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post", array("groupId" => $this->getAttribute($_groupinfo_, "id", array()), "threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
                    echo "\">
                      <div class=\"form-group\">
                        <label class=\"control-label hide\" for=\"reply-content-";
                    // line 230
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复内容"), "html", null, true);
                    echo "</label>
                        <div class=\"controls\">
                        <textarea id=\"reply-content-";
                    // line 232
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" class=\"form-control\" data-image-upload-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
                    echo "\"></textarea>
                      </div>
                      </div>
                      <div id=\"fromUserIdNoSubDiv\"></div>
                      <div class=\"form-group\">
                        <button type=\"submit\" postId=\"";
                    // line 237
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id", array()), "html", null, true);
                    echo "\" class=\"reply-btn btn btn-xs btn-primary pull-right\" style=\"margin-top:-10px;\"data-submiting-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在发表回复"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表"), "html", null, true);
                    echo "</button>
                      </div>
                    </form>
                  </div>
                ";
                }
                // line 242
                echo "              </div>
            </div>
          ";
                // line 244
                if (isset($context["postAttachs"])) { $_postAttachs_ = $context["postAttachs"]; } else { $_postAttachs_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if ($this->getAttribute($_postAttachs_, $this->getAttribute($_post_, "id", array()), array(), "array")) {
                    // line 245
                    echo "            <hr>
            <span class=\"glyphicon glyphicon-paperclip\"></span> ";
                    // line 246
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("附件下载"), "html", null, true);
                    echo " :
            <div class=\"row clearfix mtm\">
              ";
                    // line 248
                    if (isset($context["postAttachs"])) { $_postAttachs_ = $context["postAttachs"]; } else { $_postAttachs_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_postAttachs_, $this->getAttribute($_post_, "id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                        // line 249
                        echo "                ";
                        if (isset($context["postFiles"])) { $_postFiles_ = $context["postFiles"]; } else { $_postFiles_ = null; }
                        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                        $context["postFile"] = $this->getAttribute($_postFiles_, $this->getAttribute($_post_, "id", array()), array(), "array");
                        // line 250
                        echo "                <div class=\"pull-left attach col-md-4 col-sm-6 col-lg-4\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                        if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                        if ($this->getAttribute($_attach_, "description", array())) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("描述："), "html", null, true);
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "description", array()), "html", null, true);
                        }
                        echo "  ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传于"), "html", null, true);
                        echo " ";
                        if (isset($context["postFile"])) { $_postFile_ = $context["postFile"]; } else { $_postFile_ = null; }
                        if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($this->getAttribute($_postFile_, $this->getAttribute($_attach_, "fileId", array()), array(), "array"), "createdTime", array())), "html", null, true);
                        echo "\">
                  ";
                        // line 251
                        if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if (((($this->getAttribute($_attach_, "coin", array()) > 0) && $this->getAttribute($_app_, "user", array())) && ($this->getAttribute($_user_, "id", array()) != $this->getAttribute($_attach_, "userId", array())))) {
                            // line 252
                            echo "                    <a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($_attach_, "id", array()))), "html", null, true);
                            echo "\" class=\"pull-left mrm\"><img src=\"";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($_attach_, "title", array()), ".png")), "html", null, true);
                            echo "\" class=\"avatar-md\"></a>
                  ";
                        } else {
                            // line 254
                            echo "                    <a href=\"";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($_attach_, "id", array()))), "html", null, true);
                            echo "\" class=\"pull-left mrm\"><img src=\"";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($_attach_, "title", array()), ".png")), "html", null, true);
                            echo "\" class=\"avatar-md\"></a>
                  ";
                        }
                        // line 256
                        echo "                  <div class=\"media-body\">
                    <div class=\"metas mts\">
                      ";
                        // line 258
                        if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        if (((($this->getAttribute($_attach_, "coin", array()) > 0) && ($this->getAttribute($_user_, "id", array()) != $this->getAttribute($_attach_, "userId", array()))) && $this->getAttribute($_app_, "user", array()))) {
                            // line 259
                            echo "                        <strong><a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($_attach_, "id", array()))), "html", null, true);
                            echo "\">";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "title", array()), "html", null, true);
                            echo "</a></strong>
                      ";
                        } else {
                            // line 261
                            echo "                        <strong><a href=\"";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($_attach_, "id", array()))), "html", null, true);
                            echo "\">";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "title", array()), "html", null, true);
                            echo "</a></strong>
                      ";
                        }
                        // line 263
                        echo "                    </div>
                    <div class=\"content\" style=\"color: #999;font-size:11px;\">
                      ";
                        // line 265
                        if (isset($context["postFile"])) { $_postFile_ = $context["postFile"]; } else { $_postFile_ = null; }
                        if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($this->getAttribute($_postFile_, $this->getAttribute($_attach_, "fileId", array()), array(), "array"), "size", array())), "html", null, true);
                        echo "
                      ";
                        // line 266
                        if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                        if (($this->getAttribute($_attach_, "coin", array()) > 0)) {
                            // line 267
                            echo "                        <span class=\"mls\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("售价"), "html", null, true);
                            echo ":";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "coin", array()), "html", null, true);
                            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "html", null, true);
                            echo "</span>
                        ";
                        } else {
                            // line 269
                            echo "                        <span class=\"mls\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                            echo "</span>
                      ";
                        }
                        // line 271
                        echo "                      <br>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下载次数："), "html", null, true);
                        if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "hitNum", array()), "html", null, true);
                        echo "
                    </div>
                    ";
                        // line 273
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
                        if ((((($this->getAttribute($_user_, "id", array()) == $this->getAttribute($_post_, "userId", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($_is_groupmember_ == 3)) || ($_is_groupmember_ == 2))) {
                            // line 274
                            echo "                      <a title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定删除此附件"), "html", null, true);
                            echo "\" class=\"mhm post-delete-btn\" href=\"javascript:\" data-url=\"";
                            if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_delete_attach", array("goodsId" => $this->getAttribute($_attach_, "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                            echo "</a>
                    ";
                        }
                        // line 276
                        echo "                  </div>
                </div>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 279
                    echo "            </div>
          ";
                }
                // line 281
                echo "          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "      </ul>

      ";
            // line 285
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 289
        echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表回复"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">

      ";
        // line 294
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user", array())) {
            // line 295
            echo "        <form id=\"post-thread-form\" class=\"post-thread-form thread-form\" method=\"post\" post-url=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            if (isset($context["threadMain"])) { $_threadMain_ = $context["threadMain"]; } else { $_threadMain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post", array("groupId" => $this->getAttribute($_groupinfo_, "id", array()), "threadId" => $this->getAttribute($_threadMain_, "id", array()))), "html", null, true);
            echo "\">

          <div class=\"form-group\">
            <label class=\"control-label hide\" for=\"post_content\">";
            // line 298
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复内容"), "html", null, true);
            echo "</label>
            <div class=\"controls\">
              <textarea name=\"content\" value=\"\" rows=\"10\" id=\"post_content\" class=\"form-control\" data-image-upload-url=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\"></textarea>
            </div>
          </div>

            <div class=\"form-group\">
                ";
            // line 305
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Attachment:formFields", array("targetType" => "group.thread.post", "targetId" => (($this->getAttribute($_thread_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_thread_, "id", array()), 0)) : (0))), array("showLabel" => false)));
            echo "
            </div>

          <div class=\"form-group\">
            <div class=\"controls\">
            <button id=\"post-thread-btn\" data-submiting-text=\"";
            // line 310
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在回复"), "html", null, true);
            echo "\" type=\"submit\" class=\"post-thread-btn btn btn-primary pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表"), "html", null, true);
            echo "</button>
            </div>
          </div>
           ";
            // line 313
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                // line 314
                echo "            <input type=\"hidden\" name=\"group_reward\" id=\"group_reward\">
           ";
            }
            // line 316
            echo "          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        </form>
      ";
        } else {
            // line 319
            echo "        <div class=\"empty\">
          你还没有登录，请先<a href=\"";
            // line 320
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
            echo "\">登录</a>或<a href=\"";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
            echo "\">注册</a>！
        </div>
      ";
        }
        // line 323
        echo "    </div>
  </div>
  ";
        // line 325
        $this->loadTemplate("TopxiaWebBundle:Group:upload-modal.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 325)->display($context);
    }

    // line 328
    public function block_group_side($context, array $blocks = array())
    {
        // line 329
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题作者"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      <div class=\"media\">
        <div class=\"media-left prm\">
          <a class=\"\" href=\"";
        // line 334
        if (isset($context["owner"])) { $_owner_ = $context["owner"]; } else { $_owner_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_owner_, "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 335
        if (isset($context["owner"])) { $_owner_ = $context["owner"]; } else { $_owner_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_owner_, "smallAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" class=\"avatar-md\">
          </a>
        </div>
        <div class=\"media-body ptm\">
          <div>
            <a class=\"gray-darker\">";
        // line 340
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["owner"])) { $_owner_ = $context["owner"]; } else { $_owner_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_owner_), "method"), "html", null, true);
        echo "</a>
          </div>
          <span class=\"text-sm gray-medium\">";
        // line 342
        if (isset($context["owner"])) { $_owner_ = $context["owner"]; } else { $_owner_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_owner_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_owner_, "title", array()), $this->env->getExtension('translator')->trans("无"))) : ($this->env->getExtension('translator')->trans("无"))), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 348
        if (isset($context["activeMembers"])) { $_activeMembers_ = $context["activeMembers"]; } else { $_activeMembers_ = null; }
        if ($_activeMembers_) {
            // line 349
            echo "    ";
            if (isset($context["activeMembers"])) { $_activeMembers_ = $context["activeMembers"]; } else { $_activeMembers_ = null; }
            $this->loadTemplate("TopxiaWebBundle:Group:active-member-list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 349)->display(array_merge($context, array("activeMembers" => $_activeMembers_)));
            // line 350
            echo "  ";
        }
        // line 351
        echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("热门小组"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 355
        $context["hotGroups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 3));
        // line 356
        echo "      ";
        if (isset($context["hotGroups"])) { $_hotGroups_ = $context["hotGroups"]; } else { $_hotGroups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_hotGroups_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 357
            echo "        <div class=\"media media-group\">
          <div class=\"media-left\">
            <a href=\"";
            // line 359
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
            echo "\" title=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
            echo "\">
              <img src=\"";
            // line 360
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_group_, "logo", array()), "group.png"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
            echo "\" class=\"avatar-square-md\">
            </a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"gray-darker\" href=\"";
            // line 365
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
            echo "\" title=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
            echo "\">
                ";
            // line 366
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas\">
              <span><i class=\"es-icon es-icon-people\"></i>";
            // line 370
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum", array()), "html", null, true);
            echo "</span>
              <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 371
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "threadNum", array()), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 376
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无小组信息！"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        echo "    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1347 => 378,  1338 => 376,  1327 => 371,  1322 => 370,  1314 => 366,  1306 => 365,  1294 => 360,  1286 => 359,  1282 => 357,  1275 => 356,  1273 => 355,  1268 => 353,  1264 => 351,  1261 => 350,  1257 => 349,  1254 => 348,  1244 => 342,  1237 => 340,  1228 => 335,  1223 => 334,  1216 => 330,  1213 => 329,  1210 => 328,  1206 => 325,  1202 => 323,  1192 => 320,  1189 => 319,  1182 => 316,  1178 => 314,  1176 => 313,  1168 => 310,  1159 => 305,  1149 => 300,  1144 => 298,  1135 => 295,  1132 => 294,  1126 => 291,  1122 => 289,  1113 => 285,  1109 => 283,  1094 => 281,  1090 => 279,  1082 => 276,  1071 => 274,  1066 => 273,  1058 => 271,  1052 => 269,  1042 => 267,  1039 => 266,  1033 => 265,  1029 => 263,  1019 => 261,  1009 => 259,  1004 => 258,  1000 => 256,  990 => 254,  980 => 252,  975 => 251,  959 => 250,  954 => 249,  948 => 248,  943 => 246,  940 => 245,  936 => 244,  932 => 242,  919 => 237,  908 => 232,  900 => 230,  890 => 228,  884 => 227,  881 => 226,  875 => 225,  872 => 224,  867 => 223,  864 => 222,  853 => 220,  834 => 219,  823 => 217,  804 => 216,  801 => 215,  798 => 214,  795 => 213,  792 => 212,  781 => 210,  777 => 209,  772 => 208,  770 => 207,  767 => 206,  756 => 204,  751 => 203,  746 => 200,  743 => 199,  738 => 198,  730 => 194,  722 => 192,  719 => 191,  710 => 189,  700 => 187,  697 => 186,  685 => 182,  679 => 181,  674 => 180,  656 => 179,  647 => 175,  643 => 173,  640 => 172,  637 => 171,  634 => 170,  622 => 162,  615 => 159,  608 => 158,  597 => 155,  589 => 150,  585 => 148,  581 => 147,  579 => 146,  573 => 142,  562 => 140,  551 => 138,  548 => 137,  545 => 136,  534 => 134,  523 => 132,  519 => 131,  516 => 130,  513 => 129,  510 => 128,  507 => 127,  499 => 125,  494 => 124,  490 => 123,  487 => 122,  479 => 120,  474 => 119,  470 => 118,  466 => 117,  460 => 116,  458 => 115,  455 => 114,  447 => 112,  442 => 111,  434 => 109,  429 => 108,  426 => 107,  423 => 106,  415 => 104,  410 => 103,  402 => 101,  396 => 99,  392 => 98,  389 => 97,  386 => 96,  376 => 94,  370 => 93,  367 => 92,  364 => 91,  361 => 90,  352 => 88,  348 => 87,  345 => 86,  338 => 85,  335 => 84,  332 => 83,  328 => 81,  314 => 76,  308 => 74,  298 => 72,  295 => 71,  289 => 70,  284 => 67,  274 => 65,  264 => 63,  259 => 62,  255 => 60,  245 => 58,  235 => 56,  230 => 55,  216 => 54,  211 => 53,  206 => 51,  203 => 50,  200 => 49,  197 => 48,  194 => 47,  187 => 44,  178 => 41,  171 => 40,  168 => 39,  155 => 37,  142 => 36,  138 => 35,  133 => 32,  129 => 31,  125 => 30,  117 => 24,  114 => 23,  105 => 21,  100 => 20,  96 => 19,  93 => 18,  87 => 16,  83 => 15,  77 => 13,  74 => 12,  69 => 11,  64 => 8,  61 => 7,  54 => 5,  47 => 4,  35 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
