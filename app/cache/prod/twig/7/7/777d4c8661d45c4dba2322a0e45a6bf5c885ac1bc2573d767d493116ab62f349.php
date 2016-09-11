<?php

/* TopxiaAdminBundle:Widget:tooltip-widget.html.twig */
class __TwigTemplate_777d4c8661d45c4dba2322a0e45a6bf5c885ac1bc2573d767d493116ab62f349 extends Twig_Template
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
        echo "<div class=\"js-tooltip-twig-widget pull-right mll mts\">
  <span class=\"glyphicon ";
        // line 2
        if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($_icon_, "glyphicon-question-sign")) : ("glyphicon-question-sign")), "html", null, true);
        echo " text-muted js-twig-widget-tips\"
        data-toggle=\"tooltip\" data-placement=\"";
        // line 3
        if (isset($context["placement"])) { $_placement_ = $context["placement"]; } else { $_placement_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("placement", $context)) ? (_twig_default_filter($_placement_, "bottom")) : ("bottom")), "html", null, true);
        echo "\" href=\"javascript:;\" title=\"\"
        data-original-title=\"\"></span>
  <div class=\"js-twig-widget-html\" style=\"display:none;\">
    ";
        // line 6
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo ((array_key_exists("content", $context)) ? (_twig_default_filter($_content_, "")) : (""));
        echo "
  </div>
</div>

";
        // line 10
        $this->env->getExtension('topxia_web_twig')->loadScript("widget/tooltip-widget");
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Widget:tooltip-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  34 => 6,  27 => 3,  22 => 2,  19 => 1,);
    }
}
