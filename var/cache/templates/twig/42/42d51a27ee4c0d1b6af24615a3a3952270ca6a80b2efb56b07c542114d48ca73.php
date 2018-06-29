<?php

/* __string_template__712a7a994862667c867ced23a9631847817d3ce905a9be0089877a4d969f0fc6 */
class __TwigTemplate_d87f2a8290062042dbf43eafd1644d8fe574eac5b044fc80f97b6a5a51bcb3a0 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.revenue_exceeded_text", array("[vendor]" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company", array()), "[href]" => (isset($context["company_url"]) ? $context["company_url"] : null), "[plan]" => $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "plan", array())));
        echo "
";
        // line 3
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__712a7a994862667c867ced23a9631847817d3ce905a9be0089877a4d969f0fc6";
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
/* {{ __("vendor_plans.revenue_exceeded_text", {"[vendor]": company.company, "[href]": company_url, "[plan]": plan.plan}) }}*/
/* {{ snippet("footer") }}*/
