<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_5292c862cc0eb0406a1e28c9cc32b67cf0ab06aeaa6f8a85a2047cf1dbbd1f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["bodyClass"] = "homepage";
        // line 7
        $context["siteNav"] = "/";
        // line 8
        $context["script_controller"] = "index";
        // line 9
        $context["_target_path"] = $this->env->getExtension('routing')->getPath("homepage");
        // line 11
        $context["currentTheme"] = $this->env->getExtension('topxia_theme_twig')->getCurrentTheme();
        // line 12
        if (isset($context["isEditColor"])) { $_isEditColor_ = $context["isEditColor"]; } else { $_isEditColor_ = null; }
        if (isset($context["currentTheme"])) { $_currentTheme_ = $context["currentTheme"]; } else { $_currentTheme_ = null; }
        $context["themeConfig"] = ((((array_key_exists("isEditColor", $context)) ? (_twig_default_filter($_isEditColor_, false)) : (false))) ? ($this->getAttribute($_currentTheme_, "config", array())) : ($this->getAttribute($_currentTheme_, "confirmConfig", array())));
        // line 13
        if (isset($context["currentTheme"])) { $_currentTheme_ = $context["currentTheme"]; } else { $_currentTheme_ = null; }
        $context["allConfig"] = $this->getAttribute($_currentTheme_, "allConfig", array());
        // line 15
        $context["isIndex"] = true;
        // line 16
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 18
    public function block_full_content($context, array $blocks = array())
    {
        // line 19
        echo "
  \t";
        // line 20
        echo $this->env->getExtension('topxia_block_twig')->showBlock("jianmo:home_top_banner");
        echo "

    ";
        // line 22
        if (isset($context["themeConfig"])) { $_themeConfig_ = $context["themeConfig"]; } else { $_themeConfig_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute($_themeConfig_, "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_themeConfig_, "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 23
            echo "
    \t";
            // line 24
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context["code"] = $this->getAttribute($_config_, "code", array());
            // line 25
            echo "    \t";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
            if ((((($this->getAttribute($_config_, "sortName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "sortName", array()), "")) : ("")) == "recommended") && ($_code_ == "category-course"))) {
                // line 26
                echo "            ";
                $context["code"] = "recommend-course";
                // line 27
                echo "        ";
            }
            // line 28
            echo "
    \t";
            // line 29
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context["category"] = (((($this->getAttribute($_config_, "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('topxia_data_twig')->getData("Category", array("categoryId" => $this->getAttribute($_config_, "categoryId", array())))) : (null));
            // line 30
            echo "    \t";
            if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
            if (($_code_ == "friend-link")) {
                // line 31
                echo "    \t   ";
                if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                if (isset($context["friendlyLinks"])) { $_friendlyLinks_ = $context["friendlyLinks"]; } else { $_friendlyLinks_ = null; }
                $this->loadTemplate((("TopxiaWebBundle:Default:" . $_code_) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 31)->display(array_merge($context, array("friendlyLinks" => $_friendlyLinks_)));
                // line 32
                echo "    \t";
            } elseif (($_code_ == "footer-link")) {
                // line 33
                echo "        ";
            } else {
                // line 34
                echo "\t\t   ";
                if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                $this->loadTemplate((("TopxiaWebBundle:Default:" . $_code_) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 34)->display(array_merge($context, array("config" => $_config_, "category" => $_category_)));
                // line 35
                echo "\t\t";
            }
            // line 36
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 37,  140 => 36,  137 => 35,  131 => 34,  128 => 33,  125 => 32,  120 => 31,  116 => 30,  113 => 29,  110 => 28,  107 => 27,  104 => 26,  99 => 25,  96 => 24,  93 => 23,  75 => 22,  70 => 20,  67 => 19,  64 => 18,  58 => 4,  52 => 3,  48 => 1,  46 => 16,  44 => 15,  41 => 13,  37 => 12,  35 => 11,  33 => 9,  31 => 8,  29 => 7,  27 => 6,  11 => 1,);
    }
}
