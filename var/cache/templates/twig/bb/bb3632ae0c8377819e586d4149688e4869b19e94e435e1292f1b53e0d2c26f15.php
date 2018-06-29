<?php

/* __string_template__b8b81b9db54fb4ebb49041facf09fa9580587a4672f82b0e12772a61ce81e5eb */
class __TwigTemplate_c07602d1662f84677a4813000d0c71ff86bc28ded1b0d65b1deaf3420cfd19e0 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_payment_text", array("[plan]" => $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "plan", array()), "[price]" => $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "price", array()), "[href]" => (isset($context["url"]) ? $context["url"] : null)));
        echo "
<br /><br />
";
        // line 4
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "vendorplans.plandetails");
        echo "
";
        // line 5
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__b8b81b9db54fb4ebb49041facf09fa9580587a4672f82b0e12772a61ce81e5eb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* {{ __("vendor_plans.plan_payment_text", {"[plan]": plan.plan, "[price]": plan.price, "[href]": url}) }}*/
/* <br /><br />*/
/* {{ snippet("vendorplans.plandetails") }}*/
/* {{ snippet("footer") }}*/
