<?php

/* TopxiaWebBundle:Group:active-member-list.html.twig */
class __TwigTemplate_25d71b5c6bdfc4a2ccbf3ce9a8714d683cdf6f31a63a7df8d49c8359b97b6179 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新加组员"), "html", null, true);
        echo "</h3></div>
  <div class=\"panel-body\">
    ";
        // line 4
        if (isset($context["activeMembers"])) { $_activeMembers_ = $context["activeMembers"]; } else { $_activeMembers_ = null; }
        if ($_activeMembers_) {
            // line 5
            echo "      <ul class=\"user-grids\">
        ";
            // line 6
            if (isset($context["activeMembers"])) { $_activeMembers_ = $context["activeMembers"]; } else { $_activeMembers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_activeMembers_);
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 7
                echo "          <li style=\"width:18%;\">
            ";
                // line 8
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["members"])) { $_members_ = $context["members"]; } else { $_members_ = null; }
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $this->getAttribute($_members_, $this->getAttribute($_member_, "userId", array()), array(), "array"), 1 => "user-link user-avatar-link pull-left media-object media-object-small "), "method"), "html", null, true);
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "      </ul>
    ";
        } else {
            // line 13
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有小组成员！"), "html", null, true);
            echo "
    ";
        }
        // line 15
        echo "    <br>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:active-member-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  57 => 13,  53 => 11,  41 => 8,  38 => 7,  33 => 6,  30 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
