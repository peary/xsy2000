<?php

/* TopxiaAdminBundle:Order:manage.html.twig */
class __TwigTemplate_64ca8c34adcb5b263234b03bbd57924b2118a59b71f20c2db64a1f87066fa992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 1);
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
        // line 7
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        $context["menu"] = (("admin_" . $_targetType_) . "_order");
        // line 9
        $context["script_controller"] = "manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >创建时间:</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 17
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 19
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
    </div>
    </div>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >筛选条件:</label>
        <select class=\"form-control\" name=\"status\">
          ";
        // line 26
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("orderStatus"), $this->getAttribute($_request_, "get", array(0 => "status"), "method"), "订单状态");
        echo "
        </select>
  
      <select class=\"form-control\" name=\"payment\">
        ";
        // line 30
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("payment"), $this->getAttribute($_request_, "get", array(0 => "payment"), "method"), "支付方式");
        echo "
      </select>
    </div> 
    <div class=\"form-group\" style=\"display:none;\">
      <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\", placeholder=\"付款时间段\">
    </div>


    <div class=\"form-group\">
    <label class=\"ptm\" >关键词:</label>
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 41
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (($_targetType_ == "vip")) {
            // line 42
            echo "          ";
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            $context["options"] = array("sn" => "订单号", "buyer" => "购买者用户名", "title" => ($this->env->getExtension('topxia_web_twig')->getDictText("targetName", $_targetType_) . "名"));
            // line 43
            echo "        ";
        } else {
            // line 44
            echo "          ";
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            $context["options"] = array("sn" => "订单号", "buyer" => "购买者用户名", "targetId" => ($this->env->getExtension('topxia_web_twig')->getDictText("targetName", $_targetType_) . "编号"), "title" => ($this->env->getExtension('topxia_web_twig')->getDictText("targetName", $_targetType_) . "名"));
            // line 45
            echo "        ";
        }
        // line 46
        echo "        ";
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($_options_, $this->getAttribute($_request_, "get", array(0 => "keywordType"), "method"));
        echo "
      </select>

    <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 49
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>
    <a class=\"btn btn-primary btn-export-csv\" 
    href=\"";
        // line 54
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_manage_export_csv", array("targetType" => $_targetType_, "startTime" => $this->getAttribute($_request_, "get", array(0 => "startDateTime"), "method"), "endTime" => $this->getAttribute($_request_, "get", array(0 => "endDateTime"), "method"), "status" => $this->getAttribute($_request_, "get", array(0 => "status"), "method"), "payment" => $this->getAttribute($_request_, "get", array(0 => "payment"), "method"), "keywordType" => $this->getAttribute($_request_, "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute($_request_, "get", array(0 => "keyword"), "method"))), "html", null, true);
        // line 62
        echo "\"
    data-export-count=\"";
        // line 63
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getItemCount", array(), "method"), "html", null, true);
        echo "\"
    data-export-count-format=\"";
        // line 64
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->numberFilter($this->getAttribute($_paginator_, "getItemCount", array(), "method")), "html", null, true);
        echo "\"
    data-export-allow-count=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("magic.export_allow_count"), "html", null, true);
        echo "\"
    data-export-allow-count-format=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->numberFilter($this->env->getExtension('topxia_web_twig')->getSetting("magic.export_allow_count")), "html", null, true);
        echo "\"
    >导出结果</a>
    </div>
  </form>

  <table class=\"table table-striped table-hover\" id=\"order-table\">
    ";
        // line 72
        $this->loadTemplate("TopxiaWebBundle:Order:order-table.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 72)->display(array_merge($context, array("mode" => "admin")));
        // line 73
        echo "  </table>
  <div class=\"paginator\">
    ";
        // line 75
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo " 
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Order:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 75,  151 => 73,  149 => 72,  140 => 66,  136 => 65,  131 => 64,  126 => 63,  123 => 62,  119 => 54,  110 => 49,  101 => 46,  98 => 45,  94 => 44,  91 => 43,  87 => 42,  84 => 41,  69 => 30,  61 => 26,  50 => 19,  44 => 17,  37 => 12,  34 => 11,  30 => 1,  28 => 9,  25 => 7,  11 => 1,);
    }
}
