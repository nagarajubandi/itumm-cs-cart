<?php

/* __string_template__05f1e7644550e9a3609c3695d094cc96da406f2e9b1888f008fdf3e2603a62b6 */
class __TwigTemplate_8fd8398a4a5f70acc54f3183c86f56b4763d4e7c1268403c23190fbaef8523e1 extends Twig_Template
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
        echo $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "vendor", array());
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.payout_approved");
    }

    public function getTemplateName()
    {
        return "__string_template__05f1e7644550e9a3609c3695d094cc96da406f2e9b1888f008fdf3e2603a62b6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ payment.vendor }}: {{ __("vendor_payouts.payout_approved") }}*/
