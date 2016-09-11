<?php

/* TopxiaWebBundle:Course:keywords.html.twig */
class __TwigTemplate_b6c30f83950b4c17dff466e16fc546061e1353f7a1b4c3cd63460355a0d0eb27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('keywords', $context, $blocks);
    }

    public function block_keywords($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context["tags"] = $this->env->getExtension('topxia_data_twig')->getData("Tags", array("tagIds" => $this->getAttribute($_course_, "tags", array())));
        // line 3
        echo "  \t";
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tags_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ( !$this->getAttribute($_loop_, "last", array())) {
                echo ",";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:keywords.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  20 => 1,);
    }
}
