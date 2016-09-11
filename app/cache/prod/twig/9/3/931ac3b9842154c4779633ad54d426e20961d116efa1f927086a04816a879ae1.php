<?php

/* TopxiaWebBundle:Group:groupindex.html.twig */
class __TwigTemplate_931ac3b9842154c4779633ad54d426e20961d116efa1f927086a04816a879ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:groupindex.html.twig", 1);
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
        // line 6
        $context["groupNav"] = "index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupinfo_, "title", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组"), "html", null, true);
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
        if (isset($context["groupAbout"])) { $_groupAbout_ = $context["groupAbout"]; } else { $_groupAbout_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("groupAbout", $context)) ? (_twig_default_filter($_groupAbout_, "")) : ("")), 100);
    }

    // line 8
    public function block_group_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组介绍"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      ";
        // line 12
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        if (($this->getAttribute($_paginator_, "currentPage", array()) == $this->getAttribute($_paginator_, "firstPage", array()))) {
            // line 13
            echo "        <div class=\"well editor-text\">
          ";
            // line 14
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            if ($this->getAttribute($_groupinfo_, "about", array())) {
                echo " ";
                if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
                echo $this->getAttribute($_groupinfo_, "about", array());
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无简介"), "html", null, true);
                echo " ";
            }
            // line 15
            echo "        </div>
      ";
        }
        // line 17
        echo "    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs\">
        <li ";
        // line 22
        if (isset($context["groupNav"])) { $_groupNav_ = $context["groupNav"]; } else { $_groupNav_ = null; }
        if (($_groupNav_ == "index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_groupinfo_, "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组首页"), "html", null, true);
        echo "</a></li>
        <li ";
        // line 23
        if (isset($context["groupNav"])) { $_groupNav_ = $context["groupNav"]; } else { $_groupNav_ = null; }
        if (($_groupNav_ == "member")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_member", array("id" => $this->getAttribute($_groupinfo_, "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组成员"), "html", null, true);
        echo "</a></li>
        ";
        // line 24
        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
        if (((($_is_groupmember_ == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($_is_groupmember_ == 3))) {
            // line 25
            echo "          <li ";
            if (isset($context["groupNav"])) { $_groupNav_ = $context["groupNav"]; } else { $_groupNav_ = null; }
            if (($_groupNav_ == "setting")) {
                echo "class=\"active\" ";
            }
            echo "><a  href=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_set", array("id" => $this->getAttribute($_groupinfo_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组设置"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 27
        echo "      </ul>

      ";
        // line 29
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"nav-filter clearfix mbl\">

      <ul class=\"nav nav-pills nav-pills-sm\">

        <li";
        // line 34
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        if (($this->getAttribute($_condition_, "type", array()) == "all")) {
            echo " class=\"active\"";
        }
        echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $_id_, "num" => $this->getAttribute($_condition_, "num", array()), "sort" => $this->getAttribute($_condition_, "sort", array()), "isElite" => 0)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
        echo "</a></li>

        <li";
        // line 36
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        if (($this->getAttribute($_condition_, "type", array()) == "elite")) {
            echo " class=\"active\"";
        }
        echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $_id_, "type" => "elite", "num" => $this->getAttribute($_condition_, "num", array()), "sort" => $this->getAttribute($_condition_, "sort", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精华"), "html", null, true);
        echo "</a></li>

        ";
        // line 38
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 39
            echo "        <li";
            if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
            if (($this->getAttribute($_condition_, "type", array()) == "reward")) {
                echo " class=\"active\"";
            }
            echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $_id_, "type" => "reward", "num" => $this->getAttribute($_condition_, "num", array()), "sort" => $this->getAttribute($_condition_, "sort", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("悬赏"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 41
        echo "
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <span class=\"text-muted\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("排序："), "html", null, true);
        echo "</span>
            ";
        // line 45
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        if (($this->getAttribute($_condition_, "sort", array()) == "byLastPostTime")) {
            // line 46
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后回复"), "html", null, true);
            echo "
            ";
        } elseif (($this->getAttribute($_condition_, "sort", array()) == "byCreatedTime")) {
            // line 48
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新发帖"), "html", null, true);
            echo "
            ";
        } elseif (($this->getAttribute($_condition_, "sort", array()) == "byPostNum")) {
            // line 50
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复数"), "html", null, true);
            echo "
            ";
        }
        // line 52
        echo "            <span class=\"caret\"></span>
          </a>
          <ul class=\"dropdown-menu\">
            <li class=\"";
        // line 55
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        if (($this->getAttribute($_condition_, "sort", array()) == "byCreatedTime")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $_id_, "isElite" => $this->getAttribute($_condition_, "type", array()), "num" => $this->getAttribute($_condition_, "num", array()), "sort" => "byCreatedTime")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新发帖"), "html", null, true);
        echo "</a></li>
            <li class=\"";
        // line 56
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        if (($this->getAttribute($_condition_, "sort", array()) == "byLastPostTime")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $_id_, "isElite" => $this->getAttribute($_condition_, "type", array()), "num" => $this->getAttribute($_condition_, "num", array()), "sort" => "byLastPostTime")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最后回复"), "html", null, true);
        echo "</a></li>
            <li class=\"";
        // line 57
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        if (($this->getAttribute($_condition_, "sort", array()) == "byPostNum")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $_id_, "isElite" => $this->getAttribute($_condition_, "type", array()), "num" => $this->getAttribute($_condition_, "num", array()), "sort" => "byPostNum")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复数"), "html", null, true);
        echo "</a></li>
          </ul>
        </li>
      </ul>


      </div>

      ";
        // line 65
        if (isset($context["owner"])) { $_owner_ = $context["owner"]; } else { $_owner_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:groupindex.html.twig", 65)->display(array_merge($context, array("users" => $_owner_)));
        // line 66
        echo "
      ";
        // line 67
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
    </div>
  </div>
";
    }

    // line 72
    public function block_group_side($context, array $blocks = array())
    {
        // line 73
        echo "  ";
        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
        if (($_is_groupmember_ != 0)) {
            // line 74
            echo "    <div class=\"mbm\"><a href=\"";
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_add", array("id" => $this->getAttribute($_groupinfo_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xlg btn-block\" role=\"button\"><i class=\"es-icon es-icon-comment mrs text-xlg\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表话题"), "html", null, true);
            echo "</a>
    </div>
  ";
        }
        // line 77
        echo "  <form class=\"mbl\" action=\"";
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_search", array("id" => $this->getAttribute($_groupinfo_, "id", array()))), "html", null, true);
        echo "\" method=\"get\">
  <div class=\"search-with-btn\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组内搜索"), "html", null, true);
        echo "\" name=\"keyWord\">
    <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
  </div>
  </form>
  ";
        // line 84
        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
        if (twig_in_filter($_is_groupmember_, array(0 => 1, 1 => 2, 2 => 3))) {
            // line 85
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body group-user-info\">
        <div class=\"media group-item\">
          <div class=\"media-left\">
            ";
            // line 89
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $_user_, 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
            echo "
          </div>
          <div class=\"media-body\">
            <p>";
            // line 92
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_user_, 1 => ""), "method"), "html", null, true);
            echo "

              ";
            // line 94
            if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
            if (($_is_groupmember_ == 1)) {
                // line 95
                echo "              <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组员"), "html", null, true);
                echo "</span>
              ";
            }
            // line 97
            echo "
              ";
            // line 98
            if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
            if (($_is_groupmember_ == 2)) {
                // line 99
                echo "              <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组长"), "html", null, true);
                echo "</span>
              ";
            }
            // line 101
            echo "
              ";
            // line 102
            if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
            if (($_is_groupmember_ == 3)) {
                // line 103
                echo "              <span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("副组长"), "html", null, true);
                echo "</span>
              ";
            }
            // line 105
            echo "            </p>
            <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("group_member_center");
            echo "\" class=\"btn btn-default btn-sm\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的小组"), "html", null, true);
            echo "</a>
          </div>
          <hr>
           <p class=\"group-message clearfix\">
              <span><strong>";
            // line 110
            if (isset($context["userIsGroupMember"])) { $_userIsGroupMember_ = $context["userIsGroupMember"]; } else { $_userIsGroupMember_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_userIsGroupMember_, "threadNum", array()), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题"), "html", null, true);
            echo "</span>
              <span><strong>";
            // line 111
            if (isset($context["userIsGroupMember"])) { $_userIsGroupMember_ = $context["userIsGroupMember"]; } else { $_userIsGroupMember_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_userIsGroupMember_, "postNum", array()), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
            echo "</span>
            </p>
        </div>
      </div>
    </div>
  ";
        }
        // line 117
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组组长"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      <div class=\"media group-item\">
        <div class=\"media-left\">
          ";
        // line 122
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["groupOwner"])) { $_groupOwner_ = $context["groupOwner"]; } else { $_groupOwner_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $_groupOwner_, 1 => ""), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"media-body\">
          <div><a class=\"gray-darker\" href=\"";
        // line 125
        if (isset($context["groupOwner"])) { $_groupOwner_ = $context["groupOwner"]; } else { $_groupOwner_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_groupOwner_, "id", array()))), "html", null, true);
        echo "\" title=\"";
        if (isset($context["groupOwner"])) { $_groupOwner_ = $context["groupOwner"]; } else { $_groupOwner_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupOwner_, "nickname", array()), "html", null, true);
        echo "\">";
        if (isset($context["groupOwner"])) { $_groupOwner_ = $context["groupOwner"]; } else { $_groupOwner_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_groupOwner_, "nickname", array()), "html", null, true);
        echo "</a></div>
          <span class=\"text-sm gray-medium\">";
        // line 126
        if (isset($context["groupOwner"])) { $_groupOwner_ = $context["groupOwner"]; } else { $_groupOwner_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_groupOwner_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_groupOwner_, "title", array()), $this->env->getExtension('translator')->trans("无"))) : ($this->env->getExtension('translator')->trans("无"))), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>


  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新加组员"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      ";
        // line 136
        if (isset($context["recentlyJoinMember"])) { $_recentlyJoinMember_ = $context["recentlyJoinMember"]; } else { $_recentlyJoinMember_ = null; }
        if ($_recentlyJoinMember_) {
            // line 137
            echo "        <ul class=\"user-avatar-list clearfix\">
          ";
            // line 138
            if (isset($context["recentlyJoinMember"])) { $_recentlyJoinMember_ = $context["recentlyJoinMember"]; } else { $_recentlyJoinMember_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_recentlyJoinMember_);
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 139
                echo "            <li>
              ";
                // line 140
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["members"])) { $_members_ = $context["members"]; } else { $_members_ = null; }
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $this->getAttribute($_members_, $this->getAttribute($_member_, "userId", array()), array(), "array"), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "        </ul>
      ";
        } else {
            // line 145
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有小组成员！"), "html", null, true);
            echo "</div>
      ";
        }
        // line 147
        echo "    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("热门小组"), "html", null, true);
        echo "</h3></div>
    <div class=\"panel-body\">
      <div class=\"media-group-list\">
      ";
        // line 154
        $context["hotGroups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 3));
        // line 155
        echo "      ";
        if (isset($context["hotGroups"])) { $_hotGroups_ = $context["hotGroups"]; } else { $_hotGroups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_hotGroups_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 156
            echo "        <div class=\"media media-group\">
          <div class=\"media-left prm\">
            <a href=\"";
            // line 158
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
            echo "\" title=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
            echo "\">
              <img src=\"";
            // line 159
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
            // line 164
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
            echo "\" title=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
            echo "\">
                ";
            // line 165
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas\">
              <span><i class=\"es-icon es-icon-people\"></i>";
            // line 169
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum", array()), "html", null, true);
            echo "</span>
              <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 170
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
            // line 175
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无小组信息！"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "      </div>

    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groupindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 177,  579 => 175,  568 => 170,  563 => 169,  555 => 165,  547 => 164,  535 => 159,  527 => 158,  523 => 156,  516 => 155,  514 => 154,  508 => 151,  502 => 147,  496 => 145,  492 => 143,  480 => 140,  477 => 139,  472 => 138,  469 => 137,  466 => 136,  461 => 134,  449 => 126,  438 => 125,  430 => 122,  423 => 118,  420 => 117,  408 => 111,  401 => 110,  392 => 106,  389 => 105,  383 => 103,  380 => 102,  377 => 101,  371 => 99,  368 => 98,  365 => 97,  359 => 95,  356 => 94,  349 => 92,  341 => 89,  335 => 85,  332 => 84,  325 => 80,  321 => 79,  314 => 77,  304 => 74,  300 => 73,  297 => 72,  287 => 67,  284 => 66,  281 => 65,  261 => 57,  248 => 56,  235 => 55,  230 => 52,  224 => 50,  218 => 48,  212 => 46,  209 => 45,  205 => 44,  200 => 41,  185 => 39,  183 => 38,  169 => 36,  155 => 34,  146 => 29,  142 => 27,  128 => 25,  125 => 24,  113 => 23,  101 => 22,  94 => 17,  90 => 15,  78 => 14,  75 => 13,  72 => 12,  67 => 10,  64 => 9,  61 => 8,  54 => 5,  47 => 4,  37 => 3,  33 => 1,  31 => 6,  29 => 2,  11 => 1,);
    }
}
