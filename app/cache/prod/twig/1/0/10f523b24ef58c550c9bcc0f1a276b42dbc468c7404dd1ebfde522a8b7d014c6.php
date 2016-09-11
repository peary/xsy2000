<?php

/* OrgBundle:Org/Parts:table-thead-tr.html.twig */
class __TwigTemplate_10f523b24ef58c550c9bcc0f1a276b42dbc468c7404dd1ebfde522a8b7d014c6 extends Twig_Template
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
            echo "\t<th width=\"15%\">所属组织机构</th>
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-thead-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
