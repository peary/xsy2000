<?php

/* TopxiaWebBundle:Content:page-show.html.twig */
class __TwigTemplate_ff6c078525fe4802c93edafe8466533f1d37f58b4d4f7f3fa1ecd60946c656a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Content:page-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        $context["siteNav"] = ("page/" . (($this->getAttribute($_content_, "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_content_, "alias", array()), $this->getAttribute($_content_, "id", array()))) : ($this->getAttribute($_content_, "id", array()))));
        // line 9
        $context["bodyClass"] = "custompage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "title", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_content_, "body", array()), 100);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"es-section\">

  <div class=\"section-header\"><h1>";
        // line 13
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "title", array()), "html", null, true);
        echo "</h1></div>

  ";
        // line 15
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if ($this->getAttribute($_content_, "body", array())) {
            // line 16
            echo "  \t";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo $this->getAttribute($_content_, "body", array());
            echo "
  ";
        } else {
            // line 18
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前页面尚未编辑内容，请在管理后台编辑。"), "html", null, true);
            echo "</div>
  ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:page-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  85 => 18,  78 => 16,  75 => 15,  69 => 13,  65 => 11,  62 => 10,  55 => 5,  46 => 4,  37 => 3,  33 => 1,  31 => 9,  28 => 7,  11 => 1,);
    }
}
