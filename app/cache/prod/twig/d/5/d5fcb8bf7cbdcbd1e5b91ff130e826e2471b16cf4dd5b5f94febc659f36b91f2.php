<?php

/* TopxiaWebBundle:Course:Widget/course-price.html.twig */
class __TwigTemplate_d5fcb8bf7cbdcbd1e5b91ff130e826e2471b16cf4dd5b5f94febc659f36b91f2 extends Twig_Template
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
        // line 8
        echo "
";
        // line 9
        if (isset($context["shows"])) { $_shows_ = $context["shows"]; } else { $_shows_ = null; }
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter($_shows_, array(0 => "full"))) : (array(0 => "full")));
        // line 10
        $context["priceType"] = ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 11
        echo "
<span class=\"course-price-widget\">

  ";
        // line 14
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "discountId", array())) {
            // line 15
            echo "
    ";
            // line 16
            if (isset($context["shows"])) { $_shows_ = $context["shows"]; } else { $_shows_ = null; }
            if ((twig_in_filter("full", $_shows_) || twig_in_filter("price", $_shows_))) {
                // line 17
                echo "      ";
                if (isset($context["priceType"])) { $_priceType_ = $context["priceType"]; } else { $_priceType_ = null; }
                if (($_priceType_ == "coin")) {
                    // line 18
                    echo "        <span class=\"price\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, ($this->getAttribute($_course_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 20
                    echo "        <span class=\"price\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "</span>
      ";
                }
                // line 22
                echo "    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if (isset($context["shows"])) { $_shows_ = $context["shows"]; } else { $_shows_ = null; }
            if ((twig_in_filter("full", $_shows_) || twig_in_filter("originPrice", $_shows_))) {
                // line 25
                echo "      ";
                if (isset($context["priceType"])) { $_priceType_ = $context["priceType"]; } else { $_priceType_ = null; }
                if (($_priceType_ == "coin")) {
                    // line 26
                    echo "        <span class=\"origin-price\"><del>";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, ($this->getAttribute($_course_, "originPrice", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 28
                    echo "        <span class=\"origin-price\"><del>";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "originPrice", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "</del></span>
      ";
                }
                // line 30
                echo "    ";
            }
            // line 31
            echo "
    ";
            // line 32
            if (isset($context["shows"])) { $_shows_ = $context["shows"]; } else { $_shows_ = null; }
            if ((twig_in_filter("full", $_shows_) || twig_in_filter("discount", $_shows_))) {
                // line 33
                echo "
      <span class=\"discount\">
        ";
                // line 35
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["priceType"])) { $_priceType_ = $context["priceType"]; } else { $_priceType_ = null; }
                if (((($this->getAttribute($_course_, "discount", array()) == 0) || (($_priceType_ == "coin") && ($this->getAttribute($_course_, "originPrice", array()) == 0))) || (($_priceType_ == "default") && ($this->getAttribute($_course_, "originPrice", array()) == 0)))) {
                    // line 36
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("限免"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 38
                    echo "          ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($_course_, "discount", array()), 2, "common"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("折"), "html", null, true);
                    echo "
        ";
                }
                // line 40
                echo "      </span>

    ";
            }
            // line 43
            echo "
  ";
        } else {
            // line 45
            echo "
    ";
            // line 46
            if (isset($context["shows"])) { $_shows_ = $context["shows"]; } else { $_shows_ = null; }
            if ((twig_in_filter("full", $_shows_) || twig_in_filter("price", $_shows_))) {
                // line 47
                echo "      <span class=\"price\">
        ";
                // line 48
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 49
                    echo "          ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price", array()) > 0)) {
                        echo " ";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, ($this->getAttribute($_course_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                        echo " ";
                    } else {
                        echo " <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                        echo "</span> ";
                    }
                    // line 50
                    echo "        ";
                } else {
                    // line 51
                    echo "          ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price", array()) > 0)) {
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    } else {
                        echo " <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                        echo "</span> ";
                    }
                    echo " 
        ";
                }
                // line 53
                echo "      </span>
    ";
            }
            // line 55
            echo "
    ";
            // line 56
            if (isset($context["shows"])) { $_shows_ = $context["shows"]; } else { $_shows_ = null; }
            if (twig_in_filter("originPrice", $_shows_)) {
                // line 57
                echo "      ";
                if (isset($context["priceType"])) { $_priceType_ = $context["priceType"]; } else { $_priceType_ = null; }
                if (($_priceType_ == "coin")) {
                    // line 58
                    echo "        <span class=\"origin-price\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, ($this->getAttribute($_course_, "originPrice", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 60
                    echo "        ¥<span class=\"origin-price\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "originPrice", array()), "html", null, true);
                    echo "</span>
      ";
                }
                // line 62
                echo "    ";
            }
            // line 63
            echo "
  ";
        }
        // line 65
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Widget/course-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 65,  207 => 63,  204 => 62,  197 => 60,  189 => 58,  185 => 57,  182 => 56,  179 => 55,  175 => 53,  160 => 51,  157 => 50,  143 => 49,  141 => 48,  138 => 47,  135 => 46,  132 => 45,  128 => 43,  123 => 40,  115 => 38,  109 => 36,  105 => 35,  101 => 33,  98 => 32,  95 => 31,  92 => 30,  84 => 28,  75 => 26,  71 => 25,  68 => 24,  65 => 23,  62 => 22,  54 => 20,  45 => 18,  41 => 17,  38 => 16,  35 => 15,  32 => 14,  27 => 11,  25 => 10,  22 => 9,  19 => 8,);
    }
}
