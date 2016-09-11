<?php

/* TopxiaWebBundle:CourseManage:price.html.twig */
class __TwigTemplate_37c0dcd9a54fa122c9f6862d9c8f1bb24442bbf53fd1bbc2d9efcf48a661c7a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:price.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "price";
        // line 6
        $context["script_controller"] = "course-manage/price";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格设置"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    ";
        // line 12
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

    ";
        // line 14
        $context["currency"] = ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 15
        echo "    ";
        $context["coinRate"] = $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate", 1);
        // line 16
        echo "
    ";
        // line 17
        if (isset($context["canModifyPrice"])) { $_canModifyPrice_ = $context["canModifyPrice"]; } else { $_canModifyPrice_ = null; }
        if ($_canModifyPrice_) {
            // line 18
            echo "      <form class=\"form-horizontal\" id=\"price-form\" method=\"post\" action=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\" data-cashrate=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate", 1), "html", null, true);
            echo "\">
        ";
            // line 19
            if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
            if (($_currency_ == "coin")) {
                // line 20
                echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" name=\"price\" class=\"form-control course-current-price\" value=\"";
                // line 23
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
                echo "\">
              ";
                // line 24
                if (isset($context["discount"])) { $_discount_ = $context["discount"]; } else { $_discount_ = null; }
                if ($_discount_) {
                    // line 25
                    echo "                <div class=\"alert alert-warning\">
                  <small>当前课程正处于「";
                    // line 26
                    if (isset($context["discount"])) { $_discount_ = $context["discount"]; } else { $_discount_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_discount_, "name", array()), "html", null, true);
                    echo "」打折活动中。
                  折扣： <strong>";
                    // line 27
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "discount", array()), "html", null, true);
                    echo " 折</strong>，
                  折后价：<strong> <span class=\"course-discount-price\" data-discount=\"";
                    // line 28
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "discount", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, ($this->getAttribute($_course_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "</strong>。</small>
                </div>
              ";
                }
                // line 31
                echo "            </div>
          </div>
        ";
            } else {
                // line 34
                echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" name=\"price\" class=\"form-control course-current-price\" value=\"";
                // line 37
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "originPrice", array()), "html", null, true);
                echo "\">
              <div class=\"help-block\">
              </div>
              ";
                // line 40
                if (isset($context["discount"])) { $_discount_ = $context["discount"]; } else { $_discount_ = null; }
                if ($_discount_) {
                    // line 41
                    echo "                <div class=\"alert alert-warning\">
                  当前课程正处于「";
                    // line 42
                    if (isset($context["discount"])) { $_discount_ = $context["discount"]; } else { $_discount_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_discount_, "name", array()), "html", null, true);
                    echo "」打折活动中。<br>
                  折扣： <strong>";
                    // line 43
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "discount", array()), "html", null, true);
                    echo " 折</strong>，
                  折后价：<strong><span class=\"course-discount-price\" data-discount=\"";
                    // line 44
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "discount", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
                    echo "</span> 元</strong>。
                </div>
              ";
                }
                // line 47
                echo "            </div>
          </div>
        ";
            }
            // line 50
            echo "
        ";
            // line 51
            if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Vip") && $this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled"))) {
                // line 52
                echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员课程设置"), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls\">
              <select name=\"vipLevelId\" class=\"form-control width-input width-input-large\">
                ";
                // line 56
                if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo $this->env->getExtension('topxia_html_twig')->selectOptions($_levels_, $this->getAttribute($_course_, "vipLevelId", array()), $this->env->getExtension('translator')->trans("无"));
                echo "
              </select>
              <div class=\"help-block\">";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置会员课程后，该会员及更高等级会员，可免费学习。"), "html", null, true);
                echo "</div>
            </div>
          </div>
        ";
            }
            // line 62
            echo "
        ";
            // line 63
            if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud")) {
                // line 64
                echo "        <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启视频试看"), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls radios\">
              ";
                // line 67
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo $this->env->getExtension('topxia_html_twig')->radios("tryLookable", array(1 => $this->env->getExtension('translator')->trans("是"), 0 => $this->env->getExtension('translator')->trans("否")), (($this->getAttribute($_course_, "tryLookable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "tryLookable", array()), 0)) : (0)));
                echo "
              <div class=\"help-block\">";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频试看功能仅云视频支持"), "html", null, true);
                echo "</div>
            </div>
        </div>

        <div class=\"form-group ";
                // line 72
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (((($this->getAttribute($_course_, "tryLookable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "tryLookable", array()), 0)) : (0)) != 1)) {
                    echo "hide";
                }
                echo "\" id = \"tryLookTimeGroup\">
            <label class=\"col-md-2 control-label\">";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试看时长"), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls\">
               <select name=\"tryLookTime\" class='form-control width-input width-input-large'>
                ";
                // line 76
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["minute"]) {
                    // line 77
                    echo "                  <option value=\"";
                    if (isset($context["minute"])) { $_minute_ = $context["minute"]; } else { $_minute_ = null; }
                    echo twig_escape_filter($this->env, $_minute_, "html", null, true);
                    echo "\" ";
                    if (isset($context["minute"])) { $_minute_ = $context["minute"]; } else { $_minute_ = null; }
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($_minute_ == $this->getAttribute($_course_, "tryLookTime", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    if (isset($context["minute"])) { $_minute_ = $context["minute"]; } else { $_minute_ = null; }
                    echo twig_escape_filter($this->env, $_minute_, "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分钟"), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['minute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "               </select>
              <div class=\"help-block\"></div>
            </div>
        </div>
        ";
            }
            // line 84
            echo "
        <div class=\"form-group\">
          <div class=\"col-md-offset-2 col-md-8 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"price-save-btn\" type=\"submit\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
          </div>
        </div>

      </form>
    ";
        } else {
            // line 94
            echo "      <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("抱歉，您无权设置课程价格，如有需要请联系网站管理员！"), "html", null, true);
            echo "</div>
    ";
        }
        // line 96
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 96,  289 => 94,  280 => 88,  276 => 87,  271 => 84,  264 => 79,  244 => 77,  240 => 76,  234 => 73,  227 => 72,  220 => 68,  215 => 67,  210 => 65,  207 => 64,  205 => 63,  202 => 62,  195 => 58,  188 => 56,  182 => 53,  179 => 52,  177 => 51,  174 => 50,  169 => 47,  159 => 44,  154 => 43,  149 => 42,  146 => 41,  143 => 40,  136 => 37,  131 => 35,  128 => 34,  123 => 31,  111 => 28,  106 => 27,  101 => 26,  98 => 25,  95 => 24,  90 => 23,  85 => 21,  82 => 20,  79 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  54 => 12,  49 => 10,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
