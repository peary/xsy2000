<?php

/* TopxiaWebBundle:Attachment:form-fields.html.twig */
class __TwigTemplate_5f81a31575d03fbc523e2ed3c9029d472fe33dfd19ae00b816b9fa99e5bd64be extends Twig_Template
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
        if (isset($context["target"])) { $_target_ = $context["target"]; } else { $_target_ = null; }
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("cloud_attachment.enable") && $this->env->getExtension('topxia_web_twig')->getSetting(("cloud_attachment." . $_target_))) && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 2
            echo "  ";
            $this->env->getExtension('topxia_web_twig')->loadScript("topxiawebbundle/controller/attachment/upload-form");
            // line 3
            echo "  
  ";
            // line 4
            if (isset($context["useType"])) { $_useType_ = $context["useType"]; } else { $_useType_ = null; }
            if (isset($context["fileType"])) { $_fileType_ = $context["fileType"]; } else { $_fileType_ = null; }
            $context["ids_class"] = ((($_useType_ == true)) ? (("js-attachment-ids-" . $_fileType_)) : ("js-attachment-ids"));
            // line 5
            echo "  ";
            if (isset($context["useType"])) { $_useType_ = $context["useType"]; } else { $_useType_ = null; }
            if (isset($context["fileType"])) { $_fileType_ = $context["fileType"]; } else { $_fileType_ = null; }
            $context["list_class"] = ((($_useType_ == true)) ? (("js-attachment-list-" . $_fileType_)) : ("js-attachment-list"));
            // line 6
            echo "  ";
            if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
            $context["reupload"] = twig_length_filter($this->env, ((array_key_exists("attachments", $context)) ? (_twig_default_filter($_attachments_, null)) : (null)));
            // line 7
            echo "  
  <div class=\"form-group\">
    ";
            // line 9
            if (isset($context["showLabel"])) { $_showLabel_ = $context["showLabel"]; } else { $_showLabel_ = null; }
            if (((array_key_exists("showLabel", $context)) ? (_twig_default_filter($_showLabel_, false)) : (false))) {
                // line 10
                echo "      <label class=\"col-xs-2 control-label\" for=\"thread_title\">";
                if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
                if (($_targetType_ == "question.stem")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题干附件"), "html", null, true);
                } elseif (($_targetType_ == "question.analysis")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("解析附件"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("附件"), "html", null, true);
                }
                echo "</label>
      <div class=\"col-xs-7 controls\">
    ";
            } else {
                // line 13
                echo "      <div class=\"controls\"> 
    ";
            }
            // line 15
            echo "      <div class=\"js-attachment-list ";
            if (isset($context["list_class"])) { $_list_class_ = $context["list_class"]; } else { $_list_class_ = null; }
            echo twig_escape_filter($this->env, $_list_class_, "html", null, true);
            echo "\" style=\"inline-height:60px\">
        ";
            // line 16
            if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attachments_);
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                if ($this->getAttribute($_attachment_, "file", array())) {
                    // line 17
                    echo "          <div class=\"well well-sm\">
            <img class=\"mrm\" src=\"";
                    // line 18
                    if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/img/default/cloud_" . $this->getAttribute($this->getAttribute($_attachment_, "file", array()), "type", array())) . ".png")), "html", null, true);
                    echo "\" height=\"60px\" width=\"107px\">
            ";
                    // line 19
                    if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_attachment_, "file", array()), "filename", array()), "html", null, true);
                    echo "
            <button class=\"btn btn-link js-attachment-delete pull-right\" data-url=\"";
                    // line 20
                    if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attachment_delete", array("id" => $this->getAttribute($_attachment_, "id", array()))), "html", null, true);
                    echo "\" type=\"button\" style=\"margin-top:13px\">删除</button> 
             <a class=\"btn btn-link pull-right\" style=\"margin-top:13px\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 21
                    if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attachment_preview", array("id" => $this->getAttribute($_attachment_, "id", array()))), "html", null, true);
                    echo "\">预览</a>
          </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "      </div>
      <a class=\"btn btn-primary js-upload-file  ";
            // line 25
            if (isset($context["reupload"])) { $_reupload_ = $context["reupload"]; } else { $_reupload_ = null; }
            if ($_reupload_) {
                echo " hidden ";
            }
            echo "\" data-toggle=\"modal\" data-backdrop=\"static\"
         data-target=\"#modal\"
         data-url=\"";
            // line 27
            if (isset($context["ids_class"])) { $_ids_class_ = $context["ids_class"]; } else { $_ids_class_ = null; }
            if (isset($context["list_class"])) { $_list_class_ = $context["list_class"]; } else { $_list_class_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("attachment_upload", array("idsClass" => $_ids_class_, "listClass" => $_list_class_, "token" => $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken("attachment", $this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()), "private"))), "html", null, true);
            echo "\"
         title=\"上传附件\" data-placement=\"bottom\" data-title=\"上传附件\">
         上传附件
      </a>
    </div>
    ";
            // line 33
            echo "    
    <input class=\"";
            // line 34
            if (isset($context["ids_class"])) { $_ids_class_ = $context["ids_class"]; } else { $_ids_class_ = null; }
            echo twig_escape_filter($this->env, $_ids_class_, "html", null, true);
            echo "\" 
      value=\"";
            // line 35
            if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
            echo twig_escape_filter($this->env, twig_join_filter($this->env->getExtension('topxia_web_twig')->arrayColumn($_attachments_, "fileId"), ","), "html", null, true);
            echo "\" 
      name=\"";
            // line 36
            if (isset($context["useType"])) { $_useType_ = $context["useType"]; } else { $_useType_ = null; }
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter($_useType_, false)) : (false))) {
                echo " attachment[";
                if (isset($context["fileType"])) { $_fileType_ = $context["fileType"]; } else { $_fileType_ = null; }
                echo twig_escape_filter($this->env, $_fileType_, "html", null, true);
                echo "][fileIds] ";
            } else {
                echo " attachment[fileIds]";
            }
            echo "\" 
      type=\"hidden\">

    <input class=\"js-file-target-type\" 
      value=\"";
            // line 40
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
            echo "\" 
      name=\"";
            // line 41
            if (isset($context["useType"])) { $_useType_ = $context["useType"]; } else { $_useType_ = null; }
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter($_useType_, false)) : (false))) {
                echo " attachment[";
                if (isset($context["fileType"])) { $_fileType_ = $context["fileType"]; } else { $_fileType_ = null; }
                echo twig_escape_filter($this->env, $_fileType_, "html", null, true);
                echo "][targetType] ";
            } else {
                echo " attachment[targetType]";
            }
            echo "\"
      type=\"hidden\">

    <input class=\"js-file-type\" 
      value=\"";
            // line 45
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\" 
      name=\"";
            // line 46
            if (isset($context["useType"])) { $_useType_ = $context["useType"]; } else { $_useType_ = null; }
            if (((array_key_exists("useType", $context)) ? (_twig_default_filter($_useType_, false)) : (false))) {
                echo " attachment[";
                if (isset($context["fileType"])) { $_fileType_ = $context["fileType"]; } else { $_fileType_ = null; }
                echo twig_escape_filter($this->env, $_fileType_, "html", null, true);
                echo "][type] ";
            } else {
                echo " attachment[type]";
            }
            echo "\"
      type=\"hidden\">
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Attachment:form-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 46,  178 => 45,  163 => 41,  158 => 40,  143 => 36,  138 => 35,  133 => 34,  130 => 33,  119 => 27,  111 => 25,  108 => 24,  97 => 21,  92 => 20,  87 => 19,  82 => 18,  79 => 17,  72 => 16,  66 => 15,  62 => 13,  48 => 10,  45 => 9,  41 => 7,  37 => 6,  32 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
