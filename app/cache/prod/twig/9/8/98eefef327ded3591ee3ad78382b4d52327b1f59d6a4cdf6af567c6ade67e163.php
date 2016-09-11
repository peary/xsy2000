<?php

/* TopxiaWebBundle::macro.html.twig */
class __TwigTemplate_98eefef327ded3591ee3ad78382b4d52327b1f59d6a4cdf6af567c6ade67e163 extends Twig_Template
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
        // line 35
        echo "
";
        // line 58
        echo "
";
        // line 79
        echo "
";
    }

    // line 1
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($_user_) {
                // line 3
                echo "  <a class=\"";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, $_class_, "html", null, true);
                echo " ";
                if (isset($context["card"])) { $_card_ = $context["card"]; } else { $_card_ = null; }
                if ($_card_) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_card_show", array("userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                echo "\" data-user-id=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
                echo "\">
    ";
                // line 4
                if (isset($context["imgClass"])) { $_imgClass_ = $context["imgClass"]; } else { $_imgClass_ = null; }
                if (($_imgClass_ == "avatar-md")) {
                    // line 5
                    echo "      ";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    $context["userAvatar"] = $this->getAttribute($_user_, "mediumAvatar", array());
                    // line 6
                    echo "    ";
                } elseif (($_imgClass_ == "avatar-lg")) {
                    // line 7
                    echo "      ";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    $context["userAvatar"] = $this->getAttribute($_user_, "largeAvatar", array());
                    // line 8
                    echo "    ";
                } else {
                    // line 9
                    echo "      ";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    $context["userAvatar"] = $this->getAttribute($_user_, "smallAvatar", array());
                    // line 10
                    echo "    ";
                }
                // line 11
                echo "    <img class=\"";
                if (isset($context["imgClass"])) { $_imgClass_ = $context["imgClass"]; } else { $_imgClass_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter($_imgClass_, "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                if (isset($context["userAvatar"])) { $_userAvatar_ = $context["userAvatar"]; } else { $_userAvatar_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($_userAvatar_, "avatar.png"), "html", null, true);
                echo "\">

  </a>
  ";
            } else {
                // line 15
                echo "    <a class=\"";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, $_class_, "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 16
                if (isset($context["imgClass"])) { $_imgClass_ = $context["imgClass"]; } else { $_imgClass_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter($_imgClass_, "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath("", "avatar.png"), "html", null, true);
                echo "\">
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($_user_) {
                // line 23
                echo "    <a class=\"link-dark ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, $_class_, "html", null, true);
                echo "\" href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                echo "\">";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 25
                echo "    <a class=\"link-dark ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, $_class_, "html", null, true);
                echo "\" href=\"javascript:;\"><del>用户不存在</del></a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getflash_messages()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "  ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 30
                echo "    ";
                if (isset($context["flashMessages"])) { $_flashMessages_ = $context["flashMessages"]; } else { $_flashMessages_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_flashMessages_);
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 31
                    echo "      <div class=\"alert alert-";
                    if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                    echo twig_escape_filter($this->env, $_type_, "html", null, true);
                    echo "\">";
                    if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
                    echo $_flashMessage_;
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 36
    public function getbytesToSize($__bytes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 37
            echo "  ";
            ob_start();
            // line 38
            echo "      
      ";
            // line 39
            $context["kilobyte"] = 1024;
            // line 40
            echo "      ";
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            $context["megabyte"] = ($_kilobyte_ * 1024);
            // line 41
            echo "      ";
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            $context["gigabyte"] = ($_megabyte_ * 1024);
            // line 42
            echo "      ";
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            $context["terabyte"] = ($_gigabyte_ * 1024);
            // line 43
            echo "
      ";
            // line 44
            if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
            if (($_bytes_ < $_kilobyte_)) {
                // line 45
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                echo twig_escape_filter($this->env, ($_bytes_ . " B"), "html", null, true);
                echo "
      ";
            } elseif (($_bytes_ < $_megabyte_)) {
                // line 47
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_kilobyte_), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif (($_bytes_ < $_gigabyte_)) {
                // line 49
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_megabyte_), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif (($_bytes_ < $_terabyte_)) {
                // line 51
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_gigabyte_), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 53
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_terabyte_), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 55
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getpaginator($__paginator__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "  ";
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            if (($this->getAttribute($_paginator_, "lastPage", array()) > 1)) {
                // line 61
                echo "    <nav class=\" ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 63
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($this->getAttribute($_paginator_, "currentPage", array()) != $this->getAttribute($_paginator_, "firstPage", array()))) {
                    // line 64
                    echo "          <li><a  href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "firstPage", array())), "method"), "html", null, true);
                    echo "\">首页</a></li>
          <li><a  href=\"";
                    // line 65
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 67
                echo "        ";
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_paginator_, "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 68
                    echo "          <li ";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    if (($_page_ == $this->getAttribute($_paginator_, "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $_page_), "method"), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "
        ";
                // line 71
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($this->getAttribute($_paginator_, "currentPage", array()) != $this->getAttribute($_paginator_, "lastPage", array()))) {
                    // line 72
                    echo "          <li><a  href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"";
                    // line 73
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">尾页</a></li>
        ";
                }
                // line 75
                echo "      </ul>
    </nav>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 80
    public function getstar($__score__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "score" => $__score__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 81
            echo "  ";
            if (isset($context["score"])) { $_score_ = $context["score"]; } else { $_score_ = null; }
            $context["floorScore"] = twig_round($_score_, 0, "floor");
            // line 82
            echo "  ";
            if (isset($context["floorScore"])) { $_floorScore_ = $context["floorScore"]; } else { $_floorScore_ = null; }
            $context["emptyNum"] = (5 - $_floorScore_);
            // line 83
            echo "
  ";
            // line 84
            if (isset($context["floorScore"])) { $_floorScore_ = $context["floorScore"]; } else { $_floorScore_ = null; }
            if (($_floorScore_ > 0)) {
                // line 85
                echo "    ";
                if (isset($context["floorScore"])) { $_floorScore_ = $context["floorScore"]; } else { $_floorScore_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $_floorScore_));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 86
                    echo "      <i class=\"es-icon es-icon-star color-warning\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "  ";
            }
            // line 89
            echo "
  ";
            // line 90
            if (isset($context["score"])) { $_score_ = $context["score"]; } else { $_score_ = null; }
            if (isset($context["floorScore"])) { $_floorScore_ = $context["floorScore"]; } else { $_floorScore_ = null; }
            if ((($_score_ - $_floorScore_) >= 0.5)) {
                // line 91
                echo "    ";
                if (isset($context["emptyNum"])) { $_emptyNum_ = $context["emptyNum"]; } else { $_emptyNum_ = null; }
                $context["emptyNum"] = ($_emptyNum_ - 1);
                // line 92
                echo "    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  ";
            }
            // line 94
            echo "
  ";
            // line 95
            if (isset($context["emptyNum"])) { $_emptyNum_ = $context["emptyNum"]; } else { $_emptyNum_ = null; }
            if (($_emptyNum_ > 0)) {
                // line 96
                echo "    ";
                if (isset($context["emptyNum"])) { $_emptyNum_ = $context["emptyNum"]; } else { $_emptyNum_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $_emptyNum_));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 97
                    echo "      <i class=\"es-icon es-icon-star\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 99,  485 => 97,  479 => 96,  476 => 95,  473 => 94,  469 => 92,  465 => 91,  461 => 90,  458 => 89,  455 => 88,  448 => 86,  442 => 85,  439 => 84,  436 => 83,  432 => 82,  428 => 81,  416 => 80,  402 => 75,  396 => 73,  390 => 72,  387 => 71,  384 => 70,  364 => 68,  358 => 67,  352 => 65,  346 => 64,  343 => 63,  336 => 61,  332 => 60,  319 => 59,  306 => 55,  298 => 53,  290 => 51,  282 => 49,  274 => 47,  267 => 45,  260 => 44,  257 => 43,  253 => 42,  249 => 41,  245 => 40,  243 => 39,  240 => 38,  237 => 37,  225 => 36,  210 => 33,  197 => 31,  191 => 30,  185 => 29,  174 => 28,  158 => 25,  145 => 23,  142 => 22,  128 => 21,  110 => 16,  104 => 15,  92 => 11,  89 => 10,  85 => 9,  82 => 8,  78 => 7,  75 => 6,  71 => 5,  68 => 4,  48 => 3,  45 => 2,  30 => 1,  25 => 79,  22 => 58,  19 => 35,);
    }
}
