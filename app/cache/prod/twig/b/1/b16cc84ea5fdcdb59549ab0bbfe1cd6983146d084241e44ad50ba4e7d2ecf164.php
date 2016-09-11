<?php

/* OrgBundle:Org/Parts:table-body-td.html.twig */
class __TwigTemplate_b16cc84ea5fdcdb59549ab0bbfe1cd6983146d084241e44ad50ba4e7d2ecf164 extends Twig_Template
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
            echo "\t <td>
\t    ";
            // line 3
            if (isset($context["orgCode"])) { $_orgCode_ = $context["orgCode"]; } else { $_orgCode_ = null; }
            $context["org"] = $this->env->getExtension('topxia_data_twig')->getData("Org", array("orgCode" => $_orgCode_));
            // line 4
            echo "\t    ";
            if (isset($context["org"])) { $_org_ = $context["org"]; } else { $_org_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_org_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_org_, "name", array()), "--")) : ("--")), "html", null, true);
            echo "
\t  </td>
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-body-td.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
