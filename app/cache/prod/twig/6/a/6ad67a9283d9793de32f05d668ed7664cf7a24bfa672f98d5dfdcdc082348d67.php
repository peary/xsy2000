<?php

/* TopxiaWebBundle:Announcement:announcement.html.twig */
class __TwigTemplate_6ad67a9283d9793de32f05d668ed7664cf7a24bfa672f98d5dfdcdc082348d67 extends Twig_Template
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
        $context["announcements"] = $this->env->getExtension('topxia_data_twig')->getData("Announcement", array("count" => 3));
        // line 2
        if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($_announcements_ &&  !$this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "cookies", array()), "get", array(0 => "close_announcements_alert"), "method"))) {
            // line 3
            echo "<div class=\"alert alert-warning alert-notice announcements-alert hidden-xs\" role=\"alert\">
  <div class=\"container swiper-container\">
    <div class=\"swiper-wrapper\">
      ";
            // line 6
            if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_announcements_);
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 7
                echo "        ";
                if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                if ($this->getAttribute($_announcement_, "url", array())) {
                    // line 8
                    echo "        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"";
                    // line 10
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_announcement_, "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">
            ";
                    // line 11
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_announcement_, "content", array()), 50);
                    echo "
          </a>
        </div>
        ";
                } else {
                    // line 15
                    echo "        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          ";
                    // line 17
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_announcement_, "content", array()), 50);
                    echo "
        </div>
        ";
                }
                // line 20
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">×</span>
    </button> 
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  67 => 20,  60 => 17,  56 => 15,  48 => 11,  43 => 10,  39 => 8,  35 => 7,  30 => 6,  25 => 3,  21 => 2,  19 => 1,);
    }
}
