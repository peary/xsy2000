<?php

/* TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig */
class __TwigTemplate_6b94a48d483d71dbda556dd7e14765d0535d4d8def1cd68c8be9f42b42f76393 extends Twig_Template
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
        echo "<li data-id=\"#bar-homework\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的考试/作业"), "html", null, true);
        echo "\"><a href=\"javascript:;\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\"><i class=\"es-icon es-icon-edit\"></i></a></li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
