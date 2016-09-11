<?php

/* TopxiaWebBundle:Settings:layout.html.twig */
class __TwigTemplate_353c48517dd584d64cf8c28188ed9a4fa82baadefa9084352fcb14e05acbd2cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Settings:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 8
        $this->displayBlock('side', $context, $blocks);
        // line 51
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 53
        $this->displayBlock('main', $context, $blocks);
        // line 54
        echo "  </div>
</div>
";
    }

    // line 8
    public function block_side($context, array $blocks = array())
    {
        // line 9
        echo "      <div class=\"sidenav\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人设置"), "html", null, true);
        echo "</li>
          ";
        // line 12
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter($_side_nav_, null)) : (null));
        // line 13
        echo "
          <li class=\"list-group-item ";
        // line 14
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "profile")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基础信息"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item ";
        // line 17
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "avatar")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("settings_avatar");
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头像设置"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item ";
        // line 20
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "approval")) {
            echo "active";
        }
        echo "\">
           <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("setting_approval_submit");
        echo "\"><i class=\"glyphicon glyphicon-registration-mark\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item ";
        // line 23
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "security")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全设置"), "html", null, true);
        echo "</a>
          </li>


          ";
        // line 31
        echo "
          <li class=\"list-group-item ";
        // line 32
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "email")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("settings_email");
        echo "\"><i class=\"glyphicon glyphicon-envelope\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱设置"), "html", null, true);
        echo "</a>
          </li>
          
          ";
        // line 36
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("TeacherAudit")) {
            echo "   
          <li class=\"list-group-item ";
            // line 37
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "teacheraudit")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("teacher_audit_submit");
            echo "\"><i class=\"glyphicon glyphicon-bookmark\"></i> 教师资格申请</a>
          </li>
          ";
        }
        // line 41
        echo "          
          ";
        // line 42
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array()), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array()), "enabled", array()), false)) : (false))) {
            // line 43
            echo "            <li class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "binds")) {
                echo "active";
            }
            echo "\" >
              <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("settings_binds");
            echo "\"><i class=\"glyphicon glyphicon-circle-arrow-right\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("第三方登录"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 47
        echo "
        </ul>
      </div>
    ";
    }

    // line 53
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 53,  191 => 47,  183 => 44,  175 => 43,  173 => 42,  170 => 41,  164 => 38,  157 => 37,  153 => 36,  145 => 33,  138 => 32,  135 => 31,  126 => 24,  119 => 23,  112 => 21,  105 => 20,  98 => 18,  91 => 17,  84 => 15,  77 => 14,  74 => 13,  71 => 12,  67 => 11,  63 => 9,  60 => 8,  54 => 54,  52 => 53,  48 => 51,  46 => 8,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
