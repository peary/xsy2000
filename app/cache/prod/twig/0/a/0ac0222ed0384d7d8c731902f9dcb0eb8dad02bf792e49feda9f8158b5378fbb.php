<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-teachers.html.twig */
class __TwigTemplate_0ac0222ed0384d7d8c731902f9dcb0eb8dad02bf792e49feda9f8158b5378fbb extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-teachers.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"> <i class=\"es-icon es-icon-assignmentind\"></i>
      ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("授课教师"), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 9
        if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
        if ($_teachers_) {
            // line 10
            echo "      ";
            if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_teachers_);
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 11
                echo "        <div class=\"media media-default\">
          <div class=\"media-left\">
            ";
                // line 13
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo $_web_macro_->getuser_avatar($_teacher_, "", "avatar-md");
                echo "
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              ";
                // line 17
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo $_web_macro_->getuser_link($_teacher_, "link-light");
                echo "
            </div>
            <div class=\"content\">";
                // line 19
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "title", array()), "html", null, true);
                echo "</div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无教师"), "html", null, true);
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
        return "TopxiaWebBundle:Course:Part/normal-sidebar-teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  76 => 24,  73 => 23,  62 => 19,  55 => 17,  46 => 13,  42 => 11,  36 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
