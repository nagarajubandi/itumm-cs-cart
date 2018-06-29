<?php

/* __string_template__8835aabf9a677d38ddbf09b7baffefdf9701183a94f24aab3d19ae5348fe08dd */
class __TwigTemplate_1c56f95727a635d32ce6453110c84f36da9d29f5493d68274398b1c3e860d95e extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.new_withdrawal_requested");
    }

    public function getTemplateName()
    {
        return "__string_template__8835aabf9a677d38ddbf09b7baffefdf9701183a94f24aab3d19ae5348fe08dd";
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
/* {{ payment.vendor }}: {{ __("vendor_payouts.new_withdrawal_requested") }}*/
