<?php

/* TopxiaAdminBundle:System/Pay:quickly.html.twig */
class __TwigTemplate_8797d8aef3294c3078f234a8efe462f104d8538ead59bb5e176421252714606d extends Twig_Template
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
  <legend>汇付宝－快捷支付</legend>
  ";
        // line 3
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.quickpay", false)) {
            // line 4
            echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>接口状态</label>
      </div>
      <div class=\"controls col-md-3 radios\">
        ";
            // line 9
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->radios("quickpay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_payment_, "quickpay_enabled", array()));
            echo "
      </div>
      <div class=\"controls col-md-4 radios\">
        <a href=\"http://www.edusoho.com/files/heepay.zip\">下载接口申请说明文档</a>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"quickpay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"quickpay_key\" name=\"quickpay_key\" class=\"form-control\" value=\"";
            // line 21
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "quickpay_key", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"quickpay_key\">Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"quickpay_secret\" name=\"quickpay_secret\" class=\"form-control\" value=\"";
            // line 30
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "quickpay_secret", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"quickpay_aes\">Aes</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"quickpay_aes\" name=\"quickpay_aes\" class=\"form-control\" value=\"";
            // line 39
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "quickpay_aes", array()), "html", null, true);
            echo "\">
      </div>
    </div>
  ";
        } else {
            // line 43
            echo "    <div class=\"alert alert-info text-center\" role=\"alert\">
      因汇付宝公司事务引起网银支付申请暂停，对此造成不便，请您谅解，如有疑问，请联系EduSoho官方
    </div>
  ";
        }
        // line 47
        echo "</fieldset>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Pay:quickly.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 47,  82 => 43,  74 => 39,  61 => 30,  48 => 21,  32 => 9,  25 => 4,  23 => 3,  19 => 1,);
    }
}
