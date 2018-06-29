<?php

/* __string_template__f2f0115499b540095faed89c49491e44b285626e694863ebaf391e2d819579b0 */
class __TwigTemplate_911f3fb67b2458995755b6a4508b9689e18cf081c3e246f86d891c4a17007063 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_payment");
    }

    public function getTemplateName()
    {
        return "__string_template__f2f0115499b540095faed89c49491e44b285626e694863ebaf391e2d819579b0";
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
/* {{ __("vendor_plans.plan_payment") }}*/
