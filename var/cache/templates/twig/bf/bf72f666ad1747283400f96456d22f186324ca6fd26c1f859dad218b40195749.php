<?php

/* __string_template__d0150cf56f579d8e41eea1b04ff8b9e6729549df031b14bd6f7be7a7524b6a71 */
class __TwigTemplate_a3adbc2dea347a69a0f695948b4d6bef843b80f3db838a591a880159ed2424a7 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_payouts.withdrawal_approved");
    }

    public function getTemplateName()
    {
        return "__string_template__d0150cf56f579d8e41eea1b04ff8b9e6729549df031b14bd6f7be7a7524b6a71";
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
/* {{ payment.vendor }}: {{ __("vendor_payouts.withdrawal_approved") }}*/
