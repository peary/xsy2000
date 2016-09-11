<?php

/* ClassroomBundle:Classroom:latest-members-block.html.twig */
class __TwigTemplate_cbddf2cb4cf9d1e1ffbaf14f8552e42fd17f85d09ae7dc3d2bc9590280172753 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:latest-members-block.html.twig", 1);
        // line 2
        if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
        if ($_students_) {
            // line 3
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"es-icon es-icon-personadd\"></i>新加学员</h3>
    </div>
    <div class=\"panel-body\">
      <ul class=\"user-avatar-list clearfix\">
        ";
            // line 9
            if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_students_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 10
                echo "          ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
                $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_student_, "userId", array()), array(), "array");
                // line 11
                echo "          ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "index", array()) < 16)) {
                    // line 12
                    echo "            <li>
              ";
                    // line 13
                    if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo $_web_macro_->getuser_avatar($_user_, "", "avatar-sm", true);
                    echo "
            </li>
          ";
                }
                // line 16
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:latest-members-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  70 => 16,  62 => 13,  59 => 12,  55 => 11,  50 => 10,  32 => 9,  24 => 3,  21 => 2,  19 => 1,);
    }
}
