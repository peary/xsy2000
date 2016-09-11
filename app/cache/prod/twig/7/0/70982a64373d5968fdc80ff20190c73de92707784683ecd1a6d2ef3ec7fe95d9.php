<?php

/* TopxiaWebBundle:Default:footer.html.twig */
class __TwigTemplate_70982a64373d5968fdc80ff20190c73de92707784683ecd1a6d2ef3ec7fe95d9 extends Twig_Template
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
        $context["currentTheme"] = $this->env->getExtension('topxia_theme_twig')->getCurrentTheme();
        // line 2
        if (isset($context["isEditColor"])) { $_isEditColor_ = $context["isEditColor"]; } else { $_isEditColor_ = null; }
        if (isset($context["currentTheme"])) { $_currentTheme_ = $context["currentTheme"]; } else { $_currentTheme_ = null; }
        $context["themeConfig"] = ((((array_key_exists("isEditColor", $context)) ? (_twig_default_filter($_isEditColor_, false)) : (false))) ? ($this->getAttribute($_currentTheme_, "config", array())) : ($this->getAttribute($_currentTheme_, "confirmConfig", array())));
        // line 3
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
            // line 4
            echo "    ";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            $context["code"] = $this->getAttribute($_config_, "code", array());
            // line 5
            echo "    ";
            if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
            if (($_code_ == "footer-link")) {
                // line 6
                echo "      ";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                $context["category"] = (((($this->getAttribute($_config_, "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('topxia_data_twig')->getData("Category", array("categoryId" => $this->getAttribute($_config_, "categoryId", array())))) : (null));
                // line 7
                echo "      ";
                if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                $this->loadTemplate((("TopxiaWebBundle:Default:" . $_code_) . ".html.twig"), "TopxiaWebBundle:Default:footer.html.twig", 7)->display(array_merge($context, array("config" => $_config_, "category" => $_category_)));
                // line 8
                echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
<footer class=\"es-footer\">
  <div class=\"copyright\">
    <div class=\"container\">
      ";
        // line 14
        $this->loadTemplate("TopxiaWebBundle::powered-by.html.twig", "TopxiaWebBundle:Default:footer.html.twig", 14)->display($context);
        // line 15
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo "
      <a class=\"mlm\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("course_archive");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程存档"), "html", null, true);
        echo "</a>
      <div class=\"mts\">
        ";
        // line 18
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.copyright")) {
            // line 19
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程内容版权均归"), "html", null, true);
            echo "
          <a href=\"/\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.copyright"), "html", null, true);
            echo "
          </a>
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所有"), "html", null, true);
            echo "
        ";
        }
        // line 25
        echo "        ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.icp")) {
            // line 26
            echo "          <a class=\"mlm\" href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.icp"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 30
        echo "      </div>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 30,  120 => 27,  117 => 26,  114 => 25,  109 => 23,  104 => 21,  98 => 19,  96 => 18,  89 => 16,  84 => 15,  82 => 14,  76 => 10,  61 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
