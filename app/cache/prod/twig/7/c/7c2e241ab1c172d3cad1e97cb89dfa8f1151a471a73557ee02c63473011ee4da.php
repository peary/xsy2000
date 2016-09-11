<?php

/* TopxiaAdminBundle:System:site.html.twig */
class __TwigTemplate_7c2e241ab1c172d3cad1e97cb89dfa8f1151a471a73557ee02c63473011ee4da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:site.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_massage";
        // line 5
        $context["script_controller"] = "setting/site";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\">
  
  <fieldset>
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">网站名称</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 20
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">网站副标题</label> 
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"";
        // line 29
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "slogan", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"url\">网站域名</label> 
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"";
        // line 38
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "url", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">以\"http://\"开头</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">网站LOGO</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">";
        // line 48
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "logo", array())) {
            echo "<img src=\"";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_site_, "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" id=\"site-logo-upload\" 
        data-upload-token=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_setting_logo_upload");
        echo "\">上传</a>
        <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_setting_logo_remove");
        echo "\" ";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ( !$this->getAttribute($_site_, "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过250*50。</p>
        <input type=\"hidden\" name=\"logo\" value=\"";
        // line 54
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "logo", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">浏览器图标</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">";
        // line 63
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "favicon", array())) {
            echo "<img src=\"";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_site_, "favicon", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" 
        id=\"site-favicon-upload\" 
        data-upload-token=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("admin_setting_favicon_upload");
        echo "\">上传</a>
        <button class=\"btn btn-default\" 
        id=\"site-favicon-remove\" 
        type=\"button\" data-url=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("admin_setting_favicon_remove");
        echo "\" ";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ( !$this->getAttribute($_site_, "favicon", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
        <p class=\"help-block\">请上传ico格式的图标文件, 建议大小16*16或者32*32。</p>
        <input type=\"hidden\" name=\"favicon\" value=\"";
        // line 72
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "favicon", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">SEO关键词</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"";
        // line 81
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "seo_keywords", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">设置多个关键词请用半角逗号\",\"隔开。</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">SEO描述信息</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"";
        // line 91
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "seo_description", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"master_email\">管理员邮箱地址</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"master_email\" name=\"master_email\" class=\"form-control\" value=\"";
        // line 100
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "master_email", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">课程内容版权方</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"";
        // line 109
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "copyright", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">您可以填写网站名称或公司名称。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">ICP备案号</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"";
        // line 119
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "icp", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>网站统计分析代码部署</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">统计分析代码</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">";
        // line 135
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "analytics", array()), "html", null, true);
        echo "</textarea>

        <p class=\"help-block\">
          建议使用下列统计分析的一种：
          <a href=\"http://www.google.cn/intl/zh-CN_ALL/analytics/\" target=\"_blank\">谷歌分析</a>、
          <a href=\"http://tongji.baidu.com/\" target=\"_blank\">百度统计</a>、
          <a href=\"http://ta.qq.com/\" target=\"_blank\">腾讯分析</a>、
          <a href=\"http://www.cnzz.com/\" target=\"_blank\">CNZZ</a>。
        </p>
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>站点状态</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >网站状态</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 156
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("status", array("open" => "开放", "closed" => "关闭"), $this->getAttribute($_site_, "status", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>网站关闭公告</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">";
        // line 165
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "closed_note", array()), "html", null, true);
        echo "</textarea>
        <p class=\"help-block\">网站处于关闭状态时，用户访问网站将显示此公告，支持HTML代码。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 177,  293 => 165,  280 => 156,  255 => 135,  235 => 119,  221 => 109,  208 => 100,  195 => 91,  181 => 81,  168 => 72,  158 => 70,  152 => 67,  148 => 66,  136 => 63,  123 => 54,  113 => 52,  109 => 51,  105 => 50,  94 => 48,  80 => 38,  67 => 29,  54 => 20,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
