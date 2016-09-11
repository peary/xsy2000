<?php

/* TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig */
class __TwigTemplate_4f548ae29deb8b9c7af51606a4b333b312c71dacf66e97a20999380f0bf3e2c3 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig", 1);
        // line 2
        echo "<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t <h3 class=\"panel-title\">最新购买记录</h3>
\t\t</div>
    ";
        // line 7
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        if ($_orders_) {
            // line 8
            echo "      <table class=\"table table-condensed table-bordered table-striped table-hover\">
  \t    <thead>
  \t      <tr>
  \t        <th width=\"50%\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单名称"), "html", null, true);
            echo "</th>
  \t        <th width=\"10%\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("金额"), "html", null, true);
            echo "</th>
  \t        <th width=\"10%\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买人"), "html", null, true);
            echo "</th>
  \t        <th width=\"20%\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付方式"), "html", null, true);
            echo "</th>
  \t      </tr>
  \t    </thead>
        <tbody>
          ";
            // line 18
            if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_orders_);
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 19
                echo "            <tr>
            \t<td>
  \t\t          ";
                // line 21
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                if (($this->getAttribute($_order_, "targetType", array()) == "course")) {
                    // line 22
                    echo "                  <a href=\"";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_order_, "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title", array()), "html", null, true);
                    echo "</a>
                ";
                } elseif (($this->getAttribute($_order_, "targetType", array()) == "vip")) {
                    // line 24
                    echo "              \t\t<a href=\"";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute($_order_, "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title", array()), "html", null, true);
                    echo "</a>
              \t";
                } else {
                    // line 26
                    echo "  \t            \t";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title", array()), "html", null, true);
                    echo "
              \t";
                }
                // line 28
                echo "            \t</td>
              <td class=\"money-text\">";
                // line 29
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "amount", array()), "html", null, true);
                echo " 元</td>
              <td>
              \t";
                // line 31
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo $_admin_macro_->getuser_link($this->getAttribute($_users_, $this->getAttribute($_order_, "userId", array()), array(), "array"));
                echo "
              </td>
              <td>
              \t<span class=\"text-sm\">";
                // line 34
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($_order_, "payment", array())), "--"), "html", null, true);
                echo "  / ";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_order_, "paidTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</span>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 41
            echo "      <div class=\"empty\">暂无最新购买记录</div>
    ";
        }
        // line 43
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 43,  131 => 41,  126 => 38,  112 => 34,  103 => 31,  97 => 29,  94 => 28,  87 => 26,  77 => 24,  67 => 22,  64 => 21,  60 => 19,  55 => 18,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  31 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
