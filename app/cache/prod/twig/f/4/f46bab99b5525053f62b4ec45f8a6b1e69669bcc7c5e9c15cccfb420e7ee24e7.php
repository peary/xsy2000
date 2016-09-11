<?php

/* TopxiaWebBundle:Default:recommend-classroom.html.twig */
class __TwigTemplate_f46bab99b5525053f62b4ec45f8a6b1e69669bcc7c5e9c15cccfb420e7ee24e7 extends Twig_Template
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
        echo "<!-- 推荐班级 -->
";
        // line 2
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        $context["classrooms"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendClassrooms", array("count" => (($this->getAttribute($_config_, "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "count", array()), 4)) : (4))));
        // line 3
        if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
        if ($_classrooms_) {
            // line 4
            echo "  <section class=\"class-section ";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "background", array()), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5>
          <span>";
            // line 8
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "title", array()), $this->env->getExtension('translator')->trans("推荐班级"))) : ($this->env->getExtension('translator')->trans("推荐班级"))), "html", null, true);
            echo "</span>
          <div class=\"line\"></div>
        </h5>
        <div class=\"subtitle\">";
            // line 11
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "subTitle", array()), $this->getAttribute($_config_, "defaultSubTitle", array()))) : ($this->getAttribute($_config_, "defaultSubTitle", array()))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"recommend-class-list row\">
        ";
            // line 14
            if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_classrooms_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 15
                echo "          <div class=\"col-md-3 col-xs-6\">
             ";
                // line 16
                $this->loadTemplate("ClassroomBundle:Classroom:class-grid.html.twig", "TopxiaWebBundle:Default:recommend-classroom.html.twig", 16)->display($context);
                // line 17
                echo "          </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:recommend-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  93 => 21,  89 => 19,  74 => 17,  72 => 16,  69 => 15,  51 => 14,  44 => 11,  37 => 8,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
