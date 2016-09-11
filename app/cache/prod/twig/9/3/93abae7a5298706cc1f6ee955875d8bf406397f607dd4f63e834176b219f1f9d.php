<?php

/* TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig */
class __TwigTemplate_93abae7a5298706cc1f6ee955875d8bf406397f607dd4f63e834176b219f1f9d extends Twig_Template
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
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_consult_, "qq", array()), 0, array(), "array"), "name", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_consult_, "qqgroup", array()), 0, array(), "array"), "name", array())))) {
            // line 3
            echo "  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("QQ客服及QQ群"), "html", null, true);
            echo "\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig";
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
