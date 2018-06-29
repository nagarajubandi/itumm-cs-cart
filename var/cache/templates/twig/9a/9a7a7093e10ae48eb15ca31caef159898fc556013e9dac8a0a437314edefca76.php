<?php

/* __string_template__6aa74e7403fa17e604ccf882ae032eb31a7e7de3595926491fc074c1d48fb06b */
class __TwigTemplate_988b759b9f4b254e8502a6bd8c7baaf0f2f6b84ea2d026d47f07d9bc16d6d47c extends Twig_Template
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
        echo "<p>CGST  :<span style=\"font-weight: 600;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tax_cgst", array());
        echo "</span><br></p>
<p>SGST  :<strong style=\"font-weight:600;\">";
        // line 2
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tax_sgst", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__6aa74e7403fa17e604ccf882ae032eb31a7e7de3595926491fc074c1d48fb06b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <p>CGST  :<span style="font-weight: 600;">{{ p.tax_cgst }}</span><br></p>*/
/* <p>SGST  :<strong style="font-weight:600;">{{ p.tax_sgst }}</strong></p>*/
