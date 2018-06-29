<?php

/* __string_template__0a63490bc6f9066432b59f509c3f7442d7aae2622c9d1dd1c0a450aae13637f6 */
class __TwigTemplate_4d3c811362e13ccb343cc5503b34af1cb78681759f8d738af043c5eb3b91bbfd extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.payout_declined_text", array("[amount]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "amount", array()), "[date]" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "date", array())));
        echo ".
";
        // line 3
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__0a63490bc6f9066432b59f509c3f7442d7aae2622c9d1dd1c0a450aae13637f6";
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
/* {{ __("vendor_payouts.payout_declined_text", {"[amount]": payment.amount, "[date]": payment.date}) }}.*/
/* {{ snippet("footer") }}*/
