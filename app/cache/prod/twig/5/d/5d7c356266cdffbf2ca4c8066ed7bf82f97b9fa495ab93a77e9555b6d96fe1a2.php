<?php

/* TopxiaWebBundle:Group:sidebar.html.twig */
class __TwigTemplate_5d7c356266cdffbf2ca4c8066ed7bf82f97b9fa495ab93a77e9555b6d96fe1a2 extends Twig_Template
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
        echo "<div class=\"col-md-3\">
  ";
        // line 2
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 3
            echo "    <div class=\"mbm\">
    <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("group_add");
            echo "\" class=\"btn btn-success btn-xlg btn-block\" role=\"button\"><i class=\"es-icon es-icon-addcircle mrs text-xlg\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建小组"), "html", null, true);
            echo "</a>
    </div>
  ";
        }
        // line 7
        echo "  <form class=\"mbl\" action=\"";
        echo $this->env->getExtension('routing')->getPath("group_search_group");
        echo "\" method=\"get\">
    <div class=\"search-with-btn\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组搜索"), "html", null, true);
        echo "\" name=\"keyWord\" value=\"";
        if (isset($context["keyWord"])) { $_keyWord_ = $context["keyWord"]; } else { $_keyWord_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("keyWord", $context)) ? (_twig_default_filter($_keyWord_, "")) : ("")), "html", null, true);
        echo "\">
      <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
    </div>
  </form>
  ";
        // line 14
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "id", array())) {
            // line 15
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div class=\"media\">
          <div class=\"media-left prl\">
            ";
            // line 19
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $_user_, 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
            echo "
          </div>
          <div class=\"media-body\">
            <p>";
            // line 22
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_user_, 1 => ""), "method"), "html", null, true);
            echo "</p>
            <div class=\"metas\">
              <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("group_member_center");
            echo "\" class=\"btn btn-default btn-sm\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的小组"), "html", null, true);
            echo "</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if (isset($context["myJoinGroup"])) { $_myJoinGroup_ = $context["myJoinGroup"]; } else { $_myJoinGroup_ = null; }
        if ($_myJoinGroup_) {
            // line 33
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的小组"), "html", null, true);
            echo "</h3>
        ";
            // line 36
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "id", array())) {
                // line 37
                echo "          <a href=\"";
                echo $this->env->getExtension('routing')->getPath("group_member_join", array("type" => "myGroup"));
                echo "\" class=\"more\">
          <i class=\"es-icon es-icon-morehoriz\"></i></a>
        ";
            }
            // line 40
            echo "      </div>
      <div class=\"panel-body\">
        <div class=\"media-group-list\">
          ";
            // line 43
            if (isset($context["myJoinGroup"])) { $_myJoinGroup_ = $context["myJoinGroup"]; } else { $_myJoinGroup_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_myJoinGroup_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 44
                echo "            ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "index", array()) <= 6)) {
                    // line 45
                    echo "            <div class=\"media media-group\">
              <div class=\"media-left\">
                <a href=\"";
                    // line 47
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                    echo "\">
                  <img src=\"";
                    // line 48
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
                    // line 53
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_group_, "title", array()), 9);
                    echo "</a>
                </div>
                <div class=\"metas\">
                  <span><i class=\"es-icon es-icon-people\"></i>";
                    // line 56
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum", array()), "html", null, true);
                    echo "</span>
                  <span><i class=\"es-icon es-icon-textsms\"></i>";
                    // line 57
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "threadNum", array()), "html", null, true);
                    echo "</span>
                </div>
              </div>
            </div>
            ";
                }
                // line 62
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 67
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Group:new-group-list.html.twig", "TopxiaWebBundle:Group:sidebar.html.twig", 67)->display($context);
        // line 68
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 68,  213 => 67,  207 => 63,  193 => 62,  184 => 57,  179 => 56,  166 => 53,  154 => 48,  146 => 47,  142 => 45,  138 => 44,  120 => 43,  115 => 40,  108 => 37,  105 => 36,  101 => 35,  97 => 33,  94 => 32,  91 => 31,  79 => 24,  72 => 22,  64 => 19,  58 => 15,  55 => 14,  45 => 10,  41 => 9,  35 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
