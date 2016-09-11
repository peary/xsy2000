<?php

/* TopxiaWebBundle:Group:upload-modal.html.twig */
class __TwigTemplate_96b2d935dde140f715e8987e235fdc8728cc5f24761536df264f6d7891633607 extends Twig_Template
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
<div class=\"modal fade\" id=\"uploadModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传附件"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <button class=\"btn btn-default btn-sm upload-img\" style=\"height:33px;\" type=\"button\" data-url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("group_upload", array("group" => "user"));
        echo "\"  >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
        echo "</button>
        ";
        // line 11
        echo $this->env->getExtension('translator')->trans("<span> (大小不能超过<span style=\"color:red;\">2</span>MB，文件类型支持png ,jpg ,gif ,doc ,xls ,txt ,rar ,zip .)</span>");
        echo "

        <table id=\"block-table\" class=\"table table-striped table-condensed mtl\">
          <tr >
          <th width=\"60%\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件名"), "html", null, true);
        echo "</th>
          <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("描述"), "html", null, true);
        echo "</th>
          <th>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")), "html", null, true);
        echo "</th>
          <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
          </tr>
          ";
        // line 20
        if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
        if (((array_key_exists("thread", $context)) ? (_twig_default_filter($_thread_, null)) : (null))) {
            // line 21
            echo "          ";
            if (isset($context["attachs"])) { $_attachs_ = $context["attachs"]; } else { $_attachs_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attachs_);
            foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                // line 22
                echo "            <tr id=\"file-";
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "id", array()), "html", null, true);
                echo "\">
              <td><label class=\"control-label\"><span class=\"glyphicon glyphicon-folder-close\"></span> ";
                // line 23
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "title", array()), "html", null, true);
                echo "</label></td>
              <td><input type=\"hidden\" name=\"id[]\" value=\"";
                // line 24
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "fileId", array()), "html", null, true);
                echo "\"/><input type=\"text\" class=\"form-control\" name=\"description[]\" title=\"";
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "title", array()), "html", null, true);
                echo "\" value=\"";
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "description", array()), "html", null, true);
                echo "\"></td>
              <td><input type=\"text\" name=\"coin[]\" class=\"form-control\" value=\"";
                // line 25
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "coin", array()), "html", null, true);
                echo "\"></td>
              <td><button type=\"button\" class=\"del-file btn btn-default\" data-id=\"";
                // line 26
                if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attach_, "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                echo "</button></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        // line 30
        echo "        </table>
      </div>
      <div class=\"modal-footer\">
          <div class=\"pull-left text-muted\">用户下载附件扣除的";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")), "html", null, true);
        echo "会在扣除50%之后添加到您的账户
          </div>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"sure\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:upload-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  124 => 35,  119 => 33,  114 => 30,  111 => 29,  99 => 26,  94 => 25,  83 => 24,  78 => 23,  72 => 22,  66 => 21,  63 => 20,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  39 => 11,  33 => 10,  27 => 7,  19 => 1,);
    }
}
