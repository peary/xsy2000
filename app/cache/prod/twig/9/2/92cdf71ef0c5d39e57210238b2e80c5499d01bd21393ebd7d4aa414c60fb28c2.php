<?php

/* TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig */
class __TwigTemplate_92cdf71ef0c5d39e57210238b2e80c5499d01bd21393ebd7d4aa414c60fb28c2 extends Twig_Template
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
        $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
        // line 2
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        if ( !twig_test_empty($this->getAttribute($_consult_, "webchatURI", array()))) {
            // line 3
            echo "  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
