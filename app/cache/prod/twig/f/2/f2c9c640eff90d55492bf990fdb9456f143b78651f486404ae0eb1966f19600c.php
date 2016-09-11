<?php

/* OrgBundle:Org:org-tree-select.html.twig */
class __TwigTemplate_f2c9c640eff90d55492bf990fdb9456f143b78651f486404ae0eb1966f19600c extends Twig_Template
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
    <div class=\"form-group ";
            // line 22
            if (isset($context["modal"])) { $_modal_ = $context["modal"]; } else { $_modal_ = null; }
            if (($_modal_ == "list")) {
                echo "controls";
            }
            echo "\">
      ";
            // line 23
            if (isset($context["modal"])) { $_modal_ = $context["modal"]; } else { $_modal_ = null; }
            if (($_modal_ != "list")) {
                // line 24
                echo "      <label class=\"";
                if (isset($context["nocolmd"])) { $_nocolmd_ = $context["nocolmd"]; } else { $_nocolmd_ = null; }
                if ( !$_nocolmd_) {
                    echo " col-md-";
                    if (isset($context["lablecolmd"])) { $_lablecolmd_ = $context["lablecolmd"]; } else { $_lablecolmd_ = null; }
                    echo twig_escape_filter($this->env, $_lablecolmd_, "html", null, true);
                }
                echo " control-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组织机构"), "html", null, true);
                echo "</label>
      <div class=\"";
                // line 25
                if (isset($context["nocolmd"])) { $_nocolmd_ = $context["nocolmd"]; } else { $_nocolmd_ = null; }
                if ( !$_nocolmd_) {
                    echo " col-md-";
                    if (isset($context["colmd"])) { $_colmd_ = $context["colmd"]; } else { $_colmd_ = null; }
                    echo twig_escape_filter($this->env, $_colmd_, "html", null, true);
                    echo " ";
                }
                echo "  controls\">
      ";
            }
            // line 27
            echo "      
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select ";
            // line 28
            if (isset($context["inputClass"])) { $_inputClass_ = $context["inputClass"]; } else { $_inputClass_ = null; }
            echo twig_escape_filter($this->env, $_inputClass_, "html", null, true);
            echo "\">
        ";
            // line 29
            if (isset($context["currentOrgTree"])) { $_currentOrgTree_ = $context["currentOrgTree"]; } else { $_currentOrgTree_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_currentOrgTree_);
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 30
                echo "          <option value=";
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
            // line 32
            echo "      </select>

      ";
            // line 34
            if (isset($context["modal"])) { $_modal_ = $context["modal"]; } else { $_modal_ = null; }
            if (($_modal_ != "list")) {
                // line 35
                echo "      </div>
      ";
            }
            // line 37
            echo "    </div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org:org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 37,  165 => 35,  162 => 34,  158 => 32,  127 => 30,  122 => 29,  117 => 28,  114 => 27,  103 => 25,  91 => 24,  88 => 23,  81 => 22,  78 => 21,  73 => 20,  69 => 19,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  38 => 9,  35 => 8,  32 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
