<?php

/* TopxiaAdminBundle:Coin:cash-bill.html.twig */
class __TwigTemplate_158c0344c39a74937a3bb88fa0a978b2cb9619a67dcc086f0c58f058d568b61f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:cash-bill.html.twig", 1);
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
        $context["menu"] = "admin_cash_bill";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
    <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\">
          ";
        // line 10
        $context["options"] = array("" => "全部记录", "oneWeek" => "最近一周", "twoWeeks" => "最近两周", "oneMonth" => "最近一个月", "twoMonths" => "最近两个月", "threeMonths" => "最近三个月");
        // line 11
        echo "          ";
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($_options_, $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "lastHowManyMonths"), "method"));
        echo "
        </select>
      </div>
    <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" class=\"form-control\" value=\"";
        // line 15
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"用户名\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>
    <a class=\"btn btn-primary\" href=\"";
        // line 19
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["cashType"])) { $_cashType_ = $context["cashType"]; } else { $_cashType_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_bill_export_csv", array("lastHowManyMonths" => $this->getAttribute($this->getAttribute($_app_, "request", array()), "get", array(0 => "lastHowManyMonths"), "method"), "cashType" => $_cashType_, "nickname" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "nickname"), "method"))), "html", null, true);
        // line 23
        echo "\">导出结果</a>

    </form>

    <p class=\"text-muted\">
      <span class=\"mrl\">收入：<strong class=\"inflow-num\">";
        // line 28
        if (isset($context["amountInflow"])) { $_amountInflow_ = $context["amountInflow"]; } else { $_amountInflow_ = null; }
        echo twig_escape_filter($this->env, $_amountInflow_, "html", null, true);
        echo "</strong> 元</span>
      <span class=\"mrl\">支出：<strong class=\"outflow-num\">";
        // line 29
        if (isset($context["amountOutflow"])) { $_amountOutflow_ = $context["amountOutflow"]; } else { $_amountOutflow_ = null; }
        echo twig_escape_filter($this->env, $_amountOutflow_, "html", null, true);
        echo "</strong> 元</span>
    </p>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        ";
        // line 34
        if (isset($context["cashes"])) { $_cashes_ = $context["cashes"]; } else { $_cashes_ = null; }
        if ($_cashes_) {
            // line 35
            echo "        <tr>
          <th><span class=\"text-sm\">流水号</span></th>
          <th><span class=\"text-sm\">名称</span></th>  
          <th><span class=\"text-sm\">用户名</span></th>             
          <th><span class=\"text-sm\">成交时间</span></th>
          <th class=\"text-right\" style=\"padding-right: 60px;\"><span class=\"text-sm\">收支</span></th>
          
          <th><span class=\"text-sm\">支付方式</span></th>
        </tr>
        ";
            // line 44
            if (isset($context["cashes"])) { $_cashes_ = $context["cashes"]; } else { $_cashes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_cashes_);
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 45
                echo "           <tr>
            <td><span class=\"text-sm\">";
                // line 46
                if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_cash_, "sn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\">";
                // line 47
                if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_cash_, "name", array()), "html", null, true);
                echo "</span><br>
                <span class=\"text-muted text-sm\">订单号：";
                // line 48
                if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_cash_, "orderSn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\"><a href=\"";
                // line 49
                if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_cash_, "userId", array()))), "html", null, true);
                echo "\">
            ";
                // line 50
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_users_, $this->getAttribute($_cash_, "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</a></span></td>            
            <td><span class=\"text-sm\">";
                // line 51
                if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_cash_, "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>

            ";
                // line 53
                if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                if (($this->getAttribute($_cash_, "type", array()) == "inflow")) {
                    // line 54
                    echo "            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               ";
                    // line 55
                    if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_cash_, "amount", array()), "html", null, true);
                    echo " 
            </td>
            ";
                }
                // line 58
                echo "            ";
                if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                if (($this->getAttribute($_cash_, "type", array()) == "outflow")) {
                    // line 59
                    echo "            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;";
                    // line 60
                    if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_cash_, "amount", array()), "html", null, true);
                    echo "               
            </td>
            ";
                }
                // line 63
                echo "           
            <td>
              <span class=\"text-sm\">
                ";
                // line 66
                if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                if (($this->getAttribute($_cash_, "type", array()) == "inflow")) {
                    // line 67
                    echo "                  ";
                    if (isset($context["cash"])) { $_cash_ = $context["cash"]; } else { $_cash_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($_cash_, "payment", array()));
                    echo "
                ";
                } else {
                    // line 69
                    echo "                  网校支付
                ";
                }
                // line 71
                echo "              </span>
            </td> 
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        ";
        } else {
            // line 76
            echo "        <div class=\"empty\">暂无记录</div>
        ";
        }
        // line 78
        echo "      </table>
    </div>
 ";
        // line 80
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:cash-bill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 80,  201 => 78,  197 => 76,  194 => 75,  185 => 71,  181 => 69,  174 => 67,  171 => 66,  166 => 63,  159 => 60,  156 => 59,  152 => 58,  145 => 55,  142 => 54,  139 => 53,  133 => 51,  127 => 50,  122 => 49,  117 => 48,  112 => 47,  107 => 46,  104 => 45,  99 => 44,  88 => 35,  85 => 34,  76 => 29,  71 => 28,  64 => 23,  60 => 19,  52 => 15,  42 => 11,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
