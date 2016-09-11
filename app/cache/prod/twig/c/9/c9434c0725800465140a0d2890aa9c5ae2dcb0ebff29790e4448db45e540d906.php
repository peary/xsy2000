<?php

/* TopxiaWebBundle:EsBar:ListContent/practice.html.twig */
class __TwigTemplate_c9434c0725800465140a0d2890aa9c5ae2dcb0ebff29790e4448db45e540d906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/practice.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myPractice' => array($this, 'block_myPractice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的考试/作业"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\" class=\"btn btn-primary ";
        if (isset($context["esBarMenu"])) { $_esBarMenu_ = $context["esBarMenu"]; } else { $_esBarMenu_ = null; }
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter($_esBarMenu_, "")) : ("")) != "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-review\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已提交"), "html", null, true);
        echo "</a>
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esbar_my_practice", array("status" => "finished"));
        echo "\" class=\"btn btn-primary ";
        if (isset($context["esBarMenu"])) { $_esBarMenu_ = $context["esBarMenu"]; } else { $_esBarMenu_ = null; }
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter($_esBarMenu_, "")) : ("")) == "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-finish\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已批阅"), "html", null, true);
        echo "</span></a>
    </div>
  </div>
  <div class=\"bar-homework\">
    ";
        // line 14
        $this->displayBlock('myPractice', $context, $blocks);
        // line 17
        echo "  </div>
";
    }

    // line 14
    public function block_myPractice($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/practice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  79 => 14,  74 => 17,  72 => 14,  58 => 10,  47 => 9,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }
}
