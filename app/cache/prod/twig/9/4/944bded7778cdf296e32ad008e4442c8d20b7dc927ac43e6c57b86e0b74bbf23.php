<?php

/* TopxiaWebBundle:Default:groups.html.twig */
class __TwigTemplate_944bded7778cdf296e32ad008e4442c8d20b7dc927ac43e6c57b86e0b74bbf23 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Default:groups.html.twig", 1);
        // line 2
        echo "<!-- 小组动态 -->
";
        // line 3
        $context["groups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 6));
        // line 4
        $context["reviews"] = $this->env->getExtension('topxia_data_twig')->getData("LatestCourseReviews", array("count" => 4));
        // line 5
        echo "<section class=\"dynamic-section ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "background", array()), "")) : ("")), "html", null, true);
        echo "\">
  <div class=\"container\">
    <div class=\"text-line gray\">
      <h5><span>";
        // line 8
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "title", array()), $this->getAttribute($_config_, "defaultTitle", array()))) : ($this->getAttribute($_config_, "defaultTitle", array()))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 9
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "subTitle", array()), $this->getAttribute($_config_, "defaultSubTitle", array()))) : ($this->getAttribute($_config_, "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"dynamic-section-main row\">
      ";
        // line 12
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (($this->getAttribute($_config_, "select1", array()) == "checked")) {
            // line 13
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-group\">
          <div class=\"panel-heading\">
            <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("group");
            echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot pull-left\"></i>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("热门小组"), "html", null, true);
            echo "</h3>
          </div>
          <div class=\"panel-body row\">
            <div class=\"media-group-list\">
              ";
            // line 21
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_groups_);
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 22
                echo "                <div class=\"media media-group col-md-6 col-sm-4\">
                  <div class=\"media-left\">
                    <a href=\"";
                // line 24
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 25
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                if ($this->getAttribute($_group_, "logo", array())) {
                    // line 26
                    echo "                      <img class=\"avatar-square-md\" src=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($_group_, "logo", array())), "html", null, true);
                    echo "\" alt=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 28
                    echo "                      <img class=\"avatar-square-md\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                    echo "\"  alt=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                    echo "\">
                    ";
                }
                // line 30
                echo "                    </a>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"title\">
                      <a class=\"link-light\" href=\"";
                // line 34
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 35
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title", array()), "html", null, true);
                echo "
                      </a>
                    </div>
                    <div class=\"metas\">
                      <span><i class=\"es-icon es-icon-people\"></i>";
                // line 39
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum", array()), "html", null, true);
                echo "</span>
                      <span><i class=\"es-icon es-icon-textsms\"></i>";
                // line 40
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "threadNum", array()), "html", null, true);
                echo "</span>
                    </div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </div>
          </div>
        </div>
      </div>
      ";
        }
        // line 50
        echo "      ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (($this->getAttribute($_config_, "select2", array()) == "checked")) {
            // line 51
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-article\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新资讯"), "html", null, true);
            echo "
              <a class=\"more\" href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("article_show");
            echo "\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            </h3>
          </div>
          <div class=\"panel-body clearfix\">
            ";
            // line 60
            $context["featuredArticles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("type" => "featured", "count" => 2));
            // line 61
            echo "            ";
            if (isset($context["featuredArticles"])) { $_featuredArticles_ = $context["featuredArticles"]; } else { $_featuredArticles_ = null; }
            if ($_featuredArticles_) {
                // line 62
                echo "            <ul class=\"index-recommend-aricle clearfix\">
              ";
                // line 63
                if (isset($context["featuredArticles"])) { $_featuredArticles_ = $context["featuredArticles"]; } else { $_featuredArticles_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_featuredArticles_);
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 64
                    echo "                <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "index", array()) == 2)) {
                        echo "last";
                    }
                    echo "\">
                  <a href=\"";
                    // line 65
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id", array()))), "html", null, true);
                    echo "\">
                    ";
                    // line 66
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    if ($this->getAttribute($_article_, "thumb", array())) {
                        // line 67
                        echo "                      ";
                        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                        echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath((($this->getAttribute($_article_, "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "thumb", array()), null)) : (null)), ""), "img-responsive", $this->getAttribute($_article_, "title", array()), "lazyload_class.png");
                        echo "
                    ";
                    } else {
                        // line 69
                        echo "                      <img class=\"img-responsive\" src=\"";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/img/article/article_banner_" . $this->getAttribute($_loop_, "index", array())) . ".jpg")), "html", null, true);
                        echo "\">
                    ";
                    }
                    // line 71
                    echo "                    <div class=\"image-overlay\"></div>
                    <div class=\"title\">";
                    // line 72
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title", array()), "html", null, true);
                    echo "</div>
                  </a>
                </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "            </ul>
            ";
            }
            // line 78
            echo "            <ul class=\"index-new-article ";
            if (isset($context["featuredArticles"])) { $_featuredArticles_ = $context["featuredArticles"]; } else { $_featuredArticles_ = null; }
            if ( !((array_key_exists("featuredArticles", $context)) ? (_twig_default_filter($_featuredArticles_, false)) : (false))) {
                echo "full";
            }
            echo "\">
              ";
            // line 79
            $context["articles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("count" => 5));
            // line 80
            echo "              ";
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            if ($_articles_) {
                // line 81
                echo "                ";
                if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_articles_);
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 82
                    echo "                  <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "index", array()) == 5)) {
                        echo "last";
                    }
                    echo " clearfix\"><i class=\"es-icon es-icon-dot color-primary mrs\"></i><a class=\"link-dark\" href=\"";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title", array()), "html", null, true);
                    echo "</a> <span class=\"date\">";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_article_, "createdTime", array())), "html", null, true);
                    echo "</span></li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "              ";
            }
            // line 85
            echo "            </ul>
          </div>
        </div>
      </div>
      ";
        }
        // line 90
        echo "      ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (($this->getAttribute($_config_, "select3", array()) == "checked")) {
            // line 91
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-evaluate\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员评价"), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 99
            if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
            if ($_reviews_) {
                // line 100
                echo "              ";
                if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_reviews_);
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 101
                    echo "              ";
                    if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                    $context["author"] = (($this->getAttribute($_review_, "User", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_review_, "User", array()), null)) : (null));
                    // line 102
                    echo "              ";
                    if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                    $context["course"] = (($this->getAttribute($_review_, "course", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_review_, "course", array()), null)) : (null));
                    // line 103
                    echo "              ";
                    if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($_author_ && $_course_)) {
                        // line 104
                        echo "            <div class=\"media media-dynamic\">
              <div class=\"media-left\">
              ";
                        // line 106
                        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                        echo $_web_macro_->getuser_avatar($_author_, "", "avatar-sm", true);
                        echo "
              </div>
              <div class=\"media-body\">
                <div class=\"title text-sm\">
                  ";
                        // line 110
                        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                        echo $_web_macro_->getuser_link($_author_, "link-light");
                        echo "
                  <span class=\"score\">";
                        // line 111
                        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                        if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                        echo $_web_macro_->getstar($this->getAttribute($_review_, "rating", array()));
                        echo "</span>
                  ";
                        // line 112
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布于"), "html", null, true);
                        echo " <a class=\"link-light\" href=\"";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                        echo "\">《";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_course_, "title", array()), 10);
                        echo "》</a>
                </div>
                <div class=\"content gray-darker\">
                  ";
                        // line 115
                        if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_review_, "content", array()), 30);
                        echo "
                </div>
                <span class=\"date\">";
                        // line 117
                        if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_review_, "createdTime", array())), "html", null, true);
                        echo "</span>
              </div>
            </div>
            ";
                    }
                    // line 121
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "            ";
            } else {
                // line 123
                echo "              <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有评价"), "html", null, true);
                echo "</div>
            ";
            }
            // line 125
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 129
        echo "      ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if (($this->getAttribute($_config_, "select4", array()) == "checked")) {
            // line 130
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-dynamic\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员动态"), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 138
            $context["statuses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestStatuses", array("mode" => "simple", "count" => 4, "private" => 0));
            // line 139
            echo "
            ";
            // line 140
            if (isset($context["statuses"])) { $_statuses_ = $context["statuses"]; } else { $_statuses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_statuses_);
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 141
                echo "              <div class=\"media media-dynamic\">
                <div class=\"media-left\">
                  ";
                // line 143
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $_web_macro_->getuser_avatar($this->getAttribute($_status_, "user", array()), "", "avatar-sm");
                echo "
                </div>
                <div class=\"media-body\">
                  <div class=\"title\">
                    ";
                // line 147
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $_web_macro_->getuser_link($this->getAttribute($_status_, "user", array()));
                echo "
                  </div>
                  <div class=\"content\">
                    ";
                // line 150
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $this->getAttribute($_status_, "message", array());
                echo "
                  </div>
                  <span class=\"date\">";
                // line 152
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_status_, "createdTime", array())), "html", null, true);
                echo "</span>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 160
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 160,  501 => 156,  490 => 152,  484 => 150,  476 => 147,  467 => 143,  463 => 141,  458 => 140,  455 => 139,  453 => 138,  446 => 134,  440 => 130,  436 => 129,  430 => 125,  424 => 123,  421 => 122,  415 => 121,  407 => 117,  401 => 115,  389 => 112,  383 => 111,  377 => 110,  368 => 106,  364 => 104,  359 => 103,  355 => 102,  351 => 101,  345 => 100,  342 => 99,  335 => 95,  329 => 91,  325 => 90,  318 => 85,  315 => 84,  283 => 82,  264 => 81,  260 => 80,  258 => 79,  250 => 78,  246 => 76,  227 => 72,  224 => 71,  217 => 69,  210 => 67,  207 => 66,  202 => 65,  194 => 64,  176 => 63,  173 => 62,  169 => 61,  167 => 60,  160 => 56,  156 => 55,  150 => 51,  146 => 50,  139 => 45,  127 => 40,  122 => 39,  114 => 35,  109 => 34,  103 => 30,  94 => 28,  84 => 26,  81 => 25,  76 => 24,  72 => 22,  67 => 21,  60 => 17,  56 => 16,  51 => 13,  48 => 12,  41 => 9,  36 => 8,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
