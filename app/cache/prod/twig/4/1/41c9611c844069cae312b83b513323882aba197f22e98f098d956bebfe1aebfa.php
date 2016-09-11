<?php

/* TopxiaAdminBundle:Default:inspect.html.twig */
class __TwigTemplate_41c9611c844069cae312b83b513323882aba197f22e98f098d956bebfe1aebfa extends Twig_Template
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
        if (isset($context["inspectList"])) { $_inspectList_ = $context["inspectList"]; } else { $_inspectList_ = null; }
        if ($_inspectList_) {
            // line 2
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    ";
            // line 3
            if (isset($context["inspectList"])) { $_inspectList_ = $context["inspectList"]; } else { $_inspectList_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_inspectList_);
            foreach ($context['_seq'] as $context["_key"] => $context["inspectItem"]) {
                // line 4
                echo "        <span>";
                if (isset($context["inspectItem"])) { $_inspectItem_ = $context["inspectItem"]; } else { $_inspectItem_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_inspectItem_, "value", array()), "errorMessage", array()), "html", null, true);
                echo "</span>
        <a href='";
                // line 5
                if (isset($context["inspectItem"])) { $_inspectItem_ = $context["inspectItem"]; } else { $_inspectItem_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_inspectItem_, "value", array()), "settingUrl", array()), "html", null, true);
                echo "'>设置。</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inspectItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:inspect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  36 => 5,  30 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
