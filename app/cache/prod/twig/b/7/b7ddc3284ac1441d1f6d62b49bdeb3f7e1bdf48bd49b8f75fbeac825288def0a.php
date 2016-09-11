<?php

/* TopxiaWebBundle:PayCenter:classroom-cancelled.html.twig */
class __TwigTemplate_b7ddc3284ac1441d1f6d62b49bdeb3f7e1bdf48bd49b8f75fbeac825288def0a extends Twig_Template
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
        echo "<a href=\"javascript:;\"  class=\"js-order-cancel btn btn-link\" data-goto=\"";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_order_, "targetId", array()))), "html", null, true);
        echo "\" data-url=\"";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel", array("id" => $this->getAttribute($_order_, "id", array()))), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:classroom-cancelled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
