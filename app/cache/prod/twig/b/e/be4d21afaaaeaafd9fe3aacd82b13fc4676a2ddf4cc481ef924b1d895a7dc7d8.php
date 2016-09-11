<?php

/* TopxiaWebBundle:EsBar:layout.html.twig */
class __TwigTemplate_be4d21afaaaeaafd9fe3aacd82b13fc4676a2ddf4cc481ef924b1d895a7dc7d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink link-light\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  ";
        // line 3
        $this->displayBlock('esBarTitle', $context, $blocks);
        // line 6
        echo "</div>

<div class=\"bar-main-body\">
  ";
        // line 9
        $this->displayBlock('esBarBody', $context, $blocks);
        // line 12
        echo "</div>
";
    }

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
    }

    // line 9
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  47 => 9,  42 => 4,  39 => 3,  34 => 12,  32 => 9,  27 => 6,  25 => 3,  21 => 1,);
    }
}
