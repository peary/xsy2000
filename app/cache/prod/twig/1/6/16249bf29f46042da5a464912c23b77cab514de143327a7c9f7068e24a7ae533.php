<?php

/* TopxiaWebBundle:Course:related-courses-block.html.twig */
class __TwigTemplate_16249bf29f46042da5a464912c23b77cab514de143327a7c9f7068e24a7ae533 extends Twig_Template
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
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 2
            $this->env->getExtension('topxia_web_twig')->loadScript("course/related-courses-block");
            // line 3
            echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-explore\"></i>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("相关课程"), "html", null, true);
            echo "</h3>
  </div>
  <div class=\"panel-body\">
    <div class=\"course-list no-shadow no-margin\">
      <div class=\"row\">
        ";
            // line 10
            $context["key"] = 0;
            // line 11
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_courses_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 12
                echo "          ";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if (isset($context["currentCourse"])) { $_currentCourse_ = $context["currentCourse"]; } else { $_currentCourse_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ((($_key_ < 3) && ($this->getAttribute($_currentCourse_, "id", array()) != $this->getAttribute($_course_, "id", array())))) {
                    // line 13
                    echo "          ";
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    $context["key"] = ($_key_ + 1);
                    // line 14
                    echo "          <div class=\"col-lg-4 col-md-6 col-xs-6 ";
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    if (($_key_ > 2)) {
                        echo "hidden-sm hidden-xs";
                    }
                    echo "\">
            ";
                    // line 15
                    $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Course:related-courses-block.html.twig", 15)->display($context);
                    // line 16
                    echo "          </div>
          ";
                }
                // line 18
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      </div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:related-courses-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  81 => 18,  77 => 16,  75 => 15,  67 => 14,  63 => 13,  57 => 12,  38 => 11,  36 => 10,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
