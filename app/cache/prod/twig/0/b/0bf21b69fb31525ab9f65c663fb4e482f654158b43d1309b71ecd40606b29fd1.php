<?php

/* TopxiaWebBundle::bootstrap-modal-layout.html.twig */
class __TwigTemplate_0bf21b69fb31525ab9f65c663fb4e482f654158b43d1309b71ecd40606b29fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::bootstrap-modal-layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaWebBundle::bootstrap-modal-layout.html.twig", 2);
        // line 3
        echo "
<div class=\"modal-dialog ";
        // line 4
        if (isset($context["modal_class"])) { $_modal_class_ = $context["modal_class"]; } else { $_modal_class_ = null; }
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter($_modal_class_, "")) : (""))) {
            echo " ";
            if (isset($context["modal_class"])) { $_modal_class_ = $context["modal_class"]; } else { $_modal_class_ = null; }
            echo twig_escape_filter($this->env, $_modal_class_, "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 11
        if (isset($context["hide_footer"])) { $_hide_footer_ = $context["hide_footer"]; } else { $_hide_footer_ = null; }
        if ( !((array_key_exists("hide_footer", $context)) ? (_twig_default_filter($_hide_footer_, false)) : (false))) {
            // line 12
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 14
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 15
        echo "  </div>
</div>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  79 => 12,  74 => 10,  69 => 8,  63 => 15,  60 => 14,  54 => 12,  51 => 11,  47 => 10,  42 => 8,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }
}
