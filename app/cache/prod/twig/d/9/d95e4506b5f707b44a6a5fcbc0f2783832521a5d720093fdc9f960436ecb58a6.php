<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-students.html.twig */
class __TwigTemplate_d95e4506b5f707b44a6a5fcbc0f2783832521a5d720093fdc9f960436ecb58a6 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-students.html.twig", 1);
        // line 2
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    ";
        // line 8
        echo "    <h3 class=\"panel-title\">
      <i class=\"es-icon es-icon-personadd\"></i>
      ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新学员"), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 14
        if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
        if ($_students_) {
            // line 15
            echo "      <ul class=\"user-avatar-list clearfix\">
        ";
            // line 16
            if (isset($context["members"])) { $_members_ = $context["members"]; } else { $_members_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_members_);
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 17
                echo "        ";
                if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                $context["student"] = $this->getAttribute($_students_, $this->getAttribute($_member_, "userId", array()), array(), "array");
                // line 18
                echo "          <li>
            ";
                // line 19
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
                echo $_web_macro_->getuser_avatar($_student_, "", "avatar-sm");
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </ul>
    ";
        } else {
            // line 24
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无学员"), "html", null, true);
            echo "</div>
    ";
        }
        // line 26
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  71 => 24,  67 => 22,  56 => 19,  53 => 18,  48 => 17,  43 => 16,  40 => 15,  37 => 14,  30 => 10,  26 => 8,  21 => 2,  19 => 1,);
    }
}
