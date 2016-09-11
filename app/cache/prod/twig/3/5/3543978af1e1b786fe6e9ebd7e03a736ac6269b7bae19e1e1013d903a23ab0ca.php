<?php

/* TopxiaAdminBundle::macro.html.twig */
class __TwigTemplate_3543978af1e1b786fe6e9ebd7e03a736ac6269b7bae19e1e1013d903a23ab0ca extends Twig_Template
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
        // line 31
        echo "
";
    }

    // line 1
    public function getuser_link($__user__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($_user_) {
                // line 3
                echo "\t\t<a ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if ($_class_) {
                    echo "class=\"";
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                    echo "\"";
                }
                echo " href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                echo "\">";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
                echo "</a>
\t";
            } else {
                // line 5
                echo "\t  <span class=\"text-muted\">用户已删除</span>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getbytesToSize($__bytes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "\t";
            ob_start();
            // line 11
            echo "\t    
\t    ";
            // line 12
            $context["kilobyte"] = 1024;
            // line 13
            echo "\t    ";
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            $context["megabyte"] = ($_kilobyte_ * 1024);
            // line 14
            echo "\t    ";
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            $context["gigabyte"] = ($_megabyte_ * 1024);
            // line 15
            echo "\t    ";
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            $context["terabyte"] = ($_gigabyte_ * 1024);
            // line 16
            echo "
\t    ";
            // line 17
            if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
            if (($_bytes_ < $_kilobyte_)) {
                // line 18
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                echo twig_escape_filter($this->env, ($_bytes_ . " B"), "html", null, true);
                echo "
\t    ";
            } elseif (($_bytes_ < $_megabyte_)) {
                // line 20
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_kilobyte_), 2, ".") . " KB"), "html", null, true);
                echo "
\t    ";
            } elseif (($_bytes_ < $_gigabyte_)) {
                // line 22
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_megabyte_), 2, ".") . " MB"), "html", null, true);
                echo "
\t    ";
            } elseif (($_bytes_ < $_terabyte_)) {
                // line 24
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_gigabyte_), 2, ".") . " GB"), "html", null, true);
                echo "
\t    ";
            } else {
                // line 26
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_terabyte_), 2, ".") . " TB"), "html", null, true);
                echo "
\t    ";
            }
            // line 28
            echo "
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
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
            // line 33
            echo "  ";
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            if (($this->getAttribute($_paginator_, "lastPage", array()) > 1)) {
                // line 34
                echo "    <nav class=\"admin-pagination ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 36
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($this->getAttribute($_paginator_, "currentPage", array()) != $this->getAttribute($_paginator_, "firstPage", array()))) {
                    // line 37
                    echo "          <li><a  href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "firstPage", array())), "method"), "html", null, true);
                    echo "\">首页</a></li>
          <li><a  href=\"";
                    // line 38
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 40
                echo "        ";
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_paginator_, "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 41
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
                // line 43
                echo "
        ";
                // line 44
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($this->getAttribute($_paginator_, "currentPage", array()) != $this->getAttribute($_paginator_, "lastPage", array()))) {
                    // line 45
                    echo "          <li><a  href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"";
                    // line 46
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">尾页</a></li>
        ";
                }
                // line 48
                echo "      </ul>
      <span class=\"page-num\">
\t\t\t\t";
                // line 50
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                echo twig_escape_filter($this->env, ((($this->getAttribute($_paginator_, "currentPage", array()) - 1) * $this->getAttribute($_paginator_, "perPageCount", array())) + 1), "html", null, true);
                echo "
      \t-
\t      ";
                // line 52
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($this->getAttribute($_paginator_, "currentPage", array()) == $this->getAttribute($_paginator_, "lastPage", array()))) {
                    // line 53
                    echo "\t        ";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "itemCount", array()), "html", null, true);
                    echo "
\t      ";
                } else {
                    // line 55
                    echo "\t        ";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, ($this->getAttribute($_paginator_, "currentPage", array()) * $this->getAttribute($_paginator_, "perPageCount", array())), "html", null, true);
                    echo "
\t      ";
                }
                // line 57
                echo "\t      / ";
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "itemCount", array()), "html", null, true);
                echo "
\t    </span>
    </nav>
    
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 57,  272 => 55,  265 => 53,  262 => 52,  256 => 50,  252 => 48,  246 => 46,  240 => 45,  237 => 44,  234 => 43,  214 => 41,  208 => 40,  202 => 38,  196 => 37,  193 => 36,  186 => 34,  182 => 33,  169 => 32,  156 => 28,  148 => 26,  140 => 24,  132 => 22,  124 => 20,  117 => 18,  110 => 17,  107 => 16,  103 => 15,  99 => 14,  95 => 13,  93 => 12,  90 => 11,  87 => 10,  75 => 9,  62 => 5,  44 => 3,  40 => 2,  27 => 1,  22 => 31,  19 => 8,);
    }
}
