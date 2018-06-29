<?php

/* __string_template__eb1656763bf19178266c8a6a2a71713be1f7de4fe794f0fe2bdfa762e1707820 */
class __TwigTemplate_51b8edacf7a47689389f421cffb047088658e74eb3e326639fe7be51dea48b41 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.payout_declined");
    }

    public function getTemplateName()
    {
        return "__string_template__eb1656763bf19178266c8a6a2a71713be1f7de4fe794f0fe2bdfa762e1707820";
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
/* {{ payment.vendor }}: {{ __("vendor_payouts.payout_declined") }}*/
