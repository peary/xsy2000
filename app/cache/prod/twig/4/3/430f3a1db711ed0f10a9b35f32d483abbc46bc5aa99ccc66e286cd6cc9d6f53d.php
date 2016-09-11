<?php

/* TopxiaWebBundle:Thread:list.html.twig */
class __TwigTemplate_430f3a1db711ed0f10a9b35f32d483abbc46bc5aa99ccc66e286cd6cc9d6f53d extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread:list.html.twig", 1);
        // line 2
        echo "
<div class=\"topic-list\">
  ";
        // line 4
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_threads_);
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 5
            echo "    ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["author"] = $this->getAttribute($_users_, $this->getAttribute($_thread_, "userId", array()), array(), "array");
            // line 6
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Thread/Part:list-item.html.twig", "TopxiaWebBundle:Thread:list.html.twig", 6)->display($context);
            // line 7
            echo "  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 8
            echo "    <div class=\"empty\">暂无话题</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>

<nav class=\"text-center\">
  ";
        // line 13
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo $_web_macro_->getpaginator($_paginator_);
        echo "
</nav>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  72 => 10,  65 => 8,  52 => 7,  49 => 6,  44 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
