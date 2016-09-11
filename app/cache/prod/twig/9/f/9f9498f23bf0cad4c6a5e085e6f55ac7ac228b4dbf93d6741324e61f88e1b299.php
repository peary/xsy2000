<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_9f9498f23bf0cad4c6a5e085e6f55ac7ac228b4dbf93d6741324e61f88e1b299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle:Exception:layout.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle:Exception:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "出错啦 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container\">
    <div class=\"panel panel-default error-panel\">
      <div class=\"panel-heading\">
        <span class=\"error-title\">";
        // line 8
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo "</span>";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <p>如果你看到该提示，说明服务器出现了问题。</p>
          <p>刚从被窝中努力爬起来的程序员哥哥正拼命修复中。</p>
          <p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("homepage", array("ref" => 500));
        echo "\">返回首页 ></a></p>
          <span class=\"error-500-icon hidden-xs\"></span>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  44 => 8,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }
}
