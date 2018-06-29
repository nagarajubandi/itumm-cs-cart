<?php

/* __string_template__c133932a8b87b04216ade02811aac14c787ee4ffad90e7643e94df974b091bca */
class __TwigTemplate_30f1773024cf2fa81f3a12e5b9de67b78d0b66895fe464e266239f09a75d5e08 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
        echo ",
<br />
<br />
";
        // line 5
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.new_withdrawal_requested_text", array("[amount]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "amount", array()), "[requester]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "initiator", array())));
        echo ".
";
        // line 6
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.view_details");
        echo ": <a href=\"";
        echo (isset($context["accounting_url"]) ? $context["accounting_url"] : null);
        echo "\">";
        echo (isset($context["accounting_url"]) ? $context["accounting_url"] : null);
        echo "</a>
";
        // line 7
        if ($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "comments", array())) {
            // line 8
            echo "    <br />
    <br />
    ";
            // line 10
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.withdrawal_comments");
            echo ":
    <br />
    ";
            // line 12
            echo $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "comments", array());
            echo "
";
        }
        // line 14
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__c133932a8b87b04216ade02811aac14c787ee4ffad90e7643e94df974b091bca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  52 => 12,  47 => 10,  43 => 8,  41 => 7,  33 => 6,  29 => 5,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* {{ __("hello") }},*/
/* <br />*/
/* <br />*/
/* {{ __("vendor_payouts.new_withdrawal_requested_text", {"[amount]": payment.amount, "[requester]": payment.initiator}) }}.*/
/* {{ __("vendor_payouts.view_details") }}: <a href="{{ accounting_url }}">{{ accounting_url }}</a>*/
/* {% if payment.comments %}*/
/*     <br />*/
/*     <br />*/
/*     {{ __("vendor_payouts.withdrawal_comments") }}:*/
/*     <br />*/
/*     {{ payment.comments }}*/
/* {% endif %}*/
/* {{ snippet("footer") }}*/
