<?php

/* TopxiaAdminBundle:Default:index.html.twig */
class __TwigTemplate_d62af9803e7afb96df78cf5303fb182db9363d320e6855beb513310f0ed946c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "管理后台";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:inspect"));
        echo "
<div class=\"page-header\">
  <h1>管理中心  </h1>
</div>
";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "  
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div id=\"app-upgrade-alert\" class=\"alert alert-info alert-dismissable hide\" data-url=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades_count");
            echo "\" data-upgrade-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
            echo "\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
      </div>
    </div>

";
            // line 20
            if ( !(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
                // line 21
                echo "  <div class=\"col-md-12\">
        ";
                // line 22
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:getCloudNotices"));
                echo "
    </div>
";
            }
            // line 25
            echo " 

 <div class=\"col-md-6\">
  <div class=\"panel panel-default\">
  
    <div class=\"panel-heading clearfix\">
     <span class=\"pull-right\" style=\"display:block\">
         <span id=\"onlineNum\" data-url=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("admin_online_count");
            echo "\">正在载入在线人数...</span>（<span id=\"loginNum\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_login_count");
            echo "\">正在载入登录人数...</span>）
     </span>
     <h3 class=\"panel-title pull-left\" id=\"operation-analysis-title\" data-url=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("admin_operation_analysis");
            echo "\"> 数据统计

     </h3>
    </div>
    <div id=\"operation-analysis-table\" >
      <div class=\"empty\">正在载入数据，请稍等。</div>
    </div>
  </div>
</div>
";
            // line 53
            echo "    ";
            if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), null) != 1)) {
                // line 54
                echo "    <div class=\"col-md-6\">
       <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\" id=\"system-status-title\" data-url=\"";
                // line 57
                echo $this->env->getExtension('routing')->getPath("admin_system_status");
                echo "\">系统状态</h3>
        </div>
        <div id=\"system-status\" >
          <div class=\"empty\">正在载入数据，请稍等。</div>
        </div>
      </div>
    </div>
    ";
            }
            // line 65
            echo "    <div id=\"popular-courses-panel\" class=\"col-md-6\">
       <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <select id=\"popular-courses-type\" class=\"pull-right\" data-url=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("admin_popular_courses");
            echo "\">
              ";
            // line 69
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("dateType"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "dateType"), "method"));
            echo "
          </select>
          <h3 class=\"panel-title\">受欢迎课程</h3>
        </div>
        <div id=\"popular-courses-table\">
        \t<div class=\"empty\">正在载入数据，请稍等。</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    ";
            // line 81
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:userCoinsRecordsBlock"));
            echo "
  </div>

  <div class=\"row\">
    ";
            // line 85
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:unsolvedQuestionsBlock"));
            echo "
  </div>

  <div class=\"row\">
    ";
            // line 89
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:latestPaidOrdersBlock"));
            echo "
  </div>

";
        } else {
            // line 93
            echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <h4>欢迎来到";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
            echo "管理后台</h4>
    </div>
  </div>
";
        }
        // line 99
        echo "
  <input type=\"hidden\" id=\"admin-notice\" value=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("admin_notice_modal");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 100,  185 => 99,  178 => 95,  174 => 93,  167 => 89,  160 => 85,  153 => 81,  137 => 69,  133 => 68,  128 => 65,  117 => 57,  112 => 54,  109 => 53,  97 => 34,  90 => 32,  81 => 25,  75 => 22,  72 => 21,  70 => 20,  60 => 15,  55 => 12,  53 => 11,  46 => 7,  43 => 6,  40 => 5,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
