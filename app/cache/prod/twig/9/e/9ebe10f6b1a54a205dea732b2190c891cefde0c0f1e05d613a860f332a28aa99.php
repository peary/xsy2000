<?php

/* TopxiaAdminBundle:Default:user-coins-block.html.twig */
class __TwigTemplate_9ebe10f6b1a54a205dea732b2190c891cefde0c0f1e05d613a860f332a28aa99 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:user-coins-block.html.twig", 1);
        // line 2
        echo "<div class=\"col-md-12\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">

            <a class=\"pull-right\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_coin_user_records");
        echo "\"
            >更多</a>
            <h3 class=\"panel-title\">用户虚拟币记录</h3>
             
        </div>

      ";
        // line 12
        if (isset($context["userIds"])) { $_userIds_ = $context["userIds"]; } else { $_userIds_ = null; }
        if ($_userIds_) {
            // line 13
            echo "        <table class=\"table table-condensed table-bordered table-striped table-hover\">
          <thead>
            <tr>
              <th width=\"40%\">用户名</th>
              <th width=\"10%\">充值虚拟币</th>
              <th width=\"15%\">支出虚拟币</th>
              <th width=\"35%\">当前余额</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 23
            if (isset($context["userIds"])) { $_userIds_ = $context["userIds"]; } else { $_userIds_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_userIds_);
            foreach ($context['_seq'] as $context["_key"] => $context["userId"]) {
                // line 24
                echo "              <tr><td >";
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["userId"])) { $_userId_ = $context["userId"]; } else { $_userId_ = null; }
                echo $_admin_macro_->getuser_link($this->getAttribute($_users_, $_userId_, array(), "array"), "link-muted");
                echo "</td><td style=\"color:#1bb974;\">";
                if (isset($context["userId"])) { $_userId_ = $context["userId"]; } else { $_userId_ = null; }
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getInCash($_userId_, "all"), "0.00"), "html", null, true);
                echo "</td><td style=\"color:#ff7b0e;\">";
                if (isset($context["userId"])) { $_userId_ = $context["userId"]; } else { $_userId_ = null; }
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getOutCash($_userId_, "all"), "0.00"), "html", null, true);
                echo "</td><td style=\"color:blue;\">";
                if (isset($context["userId"])) { $_userId_ = $context["userId"]; } else { $_userId_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getAccount($_userId_), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getAccount($_userId_), "cash", array()), 0)) : (0)), "html", null, true);
                echo "</td></tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "          </tbody>
        </table>
      ";
        } else {
            // line 29
            echo "      <div class=\"empty\">暂无用户虚拟币记录</div>
      ";
        }
        // line 31
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:user-coins-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  82 => 29,  77 => 26,  56 => 24,  51 => 23,  39 => 13,  36 => 12,  27 => 6,  21 => 2,  19 => 1,);
    }
}
