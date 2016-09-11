<?php

/* TopxiaWebBundle:Bootstrap:panel.html.twig */
class __TwigTemplate_a361bd117282bd6eedf13e69633e2869c6fc1f8ed95a86c97bdd012b28650deb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        $context["id"] = ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, null)) : (null));
        // line 2
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, null)) : (null));
        // line 3
        echo "<div ";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if ($_id_) {
            echo "id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" ";
        }
        echo "class=\"panel panel-default ";
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        if ($_class_) {
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
        }
        echo "\">
  <div class=\"panel-heading\">";
        // line 4
        $this->displayBlock('heading', $context, $blocks);
        echo "</div>
  <div class=\"panel-body\">";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
</div>";
    }

    // line 4
    public function block_heading($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  54 => 4,  48 => 5,  44 => 4,  27 => 3,  24 => 2,  21 => 1,);
    }
}
