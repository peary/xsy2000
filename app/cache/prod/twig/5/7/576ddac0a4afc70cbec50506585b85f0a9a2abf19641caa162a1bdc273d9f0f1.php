<?php

/* TopxiaAdminBundle:System/Pay:llpay.html.twig */
class __TwigTemplate_576ddac0a4afc70cbec50506585b85f0a9a2abf19641caa162a1bdc273d9f0f1 extends Twig_Template
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
        echo "<fieldset>
  <legend>连连支付</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      ";
        // line 8
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("llpay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_payment_, "llpay_enabled", array()));
        echo "
    </div>
     <div class=\"controls col-md-4 radios\">
        <a href=\"http://www.edusoho.com/files/lianlianpay.zip\">下载接口申请说明文档</a>
      </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"llpay_key\">商户账号</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"llpay_key\" name=\"llpay_key\" class=\"form-control\" value=\"";
        // line 20
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "llpay_key", array()), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"llpay_secret\">商户平台Key</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"llpay_secret\" name=\"llpay_secret\" class=\"form-control\" value=\"";
        // line 28
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "llpay_secret", array()), "html", null, true);
        echo "\">
    </div>
  </div>
</fieldset>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Pay:llpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 28,  44 => 20,  28 => 8,  19 => 1,);
    }
}
