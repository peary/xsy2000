<?php

/* OrgBundle:Org:course-create-org-tree-select.html.twig */
class __TwigTemplate_e4107cd345e1d74f6c1c73a986defba5ceab5d99bea5e2c454c8bbb22857f559 extends Twig_Template
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
            echo " 
  
  ";
            // line 4
            echo "  ";
            // line 5
            echo "
  ";
            // line 6
            if (isset($context["modal"])) { $_modal_ = $context["modal"]; } else { $_modal_ = null; }
            $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter($_modal_, null)) : (null));
            // line 7
            echo "
  ";
            // line 8
            if (isset($context["modal"])) { $_modal_ = $context["modal"]; } else { $_modal_ = null; }
            if (($_modal_ == "modal")) {
                // line 9
                echo "    <script>app.load('topxiawebbundle/controller/widget/category-select')</script>
  ";
            } else {
                // line 11
                echo "    ";
                $this->env->getExtension('topxia_web_twig')->loadScript("topxiawebbundle/controller/widget/category-select");
                // line 12
                echo "  ";
            }
            // line 13
            echo "
  ";
            // line 14
            if (isset($context["colmd"])) { $_colmd_ = $context["colmd"]; } else { $_colmd_ = null; }
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter($_colmd_, 8)) : (8));
            // line 15
            echo "  ";
            if (isset($context["lablecolmd"])) { $_lablecolmd_ = $context["lablecolmd"]; } else { $_lablecolmd_ = null; }
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter($_lablecolmd_, 2)) : (2));
            // line 16
            echo "  ";
            if (isset($context["nocolmd"])) { $_nocolmd_ = $context["nocolmd"]; } else { $_nocolmd_ = null; }
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter($_nocolmd_, false)) : (false));
            // line 17
            echo "  ";
            if (isset($context["inputClass"])) { $_inputClass_ = $context["inputClass"]; } else { $_inputClass_ = null; }
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter($_inputClass_, "")) : (""));
            echo " 

  ";
            // line 19
            if (isset($context["orgCode"])) { $_orgCode_ = $context["orgCode"]; } else { $_orgCode_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter($_orgCode_, $this->getAttribute($this->getAttribute($_app_, "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute($_app_, "user", array()), "orgCode", array())));
            // line 20
            echo "  ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["currentOrgCode"])) { $_currentOrgCode_ = $context["currentOrgCode"]; } else { $_currentOrgCode_ = null; }
            $context["currentOrgTree"] = $this->env->getExtension('topxia_data_twig')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute($_app_, "user", array()), "roles", array()))) ? (null) : ($_currentOrgCode_))));
            // line 21
            echo "
    <div class=\"course-title row\">
      <div class=\"col-md-2 controls-label text-lg\">
        <div class=\"course-piece title\">
          ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组织机构"), "html", null, true);
            echo "
        </div>
      </div>
      <div class=\"col-md-10\">
        <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select ";
            // line 29
            if (isset($context["inputClass"])) { $_inputClass_ = $context["inputClass"]; } else { $_inputClass_ = null; }
            echo twig_escape_filter($this->env, $_inputClass_, "html", null, true);
            echo "\">
          ";
            // line 30
            if (isset($context["currentOrgTree"])) { $_currentOrgTree_ = $context["currentOrgTree"]; } else { $_currentOrgTree_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_currentOrgTree_);
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 31
                echo "            <option value=";
                if (isset($context["org"])) { $_org_ = $context["org"]; } else { $_org_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_org_, "orgCode", array()), "html", null, true);
                echo " ";
                if (isset($context["org"])) { $_org_ = $context["org"]; } else { $_org_ = null; }
                if (isset($context["currentOrgCode"])) { $_currentOrgCode_ = $context["currentOrgCode"]; } else { $_currentOrgCode_ = null; }
                if (($this->getAttribute($_org_, "orgCode", array()) == $_currentOrgCode_)) {
                    echo "selected";
                }
                echo ">";
                if (isset($context["org"])) { $_org_ = $context["org"]; } else { $_org_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($_org_, "depth", array()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (isset($context["org"])) { $_org_ = $context["org"]; } else { $_org_ = null; }
                    if (($this->getAttribute($_org_, "depth", array()) > 1)) {
                        echo "　";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                if (isset($context["org"])) { $_org_ = $context["org"]; } else { $_org_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_org_, "name", array()), "html", null, true);
                echo "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </select>
      </div>
    </div>

 ";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org:course-create-org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  101 => 31,  96 => 30,  91 => 29,  84 => 25,  78 => 21,  73 => 20,  69 => 19,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  38 => 9,  35 => 8,  32 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
