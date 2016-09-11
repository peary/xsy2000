<?php

/* TopxiaWebBundle:CourseLesson/Widget:list.html.twig */
class __TwigTemplate_897b1ea7e727056207ff95059ec060106d2089a9b5f7f7a0ee744397c978a09b extends Twig_Template
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
        if (isset($context["learnStatuses"])) { $_learnStatuses_ = $context["learnStatuses"]; } else { $_learnStatuses_ = null; }
        $context["learnStatuses"] = ((array_key_exists("learnStatuses", $context)) ? (_twig_default_filter($_learnStatuses_, array())) : (array()));
        // line 2
        if (isset($context["previewUrl"])) { $_previewUrl_ = $context["previewUrl"]; } else { $_previewUrl_ = null; }
        $context["previewUrl"] = ((array_key_exists("previewUrl", $context)) ? (_twig_default_filter($_previewUrl_, null)) : (null));
        // line 3
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if ($_items_) {
            // line 4
            echo "  <ul class=\"period-list\" id=\"course-item-list\">
  ";
            // line 5
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_items_);
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
            foreach ($context['_seq'] as $context["id"] => $context["item"]) {
                // line 6
                echo "    ";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (twig_in_filter("chapter", $_id_)) {
                    // line 7
                    echo "      ";
                    $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:chapter.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 7)->display($context);
                    // line 8
                    echo "    ";
                } elseif (twig_in_filter("lesson", $_id_)) {
                    // line 9
                    echo "      ";
                    $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 9)->display($context);
                    // line 10
                    echo "    ";
                    // line 14
                    echo "    ";
                }
                // line 15
                echo "  ";
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
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Widget:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  64 => 14,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  49 => 6,  31 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
