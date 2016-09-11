<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-belong-classrooms.html.twig */
class __TwigTemplate_956c3e39d3b45e2bf98e9597679e9452d66aff0439f1d77379ae0b5c612b6aa0 extends Twig_Template
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
        if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
        if ($_classrooms_) {
            // line 2
            echo "  <div class=\"panel panel-default belongs-class\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"> <i class=\"es-icon es-icon-locallibrary\"></i>
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所属"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
            echo "
      </h3>
    </div>
    <div class=\"panel-body\">
      ";
            // line 9
            if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_classrooms_);
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 10
                echo "        <div class=\"media\">
          <div class=\"media-left\">
            <a href=\"";
                // line 12
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_classroom_, "smallPicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"\"></a>
          </div>
          <div class=\"media-body\">
            <a href=\"";
                // line 15
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                echo "\">";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
                echo "</a>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-belong-classrooms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  54 => 15,  44 => 12,  40 => 10,  35 => 9,  27 => 5,  22 => 2,  19 => 1,);
    }
}
