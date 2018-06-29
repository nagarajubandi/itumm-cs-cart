<?php

/* __string_template__82d0532adbc7c8dab001c21a3704dd0144189999b214bd13aabdfc07495eb5ac */
class __TwigTemplate_1767f887491264f39a26cb74b6f741b50e7d198382a1a49b94621756c2062323 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.withdrawal_declined");
    }

    public function getTemplateName()
    {
        return "__string_template__82d0532adbc7c8dab001c21a3704dd0144189999b214bd13aabdfc07495eb5ac";
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
/* {{ payment.vendor }}: {{ __("vendor_payouts.withdrawal_declined") }}*/
