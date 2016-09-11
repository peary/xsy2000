<?php

/* TopxiaWebBundle:My:avatar-alert.html.twig */
class __TwigTemplate_aa262f31b28773af18a862ab72ac65f1ace1cf0e4d6267b02ac2878d5b3ba8e5 extends Twig_Template
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
        if (isset($context["avatarAlert"])) { $_avatarAlert_ = $context["avatarAlert"]; } else { $_avatarAlert_ = null; }
        if ($_avatarAlert_) {
            // line 2
            echo " <div class=\"alert alert-warning alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <strong>您还没有头像</strong>。拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\" class=\"alert-link\" target=\"_blank\">点击设置</a>
 </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:avatar-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,  19 => 1,);
    }
}
