<?php

/* TopxiaWebBundle:EsBar:LeftList/my-notification.html.twig */
class __TwigTemplate_68ab2cff6307bd251a8461fa4685c204ab94a591d0f7cb0c813865bfa41d2dbe extends Twig_Template
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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($_app_, "user", array()) && $this->getAttribute($this->getAttribute($_app_, "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通知"), "html", null, true);
            echo "\">
    <a href=\"javascript:;\" data-url=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("esbar_my_notify");
            echo "\">
      ";
            // line 4
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "newNotificationNum", array()) > 0)) {
                // line 5
                echo "        <i class=\"es-icon es-icon-notificationson\"></i>
        <span class=\"dot\"></span>
      ";
            } else {
                // line 8
                echo "        <i class=\"es-icon es-icon-notifications\"></i>
      ";
            }
            // line 10
            echo "    </a>
  </li>
";
        } else {
            // line 13
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通知"), "html", null, true);
            echo "\">
    <a href=\"javascript:;\">
      <i class=\"es-icon es-icon-notifications\"></i>
    </a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  43 => 10,  39 => 8,  34 => 5,  31 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
