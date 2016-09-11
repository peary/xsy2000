<?php

/* TopxiaWebBundle:Announcement:announcement-block.html.twig */
class __TwigTemplate_a8987490c93b73a3495e8246e1958e14809f442f2b5463ad8dd024f303edafd2 extends Twig_Template
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
        echo "
";
        // line 2
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        $context["announcements"] = $this->env->getExtension('topxia_data_twig')->getData("Announcements", array("targetType" => $_targetType_, "targetId" => $_targetId_, "count" => 10));
        // line 3
        if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
        if ($_announcements_) {
            // line 4
            echo "  <div class=\"alert alert-warning announcements aside-notice\" role=\"alert\">
    <div class=\"swiper-container\">
      <div class=\"swiper-wrapper\">
      ";
            // line 7
            if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_announcements_);
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 8
                echo "        <div class=\"swiper-slide\">
          <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                // line 9
                if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
                if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_show", array("id" => $this->getAttribute($_announcement_, "id", array()), "targetType" => $_targetType_, "targetId" => $_targetId_)), "html", null, true);
                echo "\" >
          <i class=\"es-icon es-icon-infooutline\"></i>
          ";
                // line 11
                if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                echo $this->env->getExtension('translator')->trans(_twig_default_filter($this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_announcement_, "content", array()), 40), "<span class=\"text-warning\">(请点击查看)</span>"));
                echo "</a>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      </div>
    </div>
  </div>

  ";
            // line 18
            $this->env->getExtension('topxia_web_twig')->loadScript("announcement/announcement-swiper-slide");
            // line 19
            echo "
";
        }
        // line 21
        echo "





";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  68 => 19,  66 => 18,  60 => 14,  50 => 11,  42 => 9,  39 => 8,  34 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
