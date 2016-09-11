<?php

/* TopxiaWebBundle:Review:Widget/list.html.twig */
class __TwigTemplate_ae200a67a7f768b2460b85477715eb1a6d87037a81d88096b078aa5614069e11 extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("review/list");
        // line 2
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (isset($context["canReview"])) { $_canReview_ = $context["canReview"]; } else { $_canReview_ = null; }
        if (($_member_ && ((array_key_exists("canReview", $context)) ? (_twig_default_filter($_canReview_, 1)) : (1)))) {
            // line 3
            echo "  <div class=\"clearfix\">
    <button class=\"btn btn-primary btn-sm pull-right js-show-review-form\" ";
            // line 4
            if (isset($context["userReview"])) { $_userReview_ = $context["userReview"]; } else { $_userReview_ = null; }
            if ( !$_userReview_) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新评价"), "html", null, true);
            echo "</button>
  </div>

  <form id=\"review-form\" method=\"post\" action=\"";
            // line 7
            if (isset($context["reviewSaveUrl"])) { $_reviewSaveUrl_ = $context["reviewSaveUrl"]; } else { $_reviewSaveUrl_ = null; }
            echo twig_escape_filter($this->env, $_reviewSaveUrl_, "html", null, true);
            echo "\" ";
            if (isset($context["userReview"])) { $_userReview_ = $context["userReview"]; } else { $_userReview_ = null; }
            if ($_userReview_) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <div class=\"form-group controls\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请打分："), "html", null, true);
            echo " <span data-rating=\"";
            if (isset($context["userReview"])) { $_userReview_ = $context["userReview"]; } else { $_userReview_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_userReview_, "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_userReview_, "rating", array()), 0)) : (0)), "html", null, true);
            echo "\" data-img-path=\"";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_app_, "request", array()), "basePath", array()) . "/assets/img/raty"), "html", null, true);
            echo "\" class=\"rating-btn\"></span>
      <input type=\"hidden\" name=\"rating\" value=\"";
            // line 10
            if (isset($context["userReview"])) { $_userReview_ = $context["userReview"]; } else { $_userReview_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_userReview_, "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_userReview_, "rating", array()), 0)) : (0)), "html", null, true);
            echo "\">
    </div>

    <div class=\"form-group controls\">
      <textarea class=\"form-control\" rows=\"8\" data-display=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价详细内容"), "html", null, true);
            echo "\" name=\"content\">";
            if (isset($context["userReview"])) { $_userReview_ = $context["userReview"]; } else { $_userReview_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_userReview_, "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_userReview_, "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
    </div>

    <div class=\"form-group clearfix\">
      <span class=\"text-success pull-left\" style=\"display: none;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价已保存！"), "html", null, true);
            echo "</span>
      <a href=\"javascript:;\" class=\"btn btn-primary pull-right js-btn-save\" data-loading-text=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存"), "html", null, true);
            echo "...\" autocomplete=\"off\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</a>
      <a href=\"javascript:;\" class=\"btn btn-link pull-right js-hide-review-form\" ";
            // line 20
            if (isset($context["userReview"])) { $_userReview_ = $context["userReview"]; } else { $_userReview_ = null; }
            if ($_userReview_) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
            echo "</a>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
  </form>
";
        }
        // line 26
        echo "
";
        // line 27
        if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_reviews_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            if ((($this->getAttribute($_users_, $this->getAttribute($_review_, "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_review_, "userId", array()), array(), "array"), false)) : (false))) {
                // line 28
                echo "  ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_review_, "userId", array()), array(), "array");
                // line 29
                echo "  <div class=\"js-reviews\">
    <div class=\"media media-evaluate\">
      <div class=\"media-left\">
        ";
                // line 32
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $_user_, 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
      </div>
      <div class=\"media-body\">
        <div class=\"title\">";
                // line 35
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_user_), "method"), "html", null, true);
                echo " ";
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_review_, "createdTime", array()), "Y-m-d"), "html", null, true);
                echo "</div>
        <div class=\"score\">
          ";
                // line 37
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "star", array(0 => $this->getAttribute($_review_, "rating", array())), "method"), "html", null, true);
                echo "
        </div>
        <div class=\"content\">
            <div class=\"short-content\">";
                // line 40
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_review_, "content", array()), 100);
                echo "</div>
            <div class=\"full-content\" style=\"display:none;\">";
                // line 41
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($_review_, "content", array()), "html", null, true));
                echo "</div>
        </div>
        <div class=\"actions\">
          <a href=\"javascript:;\" class=\"show-full-btn\">[";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开全文"), "html", null, true);
                echo "]</a>
          <a href=\"javascript:;\" class=\"show-short-btn\" style=\"display:none;\">[";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起全文"), "html", null, true);
                echo "]</a>
        </div>
      </div>
    </div>
  </div>

";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 52
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无评价"), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        // line 55
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        if (((array_key_exists("paginator", $context)) ? (_twig_default_filter($_paginator_, null)) : (null))) {
            // line 56
            echo "  ";
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Review:Widget/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 56,  194 => 55,  191 => 54,  182 => 52,  169 => 45,  165 => 44,  158 => 41,  153 => 40,  145 => 37,  135 => 35,  127 => 32,  122 => 29,  117 => 28,  108 => 27,  105 => 26,  99 => 23,  88 => 20,  82 => 19,  78 => 18,  68 => 14,  60 => 10,  50 => 9,  39 => 7,  28 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
