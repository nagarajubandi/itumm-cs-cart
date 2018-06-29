<?php

/* __string_template__e6425d9fa0224d5ab70f81c54ba3f8d137ace00d49c6975d253e8f6fdbffb6b3 */
class __TwigTemplate_d299858f489f4cea63b54e2e990ac277b4ce3cff863228441db26977cae369f8 extends Twig_Template
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
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_d_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__e6425d9fa0224d5ab70f81c54ba3f8d137ace00d49c6975d253e8f6fdbffb6b3";
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
/* {{ company_name }}: {{ __("change_order_status_d_subj", {"[order]": order_info.order_id}) }}*/
