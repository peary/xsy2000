<?php

/* TopxiaWebBundle:Order:order-table.html.twig */
class __TwigTemplate_81d73883ebfcd9fe9343a5395fde5e015f346cacc55f476a9fce69dfe76acfc6 extends Twig_Template
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
        // line 7
        echo "
";
        // line 8
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Order:order-table.html.twig", 8);
        // line 9
        echo "
";
        // line 10
        if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
        $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter($_mode_, array(0 => "my"))) : (array(0 => "my")));
        // line 11
        echo "  <thead>
    <tr>
      <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</th>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建时间"), "html", null, true);
        echo "</th>
      <th>状态</th>
      <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实付"), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
        echo ")</th>
      ";
        // line 17
        if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
        if (twig_in_filter($_mode_, array(0 => "course", 1 => "admin"))) {
            // line 18
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买者"), "html", null, true);
            echo "</th>
      ";
        }
        // line 20
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付方式"), "html", null, true);
        echo "</th>
      <th style=\"min-width:100px\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 25
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_orders_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 26
            echo "      ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            $context["buyer"] = (($this->getAttribute($_users_, $this->getAttribute($_order_, "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_order_, "userId", array()), array(), "array"), null)) : (null));
            // line 27
            echo "        <tr id=\"order-table-";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id", array()), "html", null, true);
            echo "\" style=\"word-break: break-all;word-wrap: break-word;\">
          <td>
            ";
            // line 29
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            if (($this->getAttribute($_order_, "targetType", array()) == "course")) {
                // line 30
                echo "              <a href=\"";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_order_, "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute($_order_, "targetType", array()) == "vip")) {
                // line 32
                echo "              <a href=\"";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute($_order_, "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute($_order_, "targetType", array()) == "classroom")) {
                // line 34
                echo "              <a href=\"";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_order_, "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } else {
                // line 36
                echo "              <strong>";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title", array()), "html", null, true);
                echo "</strong>
            ";
            }
            // line 38
            echo "            <br>
            <span class=\"text-muted text-sm\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单号："), "html", null, true);
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "sn", array()), "html", null, true);
            echo "</span>
          </td>
          <td><span class=\"text-muted text-sm\">";
            // line 41
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_order_, "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span></td>
          <td>";
            // line 42
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->getDictText("orderStatus:html", $this->getAttribute($_order_, "status", array()));
            echo "</td>
          <td><span class=\"money-text\">";
            // line 43
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "amount", array()), "html", null, true);
            echo "</span></td>
          ";
            // line 44
            if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
            if (twig_in_filter($_mode_, array(0 => "admin", 1 => "course"))) {
                // line 45
                echo "            <td>
              ";
                // line 46
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
                echo $_web_macro_->getuser_link($_buyer_);
                echo "
            </td>
          ";
            }
            // line 49
            echo "          <td>
            ";
            // line 50
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            if (($this->getAttribute($_order_, "paidTime", array()) > 0)) {
                // line 51
                echo "              ";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($_order_, "payment", array())), "--"), "html", null, true);
                echo "
              <br>
              <span class=\"text-muted text-sm\">";
                // line 53
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_order_, "paidTime", array()), "Y-n-d H:i:s"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 55
                echo "              --
            ";
            }
            // line 57
            echo "          </td>
          <td>
            ";
            // line 59
            if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
            if (("admin" == $_mode_)) {
                // line 60
                echo "                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_detail", array("id" => $this->getAttribute($_order_, "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
                echo "</a>
              ";
            }
            // line 62
            echo "            ";
            if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
            if (("course" == $_mode_)) {
                // line 63
                echo "            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_order_detail", array("id" => $this->getAttribute($_order_, "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
                echo "</a>
            ";
            }
            // line 65
            echo "
            ";
            // line 66
            if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
            if (("my" == $_mode_)) {
                // line 67
                echo "              <div class=\"btn-group\">
                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 68
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_user_order_detail", array("id" => $this->getAttribute($_order_, "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
                echo "</a>
                ";
                // line 69
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                if ((($this->getAttribute($_order_, "status", array()) == "refunding") || ($this->getAttribute($_order_, "status", array()) == "created"))) {
                    // line 70
                    echo "                  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu pull-right ";
                    // line 73
                    echo "\" style=\"min-width: 120px;\" >

                  ";
                    // line 76
                    echo "                    ";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    if (($this->getAttribute($_order_, "status", array()) == "refunding")) {
                        // line 77
                        echo "                      <li><a href=\"javascript:;\" class=\"cancel-refund\" data-url=\"";
                        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel_refund", array("id" => $this->getAttribute($_order_, "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消退款"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 79
                    echo "                    ";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    if (($this->getAttribute($_order_, "status", array()) == "created")) {
                        // line 80
                        echo "
                      <li>
                        <a href=\"";
                        // line 82
                        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pay_center_show", array("sn" => $this->getAttribute($_order_, "sn", array()), "targetType" => $this->getAttribute($_order_, "targetType", array()))), "html", null, true);
                        echo "\"  style=\"display:block\" >";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("去支付"), "html", null, true);
                        echo "</a>
                      </li>
                      <li><a href=\"javascript:;\" class=\" cancel\" style=\"display:block\" data-url=\"";
                        // line 84
                        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel", array("id" => $this->getAttribute($_order_, "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消订单"), "html", null, true);
                        echo "</a></li>

                    ";
                    }
                    // line 87
                    echo "                   ";
                    // line 88
                    echo "                  </ul>
                ";
                }
                // line 90
                echo "              </div>
            ";
            }
            // line 92
            echo "          </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "      <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无订单记录"), "html", null, true);
            echo "</div></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "  </tbody>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 97,  302 => 95,  295 => 92,  291 => 90,  287 => 88,  285 => 87,  276 => 84,  268 => 82,  264 => 80,  260 => 79,  251 => 77,  247 => 76,  243 => 73,  238 => 70,  235 => 69,  228 => 68,  225 => 67,  222 => 66,  219 => 65,  210 => 63,  206 => 62,  197 => 60,  194 => 59,  190 => 57,  186 => 55,  180 => 53,  173 => 51,  170 => 50,  167 => 49,  159 => 46,  156 => 45,  153 => 44,  148 => 43,  143 => 42,  138 => 41,  131 => 39,  128 => 38,  121 => 36,  111 => 34,  101 => 32,  91 => 30,  88 => 29,  81 => 27,  76 => 26,  70 => 25,  63 => 21,  58 => 20,  52 => 18,  49 => 17,  43 => 16,  38 => 14,  34 => 13,  30 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
