<?php

/* ClassroomBundle:ClassroomManage:set-price.html.twig */
class __TwigTemplate_772f0bb7f850a156c9a7d8450f5cf55289077a86ec6e1fbe39c2af94e499e710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:set-price.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["side_nav"] = "price";
        // line 4
        $context["script_controller"] = "classroombundle/controller/classroom/set-price";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "基本信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">基本信息</div>
  <div class=\"panel-body\">
  ";
        // line 12
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
  <form class=\"form-horizontal\" method=\"post\" id=\"classroom-set-form\" novalidate>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"price\">价格(元)</label>
        </div>
        <div class=\"controls col-md-8\">
          <input name=\"price\" type=\"text\"  id=\"price\" class=\"form-control\" value=\"";
        // line 20
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "price", array()), "html", null, true);
        echo "\"/>
          <div class=\"help-block\">当前共有 ";
        // line 21
        if (isset($context["courseNum"])) { $_courseNum_ = $context["courseNum"]; } else { $_courseNum_ = null; }
        echo twig_escape_filter($this->env, $_courseNum_, "html", null, true);
        echo " 个课程，原价共计 ";
        if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
        echo twig_escape_filter($this->env, $_price_, "html", null, true);
        echo " 元。</div>
        </div>
      ";
        // line 23
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 24
            echo "        <div class=\"controls col-md-4 col-md-offset-2\">
          <div class=\"help-block\" id=\"coinPrice\" data-rate=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate"), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "\">相当于";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($_classroom_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 28
        echo "      </div>

      ";
        // line 30
        if ($this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled")) {
            // line 31
            echo "
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"price\">会员免费学</label>
        </div>
        <div class=\"col-md-8 controls\">
          <select name=\"vipLevelId\" class=\"form-control width-input width-input-large\">
            ";
            // line 38
            if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($_levels_, (($this->getAttribute($_classroom_, "vipLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_classroom_, "vipLevelId", array()), 0)) : (0)), "不支持");
            echo "
          </select>
        </div>
      </div>
      ";
        }
        // line 43
        echo "
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\" id=\"classroom-save\">提交</button>  
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:set-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 51,  117 => 43,  107 => 38,  98 => 31,  96 => 30,  92 => 28,  80 => 25,  77 => 24,  75 => 23,  66 => 21,  61 => 20,  49 => 12,  44 => 9,  41 => 8,  34 => 6,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
