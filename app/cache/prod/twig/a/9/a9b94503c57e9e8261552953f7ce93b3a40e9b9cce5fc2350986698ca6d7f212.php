<?php

/* TopxiaAdminBundle:CommonAdmin:main.html.twig */
class __TwigTemplate_a9b94503c57e9e8261552953f7ce93b3a40e9b9cce5fc2350986698ca6d7f212 extends Twig_Template
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
        if (isset($context["isCollect"])) { $_isCollect_ = $context["isCollect"]; } else { $_isCollect_ = null; }
        if (($_isCollect_ == 0)) {
            // line 2
            echo "  <li class=\"shortcut-add\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_common_add");
            echo "\"><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-plus\"></i> 添加当前页面为常用功能</a></li>
";
        } else {
            // line 4
            echo "  <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-ok text-muted\"></i> <span class=\"text-muted\">当前页面已添加</span></a></li>
";
        }
        // line 6
        echo "
";
        // line 7
        if (isset($context["admins"])) { $_admins_ = $context["admins"]; } else { $_admins_ = null; }
        if ($_admins_) {
            // line 8
            echo "  <li role=\"presentation\" class=\"divider\"></li>
";
        }
        // line 10
        echo "
";
        // line 11
        if (isset($context["admins"])) { $_admins_ = $context["admins"]; } else { $_admins_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_admins_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 12
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:CommonAdmin:li.html.twig", "TopxiaAdminBundle:CommonAdmin:main.html.twig", 12)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CommonAdmin:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  45 => 11,  42 => 10,  38 => 8,  35 => 7,  32 => 6,  28 => 4,  22 => 2,  19 => 1,);
    }
}
