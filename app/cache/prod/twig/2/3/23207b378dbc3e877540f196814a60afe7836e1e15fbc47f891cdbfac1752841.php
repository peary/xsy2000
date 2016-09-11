<?php

/* TopxiaAdminBundle:Teacher:teacher-promote-tr.html.twig */
class __TwigTemplate_23207b378dbc3e877540f196814a60afe7836e1e15fbc47f891cdbfac1752841 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Teacher:teacher-promote-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"teacher-tr-";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
        echo "\" data-sort=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "promotedSeq", array()), "html", null, true);
        echo "\">
  <td>";
        // line 3
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "promotedSeq", array()), "html", null, true);
        echo "</td>
  <td>
    ";
        // line 5
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $_admin_macro_->getuser_link($_user_);
        echo "
  </td>
  ";
        // line 7
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Teacher:teacher-promote-tr.html.twig", 7)->display(array_merge($context, array("orgCode" => $this->getAttribute($_user_, "orgCode", array()))));
        // line 8
        echo "  <td>
    ";
        // line 9
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "promotedTime", array()), "Y-m-d"), "html", null, true);
        echo "
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 13
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_teacher_promote", array("id" => $this->getAttribute($_user_, "id", array()), "type" => "promoteList")), "html", null, true);
        echo "\">设置序号</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">

        <li><a class=\"cancel-promote-teacher\" href=\"javascript:\" data-url=\"";
        // line 20
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_teacher_promote_cancel", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\">取消推荐教师</a></li>
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:teacher-promote-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  57 => 13,  49 => 9,  46 => 8,  43 => 7,  36 => 5,  30 => 3,  21 => 2,  19 => 1,);
    }
}
