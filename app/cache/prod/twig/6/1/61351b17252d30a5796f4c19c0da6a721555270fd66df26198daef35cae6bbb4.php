<?php

/* TopxiaAdminBundle:System:payment.html.twig */
class __TwigTemplate_61351b17252d30a5796f4c19c0da6a721555270fd66df26198daef35cae6bbb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "system/payment";
        // line 5
        $context["menu"] = "admin_payment";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >支付功能</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 17
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_payment_, "enabled", array()));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"disabled_message\">支付关闭时的提示信息</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">";
        // line 26
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "disabled_message", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  ";
        // line 30
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:alipay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 30)->display($context);
        // line 31
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:wxpay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 31)->display($context);
        // line 32
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:heepay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 32)->display($context);
        // line 33
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:quickly.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 33)->display($context);
        // line 34
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:llpay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 34)->display($context);
        // line 35
        echo "
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  86 => 35,  83 => 34,  80 => 33,  77 => 32,  74 => 31,  72 => 30,  64 => 26,  51 => 17,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
