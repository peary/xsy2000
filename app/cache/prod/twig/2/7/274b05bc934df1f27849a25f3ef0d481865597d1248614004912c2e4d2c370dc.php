<?php

/* TopxiaWebBundle:Default:top-navigation.html.twig */
class __TwigTemplate_274b05bc934df1f27849a25f3ef0d481865597d1248614004912c2e4d2c370dc extends Twig_Template
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
        if (isset($context["navigations"])) { $_navigations_ = $context["navigations"]; } else { $_navigations_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_navigations_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            if ($this->getAttribute($_nav_, "isOpen", array())) {
                // line 2
                echo "  ";
                if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                $context["subNavs"] = (($this->getAttribute($_nav_, "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_nav_, "children", array()), array())) : (array()));
                // line 3
                echo "  ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["isMobile"])) { $_isMobile_ = $context["isMobile"]; } else { $_isMobile_ = null; }
                if ((($this->getAttribute($_loop_, "index", array()) == 6) &&  !((array_key_exists("isMobile", $context)) ? (_twig_default_filter($_isMobile_, false)) : (false)))) {
                    // line 4
                    echo "    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        ";
                    // line 9
                    if (isset($context["navigations"])) { $_navigations_ = $context["navigations"]; } else { $_navigations_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $_navigations_, 5, null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
                        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                        if ($this->getAttribute($_nav_, "isOpen", array())) {
                            // line 10
                            echo "          ";
                            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                            $context["subNavs"] = (($this->getAttribute($_nav_, "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_nav_, "children", array()), array())) : (array()));
                            // line 11
                            echo "
          ";
                            // line 12
                            $this->loadTemplate("TopxiaWebBundle:Default:navigation-li.html.twig", "TopxiaWebBundle:Default:top-navigation.html.twig", 12)->display($context);
                            // line 13
                            echo "        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "      </ul>
    </li>
  ";
                }
                // line 17
                echo "
  ";
                // line 18
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["isMobile"])) { $_isMobile_ = $context["isMobile"]; } else { $_isMobile_ = null; }
                if ((($this->getAttribute($_loop_, "index", array()) < 6) || ((array_key_exists("isMobile", $context)) ? (_twig_default_filter($_isMobile_, false)) : (false)))) {
                    // line 19
                    echo "    ";
                    $this->loadTemplate("TopxiaWebBundle:Default:navigation-li.html.twig", "TopxiaWebBundle:Default:top-navigation.html.twig", 19)->display($context);
                    // line 20
                    echo "  ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  92 => 19,  88 => 18,  85 => 17,  80 => 14,  70 => 13,  68 => 12,  65 => 11,  61 => 10,  48 => 9,  41 => 4,  36 => 3,  32 => 2,  19 => 1,);
    }
}
