<?php

/* TopxiaWebBundle:Status:status-block.html.twig */
class __TwigTemplate_714e22372914a773bc3216719062199d4a8b4eb3e6f03d377d677b2fb11c9f46 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Status:status-block.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default student-dynamic\">

  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-recentactors\"></i>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员动态"), "html", null, true);
        echo "</h3>
  </div>

  <div class=\"panel-body\">
  ";
        // line 9
        if (isset($context["learns"])) { $_learns_ = $context["learns"]; } else { $_learns_ = null; }
        if ($_learns_) {
            // line 10
            echo "
      ";
            // line 11
            if (isset($context["learns"])) { $_learns_ = $context["learns"]; } else { $_learns_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_learns_);
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
            foreach ($context['_seq'] as $context["key"] => $context["learn"]) {
                // line 12
                echo "        ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "index", array()) < 7)) {
                    // line 13
                    echo "          <div class=\"media media-number-o color-gray text-overflow\">
            ";
                    // line 14
                    if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $_web_macro_->getuser_link($this->getAttribute($_learn_, "user", array()));
                    echo "
            ";
                    // line 15
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->getAttribute($_learn_, "message", array());
                    echo "
          </div>
         ";
                }
                // line 18
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
    ";
        } else {
            // line 21
            echo "     <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有动态"), "html", null, true);
            echo "</div>
    ";
        }
        // line 23
        echo "  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Status:status-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  95 => 21,  91 => 19,  77 => 18,  70 => 15,  64 => 14,  61 => 13,  57 => 12,  39 => 11,  36 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
