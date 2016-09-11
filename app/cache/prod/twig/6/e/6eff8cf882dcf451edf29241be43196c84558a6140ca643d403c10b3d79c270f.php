<?php

/* TopxiaWebBundle:Default:message.html.twig */
class __TwigTemplate_6eff8cf882dcf451edf29241be43196c84558a6140ca643d403c10b3d79c270f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:message.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["typeTitles"] = array("info" => $this->env->getExtension('translator')->trans("提示信息"), "warning" => $this->env->getExtension('translator')->trans("警告信息"), "error" => $this->env->getExtension('translator')->trans("错误提示"));
        // line 5
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if (isset($context["typeTitles"])) { $_typeTitles_ = $context["typeTitles"]; } else { $_typeTitles_ = null; }
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter($_title_, $this->getAttribute($_typeTitles_, $_type_, array(), "array"))) : ($this->getAttribute($_typeTitles_, $_type_, array(), "array")));
        // line 9
        $context["script_controller"] = "default/message";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_head_scripts($context, array $blocks = array())
    {
        if (isset($context["script"])) { $_script_ = $context["script"]; } else { $_script_ = null; }
        echo ((array_key_exists("script", $context)) ? (_twig_default_filter($_script_, "")) : (""));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"";
        // line 13
        if (isset($context["goto"])) { $_goto_ = $context["goto"]; } else { $_goto_ = null; }
        echo twig_escape_filter($this->env, $_goto_, "html", null, true);
        echo "\" data-duration=";
        if (isset($context["duration"])) { $_duration_ = $context["duration"]; } else { $_duration_ = null; }
        echo twig_escape_filter($this->env, $_duration_, "html", null, true);
        echo ">
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">";
        // line 16
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</h2>
    </div>
    <div class=\"page-message-body\">";
        // line 18
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? (_twig_default_filter($_message_, "")) : ("")), "html", null, true);
        echo "</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  72 => 16,  62 => 13,  59 => 12,  56 => 11,  49 => 8,  40 => 7,  36 => 1,  34 => 9,  29 => 5,  27 => 3,  11 => 1,);
    }
}
