<?php

/* TopxiaWebBundle:Default:recommend-teacher.html.twig */
class __TwigTemplate_8a06d064246be20de829b4abda8fdff87f0a5ab55d89c41cca9f639aaed4d463 extends Twig_Template
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
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        $context["teachers"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendTeachers", array("count" => (($this->getAttribute($_config_, "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "count", array()), 4)) : (4))));
        // line 2
        if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
        if ($_teachers_) {
            // line 3
            echo "  <section class=\"recommend-teacher ";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "background", array()), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5><span>";
            // line 6
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "title", array()), $this->getAttribute($_config_, "defaultTitle", array()))) : ($this->getAttribute($_config_, "defaultTitle", array()))), "html", null, true);
            echo "</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">";
            // line 7
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "subTitle", array()), $this->getAttribute($_config_, "defaultSubTitle", array()))) : ($this->getAttribute($_config_, "defaultSubTitle", array()))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"row\">
        ";
            // line 10
            if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_teachers_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 11
                echo "        ";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                $context["profile"] = $this->getAttribute($_teacher_, "profile", array());
                // line 12
                echo "        ";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                $context["isFollowed"] = $this->getAttribute($_teacher_, "isFollowed", array());
                // line 13
                echo "          <div class=\"col-md-3 col-xs-6\">
            ";
                // line 14
                $this->loadTemplate("TopxiaWebBundle:Teacher:teacher-item.html.twig", "TopxiaWebBundle:Default:recommend-teacher.html.twig", 14)->display($context);
                // line 15
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("teacher");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多教师"), "html", null, true);
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
        return "TopxiaWebBundle:Default:recommend-teacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  95 => 19,  91 => 17,  76 => 15,  74 => 14,  71 => 13,  67 => 12,  63 => 11,  45 => 10,  38 => 7,  33 => 6,  25 => 3,  22 => 2,  19 => 1,);
    }
}
