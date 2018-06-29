<?php

/* __string_template__a3bbb3c5e13e5b82da2282bc2c3637825a26718b49a7bf7021c7f664500d5297 */
class __TwigTemplate_960b000961c8d24f2103f4d8fa3cf37be46b254edaec0296f16d77a3950dbb3e extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.revenue_exceeded_subj");
    }

    public function getTemplateName()
    {
        return "__string_template__a3bbb3c5e13e5b82da2282bc2c3637825a26718b49a7bf7021c7f664500d5297";
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
/* {{ __("vendor_plans.revenue_exceeded_subj") }}*/
