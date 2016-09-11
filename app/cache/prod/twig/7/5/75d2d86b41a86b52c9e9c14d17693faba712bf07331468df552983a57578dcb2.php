<?php

/* TopxiaAdminBundle:Tag:tag-modal.html.twig */
class __TwigTemplate_75d2d86b41a86b52c9e9c14d17693faba712bf07331468df552983a57578dcb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Tag:tag-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        $context["tag"] = ((array_key_exists("tag", $context)) ? (_twig_default_filter($_tag_, null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if ($this->getAttribute($_tag_, "id", array())) {
            echo "编辑";
        } else {
            echo "新增";
        }
        echo "标签
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <form class=\"form-horizontal\" id=\"tag-form\" action=\"";
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if ($this->getAttribute($_tag_, "id", array())) {
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_update", array("id" => $this->getAttribute($_tag_, "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_tag_create");
        }
        echo "\" method=\"post\">
    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"tag-name-field\">标签名称</label>
      <div class=\"col-md-6 controls\">
        <input class=\"form-control\" id=\"tag-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 12
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
        echo "\" data-url=\"";
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_checkname", array("exclude" => $this->getAttribute($_tag_, "name", array()))), "html", null, true);
        echo "\">
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
  <script type=\"text/javascript\">app.load('tag/save-modal')</script>
";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "  ";
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if ($this->getAttribute($_tag_, "id", array())) {
            // line 22
            echo "    <button class=\"btn btn-default pull-left delete-tag\" data-url=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_delete", array("id" => $this->getAttribute($_tag_, "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "id", array()), "html", null, true);
            echo "\" data-tag-id=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "id", array()), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> 删除</button>
  ";
        }
        // line 24
        echo "
  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button id=\"tag-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#tag-form\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:tag-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  90 => 22,  86 => 21,  83 => 20,  75 => 15,  65 => 12,  51 => 8,  48 => 7,  37 => 5,  34 => 4,  30 => 1,  27 => 2,  11 => 1,);
    }
}
