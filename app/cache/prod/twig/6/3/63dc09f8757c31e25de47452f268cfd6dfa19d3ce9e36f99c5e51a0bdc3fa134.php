<?php

/* TopxiaWebBundle:Default:navigation-li.html.twig */
class __TwigTemplate_63dc09f8757c31e25de47452f268cfd6dfa19d3ce9e36f99c5e51a0bdc3fa134 extends Twig_Template
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
        echo "<li class=\"";
        if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
        if ($_subNavs_) {
            echo "nav-hover";
        }
        if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if (($_siteNav_ && ($_siteNav_ == $this->getAttribute($_nav_, "url", array())))) {
            echo " active ";
        }
        echo "\">
  <a href=\"";
        // line 2
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if ($this->getAttribute($_nav_, "url", array())) {
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($_nav_, "url", array())), "html", null, true);
        } else {
            echo "javascript:;";
        }
        echo "\" ";
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if ($this->getAttribute($_nav_, "isNewWin", array())) {
            echo "target=\"_blank\"";
        }
        echo ">";
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_nav_, "name", array()), "html", null, true);
        echo " ";
        if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
        if ($_subNavs_) {
            echo " <b class=\"caret\"></b>";
        }
        echo "</a>
  ";
        // line 3
        if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
        if ($_subNavs_) {
            // line 4
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 5
            if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_subNavs_);
            foreach ($context['_seq'] as $context["_key"] => $context["subNav"]) {
                if (isset($context["subNav"])) { $_subNav_ = $context["subNav"]; } else { $_subNav_ = null; }
                if ($this->getAttribute($_subNav_, "isOpen", array())) {
                    // line 6
                    echo "        <li><a href=\"";
                    if (isset($context["subNav"])) { $_subNav_ = $context["subNav"]; } else { $_subNav_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($_subNav_, "url", array())), "html", null, true);
                    echo "\"  ";
                    if (isset($context["subNav"])) { $_subNav_ = $context["subNav"]; } else { $_subNav_ = null; }
                    if ($this->getAttribute($_subNav_, "isNewWin", array())) {
                        echo "target=\"_blank\"";
                    }
                    echo ">";
                    if (isset($context["subNav"])) { $_subNav_ = $context["subNav"]; } else { $_subNav_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_subNav_, "name", array()), "html", null, true);
                    echo "</a></li>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
  ";
        }
        // line 10
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:navigation-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 10,  87 => 8,  68 => 6,  61 => 5,  58 => 4,  55 => 3,  32 => 2,  19 => 1,);
    }
}
