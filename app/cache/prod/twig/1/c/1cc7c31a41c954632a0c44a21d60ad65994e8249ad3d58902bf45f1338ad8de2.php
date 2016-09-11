<?php

/* TopxiaWebBundle:Attachment/Widget:list.html.twig */
class __TwigTemplate_1cc7c31a41c954632a0c44a21d60ad65994e8249ad3d58902bf45f1338ad8de2 extends Twig_Template
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
        if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
        if (((array_key_exists("attachments", $context)) ? (_twig_default_filter($_attachments_, null)) : (null))) {
            // line 2
            echo "\t";
            if (isset($context["attachments"])) { $_attachments_ = $context["attachments"]; } else { $_attachments_ = null; }
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
            $context["attachments"] = (($this->getAttribute($_attachments_, ($_targetType_ . $_targetId_), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_attachments_, ($_targetType_ . $_targetId_), array(), "array"), null)) : (null));
        } else {
            // line 4
            echo "\t";
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
            $context["attachments"] = $this->env->getExtension('topxia_data_twig')->getData("AttachmentList", array("targetType" => $_targetType_, "targetId" => $_targetId_));
        }
        // line 6
        $this->loadTemplate("TopxiaWebBundle:Attachment:list.html.twig", "TopxiaWebBundle:Attachment/Widget:list.html.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Attachment/Widget:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 4,  22 => 2,  19 => 1,);
    }
}
