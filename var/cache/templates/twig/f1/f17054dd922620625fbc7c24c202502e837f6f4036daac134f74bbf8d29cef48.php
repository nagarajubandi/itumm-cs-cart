<?php

/* __string_template__53b7798cbf1c086cb6374fb570e5af4c3dd06187fb5e7104b57b0c7f026871e8 */
class __TwigTemplate_f425ab926aff734b5cd956b15eb152b9fa45509c288562e736a5a962ac9065f0 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.payout_approved_text", array("[amount]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "amount", array()), "[date]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "date", array())));
        echo ".
";
        // line 3
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__53b7798cbf1c086cb6374fb570e5af4c3dd06187fb5e7104b57b0c7f026871e8";
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
/* {{ __("vendor_payouts.payout_approved_text", {"[amount]": payment.amount, "[date]": payment.date}) }}.*/
/* {{ snippet("footer") }}*/
