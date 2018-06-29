<?php

/* __string_template__086848da9a1beffc0086037839ce335107f48c45e35d561aac4abee8d873e7d5 */
class __TwigTemplate_350ee8b6a31d9a647b17b11b71de0bea2a77015c3ef16df5b48009cf470e58d0 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 2
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.withdrawal_approved_text", array("[amount]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "amount", array()), "[date]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "date", array())));
        echo ".
";
        // line 3
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__086848da9a1beffc0086037839ce335107f48c45e35d561aac4abee8d873e7d5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* {{ __("vendor_payouts.withdrawal_approved_text", {"[amount]": payment.amount, "[date]": payment.date}) }}.*/
/* {{ snippet("footer") }}*/
