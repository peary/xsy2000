<?php

/* TopxiaWebBundle:Course:archive.html.twig */
class __TwigTemplate_ea485b06d2c6e16a117cbea6dbbe30000b80c18d79cea1a6f449d99a9c89c684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:archive.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程存档"), "html", null, true);
        echo " -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程存档"), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"es-section\">
    <div class=\"section-header\"><h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程存档"), "html", null, true);
        echo "</h1></div>
    ";
        // line 8
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 9
            echo "      <ul class=\"media-list\">
        ";
            // line 10
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_courses_);
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 11
                echo "          ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["teacher"] = (($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds", array())), array(), "array"), null)) : (null));
                // line 12
                echo "          ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["tags"] = $this->getAttribute($_course_, "tags", array());
                // line 13
                echo "          <li class=\"media\">
            <h4><a href=\"";
                // line 14
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_archive_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
                echo "</a></h4>
            <div class=\"fsn text-muted\">
              ";
                // line 16
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                if ($_teacher_) {
                    // line 17
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师："), "html", null, true);
                    echo " <a class=\"teacher-nickname mrl\" href=\"";
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id", array()))), "html", null, true);
                    echo "\">";
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname", array()), "html", null, true);
                    echo "</a>
              ";
                }
                // line 19
                echo "              ";
                if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                if ($_tags_) {
                    // line 20
                    echo "                <span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标签："), "html", null, true);
                    echo "</span>
                ";
                    // line 21
                    if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_tags_);
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 22
                        echo "                  <a href=\"";
                        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($_tag_, "name", array()))), "html", null, true);
                        echo "\" class=\"mrs\">";
                        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name", array()), "html", null, true);
                        echo "</a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "              ";
                }
                // line 25
                echo "            </div>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "      </ul>
    ";
        } else {
            // line 30
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("目前暂时无课程"), "html", null, true);
            echo "</div>
    ";
        }
        // line 32
        echo "    <nav class=\"text-center\">
      ";
        // line 33
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 33,  155 => 32,  149 => 30,  145 => 28,  137 => 25,  134 => 24,  121 => 22,  116 => 21,  111 => 20,  107 => 19,  95 => 17,  92 => 16,  83 => 14,  80 => 13,  76 => 12,  71 => 11,  66 => 10,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  50 => 5,  45 => 4,  39 => 3,  31 => 2,  11 => 1,);
    }
}
