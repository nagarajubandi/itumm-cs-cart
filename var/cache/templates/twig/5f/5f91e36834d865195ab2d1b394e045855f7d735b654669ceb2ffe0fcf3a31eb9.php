<?php

/* __string_template__c2a65a00ffd88c68a9292736297a779ee00bef01b8d620d81f011b6f2b7eadfc */
class __TwigTemplate_66c21a3a6d74e33008809103698224cd1a0f4b0dbe9ec381d076b67cd0a87fcd extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_has_been_changed");
    }

    public function getTemplateName()
    {
        return "__string_template__c2a65a00ffd88c68a9292736297a779ee00bef01b8d620d81f011b6f2b7eadfc";
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
/* {{ __("vendor_plans.plan_has_been_changed") }}*/
