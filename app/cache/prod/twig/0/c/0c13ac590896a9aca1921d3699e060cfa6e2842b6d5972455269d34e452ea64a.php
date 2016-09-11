<?php

/* TopxiaWebBundle:EsBar:ListContent/consult.html.twig */
class __TwigTemplate_0c13ac590896a9aca1921d3699e060cfa6e2842b6d5972455269d34e452ea64a extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0)) {
            // line 2
            echo "  ";
            $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
            // line 3
            echo "  <div class=\"bar-popover-content\" style=\"display:none;\">
    <div id=\"bar-qq-content\">
      ";
            // line 5
            $context["countQq"] = 0;
            // line 6
            echo "      ";
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "qq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                if (( !twig_test_empty($this->getAttribute($_qq_, "name", array())) &&  !twig_test_empty($this->getAttribute($_qq_, "number", array())))) {
                    // line 7
                    echo "        ";
                    $context["countQq"] = 1;
                    // line 8
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
      ";
            // line 10
            if (isset($context["countQq"])) { $_countQq_ = $context["countQq"]; } else { $_countQq_ = null; }
            if (($_countQq_ > 0)) {
                // line 11
                echo "      <div class=\"row mtm\">
        ";
                // line 12
                if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "qq", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                    if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                    if (( !twig_test_empty($this->getAttribute($_qq_, "name", array())) &&  !twig_test_empty($this->getAttribute($_qq_, "number", array())))) {
                        // line 13
                        echo "          ";
                        if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                        if ((($this->getAttribute($_qq_, "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_qq_, "url", array()), false)) : (false))) {
                            // line 14
                            echo "            <div class=\"col-xs-6 mbm text-overflow\">
              <a class=\"link-light\" href=\"";
                            // line 15
                            if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                            echo $this->getAttribute($_qq_, "url", array());
                            echo "\" target=\"_blank\"><img class=\"mrs\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                            echo "\" alt=\"\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击这里给我发消息"), "html", null, true);
                            echo "\" alt=\"\">
                ";
                            // line 16
                            if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_qq_, "name", array()), "html", null, true);
                            echo "
              </a>
            </div>
          ";
                        } else {
                            // line 20
                            echo "            <div class=\"col-xs-6 mbm text-overflow\">
              <a class=\"link-light\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                            // line 21
                            if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_qq_, "number", array()), "html", null, true);
                            echo "&site=qq&menu=yes\" target=\"_blank\"><img class=\"mrs\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                            echo "\" alt=\"\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击这里给我发消息"), "html", null, true);
                            echo "\" alt=\"\">
                ";
                            // line 22
                            if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_qq_, "name", array()), "html", null, true);
                            echo "
              </a>
            </div>
          ";
                        }
                        // line 26
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "      </div>
      <hr>
      ";
            }
            // line 30
            echo "
      <div class=\"row\">
        ";
            // line 32
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "qqgroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                if (( !twig_test_empty($this->getAttribute($_qqgroup_, "name", array())) &&  !twig_test_empty($this->getAttribute($_qqgroup_, "number", array())))) {
                    // line 33
                    echo "          <div class=\"col-xs-6 mbm\">
            <p class=\"text-overflow\">
              <img class=\"mrs\" src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/bar_qq_group.png"), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 36
                    if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_qqgroup_, "name", array()), "html", null, true);
                    echo "
            </p>

            ";
                    // line 39
                    if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                    if ( !(($this->getAttribute($_qqgroup_, "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_qqgroup_, "url", array()), false)) : (false))) {
                        // line 40
                        echo "              <p class=\"text-overflow\">
                ";
                        // line 41
                        if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_qqgroup_, "number", array()), "html", null, true);
                        echo "
              </p>
            ";
                    }
                    // line 44
                    echo "
            ";
                    // line 45
                    if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                    if ((($this->getAttribute($_qqgroup_, "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_qqgroup_, "url", array()), false)) : (false))) {
                        // line 46
                        echo "              <p class=\"text-overflow\">
                ";
                        // line 47
                        if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                        echo $this->getAttribute($_qqgroup_, "url", array());
                        echo "
              </p>
            ";
                    }
                    // line 50
                    echo "
          </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </div>
    </div>

    <div id=\"bar-phone-content\">
      ";
            // line 57
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            if ( !twig_test_empty($this->getAttribute($_consult_, "worktime", array()))) {
                // line 58
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-accesstime mrm\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("工作时间："), "html", null, true);
                echo " ";
                if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "worktime", array()), "html", null, true);
                echo "</p>
      ";
            }
            // line 60
            echo "      ";
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "phone", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if (isset($context["phone"])) { $_phone_ = $context["phone"]; } else { $_phone_ = null; }
                if ( !twig_test_empty($this->getAttribute($_phone_, "name", array()))) {
                    // line 61
                    echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-phone mrm\"></i>";
                    if (isset($context["phone"])) { $_phone_ = $context["phone"]; } else { $_phone_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_phone_, "name", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("："), "html", null, true);
                    echo " ";
                    if (isset($context["phone"])) { $_phone_ = $context["phone"]; } else { $_phone_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_phone_, "number", array()), "html", null, true);
                    echo "</p>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      ";
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            if ( !twig_test_empty($this->getAttribute($_consult_, "email", array()))) {
                // line 64
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-mail mrm\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱："), "html", null, true);
                echo " <a class=\"link-light\" href=\"mailto:";
                if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "email", array()), "html", null, true);
                echo "\">";
                if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "email", array()), "html", null, true);
                echo "</a></p>
      ";
            }
            // line 66
            echo "    </div>

    ";
            // line 68
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            if ( !twig_test_empty($this->getAttribute($_consult_, "webchatURI", array()))) {
                // line 69
                echo "      <div id=\"bar-weixin-content\">
        <img width=\"110\" class=\"img-responsive\" src=\"";
                // line 70
                if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_consult_, "webchatURI", array())), "html", null, true);
                echo "\" alt=\"\">
      </div>
    ";
            }
            // line 73
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 73,  251 => 70,  248 => 69,  245 => 68,  241 => 66,  229 => 64,  225 => 63,  210 => 61,  202 => 60,  193 => 58,  190 => 57,  184 => 53,  175 => 50,  168 => 47,  165 => 46,  162 => 45,  159 => 44,  152 => 41,  149 => 40,  146 => 39,  139 => 36,  135 => 35,  131 => 33,  124 => 32,  120 => 30,  115 => 27,  108 => 26,  100 => 22,  91 => 21,  88 => 20,  80 => 16,  71 => 15,  68 => 14,  64 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  41 => 8,  38 => 7,  30 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
