<?php

/* TopxiaAdminBundle:Tag:list-tr.html.twig */
class __TwigTemplate_9a0f579a36e9145aeafa36c6cb16370a1f9ba27a7e4dd723f4591008a2e6f633 extends Twig_Template
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
        echo "<tr id=\"tag-tr-";
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "id", array()), "html", null, true);
        echo "\">
  <td>";
        // line 2
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "id", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 3
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 4
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_tag_, "createdTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</td>
  <td>
    <button class=\"btn btn-default btn-sm\" data-url=\"";
        // line 6
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_update", array("id" => $this->getAttribute($_tag_, "id", array()))), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modal\">编辑</button>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  35 => 4,  30 => 3,  25 => 2,  19 => 1,);
    }
}
