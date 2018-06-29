<?php

/* __string_template__a616854937063f49252a64c9b15c2943a8fbe6b11eeb6202a4540bd7377dc7c6 */
class __TwigTemplate_5917fc13eb5a72dacac69f580f011688f81d0a31071c912f6758bfce14d2c8ad extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_c_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__a616854937063f49252a64c9b15c2943a8fbe6b11eeb6202a4540bd7377dc7c6";
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
/* {{ company_name }}: {{ __("change_order_status_c_subj", {"[order]": order_info.order_id}) }}*/
