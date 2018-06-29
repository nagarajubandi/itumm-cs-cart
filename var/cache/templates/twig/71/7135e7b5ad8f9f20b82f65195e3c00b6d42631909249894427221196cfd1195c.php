<?php

/* __string_template__50b8f1bb9d14385f8a626ad776aa4f4832590a96c39c941b794738cd137d6354 */
class __TwigTemplate_082ca5a2422908d3fad269064023968ca1122b902209d37c6786227f7309d72c extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.withdrawal_declined_text", array("[amount]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "amount", array()), "[date]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "date", array())));
        echo ".
";
        // line 3
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__50b8f1bb9d14385f8a626ad776aa4f4832590a96c39c941b794738cd137d6354";
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
/* {{ __("vendor_payouts.withdrawal_declined_text", {"[amount]": payment.amount, "[date]": payment.date}) }}.*/
/* {{ snippet("footer") }}*/
