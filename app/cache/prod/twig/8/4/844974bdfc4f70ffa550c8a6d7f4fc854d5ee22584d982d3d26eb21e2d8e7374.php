<?php

/* TopxiaWebBundle:Login:index.html.twig */
class __TwigTemplate_844974bdfc4f70ffa550c8a6d7f4fc854d5ee22584d982d3d26eb21e2d8e7374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Login:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 7
            echo " <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\" data-url=\"";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\" ><span class=\"receive-modal\"></span></a>
";
        }
        // line 9
        echo "<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a class=\"active\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录帐号"), "html", null, true);
        echo "</a>
    <a href=\"";
        // line 12
        if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => $__target_path_)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册帐号"), "html", null, true);
        echo "</a>
  </div>
  <div class=\"login-main\">
    <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

      ";
        // line 17
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 18
            echo "        <div class=\"alert alert-danger\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "message", array())), "html", null, true);
            echo "</div>
      ";
        }
        // line 20
        echo "      ";
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_username\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("帐号"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 24
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" required placeholder='";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱/手机/用户名"), "html", null, true);
        echo "' />
          <div class=\"help-block\"></div>
        </div>
      </div>
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("密码"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("密码"), "html", null, true);
        echo "'/>
        </div>
      </div>

      <div class=\"form-group mbl\">
        <div class=\"controls\">
          <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("记住密码"), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"form-group mbl\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
        echo "</button>
      </div>

      <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 44
        if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
        echo twig_escape_filter($this->env, $__target_path_, "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>

    <div class=\"mbl\">
      <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("找回密码"), "html", null, true);
        echo "</a>
      <span class=\"text-muted mhs\">|</span>
      <span class=\"text-muted\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有注册帐号？"), "html", null, true);
        echo "</span>
      <a href=\"";
        // line 52
        if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => $__target_path_)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即注册"), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 55
        if ($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.enabled")) {
            // line 56
            echo "      <div class=\"social-login\">
        <span>
          ";
            // line 58
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => $__target_path_)));
            echo "
        </span>
        <div class=\"line\"></div>
      </div>
    ";
        }
        // line 63
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 63,  173 => 58,  169 => 56,  167 => 55,  158 => 52,  154 => 51,  147 => 49,  140 => 45,  135 => 44,  129 => 41,  122 => 37,  113 => 31,  108 => 29,  97 => 24,  92 => 22,  85 => 20,  78 => 18,  75 => 17,  70 => 15,  61 => 12,  57 => 11,  53 => 9,  46 => 7,  43 => 6,  40 => 5,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
