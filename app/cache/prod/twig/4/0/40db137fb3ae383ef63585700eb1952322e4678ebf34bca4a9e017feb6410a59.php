<?php

/* TopxiaWebBundle:CourseStudentManage:show-modal.html.twig */
class __TwigTemplate_40db137fb3ae383ef63585700eb1952322e4678ebf34bca4a9e017feb6410a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:show-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人详细信息"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<table class=\"table table-striped table-condenseda table-bordered\">
\t<tr>
\t\t<th width=\"25%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "</th>
\t\t<td width=\"75%\">
\t\t\t<a class=\"pull-right\" href=\"";
        // line 11
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人主页"), "html", null, true);
        echo "</a>
\t\t\t";
        // line 12
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
        echo "
\t\t</td>
\t</tr>

\t<tr>
\t\t<th>Email</th>
\t\t<td>
\t\t  ";
        // line 19
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($_user_, "email", array()), "@");
        // line 20
        echo "\t      ";
        if (isset($context["emailArr"])) { $_emailArr_ = $context["emailArr"]; } else { $_emailArr_ = null; }
        if (($this->getAttribute($_emailArr_, 1, array(), "array") != "edusoho.net")) {
            // line 21
            echo "\t        ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email", array()), "html", null, true);
            echo "
\t      ";
        } else {
            // line 23
            echo "\t        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t      ";
        }
        // line 25
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("姓名"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 31
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "truename", array())) {
            // line 32
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "truename", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 36
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("性别"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 42
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (($this->getAttribute($_profile_, "gender", array()) == "mail")) {
            // line 43
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("男"), "html", null, true);
            echo "
\t\t\t";
        } elseif (($this->getAttribute($_profile_, "gender", array()) == "femail")) {
            // line 45
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("女"), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 49
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公司"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 55
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "company", array())) {
            // line 56
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "company", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 60
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("职业"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 66
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "job", array())) {
            // line 67
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "job", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 71
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头衔"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t";
        // line 77
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "title", array())) {
            // line 78
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "title", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 82
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("电话"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t";
        // line 88
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "mobile", array())) {
            // line 89
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "mobile", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 93
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人签名"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t";
        // line 99
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "signature", array())) {
            // line 100
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "signature", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 102
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 104
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("自我介绍"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t";
        // line 110
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "about", array())) {
            // line 111
            echo "\t\t\t\t<div class=\"editor-text\">
\t\t\t\t";
            // line 112
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo $this->getAttribute($_profile_, "about", array());
            echo "
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 115
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 117
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人网站"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 123
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "site", array())) {
            // line 124
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "site", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 128
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("微博"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 134
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "weibo", array())) {
            // line 135
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "weibo", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 137
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 139
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("微信"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 145
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "weixin", array())) {
            // line 146
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "weixin", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 150
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>QQ</th>
\t\t<td>
\t\t\t";
        // line 156
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "qq", array())) {
            // line 157
            echo "\t\t\t\t";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "qq", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 159
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 161
        echo "\t\t</td>
\t</tr>
";
        // line 163
        if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
        if ($_userFields_) {
            // line 164
            echo "\t";
            if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_userFields_);
            foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                // line 165
                echo "\t<tr>
\t\t<th width=\"25%\">";
                // line 166
                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title", array()), "html", null, true);
                echo "</th>
\t\t<td>
\t\t\t";
                // line 168
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                if ($this->getAttribute($_profile_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array")) {
                    // line 169
                    echo "\t\t\t\t";
                    if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                    if (($this->getAttribute($_userField_, "type", array()) == "date")) {
                        // line 170
                        echo "\t\t\t\t\t";
                        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                        if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_profile_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array"), "Y-m-d"), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 172
                        echo "\t\t\t\t\t";
                        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                        if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, $this->getAttribute($_userField_, "fieldName", array()), array(), "array"), "html", null, true);
                        echo "
\t\t\t\t";
                    }
                    // line 174
                    echo "\t\t  ";
                } else {
                    // line 175
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
                    echo "
\t\t  ";
                }
                // line 177
                echo "\t\t</td>
\t</tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "  ";
        }
        // line 181
        echo "  </table>
</table>

";
    }

    // line 186
    public function block_footer($context, array $blocks = array())
    {
        // line 187
        echo "\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 187,  489 => 186,  482 => 181,  479 => 180,  471 => 177,  465 => 175,  462 => 174,  454 => 172,  446 => 170,  442 => 169,  438 => 168,  432 => 166,  429 => 165,  423 => 164,  420 => 163,  416 => 161,  410 => 159,  403 => 157,  400 => 156,  392 => 150,  386 => 148,  379 => 146,  376 => 145,  371 => 143,  365 => 139,  359 => 137,  352 => 135,  349 => 134,  344 => 132,  338 => 128,  332 => 126,  325 => 124,  322 => 123,  317 => 121,  311 => 117,  305 => 115,  298 => 112,  295 => 111,  292 => 110,  287 => 108,  281 => 104,  275 => 102,  268 => 100,  265 => 99,  260 => 97,  254 => 93,  248 => 91,  241 => 89,  238 => 88,  233 => 86,  227 => 82,  221 => 80,  214 => 78,  211 => 77,  206 => 75,  200 => 71,  194 => 69,  187 => 67,  184 => 66,  179 => 64,  173 => 60,  167 => 58,  160 => 56,  157 => 55,  152 => 53,  146 => 49,  140 => 47,  134 => 45,  128 => 43,  125 => 42,  120 => 40,  114 => 36,  108 => 34,  101 => 32,  98 => 31,  93 => 29,  87 => 25,  81 => 23,  74 => 21,  70 => 20,  67 => 19,  56 => 12,  49 => 11,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
