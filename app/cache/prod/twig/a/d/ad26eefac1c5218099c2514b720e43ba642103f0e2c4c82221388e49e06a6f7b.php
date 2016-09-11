<?php

/* ClassroomBundle:Classroom:sign.html.twig */
class __TwigTemplate_ad26eefac1c5218099c2514b720e43ba642103f0e2c4c82221388e49e06a6f7b extends Twig_Template
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
        echo "<div class=\"panel panel-default class-signin\">
  <div class=\"panel-body\">
    <div id=\"classroom-sign\"  data-records=\"";
        // line 3
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_signed_records", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\" data-signurl=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_sign", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\" >
      <i class=\"es-icon es-icon-today\"></i>
      ";
        // line 5
        if (isset($context["isSignedToday"])) { $_isSignedToday_ = $context["isSignedToday"]; } else { $_isSignedToday_ = null; }
        if ( !$_isSignedToday_) {
            // line 6
            echo "        <span class=\"date\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m"), "html", null, true);
            echo "月";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
            echo "日</span>
        <!-- <br> -->
        <!-- 星期";
            // line 8
            if (isset($context["week"])) { $_week_ = $context["week"]; } else { $_week_ = null; }
            echo twig_escape_filter($this->env, $_week_, "html", null, true);
            echo " -->
      ";
        } else {
            // line 10
            echo "        <span class=\"date\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m"), "html", null, true);
            echo "月";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
            echo "日</span>
        <!-- <br>漏签<span style=\"color:red;\">";
            // line 11
            if (isset($context["notSign"])) { $_notSign_ = $context["notSign"]; } else { $_notSign_ = null; }
            echo twig_escape_filter($this->env, $_notSign_, "html", null, true);
            echo "</span>天 -->
      ";
        }
        // line 13
        echo "      <div id=\"sign\">
        ";
        // line 14
        if (isset($context["isSignedToday"])) { $_isSignedToday_ = $context["isSignedToday"]; } else { $_isSignedToday_ = null; }
        if ( !$_isSignedToday_) {
            // line 15
            echo "          <div class=\"sign-area\"  data-role=\"sign\">
            <a class=\"btn-signin\" href=\"javascript:;\">
              签到
            </a>
          </div>
        ";
        } else {
            // line 21
            echo "          <div class=\"sign-area\" data-role=\"signed\" onclick=\"return false;\" >
            <a class=\"btn-signin after\" >已签到
            <br>连续";
            // line 23
            if (isset($context["userSignStatistics"])) { $_userSignStatistics_ = $context["userSignStatistics"]; } else { $_userSignStatistics_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_userSignStatistics_, "keepDays", array()), "html", null, true);
            echo "天</a>
          </div>
        ";
        }
        // line 26
        echo "      </div>
      <div class=\"sign_main\" style=\"display:none\">
        <div class=\"\">
          <div class=\"calendar_title_month clearfix\">
            <span class=\"pull-left glyphicon glyphicon-chevron-left title-margin\" data-role=\"previous\"></span>
            <span class=\"pull-right glyphicon glyphicon-chevron-right title-margin disabled-next\" data-role=\"next\"></span>
            <div class=\"text-center title-month title-margin\" data-time=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y/m"), "html", null, true);
        echo "\" id=\"title-month\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y年m月"), "html", null, true);
        echo "
            </div>
          </div>
          
          <table class=\"sign_succ_table \">
            <thead align=\"center\">
              <tr class=\"sign_succ_canlerdar_head\">
                <td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td>
              </tr>
            </thead>
            <tbody align=\"center\" class=\"sign_succ_canlerdar_days j_canlerdar_days\">
            </tbody>
          </table>
        </div>
        <div class=\"sign_tip_boards\">
          <div class=\"mlm mtm\">
            <p class=\" text-muted\">签到排名：今日第<span class=\"today-rank\"></span>个签到</p>
          </div>
          <div class=\"mlm\">
            <p class=\" text-muted\">今日签到人数：<span class=\"signed-number\"></span></p>
          </div>
          <div class=\"mlm\">
            <p class=\" text-muted\">连续签到：<span class=\"keep-days\"></span>天</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:sign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  87 => 26,  80 => 23,  76 => 21,  68 => 15,  65 => 14,  62 => 13,  56 => 11,  49 => 10,  43 => 8,  35 => 6,  32 => 5,  23 => 3,  19 => 1,);
    }
}
