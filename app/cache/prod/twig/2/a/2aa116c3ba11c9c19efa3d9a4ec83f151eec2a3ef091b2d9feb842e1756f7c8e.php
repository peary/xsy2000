<?php

/* TopxiaAdminBundle:Teacher:tr.html.twig */
class __TwigTemplate_2aa116c3ba11c9c19efa3d9a4ec83f151eec2a3ef091b2d9feb842e1756f7c8e extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Teacher:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
        echo "\">
  <td>
    <strong>";
        // line 4
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $_admin_macro_->getuser_link($_user_);
        echo "</strong>
    ";
        // line 5
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "locked", array())) {
            // line 6
            echo "      <label class=\"label label-danger\">禁</label>
    ";
        }
        // line 8
        echo "  </td>
   ";
        // line 9
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Teacher:tr.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute($_user_, "orgCode", array()))));
        // line 10
        echo "  <td>
    ";
        // line 11
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "promoted", array())) {
            // line 12
            echo "      <span class=\"label label-default\">荐:";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "promotedTime", array()), "Y-m-d"), "html", null, true);
            echo " / 序号:";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "promotedSeq", array()), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 14
            echo "      <span class=\"text-muted\">否</span>
    ";
        }
        // line 16
        echo "  </td>
  <td>
    <span class=\"text-sm\">";
        // line 18
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "loginTime", array())) {
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
        } else {
            echo "--";
        }
        echo "</span>
    <br>
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 20
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "loginIp", array()), "html", null, true);
        echo "</a>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 24
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        ";
        // line 29
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ( !$this->getAttribute($_user_, "promoted", array())) {
            // line 30
            echo "        <li><a class=\"promote-teacher\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_teacher_promote", array("id" => $this->getAttribute($_user_, "id", array()), "type" => "teacherList")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> 推荐老师</a></li>
        ";
        }
        // line 32
        echo "        
        ";
        // line 33
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "promoted", array())) {
            // line 34
            echo "          <li><a class=\"cancel-promote-teacher\" href=\"javascript:\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_teacher_promote_cancel", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">取消推荐教师</a></li>
        ";
        }
        // line 36
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  118 => 34,  115 => 33,  112 => 32,  105 => 30,  102 => 29,  93 => 24,  82 => 20,  71 => 18,  67 => 16,  63 => 14,  53 => 12,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  37 => 6,  34 => 5,  28 => 4,  21 => 2,  19 => 1,);
    }
}
