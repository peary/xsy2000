<?php

/* TopxiaAdminBundle:Default:cloud-notice.html.twig */
class __TwigTemplate_031005aa2cef849ea80dfa5cf1114114aeb4c49a7e7e18c70c271a354c04b72d extends Twig_Template
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
        echo "
";
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:cloud-notice.html.twig", 2);
        // line 3
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 4
            echo "  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  <div class=\"row form-group\">
    <div class=\"help-block\">
      <p style = \"text-align: left;font-size:18px\">
        &nbsp;&nbsp;欢迎使用，试用将于 
        <span style=\"color:#fed032;\"> 
          ";
            // line 13
            if (isset($context["trialTime"])) { $_trialTime_ = $context["trialTime"]; } else { $_trialTime_ = null; }
            if ($this->getAttribute($_trialTime_, "endTime", array(), "any", true, true)) {
                // line 14
                echo "            ";
                if (isset($context["trialTime"])) { $_trialTime_ = $context["trialTime"]; } else { $_trialTime_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_trialTime_, "endTime", array()), "Y年m月d日"), "html", null, true);
                echo " 
          ";
            } else {
                // line 15
                echo " 
            未知时间
          ";
            }
            // line 18
            echo "        </span> 
        到期,剩余 
        <span style=\"color:#fed032;\">
          ";
            // line 21
            if (isset($context["trialTime"])) { $_trialTime_ = $context["trialTime"]; } else { $_trialTime_ = null; }
            if ($this->getAttribute($_trialTime_, "remainDays", array(), "any", true, true)) {
                echo " ";
                if (isset($context["trialTime"])) { $_trialTime_ = $context["trialTime"]; } else { $_trialTime_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_trialTime_, "remainDays", array()), "html", null, true);
                echo " ";
            } else {
                echo "未知";
            }
            // line 22
            echo "        </span> 天。
      </p>
      <p style = \"text-align: left;font-size:18px\">
        &nbsp; 您可以联系销售人员购买授权版本，或者延长试用期限。电话：0571-86819929 或 
        <span>
          <a id=\"BizQQWPA\" href=\"javascript:\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\" style='text-decoration:none;'>QQ：800023860 </a>。
        </span>
      </p>
    </div>
  </div>

  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
";
        } else {
            // line 37
            echo "  ";
            if (isset($context["notices"])) { $_notices_ = $context["notices"]; } else { $_notices_ = null; }
            if (((array_key_exists("notices", $context)) ? (_twig_default_filter($_notices_, false)) : (false))) {
                // line 38
                echo "    <div class=\"col-md-12\">
      <div class=\"main-system-alert\">
        <h2> 站长公告</h2>
          <ul class=\"alert-list\">
          ";
                // line 42
                if (isset($context["notices"])) { $_notices_ = $context["notices"]; } else { $_notices_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_notices_);
                foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                    // line 43
                    echo "            <li class=\"glyphicon glyphicon-bell\" style=\"color:#fed032;font-size:16px;\"><a href=\"";
                    if (isset($context["notice"])) { $_notice_ = $context["notice"]; } else { $_notice_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_notice_, "detailUrl", array()), "html", null, true);
                    echo "\" style=\"margin-left:22px;\" target=\"_blank\">";
                    if (isset($context["notice"])) { $_notice_ = $context["notice"]; } else { $_notice_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_notice_, "content", array()), "html", null, true);
                    echo "<span>";
                    if (isset($context["notice"])) { $_notice_ = $context["notice"]; } else { $_notice_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_notice_, "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</span></a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </ul>
      </div>
    </div>
  ";
            }
        }
        // line 50
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  115 => 45,  99 => 43,  94 => 42,  88 => 38,  84 => 37,  67 => 22,  57 => 21,  52 => 18,  47 => 15,  40 => 14,  37 => 13,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
