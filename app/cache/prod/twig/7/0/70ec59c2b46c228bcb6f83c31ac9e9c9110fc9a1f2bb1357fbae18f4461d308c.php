<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig */
class __TwigTemplate_70ec59c2b46c228bcb6f83c31ac9e9c9110fc9a1f2bb1357fbae18f4461d308c extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $asm89CacheStrategy2 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key2 = $asm89CacheStrategy2->generateKey((("course/" . $this->getAttribute($_course_, "id", array())) . "/sidebar/statuses"), 600        );
        $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
        if ($asm89CacheBody2 === false) {
            ob_start();
                // line 4
                echo "
";
                // line 5
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("LatestStatuses", array("count" => 5, "mode" => "simple", "objectType" => "course", "objectId" => $this->getAttribute($_course_, "id", array())));
                // line 6
                echo "
";
                // line 7
                $this->loadTemplate("TopxiaWebBundle:Status:status-block.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", 7)->display($context);
                // line 8
                echo "
";
            
            $asm89CacheBody2 = ob_get_clean();
            $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
        }
        echo $asm89CacheBody2;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
