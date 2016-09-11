<?php

/* ClassroomBundle:Classroom:keywords.html.twig */
class __TwigTemplate_754926fe862dcee9a003d4dc047cfa4869824b354123d1e55581484b4997754d extends Twig_Template
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
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($_category_) {
            echo " ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name", array()), "html", null, true);
            echo " ";
            if (isset($context["parentCategory"])) { $_parentCategory_ = $context["parentCategory"]; } else { $_parentCategory_ = null; }
            if ($_parentCategory_) {
                echo ",";
                if (isset($context["parentCategory"])) { $_parentCategory_ = $context["parentCategory"]; } else { $_parentCategory_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_parentCategory_, "name", array()), "html", null, true);
                echo " ";
            }
            echo " ";
        }
        echo " 
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:keywords.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
