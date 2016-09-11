<?php

/* ClassroomBundle:Classroom:service-block.html.twig */
class __TwigTemplate_0021a261d79a0eb07ff729ed2583415137db9e7dbd9c34037987af63f1bf6c50 extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/service-block");
        // line 3
        echo "
<ul class=\"list-unstyled clearfix\">
  ";
        // line 5
        $context["defaultServices"] = twig_get_array_keys_filter($this->env->getExtension('topxia_web_twig')->getDict("classroomService"));
        // line 6
        echo "  ";
        if (isset($context["services"])) { $_services_ = $context["services"]; } else { $_services_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_services_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 7
            echo "    ";
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            $this->loadTemplate((("ClassroomBundle:Classroom/Part/Service:" . $_service_) . ".html.twig"), "ClassroomBundle:Classroom:service-block.html.twig", 7)->display(array_merge($context, array("active" => true)));
            // line 8
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  
  ";
        // line 10
        if (isset($context["defaultServices"])) { $_defaultServices_ = $context["defaultServices"]; } else { $_defaultServices_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_defaultServices_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            if (isset($context["services"])) { $_services_ = $context["services"]; } else { $_services_ = null; }
            if (!twig_in_filter($_service_, $_services_)) {
                // line 11
                echo "    ";
                if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
                $this->loadTemplate((("ClassroomBundle:Classroom/Part/Service:" . $_service_) . ".html.twig"), "ClassroomBundle:Classroom:service-block.html.twig", 11)->display(array_merge($context, array("active" => false)));
                // line 12
                echo "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:service-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  88 => 12,  84 => 11,  70 => 10,  67 => 9,  53 => 8,  49 => 7,  30 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
