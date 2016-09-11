<?php

/* OrgBundle:Org:batch-update-org-btn.html.twig */
class __TwigTemplate_b536ce5641bf526ed63301ea996845be193b6fed7faf6c365c043467c3cb0b0c extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t";
            $this->env->getExtension('topxia_web_twig')->loadScript("orgbundle/controller/org/batch-org-btn");
            // line 3
            echo "\t";
            if (isset($context["generate"])) { $_generate_ = $context["generate"]; } else { $_generate_ = null; }
            $context["generate"] = (((array_key_exists("generate", $context)) ? (_twig_default_filter($_generate_, "generate")) : ("generate")) != "no-generate");
            // line 4
            echo "\t";
            if (isset($context["generate"])) { $_generate_ = $context["generate"]; } else { $_generate_ = null; }
            if ($_generate_) {
                // line 5
                echo "\t\t<div>
\t    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
\t";
            }
            // line 8
            echo "  \t<a class=\"btn btn-default btn-sm ";
            if (isset($context["generate"])) { $_generate_ = $context["generate"]; } else { $_generate_ = null; }
            if ($_generate_) {
                echo " mlm ";
            }
            echo "\" id=\"batch-update-org\" data-form-id=\"";
            if (isset($context["formId"])) { $_formId_ = $context["formId"]; } else { $_formId_ = null; }
            echo twig_escape_filter($this->env, $_formId_, "html", null, true);
            echo "\" data-toggle=\"modal\" data-generate=\"";
            if (isset($context["generate"])) { $_generate_ = $context["generate"]; } else { $_generate_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("generate", $context)) ? (_twig_default_filter($_generate_, false)) : (false)), "html", null, true);
            echo "\" data-target=\"#modal\" data-url=\"";
            if (isset($context["module"])) { $_module_ = $context["module"]; } else { $_module_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_update_org", array("module" => $_module_)), "html", null, true);
            echo "\">设置组织机构</a>
\t";
            // line 9
            if (isset($context["generate"])) { $_generate_ = $context["generate"]; } else { $_generate_ = null; }
            if ($_generate_) {
                // line 10
                echo "\t  </div>
\t";
            }
            // line 12
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org:batch-update-org-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  57 => 10,  54 => 9,  37 => 8,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
