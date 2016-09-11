<?php

/* TopxiaWebBundle:Category:explore-nav.html.twig */
class __TwigTemplate_c2de27249e1c3d421ae7867842a4f898484621a3455bc9c27d59c0972677a692 extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("category/nav");
        // line 2
        $context["nextCode"] = "";
        // line 3
        echo "<div class=\"es-tabs\">

  <div class=\"tab-header\">
    <ul class=\"clearfix\">
      <li class=\"";
        // line 7
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (($_category_ == "")) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_path_, array("category" => "", "filter" => $_filter_, "orderBy" => $_orderBy_)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
        echo "</a></li>
      ";
        // line 8
        if (isset($context["rootCategories"])) { $_rootCategories_ = $context["rootCategories"]; } else { $_rootCategories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_rootCategories_);
        foreach ($context['_seq'] as $context["_key"] => $context["cateogory"]) {
            // line 9
            echo "        <li class=\"";
            if (isset($context["cateogory"])) { $_cateogory_ = $context["cateogory"]; } else { $_cateogory_ = null; }
            if (isset($context["activeIds"])) { $_activeIds_ = $context["activeIds"]; } else { $_activeIds_ = null; }
            if (twig_in_filter($this->getAttribute($_cateogory_, "id", array()), $_activeIds_)) {
                if (isset($context["cateogory"])) { $_cateogory_ = $context["cateogory"]; } else { $_cateogory_ = null; }
                $context["nextCode"] = $this->getAttribute($_cateogory_, "code", array());
                echo "active";
            }
            echo "\"><a href=\"";
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            if (isset($context["cateogory"])) { $_cateogory_ = $context["cateogory"]; } else { $_cateogory_ = null; }
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_path_, array("category" => $this->getAttribute($_cateogory_, "code", array()), "filter" => $_filter_, "orderBy" => $_orderBy_)), "html", null, true);
            echo "\">";
            if (isset($context["cateogory"])) { $_cateogory_ = $context["cateogory"]; } else { $_cateogory_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cateogory_, "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cateogory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
  </div>


  ";
        // line 15
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        if ($_categories_) {
            // line 16
            echo "    <div class=\"tab-body\">
      ";
            // line 17
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_categories_);
            foreach ($context['_seq'] as $context["l"] => $context["cs"]) {
                if (isset($context["cs"])) { $_cs_ = $context["cs"]; } else { $_cs_ = null; }
                if ($_cs_) {
                    // line 18
                    echo "        <ul class=\"clearfix\">
          ";
                    // line 19
                    if (isset($context["cs"])) { $_cs_ = $context["cs"]; } else { $_cs_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_cs_);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 20
                        echo "            ";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        if (($this->getAttribute($_loop_, "index", array()) == 1)) {
                            // line 21
                            echo "              <li class=\"all\"><a href=\"";
                            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
                            if (isset($context["nextCode"])) { $_nextCode_ = $context["nextCode"]; } else { $_nextCode_ = null; }
                            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                            if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_path_, array("category" => $_nextCode_, "filter" => $_filter_, "orderBy" => $_orderBy_)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
                            echo "</a></li>
            ";
                        }
                        // line 23
                        echo "            <li class=\"";
                        if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                        if (isset($context["activeIds"])) { $_activeIds_ = $context["activeIds"]; } else { $_activeIds_ = null; }
                        if (twig_in_filter($this->getAttribute($_c_, "id", array()), $_activeIds_)) {
                            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                            $context["nextCode"] = $this->getAttribute($_c_, "code", array());
                            echo "active";
                        }
                        echo "\"><a href=\"";
                        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
                        if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                        if (isset($context["orderBy"])) { $_orderBy_ = $context["orderBy"]; } else { $_orderBy_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_path_, array("category" => $this->getAttribute($_c_, "code", array()), "filter" => $_filter_, "orderBy" => $_orderBy_)), "html", null, true);
                        echo "\">";
                        if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_c_, "name", array()), "html", null, true);
                        echo "</a></li>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "        </ul>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['l'], $context['cs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </div>
  ";
        }
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Category:explore-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 29,  168 => 27,  160 => 25,  128 => 23,  116 => 21,  112 => 20,  94 => 19,  91 => 18,  84 => 17,  81 => 16,  78 => 15,  72 => 11,  48 => 9,  43 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
